<?php
/* Smarty version 3.1.33, created on 2020-02-20 07:58:48
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\socials-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4e3c381874b0_30907014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5cbba9b564134cfaadb10a38dafba188cd6eed1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\socials-2.tpl',
      1 => 1580953676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e3c381874b0_30907014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4027604655e4e3c3816fdb1_05414390', 'footer-social');
?>

<?php }
/* {block 'footer-social'} */
class Block_4027604655e4e3c3816fdb1_05414390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-social' => 
  array (
    0 => 'Block_4027604655e4e3c3816fdb1_05414390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block">
        <h3 class="h3 block-title">FOLLOW US<i class="fa fa-plus" aria-hidden="true"></i></h3>
        <ul id="social-links" class="social-links">
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_facebook']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_facebook'] != '') {?>
                <li class="facebook">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_facebook'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-facebook-square" ></i>Facebook</a>
                </li>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_twitter']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_twitter'] != '') {?>
                <li class="twitter">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_twitter'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-twitter" ></i>Twitter</a>
                </li>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_gplus']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_gplus'] != '') {?>
                <li class="google-plus">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_gplus'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-google" ></i>Google</a>
                </li>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_instagram']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_instagram'] != '') {?>
                <li class="instagram">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_instagram'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-instagram" ></i>Instagram</a>
                </li>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_pinterest']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_pinterest'] != '') {?>
                <li class="pinterest">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_pinterest'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-pinterest" ></i>Pinterest</a>
                </li>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_youtube']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_youtube'] != '') {?>
                <li class="youtube">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_youtube'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-youtube" ></i>Youtube</a>
                </li>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_vimeo']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_vimeo'] != '') {?>
                <li class="vimeo">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_vimeo'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-vimeo" ></i>Vimeo</a>
                </li>
            <?php }?>
            <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_linkedin']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_linkedin'] != '') {?>
                <li class="linkedin">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_linkedin'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-linkedin" ></i>Linkedin</a>
                </li>
            <?php }?>
        </ul>
    </div>
<?php
}
}
/* {/block 'footer-social'} */
}
