<?php
/* Smarty version 3.1.33, created on 2020-02-05 08:16:33
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\customer\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3a79e17bae31_66476454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '120255361ea901bcd231ee12cdd827c697a9b3d3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\customer\\authentication.tpl',
      1 => 1574051080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/login/layout-1.tpl' => 1,
    'file:customer/_partials/login/layout-2.tpl' => 1,
    'file:customer/_partials/login/layout-3.tpl' => 1,
    'file:customer/_partials/login/layout-4.tpl' => 1,
  ),
),false)) {
function content_5e3a79e17bae31_66476454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7670543245e3a79e1793d33_71626377', 'page_title');
?>

<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_layout'] == 'layout-1') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/login/layout-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_layout'] == 'layout-2') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/login/layout-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_layout'] == 'layout-3') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/login/layout-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['login_page_layout'] == 'layout-4') {?>
    <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/login/layout-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_7670543245e3a79e1793d33_71626377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_7670543245e3a79e1793d33_71626377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
}
