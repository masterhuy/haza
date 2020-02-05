<?php
/* Smarty version 3.1.33, created on 2020-02-05 02:52:23
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmspagebuilder\views\templates\hook\addonblog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3a2de7cea610_82204097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6b38ac43672a5f376116c55034ca60bc8dc87ae' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\hook\\addonblog.tpl',
      1 => 1580714407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3a2de7cea610_82204097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
	<div class="addon-title">
		<h3><?php echo $_smarty_tpl->tpl_vars['addon_title']->value;?>
</h3>
	</div>
<?php }
if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
	<p class="addon-desc"><?php echo $_smarty_tpl->tpl_vars['addon_desc']->value;?>
</p>
<?php }
if (count($_smarty_tpl->tpl_vars['posts']->value) > 0) {?>
	<div class="blog-carousel owl-carousel" data-items="<?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-lg="<?php if ($_smarty_tpl->tpl_vars['items_show']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>4<?php }?>" data-md="<?php if ($_smarty_tpl->tpl_vars['items_show_md']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_md']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>3<?php }?>" data-sm="<?php if ($_smarty_tpl->tpl_vars['items_show_sm']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_sm']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>2<?php }?>" data-xs="<?php if ($_smarty_tpl->tpl_vars['items_show_xs']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['items_show_xs']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" data-nav="<?php if ($_smarty_tpl->tpl_vars['navigation']->value == '0') {?>false<?php } else { ?>true<?php }?>" data-dots="<?php if ($_smarty_tpl->tpl_vars['pagination']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-auto="<?php if ($_smarty_tpl->tpl_vars['autoplay']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-rewind="<?php if ($_smarty_tpl->tpl_vars['rewind']->value == '1') {?>true<?php } else { ?>false<?php }?>" data-slidebypage="<?php if ($_smarty_tpl->tpl_vars['slidebypage']->value == '1') {?>page<?php } else { ?>1<?php }?>">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
			<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>
			<div class="blog-item">
				<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && ($_smarty_tpl->tpl_vars['show_media']->value == '1')) {?>
					<div class="post-thumb">
						<?php echo $_smarty_tpl->tpl_vars['post']->value['link_video'];?>

					</div>
				<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && ($_smarty_tpl->tpl_vars['show_media']->value == '1')) {?>
					<div class="post-thumb">
						<a href="<?php echo htmlspecialchars(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value),'htmlall','UTF-8' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" class="img-responsive" />
						</a>
					</div>
				<?php }?>
				<h4 class="post-title">
					<a href="<?php echo htmlspecialchars(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value),'htmlall','UTF-8' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>
				</h4>
				<?php if ($_smarty_tpl->tpl_vars['show_introtext']->value == '1') {?>
					<div class="post-intro"><?php echo $_smarty_tpl->tpl_vars['post']->value['introtext'];?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['show_time']->value == '1') {?>
					<div class="post-created">
						<span class="day"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),'%e'), ENT_QUOTES, 'UTF-8');?>
</span>
						<span class="month"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),'%b'), ENT_QUOTES, 'UTF-8');?>
</span>
					</div>
				<?php }?>
				<ul class="post-meta">
					<?php if ($_smarty_tpl->tpl_vars['show_category']->value == '1') {?>
						<li class="post-category"><i class="fa fa-folder-o"></i> <a href="<?php echo htmlspecialchars(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value),'htmlall','UTF-8' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['category_name'];?>
</a></li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show_nviews']->value == '1') {?>
						<li class="post-views">
							<?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
 view<?php if ($_smarty_tpl->tpl_vars['post']->value['views'] > 0) {?>s<?php }?>
						</li>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['show_ncomments']->value == '1') {?>
						<li class="post-comments">
							<?php echo $_smarty_tpl->tpl_vars['post']->value['comment_count'];?>
 comment<?php if ($_smarty_tpl->tpl_vars['post']->value['comment_count'] > 0) {?>s<?php }?>
						</li>
					<?php }?>
				</ul>
				<?php if ($_smarty_tpl->tpl_vars['show_readmore']->value == '1') {?>
					<a class="btn post-readmore" href="<?php echo htmlspecialchars(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value),'htmlall','UTF-8' )),'&amp;','&'), ENT_QUOTES, 'UTF-8');?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'read more','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>

					</a>
				<?php }?>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php }
}
}
