<?php
/**
* 2007-2019 PrestaShop
*
* Jms Blog
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmspagebuilderPageModuleFrontController extends ModuleFrontController
{
    public $ssl = true;
    public $display_column_left = false;
    /**
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        $id_page    = (int)Tools::getValue('id_page');
        $_page = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT ph.* FROM '._DB_PREFIX_.'jmspagebuilder_pages ph LEFT JOIN '._DB_PREFIX_.'jmspagebuilder p ON ph.`id_page` = p.`id_page` WHERE ph.`id_page` = '.$id_page);
        $params = $_page['params'];
        $rows = (array)Tools::jsonDecode($params);
        $bresult = array();
        $b_index = 0;
        foreach ($rows as $key => $row) {
            if (($row->settings->hook == 'body' || $row->settings->hook == '') && ((isset($row->settings->active) && (int)$row->settings->active == 1) || !isset($row->settings->active))) {
                $bresult[] = $row;
                $columns = $rows[$key]->cols;
                foreach ($columns as $ckey => $column) {
                    $addons = $column->addons;
                    foreach ($addons as $akey => $addon) {
                        $bresult[$b_index]->cols[$ckey]->addons[$akey]->return_value = $this->loadAddon($addon);
                    }
                }
                $b_index++;
            }
        }
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
        $this->context->smarty->assign(array(
            'rows' => $bresult,
            'root_url' => $this->root_url
        ));
        $this->setTemplate('module:jmspagebuilder/views/templates/front/page.tpl');
    }
    public function loadAddon($addon)
    {
        if (isset($addon->settings->active) && (int)$addon->settings->active == 0) {
            return;
        }
        if ($addon->type == 'module') {
            return JmsPageBuilderHelper::MNexec($addon->settings->hook, $addon->settings->modulename);
        } else {
            $addonfile = 'addon'.$addon->type.'.php';
            $addonclass = 'JmsAddon'.Tools::ucfirst($addon->type);
            if (file_exists(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile)) {
                require_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile);
            }
            $addon_instance = new $addonclass();
            $addon_instance->root_url = JmsPageBuilderHelper::getRootUrl();
            return $addon_instance->returnValue($addon);
        }
    }
    /*public function getBreadcrumbLinks()
    {
        $id_page    = (int)Tools::getValue('id_page');
        $_page = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT ph.* FROM '._DB_PREFIX_.'jmspagebuilder_pages ph LEFT JOIN '._DB_PREFIX_.'jmspagebuilder p ON ph.`id_page` = p.`id_page` WHERE ph.`id_page` = '.$id_page);

        $params = array(
            'slug' => $_page['alias']
        );
        $_link = JmsBlog::getPageLink('jmspagebuilder-page', $params);
        $breadcrumb = parent::getBreadcrumbLinks();
        $breadcrumb['links'][] = array('title' => $_page['title'], 'url' => $_link );
        return $breadcrumb;
    }*/

}
