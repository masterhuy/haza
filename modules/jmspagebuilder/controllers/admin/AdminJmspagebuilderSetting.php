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
require_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsHelper.php');
include_once(_PS_MODULE_DIR_.'jmspagebuilder/params.php');
class AdminJmspagebuilderSettingController extends ModuleAdminController
{
    private $_themeskins = array();
    private $_producthovers = array();
    public function __construct()
    {
        $this->name = 'jmspagebuilder';
        $this->tab = 'front_office_features';
        $this->bootstrap = true;
        $this->lang = true;
        $this->context = Context::getContext();
        $this->secure_key = Tools::encrypt($this->name);
        $_controller = Tools::getValue('controller');
        $this->classname = $_controller;
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
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
    }
    public function renderList()
    {
        $this->_html = '';
        /* Validate & process */
        if (Tools::isSubmit('submitSetting')) {
            if ($this->_postValidation()) {
                $this->_postProcess();
            }
        } else {
            $this->_html .= $this->renderSettingForm();
        }
        return $this->_html;
    }

    private function _postValidation()
    {
        return true;
    }

    private function _postProcess()
    {
        $errors = array();
        /* Processes*/
        if (Tools::isSubmit('submitSetting')) {
            $res = Configuration::updateValue('JPB_HOMEPAGE', (int)(Tools::getValue('JPB_HOMEPAGE')));
            $res &= Configuration::updateValue('JPB_RTL', (int)(Tools::getValue('JPB_RTL')));
            $res &= Configuration::updateValue('JPB_CONVERTURL', (int)(Tools::getValue('JPB_CONVERTURL')));
        }
        if (!$res) {
            $errors[] = $this->displayError($this->l('The configuration could not be updated.'));
        } else {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderSetting', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }

    public function renderSettingForm()
    {
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/setting.css', 'all');
        $pages = JmsPageBuilderHelper::getPages('1');
        $input_arr = array();
        $input_arr[] =  array(
                'type' => 'select',
                'label' => $this->l('Home Page'),
                'name' => 'JPB_HOMEPAGE',
                'options' => array('query' => $pages,'id' => 'id_page','name' => 'title'),
                'tab' => 'general'
            );
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('RTL'),
                'name' => 'JPB_RTL',
                'desc' => $this->l('Direction : Right to Left.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'general'
            );
        $input_arr[] =  array(
                'type' => 'switch',
                'label' => $this->l('Editor Auto Convert URL'),
                'name' => 'JPB_CONVERTURL',
                'desc' => $this->l('Enable/Disable Auto Convert URL. Auto add site url to image src.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Enabled')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Disabled'))
                ),
                'tab' => 'general'
            );
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Setting'),
                'icon' => 'icon-cogs'
            ),
            'tabs' => array('general' => 'General'),
            'input' => $input_arr,
            'submit' => array(
                'title' => $this->l('Save'),
                'name' => 'submitSetting'
            )
        );
        $this->tpl_folder = 'form/';
        $this->fields_value = $this->getConfigFieldsValues();
        return adminController::renderForm();
    }
    public function getConfigFieldsValues()
    {
        return array(
            'JPB_HOMEPAGE' => Tools::getValue('JPB_HOMEPAGE', Configuration::get('JPB_HOMEPAGE')),
            'JPB_RTL' => Tools::getValue('JPB_RTL', Configuration::get('JPB_RTL')),            
            'JPB_CONVERTURL' => Tools::getValue('JPB_CONVERTURL', Configuration::get('JPB_CONVERTURL'))
        );
    }
}
