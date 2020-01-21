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
class JmsThemeSetting extends Module
{
    public function __construct()
    {
        $this->name = 'jmsthemesetting';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->sprefix = 'jms_';
        $this->controllers = array('preview');
        parent::__construct();
        $this->displayName = $this->trans('Prestawork Theme Setting', array(), 'Modules.JmsThemeSetting');
        $this->description = $this->l('Theme Setting For Prestawork.');
    }

    public function install()
    {
        $res = true;
        if (parent::install() && $this->registerHook('displayBackOfficeHeader')) {
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
            if(((int)Tab::getIdFromClassName('PRESTAWORK') > 0) && ((int)Tab::getIdFromClassName('AdminJmsThemeSetting') <= 0)) {
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsThemeSetting";
                $tab->position = 0;
                $tab->icon = 'settings';
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Theme Setting';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('PRESTAWORK');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
            }
            if(((int)Tab::getIdFromClassName('PRESTAWORK') > 0) && ((int)Tab::getIdFromClassName('AdminJmsThemeSettingLicense') <= 0)) {
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsThemeSettingLicense";
                $tab->position = 4;
                $tab->icon = 'settings';
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'License Key';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('PRESTAWORK');
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
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsThemeSetting');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsThemeSettingLicense');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            return $res;
        }
        return false;
    }
    public function hookDisplayHeader()
    {

        $settingjson = Configuration::get($this->sprefix . 'settings');
        $settings = json_decode($settingjson, true);
        $settings['customersignin_logged_links'] = json_decode(Configuration::get($this->sprefix . 'customersignin_logged_links'));
        $settings['customersignin_notlogged_links'] = json_decode(Configuration::get($this->sprefix . 'customersignin_notlogged_links'));
        $settings['cart_links'] = json_decode(Configuration::get($this->sprefix . 'cart_links'));
        $settings['logo_text'] = Configuration::get($this->sprefix . 'logo_text', $this->context->language->id);
        $settings['topbar_content'] = htmlspecialchars_decode(Configuration::get($this->sprefix . 'topbar_content', $this->context->language->id));
        $settings['footer_copyright_content'] = htmlspecialchars_decode(Configuration::get($this->sprefix . 'footer_copyright_content', $this->context->language->id));
        $settings['vermenu_button_text'] = Configuration::get($this->sprefix . 'vermenu_button_text', $this->context->language->id);
        $settings['login_page_signup_content'] = htmlspecialchars_decode(Configuration::get($this->sprefix . 'login_page_signup_content', $this->context->language->id));
        $body_google_font = json_decode(Configuration::get($this->sprefix . 'body_font_google'), true);
        $settings['body_font_google_weightstyle'] = $body_google_font['weightstyle'] ? implode(",", $body_google_font['weightstyle']) : "";
        $heading_google_font = json_decode(Configuration::get($this->sprefix . 'heading_font_google'), true);
        $settings['heading_font_google_weightstyle'] = $heading_google_font['weightstyle'] ? implode(",", $heading_google_font['weightstyle']) : "";

        Media::AddJsDef(array('jmsSetting' => array('carousel_lazyload' => $settings['carousel_lazyload'], 'product_content_layout' => $settings['product_content_layout'], 'shop_grid_column' => $settings['shop_grid_column'], 'footer_block_collapse' => $settings['footer_block_collapse'])));
        $this->context->smarty->assign('jmsSetting', $settings);

    }
}
