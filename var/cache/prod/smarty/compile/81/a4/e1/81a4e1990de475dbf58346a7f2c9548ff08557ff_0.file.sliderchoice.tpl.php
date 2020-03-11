<?php
/* Smarty version 3.1.33, created on 2020-03-11 08:00:10
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsslider\views\templates\hook\sliderchoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e689a8a3318c6_17844691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a4e1990de475dbf58346a7f2c9548ff08557ff' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsslider\\views\\templates\\hook\\sliderchoice.tpl',
      1 => 1563530016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./display_row.tpl' => 1,
  ),
),false)) {
function content_5e689a8a3318c6_17844691 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="defaultForm form-horizontal">
    <input type="hidden" name="chooseSlider" value="1">
    <input type="hidden" name="site_url" id="site_url" value="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
" />
    <div class="panel" id="fieldset_0">
        <div class="panel-heading">
            <i class="icon-cogs"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display','d'=>'jmsslider'),$_smarty_tpl ) );?>

        </div>
        <div class="form-wrapper">
             <div class="form-group">
                <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Slider','d'=>'jmsslider'),$_smarty_tpl ) );?>
</label>

                <div class="col-lg-9">
                    <select data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select Sliders','d'=>'jmsslider'),$_smarty_tpl ) );?>
" multiple class="chosen-select" name="select-slider" id="select-slider">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['slider']->value->title;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <a class="btn btn-default addDisplay">
                        <i class="icon-plus"></i>
                        Add
                    </a>
                    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select sliders to display in front store.','d'=>'jmsslider'),$_smarty_tpl ) );?>
</p>
                </div>

            </div>
        </div>
        <div class="displaylist" style="width : 60%; margin: auto">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['displays']->value, 'display');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['display']->value) {
?>
            <?php $_smarty_tpl->_subTemplateRender('file:./display_row.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div><?php }
}
