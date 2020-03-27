<?php
/* Smarty version 3.1.33, created on 2020-03-27 03:57:11
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\jmsblogwidget\views\templates\hook\sidebar-widget.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d7997599465_55346684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f369b2ddee0c42332d3a52ae56a114d9ac4e0345' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\jmsblogwidget\\views\\templates\\hook\\sidebar-widget.tpl',
      1 => 1583204034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d7997599465_55346684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_CATEGORYMENU']) {?>
<aside class="blog-widget widget-categories">
	<h3 class="widget-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl ) );?>
</span></h3>
	<ul>
		<?php echo $_smarty_tpl->tpl_vars['category_menu']->value;?>

	</ul>
</aside>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_POPULAR']) {?>
<div class="tab-pane active" id="popularpost">				
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['popularpost']->value, 'post', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['post']->value) {
?>	
		<?php $_smarty_tpl->_assignInScope('show_view', $_smarty_tpl->tpl_vars['post']->value['views']+1);?>	
		<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
		<article class="item-post clearfix">
				<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-img">
					<?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="img-responsive" />
					<?php } else { ?>	
						<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
no-img.jpg" class="img-responsive" />
					<?php }?>
					<p class="post-created"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'htmlall','UTF-8' )),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
</p>
					<h6><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</h6>
				</a>
		</article>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>				
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_ARCHIVES']) {?>
<aside class="blog-widget widget-archives">
	<h3 class="widget-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Archives','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl ) );?>
</span></h3>
	<ul>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['archives']->value, 'archive');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['archive']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('aparams', array('archive'=>$_smarty_tpl->tpl_vars['archive']->value['postmonth']));?>
		<li>
			<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-archive',$_smarty_tpl->tpl_vars['aparams']->value), ENT_QUOTES, 'UTF-8');?>
">
				<?php echo smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['archive']->value['postmonth'],'html','UTF-8' )),"%B %Y");?>

			</a>
		</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
</aside>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_RECENT']) {?>
<aside class="blog-widget widget-recent-post">
	<h3 class="widget-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent Posts','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl ) );?>
</span></h3>				
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latestpost']->value, 'post', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['post']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('show_view', $_smarty_tpl->tpl_vars['post']->value['views']+1);?>
			<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
			<article class="item-post clearfix">
				<div class="post-thumb">
					<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-img">
						<?php if ($_smarty_tpl->tpl_vars['post']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
thumb_<?php echo $_smarty_tpl->tpl_vars['post']->value['image'];?>
" class="img-responsive" />
						<?php } else { ?>	
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_baseurl']->value;?>
no-img.jpg" class="img-responsive" />
						<?php }?>
					</a>
				</div>
				<div class="content">
					<a href="<?php echo jmsblog::getPageLink('jmsblog-post',$_smarty_tpl->tpl_vars['params']->value);?>
" class="post-title">
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],35,'...' ));?>

					</a>
					<p class="post-created">
						<?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),"%B %e, %Y"), ENT_QUOTES, 'UTF-8');?>
 
					</p>
				</div>
			</article>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>				
</aside>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['widget_setting']->value['JBW_SB_SHOW_LATESTCOMMENT']) {?>
<aside class="blog-widget widget-lastest-comment">
	<h3 class="widget-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent Comments','d'=>'Modules.JmsBlogwidget'),$_smarty_tpl ) );?>
</span></h3>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['latestcomment']->value, 'comment', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['comment']->value) {
?>
		<article class="comment-item">
			<p><?php echo $_smarty_tpl->tpl_vars['comment']->value['customer_name'];?>
 on <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['comment'],45,'...' ));?>
</p>
		</article>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>	
</aside>
<?php }
}
}
