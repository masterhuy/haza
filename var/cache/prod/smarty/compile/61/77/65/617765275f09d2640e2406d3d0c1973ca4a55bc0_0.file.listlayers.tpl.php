<?php
/* Smarty version 3.1.33, created on 2020-03-12 09:08:15
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsslider\views\templates\hook\listlayers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e69fbff7dfc14_89313839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '617765275f09d2640e2406d3d0c1973ca4a55bc0' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsslider\\views\\templates\\hook\\listlayers.tpl',
      1 => 1563530010,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./layer-tool.tpl' => 1,
    'file:./layerconfig.tpl' => 1,
  ),
),false)) {
function content_5e69fbff7dfc14_89313839 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
?>

<form id="layer_form" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&layer=1" method="post">
<div class="panel area-display">
	<h3>
	<span title="" data-toggle="tooltip" class="label-tooltip toogle" data-original-title="Click to Toggle" data-html="true">
		<i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layers list of','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

	</span>
	</h3>
	<div class="list-title-slides">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value->slides, 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
        <a <?php if ($_smarty_tpl->tpl_vars['slide']->value->id == $_smarty_tpl->tpl_vars['currentSlide']->value->id) {?>class="btn-info"<?php } else { ?>title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click here go to ','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );
echo $_smarty_tpl->tpl_vars['slide']->value->title;?>
"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider&editSlide&id_slide=<?php echo $_smarty_tpl->tpl_vars['slide']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['slide']->value->title;?>
</a>&nbsp;&nbsp;
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
	<?php $_smarty_tpl->_subTemplateRender('file:./layer-tool.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentSlide']->value->layers, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
		<?php $_smarty_tpl->_subTemplateRender('file:./layerconfig.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('layer'=>$_smarty_tpl->tpl_vars['layer']->value), 0, true);
?>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<div class="panel-body ">
		<div class="wrap-slider">
			<div id="horlinie"><div id="horlinetext">0</div></div>
			<div id="verlinie"><div id="verlinetext">0</div></div>
			<div id="hor-css-linear"><ul class="linear-texts"></ul></div>
			<div id="ver-css-linear"><ul class="linear-texts"></ul></div>
			<div class="layer-wrapper">
				<div  class="slider" style="width:<?php echo $_smarty_tpl->tpl_vars['slider']->value->max_width;?>
px;height:<?php echo $_smarty_tpl->tpl_vars['slider']->value->max_height;?>
px">
					<div id="frame_layer" class="slide" style="<?php if ($_smarty_tpl->tpl_vars['currentSlide']->value->bg_type == 1) {?>background-image:url(<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/views/img/slides/<?php echo $_smarty_tpl->tpl_vars['currentSlide']->value->bg_image;?>
);<?php } else { ?>background-color:<?php echo $_smarty_tpl->tpl_vars['currentSlide']->value->bg_color;
}?>;background-size:100% 100%;position:relative;width:100%;height:100%">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentSlide']->value->layers, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
							<?php echo smarty_function_math(array('assign'=>"data_x",'equation'=>'(x/y)*100','x'=>$_smarty_tpl->tpl_vars['layer']->value->desktop->data_x,'y'=>$_smarty_tpl->tpl_vars['slider']->value->max_width),$_smarty_tpl);?>

							<?php echo smarty_function_math(array('assign'=>"data_y",'equation'=>'(w/z)*100','w'=>$_smarty_tpl->tpl_vars['layer']->value->desktop->data_y,'z'=>$_smarty_tpl->tpl_vars['slider']->value->max_height),$_smarty_tpl);?>

							<div id="caption_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="tp-caption layer <?php echo $_smarty_tpl->tpl_vars['layer']->value->data_class_suffix;?>
" style="position:absolute; <?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_bg) {?>top:0; left:0;<?php } else { ?>top:<?php echo $_smarty_tpl->tpl_vars['data_y']->value;?>
%; left:<?php echo $_smarty_tpl->tpl_vars['data_x']->value;?>
%;<?php }?> font-weight:<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_font_weight;?>
;width:<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_width;?>
px;height:<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_height;?>
px;font-size:<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_font_size;?>
px; color: <?php echo $_smarty_tpl->tpl_vars['layer']->value->data_color;?>
; font-style:<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_style;?>
;<?php if ($_smarty_tpl->tpl_vars['layer']->value->desktop->data_line_height) {?>line-height:<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_line_height;?>
px;<?php }
if (!$_smarty_tpl->tpl_vars['layer']->value->desktop->data_show) {?>display:none<?php }?>">
							<?php if ($_smarty_tpl->tpl_vars['layer']->value->data_type == "text") {?>
								<span><?php echo $_smarty_tpl->tpl_vars['layer']->value->data_html;?>
</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value->data_type == "image") {?>
								<img width="100%" height="100%" id="image_layer_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/modules/jmsslider/views/img/layers/<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_image;?>
">
							<?php } else { ?>
								<i class="icon-arrows move-toolbar" title="Keep mouse to move" ></i>
								<?php if ($_smarty_tpl->tpl_vars['layer']->value->videotype == 'youtube') {?>
								<iframe width="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_width;?>
px;" height="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_height;?>
px;" src="http://www.youtube.com/embed/<?php echo substr($_smarty_tpl->tpl_vars['layer']->value->data_video,(strpos($_smarty_tpl->tpl_vars['layer']->value->data_video,'?v=')+3));?>
?autoplay=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_autoplay;?>
&controls=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_controls;?>
&loop=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_loop;?>
" allowfullscreen frameborder="0">
								 </iframe>
								 <?php } elseif ($_smarty_tpl->tpl_vars['layer']->value->videotype == 'vimeo') {?>
								 <?php $_smarty_tpl->_assignInScope('vimeo_link', (explode("/",$_smarty_tpl->tpl_vars['layer']->value->data_video)));?>
								 <iframe width="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_width;?>
px;" height="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_height;?>
px;" src="https://player.vimeo.com/video/<?php echo $_smarty_tpl->tpl_vars['vimeo_link']->value[count($_smarty_tpl->tpl_vars['vimeo_link']->value)-1];?>
?autoplay=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_autoplay;?>
&loop=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_loop;?>
" allowfullscreen frameborder="0">
								 </iframe>
								 <?php }?>
							<?php }?>
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div> <!-- END SLIDE -->
			</div>
		</div>
		<div class="mastertimer-wrapper">
			<div class="mastertimer-left">
				<ul id="timeline-title">
					<li class="fulltime-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Slide Time','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentSlide']->value->layers, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
						<li id="fulltime_title_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="fulltime-title"><i class="material-icons"><?php if ($_smarty_tpl->tpl_vars['layer']->value->data_type == 'text') {?>assignment<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value->data_type == 'image') {?>collections<?php } else { ?>video_librarys<?php }?></i><?php echo $_smarty_tpl->tpl_vars['layer']->value->data_title;?>
</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<div class="mastertimer-right">
				<div id="mastertimer-curtime"><span id="mastertimer-curtimeinner"></span></div>
				<div class="mastertimer">
					<div id="mastertimer-linear">
						<ul class="linear-texts">
						</ul>
					</div>
				</div>
				<input type="hidden" id="layer_active" value="<?php if (count($_smarty_tpl->tpl_vars['currentSlide']->value->layers) > 0) {?>_<?php echo $_smarty_tpl->tpl_vars['currentSlide']->value->layers[0]->id;
}?>" />
				<div id="time-line">
					<ul>
						<li id="fulltime" class="mastertimer-slide">
							<div class="fulltime" style="width:<?php echo $_smarty_tpl->tpl_vars['slider']->value->duration/10;?>
px;"></div>
						</li>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentSlide']->value->layers, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
						<li id="mastertimer_<?php echo $_smarty_tpl->tpl_vars['layer']->value->id;?>
" class="mastertimer-layer layer" data-index="0">
							<div class="layer-time ui-widget-content" style="width:<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_time/10;?>
px">
								<div class="delay-time ui-widget-content" style="width:<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_delay/10;?>
px">
								</div>
							</div>
						</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			</div>
		</div>

	<div class="panel-footer">
		<button class="btn btn-default pull-right btn-success" name="submitLayer" id="module_form_submit_btn" value="1" type="submit">
			<i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

		</button>
		<a class="btn btn-default btn-warning" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmsslider" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Slides List','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
"><i class="process-icon-back"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</a>
	</div>

	<input type="hidden" name="slide_id" id="id_slide" value="<?php echo $_smarty_tpl->tpl_vars['currentSlide']->value->id;?>
" />
	<input type="hidden" name="layer_id" id="id_layer" value="<?php if (count($_smarty_tpl->tpl_vars['currentSlide']->value->layers) > 0) {
echo $_smarty_tpl->tpl_vars['currentSlide']->value->layers[0]->id;
} else { ?>0<?php }?>" />
	<input type="hidden" name="layer_type" id="type_layer" />
	<input type="hidden" name="site_url" id="site_url" value="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
" />
	<input type="hidden" name="id_slide" value="<?php echo $_smarty_tpl->tpl_vars['currentSlide']->value->id;?>
">
	<input type="hidden" id="slider_width" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value->max_width;?>
">
	<input type="hidden" id="slider_height" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value->max_height;?>
">
	<input type="hidden" id="mobile_height" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value->mobile_height;?>
">
	<input type="hidden" id="mobile2_height" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value->mobile2_height;?>
">
	<input type="hidden" id="tablet_height" value="<?php echo $_smarty_tpl->tpl_vars['slider']->value->tablet_height;?>
">
<div id="modal_add_text" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add text or html','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            	<p><input type="text" id="title_text_new" name="title_text_new"></p>
            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text or HTML','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            	<p><textarea name="data_html" id="text_layer_new" cols="30" rows="10"></textarea></p>
            </div>
        	<p id='loading' class="loading loading-text" style="text-align:center; display:none;"><img  src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/modules/jmsslider/views/img/settings/loading.gif" alt="loading"></p>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitLayerText" name="submitLayer">Save</button>
            </div>
        </div>

    </div>
</div>
<div id="modal_add_video" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add video (Youtube or Vimeo)','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            	<p><input type="text" id="title_video_new" name="title_video_new"></p>
            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video Url','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            	<p><textarea name="data_video_new" id="data_video_new" cols="30" rows="3"></textarea></p>
            	<p class="help-block">Eg: https://www.youtube.com/watch?v=2PEG82Udb90 or https://vimeo.com/23259282</p>
            </div>
        	<p id='loading' class="loading loading-text" style="text-align:center; display:none;"><img  src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/modules/jmsslider/views/img/settings/loading.gif" alt="loading"></p>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submitLayerVideo" name="submitLayer">Save</button>
            </div>
        </div>
    </div>
</div> <!-- end modal video -->
<div id="modal_tips" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TIPS','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</h4>
            </div>
            <div class="modal-body">
	            <ul style="list-style-type:decimal">
	            	<li class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To set background for slide, click on layer video then set delay = 0, check in box "Set this video for slide background"-->Save','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            	<li  class="text-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To mute video, click on volume video youtube, then click Save','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            	<li  class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Typing "center" in data X or data Y to center align for layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            	<li class="text-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Typing "full/half/quarter" in width or data height to set size (full/half/quarter slide) quickly for layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            	<li  class="text-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Using show/hide layer function (icon eye) to easly working.','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</li>
	            </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</form>
<!-- end first form  -->
<form id="form_add_layer" action="" method="post" enctype="multipart/form-data">
<div id="modal_add_image" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Image','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</h4>
	            </div>
	            <div class="modal-body">
	            	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title layer','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</p>
            		<p><input type="text" id="title_image_new" name="title_image_new"></p>
	            	<div id="image_action" class="form-group clearfix" >
	            		<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type Action','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
						<div class="col-lg-9">
							<span class="switch prestashop-switch fixed-width-lg">
								<input type="radio" value="select" id="data_image_action_select" checked name="data_image_action">
								<label for="data_image_action_select"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
								<input type="radio" value="upload" id="data_image_action_upload" name="data_image_action">
								<label for="data_image_action_upload"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
								<a class="slide-button btn"></a>
							</span>
						</div>
	            	</div>
	            	<div id="form_upload_image" class="form-group clearfix">
						<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload file','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-9">
							<input type="file" class="hide" name="data_image" id="data_image">
							<div class="dummyfile input-group">
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input type="text" readonly="" name="filename" id="data_image-name">
								<span class="input-group-btn">
									<button class="btn btn-default" name="submitAddAttachments" type="button" id="data_image-selectbutton">
										<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose a file','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>

									</button>
								</span>
							</div>
						</div>
					</div>
	            	<div id="form_select_image" class="form-group  clearfix">
	            		<label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','d'=>'Modules.JmsSlider'),$_smarty_tpl ) );?>
</label>
	            		<select class="col-lg-9" name="data_s_image" id="data_s_image">
	            			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
	            				<option  value="<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
</option>
	            			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	            		</select>
	            	</div>
	            	<div class="show-error" style="color:#ff0000"></div>

	            	<p id='loading' class="loading loading-image" style="text-align:center; display:none;"><img  src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
/modules/jmsslider/views/img/settings/loading.gif" alt="loading"></p>
	            </div>
	            <div class="modal-footer clearfix">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                <button type="submit" class="btn btn-primary" id="submitLayerImage" name="submitLayer">Save</button>
	            </div>
        </div>
    </div>
</div> <!-- end modal add image -->
</form>


<?php }
}
