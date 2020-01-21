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
include_once(_PS_MODULE_DIR_.'jmsslider/SliderObject.php');
include_once(_PS_MODULE_DIR_.'jmsslider/SlideObject.php');
include_once(_PS_MODULE_DIR_.'jmsslider/LayerObject.php');
class JmsAddonSliderLayer extends JmsAddonBase
{
    public function __construct()
    {
        $this->addonname = 'sliderlayer';
        $this->modulename = 'jmsslider';
        $this->addontitle = 'Slider Layer';
        $this->addondesc = 'Show Slider Layer On Page';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
      $sql = 'SELECT id_slider,title FROM `'._DB_PREFIX_.'jms_slider`
              WHERE `active` = 1 ORDER BY `order` ASC';
      $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        $inputs = array(
            array(
                'type' => 'select2',
                'name' => 'slider_id',
                'label' => $this->l('Slider'),
                'lang' => '0',
                'desc' => 'Select Slider to Show.',
                'options' => $result,
                'options_name' => array('id_slider','title'),
                'default' => ''
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
        $slider_id = (int)$addon->fields[0]->value;

        if ($slider_id < 0) {
            return '';
        }
        $slider = new SliderObject($slider_id);
        $slider->slides = $slider->getSlides(true);
        foreach ($slider->slides as $slide) {
            $slide->layers = $slide->getLayers();
        }

        $root_url = Tools::getHttpHost(true).__PS_BASE_URI__;
        $this->context->smarty->assign(
            array(
            'slider' => $slider,
            'root_url' => $root_url,
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
