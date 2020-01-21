<?php
/**
* 2007-2017 PrestaSh
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @cyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}
class AdminJmsLicensePackagesController extends ModuleAdminController
{
    private $sprefix;
    private $settings;
    public function __construct()
    {
        $this->name = 'JmsLicense';
        $this->bootstrap = true;
        parent::__construct();
    }
    public function initContent()
    {
        if (!$this->viewAccess()) {
            $this->errors[] = Tools::displayError('You do not have permission to view this.');
            return;
        }

        $this->content .= $this->renderSettingForm();
        $this->context->smarty->assign(array(
            'content' => $this->content,
        ));
    }
    public function initPageHeaderToolbar()
    {

        $this->page_header_toolbar_btn['savesetting'] = array(
            'href' => $this->context->link->getAdminLink('AdminJmsThemeSetting').'&saveSetting',
            'desc' => $this->l('Save Setting', null, null, false),
            'icon' => 'process-icon-save'
        );
        return parent::initPageHeaderToolbar();
    }

    public function postProcess()
    {
        $languages = Language::getLanguages(false);
        if(Tools::isSubmit('importSetting')) {
            if (isset($_FILES['settingFile'])) {

                try{
                    $str = file_get_contents($_FILES['settingFile']['tmp_name']);
                    $arr = json_decode($str, true);
                    $html_lang_fields = array('topbar_content' ,'footer_copyright_content' ,'login_page_signup_content' );
                    foreach ($arr as $key => $value) {
                        if(in_array($key, $html_lang_fields)) {
                            $content_array = array();
                            foreach ($languages as $language) {
                                $content_array[$language['id_lang']] = $value[$language['id_lang']];
                            }
                            Configuration::updateValue($this->sprefix . $key, $content_array, true);
                        } else {
                            Configuration::updateValue($this->sprefix . $key, $value);
                        }
                    }

                    $var = array();
                    foreach ($this->settings as $key => $setting) {
                        if (isset($setting['front'])) {
                            $var[$key] = Configuration::get($this->sprefix . $key);
                        }
                    }
                    Configuration::updateValue($this->sprefix . 'settings', json_encode($var));

                    $this->genAssets();
                    Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsThemeSetting', true).'&conf=18');
                } catch(Exception $ex){
                    $this->content .= $this->module->displayError($this->l('No setting file found'));
                }
            } else {
                $this->content .= $this->module->displayError($this->l('No setting file found'));
            }

        } elseif (Tools::isSubmit('saveSetting')) {
          $var = array();
          foreach ($this->settings as $key => $setting) {
              if ($setting['type'] == 'html_lang') {
                  $content_array = array();
                  foreach ($languages as $language) {
                       $content_array[$language['id_lang']] = htmlspecialchars(Tools::getValue($key.'_'.$language['id_lang']));
                  }
                  Configuration::updateValue($this->sprefix . $key, $content_array, true);
              } elseif ($setting['type'] == 'text_lang') {
                  $content_array = array();
                  foreach ($languages as $language) {
                      $content_array[$language['id_lang']] = Tools::getValue($key.'_'.$language['id_lang']);
                  }
                  Configuration::updateValue($this->sprefix . $key, $content_array, true);
              } elseif ($setting['type'] == 'fontstyle') {
                  $fontstyle = array();
                  $fontstyle['size'] = Tools::getValue($key.'_size');
                  $fontstyle['weight'] = Tools::getValue($key.'_weight');
                  $fontstyle['style'] = Tools::getValue($key.'_style');
                  $fontstyle['transform'] = Tools::getValue($key.'_transform');
                  Configuration::updateValue($this->sprefix . $key, json_encode($fontstyle), true);
              } elseif ($setting['type'] == 'background-img') {
                    $bgimg = array();
                    $bgimg['image'] = Tools::getValue($key);
                    $bgimg['size'] = Tools::getValue($key.'_size');
                    $bgimg['position'] = Tools::getValue($key.'_position');
                    $bgimg['repeat'] = Tools::getValue($key.'_repeat');
                    $bgimg['attachment'] = Tools::getValue($key.'_attachment');
                    Configuration::updateValue($this->sprefix . $key, json_encode($bgimg), true);
              } elseif ($setting['type'] == 'border') {
                    $border = array();
                    $border['width'] = Tools::getValue($key.'_width');
                    $border['style'] = Tools::getValue($key.'_style');
                    $border['color'] = Tools::getValue($key.'_color');
                    Configuration::updateValue($this->sprefix . $key, json_encode($border), true);
              } elseif ($setting['type'] == 'google-font') {
                    $google_font = array();
                    $google_font['family'] = Tools::getValue($key);
                    $google_font['weightstyle'] = Tools::getValue($key.'_weightstyle');
                    Configuration::updateValue($this->sprefix . $key, json_encode($google_font), true);
              } elseif ($setting['type'] == 'html') {
                  Configuration::updateValue($this->sprefix . $key, htmlspecialchars(Tools::getValue($key)), true);
              } elseif ($setting['type'] == 'padding' || $setting['type'] == 'checkbox2') {
                  Configuration::updateValue($this->sprefix . $key, json_encode(Tools::getValue($key)));
              } else {
                  Configuration::updateValue($this->sprefix . $key, Tools::getValue($key));
              }

              if (isset($setting['front'])) {
                  $var[$key] = Tools::getValue($key);
              }
          }
          Configuration::updateValue($this->sprefix . 'settings', json_encode($var));
          $this->genAssets();
          Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsThemeSetting', true).'&conf=6');

        }

        parent::postProcess();
    }

    protected function buildHelper()
    {
        $helper = new HelperForm();

        $helper->module = $this->module;
        $helper->override_folder = 'settingform/';
        $helper->identifier = $this->className;
        $helper->languages = $this->_languages;
        $helper->currentIndex = $this->context->link->getAdminLink('Admin'.$this->name);
        $helper->default_form_language = $this->default_form_language;
        $helper->allow_employee_form_lang = $this->allow_employee_form_lang;
        $helper->toolbar_scroll = true;
        $helper->toolbar_btn = $this->initToolbar();

        return $helper;
    }

    public function renderSettingForm()
    {
        $helper = $this->buildHelper();
        $helper->submit_action = 'saveSetting';
        $helper->fields_value = $this->getConfigFieldsValues();
        //print_r($helper->fields_value); exit;
        $root_url = Tools::getHttpHost(true);
        $root_url = Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE') ? $root_url : str_replace('https', 'http', $root_url);
        $helper->tpl_vars = array(
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
            'current_link' => $this->context->link->getAdminLink('AdminJmsThemeSetting'),
            'root_url' => $root_url
        );
        $generalform = new JmsGeneralForm();
        $generalfields = $generalform->getGeneralForm();
        $headerform = new JmsHeaderForm();
        $headerfields = $headerform->getHeaderForm();
        $footerform = new JmsFooterForm();
        $footerfields = $footerform->getFooterForm();
        $socialform = new JmsSocialForm();
        $socialfields = $socialform->getSocialForm();
        $menuform = new JmsMenuForm();
        $menufields = $menuform->getMenuForm();
        $pagesform = new JmsPagesForm();
        $pagesfields = $pagesform->getPagesForm();
        $importexportform = new JmsImportExportForm();
        $importexportfields = $importexportform->getImportExportForm();
        return $helper->generateForm(array_merge($generalfields, $headerfields, $menufields, $pagesfields, $footerfields, $socialfields, $importexportfields));
    }
    public function setMedia($isNewTheme = false)
    {
        parent::setMedia();
        $this->addJS(_MODULE_DIR_ . $this->module->name . '/views/js/setting.js');
        $this->addCSS(_MODULE_DIR_ . $this->module->name . '/views/css/setting.css');
        if(Configuration::get($this->sprefix.'body_icon_font')) {
            $this->addCSS(_MODULE_DIR_ . $this->module->name . '/views/fonts/'.Configuration::get($this->sprefix.'body_icon_font'));
        }
    }
    public function getConfigFieldsValues()
    {
        $languages = Language::getLanguages(false);
        $var = array();
        foreach ($this->settings as $key => $setting) {
            if($setting['type'] == 'html_lang') {
                foreach ($languages as $language) {
                    $var[$key][$language['id_lang']] = htmlspecialchars_decode(Configuration::get($this->sprefix  . $key, $language['id_lang']));
                }
            } elseif($setting['type'] == 'text_lang') {
                foreach ($languages as $language) {
                    $var[$key][$language['id_lang']] = Configuration::get($this->sprefix  . $key, $language['id_lang']);
                }
            } elseif($setting['type'] == 'fontstyle') {
                $var[$key] = json_decode(Configuration::get($this->sprefix  . $key), true);
            } elseif($setting['type'] == 'background-img') {
                  $var[$key] = json_decode(Configuration::get($this->sprefix  . $key), true);
            } elseif($setting['type'] == 'border') {
                $var[$key] = json_decode(Configuration::get($this->sprefix  . $key), true);
            } elseif ($setting['type'] == 'google-font') {
                  $var[$key] = json_decode(Configuration::get($this->sprefix  . $key), true);
            } elseif ($setting['type'] == 'html') {
                $var[$key] = htmlspecialchars_decode(Configuration::get($this->sprefix  . $key));
            } elseif ($setting['type'] == 'padding' || $setting['type'] == 'checkbox2') {
                $var[$key] = json_decode(Configuration::get($this->sprefix  . $key));
            } else {
                $var[$key] = Configuration::get($this->sprefix  . $key);
            }
        }
        return $var;
    }
}
