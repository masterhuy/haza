<?php
/* Smarty version 3.1.33, created on 2020-03-20 03:30:35
  from 'D:\xamppp\htdocs\jms_haza\modules\jmspagebuilder\views\templates\hook\pagebuilder_cmsbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7438db026082_51237237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfffbdf4a219d324045b52fc44ce0b756dceebeb' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\pagebuilder_cmsbutton.tpl',
      1 => 1575368614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7438db026082_51237237 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/template" id="tmpl-btn-add-page-cms">
    <div class="form-group row">
        <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pagebuilder - Add Page to Content','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</label>
        <div class="col-auto">
            <select name="page_id" id="page_id" class="custom-select fixed-">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['page']->value) {
?>
              <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['id_page'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['title'],'html','UTF-8' ));?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="col-auto">
          <a class="btn btn-primary add-page"><i class="icon-external-link"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'jmspagebuilder'),$_smarty_tpl ) );?>
</a>
        </div>
    </div>
<?php echo '</script'; ?>
>
<?php }
}
