<?php
/* Smarty version 3.1.33, created on 2020-02-07 10:28:29
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\_partials\socials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3d3bcd31a873_56108318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89a7dedbad878fc8633876448657853a9360f392' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\_partials\\socials.tpl',
      1 => 1580892060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3d3bcd31a873_56108318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19419793945e3d3bcd2f3770_73837085', 'footer-social');
?>

<?php }
/* {block 'footer-social'} */
class Block_19419793945e3d3bcd2f3770_73837085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer-social' => 
  array (
    0 => 'Block_19419793945e3d3bcd2f3770_73837085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul id="social-links" class="social-links">
        <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_facebook']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_facebook'] != '') {?><li class="facebook"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_facebook'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-facebook" ></i></a></li><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_twitter']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_twitter'] != '') {?><li class="twitter"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_twitter'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-twitter" ></i></a></li><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_gplus']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_gplus'] != '') {?><li class="google-plus"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_gplus'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-google-plus" ></i></a></li><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_instagram']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_instagram'] != '') {?><li class="instagram"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_instagram'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-instagram" ></i></a></li><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_pinterest']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_pinterest'] != '') {?><li class="pinterest"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_pinterest'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-pinterest" ></i></a></li><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_youtube']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_youtube'] != '') {?><li class="youtube"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_youtube'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-youtube" ></i></a></li><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_vimeo']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_vimeo'] != '') {?><li class="vimeo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_vimeo'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-vimeo" ></i></a></li><?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['jmsSetting']->value['social_linkedin']) && $_smarty_tpl->tpl_vars['jmsSetting']->value['social_linkedin'] != '') {?><li class="linkedin"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['social_linkedin'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><i class="fa fa-linkedin" ></i></a></li><?php }?>
    </ul>
<?php
}
}
/* {/block 'footer-social'} */
}
