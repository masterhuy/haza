<?php
/* Smarty version 3.1.33, created on 2020-03-27 04:58:04
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\psgdpr\views\templates\front\customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d87dc4dac07_57680528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e450e387894a0419b8e0fb08469af927b4acafbc' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\psgdpr\\views\\templates\\front\\customerAccount.tpl',
      1 => 1583460502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d87dc4dac07_57680528 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a id="identity-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('psgdpr','gdpr'), ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="fal fa-user"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
