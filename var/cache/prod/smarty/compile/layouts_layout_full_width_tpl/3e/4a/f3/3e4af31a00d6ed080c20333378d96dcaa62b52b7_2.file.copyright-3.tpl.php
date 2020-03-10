<?php
/* Smarty version 3.1.33, created on 2020-03-10 08:20:11
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\copyright-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e674dbb1fad18_82057045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e4af31a00d6ed080c20333378d96dcaa62b52b7' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\copyright-3.tpl',
      1 => 1583827206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e674dbb1fad18_82057045 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1589739505e674dbb1f3011_36519087', 'footer-copyright');
?>

<?php }
/* {block 'footer-copyright'} */
class Block_1589739505e674dbb1f3011_36519087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_1589739505e674dbb1f3011_36519087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
		<div class="container">
			<div class="row align-items-center">
				<?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) {?>
					<div class="layout-column col-12 col-sm-12 col-md-12 col-lg-6">
						<?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content'];?>

					</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_payment_image']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_payment_image']) {?>
					<div class="layout-column col-12 col-sm-12 col-md-12 col-lg-6 payment-img">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_payment_image'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payments','d'=>'Shop.jmstheme'),$_smarty_tpl ) );?>
"/>
					</div>
				<?php }?>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
