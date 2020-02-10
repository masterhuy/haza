<?php
/* Smarty version 3.1.33, created on 2020-02-10 10:25:15
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmspagebuilder\views\templates\hook\addonvideo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e412f8bb8bbd3_78262193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfa8425a31ade41c6d81c8a27511fc116260ef3f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addonvideo.tpl',
      1 => 1581303884,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e412f8bb8bbd3_78262193 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="addon-video">
    <?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
        <div class="addon-title">
            <h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
        <p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
    <?php }?>
    <div class="jms-video">
        <div class="video-image" data-toggle="modal" data-target="#video">
            <img class="w-100" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/video-bg.jpg" />
        </div>

        <div class="modal" id="video">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <div class="modal-body">
                        <?php if ($_smarty_tpl->tpl_vars['src']->value) {?>
                            <iframe width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
" height="<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }
}
