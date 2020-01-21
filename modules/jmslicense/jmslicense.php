<?php
/**
* 2007-2017 PrestaShop
*
* Jms License
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}
class JmsLicense extends Module
{
    public function __construct()
    {
        $this->name = 'jmslicense';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->sprefix = 'jms_';
        $this->controllers = array('preview');
        parent::__construct();
        $this->displayName = $this->trans('Prestawork License', array(), 'Modules.JmsThemeSetting');
        $this->description = $this->l('License For Prestawork.');
    }

    public function install()
    {
        $res = true;
        if (parent::install() && $this->registerHook('displayBackOfficeHeader')) {
            $tab_parent_id = (int)Tab::getIdFromClassName('PRESTAWORK-LICENSE');
            if($tab_parent_id <= 0) {
                $tab = new Tab();
                $tab->id_parent = 0;
                $tab->active = 1;
                $tab->class_name = "PRESTAWORK-LICENSE";
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'PRESTAWORK LICENSE';
                }
                if(!$tab->add()) return false;
            }
            $tab_id_parent = (int)Tab::getIdFromClassName('PRESTAWORK-LICENSE');
            if(($tab_id_parent > 0) && ((int)Tab::getIdFromClassName('AdminJmsLicensePackages') <= 0)) {
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsLicensePackages";
                $tab->position = 0;
                $tab->icon = 'settings';
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Packages';
                }
                $tab->id_parent = $tab_id_parent;
                $tab->module = $this->name;
                if(!$tab->add()) return false;
            }
            if(($tab_id_parent > 0) && ((int)Tab::getIdFromClassName('AdminJmsLicenseOrders') <= 0)) {
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsLicenseOrders";
                $tab->position = 1;
                $tab->icon = 'settings';
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Orders';
                }
                $tab->id_parent = $tab_id_parent;
                $tab->module = $this->name;
                if(!$tab->add()) return false;
            }
        }
        return $res;
    }

    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            $res = true;
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsLicenseOrders');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsLicensePackages');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('PRESTAWORK-LICENSE');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            return $res;
        }
        return false;
    }  
}
