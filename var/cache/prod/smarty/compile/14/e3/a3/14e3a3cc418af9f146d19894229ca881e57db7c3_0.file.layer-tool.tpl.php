<?php
/* Smarty version 3.1.33, created on 2020-03-11 08:44:49
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsslider\views\templates\hook\layer-tool.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e68a501d44b44_59402995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e3a3cc418af9f146d19894229ca881e57db7c3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsslider\\views\\templates\\hook\\layer-tool.tpl',
      1 => 1563530024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./quick-layer-list.tpl' => 1,
  ),
),false)) {
function content_5e68a501d44b44_59402995 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="layer-tools" class="layer-tools">
    <div id="add-layer-wrap">
        <a class="btn btn-default" id="add-layer">
            <i class="material-icons">add</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Layer','d'=>'jmsslider'),$_smarty_tpl ) );?>

        </a>
        <ul class="add-layer-list">
            <li><a id="add-text"><i class="material-icons">assignment</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text','d'=>'jmsslider'),$_smarty_tpl ) );?>
</a></li>
            <li><a id="add-image"><i class="material-icons">collections</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','d'=>'jmsslider'),$_smarty_tpl ) );?>
</a></li>
            <li><a id="add-video"><i class="material-icons">video_librarys</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video','d'=>'jmsslider'),$_smarty_tpl ) );?>
</a></li>
            <!-- <li><a id="add-link"><i class="material-icons">add</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Link','d'=>'jmsslider'),$_smarty_tpl ) );?>
</a></li> -->
        </ul>
    </div>
        <?php $_smarty_tpl->_subTemplateRender('file:./quick-layer-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <a class="btn btn-default pull-right mobile-style"><i class="material-icons" style="transform: rotateZ(90deg)">
tablet</i></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Style 2','d'=>'jmsslider'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default pull-right mobile2-style"><i class="material-icons" style="transform: rotateZ(90deg)">
tablet</i></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Style','d'=>'jmsslider'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default pull-right tablet-style"><i class="material-icons">tablet_mac</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tablet Style','d'=>'jmsslider'),$_smarty_tpl ) );?>
</a>
    <a class="btn btn-default pull-right desktop-style btn-active"><i class="material-icons">desktop_windows</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Desktop Style','d'=>'jmsslider'),$_smarty_tpl ) );?>
</a>
</div><?php }
}
