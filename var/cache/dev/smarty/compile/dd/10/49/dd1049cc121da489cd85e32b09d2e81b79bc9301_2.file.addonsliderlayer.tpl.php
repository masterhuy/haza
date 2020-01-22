<?php
/* Smarty version 3.1.33, created on 2020-01-22 09:12:05
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmspagebuilder\views\templates\hook\addonsliderlayer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e2811e5250aa4_75617091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd1049cc121da489cd85e32b09d2e81b79bc9301' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addonsliderlayer.tpl',
      1 => 1575973542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e2811e5250aa4_75617091 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="jms-slider-wrapper">
	<div class="responisve-container">
		<div
			data-slideTransition = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->trans, ENT_QUOTES, 'UTF-8');?>
"
			data-slideEndAnimation = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->end_animate, ENT_QUOTES, 'UTF-8');?>
"
			data-transitionIn = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->trans_in, ENT_QUOTES, 'UTF-8');?>
"
			data-transitionOut = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->trans_out, ENT_QUOTES, 'UTF-8');?>
"
			data-fullWidth = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->full_width, ENT_QUOTES, 'UTF-8');?>
"
			data-delay = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->delay, ENT_QUOTES, 'UTF-8');?>
"
			data-timeout = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->duration, ENT_QUOTES, 'UTF-8');?>
"
			data-speedIn = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->speed_in, ENT_QUOTES, 'UTF-8');?>
"
			data-speedOut = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->speed_out, ENT_QUOTES, 'UTF-8');?>
"
			data-easeIn = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->ease_in, ENT_QUOTES, 'UTF-8');?>
"
			data-easeOut = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->ease_out, ENT_QUOTES, 'UTF-8');?>
"
			data-controls = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->show_control, ENT_QUOTES, 'UTF-8');?>
"
			data-pager = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->show_pager, ENT_QUOTES, 'UTF-8');?>
"
			data-autoChange = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->auto_change, ENT_QUOTES, 'UTF-8');?>
"
			data-pauseOnHover = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->pause_hover, ENT_QUOTES, 'UTF-8');?>
"
			data-backgroundAnimation = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->bg_animation, ENT_QUOTES, 'UTF-8');?>
"
			data-backgroundEase = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->bg_ease, ENT_QUOTES, 'UTF-8');?>
"
			data-responsive = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->responsive, ENT_QUOTES, 'UTF-8');?>
"
			data-dimensions = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->max_width, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->max_height, ENT_QUOTES, 'UTF-8');?>
"
			data-mobile_height = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->mobile_height, ENT_QUOTES, 'UTF-8');?>
"
			data-mobile2_height = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->mobile2_height, ENT_QUOTES, 'UTF-8');?>
"
			data-tablet_height = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->tablet_height, ENT_QUOTES, 'UTF-8');?>
"
		 	class="slider" >
		<div class="fs_loader"></div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slider']->value->slides, 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
			<div class="slide <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value->class_suffix, ENT_QUOTES, 'UTF-8');?>
" style="background:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value->bg_color, ENT_QUOTES, 'UTF-8');?>
 url(<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/views/img/slides/<?php echo $_smarty_tpl->tpl_vars['slide']->value->bg_image;?>
) no-repeat center top;background-size:cover;" <?php if ($_smarty_tpl->tpl_vars['slide']->value->slide_link) {?>onclick="document.location='<?php echo $_smarty_tpl->tpl_vars['slide']->value->slide_link;?>
';"<?php }?>>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slide']->value->layers, 'layer');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['layer']->value) {
?>
					<?php if ($_smarty_tpl->tpl_vars['layer']->value->data_type == 'text') {?>
					<div class="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_class_suffix;?>
 jms-slide-content"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value->data_fixed) {?>data-fixed<?php }?>
					data-position="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_y;?>
,<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_x;?>
"
					data-fontsize = "<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_font_size;?>
"
					data-mfontsize = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_font_size, ENT_QUOTES, 'UTF-8');?>
"
					data-m2fontsize = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_font_size, ENT_QUOTES, 'UTF-8');?>
"
					data-tfontsize = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_font_size, ENT_QUOTES, 'UTF-8');?>
"
					data-mposition="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-m2position="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-tposition="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-mfont-weight = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_font_weight, ENT_QUOTES, 'UTF-8');?>
"
					data-m2font-weight = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_font_weight, ENT_QUOTES, 'UTF-8');?>
"
					data-tfont-weight = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_font_weight, ENT_QUOTES, 'UTF-8');?>
"
					data-font-weight = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->desktop->data_font_weight, ENT_QUOTES, 'UTF-8');?>
"
					data-mline-height = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_line_height, ENT_QUOTES, 'UTF-8');?>
"
					data-m2line-height = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_line_height, ENT_QUOTES, 'UTF-8');?>
"
					data-tline-height = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_line_height, ENT_QUOTES, 'UTF-8');?>
"
					data-line-height = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->desktop->data_line_height, ENT_QUOTES, 'UTF-8');?>
"
					data-show = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->desktop->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-mshow = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-m2show = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-tshow = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-mstyle = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_style, ENT_QUOTES, 'UTF-8');?>
"
					data-m2style = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_style, ENT_QUOTES, 'UTF-8');?>
"
					data-style = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->desktop->data_style, ENT_QUOTES, 'UTF-8');?>
"
					data-tstyle = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_style, ENT_QUOTES, 'UTF-8');?>
"
					data-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_in;?>
"
					data-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_out;?>
"
					data-delay="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_delay;?>
"
					data-ease-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_ease_in;?>
"
					data-ease-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_ease_out;?>
"
					data-transform-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_transform_in;?>
"
					data-transform-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_transform_out;?>
"
					data-time = "<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_time;?>
"
					width="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_width;?>
"
					height="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_height;?>
"
					style="font-weight: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->desktop->data_font_weight, ENT_QUOTES, 'UTF-8');?>
;font-size: <?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_font_size;?>
px; font-style:<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_style;?>
; color: <?php echo $_smarty_tpl->tpl_vars['layer']->value->data_color;?>
; line-height:<?php if ($_smarty_tpl->tpl_vars['layer']->value->desktop->data_line_height) {
echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_line_height;?>
px<?php }?>;"
					><?php echo $_smarty_tpl->tpl_vars['layer']->value->data_html;?>

					</div>
					<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value->data_type == 'image') {?>
					<img class="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_class_suffix;?>
 jms-slide-content"
					src="<?php echo $_smarty_tpl->tpl_vars['root_url']->value;?>
modules/jmsslider/views/img/layers/<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_image;?>
"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value->data_fixed) {?>data-fixed<?php }?>
					data-position="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_y;?>
,<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_x;?>
"
					data-mposition="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-m2position="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-tposition="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-show = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->desktop->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-mshow = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-m2show = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-tshow = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_in;?>
"
					data-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_out;?>
"
					data-delay="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_delay;?>
"
					data-ease-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_ease_in;?>
"
					data-ease-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_ease_out;?>
"
					data-transform-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_transform_in;?>
"
					data-transform-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_transform_out;?>
"
					data-time = "<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_time;?>
"
					width="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_width;?>
"
					height="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_height;?>
"/>
					<?php } else { ?>

					<iframe class="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_class_suffix;?>
 jms-slide-content"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value->data_fixed || $_smarty_tpl->tpl_vars['layer']->value->data_video_bg) {?>data-fixed<?php }?>
					data-position="<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_y;?>
,<?php echo $_smarty_tpl->tpl_vars['layer']->value->desktop->data_x;?>
"
					data-mposition="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-m2position="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-tposition="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_y, ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_x, ENT_QUOTES, 'UTF-8');?>
"
					data-show = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->desktop->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-mshow = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-m2show = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->mobile2->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-tshow = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['layer']->value->tablet->data_show, ENT_QUOTES, 'UTF-8');?>
"
					data-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_in;?>
"
					data-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_out;?>
"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_bg) {?>data-delay="0"<?php } else { ?>data-delay="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_delay;?>
" <?php }?>
					data-ease-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_ease_in;?>
"
					data-ease-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_ease_out;?>
"
					data-transform-in="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_transform_in;?>
"
					data-transform-out="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_transform_out;?>
"
					data-time = "<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_time;?>
"
					<?php if ($_smarty_tpl->tpl_vars['layer']->value->data_video_bg) {?>
						width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->max_width, ENT_QUOTES, 'UTF-8');?>
"
						height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slider']->value->max_height, ENT_QUOTES, 'UTF-8');?>
"
					<?php } else { ?>
						width="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_width;?>
"
						height="<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_height;?>
"
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['layer']->value->videotype == 'youtube') {?>
						src="http://www.youtube.com/embed/<?php echo htmlspecialchars(substr($_smarty_tpl->tpl_vars['layer']->value->data_video,(strpos($_smarty_tpl->tpl_vars['layer']->value->data_video,'?v=')+3)), ENT_QUOTES, 'UTF-8');?>
?autoplay=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_autoplay;?>
&controls=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_controls;?>
&loop=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_loop;?>
"
					<?php } elseif ($_smarty_tpl->tpl_vars['layer']->value->videotype == 'vimeo') {?>
						 <?php $_smarty_tpl->_assignInScope('vimeo_link', (explode("/",$_smarty_tpl->tpl_vars['layer']->value->data_video)));?>
						src="https://player.vimeo.com/video/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_link']->value[count($_smarty_tpl->tpl_vars['vimeo_link']->value)-1], ENT_QUOTES, 'UTF-8');?>
?autoplay=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_autoplay;?>
&loop=<?php echo $_smarty_tpl->tpl_vars['layer']->value->data_video_loop;?>
" allow="autoplay"
					<?php }?>
					allowfullscreen
					frameborder="0">
					</iframe>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</div>
<?php }
}
