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
        $this->addondesc = 'Show Slider Layer On Homepage';
        $this->overwrite_tpl = '';
        $this->context = Context::getContext();

    }
    public function getInputs()
    {
        $inputs = array(
            array(
                'type' => 'text',
                'name' => 'slide_ids',
                'label' => $this->l('Slider IDs'),
                'lang' => '0',
                'desc' => 'Slide IDs to show, seperate by ",".',
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
        $sliderIds = explode(',', $addon->fields[0]->value);
        $sliders = array();
        if (!is_array($sliderIds)) {
            return '';
        }
        foreach ($sliderIds as $id) {
            $sliders[] = new SliderObject($id);
        }
        if (!count($sliders)) {
            return '';
        }
        foreach ($sliders as $slider) {
            $slider->slides = $slider->getSlides(true);
            foreach ($slider->slides as $slide) {
                $slide->layers = $slide->getLayers();
            }
        }
        $root_url = Tools::getHttpHost(true).__PS_BASE_URI__;
        $this->context->smarty->assign(
            array(
            'sliders' => $sliders,
            'root_url' => $root_url,
            )
        );
        $this->overwrite_tpl = $addon->fields[count($addon->fields)-1]->value;
        $template_path = $this->loadTplPath();
        return $this->context->smarty->fetch($template_path);
    }
}
