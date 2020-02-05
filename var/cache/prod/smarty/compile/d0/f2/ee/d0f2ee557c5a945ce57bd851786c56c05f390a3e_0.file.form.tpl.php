<?php
/* Smarty version 3.1.33, created on 2020-02-05 06:51:17
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsbrands\views\templates\admin\_configure\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3a65e5098768_50540880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0f2ee557c5a945ce57bd851786c56c05f390a3e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsbrands\\views\\templates\\admin\\_configure\\helpers\\form\\form.tpl',
      1 => 1569916430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3a65e5098768_50540880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12810401765e3a65e5071664_38298177', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_12810401765e3a65e5071664_38298177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_12810401765e3a65e5071664_38298177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file_lang') {?>
		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
				<?php }?>
					<div class="col-lg-6">
						<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'image' && isset($_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'])) {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;
echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" class="img-thumbnail" />
						<input type="hidden" name="image_old_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['images'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" />
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'simage' && $_smarty_tpl->tpl_vars['fields']->value[0]['form']['simages'][$_smarty_tpl->tpl_vars['language']->value['id_lang']]) {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;
echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['simages'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" class="img-thumbnail" />
						<input type="hidden" name="simage_old_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[0]['form']['simages'][$_smarty_tpl->tpl_vars['language']->value['id_lang']];?>
" />
						<?php }?>
						
						<input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" type="file" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="hide" />
						<div class="dummyfile input-group">
							<span class="input-group-addon"><i class="icon-file"></i></span>
							<input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-name" type="text" class="disabled" name="filename" readonly />
							<span class="input-group-btn">
								<button id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
									<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','d'=>'.Modules.JmsBrands'),$_smarty_tpl ) );?>

								</button>
							</span>
						</div>
					</div>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					<div class="col-lg-2">
						<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
							<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
							<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</a></li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
					</div>
				<?php }?>
				<?php echo '<script'; ?>
>
				$(document).ready(function(){
					$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-selectbutton').click(function(e){
						$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').trigger('click');
					});
					$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
').change(function(e){
						var val = $(this).val();
						var file = val.split(/[\\/]/);
						$('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
-name').val(file[file.length-1]);
					});
				});
			<?php echo '</script'; ?>
>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
