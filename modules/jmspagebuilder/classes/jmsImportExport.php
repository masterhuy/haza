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

class JmsImportExport extends Module
{
    public function __construct()
    {
        $this->name = 'jmspagebuilder';
        parent::__construct();
    }
    public function getPage($id_page)
    {
        $req = 'SELECT hs.*
                FROM `'._DB_PREFIX_.'jmspagebuilder_pages` hs
                WHERE hs.`id_page` = '.(int)$id_page;
        $page = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($req);
        return ($page);
    }

    public function exportPage($id_page)
    {
        $page = $this->getPage($id_page);
        $filename = str_replace(' ', '_', $page['title']).'.txt';
        header('Content-type: text/xml');
        header('Content-Disposition: attachment; filename="'.Tools::strtolower($filename).'"');
        $_output = $page['params'];
        echo $_output;
        exit;
    }
}
