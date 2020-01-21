<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:31
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/footers/footer-top-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9b60f161_89765558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dea800af883016502caa35ac53c126e17ac4d482' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/footers/footer-top-1.tpl',
      1 => 1572489508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5dea2c9b60f161_89765558 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer-top" class="footer-top<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_top_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['footer_top_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <div class="container">
        <div class="row align-items-center">
          <div class="layout-column text-center">
              <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
        </div>
    </div>
</div>
<?php }
}
