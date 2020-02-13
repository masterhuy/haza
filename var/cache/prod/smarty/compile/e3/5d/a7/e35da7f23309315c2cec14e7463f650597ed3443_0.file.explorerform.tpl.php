<?php
/* Smarty version 3.1.33, created on 2020-02-13 09:37:11
  from 'D:\xamppp\htdocs\jms_haza\modules\jmspagebuilder\views\templates\admin\jmspagebuilder_media\explorerform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4518c7a6dda8_86003421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e35da7f23309315c2cec14e7463f650597ed3443' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmspagebuilder\\views\\templates\\admin\\jmspagebuilder_media\\explorerform.tpl',
      1 => 1569916432,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4518c7a6dda8_86003421 (Smarty_Internal_Template $_smarty_tpl) {
?><form name="adminForm" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8' ));?>
" method="post" enctype="multipart/form-data">
<div class="explorer-form">		
	<div class="col-sm-12 row">						
		<div class="media-form path-form">
			<i class="icon-folder-open"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Path','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
 : <?php if ($_smarty_tpl->tpl_vars['root_folder']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_folder']->value,'htmlall','UTF-8' ));
}
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8' ));?>
			
			<div class="pull-right">
				<a class="btn-insert" onclick="window.parent.document.getElementById('jms-image-' + <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8' ));?>
).value = document.getElementById('i_url').value; window.parent.document.getElementById('media-preview-' + <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8' ));?>
).src = document.getElementById('root-url').value + document.getElementById('i_url').value; window.parent.jQuery.fancybox.close();">Insert</a>
			</div>
		</div>
		<div class="media-list col-sm-12">
			<?php if ($_smarty_tpl->tpl_vars['current_folder']->value) {?>
			<div class="media-box">				
				<div class="thumb-icon"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8' ));?>
&current_folder=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['previous_folder']->value,'htmlall','UTF-8' ));?>
"><i class="icon-level-up"></i></a></div>
				<div class="name"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8' ));?>
&current_folder=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['previous_folder']->value,'htmlall','UTF-8' ));?>
&fid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8' ));?>
">..</a></div>
			</div>	
			<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['folders']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['folders']->value, 'folder');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['folder']->value) {
?>			
			<div class="media-box">				
				<div class="thumb-icon"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8' ));?>
&current_folder=<?php if ($_smarty_tpl->tpl_vars['current_folder']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8' ));?>
/<?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['folder']->value['name'],'htmlall','UTF-8' ));?>
"><i class="icon-folder-open"></i></a></div>
				<div class="name"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmspagebuilderMedia'),'html','UTF-8' ));?>
&current_folder=<?php if ($_smarty_tpl->tpl_vars['current_folder']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8' ));?>
/<?php }
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['folder']->value['name'],'htmlall','UTF-8' ));?>
&fid=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['folder']->value['name'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['folder']->value['name'],'htmlall','UTF-8' )),12 ));?>
</a></div>				
			</div>	
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['files']->value)) {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['files']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>			
			<div class="media-box">				
				<div class="thumb-icon">
					<?php if ($_smarty_tpl->tpl_vars['file']->value['type'] == 'jpg' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'png' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'jpeg' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'gif') {?>
						<a class="img-thumb" onclick="document.getElementById('i_url').value = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_folder']->value,'htmlall','UTF-8' ));?>
' + '<?php if ($_smarty_tpl->tpl_vars['current_folder']->value) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8' ));?>
/<?php }?>' + '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8' ));?>
';" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8' ));?>
"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file_url']->value,'htmlall','UTF-8' ));
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8' ));?>
/<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8' ));?>
" /></a>					
					<?php }?>	
				</div>
				<div class="name"><a title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['file']->value['name'],'htmlall','UTF-8' )),12 ));?>
</a></div>					
			</div>	
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
		</div>
		<div class="media-form url-form">
			<label>Image Url : <input type="text" id="i_url" />
		</div>
		<div class="media-form upload-form">			
			<input type="file" name="newfile" />
			<button name="submitImage" id="upload-file" class="btn btn-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload File','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
</button> <span>(<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Maximum Size','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl ) );?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ini_get('upload_max_filesize'),'htmlall','UTF-8' ));?>
B)</span>
		</div>
	</div>
</div>
<input type="hidden" name="current_folder" id="current-folder" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_folder']->value,'htmlall','UTF-8' ));?>
" />
<input type="hidden" name="root_url" id="root-url" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'htmlall','UTF-8' ));?>
" />
<input type="hidden" name="fid" id="fid" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fid']->value,'htmlall','UTF-8' ));?>
" />
</form>
<style type="text/css">
.media-box {
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px #ccc;
    cursor: pointer;
    float: left;
    height: 70px;
    margin-bottom: 20px;
    margin-right: 20px;
    text-align: center;
    width: 90px;
	cursor: pointer;
    text-align: center;
	background:#efefef;
	padding:10px 0px;
}
.thumb-icon i {
    font-size: 30px;
}
.thumb-icon .img-thumb img {
    height: 50px;
    width: 60px;
}
.media-form {
	background: #fff none repeat scroll 0 0;
    border:1px solid #ccc;
    height: 30px;
    position: fixed;    
    width: 562px;
	padding:10px;
}

.path-form {
	top: 0;
}
.url-form {
	bottom: 60px;
}
.upload-form {
	bottom: 0px;
}
.media-list {
    height: 300px;
    margin-top: 70px;
    overflow-y: auto;
}
.pull-right {
	float:right;
}
#i_url {
	line-height:30px;
	width:300px;
}
.btn-insert {
    background: #428bca none repeat scroll 0 0;
    border-radius: 2px;
    color: #fff;
    cursor: pointer;
    font-size: 13px;
    padding: 5px 10px;
    text-transform: uppercase;
}
</style><?php }
}
