<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:42:05
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\copyright-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7dbc5d5f24e6_03411091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f7b405158490625809a32f9e213d3f7e28e3f5' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\copyright-1.tpl',
      1 => 1585122462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7dbc5d5f24e6_03411091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6531899255e7dbc5d5ee664_99954739', 'footer-copyright');
?>

<?php }
/* {block 'footer-copyright'} */
class Block_6531899255e7dbc5d5ee664_99954739 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_6531899255e7dbc5d5ee664_99954739',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <div class="container">
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) {?>
                <?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content'];?>

            <?php }?>
        </div>
    </div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
