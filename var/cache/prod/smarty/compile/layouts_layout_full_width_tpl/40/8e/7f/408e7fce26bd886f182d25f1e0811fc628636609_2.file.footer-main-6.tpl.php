<?php
/* Smarty version 3.1.33, created on 2020-03-11 07:02:50
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\footer-main-6.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e688d1a951703_08416569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '408e7fce26bd886f182d25f1e0811fc628636609' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\footer-main-6.tpl',
      1 => 1583901975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/logo.tpl' => 1,
  ),
),false)) {
function content_5e688d1a951703_08416569 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="layout-column col-12 col-sm-12 col-md-3 col-lg-3 col-logo">
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column col-12 col-sm-12 col-md-9 col-lg-9 block-content col-right">
                <ul>
                    <li><a href="index.php?id_cms=4&controller=cms">About us</a></li>
                    <li><a href="index.php?id_cms=12&controller=cms">Faq's</a></li>
                    <li><a href="index.php?id_cms=14&controller=cms">Term & policies</a></li>
                    <li><a href="index.php?id_cms=10&controller=cms">Affiliate</a></li>
                    <li><a href="index.php?fc=module&module=jmsblog&category_id=1&controller=category">Our blog</a></li>          
                </ul>
            </div>
        </div>
    </div>
</div>
<?php }
}
