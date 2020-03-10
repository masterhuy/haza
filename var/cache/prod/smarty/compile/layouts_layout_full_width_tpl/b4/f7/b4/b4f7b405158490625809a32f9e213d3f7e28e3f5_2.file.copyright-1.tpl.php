<?php
/* Smarty version 3.1.33, created on 2020-03-10 07:46:10
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\copyright-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6745c2dea3a7_69029895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4f7b405158490625809a32f9e213d3f7e28e3f5' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\copyright-1.tpl',
      1 => 1583812539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6745c2dea3a7_69029895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_610156965e6745c2de6523_56458907', 'footer-copyright');
?>

<?php }
/* {block 'footer-copyright'} */
class Block_610156965e6745c2de6523_56458907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_610156965e6745c2de6523_56458907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
        <div class="container">
            <div class="row align-items-center">
                <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) {?>
                    <div class="layout-column col-lg-6 col-md-12 col-sm-12 col-12">
                        <?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content'];?>

                    </div>
                <?php }?>
                <div class="layout-column quick-links col-lg-6 col-md-12 col-sm-12 col-12">
                    <a href="index.php?id_cms=13&controller=cms">Terms of Use</a>
                    <a href="index.php?id_cms=14&controller=cms">Privacy Policy</a>
                    <a href="index.php?id_cms=15&controller=cms">Careers</a>
                    <a href="index.php?id_cms=10&controller=cms">Affiliates</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
