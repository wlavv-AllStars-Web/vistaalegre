<?php
/* Smarty version 4.3.4, created on 2024-05-08 12:36:34
  from 'C:\xampp\htdocs\vistaalegre\themes\classic_alegre\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b63c2bf79e6_64298943',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bca9a725e1601a6c133ac2b5f2220f583eefc28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\themes\\classic_alegre\\templates\\index.tpl',
      1 => 1715091219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b63c2bf79e6_64298943 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149304828663b63c2bf5064_60097295', 'page_content_container');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1439014141663b63c2bf5428_13116011 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1905057149663b63c2bf5d23_94830397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            
            <div class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="homepage-slider">
                    <div class="brands-homepage">
                      <div class="brands-logo"><img src="/img/Cutipol.webp" /></div>
                      <div class="brands-logo"><img src="/img/BordalloPinheiro.webp" /></div>
                      <div class="brands-logo"><img src="/img/catelbel.webp" /></div>
                      <div class="brands-logo"><img src="/img/vistaalegre.webp" /></div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide footer-slide">
                  <div class="footer-homepage">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooter",'mod'=>"ps_emailsubscription"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooter",'mod'=>"ps_socialfollow"),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter','mod'=>'ps_linklist','id_module'=>1),$_smarty_tpl ) );?>

                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

            


          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1872795311663b63c2bf5a17_82957741 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1905057149663b63c2bf5d23_94830397', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_149304828663b63c2bf5064_60097295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_149304828663b63c2bf5064_60097295',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1439014141663b63c2bf5428_13116011',
  ),
  'page_content' => 
  array (
    0 => 'Block_1872795311663b63c2bf5a17_82957741',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1905057149663b63c2bf5d23_94830397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1439014141663b63c2bf5428_13116011', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1872795311663b63c2bf5a17_82957741', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
