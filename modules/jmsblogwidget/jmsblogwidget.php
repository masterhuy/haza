<?php
/**
* 2007-2019 PrestaShop
*
* Jms Blog Widget
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_.'jmsblog/class/JmsBlogHelper.php');
include_once(_PS_MODULE_DIR_.'jmsblog/jmsblog.php');
class JmsBlogWidget extends Module
{
    public function __construct()
    {
        $this->name = 'jmsblogwidget';
        $this->tab = 'front_office_features';
        $this->version = '2.5.5';
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->child = array();
        $this->gens = array();
        $this->treearr = array();
        $this->menu = '';
        parent::__construct();

        $this->displayName = $this->l('Jms Blog Widget');
        $this->description = $this->l('Home and Sidebar Widget For Jms Blog.');
    }

    public function install()
    {
        $res = true;
        if (parent::install() && $this->registerHook('header')) {
            return true;
        }
        return false;
    }
    public function uninstall()
    {
        if (parent::uninstall()) {
            return true;
        }
        return true;
    }

    public function getConfigFieldsValues()
    {
        return array(
            'JBW_SB_ITEM_SHOW' => Tools::getValue('JBW_SB_ITEM_SHOW', Configuration::get('JBW_SB_ITEM_SHOW')),
            'JBW_SB_SHOW_POPULAR' => Tools::getValue('JBW_SB_SHOW_POPULAR', Configuration::get('JBW_SB_SHOW_POPULAR')),
            'JBW_SB_SHOW_RECENT' => Tools::getValue('JBW_SB_SHOW_RECENT', Configuration::get('JBW_SB_SHOW_RECENT')),
            'JBW_SB_SHOW_LATESTCOMMENT' => Tools::getValue('JBW_SB_SHOW_LATESTCOMMENT', Configuration::get('JBW_SB_SHOW_LATESTCOMMENT')),
            'JBW_SB_COMMENT_LIMIT' => Tools::getValue('JBW_SB_COMMENT_LIMIT', Configuration::get('JBW_SB_COMMENT_LIMIT')),
            'JBW_SB_SHOW_CATEGORYMENU' => Tools::getValue('JBW_SB_SHOW_CATEGORYMENU', Configuration::get('JBW_SB_SHOW_CATEGORYMENU')),
            'JBW_SB_SHOW_ARCHIVES' => Tools::getValue('JBW_SB_SHOW_ARCHIVES', Configuration::get('JBW_SB_SHOW_ARCHIVES')),
        );
    }
    public function hookHeader($params)
    {
        $this->context->controller->addCSS($this->context->shop->getBaseURL().'modules/jmsblog/views/css/style.css', 'all');
    }

    public function delptree($parent, $level, $tree)
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $sql = 'SELECT a.*,b.`title`, b.`alias` FROM '._DB_PREFIX_.'jmsblog_categories AS a ';
        $sql .= 'INNER JOIN '._DB_PREFIX_.'jmsblog_categories_lang AS b ON a.`category_id` = b.`category_id` ';
        $sql .= 'WHERE a.`active` = 1 AND a.`parent` ='.$parent.' AND b.`id_lang` ='.$id_lang;
        $sql .= ' ORDER BY `ordering`';
        $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        foreach ($rows as $v) {
            $v['level'] = $level + 1;
            $this->treearr[] = $v;
            $this->delptree($v['category_id'], $level + 1, $tree);
        }
    }
    public function getMenuTree($menus)
    {
        $tree = array();
        foreach ($menus as $v) {
            $level = 0;
            $v['level'] = $level;
            $this->treearr[] = $v;
            $this->delptree($v['category_id'], $level, $tree);
        }
        $tree = array_slice($this->treearr, 0);
        return $tree;
    }
    public function genMenu($category)
    {
        if (!in_array($category['category_id'], $this->gens)) {
            $this->menu .= '<li';
            if ($category['level'] == 0 && isset($this->child[$category['category_id']])) {
                $this->menu .= ' class="haschild"';
            }
            $this->menu .= '>';
            $params = array(
                'category_id' => $category['category_id'],
                'slug' => $category['alias']
            );
            $_link = JmsBlog::getPageLink('jmsblog-category', $params);
            $this->menu .= '<a class="collapsed" href="'.$_link.'" data-toggle="collapse" data-target="#child">';
            $this->menu .=  $category['title'];
            if ($category['level'] == 0 && isset($this->child[$category['category_id']])) {
                $this->menu .= '<i class="fal fa-chevron-down"></i>';
                $this->menu .= '<i class="fal fa-chevron-up"></i>';
            }
            $this->menu .= '</a>';
            if (isset($this->child[$category['category_id']])) {
                $this->menu .='<ul id="child" class="collapse">';
                $this->genSubs($this->child[$category['category_id']]);
                $this->menu .='</ul>';
            }
            $this->menu .= '</li>';
        }
        $this->gens[] = $category['category_id'];
    }
    public function genSubs($subs)
    {
        foreach ($subs as $sub) {
            $this->genMenu($sub);
        }
    }
    public function genCategoryMenu()
    {
        $context = Context::getContext();
        $id_lang = $context->language->id;
        $sql = '
            SELECT hss.`category_id` as category_id, hssl.`image`, hss.`ordering`, hss.`active`, hssl.`title`, hss.`parent`, hssl.`alias`
            FROM '._DB_PREFIX_.'jmsblog_categories hss
            LEFT JOIN '._DB_PREFIX_.'jmsblog_categories_lang hssl ON (hss.`category_id` = hssl.`category_id`)
            WHERE hssl.`id_lang` = '.(int)$id_lang.
            ' AND hss.`parent` = 0
            ORDER BY hss.`category_id` ASC';
        $rows = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        $categories = $this->getMenuTree($rows);
        foreach ($categories as &$category) {
            $parent = isset($this->child[$category['parent']]) ? $this->child[$category['parent']] : array();
            $parent[] = $category;
            $this->child[$category['parent']] = $parent;
        }
        foreach ($categories as &$category) {
            $this->genMenu($category);
        }
        return $this->menu;
    }
    public function hookdisplayLeftColumn($params)
    {
        $widget_setting = $this->getConfigFieldsValues();
        $category_menu = $this->genCategoryMenu();
        $archives = JmsBlogHelper::getArchives();
        $popularpost = JmsBlogHelper::getPopularPost();
        $latestpost = JmsBlogHelper::getLatestPost();
        $latestcomment = JmsBlogHelper::getLatestComment();
        for ($i = 0; $i < count($latestcomment); $i++) {
            $latestcomment[$i]['comment'] = JmsBlogHelper::genIntrotext($latestcomment[$i]['comment'], $widget_setting['JBW_SB_COMMENT_LIMIT']);
        }
        $this->smarty->assign(
            array(
                'category_menu' => $category_menu,
                'archives' => $archives,
                'popularpost' => $popularpost,
                'latestpost' => $latestpost,
                'latestcomment' => $latestcomment,
                'widget_setting' => $widget_setting,
                'image_baseurl' => $this->context->shop->getBaseURL().'modules/jmsblog/views/img/'
            )
        );
        return $this->display(__FILE__, 'sidebar-widget.tpl');
    }
	public function hookdisplayRightColumn($params)
    {
        return $this->hookdisplayLeftColumn($params);
    }
}
