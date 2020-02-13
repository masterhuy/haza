<?php
/* Smarty version 3.1.33, created on 2020-02-13 07:18:58
  from 'module:jmsajaxsearchviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e44f862bb14c6_93899258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0212f65b6a72e5e080452a1a5be405c359ac20ff' => 
    array (
      0 => 'module:jmsajaxsearchviewstemplat',
      1 => 1580889056,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e44f862bb14c6_93899258 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="search-form" class="search-form">
    <?php $_smarty_tpl->_assignInScope('str_at', strpos($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon'],"_"));?>
    <?php if ($_smarty_tpl->tpl_vars['str_at']->value && $_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon_thickness']) {?>
        <?php $_smarty_tpl->_assignInScope('search_icon', substr($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon'],0,($_smarty_tpl->tpl_vars['str_at']->value)));?>
        <?php $_smarty_tpl->_assignInScope('search_icon', ($_smarty_tpl->tpl_vars['search_icon']->value).($_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon_thickness']));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('search_icon', $_smarty_tpl->tpl_vars['jmsSetting']->value['search_icon']);?>
    <?php }?>
    <div class="search-box">
		<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="search-box">
            <input type="hidden" name="controller" value="search" />
            <input type="hidden" name="orderby" value="position" />
            <input type="hidden" name="orderway" value="desc" />
            <div class="input-group">
    			<input type="text" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for products, brands,...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="jms-search-input form-control search-input type-1" />
                <input type="text" name="search_query" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl ) );?>
" class="jms-search-input form-control search-input type-2" />
                <button type="submit" name="submit_search" class="button-search">
                    <i class="far fa-search"></i>
                </button>
            </div>
		</form>
		<div class="search-result-area"></div>
    </div>
</div>
<?php }
}
