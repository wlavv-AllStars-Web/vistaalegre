<?php
/* Smarty version 4.3.4, created on 2024-05-08 10:00:55
  from 'C:\xampp\htdocs\vistaalegre\themes\classic_alegre\templates\checkout\_partials\cart-detailed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b3f47048814_72558918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa820adfcd933d10341291d402c2faf4253931e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\themes\\classic_alegre\\templates\\checkout\\_partials\\cart-detailed.tpl',
      1 => 1715156511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed-product-line.tpl' => 1,
  ),
),false)) {
function content_663b3f47048814_72558918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1591729596663b3f47043ea8_88063923', 'cart_detailed_product');
?>

<?php }
/* {block 'cart_detailed_product_line'} */
class Block_2012187094663b3f47046034_48407479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
          <?php
}
}
/* {/block 'cart_detailed_product_line'} */
/* {block 'cart_detailed_product'} */
class Block_1591729596663b3f47043ea8_88063923 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_detailed_product' => 
  array (
    0 => 'Block_1591729596663b3f47043ea8_88063923',
  ),
  'cart_detailed_product_line' => 
  array (
    0 => 'Block_2012187094663b3f47046034_48407479',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vistaalegre\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <div class="cart-overview js-cart" data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('ajax'=>true,'action'=>'refresh')),$_smarty_tpl ) );?>
">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['products']) {?>
    <ul class="cart-items">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <li class="cart-item">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2012187094663b3f47046034_48407479', 'cart_detailed_product_line', $this->tplIndex);
?>

        </li>
        <?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['customizations']) > 1) {?><hr><?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php } else { ?>
      <div class="cart-no-products">
        <i class="fa-solid fa-bag-shopping"></i>
        <span class="no-items"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrinho de compras está vazio','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'cart_detailed_product'} */
}
