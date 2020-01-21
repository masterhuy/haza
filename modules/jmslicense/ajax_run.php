<?php
/**
* 2007-2014 PrestaShop
*
* Jms Advance Footer
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2014 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

include_once('../../config/config.inc.php');
include_once('../../init.php');
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
$context = Context::getContext();
if (Tools::getValue('action') == 'load_font_weight') {
    $fontfamily = Tools::getValue('fontfamily');
    $path = _PS_MODULE_DIR_."/jmsthemesetting/views/fonts/webfonts.json";
    $request = file_get_contents( $path );
    $fonts = json_decode( $request, true );
    //print_r($fontfamily);
    foreach ($fonts['items'] as $font) {
      if($font['family'] == $fontfamily) {
        print_r(json_encode($font['variants']));
        break;
      }
    }
}
