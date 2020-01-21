<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:31
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9b549f58_89648338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab6150c983d88dabad8c82327bf31f02ae3573b1' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/breadcrumb.tpl',
      1 => 1574139528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea2c9b549f58_89648338 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="breadcrumb">
    <div class="container">
        <div data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="row align-items-center<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['breadcrumb_seperator']) {?> seperator-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['breadcrumb_seperator'], ENT_QUOTES, 'UTF-8');
}?>">
            <ul itemscope itemtype="http://schema.org/BreadcrumbList" class="<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['breadcrumb_align']) {?>align-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['breadcrumb_align'], ENT_QUOTES, 'UTF-8');
}?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                            <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </a>
                        <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
</div>
<?php }
}
