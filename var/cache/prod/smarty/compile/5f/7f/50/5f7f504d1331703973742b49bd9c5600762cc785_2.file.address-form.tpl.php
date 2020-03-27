<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:00:50
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\customer\_partials\address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7db2b2b40455_11519501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f7f504d1331703973742b49bd9c5600762cc785' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\customer\\_partials\\address-form.tpl',
      1 => 1576744476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5e7db2b2b40455_11519501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="js-address-form">
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>

  <form
    method="POST"
    action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
    data-id-address="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'address','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
  >
    <section class="form-fields">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16188347135e7db2b2b40456_19323576', 'form_fields');
?>

    </section>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitAddress" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13827148055e7db2b2b40451_21915865', 'form_buttons');
?>

    </footer>
  </form>
</div>
<?php }
/* {block 'form_field'} */
class Block_18130903755e7db2b2b40457_44150215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'form_fields'} */
class Block_16188347135e7db2b2b40456_19323576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_16188347135e7db2b2b40456_19323576',
  ),
  'form_field' => 
  array (
    0 => 'Block_18130903755e7db2b2b40457_44150215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18130903755e7db2b2b40457_44150215', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_13827148055e7db2b2b40451_21915865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_13827148055e7db2b2b40451_21915865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn-default pull-xs-right btn-fullwidth" type="submit" class="form-control-submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block 'form_buttons'} */
}
