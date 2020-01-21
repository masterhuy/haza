<?php
/**
* 2007-2017 PrestaShop
*
* Jms Theme Layout
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2017 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

class JmsSettingHelper extends Module
{
    public function __construct()
    {
        $this->module = Module::getInstanceByName('jmsthemesetting');
    }

}
