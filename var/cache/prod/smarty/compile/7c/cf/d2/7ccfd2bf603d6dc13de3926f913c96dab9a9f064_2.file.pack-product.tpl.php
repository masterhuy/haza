<?php
/* Smarty version 3.1.33, created on 2020-03-05 06:35:34
  from 'D:\xamppp\htdocs\jms_haza\themes\jms_haza\templates\catalog\_partials\miniatures\pack-product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e609db63cc5a1_70545286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ccfd2bf603d6dc13de3926f913c96dab9a9f064' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_haza\\themes\\jms_haza\\templates\\catalog\\_partials\\miniatures\\pack-product.tpl',
      1 => 1569916434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e609db63cc5a1_70545286 (Smarty_Internal_Template $_smarty_tpl) {
?>
<tbody>
    <tr>
        <td class="d-flex" scope="row">
            <img
                src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"
                alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
            >
            <div class="pack-product-name">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

            </div>
        </td>
        <td>
            <div class="pack-product-price">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

            </div>
        </td>
        <td>
            <div class="pack-product-quantity">
                <span>x <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['pack_quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
            </div>
        </td>
    </tr>
</tbody>
           
        


<?php }
}
