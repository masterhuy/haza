<?php
/**
* 2007-2019 PrestaShop
*
* Jms Blog
*
*  @author    Joommasters <joommasters@gmail.com>
*  @copyright 2007-2019 Joommasters
*  @license   license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*  @Website: http://www.joommasters.com
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class JmsBlog extends Module
{
    public function __construct()
    {
        $this->name = 'jmsblog';
        $this->tab = 'front_office_features';
        $this->version = '2.5.5';
        $this->controllers = array('latest', 'categories', 'category', 'post', 'tag', 'archive');
        $this->author = 'Joommasters';
        $this->need_instance = 0;
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Jms Blog');
        $this->description = $this->l('Advanced Blog Module For Prestashop.');        
    }

    public function install()
    {
        $res = true;
        if (parent::install() && $this->registerHook('moduleRoutes')) {
            include(dirname(__FILE__).'/install/install.php');
            $install_demo = new JmsInstall();
            $install_demo->createTable();
            $install_demo->installSamples();
            $res &= Configuration::updateValue('JMSBLOG_PAGE_SIDEBAR', 'left');
            $res &= Configuration::updateValue('JMSBLOG_INTROTEXT_LIMIT', 300);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_CATEGORY', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_VIEWS', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_COMMENTS', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_MEDIA', 1);
            $res &= Configuration::updateValue('JMSBLOG_IMAGE_WIDTH', 1000);
            $res &= Configuration::updateValue('JMSBLOG_IMAGE_HEIGHT', 1000);
            $res &= Configuration::updateValue('JMSBLOG_IMAGE_THUMB_WIDTH', 300);
            $res &= Configuration::updateValue('JMSBLOG_IMAGE_THUMB_HEIGHT', 300);
            $res &= Configuration::updateValue('JMSBLOG_COMMENT_ENABLE', 1);
            $res &= Configuration::updateValue('JMSBLOG_FACEBOOK_COMMENT', 0);
            $res &= Configuration::updateValue('JMSBLOG_ALLOW_GUEST_COMMENT', 1);
            $res &= Configuration::updateValue('JMSBLOG_COMMENT_DELAY', 120);
            $res &= Configuration::updateValue('JMSBLOG_AUTO_APPROVE_COMMENT', 0);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_SOCIAL_SHARING', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_FACEBOOK', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_TWITTER', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_GOOGLEPLUS', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_LINKEDIN', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_PINTEREST', 1);
            $res &= Configuration::updateValue('JMSBLOG_SHOW_EMAIL', 1);
      			$res &= Configuration::updateValue('JBW_SB_ITEM_SHOW', 6);
      			$res &= Configuration::updateValue('JBW_SB_SHOW_POPULAR', 1);
      			$res &= Configuration::updateValue('JBW_SB_SHOW_RECENT', 1);
      			$res &= Configuration::updateValue('JBW_SB_SHOW_LATESTCOMMENT', 1);
      			$res &= Configuration::updateValue('JBW_SB_COMMENT_LIMIT', 50);
      			$res &= Configuration::updateValue('JBW_SB_SHOW_CATEGORYMENU', 1);
      			$res &= Configuration::updateValue('JBW_SB_SHOW_ARCHIVES', 1);

            $tab_parent_id = (int)Tab::getIdFromClassName('PRESTAWORK');
            if($tab_parent_id <= 0) {
                $tab = new Tab();
                $tab->id_parent = 0;
                $tab->active = 1;
                $tab->class_name = "PRESTAWORK";
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'PRESTAWORK';
                }
                if(!$tab->add()) return false;
            }
            if(((int)Tab::getIdFromClassName('PRESTAWORK') > 0) && ((int)Tab::getIdFromClassName('AdminJmsblogDashboard') <= 0)) {
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsblogDashboard";
                $tab->position = 2;
                $tab->icon = 'comment';
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Jms Blog';
                }
                $tab->id_parent = (int)Tab::getIdFromClassName('PRESTAWORK');
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                $tab_parent_id = (int)Tab::getIdFromClassName('AdminJmsblogDashboard');
                //add post menu
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsblogPost";
                $tab->position = 0;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Posts';
                }
                $tab->id_parent = $tab_parent_id;
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                //add categories menu
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsblogCategories";
                $tab->position = 1;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Categories';
                }
                $tab->id_parent = $tab_parent_id;
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                //add categories menu
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsblogComment";
                $tab->position = 2;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Comments';
                }
                $tab->id_parent = $tab_parent_id;
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                //add setting menu
                $tab = new Tab();
                $tab->active = 1;
                $tab->class_name = "AdminJmsblogSetting";
                $tab->position = 3;
                $tab->name = array();
                foreach (Language::getLanguages(true) as $lang) {
                    $tab->name[$lang['id_lang']] = 'Setting';
                }
                $tab->id_parent = $tab_parent_id;
                $tab->module = $this->name;
                if(!$tab->add()) return false;
                $this->addMeta('module-jmsblog-latest', 'Jmsblog', 'jmsblog');
                $this->addMeta('module-jmsblog-category', 'Jmsblog Category', 'jmsblog-category');
                $this->addMeta('module-jmsblog-post', 'Jmsblog Post', 'jmsblog-post');
                $this->addMeta('module-jmsblog-tag', 'Jmsblog Tag', 'jmsblog-tag');
                $this->addMeta('module-jmsblog-archive', 'Jmsblog Archive', 'jmsblog-archive');
                $this->addMeta('module-jmsblog-categories', 'Jmsblog Categories', 'jmsblog-categories');

            }
            return $res;
        }
        return false;
    }
    public function uninstall()
    {
        /* Deletes Module */
        if (parent::uninstall()) {
            $res = true;
            $sql = array();
            include(dirname(__FILE__).'/install/uninstall.php');
            foreach ($sql as $s) {
                Db::getInstance()->execute($s);
            }
            $res &= Configuration::deleteByName('JMSBLOG_PAGE_SIDEBAR');
            $res &= Configuration::deleteByName('JMSBLOG_INTROTEXT_LIMIT');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_CATEGORY');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_VIEWS');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_COMMENTS');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_MEDIA');
            $res &= Configuration::deleteByName('JMSBLOG_IMAGE_WIDTH');
            $res &= Configuration::deleteByName('JMSBLOG_IMAGE_HEIGHT');
            $res &= Configuration::deleteByName('JMSBLOG_IMAGE_THUMB_WIDTH');
            $res &= Configuration::deleteByName('JMSBLOG_IMAGE_THUMB_HEIGHT');
            $res &= Configuration::deleteByName('JMSBLOG_COMMENT_ENABLE');
            $res &= Configuration::deleteByName('JMSBLOG_FACEBOOK_COMMENT');
            $res &= Configuration::deleteByName('JMSBLOG_ALLOW_GUEST_COMMENT');
            $res &= Configuration::deleteByName('JMSBLOG_COMMENT_DELAY');
            $res &= Configuration::deleteByName('JMSBLOG_AUTO_APPROVE_COMMENT');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_SOCIAL_SHARING');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_FACEBOOK');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_TWITTER');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_GOOGLEPLUS');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_LINKEDIN');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_PINTEREST');
            $res &= Configuration::deleteByName('JMSBLOG_SHOW_EMAIL');

            $id_tab = (int)Tab::getIdFromClassName('AdminJmsblogDashboard');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsblogPost');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsblogCategories');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsblogComment');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();
            $id_tab = (int)Tab::getIdFromClassName('AdminJmsblogSetting');
            $tab = new Tab($id_tab);
            $res &= $tab->delete();

            return $res;
        }
        return false;
    }

    private function addMeta($page, $title, $url_rewrite, $desc = '', $keywords = '')
    {
        $result = Db::getInstance()->getValue('SELECT * FROM '._DB_PREFIX_.'meta WHERE page="'.pSQL($page).'"');
        if ((int)$result > 0) {
            return true;
        }
        $_meta = new MetaCore();
        $_meta->page = $page;
        $_meta->configurable = 1;
        $langs = Language::getLanguages(false);
        foreach ($langs as $l) {
            $_meta->title[$l['id_lang']] = $title;
            $_meta->description[$l['id_lang']] = $desc;
            $_meta->keywords[$l['id_lang']] = $keywords;
            $_meta->url_rewrite[$l['id_lang']] = $url_rewrite;
        }
        return $_meta->add();
    }

    public static function getJmsBlogUrl()
    {
        $ssl_enable = Configuration::get('PS_SSL_ENABLED');
        $id_shop = (int)Context::getContext()->shop->id;
        //$rewrite_set = 1;
        $relative_protocol = false;
        $ssl = null;
        static $force_ssl = null;
        if ($ssl === null) {
            if ($force_ssl === null) {
                $force_ssl = (Configuration::get('PS_SSL_ENABLED') && Configuration::get('PS_SSL_ENABLED_EVERYWHERE'));
            }
            $ssl = $force_ssl;
        }
        if (1 && $id_shop !== null) {
            $shop = new Shop($id_shop);
        } else {
            $shop = Context::getContext()->shop;
        }
        if (!$relative_protocol) {
            $base = '//'.($ssl && $ssl_enable ? $shop->domain_ssl : $shop->domain);
        } else {
            $base = (($ssl && $ssl_enable) ? 'https://'.$shop->domain_ssl : 'http://'.$shop->domain);
        }
        return $base.$shop->getBaseURI();
    }

    public static function getPageLink($rewrite = 'jmsblog', $params = null, $id_lang = null)
    {
        $url = jmsblog::getJmsBlogUrl();
        $dispatcher = Dispatcher::getInstance();
        if ($params != null) {
            return $url.$dispatcher->createUrl($rewrite, $id_lang, $params);
        } else {
            return $url.$dispatcher->createUrl($rewrite);
        }
    }
    public function hookModuleRoutes($params)
    {
        $html = '';
        return array(
            'jmsblog-latest' => array(
                'controller' => 'latest',
                'rule' => 'jmsblog'.$html,
                'keywords' => array(
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'jmsblog'
                )
            ),
            'jmsblog-categories' => array(
                'controller' => 'categories',
                'rule' => 'jmsblog/categories'.$html,
                'keywords' => array(
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'jmsblog'
                )
            ),
            'jmsblog-post' => array(
                'controller' => 'post',
                'rule' => 'jmsblog/{category_slug}/{post_id}_{slug}'.$html,
                'keywords' => array(
                    'post_id' => array('regexp' => '[\d]+','param' => 'post_id'),
                    'category_slug' => array('regexp' => '[\w]+','param' => 'category_slug'),
                    'slug' =>   array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'jmsblog'
                )
            ),
            'jmsblog-category' => array(
                'controller' => 'category',
                'rule' => 'jmsblog/{category_id}_{slug}'.$html,
                'keywords' => array(
                    'category_id' => array('regexp' => '[\w]+','param' => 'category_id'),
                    'slug' =>   array('regexp' => '[_a-zA-Z0-9-\pL]*'),
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'jmsblog'
                )
            ),
            'jmsblog-archive' => array(
                'controller' => 'archive',
                'rule' => 'jmsblog/month/{archive}'.$html,
                'keywords' => array(
                    'archive' => array('regexp' => '[_a-zA-Z0-9-\pL]*','param' => 'archive')
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'jmsblog'
                )
            ),
            'jmsblog-tag' => array(
                'controller' => 'tag',
                'rule' => 'jmsblog/tag/{tag}'.$html,
                'keywords' => array(
                    'tag' => array('regexp' => '[\w]+','param' => 'tag')
                ),
                'params' => array(
                    'fc' => 'module',
                    'module' => 'jmsblog'
                )
            )
        );
    }
}
