<?php
/* Smarty version 3.1.33, created on 2020-02-03 03:00:58
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsslider\views\templates\hook\listslide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e378cea860f43_44740620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e31b2a68a6f43c0d725462157fe9e21ead567be' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsslider\\views\\templates\\hook\\listslide.tpl',
      1 => 1563530018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e378cea860f43_44740620 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
            $(function() {
                var $mySlides = $("#slides");
                $mySlides.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateSlidesOrdering&secure_key="+secure_key;
                        $.post("<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/ajax_jmsslider.php?" + order);
                        }
                    });
                $mySlides.hover(function() {
                    $(this).css("cursor","move");
                    },
                    function() {
                    $(this).css("cursor","auto");
                });
            });
<?php echo '</script'; ?>
>
<div class="panel">
    <h3>
    <span title="" data-toggle="tooltip" class="label-tooltip toogle" data-original-title="Click to Toggle" data-html="true">
        <i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slides list','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

    </span>
    </h3>
    <?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.toogle').click(function(e){
            $('#slidesContent').toggle(200);
        });
    });

    <?php echo '</script'; ?>
>
    <div id="slidesContent">
        <div id="slides">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slides']->value, 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
            <div id="slides_<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
" class="panel" style="<?php if ($_smarty_tpl->tpl_vars['slide']->value->bg_type) {?>background-image: url('<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
slides/<?php echo $_smarty_tpl->tpl_vars['slide']->value->bg_image;?>
');<?php } else { ?>background-color: <?php echo $_smarty_tpl->tpl_vars['slide']->value->bg_color;?>
 <?php }?>">
                <div class="title">
                    <span class="slider-name">#<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
-<?php echo $_smarty_tpl->tpl_vars['slide']->value->title;?>
</span>
                    <div class="button">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&editSlide=1&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
"><i title="edit" class="material-icons action">mode_edit</i></a>
                        <a onclick="if(confirm('Are you sure want to remove this slide?')) { document.location='<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&delete_id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
'; } else { return true;}" ><i title="delete" class="material-icons action">delete</i></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&copySlide=1&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
"><i title="duplicate" class="icon-copy action"></i></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&changeStatus&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
"><i title="<?php if ($_smarty_tpl->tpl_vars['slide']->value->status) {?>enable<?php } else { ?>disable<?php }?>" class="icon-<?php if ($_smarty_tpl->tpl_vars['slide']->value->status) {?>check<?php } else { ?>remove<?php }?>"></i></a>
                    </div>


                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&addSlide&id_slider=<?php echo $_smarty_tpl->tpl_vars['slider']->value->id;?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Slide','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
">
                <div class="panel" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
settings/new_slider.png');background-size: unset;">
                    <div class="title">
                        <span>New Slide</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div><?php }
}
