<?php
/* Smarty version 3.1.33, created on 2019-12-05 04:59:12
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de88ea0df0ae1_00525804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd890ff2cb8855f5cf7a9ae54c25e824dc86f7cbc' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/header.tpl',
      1 => 1574216799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/header-1.tpl' => 1,
    'file:_partials/headers/header-2.tpl' => 1,
    'file:_partials/headers/header-3.tpl' => 1,
    'file:_partials/headers/header-4.tpl' => 1,
    'file:_partials/headers/header-5.tpl' => 1,
    'file:_partials/headers/header-6.tpl' => 1,
    'file:_partials/variants/header-7.tpl' => 1,
    'file:_partials/headers/header-mobile-1.tpl' => 1,
    'file:_partials/headers/header-mobile-2.tpl' => 1,
    'file:_partials/headers/header-mobile-3.tpl' => 1,
    'file:_partials/headers/header-mobile-4.tpl' => 1,
  ),
),false)) {
function content_5de88ea0df0ae1_00525804 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="desktop-header" class="header-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout'] == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout'] == 4) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout'] == 5) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout'] == 6) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_layout'] == 7) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/variants/header-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<div id="mobile-header" class="header-mobile-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_layout'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['header_class'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_layout'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_layout'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['header_mobile_layout'] == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/header-mobile-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<?php }
}
