<?php
/* Smarty version 3.1.33, created on 2020-02-12 09:17:23
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmspagebuilder\views\templates\hook\addoninstagram2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e43c2a32a1739_60984941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b813f98cdba4c63c045b81ae113c7d6f09c98a74' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram2.tpl',
      1 => 1580884572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e43c2a32a1739_60984941 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
    <h3><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<div class="instagram_block">
    <div class="instagram-cs-2" data-index="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
">

    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    if (window.blockInstaSettings === undefined)
        window.blockInstaSettings = [];
    	window.blockInstaSettings[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['index']->value, ENT_QUOTES, 'UTF-8');?>
] = {
        clientId      : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clientid']->value, ENT_QUOTES, 'UTF-8');?>
',
        accessToken   : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8');?>
',
        userId        : '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value, ENT_QUOTES, 'UTF-8');?>
',
        count         : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count']->value, ENT_QUOTES, 'UTF-8');?>
,
    };
<?php echo '</script'; ?>
>

<?php }
}