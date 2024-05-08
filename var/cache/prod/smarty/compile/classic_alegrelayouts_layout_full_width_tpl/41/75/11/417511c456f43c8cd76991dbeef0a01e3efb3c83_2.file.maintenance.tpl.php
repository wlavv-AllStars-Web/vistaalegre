<?php
/* Smarty version 4.3.4, created on 2024-05-08 12:15:47
  from 'C:\xampp\htdocs\vistaalegre\themes\classic_alegre\templates\errors\maintenance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b5ee3532584_70293265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '417511c456f43c8cd76991dbeef0a01e3efb3c83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\themes\\classic_alegre\\templates\\errors\\maintenance.tpl',
      1 => 1715005364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b5ee3532584_70293265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202270610663b5ee352cc34_98464565', 'content');
?>


<style>

</style><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-error.tpl');
}
/* {block 'page_header_logo'} */
class Block_1315472717663b5ee352d563_28529680 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="logo"><img src="/img/vistaalegre.webp" alt="logo" loading="lazy"></div>
        <div class="email"><i class="fa-solid fa-envelope"></i>info@vistaalegre-valenca.com</div>
        <?php
}
}
/* {/block 'page_header_logo'} */
/* {block 'hook_maintenance'} */
class Block_177046555663b5ee352dce9_08149541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

        <?php
}
}
/* {/block 'hook_maintenance'} */
/* {block 'page_header'} */
class Block_1727189597663b5ee3530861_70424310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_815375110663b5ee352d196_21717054 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <header class="page-header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1315472717663b5ee352d563_28529680', 'page_header_logo', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177046555663b5ee352dce9_08149541', 'hook_maintenance', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1727189597663b5ee3530861_70424310', 'page_header', $this->tplIndex);
?>

      </header>
    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_186544043663b5ee35315a5_14908920 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <h1>Brevemente</h1>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1974130281663b5ee3531269_07366658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content page-maintenance">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186544043663b5ee35315a5_14908920', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_1335712243663b5ee3531da4_96485869 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="footer_maintenance">
        <div class="brands-logo"><img src="/img/Cutipol.webp" /></div>
        <div class="brands-logo"><img src="/img/BordalloPinheiro.webp" /></div>
        <div class="brands-logo"><img src="/img/catelbel.webp" /></div>
        <div class="brands-logo"><img src="/img/vistaalegre.webp" /></div>
      </div>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_202270610663b5ee352cc34_98464565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_202270610663b5ee352cc34_98464565',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_815375110663b5ee352d196_21717054',
  ),
  'page_header_logo' => 
  array (
    0 => 'Block_1315472717663b5ee352d563_28529680',
  ),
  'hook_maintenance' => 
  array (
    0 => 'Block_177046555663b5ee352dce9_08149541',
  ),
  'page_header' => 
  array (
    0 => 'Block_1727189597663b5ee3530861_70424310',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_1974130281663b5ee3531269_07366658',
  ),
  'page_content' => 
  array (
    0 => 'Block_186544043663b5ee35315a5_14908920',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1335712243663b5ee3531da4_96485869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_815375110663b5ee352d196_21717054', 'page_header_container', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1974130281663b5ee3531269_07366658', 'page_content_container', $this->tplIndex);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1335712243663b5ee3531da4_96485869', 'page_footer_container', $this->tplIndex);
?>


  </section>


<?php
}
}
/* {/block 'content'} */
}
