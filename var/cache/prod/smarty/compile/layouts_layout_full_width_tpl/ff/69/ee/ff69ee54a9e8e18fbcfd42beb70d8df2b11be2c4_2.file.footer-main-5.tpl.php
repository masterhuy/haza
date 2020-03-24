<?php
/* Smarty version 3.1.33, created on 2020-03-24 09:00:02
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\footer-main-5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e79cc12df53c6_57894274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff69ee54a9e8e18fbcfd42beb70d8df2b11be2c4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\footer-main-5.tpl',
      1 => 1583899614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/headers/logo.tpl' => 1,
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5e79cc12df53c6_57894274 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="layout-column block col-12 col-sm-12 col-md-3 col-lg-3 col-left">
                <h3 class="h3 block-title">Support<i class="fal fa-plus"></i></h3>
                <div class="block-content">
                    <ul>
                        <li><a href="index.php?id_cms=4&controller=cms">About Us</a></li>
                        <li><a href="index.php?id_cms=14&controller=cms">Privacy Policy</a></li>
                        <li><a href="index.php?id_cms=7&controller=cms">Shipping</a></li>
                        <li><a href="index.php?id_cms=13&controller=cms">Terms & Conditions</a></li>
                        <li><a href="index.php?id_cms=8&controller=cms">Help & Support</a></li>          
                    </ul>
                </div>
            </div>
            <div class="layout-column block col-12 col-sm-12 col-md-6 col-lg-6 col-center">
                <h3 class="h3 block-title">Newsletter<i class="fal fa-plus"></i></h3>
                <div class="block-content">
                    <div class="layout-column col-auto header-left">
                        <?php $_smarty_tpl->_subTemplateRender('file:_partials/headers/logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <div class="desc">New Fashion Lookbook!</div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210767725e79cc12df53c9_06650851', 'footer-newsletter');
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            </div>
            <div class="layout-column block col-12 col-sm-12 col-md-3 col-lg-3 col-right">
                <h3 class="h3 block-title">Order<i class="fal fa-plus"></i></h3>
                <div class="block-content">
                    <ul>
                        <li><a href="index.php?controller=my-account">Account</a></li>
                        <li><a href="index.php?controller=addresses">My Address</a></li>
                        <li><a href="index.php?controller=contact">Contact Us</a></li>
                        <li><a href="index.php?id_cms=16&controller=cms">Return Exchanges</a></li>
                        <li><a href="index.php?id_cms=12&controller=cms">Shopping FAQs</a></li>          
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
/* {block 'footer-newsletter'} */
class Block_210767725e79cc12df53c9_06650851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-newsletter' => 
  array (
    0 => 'Block_210767725e79cc12df53c9_06650851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div class="block-footer block-newsletter">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_emailsubscription",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'footer-newsletter'} */
}
