<?php
/* Smarty version 3.1.33, created on 2020-02-12 06:45:19
  from 'D:\xamppp\htdocs\jms_haza\modules\jmsthemesetting\views\templates\admin\settingform\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e439eff79b261_00974075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07154fbe471d4930fd3b1cfb679d949233ce5b5e' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\modules\\jmsthemesetting\\views\\templates\\admin\\settingform\\helpers\\form\\form.tpl',
      1 => 1578535570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e439eff79b261_00974075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4649819745e439eff59f569_66740974', "defaultForm");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6357971945e439eff5c6669_88076913', "legend");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15244668295e439eff5c6666_27799002', "footer");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16579959655e439eff5c6661_00360476', "fieldset");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8051151495e439eff5c6665_68793103', "input_row");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7498789035e439eff5ed763_60356492', "label");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15358985535e439eff5ed765_07229096', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "defaultForm"} */
class Block_4649819745e439eff59f569_66740974 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'defaultForm' => 
  array (
    0 => 'Block_4649819745e439eff59f569_66740974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="settingForm">
        <div class="panel-tabs">
            <ul id="jms-setting-tabs" class="jms-setting-tabs" role="tablist">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields']->value, 'fieldset', false, 'f');
$_smarty_tpl->tpl_vars['fieldset']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f']->value => $_smarty_tpl->tpl_vars['fieldset']->value) {
$_smarty_tpl->tpl_vars['fieldset']->index++;
$_smarty_tpl->tpl_vars['fieldset']->first = !$_smarty_tpl->tpl_vars['fieldset']->index;
$__foreach_fieldset_0_saved = $_smarty_tpl->tpl_vars['fieldset'];
?>
                    <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['child'])) {?>
                        <li class="tab<?php if ($_smarty_tpl->tpl_vars['fieldset']->first) {?> active<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?> haschild<?php }?>">
                            <a href="#<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
" role="tab" <?php if (!isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>data-toggle="tab"<?php }?>>
                                <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['heading_icon'])) {?>
                                <i class="material-icons ps-heading-icon"><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['heading_icon'];?>
</i>
                                <?php }?>
                                <span><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['title'];?>
</span>
                                <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?><i class="material-icons ps-togglable-row">keyboard_arrow_down</i><?php }?>
                            </a>
                            <?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'])) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fieldset']->value['form']['childForms'], 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                                        <li class="tab tab-child"><a href="#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </ul>
                            <?php }?>

                        </li>
                    <?php }?>
                <?php
$_smarty_tpl->tpl_vars['fieldset'] = $__foreach_fieldset_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <div class="tab-content jms-setting-panels">
            <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

        </div>
        <input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_url']->value,'html','UTF-8' ));?>
" id="jms-base-url"/>
        <input type="hidden" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['root_url']->value,'html','UTF-8' ));?>
" id="jms-root-url"/>
    </div>
<?php
}
}
/* {/block "defaultForm"} */
/* {block "legend"} */
class Block_6357971945e439eff5c6669_88076913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'legend' => 
  array (
    0 => 'Block_6357971945e439eff5c6669_88076913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "legend"} */
/* {block "footer"} */
class Block_15244668295e439eff5c6666_27799002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_15244668295e439eff5c6666_27799002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <!--<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>
-->
<?php
}
}
/* {/block "footer"} */
/* {block "fieldset"} */
class Block_16579959655e439eff5c6661_00360476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'fieldset' => 
  array (
    0 => 'Block_16579959655e439eff5c6661_00360476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div role="tabpanel" class="tab-panel <?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'] == 'jms-general-layout') {?>active<?php }?>"
         id="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['legend']['id'];?>
">
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    </div>
<?php
}
}
/* {/block "fieldset"} */
/* {block "input_row"} */
class Block_8051151495e439eff5c6665_68793103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_8051151495e439eff5c6665_68793103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['group_start'])) {?><div class="group-fields clearfix"><div class="col-lg-3"></div><div class="col-lg-9"><?php }?>
    <div class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>condition-setting hide-setting<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['condition'])) {?>data-condition='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['condition'] ));?>
'<?php }?>>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'title_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])) {?>
            <div class="col-lg-12 title-reparator"><div class="col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
</div></div><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'info_text') {?>
    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])) {?><p class="alert alert-info col-lg-offset-3"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'subtitle_separator') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['border_top'])) {?>
            <hr>
        <?php }?>
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9 subtitle-reparator"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }?>
    </div>
    <?php if (isset($_smarty_tpl->tpl_vars['input']->value['group_end'])) {?></div></div><?php }
}
}
/* {/block "input_row"} */
/* {block "label"} */
class Block_7498789035e439eff5ed763_60356492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_7498789035e439eff5ed763_60356492',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "label"} */
/* {block "input"} */
class Block_15358985535e439eff5ed765_07229096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_15358985535e439eff5ed765_07229096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xamppp\\htdocs\\jms_haza\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'switch-label') {?>
        <div class="col-lg-9">
            <span class="switch switch-label prestashop-switch fixed-width-<?php echo $_smarty_tpl->tpl_vars['input']->value['width'];?>
">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
              <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }
if (isset($_smarty_tpl->tpl_vars['input']->value['class']) && $_smarty_tpl->tpl_vars['input']->value['class']) {?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == $_smarty_tpl->tpl_vars['value']->value['value']) {?> checked="checked"<?php }
if ((isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) || (isset($_smarty_tpl->tpl_vars['value']->value['disabled']) && $_smarty_tpl->tpl_vars['value']->value['disabled'])) {?> disabled="disabled"<?php }?>/>
              <label <?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"<?php } else { ?> for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"<?php }?>><?php if ($_smarty_tpl->tpl_vars['value']->value['value'] == 1) {
echo $_smarty_tpl->tpl_vars['value']->value['label'];
} else {
echo $_smarty_tpl->tpl_vars['value']->value['label'];
}?></label>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <a class="slide-button btn"></a>
            </span>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'import') {?>
        <div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Upload your setting to save time','mod'=>'jmsthemesetting'),$_smarty_tpl ) );?>
  </div>
        <div style="display:inline-block;"><input type="file" id="settingFile" name="settingFile"/></div>
        <button type="submit" class="btn btn-default btn-lg" id="importSetting" name="importSetting" value="1"><span class="icon icon-upload"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import','mod'=>'jmsthemesetting'),$_smarty_tpl ) );?>
</button>

    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'export') {?>
        <div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download currently setting to backup setting.','mod'=>'jmsthemesetting'),$_smarty_tpl ) );?>
  </div>
        <a class="btn btn-default btn-lg"
               href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_link']->value,'html','UTF-8' ));?>
&ajax=1&action=exportSetting"><span
                        class="icon icon-share"></span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export to file','mod'=>'jmsthemesetting'),$_smarty_tpl ) );?>
 </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'icon-select') {?>
        <div class="image-select image-select-horizonal icon-image-select">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_3_saved = $_smarty_tpl->tpl_vars['option'];
?>
                <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                       name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
"
                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == '') {
if ($_smarty_tpl->tpl_vars['option']->index == 0) {?> checked<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option'] == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
                <div class="image-option">
                    <i class="ptw-icon <?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
"></i>
                    <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</span>
                </div>
            <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'google-font') {?>
        <?php $_smarty_tpl->_assignInScope('font_weightstyles', null);?>
        <?php $_smarty_tpl->_assignInScope('fonts', $_smarty_tpl->tpl_vars['input']->value['fonts']);?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fonts']->value, 'font');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['font']->value) {
?>
            <?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['family']) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['family'] == $_smarty_tpl->tpl_vars['font']->value['family']) {?>
                <?php $_smarty_tpl->_assignInScope('font_weightstyles', $_smarty_tpl->tpl_vars['font']->value['variants']);?>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (!isset($_smarty_tpl->tpl_vars['font_weightstyles']->value)) {?>
            <?php $_smarty_tpl->_assignInScope('font_weightstyles', $_smarty_tpl->tpl_vars['fonts']->value[0]['variants']);?>
        <?php }?>
        <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="g-font-family fixed-width-xl">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fonts']->value, 'font');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['font']->value) {
?>
                <option value="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['font']->value['family'],' ','+');?>
"<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['family']) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['family'] == $_smarty_tpl->tpl_vars['font']->value['family']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['font']->value['family'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_weightstyle[]" class="g-font-weight fixed-width-xl" multiple="multiple">
            <?php if (isset($_smarty_tpl->tpl_vars['font_weightstyles']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['font_weightstyles']->value, 'font_weightstyle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['font_weightstyle']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['font_weightstyle']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['weightstyle']) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['weightstyle'] && in_array($_smarty_tpl->tpl_vars['font_weightstyle']->value,$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]['weightstyle'])) {?>
selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['font_weightstyle']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>
        <div class="text-preview">1 2 3 4 5 6 7 8 9 0 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'background-img') {?>
        <?php $_smarty_tpl->_assignInScope('bgimg_val', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
        <div class="form-group">
            <div class="col-lg-10">
                <div class="row">
                    <div class="input-group">
                        <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bgimg_val']->value['image'],'html','UTF-8' ));?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                                           class="js-dialog-upload"
                                                           data-input-name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                                           type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'jmsthemesetting'),$_smarty_tpl ) );?>
 <i
                                        class="icon-external-link"></i></a></span>
                    </div>

                </div>
            </div>
        </div>
        <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
            <div class="field-group">
                <div class="field-group-content">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_size">
                    <option value="inherit" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['size']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['size'] == 'inherit') {?> selected="selected"<?php }?>>inherit</option>
                    <option value="auto" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['size']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['size'] == 'auto') {?> selected="selected"<?php }?>>auto</option>
                    <option value="length" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['size']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['size'] == 'length') {?> selected="selected"<?php }?>>length</option>
                    <option value="cover" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['size']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['size'] == 'cover') {?> selected="selected"<?php }?>>cover</option>
                    <option value="contain" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['size']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['size'] == 'contain') {?> selected="selected"<?php }?>>contain</option>
                </select>
                </div>
                <label>Size</label>
            </div>
            <div class="field-group">
                <div class="field-group-content">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_position">
                    <option value="left top" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'left top') {?> selected="selected"<?php }?>>left top</option>
                    <option value="left center" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'left center') {?> selected="selected"<?php }?>>left center</option>
                    <option value="left bottom" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'left bottom') {?> selected="selected"<?php }?>>left bottom</option>
                    <option value="right top" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'right top') {?> selected="selected"<?php }?>>right top</option>
                    <option value="right center" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'right center') {?> selected="selected"<?php }?>>right center</option>
                    <option value="right bottom" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'right bottom') {?> selected="selected"<?php }?>>right bottom</option>
                    <option value="center top" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'center top') {?> selected="selected"<?php }?>>center top</option>
                    <option value="center center" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'center center') {?> selected="selected"<?php }?>>center center</option>
                    <option value="center bottom" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['position']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['position'] == 'center bottom') {?> selected="selected"<?php }?>>center bottom</option>
                </select>
                </div>
                <label>Position</label>
            </div>
            <div class="field-group">
                <div class="field-group-content">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_repeat">
                    <option value="inherit" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['repeat']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['repeat'] == 'inherit') {?> selected="selected"<?php }?>>inherit</option>
                    <option value="no-repeat" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['repeat']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['repeat'] == 'no-repeat') {?> selected="selected"<?php }?>>no-repeat</option>
                    <option value="repeat" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['repeat']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['repeat'] == 'repeat') {?> selected="selected"<?php }?>>repeat</option>
                    <option value="repeat-x" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['repeat']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['repeat'] == 'repeat-x') {?> selected="selected"<?php }?>>repeat-x</option>
                    <option value="repeat-y" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['repeat']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['repeat'] == 'repeat-y') {?> selected="selected"<?php }?>>repeat-y</option>
                </select>
                </div>
                <label>Repeat</label>
            </div>
            <div class="field-group">
                <div class="field-group-content">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_attachment">
                    <option value="inherit" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['attachment']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['attachment'] == 'inherit') {?> selected="selected"<?php }?>>inherit</option>
                    <option value="local" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['attachment']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['attachment'] == 'local') {?> selected="selected"<?php }?>>local</option>
                    <option value="fixed" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['attachment']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['attachment'] == 'fixed') {?> selected="selected"<?php }?>>fixed</option>
                    <option value="scroll" <?php if (isset($_smarty_tpl->tpl_vars['bgimg_val']->value['attachment']) && $_smarty_tpl->tpl_vars['bgimg_val']->value['attachment'] == 'scroll') {?> selected="selected"<?php }?>>scroll</option>
                </select>
                </div>
                <label>Attachment</label>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'text-group') {?>
      		<div class="input-field input-group row">
      				<input type="number" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?> value="<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][0]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][0]) {
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][0];
}?>" />
      				<input type="number" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?> value="<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][1]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][1]) {
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][1];
}?>" />
      				<input type="number" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?> value="<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][2]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][2]) {
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][2];
}?>" />
      				<input type="number" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?> value="<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][3]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][3]) {
echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][3];
}?>" />
      				<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
      				<span class="input-group-addon">
      					<?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

      				</span>
      				<?php }?>
      		</div>
      		<div class="input-label row">
            <?php if (isset($_smarty_tpl->tpl_vars['input']->value['fieldtype']) && $_smarty_tpl->tpl_vars['input']->value['fieldtype'] == 'border-radius') {?>
              <span>Top-Left</span>
              <span>Top-Right</span>
              <span>Bottom-Right</span>
              <span>Botton-Left</span>
            <?php } else { ?>
      				<span>Top</span>
      				<span>Right</span>
      				<span>Bottom</span>
      				<span>Left</span>
            <?php }?>
      		</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkbox2') {?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('id_checkbox', (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]));?>
            <div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']) && strtolower($_smarty_tpl->tpl_vars['input']->value['expand']['default']) == 'show') {?> hidden<?php }?>">
              <label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])) {?> value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['val'],'html','UTF-8' ));?>
"<?php }
if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] && in_array($_smarty_tpl->tpl_vars['value']->value['val'],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>checked="checked"<?php }?> /><?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>
</label>
            </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'range') {?>
        <div class="form-group">
            <div class="col-lg-5">
                <div class="row">
                    <div class="input-group input-group-range">
                        <input type="range"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s"
                               data-vinput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value"
                               class="js-scss-ignore js-range-slider range-slider"/>
                        <input type="number"
                               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                               oninput="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_s.value = <?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
.value"
                               class="form-control width-70 js-range-slider-val"/>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'number') {?>
        <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix']) || isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>
</span>
        <?php }?>
        <input type="number"
               name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
               id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>"
               value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format']) && $_smarty_tpl->tpl_vars['input']->value['string_format']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
}?>"
               class="form-control <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>"
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])) {?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['min'])) {?> min="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['min']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['max'])) {?> max="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['max']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['step'])) {?> step="<?php echo floatval($_smarty_tpl->tpl_vars['input']->value['step']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar']) && $_smarty_tpl->tpl_vars['input']->value['maxchar']) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxchar']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength']) && $_smarty_tpl->tpl_vars['input']->value['maxlength']) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['input']->value['maxlength']);?>
"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly']) && $_smarty_tpl->tpl_vars['input']->value['readonly']) {?> readonly="readonly"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled']) && $_smarty_tpl->tpl_vars['input']->value['disabled']) {?> disabled="disabled"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete']) && !$_smarty_tpl->tpl_vars['input']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required']) && $_smarty_tpl->tpl_vars['input']->value['required']) {?> required="required" <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder']) && $_smarty_tpl->tpl_vars['input']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
        />
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix']) || isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
            </div>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'border') {?>
        <?php $_smarty_tpl->_assignInScope('border_val', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
        <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
            <div class="field-group">
                <div class="field-group-content">
                    <input type="number"
                   id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_width"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['border_val']->value['width'])) {
echo $_smarty_tpl->tpl_vars['border_val']->value['width'];
}?>"
                   data-name="width"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_width"
                   class="form-control border-width input-width-70"
                   step="1"
                    size="10"
                    />
                  <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
                      <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
                  <?php }?>
                </div>
                <label>Width</label>
            </div>
            <div class="field-group">
                <div class="field-group-content">
                <select class="border-style" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_style">
                  <option value="" <?php if (isset($_smarty_tpl->tpl_vars['border_val']->value['style']) && $_smarty_tpl->tpl_vars['border_val']->value['style'] == '') {?> selected="selected"<?php }?>></option>
                    <option value="none" <?php if (isset($_smarty_tpl->tpl_vars['border_val']->value['style']) && $_smarty_tpl->tpl_vars['border_val']->value['style'] == 'none') {?> selected="selected"<?php }?>>None</option>
                    <option value="solid" <?php if (isset($_smarty_tpl->tpl_vars['border_val']->value['style']) && $_smarty_tpl->tpl_vars['border_val']->value['style'] == 'solid') {?> selected="selected"<?php }?>>Solid</option>
                    <option value="dotted" <?php if (isset($_smarty_tpl->tpl_vars['border_val']->value['style']) && $_smarty_tpl->tpl_vars['border_val']->value['style'] == 'dotted') {?> selected="selected"<?php }?>>Dotted</option>
                    <option value="dashed" <?php if (isset($_smarty_tpl->tpl_vars['border_val']->value['style']) && $_smarty_tpl->tpl_vars['border_val']->value['style'] == 'dashed') {?> selected="selected"<?php }?>>Dashed</option>
                </select>
                </div>
                <label>Style</label>
            </div>
            <div class="field-group">
                <div class="field-group-content">
    											<div class="input-group">
    												<input type="color"
    												data-hex="true"
    												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> class="border-color"
    												<?php } else { ?> class="color mColorPickerInput"<?php }?>
    												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_color"
    												value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['border_val']->value['color'],'html','UTF-8' ));?>
" />
    											</div>

                </div>
                <label>Color</label>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'fontstyle') {?>
        <?php $_smarty_tpl->_assignInScope('fontstyle_val', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]);?>
        <div class="input-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {?> <?php echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
            <div class="field-group">
                <div class="field-group-content">
                    <input type="number"
                   id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])) {
echo $_smarty_tpl->tpl_vars['input']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['input']->value['name'];
}?>_size"
                   value="<?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['size'])) {
echo $_smarty_tpl->tpl_vars['fontstyle_val']->value['size'];
}?>"
                   data-name="size"
                   name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_size"
                   class="form-control input-width-70"
                   step="1"
                    size="10"
                    />
                  <?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])) {?>
                      <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
</span>
                  <?php }?>
                </div>
                <label>Size</label>
            </div>
            <div class="field-group">
                <div class="field-group-content">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_weight">
                    <option value="" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '') {?> selected="selected"<?php }?>></option>
                    <option value="200" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '200') {?> selected="selected"<?php }?>>200</option>
                    <option value="300" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '300') {?> selected="selected"<?php }?>>300</option>
                    <option value="400" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '400') {?> selected="selected"<?php }?>>400</option>
                    <option value="500" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '500') {?> selected="selected"<?php }?>>500</option>
                    <option value="600" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '600') {?> selected="selected"<?php }?>>600</option>
                    <option value="700" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '700') {?> selected="selected"<?php }?>>700</option>
                    <option value="800" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '800') {?> selected="selected"<?php }?>>800</option>
                    <option value="900" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['weight']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['weight'] == '900') {?> selected="selected"<?php }?>>900</option>
                </select>
                </div>
                <label>Weight</label>
            </div>
            <div class="field-group">
                <div class="field-group-content">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_style">
                    <option value="normal" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['style']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['style'] == 'normal') {?> selected="selected"<?php }?>>Normal</option>
                    <option value="italic" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['style']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['style'] == 'italic') {?> selected="selected"<?php }?>>Italic</option>
                    <option value="oblique" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['style']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['style'] == 'oblique') {?> selected="selected"<?php }?>>Oblique</option>
                </select>
                </div>
                <label>Style</label>
            </div>
            <div class="field-group">
                <div class="field-group-content">
                <select name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_transform">
                    <option value="capitalize" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['style']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['transform'] == 'capitalize') {?> selected="selected"<?php }?>>Capitalize</option>
                    <option value="uppercase" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['style']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['transform'] == 'uppercase') {?> selected="selected"<?php }?>>Uppercase</option>
                    <option value="lowercase" <?php if (isset($_smarty_tpl->tpl_vars['fontstyle_val']->value['style']) && $_smarty_tpl->tpl_vars['fontstyle_val']->value['transform'] == 'lowercase') {?> selected="selected"<?php }?>>Lowercase</option>
                </select>
                </div>
                <label>Transform</label>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'file-dialog') {?>
        <div class="form-group">
            <div class="col-lg-10">
                <div class="row">
                    <div class="input-group">
                        <input type="text" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                               class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"/>
                        <span class="input-group-addon"><a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                                           class="js-dialog-upload"
                                                           data-input-name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','UTF-8' ));?>
"
                                                           type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'jmsthemesetting'),$_smarty_tpl ) );?>
 <i
                                        class="icon-external-link"></i></a></span>
                    </div>

                </div>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'image-select') {?>
        <div class="image-select <?php if (isset($_smarty_tpl->tpl_vars['input']->value['direction'])) {?> image-select-<?php echo $_smarty_tpl->tpl_vars['input']->value['direction'];
}?>">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->index++;
$__foreach_option_8_saved = $_smarty_tpl->tpl_vars['option'];
?>
                <input id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
-<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" type="radio"
                       name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'html','utf-8' ));?>
"
                       value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id_option'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']] == '') {
if ($_smarty_tpl->tpl_vars['option']->index == 0) {?> checked<?php }
}?> <?php if ($_smarty_tpl->tpl_vars['option']->value['id_option'] == $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]) {?>checked<?php }?> />
                <div class="image-option">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
modules/jmsthemesetting/views/img/<?php echo $_smarty_tpl->tpl_vars['option']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
"
                         class="img-responsive"/>
                    <span class="image-option-title"><?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>
</span>
                </div>
            <?php
$_smarty_tpl->tpl_vars['option'] = $__foreach_option_8_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
