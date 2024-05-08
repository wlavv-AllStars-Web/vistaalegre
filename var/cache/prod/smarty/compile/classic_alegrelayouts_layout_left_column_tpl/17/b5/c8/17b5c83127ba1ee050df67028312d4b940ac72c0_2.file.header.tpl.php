<?php
/* Smarty version 4.3.4, created on 2024-05-08 12:35:17
  from 'C:\xampp\htdocs\vistaalegre\themes\classic_alegre\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_663b6375bef642_69332589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17b5c83127ba1ee050df67028312d4b940ac72c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vistaalegre\\themes\\classic_alegre\\templates\\_partials\\header.tpl',
      1 => 1715101332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_663b6375bef642_69332589 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206742285663b6375be6c33_07968763', 'header_banner');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_837403285663b6375be7bc5_06246623', 'header_top');
?>


<style>
  .header-top {
    background: transparent;
  }
  .header-top .container{
    width: 100%;
  }
</style><?php }
/* {block 'header_banner'} */
class Block_206742285663b6375be6c33_07968763 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_206742285663b6375be6c33_07968763',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_top'} */
class Block_837403285663b6375be7bc5_06246623 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_837403285663b6375be7bc5_06246623',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-4 col-xs-6">
          <div class="col-md-6" id="_desktop_logo">
            <div class="float-xs-left" id="menu-icon-desktop">
                <i class="material-icons d-inline">&#xE5D2;</i>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
                <h1>
                  <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

                </h1>
              <?php } else { ?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

              <?php }?>
            <?php }?>
          </div>
        </div>
        <div class="searchbar_desktop hidden-sm-down col-md-4">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

        </div>
        <div class="header-top-right hidden-sm-down col-md-4 col-sm-12 position-static">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop','mod'=>'ps_customersignin'),$_smarty_tpl ) );?>

          <div class="help-menu"><i class="fa-regular fa-circle-question"></i><a>Ajuda</a></div>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop','mod'=>'ps_shoppingcart'),$_smarty_tpl ) );?>

        </div>
        <div class="header-top-right-mobile hidden-md-up col-md-4 col-sm-6 col-xs-6 position-static">
          <i class="material-icons search mobile" aria-hidden="true">search</i>
          <div class="search-mobile" style="display: none;">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop','mod'=>'ps_searchbar'),$_smarty_tpl ) );?>

          </div>
          <div class="help-menu"><a><i class="fa-regular fa-circle-question"></i></a></div>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop','mod'=>'ps_customersignin'),$_smarty_tpl ) );?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop','mod'=>'ps_shoppingcart'),$_smarty_tpl ) );?>

        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up">
          <i class="material-icons clear" aria-hidden="true">clear</i>
        <div class="js-top-menu mobile" id="_mobile_top_menu">
          aqui mobile
        </div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
      <div id="desktop_top_menu_wrapper" class="row hidden-md-down">
        <div class="logo-menu">
          <a href="/"><img src="/img/vistaalegre.png" /></a>
        </div>
        <div class="js-top-menu desktop" id="_desktop_top_menu">
          
        </div>
        <div class="js-top-menu-bottom">
          <div id="_desktop_currency_selector"></div>
          <div id="_desktop_language_selector"></div>
          <div id="_desktop_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
