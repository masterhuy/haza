<?php
/* Smarty version 3.1.33, created on 2020-03-06 09:09:51
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\headers\mobile-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e62135f3755b7_09102508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d4fe3757228861393b5963b84d5fdf56598d9af' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\headers\\mobile-menu.tpl',
      1 => 1583477231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e62135f3755b7_09102508 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="mobile-menu-toggle" class="open-button hidden-lg">
	<i class="fal fa-bars"></i>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <button id="mobile-menu-close" class="close-button">
        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3>
        <i class="ptw-icon icon-closed_light"></i>
    </button>
    <nav id="off-canvas-menu">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"jmsmegamenu",'hook'=>'MobiMenu'),$_smarty_tpl ) );?>

    </nav>
</div>
<?php }
}
