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
        if (_JPB_THEMESKINS_) {
            $this->_themeskins = explode(",", _JPB_THEMESKINS_);
        }
        if (_JPB_PRODUCTHOVERS_) {
            $hover_strs = explode(",", _JPB_PRODUCTHOVERS_);
            foreach ($hover_strs as $hover_str) {
                $_fields = explode(":", $hover_str);
                $this->_producthovers[$_fields[0]] = $_fields[1];
            }
        }
        $this->displayName = $this->trans('Jms Page Builder', array(), 'Modules.JmsPageBuilder');
        $this->description = $this->l('Home Page Builder For Prestashop Theme.');
        $this->json_path = _PS_ROOT_DIR_.'/modules/jmspagebuilder/json/';
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
    }

    public function install()
    {
        if (parent::install() && $this->registerHook('header') && $this->registerHook('displayBackOfficeHeader') && $this->registerHook('displayHome') && $this->registerHook('displayTop') && $this->registerHook('displayFooter') && $this->registerHook('filterCmsContent')) {
            $res &= Configuration::updateValue('JPB_RTL', '0');
            $res &= Configuration::updateValue('JPB_SETTINGPANEL', 0);
            $res &= Configuration::updateValue('JPB_JCAROUSEL', 1);
            $res &= Configuration::updateValue('JPB_COUNTDOWN', 1);
            $res &= Configuration::updateValue('JPB_ANIMATE', 1);
			      $res &= Configuration::updateValue('JPB_FANCYBOX', 1);
            $res &= Configuration::updateValue('JPB_CONVERTURL', 0);
      			$res &= Configuration::updateValue('JPB_LOADINGSTYLE', 4);
            include(dirname(__FILE__).'/install/jmsinstall.php');
            $install_class = new JmsPageBuilderInstall();
            $install_class->createTable();
            $install_class->installDemo();
            $tab_parent_id = $this->getJmsModulesTab();
            $id_tab1 = $this->addTab('Jms Page Builder', 'dashboard', $tab_parent_id, 0);
            $this->addTab('Home Pages', 'homepages', $id_tab1);
            $this->addTab('Media', 'media', $id_tab1, 0, 0);
            $this->addTab('Setting', 'setting', $id_tab1);


            return $res;
        }
        return false;
    }

    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            $res &= Configuration::deleteByName('JPB_RTL');
            $res &= Configuration::deleteByName('JPB_SETTINGPANEL');
            $res &= Configuration::deleteByName('JPB_JCAROUSEL');
            $res &= Configuration::deleteByName('JPB_COUNTDOWN');
            $res &= Configuration::deleteByName('JPB_ANIMATE');
			      $res &= Configuration::deleteByName('JPB_FANCYBOX');
            $res &= Configuration::deleteByName('JPB_CONVERTURL');
            $sql = array();
            include(dirname(__FILE__).'/install/uninstall.php');
            foreach ($sql as $s) {
                Db::getInstance()->execute($s);
            }
            Configuration::deleteByName('JPB_HOMEPAGE');
            $this->removeTab('media');
            $this->removeTab('homepages');
            $this->removeTab('setting');
            $this->removeTab('dashboard');
            return $res;
        }
        return false;
    }
    private function getJmsModulesTab()
    {
        $result = Db::getInstance()->executeS('
            SELECT `id_tab`
            FROM `'._DB_PREFIX_.'tab`
            WHERE `class_name` = \'JMS-MODULES\' LIMIT 0,1
        ');
        if (count($result) > 0) {
            return $result[0]['id_tab'];
        }
        return $this->addTab('Jms Modules', 'JMS-MODULES');
    }

    private function addTab($title, $class_sfx = '', $parent_id = 0, $position = 0, $active = 1)
    {
        if ($parent_id > 0) {
            $class = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);
            $mod_name = $this->name;
        } else {
            $class = $class_sfx;
            $mod_name = 'jmsmodules';
        }
        @Tools::copy(_PS_MODULE_DIR_.$this->name.'/logo.gif', _PS_IMG_DIR_.'t/'.$class.'.gif');
        $_tab = new Tab();
        $_tab->class_name = $class;
        $_tab->module = $this->name;
        $_tab->id_parent = $parent_id;
        $_tab->position = $position;
        $_tab->active = $active;
        $langs = Language::getLanguages(false);
        foreach ($langs as $l) {
            $_tab->name[$l['id_lang']] = $title;
        }
        if ($parent_id == -1) {
            $_tab->id_parent = -1;
            $_tab->add();
        } else {
            $_tab->add(true, false);
        }
        return $_tab->id;
	}


    private function removeTab($class_sfx = '')
    {
        $tabClass = 'Admin'.Tools::ucfirst($this->name).Tools::ucfirst($class_sfx);
        $idTab = Tab::getIdFromClassName($tabClass);
        if ($idTab != 0) {
            $tab = new Tab($idTab);
            $tab->delete();
            return true;
        }
        return false;
    }

    public function getCurrentHomePage($id = 0)
    {
        $id_shop = $this->context->shop->id;
        if ($id) {
            $homepage_id = $id;
        } elseif ($this->context->cookie->jpb_homepage != '') {
            $homepage_id = $this->context->cookie->jpb_homepage;
        } else {
            $homepage_id = Configuration::get('JPB_HOMEPAGE');
        }
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT ph.* FROM '._DB_PREFIX_.'jmspagebuilder_homepages ph LEFT JOIN '._DB_PREFIX_.'jmspagebuilder p ON ph.`id_homepage` = p.`id_homepage` WHERE ph.`id_homepage` = '.$homepage_id);
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
        $this->context->controller->addCSS('http://localhost/prestashop17/jms_adiva/modules/jmspagebuilder/views/css/adminicon.css');
    }
    public function getHomepageBody($id) {
        $homepage = $this->getCurrentHomePage($id);
        if (!$homepage) return '';
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
    public function hookFilterCmsContent($a)
    {
        $match = array();
        $pattern = '/\[jmspagebuilder\s+homepage_id=(\d+)]/';
        if (preg_match_all($pattern, $a['object']['content'], $match)) {
            $this->hookDisplayHeader();
            foreach ($match[0] as $key => $fullmatch) {
                $a['object']['content'] = str_replace($fullmatch, $this->getHomepageBody($match[1][$key]), $a['object']['content']);
            }
        }
        return $a;
    }

    public function hookDisplayHeader()
    {
        if (Tools::isSubmit('settingpanel') && (int)(Tools::getValue('settingpanel')) == 1) {
            if (Tools::isSubmit('jpb_homepage')) {
                $this->context->cookie->jpb_homepage = Tools::getValue('jpb_homepage');
            }
            if (Tools::isSubmit('jpb_rtl')) {
                $this->context->cookie->jpb_rtl = Tools::getValue('jpb_rtl');
            }
            Tools::redirect($this->context->shop->getBaseURL());
        } elseif (Tools::isSubmit('settingreset')) {
            $this->resetSetting();
            Tools::redirect($this->context->shop->getBaseURL());
        } elseif ((int)configuration::get('JPB_SETTINGPANEL') == 0) {
            $this->resetSetting();
        }
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
        $homepage = $this->getCurrentHomePage();        
        $this->context->controller->registerStylesheet('jmspb-bootstrap-css', 'modules/jmsthemesetting/views/css/custom.css', ['media' => 'all', 'priority' => 200]);
        if ((int)configuration::get('JPB_JCAROUSEL')) {
            $this->context->controller->addJS('modules/'.$this->name.'/views/js/jquery.jcarousel.min.js', 'all');
            $this->context->controller->addJS('modules/'.$this->name.'/views/js/owl.carousel.js', 'all');
            $this->context->controller->registerStylesheet('jmspb-jcarousel-css', 'modules/'.$this->name.'/views/css/jcarousel.css', ['media' => 'all', 'priority' => 150]);
            $this->context->controller->registerStylesheet('jmspb-owlcarousel-css', 'modules/'.$this->name.'/views/css/owl.carousel.css', ['media' => 'all', 'priority' => 2]);
            $this->context->controller->registerStylesheet('jmspb-owltheme-css', 'modules/'.$this->name.'/views/css/owl.theme.css', ['media' => 'all', 'priority' => 152]);
        }
        if ((int)configuration::get('JPB_BXSLIDER')) {
            $this->context->controller->addJqueryPlugin('bxslider');
        }
        if ((int)configuration::get('JPB_ANIMATE')) {
            $this->context->controller->registerStylesheet('jmspb-animate', 'modules/'.$this->name.'/views/css/animate.css', ['media' => 'all', 'priority' => 1]);
        }
        if ((int)configuration::get('JPB_COUNTDOWN')) {
            $this->context->controller->addJS('modules/'.$this->name.'/views/js/jquery.plugin.js', 'all');
            $this->context->controller->addJS('modules/'.$this->name.'/views/js/jquery.countdown.js', 'all');
        }
		if ((int)configuration::get('JPB_FANCYBOX')) {
            $this->context->controller->addJqueryPlugin('fancybox');
        }
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

        $this->context->controller->registerStylesheet('jmspb-responsive-css', '/assets/css/theme-responsive.css', ['media' => 'all', 'priority' => 1000]);
        if ((int)Configuration::get('JPB_SETTINGPANEL')) {
            $this->context->controller->registerStylesheet('jmspb-settingpanel-css', 'modules/'.$this->name.'/views/css/settingpanel.css', ['media' => 'all', 'priority' => 3]);
            $this->context->controller->addJS($this->_path.'views/js/settingpanel.js');
        }
		    if (Tools::isSubmit('jpb_loadingstyle') && (Tools::getValue('jpb_loadingstyle')) != '') {
            $jpb_loadingstyle = (int)Tools::getValue('jpb_loadingstyle');
        } else {
            $jpb_loadingstyle = (int)configuration::get('JPB_LOADINGSTYLE');
        }
        $this->context->smarty->assign('themename', _THEME_NAME_);
        $this->context->smarty->assign('jpb_homepage', $jpb_homepage);
        $this->context->smarty->assign('jpb_homeclass', $homepage['home_class']);
        $this->context->smarty->assign('jpb_rtl', $jpb_rtl);
    		$this->context->smarty->assign('jpb_loadingstyle', $jpb_loadingstyle);
    }
    public function hookdisplayHome()
    {
        if ((int)$this->id_homepage == 0) {
            return "You must select homepage!";
        }
        $homepage = $this->getCurrentHomePage();
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
}
