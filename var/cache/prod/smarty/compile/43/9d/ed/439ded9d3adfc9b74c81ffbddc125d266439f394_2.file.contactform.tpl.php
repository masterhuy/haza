<?php
/* Smarty version 3.1.33, created on 2020-03-27 04:07:21
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\modules\contactform\views\templates\widget\contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e7d7bf94634f6_34290591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439ded9d3adfc9b74c81ffbddc125d266439f394' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\modules\\contactform\\views\\templates\\widget\\contactform.tpl',
      1 => 1582866073,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7d7bf94634f6_34290591 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="contact-form">
    <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>enctype="multipart/form-data"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['notifications']->value) {?>
            <div class="col-xs-12 alert <?php if ($_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['messages'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
                    <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value, ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        <?php }?>
        <?php if (!$_smarty_tpl->tpl_vars['notifications']->value || $_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>
            <section class="form-fields row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-sm-12">
                    <div class="addon-title">
                        <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get In Touch','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
                    </div>
                </div>
                <div class="form-group col-md-6 col-sx-12">
                    <select name="id_contact" class="form-control form-control-select">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['contacts'], 'contact_elt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact_elt']->value) {
?>
                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_elt']->value['id_contact'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_elt']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
                <div class="form-group col-md-6 col-sx-12">
                    <input
                        class="form-control"
                        name="from"
                        type="email"
                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['email'], ENT_QUOTES, 'UTF-8');?>
"
                        placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email *','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
                    >
                </div>
                <?php if ($_smarty_tpl->tpl_vars['contact']->value['orders']) {?>
                    <div class="form-group col-md-12 col-sx-12">
                        <select name="id_order" class="form-control form-control-select">
                            <option value=""><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select reference','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value['orders'], 'order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['id_order'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>
                    <div class="form-group col-md-12 col-sx-12">
                        <input type="file" name="fileUpload" class="filestyle" data-buttonText="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                    </div>
                <?php }?>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea
                        class="form-control"
                        name="message"
                        placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message *','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
                        rows="3"
                    ><?php if ($_smarty_tpl->tpl_vars['contact']->value['message']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['message'], ENT_QUOTES, 'UTF-8');
}?></textarea>
                </div>
            </section>
            <footer class="form-footer">
                <style>
                input[name=url] {
                    display: none !important;
                }
                </style>
                <input type="text" name="url" value=""/>
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8');?>
" />
                <input class="btn-default send-message" type="submit" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
            </footer>
        <?php }?>
    </form>
</section>


<?php }
}
