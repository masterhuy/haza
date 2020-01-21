<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:31
  from 'module:jmsajaxsearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9b515fc3_39862417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08da474ae4e0f9e2907410f189dd0ce13a1ed390' => 
    array (
      0 => 'module:jmsajaxsearchviewstemplat',
      1 => 1575269495,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea2c9b515fc3_39862417 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="search-form-full" class="search-form search-overlay<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['search_box_type']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['search_box_type'], ENT_QUOTES, 'UTF-8');
}?>">
    <?php $_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon'],"_"));?>
    <?php if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon_thickness']) {?>
      <?php $_smarty_tpl->_assignInScope('search_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
      <?php $_smarty_tpl->_assignInScope('search_icon', ($_smarty_tpl->tpl_vars['search_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon_thickness']));?>
    <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('search_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon']);?>
    <?php }?>
		<div class="search-box">
			<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
        <div class="input-group">
    				<input type="text" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search everything...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="jms-search-input form-control search-input" />
    				<button type="submit" name="submit_search" class="button-search">
    					<i class="ptw-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
    				</button>
        </div>
			</form>
			<div class="search-result-area"></div>
      <a class="search-box-close">
			     <i class="fa fa-times-circle-o"></i>
		  </a>
		</div>
</div>
<?php }
}
