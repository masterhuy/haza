<?php
/**
* 2007-2019 PrestaShop
*
* Jms Mega menu module
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
include_once(_PS_MODULE_DIR_.'jmsmegamenu/class/JmsMegaMenuHelper.php');
class JmsMegaMenu extends Module implements WidgetInterface
{
    private $_html = '';
    private $_postErrors = array();
    public function __construct()
    {
        $this->name = 'jmsmegamenu';
        $this->tab = 'front_office_features';
        $this->version = '3.0.0';
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->configure = 'jmsmegamenu';
        $this->bootstrap = true;
        $this->menu = '';
        $this->mobilemenu = '';
        $this->children = array();
        $this->_items = array();
        $this->gens = array();
        $this->mobile_gens = array();
        parent::__construct();

        $this->displayName = $this->l('Jms MegaMenu.');
        $this->description = $this->l('Megamenu for prestashop site.');
    }

    public function install()
    {
        if (parent::install() && $this->registerHook('header') && $this->registerHook('displayTopColumn') && $this->installSamples()) {
            $res = true;
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
            if(((int)Tab::getIdFromClassName('PRESTAWORK') > 0) && ((int)Tab::getIdFromClassName('AdminJmsmegamenuDashboard') <= 0)) {
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsmegamenuDashboard";
                $tab->position = 1;
                $tab->icon = 'menu';
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Jms MegaMenu';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('PRESTAWORK');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                //add menu manager menu
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsmegamenuManager";
                $tab->position = 0;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Menu Manager';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('AdminJmsmegamenuDashboard');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                //add menu manager style
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsmegamenuStyle";
                $tab->position = 1;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Menu Style';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('AdminJmsmegamenuDashboard');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
            }
            return $res;
        }
        return false;
    }
    public function installSamples()
    {
        $query = '';
        require_once( dirname(__FILE__).'/install/install.sql.php' );
        $return = true;
        if (isset($query) && !empty($query)) {
            if (!(Db::getInstance()->ExecuteS("SHOW TABLES LIKE '"._DB_PREFIX_."jmsmegamenu'"))) {
                $query = str_replace('_DB_PREFIX_', _DB_PREFIX_, $query);
                $query = str_replace('_MYSQL_ENGINE_', _MYSQL_ENGINE_, $query);
                $db_data_settings = preg_split("/;\s*[\r\n]+/", $query);
                foreach ($db_data_settings as $query) {
                    $query = trim($query);
                    if (!empty($query)) {
                        if (!Db::getInstance()->Execute($query)) {
                            $return = false;
                        }
                    }
                }
            }
        } else {
            $return = false;
        }
        return $return;
    }
    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            $res = true;
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsmegamenuDashboard');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsmegamenuManager');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsmegamenuStyle');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $res &= $this->deleteTables();
            return $res;
        }
        return false;
    }
    /**
     * deletes tables
     */
    protected function deleteTables()
    {
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsmegamenu`;');
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsmegamenu_items`;');
        Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmsmegamenu_items_lang`;');
        return true;
    }

    public function clearCache()
    {
        $this->_clearCache('jmsmegamenu.tpl');
    }

    public static function MNexec($hook_name, $hookArgs = array(), $module_name = null)
    {
        if (empty($module_name) || !Validate::isHookName($hook_name)) {
            die(Tools::displayError());
        }

        $context = Context::getContext();
        if (!isset($hookArgs['cookie']) || !$hookArgs['cookie']) {
            $hookArgs['cookie'] = $context->cookie;
        }
        if (!isset($hookArgs['cart']) || !$hookArgs['cart']) {
            $hookArgs['cart'] = $context->cart;
        }

        if (!($moduleInstance = Module::getInstanceByName($module_name))) {
            return;
        }
        $retro_hook_name = Hook::getRetroHookName($hook_name);

        $hook_callable = is_callable(array($moduleInstance, 'hook'.$hook_name));
        $hook_retro_callable = is_callable(array($moduleInstance, 'hook'.$retro_hook_name));
        $output = '';

        if (($hook_callable || $hook_retro_callable) && Module::preCall($moduleInstance->name)) {
            if ($hook_callable) {
                $output = $moduleInstance->{'hook'.$hook_name}($hookArgs);
            } else if ($hook_retro_callable) {
                $output = $moduleInstance->{'hook'.$retro_hook_name}($hookArgs);
            }
        }
        return $output;
    }
    public function hookHeader()
    {
        $this->context->controller->addJS(($this->_path).'views/js/jmsmegamenu.js');
        $this->context->controller->addCSS(($this->_path).'views/css/style.css', 'all');
    }

    public function getWidgetVariables($hookName, array $configuration = [])
    {
        $jmshelper = new JmsMegaMenuHelper();
        if($hookName == 'HorMenu' && (int)Configuration::get('jms_hormenu_id')) {
            $menu_id = (int)Configuration::get('jms_hormenu_id');
            $menu_html = $jmshelper->returnMenu($menu_id);
        } elseif($hookName == 'VerMenu' && (int)Configuration::get('jms_vermenu_id')) {
            $menu_id = (int)Configuration::get('jms_vermenu_id');
            $menu_html = $jmshelper->returnMenu($menu_id);
        } elseif($hookName == 'MobiMenu' && (int)Configuration::get('jms_mobimenu_id')) {
            $menu_id = (int)Configuration::get('jms_mobimenu_id');
            $menu_html = $jmshelper->returnMenu($menu_id);
        }
        $widgetVariables = array(
            'menu_html' => $menu_html
        );

        return $widgetVariables;
    }

    public function renderWidget($hookName, array $configuration = [])
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        return $this->display(__FILE__, 'jmsmegamenu.tpl');

    }
}
