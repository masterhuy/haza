<?php
/* Smarty version 3.1.33, created on 2019-12-05 04:59:13
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/headers/mobile-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de88ea11eb8c4_61278786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '645148d60d42d1a6a20a9bdab433aea5bcbcfa4a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/headers/mobile-menu.tpl',
      1 => 1574305512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de88ea11eb8c4_61278786 (Smarty_Internal_Template $_smarty_tpl) {
?><a id="mobile-menu-toggle" class="open-button hidden-lg">
		<i class="la la-bars"></i>
</a>
<div class="mobile-menu-wrap hidden-lg">
    <button id="mobile-menu-close" class="close-button"><h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Menu','d'=>'Shop.Theme'),$_smarty_tpl ) );?>
</h3> <i class="la la-times"></i></button>
    <nav id="off-canvas-menu">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"jmsmegamenu",'hook'=>'MobiMenu'),$_smarty_tpl ) );?>

    </nav>
</div>
<?php }
}
