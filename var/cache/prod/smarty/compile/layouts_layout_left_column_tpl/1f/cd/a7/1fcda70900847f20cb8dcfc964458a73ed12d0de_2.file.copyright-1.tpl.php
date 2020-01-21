<?php
/* Smarty version 3.1.33, created on 2019-12-05 04:59:13
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/footers/copyright-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de88ea161b2b3_88650313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fcda70900847f20cb8dcfc964458a73ed12d0de' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/footers/copyright-1.tpl',
      1 => 1572424614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de88ea161b2b3_88650313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14880445595de88ea1614b41_69482245', 'footer-copyright');
?>

<?php }
/* {block 'footer-copyright'} */
class Block_14880445595de88ea1614b41_69482245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-copyright' => 
  array (
    0 => 'Block_14880445595de88ea1614b41_69482245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="footer-copyright" class="footer-copyright">
    <div class="container">
          <div class="row align-items-center">
              <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content']) {?>
              <div class="layout-column text-center">
                    <?php echo $_smarty_tpl->tpl_vars['jmsSetting']->value['footer_copyright_content'];?>

              </div>
              <?php }?>
          </div>
    </div>
</div>
<?php
}
}
/* {/block 'footer-copyright'} */
}
