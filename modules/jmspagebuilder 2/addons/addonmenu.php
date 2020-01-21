<?php
/**
* 2007-2017 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}
include_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/addonbase.php');
if (file_exists(_PS_MODULE_DIR_.'jmsmegamenu/class/JmsMegaMenuHelper.php')) {
    include_once(_PS_MODULE_DIR_.'jmsmegamenu/class/JmsMegaMenuHelper.php');
}
class JmsAddonMenu extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'menu';
        $this->modulename = 'jmsmegamenu';
        $this->addontitle = 'Menu';
        $this->addondesc = 'Display Menu On Frontpage';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
        $this->_items = array();
        $this->gens = array();
    }
    public function getInputs()
    {
        $jmshelper = new JmsMegaMenuHelper();
        $menus = $jmshelper->getMenus();
        $inputs = array(
            array(
                'type' => 'select2',
                'name' => 'menu_id',
                'label' => $this->l('Select Menu to Show'),
                'lang' => '0',
                'desc' => 'Select Menu to Show.',
                'options' => $menus,
                'options_name' => array('menu_id','name'),
                'default' => ''
            ),
            array(
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
    public function returnValue($addon)
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $menu_id = $addon->fields[0]->value;
        $jmshelper = new JmsMegaMenuHelper();        
        $menu_html = $jmshelper->returnMenu($menu_id);

        $this->context->smarty->assign(
            array(
                'link' => $this->context->link,
                'menu_html' => $menu_html
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }

}
