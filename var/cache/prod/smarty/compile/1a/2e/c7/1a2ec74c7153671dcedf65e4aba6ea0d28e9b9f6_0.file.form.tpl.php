<?php
/* Smarty version 3.1.33, created on 2020-03-23 08:27:43
  from 'D:\xamppp\htdocs\jms_haza\modules\jmspagebuilder\views\templates\admin\form\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7872ffa065c5_55251503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a2ec74c7153671dcedf65e4aba6ea0d28e9b9f6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\admin\\form\\helpers\\form\\form.tpl',
      1 => 1571036590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7872ffa065c5_55251503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5335178965e7872ff9912c1_96855841', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_5335178965e7872ff9912c1_96855841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_5335178965e7872ff9912c1_96855841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'skin') {?>
	<div class="col-lg-9">
		<a class="skin-box <?php if ($_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == 'default' || $_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == '') {?>active<?php }?>" title="Default">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_url'],'htmlall','UTF-8' ));?>
default.png" alt="Default" />
		</a>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['skins'], 'sk');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sk']->value) {
?>
			<a class="skin-box <?php ob_start();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));
$_prefixVariable1 = ob_get_clean();
if ($_smarty_tpl->tpl_vars['input']->value['jpb_skin'] == $_prefixVariable1) {?>active<?php }?>" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
" data-color="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
">
			<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['img_url'],'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
.png" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sk']->value,'htmlall','UTF-8' ));?>
" />
			</a>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<input type="hidden" name="JPB_SKIN" id="jmsskin" value="" />
		<?php echo '<script'; ?>
 type="text/javascript">
		jQuery(function ($) {
			"use strict";
			$(".skin-box").click(function() {
				var skin =  $(this).attr('data-color');
				$('#jmsskin').val(skin);
				$(".skin-box").removeClass('active');
				$(this).addClass('active');
			});
		});
		<?php echo '</script'; ?>
>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select-image') {?>
	<div class="col-lg-9">
			<select class="form-control fixed-width-xxl select-image <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['js'])) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['js'];?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['option']->value) {
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['input']->value['value'] == $_smarty_tpl->tpl_vars['option']->value['id']) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</option>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</select>
			<div id="jpb-preview-img">
			<?php if (isset($_smarty_tpl->tpl_vars['input']->value['value']) && $_smarty_tpl->tpl_vars['input']->value['value']) {?>
			<img id="preview-img" src="<?php echo $_smarty_tpl->tpl_vars['input']->value['img_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['input']->value['value'];?>
.jpg" />
			<?php }?>
		</div>
			<?php echo '<script'; ?>
 type="text/javascript">
			jQuery(function ($) {
				"use strict";
				$(".select-image").change(function() {
					var selected_value = $(this). children("option:selected").val();
					var new_url = '<?php echo $_smarty_tpl->tpl_vars['input']->value['img_url'];?>
' + '/' + selected_value + '.jpg';
					var img = $('<img id="preview-img">');
					img.attr('src', new_url);
					$('#jpb-preview-img').html('');
					img.appendTo('#jpb-preview-img');
				});
			});
			<?php echo '</script'; ?>
>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text-group') {?>
	<div class="col-lg-9">
		<div class="input-field input-group row">
				<input class="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['js'])) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['js'];?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['input']->value['value'][0];?>
" />
				<input class="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['js'])) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['js'];?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['input']->value['value'][1];?>
" />
				<input class="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['js'])) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['js'];?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['input']->value['value'][2];?>
" />
				<input class="" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]"<?php if (isset($_smarty_tpl->tpl_vars['input']->value['js'])) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['input']->value['js'];?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['input']->value['value'][3];?>
" />
				<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
				<span class="input-group-addon">
					<?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

				</span>
				<?php }?>
		</div>
		<div class="input-label row">
				<span>Top</span>
				<span>Right</span>
				<span>Left</span>
				<span>Bottom</span>
		</div>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch-label') {?>
	<div class="col-lg-9">
	<span class="switch prestashop-switch fixed-width-<?php echo $_smarty_tpl->tpl_vars['input']->value['width'];?>
">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['class']) && $_smarty_tpl->tpl_vars['input']->value['class']) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) || (isset($_smarty_tpl->tpl_vars['value']->value['disabled']) && $_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/>
		<label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo $_smarty_tpl->tpl_vars['value']->value['label'];
} else {
echo $_smarty_tpl->tpl_vars['value']->value['label'];
}?></label>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<a class="slide-button btn"></a>
	</span>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'fontpicker') {?>
	<div class="col-lg-9">
			<input class="font-picker" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>
" />
			<?php echo '<script'; ?>
>
					$(function(){
						//$('#font').fontselect();
						$('.font-picker').fontselect().change(function(){
		          var font = $(this).val().replace(/\+/g, ' ');
		          font = font.split(':');
		          $(this).attr('value', font[0]);
		        });
					});

			<?php echo '</script'; ?>
>
	</div>
	<?php }
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
