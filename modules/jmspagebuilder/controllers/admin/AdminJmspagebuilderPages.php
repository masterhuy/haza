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

include_once(_PS_MODULE_DIR_.'jmspagebuilder/jmsPage.php');
require_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsHelper.php');
require_once(_PS_MODULE_DIR_.'jmspagebuilder/classes/jmsImportExport.php');
class AdminJmspagebuilderPagesController extends ModuleAdminControllerCore
{
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
        $this->addon_folder = _PS_ROOT_DIR_.'/modules/jmspagebuilder/addons';
        $ffs = scandir($this->addon_folder);
        $addons_arr = array();
        $i = 0;
        foreach ($ffs as $ff) {
            $ext = pathinfo($ff, PATHINFO_EXTENSION);
            if (!is_dir($this->addon_folder.'/'.$ff) && ($ext == 'php') && !in_array($ff, array('index.php','addonbase.php'))) {
                $addons_arr[$i] = Tools::substr($ff, 5, Tools::strlen($ff) - 9);
                $i++;
            }
        }
        $this->addons = $addons_arr;
        $this->json_path = _PS_ROOT_DIR_.'/modules/jmspagebuilder/json/';
        $this->root_url = JmsPageBuilderHelper::getRootUrl();
        parent::__construct();
    }
    public function initPageHeaderToolbar()
    {
        if (Tools::getValue('config_id_page')) {
            $this->page_header_toolbar_btn['new'] = array(
                'short' => 'AddRow',
                'href' => 'javascript:;',
                'desc' => $this->l('Add Row'),
                'confirm' => 1
            );
            $this->page_header_toolbar_btn['save'] = array(
                'short' => 'SaveLayout',
                'href' => 'javascript:;',
                'desc' => $this->l('Save Layout'),
                'confirm' => 1
            );
        }
        parent::initPageHeaderToolbar();
    }
    public function renderList()
    {
        $this->_html = $this->headerHTML();
        /* Validate & process */
        if (Tools::isSubmit('addPage') || (Tools::isSubmit('edit_id_page') && $this->pageExists((int)Tools::getValue('edit_id_page')))) {
            $this->_html .= $this->renderNavigation();
            $this->_html .= $this->renderAddPage();
        } elseif (Tools::isSubmit('submitPage') || Tools::isSubmit('delete_id_page') || Tools::isSubmit('status_id_page') || Tools::isSubmit('export_id_page') || Tools::isSubmit('import_id_page') || (Tools::isSubmit('duplicate_id_page') && $this->pageExists((int)Tools::getValue('duplicate_id_page'))) || Tools::isSubmit('saveLayout') || Tools::isSubmit('lang_id_page')) {
            if ($this->_postValidation()) {
                $this->_postProcess();
                $this->_html .= $this->renderListPage();
            } else {
                $this->_html .= $this->renderAddPage();
            }
        } elseif (Tools::isSubmit('config_id_page') && $this->pageExists((int)Tools::getValue('config_id_page'))) {
            $this->_html .= $this->renderPageLayout();
        } else {
            $this->_html .= $this->renderListPage();
        }
        return $this->_html;
    }

    private function _postValidation()
    {
        $errors = array();
        /* Validation for configuration */
        if (Tools::isSubmit('submitPage')) {
            if (Tools::strlen(Tools::getValue('title')) > 255) {
                $errors[] = $this->l('The title is too long.');
            }
            if (Tools::strlen(Tools::getValue('title')) == 0) {
                $errors[] = $this->l('The title is not set.');
            }
        } elseif (Tools::isSubmit('delete_id_page')) {
            if ((!Validate::isInt(Tools::getValue('delete_id_page')) || !$this->pageExists((int)Tools::getValue('delete_id_page')))) {
                $errors[] = $this->l('Invalid id_page');
            }
        } elseif (Tools::isSubmit('export_id_page')) {
            if ((!Validate::isInt(Tools::getValue('export_id_page')) || !$this->pageExists((int)Tools::getValue('export_id_page')))) {
                $errors[] = $this->l('Invalid id_page');
            }
        }
        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= Tools::displayError(implode('<br />', $errors));
            return false;
        }
        /* Returns if validation is ok */
        return true;
    }
    private function _postProcess()
    {
        $errors = array();
        if (Tools::isSubmit('submitPage')) {
            if (Tools::getValue('id_page')) {
                $id_page = Tools::getValue('id_page');
            } else {
                $id_page = null;
            }
            $errors = array();
            if ($id_page) {
                $page = new JmsPage($id_page);
            } else {
                $page = new JmsPage();
            }
            $page->title = Tools::getValue('title');
            $page->css_file = Tools::getValue('css_file');
            $page->js_file = Tools::getValue('js_file');
            $page->page_class = Tools::getValue('page_class');
            $page->active = Tools::getValue('active');
            if ((int)$id_page == 0) {
                if (!$page->add()) {
                    $errors[] = $this->displayError($this->l('The item could not be added.'));
                }
            } elseif (!$page->update()) {
                $errors[] = $this->displayError($this->l('The item could not be updated.'));
            }
        } elseif (Tools::isSubmit('delete_id_page') && $this->pageExists(Tools::getValue('delete_id_page'))) {
            $page = new JmsPage(Tools::getValue('delete_id_page'));
            if (!$page->delete()) {
                $this->_html .= Tools::displayError('Could not delete');
            } else {
                $sql = "DELETE FROM `"._DB_PREFIX_."jmspagebuilder` WHERE `id_page` = ".(int)Tools::getValue('delete_id_page');
                $res = Db::getInstance()->Execute($sql);
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=1&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        } elseif (Tools::isSubmit('duplicate_id_page')) {
            $newPage = new JmsPage(Tools::getValue('duplicate_id_page'));
            $duplicatePage = $newPage->duplicateObject();
            $duplicatePage->title = $duplicatePage->title.'- Copy';
            $duplicatePage->params = $newPage->params;
            if (!$duplicatePage->update()) {
                $errors[] = 'The duplicated Page Error.';
            }
        } elseif (Tools::isSubmit('export_id_page')) {
            $jms_importexport = new JmsImportExport();
            $res = $jms_importexport->exportPage(Tools::getValue('export_id_page'));
        } elseif (Tools::isSubmit('import_id_page')) {
            $import_file = Tools::getValue('import_file');
            $jsonfile = fopen($this->json_path.$import_file, "r") or die("Unable to open file!");
            $jsontext = fread($jsonfile, filesize($this->json_path.$import_file));
            $page = new JmsPage((int)Tools::getValue('import_id_page'));
            $page->params = $jsontext;
            $res = $page->update();
            fclose($jsonfile);
            if (!$res) {
                $this->_html .= Tools::displayError('The Import is error.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=4&config_id_page='.Tools::getValue('import_id_page'));
            }
        } elseif (Tools::isSubmit('status_id_page')) {
            $page = new JmsPage((int)Tools::getValue('status_id_page'));
            if ($page->active == 0) {
                $page->active = 1;
            } else {
                $page->active = 0;
            }
            $res = $page->update();
            if (!$res) {
                $this->_html .= Tools::displayError('The status could not be updated.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=5&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
            }
        } elseif (Tools::isSubmit('saveLayout')) {
            $jsonparams = Tools::getValue('jmsformjson');
            $page_id = (int)Tools::getValue('json_page_id');
            $page = new JmsPage($page_id);
            $page->params = $jsonparams;
            $res = $page->update();
            if (!$res) {
                $this->_html .= Tools::displayError('The layout could not be saved.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&config_id_page='.$page_id);
            }
        } elseif (Tools::isSubmit('lang_id_page')) {
            $page_id = (int)Tools::getValue('lang_id_page');
            $src_lang_id = (int)Tools::getValue('src_lang_id');
            $res = $this->cloneLangData($page_id, $src_lang_id);
            if (!$res) {
                $this->_html .= Tools::displayError('The clone data havent finished.');
            } else {
                Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name.'&config_id_page='.$page_id);
            }
        }
        if (count($errors)) {
            $this->_html .= Tools::displayError(implode('<br />', $errors));
        } elseif (Tools::isSubmit('submitPage') && Tools::getValue('id_page')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('delete_id_page') && Tools::getValue('delete_id_page')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::isSubmit('changePageStatus') && Tools::getValue('id_page')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        } elseif (Tools::getValue('duplicate_id_page')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmspagebuilderPages', true).'&conf=3&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }
    public function cloneLangData($id_page, $src_lang_id)
    {
        $langids = Language::getIDs();
        $id_page = Tools::getValue('lang_id_page');
        $page = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT * FROM '._DB_PREFIX_.'jmspagebuilder_pages '.($id_page ? ' WHERE `id_page` = '.$id_page : ''));
        $params = $page['params'];
        $rows = (array)Tools::jsonDecode($params);
        foreach ($rows as $key => $row) {
            $columns = $rows[$key]->cols;
            foreach ($columns as $ckey => $column) {
                $addons = $column->addons;
                foreach ($addons as $akey => $addon) {
                    $fields = $addon->fields;
                    foreach ($fields as $fkey => $field) {
                        if ($field->multilang == '1') {
                            foreach ($langids as $lang_id) {
                                $rows[$key]->cols[$ckey]->addons[$akey]->fields[$fkey]->value->$lang_id = $field->value->$src_lang_id;
                            }
                        }
                    }
                }
            }
        }
        $new_params = Tools::jsonEncode($rows);
        $page = new JmsPage($id_page);
        $page->params = $new_params;
        return $page->update();
    }
    public function getModules()
    {
        $not_module = array($this->name, 'gridhtml','dashactivity', 'autoupgrade', 'dashgoals', 'dashproducts', 'dashtrends', 'datamigration','graphnvd3', 'referralprogram', 'sekeywords', 'statsbestcategories', 'statsbestcustomers', 'statsbestmanufacturers', 'statsbestproducts', 'statsbestsuppliers', 'statsbestvouchers', 'statscarrier', 'statscatalog', 'statscheckup', 'statsdata', 'statsequipment', 'statsforecast', 'statslive', 'statsnewsletter', 'statsorigin', 'statspersonalinfos', 'statsproduct', 'statsregistrations', 'statssales', 'statssearch', 'statsstock', 'statsvisits', 'welcome','jmsblog','jmstestimonials','jmsmaplocation','jmsbrands','jmsfacebookconnect','jmsslider','jmsproductvideo','jmsproducttab');
        $where = '';
        if (count($not_module) == 1) {
            $where = ' WHERE m.`name` <> \''.$not_module[0].'\'';
        } elseif (count($not_module) > 1) {
            $where = ' WHERE m.`name` NOT IN (\''.implode("','", $not_module).'\')';
        }
        $context = Context::getContext();
        $id_shop = $context->shop->id;
        $sql = 'SELECT m.name, m.id_module
                FROM `'._DB_PREFIX_.'module` m
                JOIN `'._DB_PREFIX_.'module_shop` ms ON (m.`id_module` = ms.`id_module` AND ms.`id_shop` = '.(int)$id_shop.')
                '.$where;
        $module_list = Db::getInstance()->ExecuteS($sql);
        $modules = array();
        foreach ($module_list as $m) {
            $iso = substr(Context::getContext()->language->iso_code, 0, 2);
            // Check if config.xml module file exists and if it's not outdated
            if ($iso == 'en') {
                $config_file = _PS_MODULE_DIR_ . $m['name'] . '/config.xml';
            } else {
                $config_file = _PS_MODULE_DIR_ . $m['name'] . '/config_' . $iso . '.xml';
            }
            if(file_exists($config_file)) {
              $xml_module = @simplexml_load_file($config_file);
              $m['short_desc'] = stripslashes(Translate::getModuleTranslation((string) $xml_module->name, Module::configXmlStringFormat($xml_module->description), (string) $xml_module->name));
              $m['short_desc'] = Tools::substr($m['short_desc'], 0, 40);
              $modules[] = $m;
            }
        }
        return $modules;
    }
    public function genAddonsList($modulenames)
    {
        $addons = $this->addons;
        $result = array();
        foreach ($addons as $addon) {
            $addonfile = 'addon'.$addon.'.php';
            $addonclass = 'JmsAddon'.Tools::ucfirst($addon);
            if (file_exists(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile)) {
                require_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile);
            }
            $addon_instance = new $addonclass($modulenames);
            $result[] = $addon_instance->genAddonList($addon);
        }
        return $result;
    }


    public function pageExists($id_page)
    {
        $req = 'SELECT hs.`id_page`
                FROM `'._DB_PREFIX_.'jmspagebuilder_pages` hs
                WHERE hs.`id_page` = '.(int)$id_page;
        $page = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
        return ($page);
    }

    public function renderListPage()
    {
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $this->context->controller->addJqueryUI('ui.draggable');
        $pages = JmsPageBuilderHelper::getPages();
        $this->override_folder = 'jmspagebuilder_pages/';
        $tpl = $this->createTemplate('listpage.tpl');
        $tpl->assign(array('link' => $this->context->link,'pages' => $pages,'adminlink' => $this->context->link->getAdminLink($this->classname)));
        return $tpl->fetch();
    }
    public function renderNavigation()
    {
        $html = '<div class="navigation">';
        $html .= '<a class="btn btn-default" href="'.AdminController::$currentIndex.
            '&configure='.$this->name.'
                &token='.Tools::getAdminTokenLite($this->classname).'" title="Back to Dashboard"><i class="icon-page"></i>Back to Dashboard</a>';
        $html .= '</div>';
        return $html;
    }
    public function renderAddPage()
    {
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $this->context->controller->addJqueryUI('ui.draggable');
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Page Informations'),
                'icon' => 'icon-cogs'
            ),
            'input' => array(
                array(
                    'type' => 'text',
                    'label' => $this->l('Title'),
                    'name' => 'title',
                    'class' => 'fixed-width-xl',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Css File'),
                    'name' => 'css_file',
                    'class' => 'fixed-width-xl',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Javascript File'),
                    'name' => 'js_file',
                    'class' => 'fixed-width-xl',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Page Class'),
                    'name' => 'page_class',
                    'class' => 'fixed-width-xl',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Active'),
                    'name' => 'active',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('No')
                        )
                    ),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save'),
                'name' => 'submitPage'
            )
        );
        if (Tools::isSubmit('edit_id_page')) {
            $this->fields_form['input'][] = array('type' => 'hidden', 'name' => 'id_page');
        }
        $this->fields_value = $this->getPageFieldsValues();
        return adminController::renderForm();
    }
    public function getPageFieldsValues()
    {
        $id_page = (int)Tools::getValue('edit_id_page');
        $fields = array();
        if ($id_page) {
            $page = new JmsPage($id_page);
            $fields['id_page']  = (int)Tools::getValue('edit_id_page', $page->id);
        } else {
            $page = new JmsPage();
        }
        $fields['title'] = Tools::getValue('title', $page->title);
        $fields['css_file'] = Tools::getValue('css_file', $page->css_file);
        $fields['js_file'] = Tools::getValue('js_file', $page->js_file);
        $fields['page_class'] = Tools::getValue('page_class', $page->page_class);
        $fields['active'] = Tools::getValue('active', $page->active);
        return $fields;
    }

    public function headerHTML()
    {
        if (Tools::getValue('controller') != 'AdminJmspagebuilderPages' && Tools::getValue('configure') != $this->name) {
            return;
        }
        $this->context->controller->addJqueryUI('ui.resizable');
        $this->context->controller->addJqueryUI('ui.sortable');
        /* Style & js for fieldset 'rows configuration' */
        $html = '<script type="text/javascript">
            $(function() {
                var $mypages = $(".page");

                $mypages.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updatePagesOrdering";
                        $.post("'.$this->context->shop->physical_uri.$this->context->shop->virtual_uri.'modules/'.$this->name.'/ajax_'.$this->name.'.php?secure_key='.$this->secure_key.'", order);
                    },
                    stop: function( event, ui ) {
                        showSuccessMessage("Saved!");
                    }
                });
                $mypages.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
        </script>';

        return $html;
    }

    public function loadAddon($addon, $modulenames)
    {
        $addonfile = 'addon'.$addon->type.'.php';
        $addonclass = 'JmsAddon'.Tools::ucfirst($addon->type);
        if (file_exists(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile)) {
            require_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/'.$addonfile);
        }
        $addon_instance = new $addonclass($modulenames);
        return $addon_instance->genAddonLayout($addon);
    }
    public function getJsonFiles()
    {
        $ffs = scandir($this->json_path);
        $result = array();
        $i = 0;
        foreach ($ffs as $ff) {
            $ext = pathinfo($ff, PATHINFO_EXTENSION);
            if (!is_dir($this->json_path.$ff) && in_array($ext, array('txt'))) {
                $result[$i] = $ff;
                $i++;
            }
        }
        return $result;
    }
    public function renderPageLayout()
    {
        $languages = Language::getLanguages(false);
        $this->context->controller->addJS(_PS_JS_DIR_.'tiny_mce/tiny_mce.js');
        $version = Configuration::get('PS_INSTALL_VERSION');
        $tiny_path = ($version >= '1.6.0.13') ? 'admin/' : '';
        $tiny_path .= 'tinymce.inc.js';
        $this->context->controller->addJS(_PS_JS_DIR_.$tiny_path);
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/responsive.css', 'all');
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/modal.css', 'all');
        $this->context->controller->addJS(_MODULE_DIR_.$this->module->name.'/views/js/admin_script.js', 'all');
        $this->context->controller->addJqueryUI('ui.draggable');
        $id_page = Tools::getValue('config_id_page');
        $selectedpage = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('SELECT * FROM '._DB_PREFIX_.'jmspagebuilder_pages '.($id_page ? ' WHERE `id_page` = '.$id_page : ''));
        $params = $selectedpage['params'];
        $rows = (array)Tools::jsonDecode($params);
    		$modules = $this->getModules();
    		$modulenames = array();
    		$modulenames[] = '';
    		foreach($modules as $_module) {
    			$modulenames[] = $_module['name'];
    		}
        foreach ($rows as $key => $row) {
            $columns = $rows[$key]->cols;
            foreach ($columns as $ckey => $column) {
                $addons = $column->addons;
                foreach ($addons as $akey => $addon) {
                    $rows[$key]->cols[$ckey]->addons[$akey]->addon_box = $this->loadAddon($addon, $modulenames);
                }
            }
        }
        $this->override_folder = 'jmspagebuilder_pages/';
        $tpl = $this->createTemplate('pagelayout.tpl');
        $defaultFormLanguage = (int)(Configuration::get('PS_LANG_DEFAULT'));
        $mediatoken = Tools::getAdminTokenLite('AdminJmspagebuilderMedia');
        $pages = JmsPageBuilderHelper::getPages();
        $jsonfiles = $this->getJsonFiles();
        $tpl->assign(
            array(
                'link' => $this->context->link,
                'modules_url' => $this->root_url.'modules/',
                'rows' => $rows,
                'modules' => $modules,
                'selectedpage' => $selectedpage,
                'pages' => $pages,
                'mediatoken' => $mediatoken,
                'addonslist' => $this->genAddonsList($modulenames),
                'jsonfiles' => $jsonfiles,
                'languages' => $languages,
                'defaultFormLanguage' => $defaultFormLanguage,
                'ad' => __PS_BASE_URI__.basename(_PS_ADMIN_DIR_),
                'converturl' => (int)Configuration::get('JPB_CONVERTURL'),
                'ajax_url' => $this->root_url.'modules/'.$this->name.'/ajax_'.$this->name.'.php',
                'root_url' => $this->root_url
                )
        );
        return $tpl->fetch();
    }
}
