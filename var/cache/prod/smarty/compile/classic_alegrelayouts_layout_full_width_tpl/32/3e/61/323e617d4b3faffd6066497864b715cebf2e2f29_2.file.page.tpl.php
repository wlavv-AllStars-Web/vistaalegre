<?php
/* Smarty version 4.3.4, created on 2024-05-08 12:36:34
  from 'C:\xampp\htdocs\vistaalegre\themes\classic_alegre\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b63c2ce6108_88531666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '323e617d4b3faffd6066497864b715cebf2e2f29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\themes\\classic_alegre\\templates\\page.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b63c2ce6108_88531666 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1107453786663b63c2ce0695_53534415', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_393586032663b63c2ce14e9_80834722 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1464152018663b63c2ce0c38_96174310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_393586032663b63c2ce14e9_80834722', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_946950877663b63c2ce46b5_47524429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_985851311663b63c2ce4b94_80834813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1005977246663b63c2ce4357_25333859 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_946950877663b63c2ce46b5_47524429', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_985851311663b63c2ce4b94_80834813', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_420777308663b63c2ce57e7_58553782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2036787663b63c2ce54e9_23845346 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_420777308663b63c2ce57e7_58553782', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1107453786663b63c2ce0695_53534415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1107453786663b63c2ce0695_53534415',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1464152018663b63c2ce0c38_96174310',
  ),
  'page_title' => 
  array (
    0 => 'Block_393586032663b63c2ce14e9_80834722',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1005977246663b63c2ce4357_25333859',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_946950877663b63c2ce46b5_47524429',
  ),
  'page_content' => 
  array (
    0 => 'Block_985851311663b63c2ce4b94_80834813',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2036787663b63c2ce54e9_23845346',
  ),
  'page_footer' => 
  array (
    0 => 'Block_420777308663b63c2ce57e7_58553782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1464152018663b63c2ce0c38_96174310', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1005977246663b63c2ce4357_25333859', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2036787663b63c2ce54e9_23845346', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
