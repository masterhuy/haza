<?php
/* Smarty version 3.1.33, created on 2020-02-24 10:16:56
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\_partials\category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e53a298ee38e3_86627197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9fcbe84448851404bc8cd8addf02e39f62067df' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\_partials\\category-header.tpl',
      1 => 1582533527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53a298ee38e3_86627197 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
    <div id="js-product-list-header">
        <div class="block-category">
            <div class="block-category-inner">
                <?php if ($_smarty_tpl->tpl_vars['category']->value['description'] && $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_cat_desc']) {?>
                    <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] && $_smarty_tpl->tpl_vars['jmsSetting']->value['shop_cat_banner']) {?>
                    <div class="category-cover">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>">
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php }
}
}
