<?php
/**
* 2007-2019 PrestaShop
*
* Jms Mega Menu module
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsMenuItem extends ObjectModel
{
    public $name;
    public $menu_id;
    public $active;
    public $parent_id;
    public $target;
    public $value;
    public $html_content;
    public $type;
	  public $menulink;
    public $params;
    public $ordering;

    public static $definition = array(
        'table' => 'jmsmegamenu_items',
        'primary' => 'mitem_id',
        'multilang' => true,
        'fields' => array(
            'menu_id'  =>       array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'parent_id'  =>     array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'ordering'  =>      array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => true),
            'type'      =>      array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => true),
            'target'        =>  array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => true),
            'html_content' =>   array('type' => self::TYPE_HTML, 'validate' => 'isString'),
            'value'         =>  array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => false),
            'active'    =>      array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'name' =>           array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true, 'size' => 255),
			      'menulink' =>       array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => false, 'size' => 255),
            'params'     =>     array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'required' => false),
        )
    );

    public function __construct($mitem_id = null, $id_lang = null)
    {
        parent::__construct($mitem_id, $id_lang);
    }

    public function add($autodate = true, $null_values = false)
    {
        $res = true;
        $res = parent::add($autodate, $null_values);
        return $res;
    }

    public function delete()
    {
        $res = true;
        $res &= $this->reOrderPositions();
        $res &= parent::delete();
        return $res;
    }


    public function reOrderPositions()
    {
        $mitem_id = $this->id;
        $context = Context::getContext();
        $sql = '
            SELECT MAX(`ordering`) as ordering
            FROM `'._DB_PREFIX_.'jmsmegamenu_items`
            WHERE `parent_id` = '.$this->parent_id;
        $max = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        if ((int)$max == (int)$mitem_id) {
            return true;
        }
        $sql = '
            SELECT a.`ordering` as ordering, a.`mitem_id` as mitem_id
            FROM `'._DB_PREFIX_.'jmsmegamenu_items` a
            WHERE a.`parent_id` = '.$this->parent_id.' AND a.`ordering` > '.(int)$this->ordering;

        $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);

        foreach ($rows as $row) {
            $current_menu = new JmsMenuItem($row['mitem_id']);
            --$current_menu->ordering;
            $current_menu->update();
            unset($current_menu);
        }

        return true;
    }
}
