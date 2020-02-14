<?php
/* Smarty version 3.1.33, created on 2020-02-14 10:15:35
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\footers\footer-main-5.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e467347da6e04_05928822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff69ee54a9e8e18fbcfd42beb70d8df2b11be2c4' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\footers\\footer-main-5.tpl',
      1 => 1581412680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/socials.tpl' => 1,
  ),
),false)) {
function content_5e467347da6e04_05928822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="footer-main" class="footer-main">
    <div class="container">
        <div class="row">
            <div class="layout-column block-content col-left">
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Help & Support</a></li>          
                </ul>
            </div>
            <div class="layout-column col-center">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
" class="logo">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/logo-2.png" />
                </a>
                <div class="desc">New Fashion Lookbook!</div>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12936607035e467347da6e03_94822004', 'footer-newsletter');
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/socials.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div class="layout-column block-content col-right">
                <ul>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">My Address</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Return Exchanges</a></li>
                    <li><a href="#">Shopping FAQs</a></li>          
                </ul>
            </div>
        </div>
    </div>
</div>
<?php }
/* {block 'footer-newsletter'} */
class Block_12936607035e467347da6e03_94822004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-newsletter' => 
  array (
    0 => 'Block_12936607035e467347da6e03_94822004',
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
