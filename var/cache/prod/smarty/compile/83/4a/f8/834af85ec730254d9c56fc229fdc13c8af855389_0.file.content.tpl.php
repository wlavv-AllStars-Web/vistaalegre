<?php
/* Smarty version 4.3.4, created on 2024-05-08 09:42:22
  from 'C:\xampp\htdocs\vistaalegre\adminvistaalegre\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b3aee78f1b5_09308787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '834af85ec730254d9c56fc229fdc13c8af855389' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\adminvistaalegre\\themes\\default\\template\\content.tpl',
      1 => 1711707471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b3aee78f1b5_09308787 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
