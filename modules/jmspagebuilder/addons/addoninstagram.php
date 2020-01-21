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
include_once(_PS_MODULE_DIR_.'jmspagebuilder/addons/addonbase.php');
class JmsAddonInstagram extends JmsAddonBase
{
    public static $index = 0;
    public function __construct()
    {
        $this->modulename = 'jmspagebuilder';
        $this->addonname = 'instagram';
        $this->addontitle = 'Instagram';
        $this->addondesc = 'Show latest instagram images';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();
        $this->context->controller->addJS('modules/'.$this->modulename.'/views/js/instagram.js', 'all');
        self::$index++;
    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'title',
                'label' => $this->l('Title'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon title. Leave blank if no title is needed.',
                'default' => 'Instagram Recents'
            ),
            array(
                'type' => 'text',
                'name' => 'desc',
                'label' => $this->l('Description'),
                'lang' => '1',
                'desc' => 'Enter text which will be used as addon description. Leave blank if no description is needed.',
                'default' => 'Follow us on instagram with 12k following and posting everyday'
            ),
            array(
                'type' => 'text',
                'name' => 'username',
                'lang' => '0',
                'label' => $this->l('Instagram User ID'),
                'desc' => 'Enter Instagram user ID',
                'default' => '3234980746'
            ),
            array(
                'type' => 'text',
                'name' => 'clientid',
                'lang' => '0',
                'label' => $this->l('Client ID'),
                'desc' => 'Instagram Client ID',
                'default' => '54069bfa247a419eb75aff87880b35b0'
            ),
            array(
                'type' => 'text',
                'name' => 'access_token',
                'lang' => '0',
                'label' => $this->l('Access Token'),
                'desc' => 'Instagram API Access Token',
                'default' => '3234980746.7c96d22.e489ece15408429b99daa9a71355b2d7'
            ),
            array(
                'type' => 'text',
                'name' => 'instagram_to_display',
                'lang' => '0',
                'label' => $this->l('Number Images Instagram To Display'),
                'desc' => 'Number Images Instagram To Display',
                'default' => 5
            ),
            array(
                'type' => 'text',
                'name' => 'overwrite_tpl',
                'label' => $this->l('Overwrite Tpl File'),
                'lang' => '0',
                'desc' => 'Use When you want overwrite template file'
            )
        );
        return $inputs;
    }
    public function returnValue($addon)
    {

        $id_lang = $this->context->language->id;
        $username = $addon->fields[2]->value;
        $clientid = $addon->fields[3]->value;
        if(empty($addon->fields[4]->value)) return;
        $access_token = $addon->fields[4]->value;
        $count = $addon->fields[5]->value;
        $addon_title = empty($addon->fields[0]->value->$id_lang) ? '' : $addon->fields[0]->value->$id_lang;
        $addon_desc = empty($addon->fields[1]->value->$id_lang) ? '' : $addon->fields[1]->value->$id_lang;
        $this->context->smarty->assign(
            array(
                'addon_title' => $addon_title,
                'addon_desc' => $addon_desc,
                'count' => $count,
                'username' => $username,
                'token' => $access_token,
                'clientid' => $clientid,
                'index' => self::$index,
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
