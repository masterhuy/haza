<?php
/* Smarty version 3.1.33, created on 2020-03-13 10:02:32
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\copyright-4.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6b5a38152284_43141297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faee02890751ea57d09f79b88f34fefbb09712eb' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\copyright-4.tpl',
      1 => 1583892745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5e6b5a38152284_43141297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10223525545e6b5a38142887_12517676', 'footer-copyright');
?>

<?php }
/* {block 'footer-copyright'} */
class Block_10223525545e6b5a38142887_12517676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_10223525545e6b5a38142887_12517676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
		<div class="container">
			<div class="row align-items-center">
				<?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) {?>
					<div class="layout-column col-12 text-center">
						<?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content'];?>

					</div>
				<?php }?>
			</div>
            <div class="row align-items-center">
				<?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) {?>
					<div class="layout-column col-12 col-sm-12 col-md-12 col-lg-6 socials">
                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
