<?php
/* Smarty version 3.1.33, created on 2020-03-18 03:36:29
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsslider\views\templates\hook\layerconfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e71973d68ce86_39487819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0927375c3a734b46af687c1722f7c9e0d8eba4a3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsslider\\views\\templates\\hook\\layerconfig.tpl',
      1 => 1563530022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e71973d68ce86_39487819 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="form_layer_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="form-layer panel-bodyclearfix" style="display:none">
    <input type="hidden" name="layer_ids[]" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" />
    <input type="hidden" name="data_type_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_type;?>
">
    <input type="hidden" name="data_show_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_show;?>
">
    <input type="hidden" name="data_mshow_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile->data_show;?>
">
    <input type="hidden" name="data_m2show_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile2->data_show;?>
">
    <input type="hidden" name="data_tshow_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->tablet->data_show;?>
">
    <div class="area-displgontay form-horizontal">
        <div class="layerconfig layer-col">
            <div class="inner">
                <div class="tab">
                    <button type="button" class="tablinks defaultOpen" onclick="openCity(this, 'tab_setting_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layer Setting','d'=>'jmsslider'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="tablinks tab-desktop" onclick="openCity(this, 'tab_style_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Style','d'=>'jmsslider'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="tablinks tab-desktop" onclick="openCity(this, 'tab_position_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','d'=>'jmsslider'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="tablinks" onclick="openCity(this, 'tab_animation_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Animation','d'=>'jmsslider'),$_smarty_tpl ) );?>
</button>
                    <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_type == 'video') {?>
                    <button type="button" class="tablinks video-settings" onclick="openCity(this, 'tab_video_set_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Setting','d'=>'jmsslider'),$_smarty_tpl ) );?>
</button>
                    <?php }?>
                    <button type="button" class="tablinks tab-mobile" onclick="openCity(this, 'tab_style_mobile_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Style Mobile (< 480)','d'=>'jmsslider'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="tablinks tab-mobile2" onclick="openCity(this, 'tab_style_mobile2_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Style Mobile (< 768)','d'=>'jmsslider'),$_smarty_tpl ) );?>
</button>
                    <button type="button" class="tablinks tab-tablet" onclick="openCity(this, 'tab_style_tablet_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
')"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Style Tablet (< 1200)','d'=>'jmsslider'),$_smarty_tpl ) );?>
</button>
                </div>
                <div id="tab_setting_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tabcontent">
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-3">
                                <span title="" data-html="true" data-toggle="tooltip" class="label-tooltip" data-original-title="Title of slide not show front end"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-9">
                                <input type="text"  name="data_title_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_title;?>
">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Class suffix','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
                            <div class="col-lg-9">
                                <input type="text" name="data_class_suffix_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_class_suffix;?>
">
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layer fixed','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
                            <div class="col-lg-4">
                                <span class="switch prestashop-switch fixed-width-lg">
                                    <input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_fixed == '1') {?>checked="checked"<?php }?> value="1" id="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_on" name="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                    <label for="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_on">Yes</label>
                                    <input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_fixed == '0') {?>checked="checked"<?php }?> value="0" id="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_off" name="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                    <label for="data_fixed_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_off">No</label>
                                    <a class="slide-button btn"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="display:none">
                        <div class="form-group col-lg-9">
                            <label class="control-label col-lg-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
                            <div class="col-lg-9">
                                <textarea name="data_html_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" id="data_html_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-html" cols="70" rows="2"><?php echo $_smarty_tpl->tpl_vars['layer']->value->data_html;?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_style_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tabcontent">
                    <div class="row" style="display:flex">
                        <div class="form-group col-lg-2">
                            <span data-original-title="Color" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">colorize</i></span>
                            <div class="col-lg-8">
                                <input type="color"  class="data-color btn color mColorPickerInput" name="data_color_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" id="data_color_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_color;?>
" style="background-color: <?php echo $_smarty_tpl->tpl_vars['layer']->value->data_color;?>
;">
                            </div>
                        </div>
                        <div class="form-group col-lg-2" style="flex:1">
                            <span data-original-title="Font size" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_size</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_font_size_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" name="data_font_size_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_font_size;?>
" class="data-font-size">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-2" style="flex:1">
                            <span data-original-title="Line height" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_line_spacing</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_line_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" name="data_line_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_line_height;?>
" class="data-line-height">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-2" style="flex:1">
                            <span data-original-title="Font Style" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">line_weight</i></span>
                            <div class="col-lg-8">
                                <select   class="data-style" name="data_style_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" id="data_style_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                    <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->desktop->data_style == 'normal') {?>selected<?php }?> value="normal">Normal</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->desktop->data_style == 'italic') {?>selected<?php }?> value="italic">Italic</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-2" style="flex:1">
                            <span data-original-title="Font weight" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_size</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_font_weight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" name="data_font_weight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_font_weight;?>
" class="data-font-weight">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab_position_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tabcontent">
                    <div class="row">
                        <div class="form-group col-lg-3" style="display:none">
                            <span data-original-title="Typing 'full' to full width, 'half' to a half width and 'quarter' to a quarter width" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">settings_ethernet</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_width_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-width" name="data_width_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_width;?>
"
                                    title="Typing 'full' to full width, 'half' to a half width and 'quarter' to a quarter width ">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3" style="display:none">
                            <span data-original-title="Typing 'full' to full height, 'half' to a half height and 'quarter' to a quarter height" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons rotate90">settings_ethernet</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-height" name="data_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_height;?>
" title="Typing 'full' to full height, 'half' to a half height and 'quarter' to a quarter height">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data X','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_x_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-x" name="data_x_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_x;?>
" title="Typing 'center' to center">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data Y','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_y_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-y" name="data_y_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_y;?>
" title="Typing 'center' to center">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_animation_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tabcontent">
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <span data-original-title="Start moving in" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">schedule</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                <input type="text" id="data_delay" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_delay;?>
" name="data_delay_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                    <span class="input-group-addon">ms</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Stop moving in" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">hourglass_empty</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                <input type="text" id="data_time" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_time;?>
" name="data_time_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                    <span class="input-group-addon">ms</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Transition in" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">directions_walk</i></span>
                            <div class="col-lg-8">
                                <select name="data_in_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" id="data_in">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transitions']->value, 'trans');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['trans']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_in == $_smarty_tpl->tpl_vars['trans']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['trans']->value['name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                           <span data-original-title="Transition out" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons flip">directions_walk</i></span>
                            <div class="col-lg-8">
                                <select name="data_out_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" id="data_out">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transitions']->value, 'trans');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['trans']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_out == $_smarty_tpl->tpl_vars['trans']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['trans']->value['id'];?>
">
                                            <?php echo $_smarty_tpl->tpl_vars['trans']->value['name'];?>

                                        </option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <span data-original-title="Ease in" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons flip">navigate_before</i></span>
                            <div class="col-lg-8">
                                <select name="data_ease_in_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" id="data_ease_in">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eases']->value, 'ease');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ease']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_ease_in == $_smarty_tpl->tpl_vars['ease']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['ease']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ease']->value['name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Ease out" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons flip">navigate_next</i></span>
                            <div class="col-lg-8">
                                <select name="data_ease_out_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" id="data_ease_out">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eases']->value, 'ease');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ease']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_ease_out == $_smarty_tpl->tpl_vars['ease']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['ease']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['ease']->value['name'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Transform in" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">transform</i></span>
                            <div class="col-lg-8">
                                <select name="data_transform_in_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" data-id="data_transform_in">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transforms']->value, 'transform');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['transform']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_transform_in == $_smarty_tpl->tpl_vars['transform']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['transform']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['transform']->value['id'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Transform out" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons flip">transform</i></span>
                            <div class="col-lg-8">
                                <select name="data_transform_out_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" data-id="data_transform_out">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['transforms']->value, 'transform');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['transform']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_transform_out == $_smarty_tpl->tpl_vars['transform']->value['id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['transform']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['transform']->value['id'];?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_type == 'video') {?>
                <div id="tab_video_set_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tabcontent">
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Video Url" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Url','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-10">
                                <textarea name="data_video_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" id="data_video_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-video" cols="30" rows="3"><?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video;?>
</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4">
                        <label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Autoplay','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
                            <span class="switch prestashop-switch col-lg-3">
                                <input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_autoplay == 1) {?>checked="checked"<?php }?> value="1" id="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_on" name="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                <label for="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_on">Yes</label>
                                <input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_autoplay == 0) {?>checked="checked"<?php }?> value="0" id="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_off" name="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                <label for="data_video_autoplay_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_off">No</label>
                                <a class="slide-button btn"></a>
                            </span>
                        </div>
                        <div class="col-lg-4">
                            <label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Controls','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
                            <span class="switch prestashop-switch col-lg-3">
                                <input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_controls == 1) {?>checked="checked"<?php }?> value="1" id="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_on" name="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                <label for="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_on">Yes</label>
                                <input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_controls == 0) {?>checked="checked"<?php }?> value="0" id="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_off" name="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                <label for="data_video_controls_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_off">No</label>
                                <a class="slide-button btn"></a>
                            </span>
                        </div>
                        <div class="col-lg-4">
                            <label class="control-label col-lg-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Loop','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
                            <span class="switch prestashop-switch col-lg-3">
                                <input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_loop == 1) {?>checked="checked"<?php }?> value="1" id="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_on" name="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                <label for="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_on">Yes</label>
                                <input type="radio" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_loop == 0) {?>checked="checked"<?php }?> value="0" id="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_off" name="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                <label for="data_video_loop_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
_off">No</label>
                                <a class="slide-button btn"></a>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10">
                            <input type="checkbox" <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_bg == 1) {?>checked<?php }?> value="1" id="data_video_bg_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data_video_bg" name="data_video_bg_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                            <label for="data_video_bg_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set this video for slide background','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
                        </div>
                    </div>
                </div>
                <?php }?>
                <div id="tab_style_mobile_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tabcontent">
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font size" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_size</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" name="data_mfont_size_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile->data_font_size;?>
" class="data-font-size">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Line height" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_line_spacing</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" name="data_mline_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile->data_line_height;?>
" class="data-line-height">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font Style" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">line_weight</i></span>
                            <div class="col-lg-8">
                                <select id="data_mstyle_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-style" name="data_mstyle_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                    <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->mobile->data_style == 'normal') {?>selected<?php }?> value="normal">Normal</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->mobile->data_style == 'italic') {?>selected<?php }?> value="italic">Italic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data X','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="data-x" name="data_mx_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile->data_x;?>
" title="Typing 'center' to center">
                                    <span class="input-group-addon">pixel</span>
                                    <input type="hidden" id="data_width_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-width" name="data_mwidth_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile->data_width;?>
">
                                    <input type="hidden" id="data_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-height" name="data_mheight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile->data_height;?>
">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data Y','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="data-y" name="data_my_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile->data_y;?>
" title="Typing 'center' to center">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font weight" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_size</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_mfont_weight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" name="data_mfont_weight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile->data_font_weight;?>
" class="data-font-weight">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="tab_style_mobile2_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tabcontent">
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font size" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_size</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" name="data_m2font_size_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile2->data_font_size;?>
" class="data-font-size">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Line height" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_line_spacing</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" name="data_m2line_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile2->data_line_height;?>
" class="data-line-height">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font Style" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">line_weight</i></span>
                            <div class="col-lg-8">
                                <select id="data_m2style_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-style" name="data_m2style_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                    <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_style == 'normal') {?>selected<?php }?> value="normal">Normal</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_style == 'italic') {?>selected<?php }?> value="italic">Italic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data X','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="data-x" name="data_m2x_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile2->data_x;?>
" title="Typing 'center' to center">
                                    <span class="input-group-addon">pixel</span>
                                    <input type="hidden" id="data_width_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-width" name="data_m2width_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile2->data_width;?>
">
                                    <input type="hidden" id="data_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-height" name="data_m2height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile2->data_height;?>
">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data Y','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="data-y" name="data_m2y_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile2->data_y;?>
" title="Typing 'center' to center">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font weight" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_size</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_m2font_weight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" name="data_m2font_weight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->mobile2->data_font_weight;?>
" class="data-font-weight">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab_style_tablet_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tabcontent">
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font size" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_size</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" name="data_tfont_size_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->tablet->data_font_size;?>
" class="data-font-size">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Line height" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_line_spacing</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" name="data_tline_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->tablet->data_line_height;?>
" class="data-line-height">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font Style" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">line_weight</i></span>
                            <div class="col-lg-8">
                                <select id="data_tstyle_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-style" name="data_tstyle_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
">
                                    <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->tablet->data_style == 'normal') {?>selected<?php }?> value="normal">Normal</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['layer']->value->tablet->data_style == 'italic') {?>selected<?php }?> value="italic">Italic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data X','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="data-x" name="data_tx_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->tablet->data_x;?>
" title="Typing 'center' to center">
                                    <span class="input-group-addon">pixel</span>
                                    <input type="hidden" id="data_width_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-width" name="data_twidth_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->tablet->data_width;?>
">
                                    <input type="hidden" id="data_height_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="data-height" name="data_theight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->tablet->data_height;?>
">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <label class="control-label col-lg-2">
                            <span data-original-title="Typing 'center' to center" class="label-tooltip" data-toggle="tooltip" data-html="true" title=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data Y','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</span>
                            </label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="data-y" name="data_ty_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->tablet->data_y;?>
" title="Typing 'center' to center">
                                    <span class="input-group-addon">pixel</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <span data-original-title="Font weight" class="label-tooltip" data-toggle="tooltip" data-html="true" ><i class="material-icons">format_size</i></span>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" id="data_tfont_weight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" name="data_tfont_weight_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->tablet->data_font_weight;?>
" class="data-font-weight">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
