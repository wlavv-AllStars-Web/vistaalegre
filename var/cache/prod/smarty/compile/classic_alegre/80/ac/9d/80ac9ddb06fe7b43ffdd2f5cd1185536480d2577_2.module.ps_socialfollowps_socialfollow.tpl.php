<?php
/* Smarty version 4.3.4, created on 2024-05-08 12:36:36
  from 'module:ps_socialfollowps_socialfollow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b63c4525ea0_77879507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollowps_socialfollow.tpl',
      1 => 1715090153,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b63c4525ea0_77879507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2007348283663b63c4525709_63386466', 'block_social');
?>

<?php }
/* {block 'block_social'} */
class Block_2007348283663b63c4525709_63386466 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_2007348283663b63c4525709_63386466',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <p>Siga-nos em</p>
    <ul>
              <li class="facebook-footer"><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a></li>
        <li class="instagram-footer"><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a></li>
        <li class="whatsapp-footer"><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-whatsapp"></i></a></li>
        <li class="email-footer"><a href="#" target="_blank" rel="noopener noreferrer"><i class="fa-regular fa-envelope"></i></a></li>
          </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
