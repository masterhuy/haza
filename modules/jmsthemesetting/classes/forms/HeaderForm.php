<?php

if (!defined('_PS_VERSION_')) {
    exit;
}


class JmsHeaderForm
{
    public $module;

    public function __construct()
    {
        $this->module = Module::getInstanceByName('jmsthemesetting');
    }
    public function getHeaderForm()
    {
      $_fieldsets = array();
      $_fieldsets[] = $this->getHeaderTabForm();
      $_fieldsets[] = $this->getHeaderLayoutForm();
      $_fieldsets[] = $this->getHeaderStyleForm();
      $_fieldsets[] = $this->getHeaderCartForm();
      $_fieldsets[] = $this->getHeaderSearchForm();
      $_fieldsets[] = $this->getHeaderWishlistForm();
      $_fieldsets[] = $this->getHeaderSigninForm();
      $_fieldsets[] = $this->getHeaderTopbarForm();
      $_fieldsets[] = $this->getHeaderSideBarForm();
      $_fieldsets[] = $this->getHeaderResponsiveForm();
      return $_fieldsets;
    }
    public function getHeaderTabForm()
    {
        return array(
            'form' => array(
                'childForms' => array(
                    'jms-header-layout'  => $this->module->l('Layout', 'HeaderForm'),
                    'jms-header-setting'  => $this->module->l('Style Setting', 'HeaderForm'),
                    'jms-header-cart'  => $this->module->l('Cart', 'HeaderForm'),
                    'jms-header-search'  => $this->module->l('Search', 'HeaderForm'),
                    'jms-header-wishlist'  => $this->module->l('Wishlist', 'HeaderForm'),
                    'jms-header-signin'  => $this->module->l('Customer Signin', 'HeaderForm'),
                    'jms-top-bar'  => $this->module->l('TopBar', 'HeaderForm'),
                    'jms-side-bar'  => $this->module->l('SideBar', 'HeaderForm'),
                    'jms-header-responsive'  => $this->module->l('Responsive', 'HeaderForm'),

                ),
                'legend' => array(
                    'title' => $this->module->l('Header', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-header-tab',
                    'heading_icon' => 'dvr'
                ),
            ),
        );
    }
    public function getHeaderLayoutForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Layout', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-header-layout'
                ),
                'input' => array(
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Header Layout', 'HeaderForm'),
                        'name' => 'header_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Layout 1', 'HeaderForm'),
                                    'img' => 'headers/1.jpg'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Layout 2', 'HeaderForm'),
                                    'img' => 'headers/2.jpg'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Layout 3', 'HeaderForm'),
                                    'img' => 'headers/3.jpg'
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => $this->module->l('Layout 4', 'HeaderForm'),
                                    'img' => 'headers/4.jpg'
                                ),
                                array(
                                    'id_option' => 5,
                                    'name' => $this->module->l('Layout 5', 'HeaderForm'),
                                    'img' => 'headers/5.jpg'
                                ),
                                array(
                                    'id_option' => 6,
                                    'name' => $this->module->l('Layout 6', 'HeaderForm'),
                                    'img' => 'headers/6.jpg'
                                ),
                                array(
                                    'id_option' => 7,
                                    'name' => $this->module->l('Layout 7', 'HeaderForm'),
                                    'img' => 'headers/7.jpg'
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }
    public function getHeaderStyleForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Header Setting', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-header-setting'
                ),
                'input' => array(
                    array(
                        'type' => 'switch-label',
                        'label' => $this->module->l('Width', 'HeaderForm'),
                        'name' => 'header_width',
                        'values'    => array(
                            array('id'    => 'active_on','value' => 1,'label' => $this->module->l('Container', 'HeaderForm')),
                            array('id'    => 'active_off','value' => 0,'label' => $this->module->l('FullWidth', 'HeaderForm'))
                        ),
                        'width' => '260'
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Height', 'HeaderForm'),
                        'name' => 'header_height',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 'auto',
                                    'name' => $this->module->l('Auto', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'personalized',
                                    'name' => $this->module->l('Personalized', 'HeaderForm'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Personalized Height', 'HeaderForm'),
                        'desc' => $this->module->l('Set height for header. You must provide px or percent suffix (example 200px or 30%)', 'HeaderForm'),
                        'condition' => array(
                            'header_height' => '==personalized'
                        ),
                        'name' => 'header_personalized_height',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'fixed-width-xl',
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Header Sticky', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Header Sticky', 'HeaderForm'),
                        'name' => 'header_sticky',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Enabled', 'HeaderForm')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('Disabled', 'HeaderForm')
                            )
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Height', 'HeaderForm'),
                        'name' => 'header_sticky_height',
                        'class' => 'fixed-width-xl',
                        'min' => 6,
                        'size' => 30,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Header Sticky Background Color', 'HeaderForm'),
                        'name' => 'header_sticky_bg',
                        'condition' => array(
                            'header_sticky' => '==1'
                        )
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Sticky Effect', 'HeaderForm'),
                        'name' => 'header_sticky_effect',
                        'condition' => array(
                            'header_sticky' => '==1'
                        ),
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => '',
                                    'name' => $this->module->l('Fade', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'sticky-slide',
                                    'name' => $this->module->l('Slide Top', 'HeaderForm'),
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Header Style', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'text-group',
                        'label' => $this->module->l('Margin'),
                        'name' => 'header_margin',
                        'desc' => $this->module->l('leave blank if you dont want to set'),
                        'suffix' => 'px',
                        'size' => 5
                    ),
                    array(
                        'type' => 'text-group',
                        'label' => $this->module->l('Padding'),
                        'name' => 'header_padding',
                        'desc' => $this->module->l('leave blank if you dont want to set'),
                        'suffix' => 'px',
                        'size' => 5
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Custom Css Class', 'HeaderForm'),
                        'desc' => $this->module->l('Use this field to add a class name and then refer to it in your css file.', 'HeaderForm'),
                        'name' => 'header_class',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'fixed-width-xxl'
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Background Type', 'HeaderForm'),
                        'name' => 'header_bg',
                        'options' => array(
                            'query' => array(
                              array(
                                  'id_option' => '',
                                  'name' => $this->module->l('None', 'HeaderForm'),
                              ),
                                array(
                                    'id_option' => 'image',
                                    'name' => $this->module->l('Image', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'color',
                                    'name' => $this->module->l('Color', 'HeaderForm'),
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Background Color', 'HeaderForm'),
                        'name' => 'header_bg_color',
                        'desc' => $this->module->l('Choose background color for Header.', 'HeaderForm'),
                        'condition' => array(
                            'header_bg' => '==color'
                        ),
                    ),
                    array(
                        'type' => 'background-img',
                        'label' => $this->module->l('Background Image', 'HeaderForm'),
                        'name' => 'header_bg_image',
                        'condition' => array(
                            'header_bg' => '==image'
                        ),
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Header Bottom - Header Bottom Bar', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Text Color', 'HeaderForm'),
                        'name' => 'header_bottom_text_color'
                    ),
                    array(
                        'type' => 'text-group',
                        'label' => $this->module->l('Margin'),
                        'name' => 'header_bottom_margin',
                        'desc' => $this->module->l('leave blank if you dont want to set'),
                        'suffix' => 'px',
                        'size' => 5
                    ),
                    array(
                        'type' => 'text-group',
                        'label' => $this->module->l('Padding'),
                        'name' => 'header_bottom_padding',
                        'desc' => $this->module->l('leave blank if you dont want to set'),
                        'suffix' => 'px',
                        'size' => 5
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Background Color', 'HeaderForm'),
                        'name' => 'header_bottom_bg',
                        'desc' => $this->module->l('Choose background color for Header Bottom.', 'HeaderForm')
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Icon Style', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Font size', 'HeaderForm'),
                        'name' => 'header_icon_fontsize',
                        'class' => 'fixed-width-xl',
                        'min' => 6,
                        'size' => 30,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Icon Color', 'HeaderForm'),
                        'name' => 'header_icon_color'
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Icon Hover Color', 'HeaderForm'),
                        'name' => 'header_icon_hover_color'
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }
    public function getHeaderCartForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Cart Icon & Cart Box', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-header-cart'
                ),
                'input' => array(
                      array(
                          'type' => 'switch',
                          'label' => $this->module->l('Enable', 'HeaderForm'),
                          'name' => 'cart',
                          'is_bool' => true,
                          'values' => array(
                              array(
                                  'id' => 'active_on',
                                  'value' => 1,
                                  'label' =>$this->module->l('Yes', 'HeaderForm')
                              ),
                              array(
                                  'id' => 'active_off',
                                  'value' => 0,
                                  'label' => $this->module->l('No', 'HeaderForm')
                              )
                          ),
                      ),
                      array(
                          'type' => 'icon-select',
                          'label' => $this->module->l('Cart Icon', 'HeaderForm'),
                          'name' => 'cart_icon',
                          'options' => array(
                              'query' => array(
                                    array(
                                        'id_option' => 'icon-cart-1_bold',
                                        'name' => $this->module->l('Cart 1', 'HeaderForm')
                                    ),
                                  array(
                                      'id_option' => 'icon-cart-1_bold',
                                      'name' => $this->module->l('Cart 1', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-2_bold',
                                      'name' => $this->module->l('Cart 2', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-3_bold',
                                      'name' => $this->module->l('Cart 3', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-4_bold',
                                      'name' => $this->module->l('Cart 4', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-5_bold',
                                      'name' => $this->module->l('Cart 5', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-6_bold',
                                      'name' => $this->module->l('Cart 6', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-7_bold',
                                      'name' => $this->module->l('Cart 7', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-8_bold',
                                      'name' => $this->module->l('Cart 8', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-9_bold',
                                      'name' => $this->module->l('Cart 9', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-10_bold',
                                      'name' => $this->module->l('Cart 10', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-11_bold',
                                      'name' => $this->module->l('Cart 11', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-12_bold',
                                      'name' => $this->module->l('Cart 12', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-13_bold',
                                      'name' => $this->module->l('Cart 13', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-14_bold',
                                      'name' => $this->module->l('Cart 14', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-15_bold',
                                      'name' => $this->module->l('Cart 15', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-16',
                                      'name' => $this->module->l('Cart 16', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-17',
                                      'name' => $this->module->l('Cart 17', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-18',
                                      'name' => $this->module->l('Cart 18', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-19',
                                      'name' => $this->module->l('Cart 19', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-cart-20',
                                      'name' => $this->module->l('Cart 20', 'HeaderForm')
                                  ),
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'select',
                          'label' => $this->module->l('Icon Thickness', 'HeaderForm'),
                          'name' => 'cart_icon_thickness',
                          'options' => array(
                              'query' => array(
                                  array(
                                      'id_option' => '_light',
                                      'name' => $this->module->l('Light', 'HeaderForm'),
                                  ),
                                  array(
                                      'id_option' => '_medium',
                                      'name' => $this->module->l('Medium', 'HeaderForm'),
                                  ),
                                  array(
                                      'id_option' => '_bold',
                                      'name' => $this->module->l('Bold', 'HeaderForm'),
                                  )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'select',
                          'label' => $this->module->l('Dropdown Type', 'HeaderForm'),
                          'name' => 'cart_type',
                          'options' => array(
                              'query' => array(
                                array(
                                    'id_option' => 'dropdown',
                                    'name' => $this->module->l('Dropdown', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'sidebar',
                                    'name' => $this->module->l('Sidebar', 'HeaderForm'),
                                )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'color',
                          'label' => $this->module->l('Text Color', 'HeaderForm'),
                          'name' => 'cart_text_color',
                      ),
                      array(
                          'type' => 'color',
                          'label' => $this->module->l('Background Color', 'HeaderForm'),
                          'name' => 'cart_bg_color',
                      ),
                      array(
                          'type' => 'text',
                          'label' => $this->module->l('Custom Css Class', 'HeaderForm'),
                          'desc' => $this->module->l('Use this field to add a class name and then refer to it in your css file.', 'HeaderForm'),
                          'name' => 'cart_class',
                          'size' => 30,
                          'min' => 0,
                          'class' => 'fixed-width-xxl'
                      ),
                      array(
                          'type' => 'switch',
                          'label' => $this->module->l('Show Subtotal', 'HeaderForm'),
                          'name' => 'cart_subtotal',
                          'is_bool' => true,
                          'values' => array(
                              array(
                                  'id' => 'active_on',
                                  'value' => 1,
                                  'label' =>$this->module->l('Yes', 'HeaderForm')
                              ),
                              array(
                                  'id' => 'active_off',
                                  'value' => 0,
                                  'label' => $this->module->l('No', 'HeaderForm')
                              )
                          ),
                      ),
                      array(
                          'type' => 'switch',
                          'label' => $this->module->l('Show Total', 'HeaderForm'),
                          'name' => 'cart_total',
                          'is_bool' => true,
                          'values' => array(
                              array(
                                  'id' => 'active_on',
                                  'value' => 1,
                                  'label' =>$this->module->l('Yes', 'HeaderForm')
                              ),
                              array(
                                  'id' => 'active_off',
                                  'value' => 0,
                                  'label' => $this->module->l('No', 'HeaderForm')
                              )
                          ),
                      ),
                      array(
                          'type' => 'checkbox2',
                          'label' => $this->module->l('Links Show', 'HeaderForm'),
                          'name' => 'cart_links',
                          'values' => array(
                              'query' => array(
                                  array(
                                      'val' => 'checkout',
                                      'name' => $this->module->l('Checkout', 'HeaderForm'),
                                  ),
                                  array(
                                      'val' => 'cart',
                                      'name' => $this->module->l('Cart', 'HeaderForm'),
                                  ),
                              ),
                              'id' => 'val',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'title_separator',
                          'label' => $this->module->l('Add to Cart Action', 'HeaderForm'),
                          'size' => 30,
                          'border_top' => false
                      ),
                      array(
                          'type' => 'select',
                          'label' => $this->module->l('Add to Cart Type', 'HeaderForm'),
                          'name' => 'addtocart_type',
                          'options' => array(
                              'query' => array(
                                array(
                                    'id_option' => 'popup',
                                    'name' => $this->module->l('Ajax Popup', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'cartbox-open',
                                    'name' => $this->module->l('Cart Box Open', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'number-bounce',
                                    'name' => $this->module->l('Number Bounce', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'circle-filled',
                                    'name' => $this->module->l('Notification', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'no-ajax',
                                    'name' => $this->module->l('No Ajax', 'HeaderForm'),
                                )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'color',
                          'label' => $this->module->l('Color for Notification', 'HeaderForm'),
                          'name' => 'addtocart_notification_color',
                          'desc' => $this->module->l('Background color for Number circle and Notification.', 'HeaderForm'),
                      ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }
    public function getHeaderSearchForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Search', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-header-search'
                ),
                'input' => array(
                      array(
                          'type' => 'switch',
                          'label' => $this->module->l('Enable', 'HeaderForm'),
                          'name' => 'search',
                          'is_bool' => true,
                          'values' => array(
                              array(
                                  'id' => 'active_on',
                                  'value' => 1,
                                  'label' =>$this->module->l('Yes', 'HeaderForm')
                              ),
                              array(
                                  'id' => 'active_off',
                                  'value' => 0,
                                  'label' => $this->module->l('No', 'HeaderForm')
                              )
                          ),
                      ),
                      array(
                          'type' => 'switch',
                          'label' => $this->module->l('Ajax Search', 'HeaderForm'),
                          'name' => 'search_ajax',
                          'is_bool' => true,
                          'values' => array(
                              array(
                                  'id' => 'active_on',
                                  'value' => 1,
                                  'label' =>$this->module->l('Yes', 'HeaderForm')
                              ),
                              array(
                                  'id' => 'active_off',
                                  'value' => 0,
                                  'label' => $this->module->l('No', 'HeaderForm')
                              )
                          ),
                      ),
                      array(
                          'type' => 'icon-select',
                          'label' => $this->module->l('Search Icon', 'HeaderForm'),
                          'name' => 'search_icon',
                          'options' => array(
                              'query' => array(
                                  array(
                                      'id_option' => 'icon-search-1_bold',
                                      'name' => $this->module->l('Search 1', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-2_bold',
                                      'name' => $this->module->l('Search 2', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-3_bold',
                                      'name' => $this->module->l('Search 3', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-4_bold',
                                      'name' => $this->module->l('Search 4', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-5_bold',
                                      'name' => $this->module->l('Search 5', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-6_bold',
                                      'name' => $this->module->l('Search 6', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-7_bold',
                                      'name' => $this->module->l('Search 7', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-8_bold',
                                      'name' => $this->module->l('Search 8', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-9_bold',
                                      'name' => $this->module->l('Search 9', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-search-10_bold',
                                      'name' => $this->module->l('Search 10', 'HeaderForm')
                                  ),
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'select',
                          'label' => $this->module->l('Icon Thickness', 'HeaderForm'),
                          'name' => 'search_icon_thickness',
                          'options' => array(
                              'query' => array(
                                  array(
                                      'id_option' => '_light',
                                      'name' => $this->module->l('Light', 'HeaderForm'),
                                  ),
                                  array(
                                      'id_option' => '_medium',
                                      'name' => $this->module->l('Medium', 'HeaderForm'),
                                  ),
                                  array(
                                      'id_option' => '_bold',
                                      'name' => $this->module->l('Bold', 'HeaderForm'),
                                  )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'title_separator',
                          'label' => $this->module->l('Search Box', 'HeaderForm'),
                          'size' => 30,
                          'border_top' => false
                      ),
                      array(
                          'type' => 'select',
                          'label' => $this->module->l('Search Box Type', 'HeaderForm'),
                          'name' => 'search_box_type',
                          'options' => array(
                              'query' => array(
                                array(
                                    'id_option' => 'dropdown',
                                    'name' => $this->module->l('Dropdown', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'fullwidth',
                                    'name' => $this->module->l('FullWidth', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'fullscreen',
                                    'name' => $this->module->l('FullScreen', 'HeaderForm'),
                                )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'number',
                          'label' => $this->module->l('Height', 'HeaderForm'),
                          'name' => 'search_box_height',
                          'desc' => $this->module->l('This field only apply for fullwidth style.', 'HeaderForm'),
                          'condition' => array(
                              'search_box_type' => '==fullwidth'
                          ),
                          'class' => 'fixed-width-xxl',
                          'min' => 50,
                          'step' => 10,
                          'size' => 30,
                          'suffix' => 'px'
                      ),
                      array(
                          'type' => 'color',
                          'label' => $this->module->l('Background Color', 'HeaderForm'),
                          'name' => 'search_box_bg_color',
                      ),
                      array(
                          'type' => 'text',
                          'label' => $this->module->l('Custom Css Class', 'HeaderForm'),
                          'desc' => $this->module->l('Use this field to add a class name and then refer to it in your css file.', 'HeaderForm'),
                          'name' => 'search_box_class',
                          'size' => 30,
                          'min' => 0,
                          'class' => 'fixed-width-xxl'
                      ),
                      array(
                          'type' => 'title_separator',
                          'label' => $this->module->l('Search Input', 'HeaderForm'),
                          'size' => 30,
                          'border_top' => false
                      ),
                      array(
                          'type' => 'text-group',
                          'label' => $this->module->l('Border Radius'),
                          'name' => 'search_input_border_radius',
                          'desc' => $this->module->l('leave blank if you dont want to set'),
                          'fieldtype' => 'border-radius',
                          'suffix' => 'px',
                          'size' => 5
                      ),
                      array(
                          'type' => 'border',
                          'label' => $this->module->l('Border', 'HeaderForm'),
                          'name' => 'search_input_border',
                          'suffix' => 'px'
                      ),
                      array(
                          'type' => 'color',
                          'label' => $this->module->l('Text Color', 'HeaderForm'),
                          'name' => 'search_input_text_color',
                      ),
                      array(
                          'type' => 'fontstyle',
                          'label' => $this->module->l('Text Style', 'HeaderForm'),
                          'name' => 'search_input_font',
                          'suffix' => 'px'
                      ),
                      array(
                          'type' => 'number',
                          'label' => $this->module->l('Line Height', 'HeaderForm'),
                          'name' => 'search_input_lineheight',
                          'class' => 'fixed-width-xxl',
                          'min' => 0.5,
                          'step' => 0.1,
                          'size' => 30,
                          'suffix' => 'rem'
                      ),
                      array(
                          'type' => 'number',
                          'label' => $this->module->l('Letter Spacing', 'HeaderForm'),
                          'name' => 'search_input_letterspacing',
                          'class' => 'fixed-width-xxl',
                          'min' => 0,
                          'step' => 0.05,
                          'max' => 5,
                          'size' => 30,
                          'suffix' => 'em'
                      ),
                      array(
                          'type' => 'color',
                          'label' => $this->module->l('Background Color', 'HeaderForm'),
                          'name' => 'search_input_bg_color',
                      ),
                      array(
                          'type' => 'text-group',
                          'label' => $this->module->l('Padding'),
                          'name' => 'search_input_padding',
                          'desc' => $this->module->l('leave blank if you dont want to set'),
                          'suffix' => 'px',
                          'size' => 5
                      ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }
    public function getHeaderWishlistForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Wishlist', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-header-wishlist'
                ),
                'input' => array(
                      array(
                          'type' => 'switch',
                          'label' => $this->module->l('Enable', 'HeaderForm'),
                          'name' => 'wishlist',
                          'is_bool' => true,
                          'values' => array(
                              array(
                                  'id' => 'active_on',
                                  'value' => 1,
                                  'label' =>$this->module->l('Yes', 'HeaderForm')
                              ),
                              array(
                                  'id' => 'active_off',
                                  'value' => 0,
                                  'label' => $this->module->l('No', 'HeaderForm')
                              )
                          ),
                      ),
                      array(
                          'type' => 'icon-select',
                          'label' => $this->module->l('Wishlist Icon', 'HeaderForm'),
                          'name' => 'wishlist_icon',
                          'options' => array(
                              'query' => array(
                                  array(
                                      'id_option' => 'icon-wishlist-1_bold',
                                      'name' => $this->module->l('Wishlist 1', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-2_bold',
                                      'name' => $this->module->l('Wishlist 2', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-3_bold',
                                      'name' => $this->module->l('Wishlist 3', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-4_bold',
                                      'name' => $this->module->l('Wishlist 4', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-5_bold',
                                      'name' => $this->module->l('Wishlist 5', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-6_bold',
                                      'name' => $this->module->l('Wishlist 6', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-7_bold',
                                      'name' => $this->module->l('Wishlist 7', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-8',
                                      'name' => $this->module->l('Wishlist 8', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-9',
                                      'name' => $this->module->l('Wishlist 9', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-wishlist-10',
                                      'name' => $this->module->l('Wishlist 10', 'HeaderForm')
                                  ),
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'select',
                          'label' => $this->module->l('Icon Thickness', 'HeaderForm'),
                          'name' => 'wishlist_icon_thickness',
                          'options' => array(
                              'query' => array(
                                  array(
                                      'id_option' => '_light',
                                      'name' => $this->module->l('Light', 'HeaderForm'),
                                  ),
                                  array(
                                      'id_option' => '_medium',
                                      'name' => $this->module->l('Medium', 'HeaderForm'),
                                  ),
                                  array(
                                      'id_option' => '_bold',
                                      'name' => $this->module->l('Bold', 'HeaderForm'),
                                  )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }
    public function getHeaderSigninForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Customer Signin', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-header-signin'
                ),
                'input' => array(
                      array(
                          'type' => 'switch',
                          'label' => $this->module->l('Enable', 'HeaderForm'),
                          'name' => 'customersignin',
                          'is_bool' => true,
                          'values' => array(
                              array(
                                  'id' => 'active_on',
                                  'value' => 1,
                                  'label' =>$this->module->l('Yes', 'HeaderForm')
                              ),
                              array(
                                  'id' => 'active_off',
                                  'value' => 0,
                                  'label' => $this->module->l('No', 'HeaderForm')
                              )
                          ),
                      ),
                      array(
                          'type' => 'icon-select',
                          'label' => $this->module->l('User Icon', 'HeaderForm'),
                          'name' => 'customersignin_icon',
                          'options' => array(
                              'query' => array(
                                  array(
                                      'id_option' => 'icon-user-1_bold',
                                      'name' => $this->module->l('User 1', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-2_bold',
                                      'name' => $this->module->l('User 2', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-3',
                                      'name' => $this->module->l('User 3', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-4_bold',
                                      'name' => $this->module->l('User 4', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-5_bold',
                                      'name' => $this->module->l('User 5', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-6_bold',
                                      'name' => $this->module->l('User 6', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-7_bold',
                                      'name' => $this->module->l('User 7', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-8_bold',
                                      'name' => $this->module->l('User 8', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-9_bold',
                                      'name' => $this->module->l('User 9', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-10_medium',
                                      'name' => $this->module->l('User 10', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-11',
                                      'name' => $this->module->l('User 11', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-12_bold',
                                      'name' => $this->module->l('User 12', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-14_bold',
                                      'name' => $this->module->l('User 14', 'HeaderForm')
                                  ),
                                  array(
                                      'id_option' => 'icon-user-15_medium',
                                      'name' => $this->module->l('User 15', 'HeaderForm')
                                  )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'select',
                          'label' => $this->module->l('Icon Thickness', 'HeaderForm'),
                          'name' => 'customersignin_icon_thickness',
                          'options' => array(
                              'query' => array(
                                  array(
                                      'id_option' => '_light',
                                      'name' => $this->module->l('Light', 'HeaderForm'),
                                  ),
                                  array(
                                      'id_option' => '_medium',
                                      'name' => $this->module->l('Medium', 'HeaderForm'),
                                  ),
                                  array(
                                      'id_option' => '_bold',
                                      'name' => $this->module->l('Bold', 'HeaderForm'),
                                  )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'select',
                          'label' => $this->module->l('Dropdown Type', 'HeaderForm'),
                          'name' => 'customersignin_type',
                          'options' => array(
                              'query' => array(
                                array(
                                    'id_option' => 'dropdown',
                                    'name' => $this->module->l('Dropdown', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'sidebar',
                                    'name' => $this->module->l('Sidebar', 'HeaderForm'),
                                )
                              ),
                              'id' => 'id_option',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'fontstyle',
                          'label' => $this->module->l('Text Style', 'HeaderForm'),
                          'name' => 'customersignin_text',
                          'suffix' => 'px'
                      ),
                      array(
                          'type' => 'color',
                          'label' => $this->module->l('Text Color', 'HeaderForm'),
                          'name' => 'customersignin_text_color',
                      ),
                      array(
                          'type' => 'color',
                          'label' => $this->module->l('Background Color', 'HeaderForm'),
                          'name' => 'customersignin_bg_color',
                      ),
                      array(
                          'type' => 'text',
                          'label' => $this->module->l('Custom Css Class', 'HeaderForm'),
                          'desc' => $this->module->l('Use this field to add a class name and then refer to it in your css file.', 'HeaderForm'),
                          'name' => 'customersignin_class',
                          'size' => 30,
                          'min' => 0,
                          'class' => 'fixed-width-xxl'
                      ),
                      array(
                          'type' => 'title_separator',
                          'label' => $this->module->l('If Client not Logged', 'HeaderForm'),
                          'size' => 30,
                          'border_top' => false
                      ),
                      array(
                          'type' => 'checkbox2',
                          'label' => $this->module->l('Links Show', 'HeaderForm'),
                          'name' => 'customersignin_notlogged_links',
                          'values' => array(
                              'query' => array(
                                  array(
                                      'val' => 'register',
                                      'name' => $this->module->l('Register', 'HeaderForm'),
                                  ),
                                  array(
                                      'val' => 'login',
                                      'name' => $this->module->l('Login', 'HeaderForm'),
                                  )
                              ),
                              'id' => 'val',
                              'name' => 'name',
                          ),
                      ),
                      array(
                          'type' => 'title_separator',
                          'label' => $this->module->l('If Client is Logged', 'HeaderForm'),
                          'size' => 30,
                          'border_top' => false
                      ),
                      array(
                          'type' => 'checkbox2',
                          'label' => $this->module->l('Links Show', 'HeaderForm'),
                          'name' => 'customersignin_logged_links',
                          'values' => array(
                              'query' => array(
                                  array(
                                      'val' => 'my-orders',
                                      'name' => $this->module->l('My Orders', 'HeaderForm'),
                                  ),
                                  array(
                                      'val' => 'my-account',
                                      'name' => $this->module->l('My Account', 'HeaderForm'),
                                  ),
                                  array(
                                      'val' => 'checkout',
                                      'name' => $this->module->l('Checkout', 'HeaderForm'),
                                  ),
                                  array(
                                      'val' => 'logout',
                                      'name' => $this->module->l('Logout', 'HeaderForm'),
                                  )
                              ),
                              'id' => 'val',
                              'name' => 'name',
                          ),
                      ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }

    public function getHeaderTopbarForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('TopBar Setting', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-top-bar'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('TopBar', 'HeaderForm'),
                        'name' => 'header_topbar',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Enabled', 'HeaderForm')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('Disabled', 'HeaderForm')
                            )
                        ),
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->module->l('TopBar Content', 'HeaderForm'),
                        'name' => 'topbar_content',
                        'autoload_rte' => true,
                        'lang' => true
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('TopBar Style', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'switch-label',
                        'label' => $this->module->l('Width', 'HeaderForm'),
                        'name' => 'topbar_width',
                        'values'    => array(
                            array('id'    => 'active_on','value' => 1,'label' => $this->module->l('Container', 'HeaderForm')),
                            array('id'    => 'active_off','value' => 0,'label' => $this->module->l('FullWidth', 'HeaderForm'))
                        ),
                        'width' => '260'
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Font size', 'HeaderForm'),
                        'name' => 'topbar_fontsize',
                        'class' => 'fixed-width-xl',
                        'min' => 6,
                        'size' => 30,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Text Color', 'HeaderForm'),
                        'name' => 'topbar_text_color',
                        'desc' => $this->module->l('Choose color for TopBar text.', 'HeaderForm')
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Link Color', 'HeaderForm'),
                        'name' => 'topbar_link_color',
                        'desc' => $this->module->l('Choose color for TopBar link.', 'HeaderForm')
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Link Hover Color', 'HeaderForm'),
                        'name' => 'topbar_link_hover_color',
                        'desc' => $this->module->l('Choose color for TopBar link hover.', 'HeaderForm')
                    ),
                    array(
                        'type' => 'text-group',
                        'label' => $this->module->l('Margin'),
                        'name' => 'topbar_margin',
                        'desc' => $this->module->l('leave blank if you dont want to set'),
                        'suffix' => 'px',
                        'size' => 5
                    ),
                    array(
                        'type' => 'text-group',
                        'label' => $this->module->l('Padding'),
                        'name' => 'topbar_padding',
                        'desc' => $this->module->l('leave blank if you dont want to set'),
                        'suffix' => 'px',
                        'size' => 5
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Custom Css Class', 'HeaderForm'),
                        'desc' => $this->module->l('Use this field to add a class name and then refer to it in your css file.', 'HeaderForm'),
                        'name' => 'topbar_class',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'fixed-width-xxl'
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Background Setting', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Background Type', 'HeaderForm'),
                        'name' => 'topbar_bg',
                        'options' => array(
                            'query' => array(
                              array(
                                  'id_option' => '',
                                  'name' => $this->module->l('None', 'HeaderForm'),
                              ),
                                array(
                                    'id_option' => 'image',
                                    'name' => $this->module->l('Image', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'color',
                                    'name' => $this->module->l('Color', 'HeaderForm'),
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Background Color', 'HeaderForm'),
                        'name' => 'topbar_bg_color',
                        'desc' => $this->module->l('Choose background color for TopBar.', 'HeaderForm'),
                        'condition' => array(
                            'topbar_bg' => '==color'
                        ),
                    ),
                    array(
                        'type' => 'background-img',
                        'label' => $this->module->l('Background Image', 'HeaderForm'),
                        'name' => 'topbar_bg_image',
                        'condition' => array(
                            'topbar_bg' => '==image'
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }
    public function getHeaderSidebarForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('SideBar Setting', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-side-bar'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('SideBar', 'HeaderForm'),
                        'name' => 'header_sidebar',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Enabled', 'HeaderForm')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('Disabled', 'HeaderForm')
                            )
                        ),
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('SideBar Style', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Sidebar Position', 'HeaderForm'),
                        'name' => 'sidebar_position',
                        'options' => array(
                            'query' => array(
                              array(
                                  'id_option' => 'left-sidebar',
                                  'name' => $this->module->l('Sidebar on Left', 'HeaderForm'),
                              ),
                              array(
                                  'id_option' => 'right-sidebar',
                                  'name' => $this->module->l('Sidebar on Right', 'HeaderForm'),
                              )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Font size', 'HeaderForm'),
                        'name' => 'sidebar_fontsize',
                        'class' => 'fixed-width-xl',
                        'min' => 6,
                        'size' => 30,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Text Color', 'HeaderForm'),
                        'name' => 'sidebar_text_color',
                        'desc' => $this->module->l('Choose color for SideBar text.', 'HeaderForm')
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Link Color', 'HeaderForm'),
                        'name' => 'sidebar_link_color',
                        'desc' => $this->module->l('Choose color for SideBar link.', 'HeaderForm')
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Link Hover Color', 'HeaderForm'),
                        'name' => 'sidebar_link_hover_color',
                        'desc' => $this->module->l('Choose color for SideBar link hover.', 'HeaderForm')
                    ),
                    array(
                        'type' => 'text-group',
                        'label' => $this->module->l('Padding'),
                        'name' => 'sidebar_padding',
                        'desc' => $this->module->l('leave blank if you dont want to set'),
                        'suffix' => 'px',
                        'size' => 5
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->module->l('Custom Css Class', 'HeaderForm'),
                        'desc' => $this->module->l('Use this field to add a class name and then refer to it in your css file.', 'HeaderForm'),
                        'name' => 'sidebar_class',
                        'size' => 30,
                        'min' => 0,
                        'class' => 'fixed-width-xxl'
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Background Setting', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Background Type', 'HeaderForm'),
                        'name' => 'sidebar_bg',
                        'options' => array(
                            'query' => array(
                              array(
                                  'id_option' => '',
                                  'name' => $this->module->l('None', 'HeaderForm'),
                              ),
                                array(
                                    'id_option' => 'image',
                                    'name' => $this->module->l('Image', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'color',
                                    'name' => $this->module->l('Color', 'HeaderForm'),
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Background Color', 'HeaderForm'),
                        'name' => 'sidebar_bg_color',
                        'desc' => $this->module->l('Choose background color for SideBar.', 'HeaderForm'),
                        'condition' => array(
                            'sidebar_bg' => '==color'
                        ),
                    ),
                    array(
                        'type' => 'background-img',
                        'label' => $this->module->l('Background Image', 'HeaderForm'),
                        'name' => 'sidebar_bg_image',
                        'condition' => array(
                            'sidebar_bg' => '==image'
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }
    public function getHeaderResponsiveForm()
    {
        return array(
            'form' => array(
                'child' => true,
                'legend' => array(
                    'title' => $this->module->l('Responsive Header Setting', 'HeaderForm'),
                    'icon' => 'icon-cogs',
                    'id' => 'jms-header-responsive'
                ),
                'input' => array(
                    array(
                        'type' => 'image-select',
                        'label' => $this->module->l('Mobile Header Layout', 'HeaderForm'),
                        'name' => 'header_mobile_layout',
                        'direction' => 'vertical',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id_option' => 1,
                                    'name' => $this->module->l('Layout 1', 'HeaderForm'),
                                    'img' => 'headers/mobile-1.jpg'
                                ),
                                array(
                                    'id_option' => 2,
                                    'name' => $this->module->l('Layout 2', 'HeaderForm'),
                                    'img' => 'headers/mobile-2.jpg'
                                ),
                                array(
                                    'id_option' => 3,
                                    'name' => $this->module->l('Layout 3', 'HeaderForm'),
                                    'img' => 'headers/mobile-3.jpg'
                                ),
                                array(
                                    'id_option' => 4,
                                    'name' => $this->module->l('Layout 4', 'HeaderForm'),
                                    'img' => 'headers/mobile-4.jpg'
                                ),
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Header Responsive Style', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'text-group',
                        'label' => $this->module->l('Padding'),
                        'name' => 'header_mobile_padding',
                        'desc' => $this->module->l('leave blank if you dont want to set'),
                        'suffix' => 'px',
                        'size' => 5
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Background Type', 'HeaderForm'),
                        'name' => 'header_mobile_bg',
                        'options' => array(
                            'query' => array(
                              array(
                                  'id_option' => '',
                                  'name' => $this->module->l('None', 'HeaderForm'),
                              ),
                                array(
                                    'id_option' => 'image',
                                    'name' => $this->module->l('Image', 'HeaderForm'),
                                ),
                                array(
                                    'id_option' => 'color',
                                    'name' => $this->module->l('Color', 'HeaderForm'),
                                )
                            ),
                            'id' => 'id_option',
                            'name' => 'name',
                        ),
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Background Color', 'HeaderForm'),
                        'name' => 'header_mobile_bg_color',
                        'desc' => $this->module->l('Choose background color for Header Mobile.', 'HeaderForm'),
                        'condition' => array(
                            'header_mobile_bg' => '==color'
                        ),
                    ),
                    array(
                        'type' => 'background-img',
                        'label' => $this->module->l('Background Image', 'HeaderForm'),
                        'name' => 'header_mobile_bg_image',
                        'condition' => array(
                            'header_mobile_bg' => '==image'
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->module->l('Header Sticky', 'HeaderForm'),
                        'name' => 'header_mobile_sticky',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' =>$this->module->l('Enabled', 'HeaderForm')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->module->l('Disabled', 'HeaderForm')
                            )
                        ),
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Height', 'HeaderForm'),
                        'name' => 'header_mobile_sticky_height',
                        'class' => 'fixed-width-xl',
                        'min' => 6,
                        'size' => 30,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Header Sticky Background Color', 'HeaderForm'),
                        'name' => 'header_mobile_sticky_bg',
                        'condition' => array(
                            'header_mobile_sticky' => '==1'
                        )
                    ),
                    array(
                        'type' => 'title_separator',
                        'label' => $this->module->l('Icon Style', 'HeaderForm'),
                        'size' => 30,
                        'border_top' => false
                    ),
                    array(
                        'type' => 'number',
                        'label' => $this->module->l('Font Size', 'HeaderForm'),
                        'name' => 'header_mobile_icon_fontsize',
                        'class' => 'fixed-width-xl',
                        'min' => 6,
                        'size' => 30,
                        'suffix' => 'px'
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Icon Color', 'HeaderForm'),
                        'name' => 'header_mobile_icon_color'
                    ),
                    array(
                        'type' => 'color',
                        'label' => $this->module->l('Icon Hover Color', 'HeaderForm'),
                        'name' => 'header_mobile_icon_hover_color'
                    ),
                ),
                'submit' => array(
                    'title' => $this->module->l('Save', 'HeaderForm'),
                ),
            ),
        );
    }
}
