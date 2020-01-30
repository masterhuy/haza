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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsHelper.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/params.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/styling.php');
include_once(_PS_MODULE_DIR_.'jmsthemesetting/jmsthemesetting.php');
class JmsPageBuilder extends Module
{
    private $_themeskins = array();
    private $_producthovers = array();
    private $_productboxs = array();
    private $fields_options = array();
    public function __construct()
    {
        $this->name = 'jmspagebuilder';
        $this->tab = 'front_office_features';
        $this->version = '3.1.1';
        $this->author = 'joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->id_homepage = Configuration::get('JPB_HOMEPAGE');
        parent::__construct();
        $this->displayName = $this->trans('Jms Page Builder', array(), 'Modules.JmsPageBuilder');
        $this->description = $this->l('Page Builder For Prestashop.');
        $this->json_path = _PS_ROOT_DIR_.'/modules/jmspagebuilder/json/';
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
    }

    public function install()
    {
        if (parent::install() && $this->registerHook('header') && $this->registerHook('displayBackOfficeHeader') && $this->registerHook('displayHome') && $this->registerHook('displayTop') && $this->registerHook('filterCmsContent')) {
            $res = true;
            $res &= Configuration::updateValue('JPB_RTL', '0');
            $res &= Configuration::updateValue('JPB_CONVERTURL', 0);
            include(dirname(__FILE__).'/install/jmsinstall.php');
            $install_class = new JmsPageBuilderInstall();
            $install_class->createTable();
            $install_class->installDemo();

            $tab_parent_id = (int)Tab::getIdFromClassName('PRESTAWORK');
            if($tab_parent_id <= 0) {
                $tab = new Tab();
                $tab->id_parent = 0;
                $tab->active = 1;
                $tab->class_name = "PRESTAWORK";
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'PRESTAWORK';
                }
                if(!$tab->add()) return false;
            }
            if(((int)Tab::getIdFromClassName('PRESTAWORK') > 0) && ((int)Tab::getIdFromClassName('AdminJmspagebuilderDashboard') <= 0)) {
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmspagebuilderDashboard";
                $tab->position = 3;
                $tab->icon = 'description';
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Page Builder';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('PRESTAWORK');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                //add pages menu
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmspagebuilderPages";
                $tab->position = 0;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Pages';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('AdminJmspagebuilderDashboard');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                //add setting menu
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmspagebuilderSetting";
                $tab->position = 1;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Setting';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('AdminJmspagebuilderDashboard');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                //add media menu
                $tab = new Tab();
                $tab->active = 0;
                $tab->class_name = "AdminJmspagebuilderMedia";
                $tab->position = 2;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Media';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('AdminJmspagebuilderDashboard');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
            }

            return $res;
        }
        return false;
    }

    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            $res = true;
            $res &= Configuration::deleteByName('JPB_RTL');
            $res &= Configuration::deleteByName('JPB_CONVERTURL');
            $res &= Configuration::deleteByName('JPB_HOMEPAGE');
            $sql = array();
            include(dirname(__FILE__).'/install/uninstall.php');
            foreach ($sql as $s) {
                Db::getInstance()->execute($s);
            }
            $id_tab = (int)Tab::getIdFromClassName('AdminJmspagebuilderDashboard');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmspagebuilderPages');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmspagebuilderSetting');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmspagebuilderMedia');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            return $res;
        }
        return false;
    }

    public function getCurrentPage($id = 0)
    {
        $id_shop = $this->context->shop->id;
        if ($id) {
            $page_id = $id;
        } elseif (Tools::getValue('id_page')) {
            $page_id = Tools::getValue('id_page');
        } else {
            $page_id = Configuration::get('JPB_HOMEPAGE');
        }
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT ph.* FROM '._DB_PREFIX_.'jmspagebuilder_pages ph LEFT JOIN '._DB_PREFIX_.'jmspagebuilder p ON ph.`id_page` = p.`id_page` WHERE ph.`id_page` = '.$page_id);
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

    private function resetSetting()
    {
        $this->context->cookie->__unset('jpb_homepage');
        $this->context->cookie->__unset('jpb_rtl');

    }

    public function hookDisplayBackOfficeHeader()
    {
        if ($this->context->controller->controller_name == 'AdminCmsContent') {
            $this->context->controller->addJS($this->_path . 'views/js/cmsadd.js');
            global $kernel;
            $request = $kernel->getContainer()->get('request_stack')->getCurrentRequest();
            if (!isset($request->attributes)) {
                return;
            }
            $idPage = (int) $request->attributes->get('cmsPageId');
            $pages = JmsPageBuilderHelper::getPages('1');
            $this->smarty->assign(array(
                'pages' => $pages,
            ));
            return $this->fetch(_PS_MODULE_DIR_ .'/'. $this->name . '/views/templates/hook/pagebuilder_cmsbutton.tpl');
        }
    }
    public function getPageBody($id) {
        $page = $this->getCurrentPage($id);
        if (!$page) return '';
        $params = $page['params'];
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
        $this->smarty->assign(array(
            'rows' => $bresult,
            'root_url' => $this->root_url
        ));
         return $this->display(__FILE__, 'jmspagebuilder_body.tpl');
    }
    public function hookFilterCmsContent($a)
    {
        $match = array();
        $pattern = '/\[jmspagebuilder\s+page_id=(\d+)]/';
        if (preg_match_all($pattern, $a['object']['content'], $match)) {
            $this->hookDisplayHeader();
            $jmsthemesettingInstance = Module::getInstanceByName('jmsthemesetting');
            $jmsthemesettingInstance->hookDisplayHeader();
            $this->context->smarty->assign('configuration', $this->getTemplateVarConfiguration());
            foreach ($match[0] as $key => $fullmatch) {
                $a['object']['content'] = str_replace($fullmatch, $this->getPageBody($match[1][$key]), $a['object']['content']);
            }
        }
        return $a;
    }
    public function getTemplateVarConfiguration()
    {
        $quantity_discount_price = Configuration::get('PS_DISPLAY_DISCOUNT_PRICE');

        return array(
            'display_prices_tax_incl' => (bool) (new TaxConfiguration())->includeTaxes(),
            'taxes_enabled' => (bool) Configuration::get('PS_TAX'),
            'low_quantity_threshold' => (int) Configuration::get('PS_LAST_QTIES'),
            'is_b2b' => (bool) Configuration::get('PS_B2B_ENABLE'),
            'is_catalog' => (bool) Configuration::isCatalogMode(),
            'show_prices' => (bool) Configuration::showPrices(),
            'opt_in' => array(
                'partner' => (bool) Configuration::get('PS_CUSTOMER_OPTIN'),
            ),
            'return_enabled' => (int) Configuration::get('PS_ORDER_RETURN'),
            'number_of_days_for_return' => (int) Configuration::get('PS_ORDER_RETURN_NB_DAYS'),
        );
    }

    public function hookDisplayHeader()
    {
        if ($this->context->cookie->jpb_homepage != '') {
            $jpb_homepage = $this->context->cookie->jpb_homepage;
        } else {
            $jpb_homepage = Configuration::get('JPB_HOMEPAGE');
        }
        if ($this->context->cookie->jpb_rtl != '') {
            $jpb_rtl = $this->context->cookie->jpb_rtl;
        } else {
            $jpb_rtl = Configuration::get('JPB_RTL');
        }
        $homepage = $this->getCurrentPage();
        $this->context->controller->registerStylesheet('jmspb-bootstrap-css', 'modules/jmsthemesetting/views/css/custom.css', ['media' => 'all', 'priority' => 200]);
        $this->context->controller->registerStylesheet('jmspb-owlcarousel-css', 'modules/'.$this->name.'/views/css/owl.carousel.css', ['media' => 'all', 'priority' => 2]);
        $this->context->controller->registerStylesheet('jmspb-animate', 'modules/'.$this->name.'/views/css/animate.css', ['media' => 'all', 'priority' => 1]);
        $this->context->controller->addJS('modules/'.$this->name.'/views/js/owl.carousel.js', 'all');
        $this->context->controller->addJS('modules/'.$this->name.'/views/js/jquery.plugin.js', 'all');
        $this->context->controller->addJS('modules/'.$this->name.'/views/js/jquery.countdown.js', 'all');
        $this->context->controller->addJqueryPlugin('fancybox');

        if ($homepage['css_file']) {
            $this->context->controller->registerStylesheet('jmspb-home-css', '/assets/css/'.$homepage['css_file'], ['media' => 'all', 'priority' => 1000]);
        }
        if ($homepage['js_file']) {
            $this->context->controller->registerJavascript('jmspb-home-js', '/assets/js/'.$homepage['js_file'], ['position' => 'bottom', 'priority' => 200]);
        }
        if ((int)$jpb_rtl || $this->context->language->is_rtl) {
            $this->context->controller->registerStylesheet('jmspb-home-rtl', '/assets/css/rtl.css', ['media' => 'all', 'priority' => 1000]);
			$this->context->controller->registerStylesheet('jmspb-rtl-page', '/assets/css/rtl-'.$homepage['css_file'], ['media' => 'all', 'priority' => 1000]);
        }
        $this->context->smarty->assign('themename', _THEME_NAME_);
        $this->context->smarty->assign('jpb_homepage', $jpb_homepage);
        $this->context->smarty->assign('jpb_pageclass', $homepage['page_class']);
        $this->context->smarty->assign('jpb_rtl', $jpb_rtl);
    }
    public function hookdisplayHome()
    {
        if ((int)$this->id_homepage == 0) {
            return "You must select homepage!";
        }
        $homepage = $this->getCurrentPage();
        $params = $homepage['params'];
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
        $this->smarty->assign(array(
            'rows' => $bresult,
            'root_url' => $this->root_url
        ));
        return $this->display(__FILE__, 'jmspagebuilder_body.tpl');
    }
    /*public function hookModuleRoutes($params)
    {
        $html = '';
        return array(
            'jmspagebuilder-page' => array(
                'controller' => 'page',
                'rule' => '/page/{slug}'.$html,
                'keywords' => array(
                    'slug' =>   array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'jmspagebuilder'
                )
            )
        );
    }*/
}
