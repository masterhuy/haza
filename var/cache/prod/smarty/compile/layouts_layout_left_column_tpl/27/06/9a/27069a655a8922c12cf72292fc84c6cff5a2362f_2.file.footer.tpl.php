<?php
/* Smarty version 3.1.33, created on 2020-03-30 10:35:43
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e81bd6f3bdbc1_46609575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27069a655a8922c12cf72292fc84c6cff5a2362f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footer.tpl',
      1 => 1572506430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/footers/footer-1.tpl' => 1,
    'file:_partials/footers/footer-2.tpl' => 1,
    'file:_partials/footers/footer-3.tpl' => 1,
    'file:_partials/footers/footer-4.tpl' => 1,
    'file:_partials/footers/footer-5.tpl' => 1,
    'file:_partials/footers/footer-6.tpl' => 1,
    'file:_partials/footers/footer-7.tpl' => 1,
  ),
),false)) {
function content_5e81bd6f3bdbc1_46609575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17761710535e81bd6f3aa337_34536706', "footer");
?>

<?php }
/* {block "footer"} */
class Block_17761710535e81bd6f3aa337_34536706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17761710535e81bd6f3aa337_34536706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <footer id="footer" class="footer-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_class'], ENT_QUOTES, 'UTF-8');
}?>">
     <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout'] == 1) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout'] == 2) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout'] == 3) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout'] == 4) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout'] == 5) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout'] == 6) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_layout'] == 7) {?>
         <?php $_smarty_tpl->_subTemplateRender('file:_partials/footers/footer-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
     <?php }?>
</footer>
<?php
}
}
/* {/block "footer"} */
}
