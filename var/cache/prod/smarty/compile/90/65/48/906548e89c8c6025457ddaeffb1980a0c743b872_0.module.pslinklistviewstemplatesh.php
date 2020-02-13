<?php
/* Smarty version 3.1.33, created on 2020-02-13 09:39:19
  from 'module:pslinklistviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e451947441594_10831239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '906548e89c8c6025457ddaeffb1980a0c743b872' => 
    array (
      0 => 'module:pslinklistviewstemplatesh',
      1 => 1572491714,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e451947441594_10831239 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
?>
  <h3><?php echo $_smarty_tpl->tpl_vars['linkBlock']->value['title'];?>
</h3>
  <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
      <li>
        <a
          id="<?php echo $_smarty_tpl->tpl_vars['link']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['linkBlock']->value['id'];?>
"
          class="<?php echo $_smarty_tpl->tpl_vars['link']->value['class'];?>
"
          href="<?php echo $_smarty_tpl->tpl_vars['link']->value['url'];?>
"
          title="<?php echo $_smarty_tpl->tpl_vars['link']->value['description'];?>
"
          <?php if (!empty($_smarty_tpl->tpl_vars['link']->value['target'])) {?> target="<?php echo $_smarty_tpl->tpl_vars['link']->value['target'];?>
" <?php }?>
        >
          <?php echo $_smarty_tpl->tpl_vars['link']->value['title'];?>

        </a>
      </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
