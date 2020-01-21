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
include_once _PS_MODULE_DIR_ . 'jmsthemesetting/classes/forms/GeneralForm.php';
include_once _PS_MODULE_DIR_ . 'jmsthemesetting/classes/forms/HeaderForm.php';
include_once _PS_MODULE_DIR_ . 'jmsthemesetting/classes/forms/FooterForm.php';
include_once _PS_MODULE_DIR_ . 'jmsthemesetting/classes/forms/SocialForm.php';
include_once _PS_MODULE_DIR_ . 'jmsthemesetting/classes/forms/MenuForm.php';
include_once _PS_MODULE_DIR_ . 'jmsthemesetting/classes/forms/PagesForm.php';
include_once _PS_MODULE_DIR_ . 'jmsthemesetting/classes/forms/ImportExportForm.php';
use Leafo\ScssPhp\Compiler;
class AdminJmsThemeSettingController extends ModuleAdminController
{
    private $sprefix;
    private $settings;
    public function __construct()
    {
        $this->name = 'JmsThemeSetting';
        $this->bootstrap = true;
        $this->sprefix = 'jms_';
        parent::__construct();
        $this->settings = array(
            'body_width' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'container_width' => array('type' => 'default', 'value' => '1200'),
            'body_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'body_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'body_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'body_font' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'font'),
            'body_font_google' => array('type' => 'google-font', 'value' => '', 'front' => 1, 'css' => 'no'),
            'body_font_system' => array('type' => 'default', 'value' => ''),
            'body_fontface_css' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'body_font_face' => array('type' => 'default', 'value' => ''),
            'body_fontsize' => array('type' => 'default', 'value' => ''),
            'body_text_color' => array('type' => 'default', 'value' => ''),
            'body_link_color' => array('type' => 'default', 'value' => ''),
            'body_link_hover_color' => array('type' => 'default', 'value' => ''),
            'body_lineheight' => array('type' => 'default', 'value' => ''),
            'body_fontweight' => array('type' => 'default', 'value' => ''),
            'body_letterspacing' => array('type' => 'default', 'value' => ''),
            'heading_font' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'font'),
            'heading_font_google' => array('type' => 'google-font', 'value' => '', 'front' => 1, 'css' => 'no'),
            'heading_font_system' => array('type' => 'default', 'value' => ''),
            'heading_fontface_css' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'heading_font_face' => array('type' => 'default', 'value' => ''),
            'heading_fontweight' => array('type' => 'default', 'value' => ''),
            'heading_letterspacing' => array('type' => 'default', 'value' => ''),
            'heading_text_color' => array('type' => 'default', 'value' => ''),
            'body_icon_font' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'header_layout' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'header_width' => array('type' => 'default', 'value' => 'container', 'front' => 1),
            'header_height' => array('type' => 'default', 'value' => 'auto'),
            'header_personalized_height' => array('type' => 'default', 'value' => ''),
            'header_sticky' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'header_sticky_effect' => array('type' => 'default', 'value' => '', 'front' => 1),
            'header_sticky_height' => array('type' => 'default', 'value' => ''),
            'header_sticky_bg' => array('type' => 'default', 'value' => ''),
            'header_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'header_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'header_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'header_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'header_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'header_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'header_bottom_text_color' => array('type' => 'default', 'value' => ''),
            'header_bottom_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'header_bottom_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'header_bottom_bg' => array('type' => 'default', 'value' => ''),
            'header_icon_fontsize' => array('type' => 'default', 'value' => ''),
            'header_icon_color' => array('type' => 'default', 'value' => ''),
            'header_icon_hover_color' => array('type' => 'default', 'value' => ''),
            'header_topbar' => array('type' => 'default', 'value' => '', 'front' => 1),
            'topbar_content' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
            'topbar_width' => array('type' => 'default', 'value' => '', 'front' => 1),
            'topbar_fontsize' => array('type' => 'default', 'value' => ''),
            'topbar_text_color' => array('type' => 'default', 'value' => ''),
            'topbar_link_color' => array('type' => 'default', 'value' => ''),
            'topbar_link_hover_color' => array('type' => 'default', 'value' => ''),
            'topbar_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'topbar_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'topbar_text_color' => array('type' => 'default', 'value' => ''),
            'topbar_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'topbar_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'topbar_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'topbar_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'header_sidebar' => array('type' => 'default', 'value' => '', 'front' => 1),
            'sidebar_position' => array('type' => 'default', 'value' => 'right-sidebar', 'front' => 1),
            'sidebar_fontsize' => array('type' => 'default', 'value' => ''),
            'sidebar_text_color' => array('type' => 'default', 'value' => ''),
            'sidebar_link_color' => array('type' => 'default', 'value' => ''),
            'sidebar_link_hover_color' => array('type' => 'default', 'value' => ''),            
            'sidebar_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'sidebar_class' => array('type' => 'default', 'value' => ''),
            'sidebar_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'sidebar_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'sidebar_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'header_mobile_layout' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'header_mobile_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'header_mobile_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'header_mobile_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'header_mobile_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'header_mobile_sticky' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'header_mobile_sticky_height' => array('type' => 'default', 'value' => ''),
            'header_mobile_sticky_bg' => array('type' => 'default', 'value' => ''),
            'header_mobile_icon_fontsize' => array('type' => 'default', 'value' => ''),
            'header_mobile_icon_color' => array('type' => 'default', 'value' => ''),
            'header_mobile_icon_hover_color' => array('type' => 'default', 'value' => ''),
            'hormenu_id' => array('type' => 'default', 'value' => ''),
            'hormenu_align' => array('type' => 'default', 'value' => '', 'front' => 1),
            'hormenu_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'hormenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'hormenu_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'hormenu_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'hormenu_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'hormenu_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'hormenu_item_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'hormenu_link_color' => array('type' => 'default', 'value' => ''),
            'hormenu_link_hover_color' => array('type' => 'default', 'value' => ''),
            'hormenu_item_bg' => array('type' => 'default', 'value' => ''),
            'hormenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
            'hormenu_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'hormenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'hormenu_submenu_bg' => array('type' => 'default', 'value' => ''),
            'hormenu_submenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
            'hormenu_submenu_fontsize' => array('type' => 'default', 'value' => ''),
            'hormenu_submenu_link_color' => array('type' => 'default', 'value' => ''),
            'hormenu_submenu_link_hover_color' => array('type' => 'default', 'value' => ''),
            'hormenu_submenu_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'hormenu_submenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'hormenu_submenu_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'hormenu_submenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_id' => array('type' => 'default', 'value' => ''),
            'vermenu_button_text' => array('type' => 'text_lang', 'value' => '','front' => 1, 'css' => 'no'),
            'vermenu_button_bg' => array('type' => 'default', 'value' => ''),
            'vermenu_button_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'vermenu_button_text_color' => array('type' => 'default', 'value' => ''),
            'vermenu_button_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_button_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_button_width' => array('type' => 'default', 'value' => '25%'),
            'vermenu_button_border_radius' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_button_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
            'vermenu_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'vermenu_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'vermenu_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'vermenu_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'vermenu_item_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'vermenu_link_color' => array('type' => 'default', 'value' => ''),
            'vermenu_link_hover_color' => array('type' => 'default', 'value' => ''),
            'vermenu_item_bg' => array('type' => 'default', 'value' => ''),
            'vermenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
            'vermenu_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_submenu_bg' => array('type' => 'default', 'value' => ''),
            'vermenu_submenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
            'vermenu_submenu_fontsize' => array('type' => 'default', 'value' => ''),
            'vermenu_submenu_link_color' => array('type' => 'default', 'value' => ''),
            'vermenu_submenu_link_hover_color' => array('type' => 'default', 'value' => ''),
            'vermenu_submenu_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_submenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_submenu_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'vermenu_submenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'mobimenu_id' => array('type' => 'default', 'value' => ''),
            'mobimenu_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'mobimenu_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'mobimenu_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'mobimenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'mobimenu_class' => array('type' => 'default', 'value' => ''),
            'mobimenu_item_fontsize' => array('type' => 'default', 'value' => ''),
            'mobimenu_link_color' => array('type' => 'default', 'value' => ''),
            'mobimenu_link_hover_color' => array('type' => 'default', 'value' => ''),
            'mobimenu_item_bg' => array('type' => 'default', 'value' => ''),
            'mobimenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
            'mobimenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'mobimenu_submenu_bg' => array('type' => 'default', 'value' => ''),
            'mobimenu_submenu_item_hover_bg' => array('type' => 'default', 'value' => ''),
            'mobimenu_submenu_fontsize' => array('type' => 'default', 'value' => ''),
            'mobimenu_submenu_link_color' => array('type' => 'default', 'value' => ''),
            'mobimenu_submenu_link_hover_color' => array('type' => 'default', 'value' => ''),
            'mobimenu_submenu_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'mobimenu_submenu_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'cart' => array('type' => 'default', 'value' => '', 'front' => 1),
            'cart_icon' => array('type' => 'default', 'value' => '', 'front' => 1),
            'cart_icon_thickness' => array('type' => 'default', 'value' => '_medium', 'front' => 1),
            'cart_links' => array('type' => 'checkbox2', 'value' => '', 'css' => 'no'),
            'cart_text_color' => array('type' => 'default', 'value' => ''),
            'cart_bg_color' => array('type' => 'default', 'value' => ''),
            'cart_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'cart_type' => array('type' => 'default', 'value' => '', 'front' => 1),
            'cart_subtotal' => array('type' => 'default', 'value' => '', 'front' => 1),
            'cart_total' => array('type' => 'default', 'value' => '', 'front' => 1),
            'addtocart_type' => array('type' => 'default', 'value' => '', 'front' => 1),
            'addtocart_notification_color' => array('type' => 'default', 'value' => ''),
            'search' => array('type' => 'default', 'value' => '', 'front' => 1),
            'search_ajax' => array('type' => 'default', 'value' => '', 'front' => 1),
            'search_icon' => array('type' => 'default', 'value' => '', 'front' => 1),
            'search_icon_thickness' => array('type' => 'default', 'value' => '_medium', 'front' => 1),
            'search_box_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'search_box_bg_color' => array('type' => 'default', 'value' => ''),
            'search_box_type' => array('type' => 'default', 'value' => '', 'front' => 1),
            'search_box_height' => array('type' => 'default', 'value' => ''),
            'search_input_border_radius' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'search_input_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
            'search_input_text_color' => array('type' => 'default', 'value' => ''),
            'search_input_lineheight' => array('type' => 'default', 'value' => ''),
            'search_input_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'search_input_letterspacing' => array('type' => 'default', 'value' => ''),
            'search_input_bg_color' => array('type' => 'default', 'value' => ''),
            'search_input_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'wishlist' => array('type' => 'default', 'value' => '', 'front' => 1),
            'wishlist_icon' => array('type' => 'default', 'value' => '', 'front' => 1),
            'wishlist_icon_thickness' => array('type' => 'default', 'value' => '_medium', 'front' => 1),
            'customersignin' => array('type' => 'default', 'value' => '', 'front' => 1),
            'customersignin_icon' => array('type' => 'default', 'value' => '', 'front' => 1),
            'customersignin_icon_thickness' => array('type' => 'default', 'value' => '_medium', 'front' => 1),
            'customersignin_notlogged_links' => array('type' => 'checkbox2', 'value' => '', 'css' => 'no'),
            'customersignin_logged_links' => array('type' => 'checkbox2', 'value' => '', 'css' => 'no'),
            'customersignin_text' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'customersignin_text_color' => array('type' => 'default', 'value' => ''),
            'customersignin_bg_color' => array('type' => 'default', 'value' => ''),
            'customersignin_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'customersignin_type' => array('type' => 'default', 'value' => '', 'front' => 1),
            'button_text_color' => array('type' => 'default', 'value' => ''),
            'button_bg_color' => array('type' => 'default', 'value' => ''),
            'button_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'button_text_letterspacing' => array('type' => 'default', 'value' => ''),
            'button_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'button_border_radius' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'button_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
            'button_hover_text_color' => array('type' => 'default', 'value' => ''),
            'button_hover_bg_color' => array('type' => 'default', 'value' => ''),
            'button_hover_border_color' => array('type' => 'default', 'value' => ''),
            'button_active_text_color' => array('type' => 'default', 'value' => ''),
            'button_active_bg_color' => array('type' => 'default', 'value' => ''),
            'button_active_border_color' => array('type' => 'default', 'value' => ''),
            'button_small_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'button_small_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'footer_layout' => array('type' => 'default', 'value' => '', 'front' => 1),
            'footer_width' => array('type' => 'default', 'value' => '', 'front' => 1),
            'footer_personalized_height' => array('type' => 'default', 'value' => ''),
            'footer_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'footer_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'footer_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'footer_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'footer_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'footer_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'footer_text_color' => array('type' => 'default', 'value' => ''),
            'footer_block_title_color' => array('type' => 'default', 'value' => ''),
            'footer_block_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'footer_block_collapse' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'footer_top_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'footer_top_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'footer_top_text_color' => array('type' => 'default', 'value' => ''),
            'footer_top_bg_color' => array('type' => 'default', 'value' => ''),
            'footer_copyright_content' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
            'footer_copyright_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'footer_copyright_class' => array('type' => 'default', 'value' => '', 'front' => 1),
            'footer_copyright_text_color' => array('type' => 'default', 'value' => ''),
            'footer_copyright_bg_color' => array('type' => 'default', 'value' => ''),
            'footer_copyright_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'footer_payment_image' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'social_facebook' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'social_twitter' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'social_gplus' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'social_instagram' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'social_pinterest' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'social_youtube' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'social_vimeo' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'social_linkedin' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'shop_width' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'shop_layout' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'shop_list' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'shop_grid_column' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'shop_switchlist' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'shop_sortby' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'shop_activefilter' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'shop_cat_banner' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'shop_cat_desc' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'productbox_type' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'productbox_addtocart' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'productbox_quickview' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'productbox_wishlist' => array('type' => 'default', 'value' => '0', 'front' => 1, 'css' => 'no'),
            'productbox_price' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'productbox_category' => array('type' => 'default', 'value' => '0', 'front' => 1, 'css' => 'no'),
            'productbox_variant' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'productbox_hover' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'productbox_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'productbox_title_color' => array('type' => 'default', 'value' => ''),
            'productbox_price_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'productbox_price_color' => array('type' => 'default', 'value' => ''),
            'product_page_width' => array('type' => 'default', 'value' => '1'),
            'product_page_layout' => array('type' => 'default', 'value' => 'no-sidebar', 'front' => 1, 'css' => 'no'),
            'product_content_layout' => array('type' => 'default', 'value' => 'thumbs-bottom', 'front' => 1, 'css' => 'no'),
            'product_image_zoom' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'product_page_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'product_page_title_color' => array('type' => 'default', 'value' => ''),
            'product_page_price_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'product_page_price_color' => array('type' => 'default', 'value' => ''),
            'product_page_sharing' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'product_page_accessories' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'product_page_moreinfos_type' => array('type' => 'default', 'value' => 'accordion', 'front' => 1, 'css' => 'no'),
            'product_page_tab_align' => array('type' => 'default', 'value' => 'left', 'front' => 1, 'css' => 'no'),
            'contact_page_width' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'contact_page_layout' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'contact_page_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'contact_page_title_color' => array('type' => 'default', 'value' => ''),
            'contact_page_map_src' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'contact_page_image' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'contact_page_box_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
            'contact_page_box_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'login_page_width' => array('type' => 'default', 'value' => '1'),
            'login_page_hide_header' => array('type' => 'default', 'value' => '0'),
            'login_page_hide_footer' => array('type' => 'default', 'value' => '0'),
            'login_page_layout' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'login_page_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'login_page_title_color' => array('type' => 'default', 'value' => ''),
            'login_page_image' => array('type' => 'default', 'value' => '', 'front' => 1, 'css' => 'no'),
            'login_page_box_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
            'login_page_box_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'login_page_signup_content' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
            'quickview_sharing' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'quickview_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'quickview_title_color' => array('type' => 'default', 'value' => ''),
            'quickview_price_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'quickview_price_color' => array('type' => 'default', 'value' => ''),
            'breadcrumb' => array('type' => 'default', 'value' => '1', 'front' => 1, 'css' => 'no'),
            'breadcrumb_width' => array('type' => 'default', 'value' => '1'),
            'breadcrumb_align' => array('type' => 'default', 'value' => 'left', 'front' => 1, 'css' => 'no'),
            'breadcrumb_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'breadcrumb_text_color' => array('type' => 'default', 'value' => ''),
            'breadcrumb_bg' => array('type' => 'default', 'value' => '', 'css' => 'background'),
            'breadcrumb_bg_color' => array('type' => 'default', 'value' => '', 'css' => 'no'),
            'breadcrumb_bg_image' => array('type' => 'background-img', 'value' => '', 'css' => 'no'),
            'breadcrumb_seperator' => array('type' => 'default', 'value' => 'slash', 'front' => 1, 'css' => 'no'),
            'breadcrumb_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktitle_layout' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'blocktitle_title' => array('type' => 'default', 'value' => ''),
            'blocktitle_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'blocktitle_title_color' => array('type' => 'default', 'value' => ''),
            'blocktitle_title_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktitle_desc' => array('type' => 'default', 'value' => ''),
            'blocktitle_desc_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'blocktitle_desc_color' => array('type' => 'default', 'value' => ''),
            'blocktitle_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktitle_desc_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktitle_seperator_color' => array('type' => 'default', 'value' => ''),
            'blocktitle_seperator_height' => array('type' => 'default', 'value' => ''),
            'blocktitle_seperator_hl_color' => array('type' => 'default', 'value' => ''),
            'blocktab_layout' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'blocktab_title' => array('type' => 'default', 'value' => ''),
            'blocktab_title_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'blocktab_title_color' => array('type' => 'default', 'value' => ''),
            'blocktab_title_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktab_desc' => array('type' => 'default', 'value' => ''),
            'blocktab_desc_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'blocktab_desc_color' => array('type' => 'default', 'value' => ''),
            'blocktab_item_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'blocktab_item_color' => array('type' => 'default', 'value' => ''),
            'blocktab_item_active_color' => array('type' => 'default', 'value' => ''),
            'blocktab_item_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktab_item_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktab_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktab_desc_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'blocktab_seperator_color' => array('type' => 'default', 'value' => ''),
            'blocktab_seperator_height' => array('type' => 'default', 'value' => ''),
            'blocktab_seperator_hl_color' => array('type' => 'default', 'value' => ''),
            'logo_source' => array('type' => 'default', 'value' => 'default', 'front' => 1, 'css' => 'no'),
            'logo_text' => array('type' => 'html_lang', 'value' => '','front' => 1, 'css' => 'no'),
            'logo_text_font' => array('type' => 'fontstyle', 'value' => '', 'css' => 'fontstyle'),
            'logo_text_color' => array('type' => 'default', 'value' => ''),
            'logo_text_letterspacing' => array('type' => 'default', 'value' => ''),
            'logo_text_border_radius' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'logo_text_border' => array('type' => 'border', 'value' => '', 'css' => 'border'),
            'logo_image' => array('type' => 'default', 'value' => '','front' => 1, 'css' => 'no'),
            'logo_text_padding' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'carousel_lazyload' => array('type' => 'default', 'value' => '','front' => 1, 'css' => 'no'),
            'carousel_nav_type' => array('type' => 'default', 'value' => '1', 'front' => 1),
            'carousel_nav_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'carousel_nav_border' => array('type' => 'border', 'value' => '{"width":"2","style":"solid","color":"#bdbdbd"}', 'css' => 'border'),
            'carousel_nav_arrow_color' => array('type' => 'default', 'value' => ''),
            'carousel_nav_arrow_hover_color' => array('type' => 'default', 'value' => ''),
            'carousel_nav_bg_hover_color' => array('type' => 'default', 'value' => ''),
            'carousel_nav_show' => array('type' => 'default', 'value' => '', 'front' => 1),
            'carousel_pag_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'carousel_pag_dot_border' => array('type' => 'border', 'value' => '{"width":"1","style":"solid","color":"#dedede"}', 'css' => 'border'),
            'carousel_pag_dot_margin' => array('type' => 'padding', 'value' => '', 'css' => 'padding'),
            'carousel_pag_dot_active_color' => array('type' => 'default', 'value' => ''),
            'carousel_pag_show' => array('type' => 'default', 'value' => '', 'front' => 1),
        );

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
    public function ajaxProcessExportSetting()
    {
        $var = array();
        $languages = Language::getLanguages(false);
        foreach ($this->settings as $key => $setting) {
            if($setting['type'] == 'html_lang') {
              foreach ($languages as $language) {
                  $var[$key][$language['id_lang']] = htmlspecialchars_decode(Configuration::get($this->sprefix  . $key, $language['id_lang']));
              }
            } else {
              $var[$key] = Configuration::get($this->sprefix  . $key);
            }
        }

        header('Content-disposition: attachment; filename=themesetting.json');
        header('Content-type: application/json');
        print_r(json_encode($var));
        die;
    }
    public function convertScssVar($name, $type = 'default', $otions = '')
    {
        if ($type == 'default') {
            $val = Configuration::get($this->sprefix . $name);
            $var = '$' . $name . ': ' . (!empty($val) ? $val : 'null') . ';';
        } elseif ($type == 'background') {
            $bg_color = Configuration::get($this->sprefix . $name . '_color');
            $bg_image = Configuration::get($this->sprefix . $name . '_image');
            $bg_image = json_decode(Configuration::get($this->sprefix . $name. '_image'), true);
            if (Configuration::get($this->sprefix . $name) == 'image') {
              $bg_repeat = Configuration::get($this->sprefix . $name . '_repeat');
              $bg_attachment = Configuration::get($this->sprefix . $name . '_attachment');
              $bg_position = Configuration::get($this->sprefix . $name . '_position');
              $bg_size = Configuration::get($this->sprefix . $name . '_size');
                $var = '$' . $name . ': '.' url("' . $bg_image['image'] . '")' . str_replace('-',
                        ' ', $bg_image['position']) . ' / ' . $bg_image['size'] . ' ' . $bg_image['repeat'] . ' ' . $bg_image['attachment'] . ';';
            } elseif(Configuration::get($this->sprefix . $name) == 'color') {
                $var = '$' . $name . ': ' . (!empty($bg_color) ? $bg_color : 'null') . ';';
            } else {
              $var = null;
            }
        } elseif ($type == 'padding') {
            $_arr = json_decode(Configuration::get($this->sprefix . $name), true);
            $var = '';
            if($_arr[0] != '')
              $var .= '$' . $name . '_top: '.$_arr[0].'px'.';';
            if($_arr[1] != '')
                $var .= '$' . $name . '_right: '.$_arr[1].'px'.';';
            if($_arr[2] != '')
                $var .= '$' . $name . '_bottom: '.$_arr[2].'px'.';';
            if($_arr[3] != '')
                $var .= '$' . $name . '_left: '.$_arr[3].'px'.';';
        } elseif ($type == 'fontstyle') {
            $_arr = json_decode(Configuration::get($this->sprefix . $name), true);
            $var = '';
            if($_arr['size'] != '')
                $var .= '$' . $name . '_size: '.$_arr['size'].'px'.';';
            if($_arr['weight'] != '')
                $var .= '$' . $name . '_weight: '.$_arr['weight'].';';
            if($_arr['style'] != '')
                $var .= '$' . $name . '_style: '.$_arr['style'].';';
            if($_arr['transform'] != '')
                $var .= '$' . $name . '_transform: '.$_arr['transform'].';';
        } elseif ($type == 'border') {
            $_arr = json_decode(Configuration::get($this->sprefix . $name), true);
            $var = '';
            if($_arr['width'] != '')
                $var .= '$' . $name . '_width: '.$_arr['width'].'px'.';';
            if($_arr['style'] != '')
                $var .= '$' . $name . '_style: '.$_arr['style'].';';
            if($_arr['color'] != '')
                $var .= '$' . $name . '_color: '.$_arr['color'].';';
        } elseif ($type == 'font') {
            $font_google = json_decode(Configuration::get($this->sprefix . $name . '_google'), true);
            $font_system = Configuration::get($this->sprefix . $name . '_system');
            $font_face = Configuration::get($this->sprefix . $name . '_face');
            if (Configuration::get($this->sprefix . $name) == 'system' && $font_system) {
                $var = '$' . $name . ':'.$font_system.';';
            } elseif(Configuration::get($this->sprefix . $name) == 'google' && $font_google) {
                $var = '$' . $name . ':'.$font_google['family'].';';
              } elseif(Configuration::get($this->sprefix . $name) == 'fontface' && $font_face) {
                $var = '$' . $name . ':'.$font_face.';';
            } else {
              $var = null;
            }
        }

        return $var;
    }
    public function genAssets()
    {
        include_once _PS_MODULE_DIR_ . 'jmsthemesetting/classes/scssphp/scss.inc.php';

        $css = '';
        $vars = '';
        $compiler = new Compiler();
        $compiler->setIgnoreErrors(true);
        $compiler->setImportPaths(_PS_ROOT_DIR_.'/modules/jmsthemesetting/views/scss/');
        foreach ($this->settings as $key => $setting) {

            if (isset($setting['css'])) {
                switch ($setting['css']) {
                    case 'no':
                        continue;
                        break;
                    case 'background':
                        $vars .= ' ' . $this->convertScssVar($key, 'background') . PHP_EOL;
                        break;
                    case 'padding':
                        $vars .= ' ' . $this->convertScssVar($key, 'padding') . PHP_EOL;
                        break;
                    case 'fontstyle':
                        $vars .= ' ' . $this->convertScssVar($key, 'fontstyle') . PHP_EOL;
                        break;
                    case 'border':
                        $vars .= ' ' . $this->convertScssVar($key, 'border') . PHP_EOL;
                        break;
                    case 'font':
                        $vars .= ' ' . $this->convertScssVar($key, 'font') . PHP_EOL;
                        break;
                }
            } else {
                $vars .= ' ' . $this->convertScssVar($key) . PHP_EOL;
            }
        }
        //print_r($vars); exit;
        try {
            $css .= $compiler->compile($vars . ' @import "scssmain.scss";');
        } catch (Exception $e) {
            print_r($e->getMessage()); exit;
            $message = '<div class="alert alert-danger">' . $this->l('error in SCSS compiler');
            $message .= '<ul><li>' . $e->getMessage() . ' </li></ul></div>';
            return ['success' => false, 'message' => $message];
        }

        $css = trim(preg_replace('/\s+/', ' ', $css));
        $myFile = _PS_ROOT_DIR_ . "/modules/jmsthemesetting/views/css/custom.css";

        file_put_contents($myFile, $css);

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
                    $padding_fields = array('customersignin_logged_links');
                    foreach ($arr as $key => $value) {
                        if(in_array($key, $html_lang_fields)) {
                            $content_array = array();
                            foreach ($languages as $language) {
                                $content_array[$language['id_lang']] = $value[$language['id_lang']];
                            }
                            Configuration::updateValue($this->sprefix . $key, $content_array, true);
                        } elseif (in_array($key, $padding_fields)) {
                            //print_r(json_decode($value));
                            Configuration::updateValue($this->sprefix . $key, json_encode(json_decode($value)));
                        } else {
                            Configuration::updateValue($this->sprefix . $key, $value);
                        }
                    }
                    //exit;
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
          //print_r(json_encode($var)); exit;
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
        $this->addCSS(_MODULE_DIR_ . $this->module->name . '/views/fonts/font-icon.css');
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
