<?php
/* Smarty version 3.1.33, created on 2020-01-21 10:28:55
  from 'module:pscurrencyselectorpscurre' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e26d2678aaa60_70664508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eefc2ea735fa48d5e06513ebfda709a2f2686b5a' => 
    array (
      0 => 'module:pscurrencyselectorpscurre',
      1 => 1579592642,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e26d2678aaa60_70664508 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xamppp\htdocs\jms_haza/themes/jms_haza/modules/ps_currencyselector/ps_currencyselector-dropdown.tpl --><div id="_desktop_currency_selector" class="btn-group compact-hidden currency-info">
   	<a href="#" class="title btn-xs" data-toggle="dropdown">
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
 
	</a>
	<div class="dropdown-menu">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
?>
				<li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
					<a title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="collapse-item">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>

					</a>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
</div>


<!-- end D:\xamppp\htdocs\jms_haza/themes/jms_haza/modules/ps_currencyselector/ps_currencyselector-dropdown.tpl --><?php }
}
