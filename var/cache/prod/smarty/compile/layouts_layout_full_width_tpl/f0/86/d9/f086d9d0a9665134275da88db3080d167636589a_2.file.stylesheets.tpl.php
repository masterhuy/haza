<?php
/* Smarty version 3.1.33, created on 2019-12-06 10:25:30
  from '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dea2c9aef3524_11495311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f086d9d0a9665134275da88db3080d167636589a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop17/pagebuilder40/themes/jms_kasos/templates/_partials/stylesheets.tpl',
      1 => 1575451762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dea2c9aef3524_11495311 (Smarty_Internal_Template $_smarty_tpl) {
?> <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/bootstrap.min.css" />
<link rel="stylesheet" href="//maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<?php if ($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font'] == 'google' && isset($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font_google'])) {?>
    <link href="https://fonts.googleapis.com/css?family=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font_google'], ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font_google_weightstyle'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['body_font'] == 'fontface' && isset($_smarty_tpl->tpl_vars['jmsSetting']->value['body_fontface_css'])) {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/jmsthemesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['body_fontface_css'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font'] == 'google' && isset($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font_google'])) {?>
    <link href="https://fonts.googleapis.com/css?family=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font_google'], ENT_QUOTES, 'UTF-8');?>
:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font_google_weightstyle'], ENT_QUOTES, 'UTF-8');?>
&display=swap" rel="stylesheet">
<?php } elseif ($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_font'] == 'fontface' && isset($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_fontface_css'])) {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/jmsthemesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['heading_fontface_css'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }
if ($_smarty_tpl->tpl_vars['jmsSetting']->value['body_icon_font'] != '') {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
/modules/jmsthemesetting/views/fonts/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jmsSetting']->value['body_icon_font'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
<?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
<style>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

</style>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
