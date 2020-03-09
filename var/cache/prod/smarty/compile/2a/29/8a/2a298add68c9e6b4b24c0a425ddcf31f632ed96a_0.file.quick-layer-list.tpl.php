<?php
/* Smarty version 3.1.33, created on 2020-03-09 01:59:56
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsslider\views\templates\hook\quick-layer-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e65a31c431b84_70986875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a298add68c9e6b4b24c0a425ddcf31f632ed96a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsslider\\views\\templates\\hook\\quick-layer-list.tpl',
      1 => 1563530018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e65a31c431b84_70986875 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="quick-layer-selector">
    <div class="row">
        <span class="layer-list">
            <span id="quick-list" class="quick-list item"><i class="material-icons">list</i></span>
            <input id="quick-title" type="text" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Layer Selected','d'=>'jmsslider'),$_smarty_tpl ) );?>
" class="item" disabled>
        </span>
        <div class="action">
            <span title="Edit" id="quick-edit" class="quick-edit"><i class="material-icons">mode_edit</i></span>
            <span title="Delete" id="quick-delete" class="quick-delete "><i class="material-icons">delete</i></span>
            <span title="Duplicate" id="quick-duplicate" class="quick-duplicate"><i class="icon-copy"></i></span>
            <span title="Show/Hide" id="quick-show" class="quick-show"><i class="material-icons">remove_red_eye</i></span>
        </div>
        <div class="confirm">
            <span id="quick-check"><i class="material-icons">check</i></span>
            <span id="quick-cancel"><i class="material-icons">close</i></span>
        </div>
    </div>
    <div class="layer-container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentSlide']->value->layers, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
        <div id="layer_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="layer row">
            <span class="layer-list">
                <span class="quick-list item"><i class="material-icons"><?php if ($_smarty_tpl->tpl_vars['layer']->value->data_type == 'text') {?>assignment<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value->data_type == 'image') {?>collections<?php } else { ?>video_librarys<?php }?></i></span>
                <input class="quick-tittle item" type="text" value="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_title;?>
" disabled>
            </span>
            <span class="quick-edit"><i class="material-icons">mode_edit</i></span>
            <span class="quick-delete"><i class="material-icons">delete</i></span>
            <span class="quick-duplicate"><i class="icon-copy"></i></span>
            <span class="quick-show"><i class="material-icons <?php if (!$_smarty_tpl->tpl_vars['layer']->value->desktop->data_show) {?>layer-hide<?php }?>">remove_red_eye</i></span>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="editor">
        <textarea id="text-editor"></textarea>
    </div>
</div>
<?php }
}
