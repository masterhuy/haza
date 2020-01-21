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
include_once(_PS_MODULE_DIR_.'jmsblog/class/JmsBlogHelper.php');
class AdminJmsblogSettingController extends ModuleAdminController
{
    public function __construct()
    {
        $this->name = 'jmsblog';
        $this->tab = 'front_office_features';
        $this->bootstrap = true;
        $this->root_url = JmsBlogHelper::getUrl();
        $this->lang = true;
        $this->context = Context::getContext();
        $this->secure_key = Tools::encrypt($this->name);
        parent::__construct();
    }

    public function renderList()
    {
        $this->_html = '';
        /* Validate & process */
        if (Tools::isSubmit('submitSetting')) {
            if ($this->_postValidation()) {
                $this->_postProcess();
                $this->_html .= $this->renderSettingForm();
            } else {
                $this->_html .= $this->renderNavigation();
                $this->_html .= $this->renderSettingForm();
            }
        } else {
            $this->_html .= $this->renderSettingForm();
        }
        return $this->_html;
    }

    private function _postValidation()
    {
        $errors = array();

        /* Validation for configuration */
        if (Tools::isSubmit('submitSetting')) {
            if (!Validate::isInt(Tools::getValue('status_id_category'))) {
                $errors[] = $this->l('Invalid Category');
            }
        }

        /* Display errors if needed */
        if (count($errors)) {
            $this->_html .= Tools::displayError(implode('<br />', $errors));
            return false;
        }
        /* Returns if validation is ok */
        return true;
    }
    private function _postProcess()
    {
        if (Tools::isSubmit('submitSetting')) {

            $res = Configuration::updateValue('JMSBLOG_PAGE_SIDEBAR', Tools::getValue('JMSBLOG_PAGE_SIDEBAR'));
            $res &= Configuration::updateValue('JMSBLOG_INTROTEXT_LIMIT', (int)Tools::getValue('JMSBLOG_INTROTEXT_LIMIT'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_CATEGORY', Tools::getValue('JMSBLOG_SHOW_CATEGORY'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_VIEWS', Tools::getValue('JMSBLOG_SHOW_VIEWS'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_COMMENTS', Tools::getValue('JMSBLOG_SHOW_COMMENTS'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_MEDIA', Tools::getValue('JMSBLOG_SHOW_MEDIA'));

            $res &= Configuration::updateValue('JMSBLOG_IMAGE_WIDTH', (int)Tools::getValue('JMSBLOG_IMAGE_WIDTH'));
            $res &= Configuration::updateValue('JMSBLOG_IMAGE_HEIGHT', (int)Tools::getValue('JMSBLOG_IMAGE_HEIGHT'));
            $res &= Configuration::updateValue('JMSBLOG_IMAGE_THUMB_WIDTH', (int)Tools::getValue('JMSBLOG_IMAGE_THUMB_WIDTH'));
            $res &= Configuration::updateValue('JMSBLOG_IMAGE_THUMB_HEIGHT', (int)Tools::getValue('JMSBLOG_IMAGE_THUMB_HEIGHT'));

            $res &= Configuration::updateValue('JMSBLOG_COMMENT_ENABLE', Tools::getValue('JMSBLOG_COMMENT_ENABLE'));
            $res &= Configuration::updateValue('JMSBLOG_ALLOW_GUEST_COMMENT', Tools::getValue('JMSBLOG_ALLOW_GUEST_COMMENT'));
            $res &= Configuration::updateValue('JMSBLOG_FACEBOOK_COMMENT', Tools::getValue('JMSBLOG_FACEBOOK_COMMENT'));
            $res &= Configuration::updateValue('JMSBLOG_COMMENT_DELAY', (int)Tools::getValue('JMSBLOG_COMMENT_DELAY'));
            $res &= Configuration::updateValue('JMSBLOG_AUTO_APPROVE_COMMENT', Tools::getValue('JMSBLOG_AUTO_APPROVE_COMMENT'));

            $res &= Configuration::updateValue('JMSBLOG_SHOW_SOCIAL_SHARING', Tools::getValue('JMSBLOG_SHOW_SOCIAL_SHARING'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_FACEBOOK', Tools::getValue('JMSBLOG_SHOW_FACEBOOK'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_TWITTER', Tools::getValue('JMSBLOG_SHOW_TWITTER'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_GOOGLEPLUS', Tools::getValue('JMSBLOG_SHOW_GOOGLEPLUS'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_LINKEDIN', Tools::getValue('JMSBLOG_SHOW_LINKEDIN'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_PINTEREST', Tools::getValue('JMSBLOG_SHOW_PINTEREST'));
            $res &= Configuration::updateValue('JMSBLOG_SHOW_EMAIL', Tools::getValue('JMSBLOG_SHOW_EMAIL'));

            $res &= Configuration::updateValue('JBW_SB_ITEM_SHOW', (int)Tools::getValue('JBW_SB_ITEM_SHOW'));
            $res &= Configuration::updateValue('JBW_SB_SHOW_POPULAR', (int)Tools::getValue('JBW_SB_SHOW_POPULAR'));
            $res &= Configuration::updateValue('JBW_SB_SHOW_RECENT', (int)Tools::getValue('JBW_SB_SHOW_RECENT'));
            $res &= Configuration::updateValue('JBW_SB_SHOW_LATESTCOMMENT', (int)Tools::getValue('JBW_SB_SHOW_LATESTCOMMENT'));
            $res &= Configuration::updateValue('JBW_SB_COMMENT_LIMIT', (int)Tools::getValue('JBW_SB_COMMENT_LIMIT'));
            $res &= Configuration::updateValue('JBW_SB_SHOW_CATEGORYMENU', (int)Tools::getValue('JBW_SB_SHOW_CATEGORYMENU'));
            $res &= Configuration::updateValue('JBW_SB_SHOW_ARCHIVES', (int)Tools::getValue('JBW_SB_SHOW_ARCHIVES'));
        }

        if (!$res) {
            $this->_html .= Tools::displayError(implode('<br />', $this->l('An error occurred during the save process.')));
        } elseif (Tools::isSubmit('submitSetting')) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminJmsblogSetting', true).'&conf=4&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name);
        }
    }

    public function renderNavigation()
    {
        $html = '<div class="navigation">';
        $html .= '<a class="btn btn-default" href="'.AdminController::$currentIndex.
            '&configure='.$this->name.'
                &token='.Tools::getAdminTokenLite('AdminJmsblogSetting').'" title="Back to Dashboard"><i class="icon-home"></i>Back to Dashboard</a>';
        $html .= '</div>';
        return $html;
    }

    public function renderSettingForm()
    {
        $this->context->controller->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/admin_style.css', 'all');
        $general_fields = array(
            array(
                'type' => 'select',
                'label' => $this->l('Blog Page Sidebar'),
                'name' => 'JMSBLOG_PAGE_SIDEBAR',
                'options' => array(
                    'query' => array(
                      array(
                          'id_option' => 'left',
                          'name' => $this->l('Left'),
                      ),
                        array(
                            'id_option' => 'right',
                            'name' => $this->l('Right'),
                        ),
                        array(
                            'id_option' => 'no',
                            'name' => $this->l('No'),
                        )
                    ),
                    'id' => 'id_option',
                    'name' => 'name',
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Introtext Character Limit'),
                'name' => 'JMSBLOG_INTROTEXT_LIMIT',
                'desc' => $this->l('Number of character of introtext in post list page'),
                'class' => ' fixed-width-xl',
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Category'),
                'name' => 'JMSBLOG_SHOW_CATEGORY',
                'desc' => $this->l('Show/Hide Category Under Post Title In Post List or Post Detail page.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Views'),
                'name' => 'JMSBLOG_SHOW_VIEWS',
                'desc' => $this->l('Show/Hide Views Under Post Title In Post List or Post Detail page.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Comments'),
                'name' => 'JMSBLOG_SHOW_COMMENTS',
                'desc' => $this->l('Show/Hide Comments Under Post Title In Post List or Post Detail page.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Media'),
                'name' => 'JMSBLOG_SHOW_MEDIA',
                'desc' => $this->l('Show/Hide Image/video on Post List.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Show')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('Hide'))
                ),
                'tab' => 'general'
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Image Width'),
                'name' => 'JMSBLOG_IMAGE_WIDTH',
                'desc' => $this->l('Maximun Image Width'),
                'class' => ' fixed-width-xl',
                'tab' => 'image'
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Image Height'),
                'name' => 'JMSBLOG_IMAGE_HEIGHT',
                'desc' => $this->l('Maximun Image Height'),
                'class' => ' fixed-width-xl',
                'tab' => 'image'
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Thumb Width'),
                'name' => 'JMSBLOG_IMAGE_THUMB_WIDTH',
                'desc' => $this->l('Thumbnail Image Width'),
                'class' => ' fixed-width-xl',
                'tab' => 'image'
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Thumb Height'),
                'name' => 'JMSBLOG_IMAGE_THUMB_HEIGHT',
                'desc' => $this->l('Thumbnail Image Height'),
                'class' => ' fixed-width-xl',
                'tab' => 'image'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Comment Enable'),
                'name' => 'JMSBLOG_COMMENT_ENABLE',
                'desc' => $this->l('Enable/Disable Comment System.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'comment'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Facebook Comment'),
                'name' => 'JMSBLOG_FACEBOOK_COMMENT',
                'desc' => $this->l('If set to Yes, facebook comment will be used intead of default comment.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'comment'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Allow Guest Comments'),
                'name' => 'JMSBLOG_ALLOW_GUEST_COMMENT',
                'desc' => $this->l('If set to Yes, Guest can comment for posts.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'comment'
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Minimum time between 2 comments from the same user'),
                'name' => 'JMSBLOG_COMMENT_DELAY',
                'desc' => $this->l('Minimum time between 2 comments from the same User'),
                'class' => ' fixed-width-xl',
                'suffix' => 'seconds',
                'tab' => 'comment'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Auto Approve Comment'),
                'name' => 'JMSBLOG_AUTO_APPROVE_COMMENT',
                'desc' => $this->l('If set to Yes, comment after submit will auto set to public dont need approve from an employee.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'comment'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Social Sharing Enable'),
                'name' => 'JMSBLOG_SHOW_SOCIAL_SHARING',
                'desc' => $this->l('Social Sharing Enable/Disable in Post Detail Page.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'social'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Facebook Enable'),
                'name' => 'JMSBLOG_SHOW_FACEBOOK',
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'social'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Twitter Enable'),
                'name' => 'JMSBLOG_SHOW_TWITTER',
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'social'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Google Plus Enable'),
                'name' => 'JMSBLOG_SHOW_GOOGLEPLUS',
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'social'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Linkedin Enable'),
                'name' => 'JMSBLOG_SHOW_LINKEDIN',
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'social'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Pinterest Enable'),
                'name' => 'JMSBLOG_SHOW_PINTEREST',
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'social'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Email Enable'),
                'name' => 'JMSBLOG_SHOW_EMAIL',
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('Yes')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('No'))
                ),
                'tab' => 'social'
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Number of items show'),
                'name' => 'JBW_SB_ITEM_SHOW',
                'desc' => $this->l('Number of item(popular, recent post, latest comments) to show.'),
                'class' => 'fixed-width-xl',
                'tab' => 'sidebar'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Popular Post'),
                'name' => 'JBW_SB_SHOW_POPULAR',
                'desc' => $this->l('Show or Hide Popular Post.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('YES')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('NO'))
                ),
                'tab' => 'sidebar'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Recent Post'),
                'name' => 'JBW_SB_SHOW_RECENT',
                'desc' => $this->l('Show or Hide Recent Post.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('YES')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('NO'))
                ),
                'tab' => 'sidebar'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Latest Comment'),
                'name' => 'JBW_SB_SHOW_LATESTCOMMENT',
                'desc' => $this->l('Show or Hide Latest Comment.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('YES')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('NO'))
                ),
                'tab' => 'sidebar'
            ),
            array(
                'type' => 'text',
                'label' => $this->l('Comment character limit'),
                'name' => 'JBW_SB_COMMENT_LIMIT',
                'desc' => $this->l('Maximum number of comment character.'),
                'class' => 'fixed-width-xl',
                'tab' => 'sidebar'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Blog Category Menu'),
                'name' => 'JBW_SB_SHOW_CATEGORYMENU',
                'desc' => $this->l('Show or Hide Category Menu.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('YES')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('NO'))
                ),
                'tab' => 'sidebar'
            ),
            array(
                'type' => 'switch',
                'label' => $this->l('Show Archives'),
                'name' => 'JBW_SB_SHOW_ARCHIVES',
                'desc' => $this->l('Show or Hide Archives.'),
                'values'    => array(
                    array('id'    => 'active_on','value' => 1,'label' => $this->l('YES')),
                    array('id'    => 'active_off','value' => 0,'label' => $this->l('NO'))
                ),
                'tab' => 'sidebar'
            )
        );
        /* RENDER */
        $this->fields_options[0]['form'] = array(
            'tinymce' => true,
            'tabs' => array('general' => 'General', 'image' => 'Image', 'comment' => 'Comment', 'social' => 'Social Sharing', 'sidebar' => 'Sidebar Widget'),
            'legend' => array('title' => '<span class="label label-info">'.$this->l('Jms Blog Setting').'</span>','icon' => 'icon-cogs',),
            'input' => $general_fields,
            'submit' => array('title' => $this->l('Save'), 'class' => 'button btn btn-primary'),
        );
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->module = $this;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitSetting';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminJmsblogSetting', true).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->tpl_vars = array(
            'base_url' => $this->root_url,
            'fields_value' => JmsBlogHelper::getSettingFieldsValues(),
        );

        $helper->override_folder = '/';
        return $helper->generateForm($this->fields_options);
    }
}
