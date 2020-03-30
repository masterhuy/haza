<?php
/* Smarty version 3.1.33, created on 2020-03-30 08:26:31
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e819f27ac2378_46055011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14ff70be7c3485a4565371c5cc61e223f7cfe1b6' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\contact.tpl',
      1 => 1575271348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/contacts/layout-1.tpl' => 1,
    'file:_partials/contacts/layout-2.tpl' => 1,
    'file:_partials/contacts/layout-3.tpl' => 1,
    'file:_partials/contacts/layout-4.tpl' => 1,
  ),
),false)) {
function content_5e819f27ac2378_46055011 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4014426205e819f27ac2377_38650972', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-full-width.tpl');
}
/* {block 'page_header_container'} */
class Block_7826992695e819f27ac2375_50161753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_20811456855e819f27ac2377_34361661 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <section id="content" class="page-content">
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7826992695e819f27ac2375_50161753', 'page_header_container', $this->tplIndex);
?>

                 <?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_layout'] == 'layout-1') {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:_partials/contacts/layout-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_layout'] == 'layout-2') {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:_partials/contacts/layout-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_layout'] == 'layout-3') {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:_partials/contacts/layout-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['contact_page_layout'] == 'layout-4') {?>
                     <?php $_smarty_tpl->_subTemplateRender('file:_partials/contacts/layout-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                 <?php }?>
             </section>
         <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_17033445745e819f27ac2372_22550765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4014426205e819f27ac2377_38650972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4014426205e819f27ac2377_38650972',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_20811456855e819f27ac2377_34361661',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7826992695e819f27ac2375_50161753',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_17033445745e819f27ac2372_22550765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <section id="main">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20811456855e819f27ac2377_34361661', 'page_content_container', $this->tplIndex);
?>

         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17033445745e819f27ac2372_22550765', 'page_footer_container', $this->tplIndex);
?>

     </section>
 <?php
}
}
/* {/block 'content'} */
}
