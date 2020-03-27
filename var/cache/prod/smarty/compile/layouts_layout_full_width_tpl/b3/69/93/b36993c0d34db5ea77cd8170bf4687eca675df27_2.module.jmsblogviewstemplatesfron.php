<?php
/* Smarty version 3.1.33, created on 2020-03-27 03:57:10
  from 'module:jmsblogviewstemplatesfron' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d7996ac9656_66204837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b36993c0d34db5ea77cd8170bf4687eca675df27' => 
    array (
      0 => 'module:jmsblogviewstemplatesfron',
      1 => 1583201991,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:modules/jmsblog/views/templates/front/comment_facebook.tpl' => 1,
  ),
),false)) {
function content_5e7d7996ac9656_66204837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
if ($_smarty_tpl->tpl_vars['page_layout']->value == 'no') {
$_smarty_tpl->_assignInScope('layout', "layouts/layout-full-width.tpl");
} elseif ($_smarty_tpl->tpl_vars['page_layout']->value == 'right') {
$_smarty_tpl->_assignInScope('layout', "layouts/layout-right-column.tpl");
} else {
$_smarty_tpl->_assignInScope('layout', "layouts/layout-left-column.tpl");
}?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4745127775e7d7996a54359_89340623', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_content_top'} */
class Block_11643451695e7d7996a54358_80742157 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block "page_content"} */
class Block_9787596235e7d7996a54354_26115593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

				<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
				<div class="single-blog">
					<div class="blog-post">
						<?php if ($_smarty_tpl->tpl_vars['post']->value['link_video'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
							<div class="post-video">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['link_video'], ENT_QUOTES, 'UTF-8');?>

							</div>
						<?php } elseif ($_smarty_tpl->tpl_vars['post']->value['image'] && $_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
							<div class="post-thumb">
								<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Blog','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
" />

							</div>
						<?php }?>
						<?php $_smarty_tpl->_assignInScope('params', array('post_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id'],'category_slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['alias']));?>
						<?php $_smarty_tpl->_assignInScope('catparams', array('category_id'=>$_smarty_tpl->tpl_vars['post']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['post']->value['category_alias']));?>
						<ul class="post-meta">
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_CATEGORY']) {?>
								<li class="category-name">
									<span>
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

										<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
">
											<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['category_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

										</a>
									</span>
								</li>
							<?php }?>
							<li class="created">
								<span class="day"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),'%e'), ENT_QUOTES, 'UTF-8');?>
</span>
								<span class="month"><?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['created'],'html','UTF-8' )),'%b'), ENT_QUOTES, 'UTF-8');?>
</span>
							</li>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_VIEWS']) {?>
								<li>
									<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['views'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'view(s)','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
,</span>
								</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_COMMENTS']) {?>
								<li>
									<span><?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['comments']->value), ENT_QUOTES, 'UTF-8');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' comments','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</span>
								</li>
							<?php }?>
						</ul>
						<h1 class="title"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>

						<div class="post-fulltext">
							<?php echo $_smarty_tpl->tpl_vars['post']->value['fulltext'];?>

						</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_SOCIAL_SHARING']) {?>
						<div class="social-sharing">
							
								<?php echo '<script'; ?>
 type="text/javascript">var switchTo5x=true;<?php echo '</script'; ?>
>
								<?php echo '<script'; ?>
 type="text/javascript" src="http://w.sharethis.com/button/buttons.js"><?php echo '</script'; ?>
>
								<?php echo '<script'; ?>
 type="text/javascript">stLight.options({publisher: "a6f949b3-864b-44c5-b0ec-4140186ad958", doNotHash: false, doNotCopy: false, hashAddressBar: false});<?php echo '</script'; ?>
>
							
							<span class='st_sharethis_large' displayText='ShareThis'></span>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_FACEBOOK']) {?>
								<span class='st_facebook_large' displayText='Facebook'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_TWITTER']) {?>
								<span class='st_twitter_large' displayText='Tweet'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_GOOGLEPLUS']) {?>
								<span class='st_googleplus_large' displayText='Google +'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_LINKEDIN']) {?>
								<span class='st_linkedin_large' displayText='LinkedIn'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_PINTEREST']) {?>
								<span class='st_pinterest_large' displayText='Pinterest'></span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_EMAIL']) {?>
								<span class='st_email_large' displayText='Email'></span>
							<?php }?>
						</div>
					<?php }?>
				</div>
					<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_COMMENT_ENABLE']) {?>
						<div id="comments">
							<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_FACEBOOK_COMMENT'] == 0) {?>
								<?php if ($_smarty_tpl->tpl_vars['msg']->value == 1) {?>
									<div class="success">
										<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your comment submited','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
 ! <?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_AUTO_APPROVE_COMMENT'] == 0) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please waiting approve from Admin','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
.<?php }?>
									</div>
								<?php }?>
								<?php if (count($_smarty_tpl->tpl_vars['cerrors']->value) > 0) {?>
									<ul>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cerrors']->value, 'cerror');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cerror']->value) {
?>
										<li class="error"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cerror']->value, ENT_QUOTES, 'UTF-8');?>
</li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
									<div id="accordion" class="panel-group">
										<div class="panels">
											<div class="addon-title text-left">
												<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</h3>
											</div>
											<div id="post-comments">
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['comment']->value) {
?>
													<div class="post-comment clearfix">
														<div class="post-comment-info">
															<div class="user-image">
																<img class="attachment-widget wp-post-image img-responsive" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
user.png" />
															</div>
															<div class="post-info">
																<div class="title">
																	<span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['customer_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars(smarty_modifier_date_format(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['time_add'],'html','UTF-8' )),'%b %e, %Y'), ENT_QUOTES, 'UTF-8');?>

																</div>
																<p class="post-comment-content"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['comment'],200,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</p>
															</div>
														</div>
													</div>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
											</div>
										</div>
									</div>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] || (!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] && $_smarty_tpl->tpl_vars['logged']->value)) {?>
								<div class="commentForm">
									<div class="addon-title text-left">
										<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave a Comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</h3>
									</div>
									<form id="commentForm" enctype="multipart/form-data" method="post" action="index.php?fc=module&module=jmsblog&controller=post&post_id=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['post_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&action=submitComment">
										<div class="row">
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<input id="customer_name" placeholder="Your name" class="form-control" name="customer_name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
" required />
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<input id="comment_title" placeholder="Your email" class="form-control" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['email'], ENT_QUOTES, 'UTF-8');?>
" required />
												</div>
											</div>
											<div class="col-lg-4 col-md-4 col-sm-12">
												<div class="form-group">
													<input id="customer_site" placeholder="Your website" class="form-control" name="customer_site" type="text" value=""/>
												</div>
											</div>
										</div>

										<div class="form-group">
											<textarea id="comment" placeholder="Your message" class="form-control" name="comment" rows="3" required></textarea>
										</div>
										<div id="new_comment_form_footer">
											<input id="item_id_comment_send" name="post_id" type="hidden" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['post_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
											<input id="item_id_comment_reply" name="post_id_comment_reply" type="hidden" value="" />
											<button id="submitComment" class="btn-default" name="submitComment" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>
</button>
										</div>
									</form>
								</div>
								<?php }?>
								<?php if (!$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_ALLOW_GUEST_COMMENT'] && !$_smarty_tpl->tpl_vars['logged']->value) {?>
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Login to comment','d'=>'Modules.JmsBlog'),$_smarty_tpl ) );?>

								<?php }?>
							<?php } else { ?>
								<?php $_smarty_tpl->_subTemplateRender("file:modules/jmsblog/views/templates/front/comment_facebook.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
							<?php }?>
						</div>
					<?php }?>
				<?php
}
}
/* {/block "page_content"} */
/* {block 'page_content_container'} */
class Block_10551143675e7d7996a54351_84351983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <section id="content" class="page-content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11643451695e7d7996a54358_80742157', 'page_content_top', $this->tplIndex);
?>

				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9787596235e7d7996a54354_26115593', "page_content", $this->tplIndex);
?>

            </section>
        <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_11562225575e7d7996ac9655_07867636 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_4745127775e7d7996a54359_89340623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4745127775e7d7996a54359_89340623',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10551143675e7d7996a54351_84351983',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11643451695e7d7996a54358_80742157',
  ),
  'page_content' => 
  array (
    0 => 'Block_9787596235e7d7996a54354_26115593',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11562225575e7d7996ac9655_07867636',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10551143675e7d7996a54351_84351983', 'page_content_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11562225575e7d7996ac9655_07867636', 'page_footer_container', $this->tplIndex);
?>

    </section>
<?php
}
}
/* {/block 'content'} */
}
