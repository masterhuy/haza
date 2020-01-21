<?php
/**
 * 2013-2018 MADEF IT
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@madef.fr so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    MADEF IT <contact@madef.fr>
 *  @copyright 2013-2018 MADEF IT
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class ResponsiveMenu extends Module
{
    protected $confirmation = '';
    protected $errors = '';
    protected $cacheCategory;

    protected $sums = array(
        'loginandsearchbarheight' => array(
            'searchbarheight',
            'loginbarheight',
        ),
    );

    protected $themeVars = array(
        array(
            'name' => 'overlaycolor',
            'default' => 'rgba(0,0,0,0.2)',
        ),
        array(
            'name' => 'closebuttonfontsize',
            'default' => '40',
        ),
        array(
            'name' => 'closebuttoncolor',
            'default' => 'white',
        ),
        array(
            'name' => 'closebuttonshadow',
            'default' => '0px 0px 5px #333',
        ),
        array(
            'name' => 'headerbackground',
            'default' => 'white',
        ),
        array(
            'name' => 'headercolor',
            'default' => 'black',
        ),
        array(
            'name' => 'headerbordercolor',
            'default' => '#333',
        ),
        array(
            'name' => 'searchbuttonbackground',
            'default' => '#333',
        ),
        array(
            'name' => 'searchbuttoncolor',
            'default' => '#777',
        ),
        array(
            'name' => 'iconheight',
            'default' => '50px',
        ),
        array(
            'name' => 'icontop',
            'default' => '0',
        ),
        array(
            'name' => 'pannelbackground',
            'default' => 'rgba(51,51,51,0.985)',
        ),
        array(
            'name' => 'pannelbordercolor',
            'default' => 'black',
        ),
        array(
            'name' => 'leveltitlecolor',
            'default' => 'rgba(255, 255, 255, 0.4)',
        ),
        array(
            'name' => 'leveltitlebordercolor',
            'default' => '#222',
        ),
        array(
            'name' => 'levelbackcolor',
            'default' => 'rgba(255, 255, 255, 0.4)',
        ),
        array(
            'name' => 'levelitemcolor',
            'default' => 'rgba(255, 255, 255, 0.4)',
        ),
        array(
            'name' => 'levelitemshadow',
            'default' => '0 0 1px rgba(255, 255, 255, 0.1)',
        ),
        array(
            'name' => 'levelitembordercolor',
            'default' => '#222',
        ),
        array(
            'name' => 'arrowcolor',
            'default' => 'rgba(255, 255, 255, 0.4)',
        ),
        array(
            'name' => 'loginbarheight',
            'default' => '48',
        ),
        array(
            'name' => 'loginbarfontsize',
            'default' => '25',
        ),
        array(
            'name' => 'loginbarbackground',
            'default' => 'black',
        ),
        array(
            'name' => 'loginbarcolor',
            'default' => 'white',
        ),
        array(
            'name' => 'searchbarheight',
            'default' => '30',
        ),
        array(
            'name' => 'searchbarbackground',
            'default' => '#444',
        ),
        array(
            'name' => 'searchbarcolor',
            'default' => 'white',
        ),
        array(
            'name' => 'arrowcolor',
            'default' => 'rgba(255, 255, 255, 0.4)',
        ),
        array(
            'name' => 'customcss',
            'default' => '',
        ),
        array(
            'name' => 'customcssmobile',
            'default' => '',
        ),
        array(
            'name' => 'customcssdesktop',
            'default' => '',
        ),
        array(
            'name' => 'breakpoint',
            'default' => '767px',
        ),
    );

    public function __construct()
    {
        $this->name = 'responsivemenu';
        $this->tab = 'front_office_features';
        $this->version = '1.12.3';
        $this->author = 'MADEF IT';
        $this->author_address = '0xD6601e65eb52c429E223580Dd3998cFE5D5a4f85';
        $this->need_instance = 0;
        $this->module_key = '662317447cf4a01c14a68e80d261769c';
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Menu For Mobile');
        $this->description = $this->l('Menu for mobile and other small screen devices.');
    }

    public function install()
    {
        $res = parent::install();

        $res &= $this->registerHook('displayHeader');
        $res &= $this->registerHook('displayFooter');
        $res &= $this->registerHook('responsivemenu');
        Configuration::updateValue('RM_HOOK_NAME', 'footer');
        Configuration::updateValue('RM_PULL', 1);
        Configuration::updateValue('RM_USE_CLASSIC_BAR', 0);
        Configuration::updateValue('RM_USE_MOBILE_LOGO', 0);
        Configuration::updateValue('RM_HEADER_BAR', 1);
        Configuration::updateValue('RM_FILTER_WITH_GROUPS', 1);
        Configuration::updateValue('RM_DISPLAY_SEARCH', 0);
        Configuration::updateValue('RM_DISPLAY_CART', 1);
        Configuration::updateValue('RM_DISPLAY_LANG', 1);
        Configuration::updateValue('RM_DISPLAY_TRIGGER_ST', 0);
        Configuration::updateValue('RM_DISPLAY_BAR_LOGIN', 1);
        Configuration::updateValue('RM_DISPLAY_BAR_SEARCH', 1);
        Configuration::updateValue('RM_DISPLAY_CLOSE', 1);
        Configuration::updateValue('RM_CART_ACTION', 'cart');

        foreach ($this->themeVars as $var) {
            Configuration::updateValue(
                'RM_T_'.Tools::strtoupper($var['name']),
                $var['default']
            );
        }

        $res &= Db::getInstance()->execute(
            'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'responsivemenu_category` (
                `id_category` INT UNSIGNED NOT NULL,
                `active_mobile` int(1) unsigned NOT NULL,
                PRIMARY KEY (`id_category`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;'
        );

        $this->makeCss();

        return (bool) $res;
    }

    protected function getProductCategory()
    {
        if (!method_exists('ProductController', 'getCategory')) {
            $id_product = (int) Tools::getValue('id_product');
            $product = new Product($id_product, true, $this->context->language->id, $this->context->shop->id);

            return new Category((int) $product->id_category_default);
        }

        return $this->context->controller->getCategory();
    }

    public function hookDisplayHeader($params)
    {
        $this->context->controller->addCSS(($this->_path).'views/css/main.css', 'all');
        $this->context->controller->addJS(($this->_path).'views/js/responsivemenu.js');

        $id_category = (int) Tools::getValue('id_category');

        if ($this->context->controller instanceof ProductController) {
            $category = $this->getProductCategory();
        } elseif ($id_category) {
            $category = new Category($id_category, $this->context->language->id);
        } else {
            $category = $this->getRootCategory();
        }

        $categories = array();
        if (is_object($category)) {
            foreach ($category->getParentsCategories($this->context->language->id) as $cat) {
                array_unshift($categories, (int) $cat['id_category']);
            }
        }

        /*
        if (!in_array($category->id, $categories)) {
            array_unshift($categories, (int) $category->id);
        }
         */

        if (count($categories) > 1 && $category->nleft + 1 == $category->nright) {
            $current_category = array_pop($categories);
        } else {
            $current_category = '';
        }

        $link = $this->context->link->getModuleLink(
            'responsivemenu',
            Tools::usingSecureMode() ? 'ajaxssl' : 'ajax',
            array(),
            Tools::usingSecureMode()
        );

        $menu = '';
        if (Configuration::get('RM_HOOK_NAME') == 'header') {
            $menu = $this->hookResponsivemenu($params);
        }

        return $menu.'
            <script type="text/javascript">
                RM_AJAX_URL = \''.$link.'\';
                RM_SHOP_ID = '.Context::getContext()->shop->id.';
                RM_HEADER_BAR = '
                    .(int) (Configuration::get('RM_HEADER_BAR') && !Configuration::get('RM_USE_CLASSIC_BAR')).';
                RM_DISPLAY_SEARCH = '.(int) (Configuration::get('RM_DISPLAY_SEARCH') || Configuration::get('RM_DISPLAY_BAR_SEARCH')).';
                RM_USE_CLASSIC_BAR = '.(int) Configuration::get('RM_USE_CLASSIC_BAR').';
                RM_CATEGORY_PATH = '.Tools::jsonEncode($categories).';
                RM_CATEGORY_HASH = \''.$this->getCategoryHash().'\';
                RM_CURRENT_CATEGORY = \''.$current_category.'\';
                RM_ID_LANG = \''.(int) $this->context->language->id.'\';
                RM_PULL = '.(int) Configuration::get('RM_PULL').';
            </script>';
    }

    public function hookDisplayFooter($params)
    {
        if (Configuration::get('RM_HOOK_NAME') != 'footer' && Configuration::get('RM_HOOK_NAME') != '') {
            return;
        }

        return $this->hookResponsivemenu($params);
    }

    public function hookResponsivemenu($params)
    {
        Context::getContext()->smarty->assign(
            'rm_display_bar_search',
            (int) Configuration::get('RM_DISPLAY_BAR_SEARCH')
        );
        Context::getContext()->smarty->assign(
            'rm_display_trigger_subtitle',
            (int) Configuration::get('RM_DISPLAY_TRIGGER_ST')
        );
        Context::getContext()->smarty->assign(
            'rm_display_bar_login',
            (int) Configuration::get('RM_DISPLAY_BAR_LOGIN')
        );
        Context::getContext()->smarty->assign(
            'rm_display_close',
            (int) Configuration::get('RM_DISPLAY_CLOSE')
        );
        Context::getContext()->smarty->assign(
            'search_query',
            Tools::getValue('search_query', Tools::getValue('s'))
        );
        Context::getContext()->smarty->assign('rm_link', Context::getContext()->link);
        $cartAction = Configuration::get('RM_CART_ACTION');
        Context::getContext()->smarty->assign(
            'cart_action',
            $cartAction ?: 'cart'
        );
        if (Configuration::get('RM_USE_CLASSIC_BAR')) {
            // In this case, we do nothing
            // There are no icons or bars to display
            $html = '';
        } elseif (Configuration::get('RM_HEADER_BAR')) {
            Context::getContext()->smarty->assign(
                'order_process',
                Configuration::get('PS_ORDER_PROCESS_TYPE') ? 'order-opc' : 'order'
            );
            Context::getContext()->smarty->assign(
                'cart_count',
                Context::getContext()->cart->nbProducts()
            );
            $protocol_link = (Configuration::get('PS_SSL_ENABLED') && Tools::usingSecureMode()) ? 'https://' : 'http://';
            Context::getContext()->smarty->assign(
                'base_dir',
                _PS_BASE_URL_.__PS_BASE_URI__
            );
            Context::getContext()->smarty->assign(
                'base_dir_ssl',
                $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__
            );
            Context::getContext()->smarty->assign(
                'shop_name',
                Configuration::get('PS_SHOP_NAME')
            );
            if (Configuration::get('RM_USE_MOBILE_LOGO')) {
                $logo = Configuration::get('PS_LOGO_MOBILE');

                if (!$logo) {
                    Context::getContext()->smarty->assign(
                        'rm_logo_url',
                        $this->context->link->getMediaLink(_PS_IMG_.Configuration::get('PS_LOGO'))
                    );
                } else {
                    Context::getContext()->smarty->assign(
                        'rm_logo_url',
                        $this->context->link->getMediaLink(_PS_IMG_.Configuration::get('PS_LOGO_MOBILE'))
                    );
                }
            } else {
                Context::getContext()->smarty->assign(
                    'rm_logo_url',
                    $this->context->link->getMediaLink(_PS_IMG_.Configuration::get('PS_LOGO'))
                );
            }
            Context::getContext()->smarty->assign(
                'rm_display_search',
                (int) Configuration::get('RM_DISPLAY_SEARCH')
            );
            Context::getContext()->smarty->assign(
                'rm_display_cart',
                (int) Configuration::get('RM_DISPLAY_CART')
            );

            $languageList = Language::getLanguages(true, $this->context->shop->id);
            Context::getContext()->smarty->assign(
                'rm_display_lang',
                (1 < count($languageList)) ? (int) Configuration::get('RM_DISPLAY_LANG') : 0
            );
            Context::getContext()->smarty->assign(
                'rm_language_list',
                $languageList
            );
            Context::getContext()->smarty->assign(
                'rm_current_language_id',
                $this->context->language->id
            );

            $html = $this->display(__FILE__, 'views/templates/front/header.tpl');
        } else {
            $html = $this->display(__FILE__, 'views/templates/front/menubutton.tpl');
        }

        $html .= $this->display(__FILE__, 'views/templates/front/menucontainer.tpl');

        return $html;
    }

    public function getCategoryHash()
    {
        return md5(
            Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue(
                'SELECT max(date_upd) FROM '._DB_PREFIX_.'category'
            ).Configuration::get('RM_UPDATED').Context::getContext()->customer->isLogged()
        );
    }

    public function getAdditionalLinks($all_languages = false)
    {
        $links = array();
        $id_lang = (int) Context::getContext()->language->id;
        for ($i = 1; $i <= Configuration::get('RM_LINKS_COUNT'); $i++) {
            if (!$all_languages) {
                $links[] = array(
                    'id' => $i,
                    'url' => Configuration::get('RM_LINKS_URL_'.$id_lang.'_'.$i),
                    'value' => Configuration::get('RM_LINKS_VALUE_'.$id_lang.'_'.$i),
                    'target' => Configuration::get('RM_LINKS_TARGET_'.$i),
                    'area' => Configuration::get('RM_LINKS_AREA_'.$i),
                    'allpage' => Configuration::get('RM_LINKS_ALL_PAGE_'.$i),
                );
            } else {
                $url = array();
                $value = array();
                foreach (Language::getLanguages(false) as $lang) {
                    $id_lang = $lang['id_lang'];
                    $url[$id_lang] = Configuration::get('RM_LINKS_URL_'.$id_lang.'_'.$i);
                    $value[$id_lang] = Configuration::get('RM_LINKS_VALUE_'.$id_lang.'_'.$i);
                }

                $links[] = array(
                    'url' => $url,
                    'value' => $value,
                    'target' => Configuration::get('RM_LINKS_TARGET_'.$i),
                    'area' => Configuration::get('RM_LINKS_AREA_'.$i),
                    'allpage' => Configuration::get('RM_LINKS_ALL_PAGE_'.$i),
                );
            }
        }

        return $links;
    }

    public function ajaxCallCart()
    {
        return Tools::jsonEncode(
            array(
                'count' => Context::getContext()->cart->nbProducts(),
            )
        );
    }

    public function ajaxCallMenu()
    {
        switch (Tools::getValue('type')) {
            case 'category':
                return $this->ajaxCallMenuCategory();
        }
    }

    public function ajaxCallMenuCategory()
    {
        $id_category = (int) Tools::getValue('id');
        $root_category = $this->getRootCategory();
        $category = new Category($id_category, $this->context->language->id);

        $query = new DbQuery();
        $query->select('c.*, cl.*, cl.name');
        $query->from('category', 'c');
        $query->leftJoin('category_lang', 'cl', 'cl.id_category = c.id_category');
        $query->where('cl.id_lang = '.(int) Context::getContext()->language->id);
        $query->where('cl.id_shop IN (0, '.implode(',', Shop::getContextListShopID()).')');
        $query->where('cl.name is not null');
        $query->innerJoin('category_shop', 'cs', 'cs.id_category = c.id_category');
        $query->leftJoin('responsivemenu_category', 'rmc', 'rmc.id_category = c.id_category');
        $query->where('cs.id_shop = '.(int) Context::getContext()->shop->id, 'cs.position as position');
        $query->where('active = 1');
        $query->where('rmc.active_mobile is null or rmc.active_mobile = 1');
        $query->where('id_parent = '.(int) $category->id);
        $query->orderBy('cs.position');

        if (Group::isFeatureActive() && Configuration::get('RM_FILTER_WITH_GROUPS')) {
            $groups = Context::getContext()->customer->getGroups();
            $query->leftJoin('category_group', 'cg', 'cg.id_category = c.id_category');
            $query->where('id_group IN ('.implode(',', array_map('intval', $groups)).')');
        }

        $subcategories = ObjectModel::hydrateCollection(
            'Category',
            Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query),
            Context::getContext()->language->id
        );

        $this->smarty->assign('base_url', $this->context->shop->getBaseURL());
        $this->smarty->assign('category', $category);
        $this->smarty->assign('subcategories', $subcategories);
        $this->smarty->assign('additional_links', $this->getAdditionalLinks());
        $this->smarty->assign('rm_link', $this->context->link);
        $this->smarty->assign('is_root_category', $root_category->id == $id_category);
        $this->smarty->smarty->assign(
            'rm_img_dir',
            _PS_IMG_DIR_
        );
        $this->smarty->smarty->assign(
            'rm_img_url',
            $this->context->link->getMediaLink('/img/rm/')
        );
        $html = $this->display(__FILE__, 'views/templates/front/submenu.tpl');

        return Tools::jsonEncode(
            array(
                'html' => $html,
                'error' => false,
                'hash' => $this->getCategoryHash(),
            )
        );
    }

    public function renderConfigForm()
    {
        $id_lang = Context::getContext()->language->id;
        if (class_exists('PrestaShopCollection')) {
            $categories = new PrestaShopCollection('Category', $id_lang);
        } else {
            $categories = new Collection('Category', $id_lang);
        }

        $categories->orderBy('nleft');

        $collection = $categories->getResults();
        foreach ($collection as $category) {
            $category->name = str_repeat('&nbsp;&nbsp;', $category->level_depth).$category->name;
        }

        $fieldsForm = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Configuration'),
                    'icon' => 'icon-link'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->l('Root Category'),
                        'name' => 'root_category',
                        'options' => array(
                            'query' => $collection,
                            'id' => 'id', 'name' => 'name'
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Use classic bar'),
                        'name' => 'use_classic_bar',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'desc' => $this->l('Enable this option if you want to use the bar of classic theme.')
                            .' '.$this->l('Some options are not available if this option is active.')
                            .' '.$this->l('The header bar must contain an hamburger button with the id « menu-icon ».'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display header bar'),
                        'name' => 'header_bar',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'disabled' => Configuration::get('RM_USE_CLASSIC_BAR'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Use mobile logo'),
                        'name' => 'use_mobile_logo',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'desc' => $this->l('This option is only available for PrestaShop 1.6.')
                            .' '.$this->l('The mobile logo do not exists on PrestaShop 1.7 and greater.'),
                        'disabled' => Configuration::get('RM_USE_CLASSIC_BAR') || !Configuration::get('RM_HEADER_BAR'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Menu subtitle'),
                        'name' => 'displaytriggersubtitle',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'desc' => $this->l('Add the word "menu" below the button that opens the menu.'),
                        'disabled' => Configuration::get('RM_USE_CLASSIC_BAR'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display search in header bar'),
                        'name' => 'displaysearch',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'disabled' => Configuration::get('RM_USE_CLASSIC_BAR') || !Configuration::get('RM_HEADER_BAR'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display cart in header bar'),
                        'name' => 'displaycart',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'disabled' => Configuration::get('RM_USE_CLASSIC_BAR') || !Configuration::get('RM_HEADER_BAR'),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Cart action'),
                        'name' => 'cartAction',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => 'cart',
                                    'name' => $this->l('Cart'),
                                ),
                                array(
                                    'id' => 'order',
                                    'name' => $this->l('Order'),
                                ),
                                array(
                                    'id' => 'order-opc',
                                    'name' => $this->l('One Page Checkout'),
                                ),
                            ),
                            'id' => 'id',
                            'name' => 'name',
                        ),
                        'disabled' => Configuration::get('RM_USE_CLASSIC_BAR') || !Configuration::get('RM_HEADER_BAR'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display language switch in header bar'),
                        'name' => 'displaylang',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'disabled' => Configuration::get('RM_USE_CLASSIC_BAR') || !Configuration::get('RM_HEADER_BAR'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display Close Button'),
                        'name' => 'displayclose',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'desc' => $this->l('Display close button.'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display Log-in on the menu'),
                        'name' => 'displaybarlogin',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'desc' => $this->l('Display login/logout on the menu.')
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display Search on the menu'),
                        'name' => 'displaybarsearch',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'desc' => $this->l('Display search input on the menu.')
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Hook'),
                        'name' => 'hookname',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => 'footer',
                                    'name' => $this->l('Footer'),
                                ),
                                array(
                                    'id' => 'header',
                                    'name' => $this->l('Header'),
                                ),
                                array(
                                    'id' => 'custom',
                                    'name' => $this->l('Custom'),
                                ),
                            ),
                            'id' => 'id',
                            'name' => 'name',
                        ),
                        'desc' => $this->l('This is an advanced feature.')
                            .' '.$this->l('Use it if the menu is not visible, you can use a custom hook.')
                            .' '.$this->l('Don\'t forget to add the custom hook on your theme after the footer: ')
                            ."{hook h='responsivemenu'}",
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Move the menu dom at the end of the body'),
                        'name' => 'pull',
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
                    'name' => 'submit_configuration',
                    'title' => $this->l('Save')
                )
            ),
        );

        if (version_compare(_PS_VERSION_, '1.6', '<=')) {
            $fieldsForm['form']['input'][1]['type'] = 'select';
            $fieldsForm['form']['input'][1]['options'] = array(
                'query' => array(
                    array(
                        'id' => 0,
                        'name' => $this->l('No'),
                    ),
                    array(
                        'id' => 1,
                        'name' => $this->l('Yes'),
                    ),
                ),
                'id' => 'id',
                'name' => 'name',
            );
            $fieldsForm['form']['input'][2]['type'] = 'select';
            $fieldsForm['form']['input'][2]['options'] = array(
                'query' => array(
                    array(
                        'id' => 0,
                        'name' => $this->l('No'),
                    ),
                    array(
                        'id' => 1,
                        'name' => $this->l('Yes'),
                    ),
                ),
                'id' => 'id',
                'name' => 'name',
            );
        }

        $helper = new HelperForm();
        $helper->table = 'configuration';
        $helper->show_toolbar = false;
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?
            Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->identifier = $this->identifier;
        $helper->fields_value['root_category'] = $this->getRootCategory()->id;
        $helper->fields_value['header_bar'] = (int) Configuration::get('RM_HEADER_BAR');
        $helper->fields_value['filter_with_groups'] = (int) Configuration::get('RM_FILTER_WITH_GROUPS');
        $helper->fields_value['hookname'] = !Configuration::get('RM_HOOK_NAME') ? ((int)Configuration::get('RM_USE_CUSTOM_HOOK') ? 'custom' : 'footer') : Configuration::get('RM_HOOK_NAME');
        $helper->fields_value['pull'] = (int) Configuration::get('RM_PULL');
        $helper->fields_value['footerhook'] = (int) Configuration::get('RM_USE_FOOTER_HOOK');
        $helper->fields_value['displaysearch'] = (int) Configuration::get('RM_DISPLAY_SEARCH');
        $helper->fields_value['use_classic_bar'] = (int) Configuration::get('RM_USE_CLASSIC_BAR');
        $helper->fields_value['use_mobile_logo'] = (int) Configuration::get('RM_USE_MOBILE_LOGO');
        $helper->fields_value['displaycart'] = (int) Configuration::get('RM_DISPLAY_CART');
        $helper->fields_value['displaylang'] = (int) Configuration::get('RM_DISPLAY_LANG');
        $helper->fields_value['displaybarsearch'] = (int) Configuration::get('RM_DISPLAY_BAR_SEARCH');
        $helper->fields_value['displaybarlogin'] = (int) Configuration::get('RM_DISPLAY_BAR_LOGIN');
        $helper->fields_value['displaytriggersubtitle'] = (int) Configuration::get('RM_DISPLAY_TRIGGER_ST');
        $helper->fields_value['cartAction'] = Configuration::get('RM_CART_ACTION');
        $helper->fields_value['displayclose'] = (int) Configuration::get('RM_DISPLAY_CLOSE');

        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->languages = $this->context->controller->getLanguages();
        $helper->default_form_language = (int) $this->context->language->id;

        return str_replace('submitAdd', 'submit_configuration', $helper->generateForm(array($fieldsForm)));
    }

    public function renderThemeForm()
    {
        $fieldsForm = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Theme Configuration'),
                    'icon' => 'icon-link'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Mobile break point'),
                        'name' => 'breakpoint',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Overlay color'),
                        'name' => 'overlaycolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Close Button Size'),
                        'name' => 'closebuttonfontsize',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Close Button Color'),
                        'name' => 'closebuttoncolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Close Button Shadow'),
                        'name' => 'closebuttonshadow',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Header bar color'),
                        'name' => 'headerbackground',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Header icon color'),
                        'name' => 'headercolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Header bar border color'),
                        'name' => 'headerbordercolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Logo height'),
                        'name' => 'iconheight',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Logo top'),
                        'name' => 'icontop',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Search button color 1'),
                        'name' => 'searchbuttonbackground',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Search button color 2'),
                        'name' => 'searchbuttoncolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Menu background color'),
                        'name' => 'pannelbackground',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Menu border color'),
                        'name' => 'pannelbordercolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Menu title color'),
                        'name' => 'leveltitlecolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Menu title separator color'),
                        'name' => 'leveltitlebordercolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Menu back color'),
                        'name' => 'levelbackcolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Menu item color'),
                        'name' => 'levelitemcolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Menu item shadow'),
                        'name' => 'levelitemshadow',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Menu item separator color'),
                        'name' => 'levelitembordercolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Log in bar height'),
                        'name' => 'loginbarheight',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Log in bar background color'),
                        'name' => 'loginbarbackground',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Log in bar font size'),
                        'name' => 'loginbarfontsize',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Log in bar font color'),
                        'name' => 'loginbarcolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Search bar height'),
                        'name' => 'searchbarheight',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Search bar background'),
                        'name' => 'searchbarbackground',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Search bar color'),
                        'name' => 'searchbarcolor',
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Arrow color'),
                        'name' => 'arrowcolor',
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Custom CSS'),
                        'name' => 'customcss',
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Custom CSS for desktop only'),
                        'name' => 'customcssdesktop',
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Custom CSS for mobile only'),
                        'name' => 'customcssmobile',
                    ),
                ),
                'submit' => array(
                    'name' => 'submit_theme',
                    'title' => $this->l('Save')
                )
            ),
        );

        $helper = new HelperForm();
        $helper->table = 'theme';
        $helper->show_toolbar = false;
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?
            Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->identifier = $this->identifier;
        foreach ($this->themeVars as $var) {
            $helper->fields_value[$var['name']] = Configuration::get('RM_T_'.Tools::strtoupper($var['name']), null, null, null, $var['default']);
        }

        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->languages = $this->context->controller->getLanguages();
        $helper->default_form_language = (int) $this->context->language->id;

        return str_replace('submitAdd', 'submit_theme', $helper->generateForm(array($fieldsForm)));
    }


    public function getRootCategory()
    {
        $root = (int) Configuration::get('RM_ROOT_CATEGORY');
        if (!$root) {
            return Category::getRootCategory();
        }

        return new Category($root);
    }

    public function renderAddForm()
    {
        $additionnalLinkFieldsValues = $this->getAddLinkFieldsValues();
        $id = (int) $additionnalLinkFieldsValues['id_link'];

        $tpl = $this->context->controller->createTemplate(
            '../../../../modules/'.$this->name.'/views/templates/admin/icon.tpl'
        );

        $this->context->smarty->assign(
            'url',
            $this->context->link->getMediaLink('/img/rm/l'.$id.'.png')
        );

        $iconExists = file_exists(_PS_IMG_DIR_.'rm/l'.$id.'.png');
        if ($iconExists) {
            $img = $tpl->fetch();
        } else {
            $img = '';
        }

        $fieldsForm = array(
            'form' => array(
                'legend' => array(
                    'title' => (Tools::getIsset('updatelink') && !Tools::getValue('updatelink')) ?
                        $this->l('Update link') : $this->l('Add a new link'),
                    'icon' => 'icon-link'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'label' => $this->l('Label'),
                        'name' => 'label',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Link'),
                        'name' => 'link',
                        'lang' => true,
                    ),
                    array(
                        'type' => 'file',
                        'label' => $this->l('Image'),
                        'name' => 'link_image',
                        'desc' => $img,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Remove icon'),
                        'name' => 'remove_image_link',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                        'disabled' => !$iconExists,
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Area'),
                        'name' => 'area',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => '1',
                                    'name' => $this->l('Top')
                                ),
                                array(
                                    'id' => '0',
                                    'name' => $this->l('Bottom')
                                )
                            ),
                            'id' => 'id',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Always visible'),
                        'name' => 'allpage',
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
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Open in a new page'),
                        'name' => 'target',
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
                    'name' => 'submit',
                    'title' => $this->l('Add')
                )
            ),
        );

        $helper = new HelperForm();
        $helper->table = 'links';
        $helper->show_toolbar = false;
        //$helper->table =  $this->table;
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?
            Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->identifier = $this->identifier;
        $helper->fields_value = $additionnalLinkFieldsValues;

        if (Tools::getIsset('updatelink') && !Tools::getValue('updatelink')) {
            $fieldsForm['form']['submit'] = array(
                'name' => 'submitupdatelink',
                'title' => $this->l('Update')
            );
        }

        if (Tools::isSubmit('updatelink')) {
            $fieldsForm['form']['input'][] = array('type' => 'hidden', 'name' => 'updatelink');
            $fieldsForm['form']['input'][] = array('type' => 'hidden', 'name' => 'id_link');
            $helper->fields_value['updatelink'] = '';
        }

        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->languages = $this->context->controller->getLanguages();
        $helper->default_form_language = (int) $this->context->language->id;

        return str_replace(
            'submitAdd',
            Tools::getIsset('updatelink') && !Tools::getValue('updatelink') ? 'submitupdatelink' : 'submitsubmit',
            $helper->generateForm(array($fieldsForm))
        );
    }

    public function getAddLinkFieldsValues()
    {
        $links_edit = '';
        $labels_edit = '';

        if (Tools::isSubmit('updatelink')) {
            $links_edit = array();
            $labels_edit = array();
            foreach (Language::getLanguages(false) as $lang) {
                $id_lang = $lang['id_lang'];

                $links_edit[$id_lang] = Configuration::get(
                    'RM_LINKS_URL_'.$id_lang.'_'.Tools::getValue('id_link')
                );
                $labels_edit[$id_lang] = Configuration::get(
                    'RM_LINKS_VALUE_'.$id_lang.'_'.Tools::getValue('id_link')
                );
            }

            $targetEdit = Configuration::get(
                'RM_LINKS_TARGET_'.Tools::getValue('id_link')
            ) == '_blank';

            $area = Configuration::get(
                'RM_LINKS_AREA_'.Tools::getValue('id_link')
            );

            $allpage = Configuration::get(
                'RM_LINKS_ALL_PAGE_'.Tools::getValue('id_link')
            );
        }

        $fields_values = array(
            'id_link' => Tools::getValue('id_link'),
        );

        if (Tools::getValue('submitAddmodule')) {
            foreach (Language::getLanguages(false) as $lang) {
                $fields_values['label'][$lang['id_lang']] = '';
                $fields_values['link'][$lang['id_lang']] = '';
            }

            $fields_values['target'] = '';
            $fields_values['area'] = 0;
            $fields_values['allpage'] = 0;
            $fields_values['remove_image_link'] = 0;
        } else {
            foreach (Language::getLanguages(false) as $lang) {
                $fields_values['label'][$lang['id_lang']] = Tools::getValue(
                    'label_'.(int) $lang['id_lang'],
                    isset($labels_edit[$lang['id_lang']]) ? $labels_edit[$lang['id_lang']] : ''
                );
                $fields_values['link'][$lang['id_lang']] = Tools::getValue(
                    'link_'.(int) $lang['id_lang'],
                    isset($links_edit[$lang['id_lang']]) ? $links_edit[$lang['id_lang']] : ''
                );
            }

            $fields_values['target'] = Tools::getValue(
                'target',
                isset($targetEdit) ? $targetEdit : ''
            );
            $fields_values['area'] = Tools::getValue('area', isset($area) ? $area : '');
            $fields_values['allpage'] = Tools::getValue('allpage', isset($allpage) ? $allpage: '');
            $fields_values['remove_image_link'] = 0;
        }

        return $fields_values;
    }

    public function renderList()
    {
        $links = array();

        foreach ($this->getAdditionalLinks() as $key => $link) {
            $iconExists = file_exists(_PS_IMG_DIR_.'rm/l'.($key + 1).'.png');
            $img = '';
            if ($iconExists) {
                $tpl = $this->context->controller->createTemplate(
                    '../../../../modules/'.$this->name.'/views/templates/admin/icon.tpl'
                );

                $this->context->smarty->assign(
                    'url',
                    $this->context->link->getMediaLink('/img/rm/l'.($key + 1).'.png')
                );

                $img = $tpl->fetch();
            }

            $links[] = array(
                'id_link' => $link['id'],
                'value' => $link['value'],
                'area' => $link['area'] == 0 ? $this->l('Bottom') : $this->l('Top'),
                'allpage' => $link['allpage'],
                'link' => $link['url'],
                'icon' => $img,
            );
        }

        $fieldsList = array(
            'id_link' => array(
                'title' => $this->l('Link ID'),
                'type' => 'text',
            ),
            'icon' => array(
                'title' => $this->l('Icon'),
                'type' => 'image',
                'float' => true,
                'align' => 'center',
                'ajax' => true,
            ),
            'value' => array(
                'title' => $this->l('Label'),
                'type' => 'text',
            ),
            'area' => array(
                'title' => $this->l('Area'),
                'type' => 'text',
            ),
            'link' => array(
                'title' => $this->l('Link'),
                'type' => 'link',
            ),
        );

        $helper = new HelperList();
        $helper->shopLinkType = '';
        $helper->simple_header = true;
        $helper->table = 'link';
        $helper->identifier = 'id_link';
        $helper->actions = array('edit', 'delete', 'up', 'down');
        $helper->show_toolbar = false;
        $helper->module = $this;
        $helper->title = $this->l('Link list');
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        return $helper->generateList($links, $fieldsList);
    }

    protected static $cache_lang = array();

    /**
     * Custom action icon "up"
     */
    public function displayEditLink($token = null, $id = null)
    {
        $tpl = $this->context->controller->createTemplate(
            '../../../../modules/responsivemenu/views/templates/admin/helper/list/list_action_default.tpl'
        );

        if (!array_key_exists('edit', self::$cache_lang)) {
            self::$cache_lang['edit'] = $this->l('Edit');
        }

        $this->context->smarty->assign(array(
            'id' => $id,
            'href' => 'index.php?controller=AdminModules&configure=responsivemenu'
                .'&tab_module=front_office_features&module_name=responsivemenu'
                .'&id_link='.$id
                .'&updatelink&token='.($token != null ? $token : $this->token)
                .'#configuration_form_2',
            'action' => self::$cache_lang['edit'],
            'icon' => 'pencil',
        ));

        return $tpl->fetch();
    }

    /**
     * Custom action icon "up"
     */
    public function displayUpLink($token = null, $id = null)
    {
        $tpl = $this->context->controller->createTemplate(
            '../../../../modules/responsivemenu/views/templates/admin/helper/list/list_action_default.tpl'
        );

        if (!array_key_exists('up', self::$cache_lang)) {
            self::$cache_lang['up'] = $this->l('Up');
        }

        $this->context->smarty->assign(array(
            'id' => $id,
            'href' => 'index.php?controller=AdminModules&configure=responsivemenu'
                .'&tab_module=front_office_features&module_name=responsivemenu'
                .'&id='.$id
                .'&up&token='.($token != null ? $token : $this->token)
                .'#form-link',
            'action' => self::$cache_lang['up'],
            'icon' => 'circle-arrow-up',
        ));

        return $tpl->fetch();
    }

    /**
     * Custom action icon "down"
     */
    public function displayDownLink($token = null, $id = null)
    {
        $tpl = $this->context->controller->createTemplate(
            '../../../../modules/responsivemenu/views/templates/admin/helper/list/list_action_default.tpl'
        );

        if (!array_key_exists('down', self::$cache_lang)) {
            self::$cache_lang['down'] = $this->l('Down');
        }

        $this->context->smarty->assign(array(
            'id' => $id,
            'href' => 'index.php?controller=AdminModules&configure=responsivemenu'
                .'&tab_module=front_office_features&module_name=responsivemenu'
                .'&id='.$id
                .'&down&token='.($token != null ? $token : $this->token)
                .'#form-link',
            'action' => self::$cache_lang['down'],
            'icon' => 'circle-arrow-down',
        ));

        return $tpl->fetch();
    }

    protected function processAjax()
    {
        switch (Tools::getValue('action')) {
            case 'activeresponsivemenu_category':
                $category = new Category((int) Tools::getValue('id'));
                if ($category->id) {
                    $category->active = !$category->active;
                    $category->save();
                }
                echo json_encode(
                    array(
                        'success' => true,
                        'text' => !$category->active ? $this->l('Category disabled') : $this->l('Category enabled')
                    )
                );
                break;
            case 'active_mobileresponsivemenu_category':
                $active = Db::getInstance()->getValue(
                    'SELECT active_mobile FROM `'._DB_PREFIX_.'responsivemenu_category` WHERE id_category = '.(int) Tools::getValue('id')
                );
                if (false === $active) {
                    Db::getInstance()->execute(
                        'INSERT INTO `'._DB_PREFIX_.'responsivemenu_category`
                        SET active_mobile = 0,
                        id_category = '.(int) Tools::getValue('id')
                    );
                } else {
                    Db::getInstance()->execute(
                        'UPDATE `'._DB_PREFIX_.'responsivemenu_category`
                        SET active_mobile = '.((int) !$active).'
                        WHERE id_category = '.(int) Tools::getValue('id')
                    );
                }
                echo json_encode(
                    array(
                        'success' => true,
                        'text' => $active || $active === false ? $this->l('Category disabled on mobile') : $this->l('Category enabled on mobile')
                    )
                );
                Configuration::updateValue('RM_UPDATED', time());
                break;
        }
        exit;
    }

    public function getContent()
    {
        if (Tools::getIsset('ajax')) {
            return $this->processAjax();
        }

        $this->context->controller->addCSS(($this->_path).'views/css/admin/main.css', 'all');
        $this->context->controller->addJS(($this->_path).'views/js/admin/tabs.js');
        Context::getContext()->smarty->assign(
            'rm_ps_version',
            version_compare(_PS_VERSION_, '1.7', '<') ? 16 : 17
        );

        $languages = $this->context->controller->getLanguages();
        $default_language = Configuration::get('PS_LANG_DEFAULT');

        if (Tools::isSubmit('submit_configuration')) {
            Configuration::updateValue(
                'RM_ROOT_CATEGORY',
                (int) Tools::getValue('root_category')
            );
            Configuration::updateValue('RM_HEADER_BAR', (int) Tools::getValue('header_bar'));
            Configuration::updateValue('RM_FILTER_WITH_GROUPS', (int) Tools::getValue('filter_with_groups'));
            Configuration::updateValue('RM_HOOK_NAME', Tools::getValue('hookname'));
            Configuration::updateValue('RM_PULL', (int) Tools::getValue('pull'));
            Configuration::updateValue('RM_DISPLAY_CART', (int) Tools::getValue('displaycart'));
            Configuration::updateValue('RM_DISPLAY_LANG', (int) Tools::getValue('displaylang'));
            Configuration::updateValue('RM_DISPLAY_SEARCH', (int) Tools::getValue('displaysearch'));
            Configuration::updateValue('RM_USE_CLASSIC_BAR', (int) Tools::getValue('use_classic_bar'));
            Configuration::updateValue('RM_USE_MOBILE_LOGO', (int) Tools::getValue('use_mobile_logo'));
            Configuration::updateValue('RM_UPDATED', time());
            Configuration::updateValue('RM_DISPLAY_CLOSE', (int) Tools::getValue('displayclose'));
            Configuration::updateValue('RM_DISPLAY_BAR_SEARCH', (int) Tools::getValue('displaybarsearch'));
            Configuration::updateValue('RM_DISPLAY_BAR_LOGIN', (int) Tools::getValue('displaybarlogin'));
            Configuration::updateValue('RM_DISPLAY_TRIGGER_ST', (int) Tools::getValue('displaytriggersubtitle'));
            Configuration::updateValue('RM_CART_ACTION', Tools::getValue('cartAction'));

            $this->confirmation = $this->displayConfirmation(
                $this->l('Configuration modified')
            );
        }

        if (Tools::isSubmit('submit_theme')) {
            foreach ($this->themeVars as $var) {
                Configuration::updateValue('RM_T_'.Tools::strtoupper($var['name']), Tools::getValue($var['name']));
            }

            $this->makeCss();

            $this->confirmation = $this->displayConfirmation(
                $this->l('Theme modified')
            );
        }

        if (Tools::isSubmit('submit') || Tools::isSubmit('submitupdatelink')) {
            $links = array();
            $labels = array();
            foreach ($languages as $val) {
                $links[$val['id_lang']] = Tools::getValue('link_'.(int) $val['id_lang']);
                $labels[$val['id_lang']] = Tools::getValue('label_'.(int) $val['id_lang']);
            }
            $target = (Tools::getValue('target') ? '_blank' : '');
            $area = Tools::getValue('area');
            $allpage = Tools::getValue('allpage');

            $count_links = count($links);
            $count_label = count($labels);

            if (Tools::isSubmit('submit')) {
                $count_links = (int) Configuration::get('RM_LINKS_COUNT') + 1;
            } else {
                $count_links = Tools::getValue('id_link');
            }



            if ($count_links || $count_label) {
                if (!$count_links) {
                    $this->errors .= $this->displayError($this->l('Please complete the "Link" field.'));
                } elseif (!$count_label) {
                    $this->errors .= $this->displayError($this->l('Please add a label.'));
                } elseif (!isset($labels[$default_language])) {
                    $this->errors .= $this->displayError($this->l('Please add a label for your default language.'));
                } elseif (!Tools::getValue('remove_image_link') && $_FILES['link_image']['error'] && !empty($_FILES['link_image']['tmp_name'])) {
                    $this->errors .= $this->displayError(
                        $this->l('The icon cannot be imported. Make sure it\'s not bigger the the allowed limitation')
                    );
                } elseif (!Tools::getValue('remove_image_link') && strpos($_FILES['link_image']['type'], 'image/') !== 0 && !empty($_FILES['link_image']['tmp_name'])) {
                    $this->errors .= $this->displayError(
                        $this->l('The icon must be a valid image.').var_export($_FILES,true)
                    );
                } else {
                    if (Tools::isSubmit('submit')) {
                        Configuration::updateValue('RM_LINKS_COUNT', $count_links);
                    }

                    if (empty($labels[$default_language])) {
                        $this->errors .= $this->displayError(
                            $this->l('The label must be set in the default language')
                        );
                    }

                    if (empty($links[$default_language])) {
                        $this->errors .= $this->displayError(
                            $this->l('The link must be set in the default language')
                        );
                    }

                    foreach ($languages as $val) {
                        $id_lang = $val['id_lang'];
                        if (empty($labels[$id_lang])) {
                            $labels[$id_lang] = $labels[$default_language];
                        }
                        if (empty($links[$id_lang])) {
                            $links[$id_lang] = $labels[$default_language];
                        }
                        if (empty($this->errors)) {
                            Configuration::updateValue(
                                'RM_LINKS_VALUE_'.$id_lang.'_'.$count_links,
                                $labels[$id_lang]
                            );
                            Configuration::updateValue(
                                'RM_LINKS_URL_'.$id_lang.'_'.$count_links,
                                $links[$id_lang]
                            );
                            Configuration::updateValue(
                                'RM_LINKS_TARGET_'.$count_links,
                                $target
                            );
                            Configuration::updateValue(
                                'RM_LINKS_AREA_'.$count_links,
                                $area
                            );
                            Configuration::updateValue(
                                'RM_LINKS_ALL_PAGE_'.$count_links,
                                $allpage
                            );
                        }

                        if (!Tools::getValue('remove_image_link')) {
                            if (!file_exists(_PS_IMG_DIR_.'rm')) {
                                mkdir(_PS_IMG_DIR_.'rm');
                            }

                            move_uploaded_file($_FILES['link_image']['tmp_name'], _PS_IMG_DIR_.'rm/l'.$count_links.'.png');
                        } elseif (file_exists(_PS_IMG_DIR_.'rm/l'.$count_links.'.png')) {
                            unlink(_PS_IMG_DIR_.'rm/l'.$count_links.'.png');
                        }
                    }
                }

                if (empty($this->errors)) {
                    Configuration::updateValue('RM_UPDATED', time());

                    // redirect
                    Tools::redirectAdmin(
                        '?controller=AdminModules&configure='.$this->name
                        .'&confirm=1&tab_module='.Tools::getValue('tab_module').'&module_name='
                        .$this->name.'&token='.Tools::getValue('token')
                        .'#configuration_form_2'
                    );
                }
            }
        } elseif (Tools::isSubmit('deletelink')) {
            $id_link = Tools::getValue('id_link');
            $links = $this->getAdditionalLinks(true);
            array_splice($links, $id_link - 1, 1);
            Configuration::updateValue('RM_LINKS_COUNT', count($links));
            foreach ($links as $id_link => $link) {
                $id_link++;
                foreach ($languages as $val) {
                    $id_lang = $val['id_lang'];
                    Configuration::updateValue(
                        'RM_LINKS_VALUE_'.$id_lang.'_'.$id_link,
                        $link['value'][$id_lang]
                    );
                    Configuration::updateValue(
                        'RM_LINKS_URL_'.$id_lang.'_'.$id_link,
                        $link['url'][$id_lang]
                    );
                }
                Configuration::updateValue(
                    'RM_LINKS_TARGET_'.$id_link,
                    $link['target']
                );
            }

            Configuration::updateValue('RM_UPDATED', time());
            // redirect
            Tools::redirectAdmin(
                '?controller=AdminModules&configure='.$this->name
                .'&confirm=2&tab_module='.Tools::getValue('tab_module')
                .'&module_name='.$this->name.'&token='.Tools::getValue('token')
                .'#configuration_form_2'
            );
        } elseif (Tools::getIsset('up')) {
            $links = $this->getAdditionalLinks(true);
            $id = (int) Tools::getValue('id') - 1;
            $maxId = count($links);

            $newLinks = array();

            for ($i = 0; $i < $maxId; $i++) {
                if ($i == $id && $id != 0) {
                    $newLinks[$i-1] = $links[$i];
                } elseif ($i == $id - 1 && $id != 0) {
                    $newLinks[$id] = $links[$i];
                } else {
                    $newLinks[$i] = $links[$i];
                }
            }

            foreach ($newLinks as $id_link => $link) {
                $id_link++;
                foreach ($languages as $val) {
                    $id_lang = $val['id_lang'];
                    Configuration::updateValue(
                        'RM_LINKS_VALUE_'.$id_lang.'_'.$id_link,
                        $link['value'][$id_lang]
                    );
                    Configuration::updateValue(
                        'RM_LINKS_URL_'.$id_lang.'_'.$id_link,
                        $link['url'][$id_lang]
                    );
                }
                Configuration::updateValue(
                    'RM_LINKS_TARGET_'.$id_link,
                    $link['target']
                );
            }
        } elseif (Tools::getIsset('down')) {
            $links = $this->getAdditionalLinks(true);
            $id = (int) Tools::getValue('id') - 1;
            $maxId = count($links);

            $newLinks = array();

            for ($i = 0; $i < $maxId; $i++) {
                if ($i == $id && $id != $maxId) {
                    $newLinks[$i+1] = $links[$i];
                } elseif ($i == $id + 1 && $id != $maxId) {
                    $newLinks[$id] = $links[$i];
                } else {
                    $newLinks[$i] = $links[$i];
                }
            }

            foreach ($newLinks as $id_link => $link) {
                $id_link++;
                foreach ($languages as $val) {
                    $id_lang = $val['id_lang'];
                    Configuration::updateValue(
                        'RM_LINKS_VALUE_'.$id_lang.'_'.$id_link,
                        $link['value'][$id_lang]
                    );
                    Configuration::updateValue(
                        'RM_LINKS_URL_'.$id_lang.'_'.$id_link,
                        $link['url'][$id_lang]
                    );
                }
                Configuration::updateValue(
                    'RM_LINKS_TARGET_'.$id_link,
                    $link['target']
                );
            }
        }

        $html = $this->display(__FILE__, 'views/templates/admin/tabs.tpl');
        $html .= $this->renderAds();


        $html .= $this->renderConfigForm();
        $html .= $this->renderThemeForm();

        $html .= $this->renderAddForm();

        if (count($this->getAdditionalLinks())) {
            $html .= $this->renderList();
        }

        $html .= $this->renderCategoryList();

        switch (Tools::getValue('confirm', -1)) {
            case 1:
                $this->confirmation = $this->displayConfirmation(
                    $this->l('Link added')
                );
                break;
            case 2:
                $this->confirmation = $this->displayConfirmation(
                    $this->l('Link removed')
                );
                break;
        }

        return $this->confirmation.$this->errors.$html;
    }

    protected function makeCss()
    {
        $content = Tools::file_get_contents(_PS_ROOT_DIR_.'/modules/'.$this->name.'/views/css/main.tpl.css');

        foreach ($this->themeVars as $var) {
            $content = str_replace(
                '@'.$var['name'].'@',
                Configuration::get('RM_T_'.Tools::strtoupper($var['name']), null, null, null, $var['default']),
                $content
            );
        }

        // sum
        foreach ($this->sums as $name => $vars) {
            $sum = 0;
            foreach ($vars as $varname) {
                foreach ($this->themeVars as $var) {
                    if ($var['name'] == $varname) {
                        $sum += (int) Configuration::get('RM_T_'.Tools::strtoupper($var['name']), null, null, null, $var['default']);
                    }
                }
            }
            $content = str_replace(
                '@'.$name.'@',
                $sum,
                $content
            );
        }

        file_put_contents(
            _PS_ROOT_DIR_.'/modules/'.$this->name.'/views/css/main.css',
            $content
        );
    }

    protected function getCategories()
    {
        if (is_null($this->cacheCategory)) {

            // Compatibility for prestashop 1.5.*
            if (version_compare(_PS_VERSION_, '1.6', '<')) {
                $categories = self::getNestedCategories(null, null, false);
            } else {
                $categories = Category::getNestedCategories(null, null, false);
            }

            $this->cacheCategory = $this->flatCategories($categories);
        }

        return $this->cacheCategory;
    }

    protected function flatCategories($categories, $prefix = "")
    {
        $results = array();

        $query = new DbQuery();
        $query->select('id_category, active_mobile');
        $query->from('responsivemenu_category');

        $customCategories = array();
        foreach (Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query) as $row) {
            $customCategories[$row['id_category']] = $row;
        }

        foreach ($categories as $category) {
            $results[$category['id_category']] = array(
                'id' => $category['id_category'],
                'name' => $prefix . $category['name'],
                'active' => $category['active'],
                'active_mobile' => isset($customCategories[$category['id_category']]) ? $customCategories[$category['id_category']]['active_mobile'] : true,
            );

            $iconExists = file_exists(_PS_IMG_DIR_.'rm/c'.$category['id_category'].'.png');
            if (!$iconExists) {
                $results[$category['id_category']]['icon'] = $this->l('Define an icon');
            } else {
                $tpl = $this->context->controller->createTemplate(
                    '../../../../modules/'.$this->name.'/views/templates/admin/icon.tpl'
                );

                $this->context->smarty->assign(
                    'url',
                    $this->context->link->getMediaLink('/img/rm/c'.$category['id_category'].'.png')
                );
                $results[$category['id_category']]['icon'] = $tpl->fetch();
            }

            if (!empty($category['children'])) {
                $results = array_replace($results, $this->flatCategories($category['children'], $prefix . $category['name'] . ' > '));
            }
        }

        return $results;
    }

    protected function processCategoryForm()
    {
        if (!Tools::getIsset('submit_configurationcategory')) {
            return;
        }

        $id = (int) Tools::getValue('id');

        if (!Tools::getValue('remove')) {
            if ($_FILES['category_image']['error']) {
                $this->errors .= $this->displayError(
                    $this->l('The icon cannot be imported. Make sure it\'s not bigger the the allowed limitation')
                );
                return;
            }

            if (strpos($_FILES['category_image']['type'], 'image/') !== 0) {
                $this->errors .= $this->displayError(
                    $this->l('The icon must be a valid image.')
                );
                return;
            }

            if (!file_exists(_PS_IMG_DIR_.'rm')) {
                mkdir(_PS_IMG_DIR_.'rm');
            }

            move_uploaded_file($_FILES['category_image']['tmp_name'], _PS_IMG_DIR_.'rm/c'.$id.'.png');

            $this->confirmation = $this->displayConfirmation(
                $this->l('Icon saved.')
            );
            Configuration::updateValue('RM_UPDATED', time());
        } else {
            if (file_exists(_PS_IMG_DIR_.'rm/c'.$id.'.png')) {
                unlink(_PS_IMG_DIR_.'rm/c'.$id.'.png');
            }

            $this->confirmation = $this->displayConfirmation(
                $this->l('Icon removed.')
            );
            Configuration::updateValue('RM_UPDATED', time());
        }
    }

    protected function renderCategoryForm()
    {
        if ((!Tools::getIsset('updateresponsivemenu_category')
            && !Tools::getIsset('submit_configurationcategory'))
            || !Tools::getIsset('id')) {

            return;
        }

        $this->processCategoryForm();

        if (!empty($this->confirmation)) {
            return;
        }

        $id = (int) Tools::getValue('id');
        $idLang = (int) Context::getContext()->language->id;
        $category = new Category((int) $id, (int) $idLang);

        $tpl = $this->context->controller->createTemplate(
            '../../../../modules/'.$this->name.'/views/templates/admin/icon.tpl'
        );

        $this->context->smarty->assign(
            'url',
            $this->context->link->getMediaLink('/img/rm/c'.$id.'.png')
        );

        $iconExists = file_exists(_PS_IMG_DIR_.'rm/c'.$id.'.png');
        if ($iconExists) {
            $img = $tpl->fetch();
        } else {
            $img = '';
        }

        $fieldsForm = array(
            'form' => array(
                'legend' => array(
                    'title' => sprintf($this->l('Define "%s" icon'), $category->name),
                    'icon' => 'icon-link'
                ),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'name' => 'id',
                    ),
                    array(
                        'type' => 'file',
                        'label' => $this->l('Image'),
                        'name' => 'category_image',
                        'desc' => $img,
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Remove icon'),
                        'name' => 'remove',
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'name' => 'submit_category_icon',
                    'title' => $this->l('Save')
                )
            ),
        );

        $helper = new HelperForm();
        $helper->table = 'category';
        $helper->show_toolbar = false;
        $lang = new Language((int) Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ?
            Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->identifier = $this->identifier;
        $helper->fields_value['remove'] = false;
        $helper->fields_value['id'] = $id;

        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->languages = $this->context->controller->getLanguages();
        $helper->default_form_language = (int) $this->context->language->id;

        return str_replace('submitAdd', 'submit_configuration', $helper->generateForm(array($fieldsForm)));
    }

    public function renderCategoryList()
    {
        $form = $this->renderCategoryForm();

        $routes = $this->getCategories();

        if (!count($routes)) {
            return;
        }

        $fieldsList = array(
            'id' => array(
                'title' => $this->l('Category ID'),
                'type' => 'int',
                'class' => 'fixed-width-xs',
            ),
            'icon' => array(
                'title' => $this->l('Icon'),
                'type' => 'image',
                'float' => true,
                'align' => 'center',
                'ajax' => true,
            ),
            'name' => array(
                'title' => $this->l('Category Path'),
                'type' => 'text',
            ),
            'active' => array(
                'title' => $this->l('Active'),
                'active' => 'active',
                'type' => 'bool',
                'class' => 'fixed-width-xs',
                'align' => 'center',
                'ajax' => true,
            ),
            'active_mobile' => array(
                'title' => $this->l('Active on mobile'),
                'active' => 'active_mobile',
                'type' => 'bool',
                'class' => 'fixed-width-xs',
                'align' => 'center',
                'ajax' => true,
            ),
        );

        $helper = new HelperList();
        $helper->shopLinkType = '';
        $helper->simple_header = true;
        $helper->table = 'responsivemenu_category';
        $helper->identifier = 'id';
        $helper->actions = array('define_icon');
        $helper->show_toolbar = false;
        $helper->module = $this;
        $helper->title = $this->l('Category list');
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name.'&type=category';

        return $form.$helper->generateList($routes, $fieldsList);
    }

    protected function renderAds()
    {
        $protocol_link = (Configuration::get('PS_SSL_ENABLED') && Tools::usingSecureMode()) ? 'https://' : 'http://';
        $isoCode = 'en';
        if (Context::getContext()->language->iso_code == 'fr') {
            $isoCode = 'fr';
        }

        $url = $protocol_link.Tools::getShopDomainSsl().__PS_BASE_URI__.'/modules/responsivemenu/views/css/images/sublimecategories_'.$isoCode.'.png';
        $link = 'https://addons.prestashop.com/en/page-customization/30838-sublime-categories.html';
        if (Context::getContext()->language->iso_code == 'fr') {
            $link = 'https://addons.prestashop.com/fr/personnalisation-de-page/30838-sublime-categories.html';
        }

        return '
            <div
                style="
                    margin-bottom: 20px;
                    border: solid 1px #d3d8db;
                    background-color: #fff;
                    -webkit-border-radius: 5px;
                    border-radius: 5px;
                "
            >
                <a href="'.$link.'">
                    <img style="width: 100%; max-width: 576px;" src="'.$url.'" />
                </a>
            </div>';
    }

    /**
     * Compatibility for prestashop 1.5.*
     *
     * Copy of Category::getNestedCategories
     *
     *
     * Get nested categories
     *
     * @param int|null $idRootCategory     Root Category ID
     * @param int|bool $idLang             Language ID
     *                                     `false` if language filter should not be used
     * @param bool     $active             Whether the category must be active
     * @param null     $groups
     * @param bool     $useShopRestriction Restrict to current Shop
     * @param string   $sqlFilter          Additional SQL clause(s) to filter results
     * @param string   $orderBy            Change the default order by
     * @param string   $limit              Set the limit
     *                                     Both the offset and limit can be given
     *
     * @return array|null
     */
    public static function getNestedCategories(
        $idRootCategory = null,
        $idLang = false,
        $active = true,
        $groups = null,
        $useShopRestriction = true,
        $sqlFilter = '',
        $orderBy = '',
        $limit = ''
    ) {
        if (isset($idRootCategory) && !Validate::isInt($idRootCategory)) {
            die(Tools::displayError());
        }

        if (!Validate::isBool($active)) {
            die(Tools::displayError());
        }

        if (isset($groups) && Group::isFeatureActive() && !is_array($groups)) {
            $groups = (array) $groups;
        }

        $cacheId = 'Category::getNestedCategories_'.md5(
                (int) $idRootCategory.
                (int) $idLang.
                (int) $active.
                (int) $useShopRestriction.
                (isset($groups) && Group::isFeatureActive() ? implode('', $groups) : '').
                (isset($sqlFilter) ? $sqlFilter : '').
                (isset($orderBy) ? $orderBy : '').
                (isset($limit) ? $limit : '')
            );

        if (!Cache::isStored($cacheId)) {
            $result = Db::getInstance()->executeS('
                SELECT c.*, cl.*
                FROM `'._DB_PREFIX_.'category` c
                '.($useShopRestriction ? Shop::addSqlAssociation('category', 'c') : '').'
                LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON c.`id_category` = cl.`id_category`'.Shop::addSqlRestrictionOnLang('cl').'
                '.(isset($groups) && Group::isFeatureActive() ? 'LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON c.`id_category` = cg.`id_category`' : '').'
                '.(isset($idRootCategory) ? 'RIGHT JOIN `'._DB_PREFIX_.'category` c2 ON c2.`id_category` = '.(int) $idRootCategory.' AND c.`nleft` >= c2.`nleft` AND c.`nright` <= c2.`nright`' : '').'
                WHERE 1 '.$sqlFilter.' '.($idLang ? 'AND `id_lang` = '.(int) $idLang : '').'
                '.($active ? ' AND c.`active` = 1' : '').'
                '.(isset($groups) && Group::isFeatureActive() ? ' AND cg.`id_group` IN ('.implode(',', array_map('intval', $groups)).')' : '').'
                '.(!$idLang || (isset($groups) && Group::isFeatureActive()) ? ' GROUP BY c.`id_category`' : '').'
                '.($orderBy != '' ? $orderBy : ' ORDER BY c.`level_depth` ASC').'
                '.($orderBy == '' && $useShopRestriction ? ', category_shop.`position` ASC' : '').'
                '.($limit != '' ? $limit : '')
            );

            $categories = array();
            $buff = array();

            if (!isset($idRootCategory)) {
                $idRootCategory = Category::getRootCategory()->id;
            }

            foreach ($result as $row) {
                $current = &$buff[$row['id_category']];
                $current = $row;

                if ($row['id_category'] == $idRootCategory) {
                    $categories[$row['id_category']] = &$current;
                } else {
                    $buff[$row['id_parent']]['children'][$row['id_category']] = &$current;
                }
            }

            Cache::store($cacheId, $categories);
        } else {
            $categories = Cache::retrieve($cacheId);
        }

        return $categories;
    }
}
