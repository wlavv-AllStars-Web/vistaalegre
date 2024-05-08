<?php
/* Smarty version 4.3.4, created on 2024-05-08 12:15:18
  from 'C:\xampp\htdocs\vistaalegre\adminvistaalegre\themes\default\template\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b5ec69810f7_94151631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be56cca2d07031dd13c90ea103c8bca8474e5196' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\adminvistaalegre\\themes\\default\\template\\footer.tpl',
      1 => 1711707471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:error.tpl' => 1,
  ),
),false)) {
function content_663b5ec69810f7_94151631 (Smarty_Internal_Template $_smarty_tpl) {
?>         <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminEndContent'),$_smarty_tpl ) );?>

	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
<div id="footer" class="bootstrap">
	<div class="col-sm-12">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayBackOfficeFooter"),$_smarty_tpl ) );?>

	</div>
</div>
<?php }
if ((isset($_smarty_tpl->tpl_vars['php_errors']->value))) {?>
	<?php $_smarty_tpl->_subTemplateRender("file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['modals']->value))) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }
}
