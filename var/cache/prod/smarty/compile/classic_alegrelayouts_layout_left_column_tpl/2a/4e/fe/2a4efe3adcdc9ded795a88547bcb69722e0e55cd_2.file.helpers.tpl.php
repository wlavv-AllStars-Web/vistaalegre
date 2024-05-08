<?php
/* Smarty version 4.3.4, created on 2024-05-08 12:35:16
  from 'C:\xampp\htdocs\vistaalegre\themes\classic_alegre\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b6374e66031_87975159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a4efe3adcdc9ded795a88547bcb69722e0e55cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\themes\\classic_alegre\\templates\\_partials\\helpers.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b6374e66031_87975159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\vistaalegre\\var\\cache\\prod\\smarty\\compile\\classic_alegrelayouts_layout_left_column_tpl\\2a\\4e\\fe\\2a4efe3adcdc9ded795a88547bcb69722e0e55cd_2.file.helpers.tpl.php',
    'uid' => '2a4efe3adcdc9ded795a88547bcb69722e0e55cd',
    'call_name' => 'smarty_template_function_renderLogo_452345088663b6374e608a6_57769303',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_452345088663b6374e608a6_57769303 */
if (!function_exists('smarty_template_function_renderLogo_452345088663b6374e608a6_57769303')) {
function smarty_template_function_renderLogo_452345088663b6374e608a6_57769303(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_452345088663b6374e608a6_57769303 */
}
