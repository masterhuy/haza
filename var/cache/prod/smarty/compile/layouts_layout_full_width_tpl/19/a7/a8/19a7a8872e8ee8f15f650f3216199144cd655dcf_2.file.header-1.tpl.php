<?php
/* Smarty version 3.1.33, created on 2020-02-14 04:05:03
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\headers\header-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e461c6f509be2_63993990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19a7a8872e8ee8f15f650f3216199144cd655dcf' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\headers\\header-1.tpl',
      1 => 1580792272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:ps_languageselector/ps_languageselector-dropdown.tpl' => 1,
    'module:ps_currencyselector/ps_currencyselector-dropdown.tpl' => 1,
    'file:_partials/headers/logo.tpl' => 1,
    'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl' => 1,
    'module:ps_customersignin/ps_customersignin-dropdown.tpl' => 1,
    'file:_partials/headers/wishlist.tpl' => 1,
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
    'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-fullscreen.tpl' => 1,
  ),
),false)) {
function content_5e461c6f509be2_63993990 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['jmsSetting']->value['header_topbar'] == 1)) {?>
<div id="header-topbar" class="<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['topbar_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['topbar_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-4 header-left">
                <?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['topbar_content'];?>

            </div>
            <div class="layout-column col-4 header-center text-center">Fast and free international shipping</div>
            <div class="layout-column col-4 header-right">
                <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_languageselector"));
$_block_repeat=true;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"ps_languageselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_subTemplateRender('module:ps_languageselector/ps_languageselector-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_block_repeat=false;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"ps_languageselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_currencyselector"));
$_block_repeat=true;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_currencyselector"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                    <?php $_smarty_tpl->_subTemplateRender('module:ps_currencyselector/ps_currencyselector-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php $_block_repeat=false;
echo $_block_plugin2->smartyWidgetBlock(array('name'=>"ps_currencyselector"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <div class="position-relative">
                    <a href="#">Help & FAQ’s</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<div id="header-top" class="header-top<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky'] == 1) {?> header-sticky<?php }
if (($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky'] == 1) && ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky_effect'] != '')) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky_effect'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="layout-column col-auto header-left">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column col-auto megamenu">
                <div id="hor-menu" class="<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['hormenu_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['hormenu_class'], ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['hormenu_align']) {?> align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['hormenu_align'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"jmsmegamenu",'hook'=>'HorMenu'),$_smarty_tpl ) );?>

                </div>
            </div>
            <div class="layout-column">
                <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['search']) {?>
                    <?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"jmsajaxsearch"));
$_block_repeat=true;
echo $_block_plugin3->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_subTemplateRender('module:jmsajaxsearch/views/templates/hook/jmsajaxsearch.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_block_repeat=false;
echo $_block_plugin3->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php }?>    
            </div>
            <div class="layout-column col-auto header-right">
                <div class="row">
                    <?php if (($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin'] == 1)) {?>
                        <?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_customersignin"));
$_block_repeat=true;
echo $_block_plugin4->smartyWidgetBlock(array('name'=>"ps_customersignin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:ps_customersignin/ps_customersignin-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin4->smartyWidgetBlock(array('name'=>"ps_customersignin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['jmsSetting']->value['wishlist'] == 1)) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/wishlist.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['jmsSetting']->value['cart'] == 1)) {?>
                        <?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin5->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php $_block_repeat=false;
echo $_block_plugin5->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['search'] && $_smarty_tpl->tpl_vars['jmsSetting']->value['search_box_type'] != 'dropdown') {?>
    <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"jmsajaxsearch"));
$_block_repeat=true;
echo $_block_plugin6->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender('module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-fullscreen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_block_repeat=false;
echo $_block_plugin6->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
