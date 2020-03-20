<?php
/* Smarty version 3.1.33, created on 2020-03-20 07:16:04
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e746db48b6332_92013092',
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
function content_5e746db48b6332_92013092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

 
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15287500925e746db48b6333_44108498', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-full-width.tpl');
}
/* {block 'page_header_container'} */
class Block_16328947665e746db48b6334_02696355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_container'} */
class Block_2635425095e746db48b6336_49049884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

             <section id="content" class="page-content">
                 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16328947665e746db48b6334_02696355', 'page_header_container', $this->tplIndex);
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
class Block_8805345975e746db48b6331_43443468 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

         <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_15287500925e746db48b6333_44108498 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15287500925e746db48b6333_44108498',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_2635425095e746db48b6336_49049884',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16328947665e746db48b6334_02696355',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_8805345975e746db48b6331_43443468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <section id="main">
         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2635425095e746db48b6336_49049884', 'page_content_container', $this->tplIndex);
?>

         <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8805345975e746db48b6331_43443468', 'page_footer_container', $this->tplIndex);
?>

     </section>
 <?php
}
}
/* {/block 'content'} */
}
