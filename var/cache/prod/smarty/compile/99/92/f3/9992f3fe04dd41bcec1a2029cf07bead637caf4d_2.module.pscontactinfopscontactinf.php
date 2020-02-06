<?php
/* Smarty version 3.1.33, created on 2020-02-06 10:26:57
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3be9f1b9c004_81815949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1580954691,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3be9f1b9c004_81815949 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-contact links wrapper block">
    <h3 class="block-title">
        <span class="text-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Contact','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <span class="text-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    </h3>
    <div class="block-content">
        <div class="address section">
            <p class="info-address"><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address1'];?>
</p>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
            <div class="phone section">
                Call:
                
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
            <div class="email section">
                Email:
                                    
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </div>
        <?php }?>
        <div class="opening section">
            <p><?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['address2'];?>
</p>
        </div>
    </div>
</div>
<?php }
}
