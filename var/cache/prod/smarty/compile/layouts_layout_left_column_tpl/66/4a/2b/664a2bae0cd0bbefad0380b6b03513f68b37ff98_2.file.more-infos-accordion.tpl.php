<?php
/* Smarty version 3.1.33, created on 2020-03-27 08:42:05
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\more-infos-accordion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7dbc5d14ebc5_53760058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664a2bae0cd0bbefad0380b6b03513f68b37ff98' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\more-infos-accordion.tpl',
      1 => 1577249578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-details.tpl' => 1,
  ),
),false)) {
function content_5e7dbc5d14ebc5_53760058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="more_info_block" class="accordion">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9328764875e7dbc5d12f7c9_90727081', 'product_tabs');
?>

</div>
<?php }
/* {block 'product_description'} */
class Block_6934651085e7dbc5d133649_30843764 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                          <div class="product-description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</div>
                        <?php
}
}
/* {/block 'product_description'} */
/* {block 'product_details'} */
class Block_349635215e7dbc5d133646_44424433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-details.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php
}
}
/* {/block 'product_details'} */
/* {block 'product_attachments'} */
class Block_15606023275e7dbc5d1374c2_95873165 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
                      <div class="tab-pane fade in" id="attachments" role="tabpanel">
                          <section class="product-attachments">
                                  <h3 class="h5 text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</h3>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attachments'], 'attachment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attachment']->value) {
?>
                                  <div class="attachment">
                                      <h4><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h4>
                                      <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['description'], ENT_QUOTES, 'UTF-8');?>
</p
                                      <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'attachment','params'=>array('id_attachment'=>$_smarty_tpl->tpl_vars['attachment']->value['id_attachment'])),$_smarty_tpl ) );?>
">
                                      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
 (<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attachment']->value['file_size_formatted'], ENT_QUOTES, 'UTF-8');?>
)
                                      </a>
                                  </div>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          </section>
                      </div>
                  <?php }?>
                  <?php
}
}
/* {/block 'product_attachments'} */
/* {block 'product_tabs'} */
class Block_9328764875e7dbc5d12f7c9_90727081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_tabs' => 
  array (
    0 => 'Block_9328764875e7dbc5d12f7c9_90727081',
  ),
  'product_description' => 
  array (
    0 => 'Block_6934651085e7dbc5d133649_30843764',
  ),
  'product_details' => 
  array (
    0 => 'Block_349635215e7dbc5d133646_44424433',
  ),
  'product_attachments' => 
  array (
    0 => 'Block_15606023275e7dbc5d1374c2_95873165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel-group" id="accordion">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['description']) {?>
        <div class="panel panel-default">
              <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#description"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                    </h4>
              </div>
              <div id="description" class="panel-collapse collapse show">
                    <div class="panel-body">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6934651085e7dbc5d133649_30843764', 'product_description', $this->tplIndex);
?>

                    </div>
              </div>
        </div>
        <?php }?>
        <div class="panel panel-default">
              <div class="panel-heading">
                  <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#product-details"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Details','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                  </h4>
              </div>
              <div id="product-details" class="panel-collapse collapse">
                  <div class="panel-body">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_349635215e7dbc5d133646_44424433', 'product_details', $this->tplIndex);
?>

                  </div>
              </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['attachments']) {?>
        <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#attachments"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attachments','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                </h4>
              </div>
              <div id="attachments" class="panel-collapse collapse">
                  <div class="panel-body">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15606023275e7dbc5d1374c2_95873165', 'product_attachments', $this->tplIndex);
?>

                  </div>
            </div>
      </div>
      <?php }?>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
      <div class="panel panel-default">
          <div class="panel-heading">
              <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
              </h4>
          </div>
          <div id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" class="panel-collapse collapse">
              <div class="panel-body">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['extraContent'], 'extra', false, 'extraKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extraKey']->value => $_smarty_tpl->tpl_vars['extra']->value) {
?>
                      <div class="tab-pane fade in <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extra']->value['attr']['class'], ENT_QUOTES, 'UTF-8');?>
" id="extra-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['extraKey']->value, ENT_QUOTES, 'UTF-8');?>
" role="tabpanel" <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extra']->value['attr'], 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8');?>
"<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>
                          <?php echo $_smarty_tpl->tpl_vars['extra']->value['content'];?>

                        </div>
                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
          </div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
  <?php
}
}
/* {/block 'product_tabs'} */
}
