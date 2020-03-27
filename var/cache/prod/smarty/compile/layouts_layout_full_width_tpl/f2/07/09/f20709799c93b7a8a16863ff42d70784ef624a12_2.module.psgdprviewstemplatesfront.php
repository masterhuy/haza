<?php
/* Smarty version 3.1.33, created on 2020-03-27 04:58:55
  from 'module:psgdprviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d880f92a360_25544564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f20709799c93b7a8a16863ff42d70784ef624a12' => 
    array (
      0 => 'module:psgdprviewstemplatesfront',
      1 => 1576743786,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d880f92a360_25544564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14976110945e7d880f92a364_42106417', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2637855535e7d880f92a360_41839896', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_14976110945e7d880f92a364_42106417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_14976110945e7d880f92a364_42106417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_2637855535e7d880f92a360_41839896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_2637855535e7d880f92a360_41839896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <section class="page_content">
        <div class="col-xs-12 psgdprinfo17">
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Access to my data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h2>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'At any time, you have the right to retrieve the data you have provided to our site. Click on "Get my data" to automatically download a copy of your personal data on a pdf or csv file.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
.</p>
            <a id="exportDataToCsv" class="btn btn-primary psgdprgetdatabtn17" target="_blank" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_csv_controller']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GET MY DATA TO CSV','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
            <a id="exportDataToPdf" class="btn btn-primary psgdprgetdatabtn17" target="_blank" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_pdf_controller']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GET MY DATA TO PDF','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
        </div>
        <div class="col-xs-12 psgdprinfo17">
            <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rectification & Erasure requests','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h2>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have the right to modify all the personal information found in the "My Account" page. For any other request you might have regarding the rectification and/or erasure of your personal data, please contact us through our','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_contactUrl']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'contact page','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>. <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We will review your request and reply as soon as possible.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
.</p>
        </div>
    </section>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
    var psgdpr_front_controller = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_front_controller']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var psgdpr_id_customer = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_front_controller']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var psgdpr_ps_version = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_ps_version']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'page_content'} */
}
