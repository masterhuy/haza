<?php
/* Smarty version 3.1.33, created on 2020-02-04 03:44:59
  from 'D:\xamppp\htdocs\jms_haza\modules\jmspagebuilder\views\templates\hook\addonalert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e38e8bb4a48c5_77345951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '293d073692b862c9011f026010b4697b2fb094e3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addonalert.tpl',
      1 => 1578556276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e38e8bb4a48c5_77345951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['alert_type']->value;
if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['box_class']->value;
}?>">
  <?php echo htmlspecialchars(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['alert_message']->value,"/(<p>|<p [^>]*>|<\\/p>)/",''), ENT_QUOTES, 'UTF-8');?>

  <?php if ($_smarty_tpl->tpl_vars['show_close_btn']->value) {?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <?php }?>
</div>
<?php }
}
