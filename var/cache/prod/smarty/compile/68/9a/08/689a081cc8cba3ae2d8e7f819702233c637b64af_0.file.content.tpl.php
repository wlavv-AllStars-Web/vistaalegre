<?php
/* Smarty version 4.3.4, created on 2024-05-08 12:37:23
  from 'C:\xampp\htdocs\vistaalegre\adminvistaalegre\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b63f39c6083_22227886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '689a081cc8cba3ae2d8e7f819702233c637b64af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\adminvistaalegre\\themes\\new-theme\\template\\content.tpl',
      1 => 1711707471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b63f39c6083_22227886 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
