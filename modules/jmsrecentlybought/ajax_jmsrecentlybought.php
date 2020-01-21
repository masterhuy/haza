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

include_once('../../config/config.inc.php');
include_once('../../init.php');
include_once('class/JmsHelper.php');
include_once('jmsrecentlybought.php');

$module = new JmsRecentlyBought();
if (Tools::isSubmit('action') &&
    Tools::isSubmit('_token') &&
    Tools::getValue('_token') == $module->secure_key) {
    $helper = new JmsHelper();
    $products = $helper->getProducts(true);
    die(Tools::jsonEncode($products));
} else {
    die('Access Denied');
}
