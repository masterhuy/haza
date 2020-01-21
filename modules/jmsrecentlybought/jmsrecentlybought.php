<?php
/**
* 2007-2018 PrestaShop
*
* Prestashop Recently Bought
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2018 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once('class/JmsHelper.php');
class JmsRecentlyBought extends Module
{
    public function __construct()
    {
        $this->name = 'jmsrecentlybought';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
        $this->bootstrap = true;
        $this->secure_key = Tools::encrypt($this->name);
		$this->module_key = '2ed1b0c1435d189518f77e4148759360';
        parent::__construct();
        $this->cache = 'product.cache';
        $this->displayName = $this->l('Jms Recently Bought');
        $this->description = $this->l('Show sale notification on frontend, it helps site get more sales.');
    }
    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('header') ||
            !$this->registerHook('actionFrontControllerSetMedia') ||
            !$this->registerHook('displayBeforeBodyClosingTag')
        ) {
            $this->_errors[] = $this->l('register hook failed');
            return false;
        }
        $languages = $this->context->controller->getLanguages();

        $res = Configuration::updateValue('JRB_ENABLE', true);
        foreach ($languages as $lang) {
            $res &= Configuration::updateValue(
                "JRB_POPUP_CONTENT_{$lang['id_lang']}",
                'Someone in {address} purchased a {product_link} {time_ago}'
            );
            $res &= Configuration::updateValue(
                "JRB_ADDRESS_LIST_{$lang['id_lang']}",
                "New York City, New York, USA\nParis, France\nAlaska, USA\nLondon, England"
            );
        }
        $res &= Configuration::updateValue('JRB_POPUP_SHOW_ANIMATE', 'bounceInUp');
        $res &= Configuration::updateValue('JRB_POPUP_HIDE_ANIMATE', 'fadeOut');
        $res &= Configuration::updateValue('JRB_POPUP_POSITION', 'bottom_left');
        $res &= Configuration::updateValue('JRB_IMAGE_POSITION', 'img_left');
        $res &= Configuration::updateValue('JRB_CLOSE_ICON', true);
        $res &= Configuration::updateValue('JRB_USE_CACHE', true);
        $res &= Configuration::updateValue('JRB_AJAX', 0);
        $res &= Configuration::updateValue('JRB_EXTERNAL_LINK', true);
        $res &= Configuration::updateValue('JRB_GET_PRODUCT_TYPE', 0);
        $res &= Configuration::updateValue('JRB_SELECT_CATEGORY', '[]');
        $res &= Configuration::updateValue('JRB_ORDER_TIME', 500);
        $res &= Configuration::updateValue('JRB_ORDER_TIME_UNIT', 'days');
        $res &= Configuration::updateValue('JRB_ORDER_STATUS', '[]');
        $res &= Configuration::updateValue('JRB_SELECT_PRODUCT', '[]');
        $res &= Configuration::updateValue('JRB_FRAME_TIME', 60);
        $res &= Configuration::updateValue('JRB_FRAME_TIME', 60);
        $res &= Configuration::updateValue('JRB_LOOP', true);
        $res &= Configuration::updateValue('JRB_INIT_TIME', 3);
        $res &= Configuration::updateValue('JRB_DISPLAY_TIME', 5);
        $res &= Configuration::updateValue('JRB_NEXT_TIME', 10);
        $res &= Configuration::updateValue('JRB_TOTAL', 10);
        $res &= Configuration::updateValue('JRB_BACKGROUND', '#ffffff');
        $res &= Configuration::updateValue('JRB_BORDER_RADIUS', 3);
        $res &= Configuration::updateValue('JRB_TEXT_COLOR', '#000000');
        $res &= Configuration::updateValue('JRB_LINK_COLOR', '#000000');
        $res &= Configuration::updateValue('JRB_TIME_COLOR', '#000000');
        $res &= Configuration::updateValue('JRB_TEXT_SIZE', 13);
        $res &= Configuration::updateValue('JRB_LINK_SIZE', 15);
        $res &= Configuration::updateValue('JRB_TIME_SIZE', 11);
        $res &= Configuration::updateValue('JRB_CUSTOM_CSS', null);

        if (!$res) {
            $this->_errors[] = $this->l('update configuration failed');
            return false;
        }
        return true;
    }
    public function uninstall()
    {
        $languages = $this->context->controller->getLanguages();
        if (!parent::uninstall() ||
            !Configuration::deleteByName('JRB_ENABLE') ||
            !Configuration::deleteByName('JRB_POPUP_SHOW_ANIMATE') ||
            !Configuration::deleteByName('JRB_POPUP_HIDE_ANIMATE') ||
            !Configuration::deleteByName('JRB_POPUP_POSITION') ||
            !Configuration::deleteByName('JRB_IMAGE_POSITION') ||
            !Configuration::deleteByName('JRB_CLOSE_ICON') ||
            !Configuration::deleteByName('JRB_USE_CACHE') ||
            !Configuration::deleteByName('JRB_AJAX') ||
            !Configuration::deleteByName('JRB_EXTERNAL_LINK') ||
            !Configuration::deleteByName('JRB_GET_PRODUCT_TYPE') ||
            !Configuration::deleteByName('JRB_SELECT_CATEGORY') ||
            !Configuration::deleteByName('JRB_ORDER_TIME') ||
            !Configuration::deleteByName('JRB_ORDER_TIME_UNIT') ||
            !Configuration::deleteByName('JRB_ORDER_STATUS') ||
            !Configuration::deleteByName('JRB_SELECT_PRODUCT') ||
            !Configuration::deleteByName('JRB_FRAME_TIME') ||
            !Configuration::deleteByName('JRB_POPUP_CONTENT') ||
            !Configuration::deleteByName('JRB_FRAME_TIME') ||
            !Configuration::deleteByName('JRB_ADDRESS_LIST') ||
            !Configuration::deleteByName('JRB_LOOP') ||
            !Configuration::deleteByName('JRB_INIT_TIME') ||
            !Configuration::deleteByName('JRB_DISPLAY_TIME') ||
            !Configuration::deleteByName('JRB_NEXT_TIME') ||
            !Configuration::deleteByName('JRB_TOTAL') ||
            !Configuration::deleteByName('JRB_BACKGROUND') ||
            !Configuration::deleteByName('JRB_BORDER_RADIUS') ||
            !Configuration::deleteByName('JRB_TEXT_COLOR') ||
            !Configuration::deleteByName('JRB_LINK_COLOR') ||
            !Configuration::deleteByName('JRB_TIME_COLOR') ||
            !Configuration::deleteByName('JRB_TEXT_SIZE') ||
            !Configuration::deleteByName('JRB_LINK_SIZE') ||
            !Configuration::deleteByName('JRB_TIME_SIZE') ||
            !Configuration::deleteByName('JRB_CUSTOM_CSS')
        ) {
            return false;
        }
        foreach ($languages as $lang) {
            Configuration::deleteByName("JRB_POPUP_CONTENT_{$lang['id_lang']}");
            Configuration::deleteByName("JRB_ADDRESS_LIST_{$lang['id_lang']}");
        }
        return true;
    }
    private function initAnimateEffect()
    {
        $arr = array(
            array(
                'label' => 'Attention Seekers',
                'options' => array(
                    'bounce',
                    'flash',
                    'pulse',
                    'rubberBand',
                    'shake',
                    'swing',
                    'tada',
                    'wobble',
                    'jello',
                )
            ),
            array(
                'label' => 'Bouncing Entrances',
                'options' => array(
                    'bounceIn',
                    'bounceInDown',
                    'bounceInLeft',
                    'bounceInUp',
                    'bounceIngRihgt',
                )
            ),
            array(
                'label' => 'Bouncing Exits',
                'options' => array(
                    'bounceOut',
                    'bounceOutDown',
                    'bounceOutLeft',
                    'bounceOutUp',
                    'bounceOutgRihgt',
                )
            ),
            array(
                'label' => 'Fading Entrances',
                'options' => array(
                    'fadeIn',
                    'fadeInDown',
                    'fadeInDownBig',
                    'fadeInLeft',
                    'fadeInLeftBig',
                    'fadeInUp',
                    'fadeInUpBig',
                    'fadeInRight',
                    'fadeInRightBig',
                )
            ),
            array(
                'label' => 'Fading Exits',
                'options' => array(
                    'fadeOut',
                    'fadeOutDown',
                    'fadeOutDownBig',
                    'fadeOutLeft',
                    'fadeOutLeftBig',
                    'fadeOutUp',
                    'fadeOutUpBig',
                    'fadeOutRight',
                    'fadeOutRightBig',
                )
            ),
            array(
                'label' => 'Flippers',
                'options' => array(
                    'flip',
                    'flipInX',
                    'flipInY',
                    'flipOutX',
                    'flipOutY',
                )
            ),
            array(
                'label' => 'Lightspeed',
                'options' => array(
                    'lightSpeedIn',
                    'lightSpeedOut',
                )
            ),
            array(
                'label' => 'Rotating Entrances',
                'options' => array(
                    'rotateIn',
                    'rotateInDownLeft',
                    'rotateInDownRight',
                    'rotateInUpLeft',
                    'rotateInUpRight',
                )
            ),
            array(
                'label' => 'Rotating Exits',
                'options' => array(
                    'rotateOut',
                    'rotateOutDownLeft',
                    'rotateOutDownRight',
                    'rotateOutUpLeft',
                    'rotateOutUpRight',
                )
            ),
            array(
                'label' => 'Sliding Entrances',
                'options' => array(
                    'slideInUp',
                    'slideInDown',
                    'slideInLeft',
                    'slideInRight',
                )
            ),
            array(
                'label' => 'Sliding Exits',
                'options' => array(
                    'slideOutUp',
                    'slideOutDown',
                    'slideOutLeft',
                    'slideOutRight',
                )
            ),
            array(
                'label' => 'Zoom Entrances',
                'options' => array(
                    'zoomIn',
                    'zoomInDown',
                    'zoomInLeft',
                    'zoomInRight',
                    'zoomInUp',
                )
            ),
            array(
                'label' => 'Zoom Exits',
                'options' => array(
                    'zoomOut',
                    'zoomOutDown',
                    'zoomOutLeft',
                    'zoomOutRight',
                    'zoomOutUp',
                )
            ),
            array(
                'label' => 'Specials',
                'options' => array(
                    'hinge',
                    'jackInTheBox',
                    'rollIn',
                    'rollOut',
                )
            ),
        );
        foreach ($arr as &$value) {
            $options = $value['options'];
            $query = array();
            foreach ($options as $option) {
                $query[] = array('value' => $option, 'name' => $option);
            }
            $value['query'] = $query;
            unset($value['options']);
        }
        return $arr;
    }
    public function getContent()
    {
        $html = '';
        $languages = $this->context->controller->getLanguages();
        if (Tools::isSubmit('submitSetting')) {
            $errors = array();
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_FRAME_TIME'))) {
                $errors[] = $this->l('Frame time is not a valid number');
            }
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_INIT_TIME'))) {
                $errors[] = $this->l('Init time is not a valid number');
            }
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_DISPLAY_TIME'))) {
                $errors[] = $this->l('Display time is not a valid number');
            }
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_NEXT_TIME'))) {
                $errors[] = $this->l('Next time is not a valid number');
            }
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_TOTAL'))) {
                $errors[] = $this->l('Total is not a valid number');
            }
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_BORDER_RADIUS'))) {
                $errors[] = $this->l('Border radius is not a valid number');
            }
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_TEXT_SIZE'))) {
                $errors[] = $this->l('Text size is not a valid number');
            }
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_LINK_SIZE'))) {
                $errors[] = $this->l('Link size is not a valid number');
            }
            if (!Validate::isUnsignedInt(Tools::getValue('JRB_TIME_SIZE'))) {
                $errors[] = $this->l('Time size is not a valid number');
            }
            if (count($errors) > 0) {
                $html .= $this->displayError($errors);
            } else {
                $res = Configuration::updateValue('JRB_ENABLE', Tools::getValue('JRB_ENABLE'));
                $res &= Configuration::updateValue('JRB_POPUP_SHOW_ANIMATE', Tools::getValue('JRB_POPUP_SHOW_ANIMATE'));
                $res &= Configuration::updateValue('JRB_POPUP_HIDE_ANIMATE', Tools::getValue('JRB_POPUP_HIDE_ANIMATE'));
                $res &= Configuration::updateValue('JRB_POPUP_POSITION', Tools::getValue('JRB_POPUP_POSITION'));
                $res &= Configuration::updateValue('JRB_IMAGE_POSITION', Tools::getValue('JRB_IMAGE_POSITION'));
                $res &= Configuration::updateValue('JRB_EXTERNAL_LINK', Tools::getValue('JRB_EXTERNAL_LINK'));
                $res &= Configuration::updateValue('JRB_CLOSE_ICON', Tools::getValue('JRB_CLOSE_ICON'));
                $res &= Configuration::updateValue('JRB_USE_CACHE', Tools::getValue('JRB_USE_CACHE'));
                $res &= Configuration::updateValue('JRB_AJAX', Tools::getValue('JRB_AJAX'));
                $res &= Configuration::updateValue('JRB_GET_PRODUCT_TYPE', Tools::getValue('JRB_GET_PRODUCT_TYPE'));
                $res &= Configuration::updateValue('JRB_ORDER_TIME', Tools::getValue('JRB_ORDER_TIME'));
                $res &= Configuration::updateValue('JRB_ORDER_TIME_UNIT', Tools::getValue('JRB_ORDER_TIME_UNIT'));
                $res &= Configuration::updateValue(
                    'JRB_ORDER_STATUS',
                    Tools::jsonEncode(Tools::getValue('JRB_ORDER_STATUS'))
                );
                $res &= Configuration::updateValue('JRB_FRAME_TIME', Tools::getValue('JRB_FRAME_TIME'));
                foreach ($languages as $lang) {
                    $res &= Configuration::updateValue(
                        "JRB_POPUP_CONTENT_{$lang['id_lang']}",
                        Tools::getValue("JRB_POPUP_CONTENT_{$lang['id_lang']}")
                    );
                    $res &= Configuration::updateValue(
                        "JRB_ADDRESS_LIST_{$lang['id_lang']}",
                        Tools::getValue("JRB_ADDRESS_LIST_{$lang['id_lang']}")
                    );
                }
                $res &= Configuration::updateValue('JRB_LOOP', Tools::getValue('JRB_LOOP'));
                $res &= Configuration::updateValue('JRB_INIT_TIME', Tools::getValue('JRB_INIT_TIME'));
                $res &= Configuration::updateValue('JRB_DISPLAY_TIME', Tools::getValue('JRB_DISPLAY_TIME'));
                $res &= Configuration::updateValue('JRB_NEXT_TIME', Tools::getValue('JRB_NEXT_TIME'));
                $res &= Configuration::updateValue('JRB_TOTAL', Tools::getValue('JRB_TOTAL'));
                $res &= Configuration::updateValue('JRB_BACKGROUND', Tools::getValue('JRB_BACKGROUND'));
                $res &= Configuration::updateValue('JRB_BORDER_RADIUS', Tools::getValue('JRB_BORDER_RADIUS'));
                $res &= Configuration::updateValue('JRB_TEXT_COLOR', Tools::getValue('JRB_TEXT_COLOR'));
                $res &= Configuration::updateValue('JRB_LINK_COLOR', Tools::getValue('JRB_LINK_COLOR'));
                $res &= Configuration::updateValue('JRB_TIME_COLOR', Tools::getValue('JRB_TIME_COLOR'));
                $res &= Configuration::updateValue('JRB_TEXT_SIZE', Tools::getValue('JRB_TEXT_SIZE'));
                $res &= Configuration::updateValue('JRB_LINK_SIZE', Tools::getValue('JRB_LINK_SIZE'));
                $res &= Configuration::updateValue('JRB_TIME_SIZE', Tools::getValue('JRB_TIME_SIZE'));
                $res &= Configuration::updateValue('JRB_CUSTOM_CSS', Tools::getValue('JRB_CUSTOM_CSS'));
                if (!Tools::isSubmit('JRB_ORDER_STATUS')) {
                    $res &= Configuration::updateValue('JRB_ORDER_STATUS', '[]');
                } else {
                    $res &= Configuration::updateValue(
                        'JRB_ORDER_STATUS',
                        Tools::jsonEncode(Tools::getValue('JRB_ORDER_STATUS'))
                    );
                }
                if (!Tools::isSubmit('JRB_SELECT_CATEGORY')) {
                    $res &= Configuration::updateValue('JRB_SELECT_CATEGORY', '[]');
                } else {
                    $res &= Configuration::updateValue(
                        'JRB_SELECT_CATEGORY',
                        Tools::jsonEncode(Tools::getValue('JRB_SELECT_CATEGORY'))
                    );
                }
                if (!Tools::isSubmit('JRB_SELECT_PRODUCT')) {
                    $res &= Configuration::updateValue('JRB_SELECT_PRODUCT', '[]');
                } else {
                    $res &= Configuration::updateValue(
                        'JRB_SELECT_PRODUCT',
                        Tools::jsonEncode(Tools::getValue('JRB_SELECT_PRODUCT'))
                    );
                }
                if (file_exists(_PS_MODULE_DIR_.'/'.$this->name.'/'.$this->cache)) {
                    unlink(_PS_MODULE_DIR_.'/'.$this->name.'/'.$this->cache);
                }
                if ($res) {
                    $html .= $this->displayConfirmation($this->l('Save Successfully'));
                } else {
                    $html .= $this->displayError($this->l('Some errors occurred. Cannot save settings'));
                }
            }
        }
        $this->context->controller->addJqueryPlugin('chosen');
        $this->context->controller->addJs(_MODULE_DIR_.$this->name.'/views/js/admin.js', 'all');
        $productSrc = (int)Configuration::get('JRB_GET_PRODUCT_TYPE');
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $animateOptions = $this->initAnimateEffect();
        $categories = Category::getAllCategoriesName();
        foreach ($categories as &$category) {
            $category['name'] .= " (ID: {$category['id_category']})";
        }
        $products = Product::getProducts($default_lang, 0, 0, 'date_upd', 'DESC', false, true);
        foreach ($products as &$product) {
            $product['name'] .= " (ID: {$product['id_product']})";
        }
        $orderStatus = OrderState::getOrderStates($default_lang);
        foreach ($orderStatus as $key => $status) {
            if (in_array((int)$status['id_order_state'], array(6, 7, 8, 9, 12))) {
                unset($orderStatus[$key]);
            }
        }
        $general_fields = array(
            array(
                'type' => 'switch',
                'label' => $this->l('Enable'),
                'name' => 'JRB_ENABLE',
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Popup Show Animate'),
                'name' => 'JRB_POPUP_SHOW_ANIMATE',
                'desc' => $this->l('Popup will show with this animation effect.'),
                'options' => array(
                    'options' => array(
                        'query' => 'query',
                        'id' => 'value',
                        'name' => 'name',
                    ),
                    'optiongroup' => array(
                        'label' => 'label',
                        'query' => $animateOptions,
                    ),
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Popup Hide Animate'),
                'name' => 'JRB_POPUP_HIDE_ANIMATE',
                'desc' => $this->l('Popup will hide with this animation effect.'),
                'options' => array(
                    'options' => array(
                        'query' => 'query',
                        'id' => 'value',
                        'name' => 'name',
                    ),
                    'optiongroup' => array(
                        'label' => 'label',
                        'query' => $animateOptions,
                    ),
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Popup Position'),
                'name' => 'JRB_POPUP_POSITION',
                'options' => array(
                    'query' => array(
                        array(
                            'value' => 'bottom_left',
                            'name' => $this->l('Bottom Left'),
                        ),
                        array(
                            'value' => 'bottom_right',
                            'name' => $this->l('Bottom Right'),
                        ),
                        array(
                            'value' => 'top_left',
                            'name' => $this->l('Top Left'),
                        ),
                        array(
                            'value' => 'top_right',
                            'name' => $this->l('Top Right'),
                        ),
                    ),
                    'id' => 'value',
                    'name' => 'name',
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Image Position'),
                'name' => 'JRB_IMAGE_POSITION',
                'options' => array(
                    'id' => 'value',
                    'name' => 'name',
                    'query' => array(
                        array(
                            'value' => 'img_left',
                            'name' => $this->l('Image at Left'),
                        ),
                        array(
                            'value' => 'img_right',
                            'name' => $this->l('Image at Right'),
                        ),
                    ),
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('External Link'),
                'name' => 'JRB_EXTERNAL_LINK',
                'desc' => $this->l('Working with External/Affiliate product. Product link is product URL.'),
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Popup Close Icon'),
                'name' => 'JRB_CLOSE_ICON',
                'desc' => $this->l('Show popup close icon.'),
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Use Cache'),
                'name' => 'JRB_USE_CACHE',
                'desc' => $this->l('Use cache help get products faster. Recommend enable it.'),
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Ajax Enable'),
                'name' => 'JRB_AJAX',
                'desc' => $this->l('Load popup use ajax. Recommend disable it, Your site will be load faster.'),
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Get Product From'),
                'name' => 'JRB_GET_PRODUCT_TYPE',
                'desc' => $this->l('You can arrange product order or special product which you want to up-sell.'),
                'options' => array(
                    'id' => 'value',
                    'name' => 'name',
                    'query' => array(
                        array(
                            'value' => 0,
                            'name' => $this->l('Featured Products'),
                        ),
                        array(
                            'value' => 1,
                            'name' => $this->l('Latest Products'),
                        ),
                        array(
                            'value' => 2,
                            'name' => $this->l('Orders'),
                        ),
                        array(
                            'value' => 3,
                            'name' => $this->l('Select Products'),
                        ),
                        array(
                            'value' => 4,
                            'name' => $this->l('Select Categories'),
                        ),
                        array(
                            'value' => 5,
                            'name' => $this->l('Best Sale Products'),
                        ),
                        array(
                            'value' => 6,
                            'name' => $this->l('On-Sale Products'),
                        ),
                    ),
                ),
                'tab' => 'product'
            ),
            array(
                'type' => 'multiple_select',
                'label' => $this->l('Select Categories'),
                'name' => 'JRB_SELECT_CATEGORY',
                'form_group_class' => 'category-select '.((CATEGORIES == $productSrc)? '': 'hide'),
                'placeholder' => $this->l('Please select categories'),
                'idesc' => $this->l('Input category title to see suggestions.'),
                'optionvalue' => 'id_category',
                'optionname' => 'name',
                'options' => $categories,
                'tab' => 'product'
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Order Time'),
                'name' => 'JRB_ORDER_TIME',
                'form_group_class' => 'order-select '.((ORDERS == $productSrc)? '': 'hide'),
                'unitname' => 'JRB_ORDER_TIME_UNIT',
                'idesc' => $this->l('Products in this recently time will get from order.'),
                'options' => array(
                    array(
                        'value' => 'days',
                        'name' => $this->l('Days'),
                    ),
                    array(
                        'value' => 'hours',
                        'name' => $this->l('Hours'),
                    ),
                    array(
                        'value' => 'minutes',
                        'name' => $this->l('Minutes'),
                    ),
                ),
                'tab' => 'product'
            ),
            array(
                'type' => 'select',
                'label' => $this->l('Order Status'),
                'name' => 'JRB_ORDER_STATUS',
                'form_group_class' => 'order-select '.((ORDERS == $productSrc)? '': 'hide'),
                'multiple' => true,
                'options' => array(
                    'id' => 'id_order_state',
                    'name' => 'name',
                    'query' => $orderStatus,
                ),
                'tab' => 'product'
            ),
            array(
                'type' => 'multiple_select',
                'label' => $this->l('Select Products'),
                'name' => 'JRB_SELECT_PRODUCT',
                'form_group_class' => 'product-select '.((PRODUCTS == $productSrc)? '': 'hide'),
                'placeholder' => $this->l('Please select Products'),
                'idesc' => $this->l('Input product title to see suggestions.'),
                'optionname' => 'name',
                'optionvalue' => 'id_product',
                'options' => $products,
                'tab' => 'product'
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Frame Time'),
                'name' => 'JRB_FRAME_TIME',
                'unit' => $this->l('Minutes'),
                'idesc' => $this->l('Time will auto get random in this frame.'),
                'tab' => 'product'
            ),
            array(
                'type' => 'textarea',
                'lang' => true,
                'label' => $this->l('Recently Bought Content'),
                'name' => 'JRB_POPUP_CONTENT',
                'desc' => array(
                    $this->l("{address} - Customer's address"),
                    $this->l('{product_name} - Product title'),
                    $this->l('{product_link} - Product title + link'),
                    $this->l('{time_ago} - Time after purchase'),
                ),
                'tab' => 'popupcontent'
            ),
            array(
                'type' => 'textarea',

                'label' => $this->l('Address List'),
                'lang' => true,
                'name' => 'JRB_ADDRESS_LIST',
                'desc' => $this->l('If this field is set, Popup content will get random address from this list'),
                'tab' => 'popupcontent'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Loop'),
                'name' => 'JRB_LOOP',
                'values'    => array(
                    array('value' => 1),
                    array('value' => 0)
                ),
                'tab' => 'time'
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Init Delay'),
                'name' => 'JRB_INIT_TIME',
                'unit' => $this->l('Seconds'),
                'idesc' => $this->l('When site loaded after this time popup will appear'),
                'tab' => 'time'
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Display Time'),
                'name' => 'JRB_DISPLAY_TIME',
                'unit' => $this->l('Seconds'),
                'idesc' => $this->l('Popup will show in during this Time'),
                'tab' => 'time'
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Next Time'),
                'name' => 'JRB_NEXT_TIME',
                'unit' => $this->l('Seconds'),
                'idesc' => $this->l('The Time next popup will appear'),
                'tab' => 'time'
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Total'),
                'name' => 'JRB_TOTAL',
                'idesc' => $this->l('Number of popups will appear'),
                'tab' => 'time'
            ),
            array(
                'type' => 'color',
                'label' => $this->l('Popup Background'),
                'name' => 'JRB_BACKGROUND',
                'tab' => 'style',
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Popup Border Radius'),
                'name' => 'JRB_BORDER_RADIUS',
                'tab' => 'style'
            ),
            array(
                'type' => 'color',
                'label' => $this->l('Text Color'),
                'name' => 'JRB_TEXT_COLOR',
                'tab' => 'style',
            ),
            array(
                'type' => 'color',
                'label' => $this->l('Link Color'),
                'name' => 'JRB_LINK_COLOR',
                'tab' => 'style',
            ),
            array(
                'type' => 'color',
                'label' => $this->l('Time Color'),
                'name' => 'JRB_TIME_COLOR',
                'tab' => 'style',
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Text Size'),
                'name' => 'JRB_TEXT_SIZE',
                'tab' => 'style'
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Link Size'),
                'name' => 'JRB_LINK_SIZE',
                'tab' => 'style'
            ),
            array(
                'type' => 'number',
                'label' => $this->l('Time Size'),
                'name' => 'JRB_TIME_SIZE',
                'tab' => 'style'
            ),
            array(
                'type' => 'textarea',
                'label' => $this->l('Custom CSS'),
                'name' => 'JRB_CUSTOM_CSS',
                'rows' => 5,
                'tab' => 'style'
            ),
        );
        /* RENDER */
        $this->fields_options[0]['form'] = array(
            'tinymce' => true,
            'tabs' => array(
                'general' => 'General',
                'product' => 'Products',
                'popupcontent' => 'Popup Content',
                'time' => 'Time',
                'style' => 'Custom style',
            ),
            'legend' => array(
                'title' => '<span class="label label-info">'.$this->l('Jms Recently Bought Setting').'</span>',
                'icon' => 'icon-cogs',
            ),
            'input' => $general_fields,
            'submit' => array('title' => $this->l('Save'), 'class' => 'button btn btn-primary'),
        );
        $helper = new HelperForm();
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->tpl_vars = array(
            'languages' => $languages,
            'id_language' => $this->context->language->id,
        );
        $this->fields_form = array();
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;
        $helper->toolbar_scroll = true;
        $helper->submit_action = 'submitSetting';
        $helper->fields_value = array(
            'JRB_ENABLE' => Tools::getValue('JRB_ENABLE', Configuration::get('JRB_ENABLE')),
            'JRB_POPUP_SHOW_ANIMATE' => Tools::getValue(
                'JRB_POPUP_SHOW_ANIMATE',
                Configuration::get('JRB_POPUP_SHOW_ANIMATE')
            ),
            'JRB_POPUP_HIDE_ANIMATE' => Tools::getValue(
                'JRB_POPUP_HIDE_ANIMATE',
                Configuration::get('JRB_POPUP_HIDE_ANIMATE')
            ),
            'JRB_POPUP_POSITION' => Tools::getValue(
                'JRB_POPUP_POSITION',
                Configuration::get('JRB_POPUP_POSITION')
            ),
            'JRB_IMAGE_POSITION' => Tools::getValue(
                'JRB_IMAGE_POSITION',
                Configuration::get('JRB_IMAGE_POSITION')
            ),
            'JRB_EXTERNAL_LINK' => Tools::getValue(
                'JRB_EXTERNAL_LINK',
                Configuration::get('JRB_EXTERNAL_LINK')
            ),
            'JRB_CLOSE_ICON' => Tools::getValue(
                'JRB_CLOSE_ICON',
                Configuration::get('JRB_CLOSE_ICON')
            ),
            'JRB_USE_CACHE' => Tools::getValue(
                'JRB_USE_CACHE',
                Configuration::get('JRB_USE_CACHE')
            ),
            'JRB_AJAX' => Tools::getValue(
                'JRB_AJAX',
                Configuration::get('JRB_AJAX')
            ),
            'JRB_GET_PRODUCT_TYPE' => Tools::getValue(
                'JRB_GET_PRODUCT_TYPE',
                Configuration::get('JRB_GET_PRODUCT_TYPE')
            ),
            'JRB_ORDER_TIME' => Tools::getValue(
                'JRB_ORDER_TIME',
                Configuration::get('JRB_ORDER_TIME')
            ),
            'JRB_ORDER_TIME_UNIT' => Tools::getValue(
                'JRB_ORDER_TIME_UNIT',
                Configuration::get('JRB_ORDER_TIME_UNIT')
            ),
            'JRB_ORDER_STATUS[]' => Tools::getValue(
                'JRB_ORDER_STATUS',
                Tools::jsonDecode(Configuration::get('JRB_ORDER_STATUS'))
            ),
            'JRB_FRAME_TIME' => Tools::getValue(
                'JRB_FRAME_TIME',
                Configuration::get('JRB_FRAME_TIME')
            ),
            'JRB_POPUP_CONTENT' => Tools::getValue(
                'JRB_POPUP_CONTENT',
                Configuration::get('JRB_POPUP_CONTENT')
            ),
            'JRB_ADDRESS_LIST' => Tools::getValue(
                'JRB_ADDRESS_LIST',
                Configuration::get('JRB_ADDRESS_LIST')
            ),
            'JRB_LOOP' => Tools::getValue(
                'JRB_LOOP',
                Configuration::get('JRB_LOOP')
            ),
            'JRB_INIT_TIME' => Tools::getValue(
                'JRB_INIT_TIME',
                Configuration::get('JRB_INIT_TIME')
            ),
            'JRB_DISPLAY_TIME' => Tools::getValue(
                'JRB_DISPLAY_TIME',
                Configuration::get('JRB_DISPLAY_TIME')
            ),
            'JRB_NEXT_TIME' => Tools::getValue(
                'JRB_NEXT_TIME',
                Configuration::get('JRB_NEXT_TIME')
            ),
            'JRB_TOTAL' => Tools::getValue(
                'JRB_TOTAL',
                Configuration::get('JRB_TOTAL')
            ),
            'JRB_BACKGROUND' => Tools::getValue(
                'JRB_BACKGROUND',
                Configuration::get('JRB_BACKGROUND')
            ),
            'JRB_BORDER_RADIUS' => Tools::getValue(
                'JRB_BORDER_RADIUS',
                Configuration::get('JRB_BORDER_RADIUS')
            ),
            'JRB_TEXT_COLOR' => Tools::getValue(
                'JRB_TEXT_COLOR',
                Configuration::get('JRB_TEXT_COLOR')
            ),
            'JRB_LINK_COLOR' => Tools::getValue(
                'JRB_LINK_COLOR',
                Configuration::get('JRB_LINK_COLOR')
            ),
            'JRB_TIME_COLOR' => Tools::getValue(
                'JRB_TIME_COLOR',
                Configuration::get('JRB_TIME_COLOR')
            ),
            'JRB_TEXT_SIZE' => Tools::getValue(
                'JRB_TEXT_SIZE',
                Configuration::get('JRB_TEXT_SIZE')
            ),
            'JRB_LINK_SIZE' => Tools::getValue(
                'JRB_LINK_SIZE',
                Configuration::get('JRB_LINK_SIZE')
            ),
            'JRB_TIME_SIZE' => Tools::getValue(
                'JRB_TIME_SIZE',
                Configuration::get('JRB_TIME_SIZE')
            ),
            'JRB_CUSTOM_CSS' => Tools::getValue(
                'JRB_CUSTOM_CSS',
                Configuration::get('JRB_CUSTOM_CSS')
            ),
            'JRB_SELECT_CATEGORY' => implode(', ', Tools::getValue(
                'JRB_SELECT_CATEGORY',
                Tools::jsonDecode(Configuration::get('JRB_SELECT_CATEGORY'))
            )),
            'JRB_SELECT_PRODUCT' => implode(', ', Tools::getValue(
                'JRB_SELECT_PRODUCT',
                Tools::jsonDecode(Configuration::get('JRB_SELECT_PRODUCT'))
            )),

        );
        foreach ($languages as $lang) {
            $helper->fields_value["JRB_POPUP_CONTENT"][$lang['id_lang']] = Tools::getValue(
                "JRB_POPUP_CONTENT_{$lang['id_lang']}",
                Configuration::get("JRB_POPUP_CONTENT_{$lang['id_lang']}")
            );
            $helper->fields_value["JRB_ADDRESS_LIST"][$lang['id_lang']] = Tools::getValue(
                "JRB_ADDRESS_LIST_{$lang['id_lang']}",
                Configuration::get("JRB_ADDRESS_LIST_{$lang['id_lang']}")
            );
        }
        return $html.$helper->generateForm($this->fields_options);
    }
    public function hookDisplayBeforeBodyClosingTag($params)
    {
        if (!Configuration::get('JRB_ENABLE')) {
            return null;
        }
        $setting = Configuration::getMultiple(
            array(
                'JRB_IMAGE_POSITION',
                'JRB_POPUP_POSITION',
                'JRB_POPUP_SHOW_ANIMATE',
                'JRB_POPUP_HIDE_ANIMATE',
                'JRB_CLOSE_ICON',
                'JRB_IMAGE_POSITION',
                'JRB_BACKGROUND',
                'JRB_TEXT_COLOR',
                'JRB_BORDER_RADIUS',
                'JRB_TEXT_SIZE',
                'JRB_TIME_SIZE',
                'JRB_TIME_COLOR',
                'JRB_LINK_COLOR',
                'JRB_LINK_SIZE',
                'JRB_LOOP',
                'JRB_INIT_TIME',
                'JRB_TOTAL',
                'JRB_DISPLAY_TIME',
                'JRB_NEXT_TIME',
                'JRB_EXTERNAL_LINK',
                'JRB_CUSTOM_CSS',
                'JRB_USE_CACHE',
                'JRB_AJAX',
            )
        );
        $setting['JRB_POPUP_CONTENT'] = Configuration::get("JRB_POPUP_CONTENT_".$this->context->language->id);
        $JmsHelper = new JmsHelper();
        $this->context->smarty->assign(
            array(
                'setting' => $setting,
                'products' => $JmsHelper->getProducts($setting['JRB_AJAX']),
                'ajaxpath' => __PS_BASE_URI__.'modules/'.$this->name.'/ajax_'.
                $this->name.'.php?_token='.$this->secure_key,
            )
        );
        return $this->display(__FILE__, 'jrb-popup.tpl');
        // }
    }
    public function hookActionFrontControllerSetMedia($params)
    {
        $this->context->controller->registerStylesheet(
            'jrb-style',
            'modules/'.$this->name.'/views/css/jrb-style.css'
        );
        $this->context->controller->registerStylesheet(
            'jrb-animate',
            'modules/'.$this->name.'/views/css/animate.css'
        );
    }
}
