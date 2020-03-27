<?php
/* Smarty version 3.1.33, created on 2020-03-27 04:07:20
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d7bf897fc28_71456746',
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
function content_5e7d7bf897fc28_71456746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20756705165e7d7bf897fc20_55117007', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-full-width.tpl');
}
/* {block 'page_header_container'} */
class Block_8189120905e7d7bf897fc28_25824693 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_10569980245e7d7bf897fc28_22607293 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <section id="content" class="page-content">
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8189120905e7d7bf897fc28_25824693', 'page_header_container', $this->tplIndex);
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
class Block_2351373285e7d7bf897fc22_89778490 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20756705165e7d7bf897fc20_55117007 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20756705165e7d7bf897fc20_55117007',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10569980245e7d7bf897fc28_22607293',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_8189120905e7d7bf897fc28_25824693',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2351373285e7d7bf897fc22_89778490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <section id="main">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10569980245e7d7bf897fc28_22607293', 'page_content_container', $this->tplIndex);
?>

         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2351373285e7d7bf897fc22_89778490', 'page_footer_container', $this->tplIndex);
?>

     </section>
 <?php
}
}
/* {/block 'content'} */
}
