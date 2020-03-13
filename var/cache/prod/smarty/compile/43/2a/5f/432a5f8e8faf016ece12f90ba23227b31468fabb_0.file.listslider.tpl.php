<?php
/* Smarty version 3.1.33, created on 2020-03-13 07:00:49
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsslider\views\templates\hook\listslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e6b2fa1cccba8_48782503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '432a5f8e8faf016ece12f90ba23227b31468fabb' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsslider\\views\\templates\\hook\\listslider.tpl',
      1 => 1563530018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6b2fa1cccba8_48782503 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
            $(function() {
                var $myslider = $("#slider");
                $myslider.sortable({
                    opacity: 0.6,
                    cursor: "move",
                    update: function() {
                        var order = $(this).sortable("serialize") + "&action=updateSliderOrdering&secure_key="+secure_key;
                        $.post("<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/ajax_jmsslider.php?" + order);
                        }
                    });
                $myslider.hover(function() {
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
        <i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'slider list','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

    </span>

    <span class="panel-heading-action">
        <a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&addSlider" class="btn btn-default btn-success" id="addSlide" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Slider','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
">
            <i class="icon-plus"></i>
        </a>

    </span>
    </h3>
    <?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('.toogle').click(function(e){
            $('#sliderContent').toggle(200);
        });
    });

    <?php echo '</script'; ?>
>
    <div id="sliderContent">
        <div id="slider">
            <?php if (count($_smarty_tpl->tpl_vars['sliders']->value) > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sliders']->value, 'slider');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
?>
            <div id="slider_<?php echo $_smarty_tpl->tpl_vars['slider']->value->id_slider;?>
" class="panel">
                <div class="row">
                    <div class="col-lg-1">
                        <span><i class="icon-arrows "></i></span>
                    </div>
                    <div class="col-md-2">
                        #<?php echo $_smarty_tpl->tpl_vars['slider']->value->id_slider;?>
 - <?php echo $_smarty_tpl->tpl_vars['slider']->value->title;?>

                    </div>
                    <div class="col-md-9">
                        <div class="btn-group-action pull-right">
                            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&copySlider&id_slider=<?php echo $_smarty_tpl->tpl_vars['slider']->value->id_slider;?>
">
                                <i class="icon-copy"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Duplicate','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

                            </a>
                            <a class="btn <?php if ($_smarty_tpl->tpl_vars['slider']->value->active) {?>btn-success<?php } else { ?>btn-danger<?php }?>"
                                href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&changeSliderStatus&id_slider=<?php echo $_smarty_tpl->tpl_vars['slider']->value->id_slider;?>
" title="<?php if ($_smarty_tpl->tpl_vars['slider']->value->active) {?>Enabled<?php } else { ?>Disabled<?php }?>">
                                <i class="<?php if ($_smarty_tpl->tpl_vars['slider']->value->active) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['slider']->value->active) {?>Enabled<?php } else { ?>Disabled<?php }?>
                            </a>
                            <a class="btn btn-default"
                                href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&editSlider&id_slider=<?php echo $_smarty_tpl->tpl_vars['slider']->value->id_slider;?>
">
                                <i class="icon-edit"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

                            </a>
                            <a class="btn btn-default" onclick="if(confirm('Are you sure want to remove this slide?')) { document.location='<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&delete_id_slider=<?php echo $_smarty_tpl->tpl_vars['slider']->value->id_slider;?>
'; } else { return true;}"
                                >
                                <i class="icon-trash"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no slider','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

            <?php }?>
        </div>
    </div>
</div><?php }
}
