<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:31
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/headers/header-mobile-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9b2222c8_89897048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '668370476289381cb2a9a3baf3abd151f60c4a05' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/headers/header-mobile-4.tpl',
      1 => 1575627523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/logo.tpl' => 1,
    'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-button.tpl' => 1,
    'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-dropdown.tpl' => 1,
    'module:ps_customersignin/ps_customersignin-dropdown.tpl' => 1,
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
    'file:_partials/headers/mobile-menu.tpl' => 1,
    'module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-fullscreen.tpl' => 1,
  ),
),false)) {
function content_5dea2c9b2222c8_89897048 (Smarty_Internal_Template $_smarty_tpl) {
?> <div id="header-mobile-top" class="header-mobile-top<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_sticky'] == 1) {?> header-sticky<?php }
if (($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_sticky'] == 1) && ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky_effect'] != '')) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_sticky_effect'], ENT_QUOTES, 'UTF-8');
}?>">
 		<div class="container">
 				<div class="row align-items-center no-margin">
 						<div class="layout-column header-left">
              <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 						</div>
 						<div class="layout-column col-auto header-right">
              <div class="row">
                 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['search_box_type'] != 'dropdown') {?>
                  <?php $_block_plugin6 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin6, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"jmsajaxsearch"));
$_block_repeat=true;
echo $_block_plugin6->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                      <?php $_smarty_tpl->_subTemplateRender('module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-button.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php $_block_repeat=false;
echo $_block_plugin6->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                  <?php } else { ?>
                  <?php $_block_plugin7 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin7, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"jmsajaxsearch"));
$_block_repeat=true;
echo $_block_plugin7->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                      <?php $_smarty_tpl->_subTemplateRender('module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php $_block_repeat=false;
echo $_block_plugin7->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                   <?php }?>
                  <?php if (($_smarty_tpl->tpl_vars['jmsSetting']->value['customersignin'] == 1)) {?>
                  <?php $_block_plugin8 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin8, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_customersignin"));
$_block_repeat=true;
echo $_block_plugin8->smartyWidgetBlock(array('name'=>"ps_customersignin"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                      <?php $_smarty_tpl->_subTemplateRender('module:ps_customersignin/ps_customersignin-dropdown.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php $_block_repeat=false;
echo $_block_plugin8->smartyWidgetBlock(array('name'=>"ps_customersignin"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                  <?php }?>
                  <?php if (($_smarty_tpl->tpl_vars['jmsSetting']->value['cart'] == 1)) {?>
                  <?php $_block_plugin9 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin9, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_shoppingcart"));
$_block_repeat=true;
echo $_block_plugin9->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                      <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  <?php $_block_repeat=false;
echo $_block_plugin9->smartyWidgetBlock(array('name'=>"ps_shoppingcart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                  <?php }?>
                  <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/mobile-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
 						</div>
 				</div>
 		</div>
 </div>
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['search_box_type'] != 'dropdown') {?>
 <?php $_block_plugin10 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin10, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"jmsajaxsearch"));
$_block_repeat=true;
echo $_block_plugin10->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
     <?php $_smarty_tpl->_subTemplateRender('module:jmsajaxsearch/views/templates/hook/jmsajaxsearch-fullscreen.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php $_block_repeat=false;
echo $_block_plugin10->smartyWidgetBlock(array('name'=>"jmsajaxsearch"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 <?php }
}
}
