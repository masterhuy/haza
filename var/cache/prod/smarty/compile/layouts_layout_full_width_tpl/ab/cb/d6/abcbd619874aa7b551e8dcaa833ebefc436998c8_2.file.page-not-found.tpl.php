<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:31
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/errors/page-not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9b5a7947_83143204',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abcbd619874aa7b551e8dcaa833ebefc436998c8' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/errors/page-not-found.tpl',
      1 => 1569916435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea2c9b5a7947_83143204 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
    <div class="row">
        <div class="layout-column col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <p class="text-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'404','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
            <p class="text-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oops! This page Could Not Be Found!','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
            <p class="text-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry bit the page you are looking for does not exist, have been removed or name changed','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
            
            <a class="btn-default back-to-home" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to homepage','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a>
        
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15792789545dea2c9b5a5461_17561889', 'hook_not_found');
?>

        </div>
    </div>
</section>
<?php }
/* {block 'hook_not_found'} */
class Block_15792789545dea2c9b5a5461_17561889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_not_found' => 
  array (
    0 => 'Block_15792789545dea2c9b5a5461_17561889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_not_found'} */
}
