<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:31
  from 'module:jmsajaxsearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9b2761c7_60038939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4f878bb3db75158b90416b7b3dd1c45327b30b9' => 
    array (
      0 => 'module:jmsajaxsearchviewstemplat',
      1 => 1575268900,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea2c9b2761c7_60038939 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="btn-group jms_ajax_search col-auto" id="jms_ajax_search">
  <?php $_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon'],"_"));?>
  <?php if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon_thickness']) {?>
    <?php $_smarty_tpl->_assignInScope('search_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
    <?php $_smarty_tpl->_assignInScope('search_icon', ($_smarty_tpl->tpl_vars['search_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon_thickness']));?>
  <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('search_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon']);?>
  <?php }?>
	<a href="#" id="btn-search" class="btn-search btn-search-full" data-toggle="dropdown"><i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i></a>
</div>
<?php }
}