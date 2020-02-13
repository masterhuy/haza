<?php
/* Smarty version 3.1.33, created on 2020-02-13 09:48:30
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\headers\header-7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e451b6e7bc821_79599061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b10f0e93e2aaa61880415d90984fa66369d980c7' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\headers\\header-7.tpl',
      1 => 1581579142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl' => 1,
    'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-fullscreen.tpl' => 1,
  ),
),false)) {
function content_5e451b6e7bc821_79599061 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="header-top" class="header-top<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky'] == 1) {?> header-sticky<?php }
if (($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky'] == 1) && ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky_effect'] != '')) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky_effect'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-auto logo">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/logo-2.png" />
                </a>
            </div>
            <div class="layout-column">
                <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['search']) {?>
                    <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"jmsajaxsearch"));
$_block_repeat=true;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>
            </div>
            <div class="layout-column col-auto vermenu">
                <a href="#" data-toggle="modal" class="vermenu-btn align-items-center" data-toggle="modal" data-target="#ver-menu">
                    <?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['vermenu_button_text'];?>

                </a>
                <div id="ver-menu" class="navbar modal<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['vermenu_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['vermenu_class'], ENT_QUOTES, 'UTF-8');
}?>">
                    <div class="ver-content">
                        <button type="button" class="close-vermenu" data-dismiss="modal"></button>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"jmsmegamenu",'hook'=>'VerMenu'),$_smarty_tpl ) );?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['search'] && $_smarty_tpl->tpl_vars['jmsSetting']->value['search_box_type'] != 'dropdown') {?>
    <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"jmsajaxsearch"));
$_block_repeat=true;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender('module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-fullscreen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_block_repeat=false;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
