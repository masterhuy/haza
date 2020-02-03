<?php
/* Smarty version 3.1.33, created on 2020-02-03 10:28:33
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\copyright-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e37f5d14e9ae8_21980148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5bc773d6b728da613fda7f69d4bff0fbf01abb0' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\copyright-2.tpl',
      1 => 1580454417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e37f5d14e9ae8_21980148 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17138105595e37f5d14e9ae3_30362214', 'footer-copyright');
?>

<?php }
/* {block 'footer-copyright'} */
class Block_17138105595e37f5d14e9ae3_30362214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_17138105595e37f5d14e9ae3_30362214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="footer-copyright" class="footer-copyright<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container">
        <div class="row align-items-center">
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) {?>
                <div class="layout-column col-6">
                    <?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content'];?>

                </div>
            <?php }?>
            
            <div class="layout-column quick-links col-6">
                <a href="#">Terms of Use</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Careers</a>
                <a href="#">Affiliates</a>
            </div>
            
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
