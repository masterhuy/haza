<?php
/**
* 2007-2019 PrestaShop
*
* Jms Page Builder
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

include_once(_PS_MODULE_DIR_.'jmspagebuilder/jmsPage.php');
class JmsPageBuilderInstall
{
    public function createTable()
    {
        $sql = array();
        $sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmspagebuilder`;
                    CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmspagebuilder` (
                    `id_page` int(10) unsigned NOT NULL AUTO_INCREMENT,
                    `id_shop` int(10) unsigned NOT NULL,
                    PRIMARY KEY (`id_page`,`id_shop`)
                ) ENGINE='._MYSQL_ENGINE_.'  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
        $sql[] = 'DROP TABLE IF EXISTS `'._DB_PREFIX_.'jmspagebuilder_pages`;
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'jmspagebuilder_pages` (
                  `id_page` int(11) NOT NULL AUTO_INCREMENT,
                  `title` varchar(100) NOT NULL,
                  `css_file` varchar(30) NOT NULL,
                  `js_file` varchar(30) NOT NULL,
                  `page_class` varchar(100) NOT NULL,
                  `params` mediumtext NOT NULL,
                  `active` tinyint(1) NOT NULL,
                  `ordering` int(11) NOT NULL,
                  PRIMARY KEY (`id_page`)
                ) ENGINE='._MYSQL_ENGINE_.'  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1';
        foreach ($sql as $s) {
            if (!Db::getInstance()->execute($s)) {
                return false;
            }
        }
    }
    public function _addPage($title, $importfile, $ordering, $css_file = '', $js_file = '', $page_class = '')
    {
        $page = new JmsPage();
        $page->title = $title;
        $page->css_file = $css_file;
        $page->js_file = $js_file;
        $page->page_class = $page_class;
        $page->ordering = $ordering;
        $page->active = 1;
        $jsonfile = fopen(_PS_ROOT_DIR_.'/modules/jmspagebuilder/json/'.$importfile, "r") or die("Unable to open file!");
        $jsontext = fread($jsonfile, filesize(_PS_ROOT_DIR_.'/modules/jmspagebuilder/json/'.$importfile));
        $page->params = $jsontext;
        $page->add();
        return $page->id;
    }
    public function installDemo()
    {
        $page1_id = $this->_addPage('Jms Kasos - Home 1', 'home_1.txt', 0, 'home1.css', 'home1.js', 'home_1');
    		Configuration::updateValue('JPB_HOMEPAGE', $page1_id);
    		$page2_id = $this->_addPage('Jms Kasos - Home 2', 'home_2.txt', 1, 'home2.css', 'home2.js', 'home_2');
    		$page3_id = $this->_addPage('Jms Kasos - Home 3', 'home_3.txt', 2, 'home3.css', 'home3.js', 'home_3');
    		$page4_id = $this->_addPage('Jms Kasos - Home 4', 'home_4.txt', 3, 'home4.css', 'home4.js', 'home_4');
    		$page5_id = $this->_addPage('Jms Kasos - Home 5', 'home_5.txt', 4, 'home5.css', 'home5.js', 'home_5');
    		$page6_id = $this->_addPage('Jms Kasos - Home 6', 'home_6.txt', 5, 'home6.css', 'home6.js', 'home_6');
    		$page7_id = $this->_addPage('Jms Kasos - Home 7', 'home_7.txt', 6, 'home7.css', 'home7.js', 'home_7');
    		$page8_id = $this->_addPage('Jms Kasos - Home 8', 'home_8.txt', 7, 'home8.css', 'home8.js', 'home_8');
    }
}
