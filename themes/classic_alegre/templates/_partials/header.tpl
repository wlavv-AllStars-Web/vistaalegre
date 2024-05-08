{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{* {block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            {hook h='displayNav1'}
          </div>
          <div class="col-md-7 right-nav">
              {hook h='displayNav2'}
          </div>
        </div>
        <div class=" text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
{/block} *}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-4 col-xs-6">
          <div class="col-md-6" id="_desktop_logo">
            <div class="float-xs-left" id="menu-icon-desktop">
                <i class="material-icons d-inline">&#xE5D2;</i>
            </div>
            {if $shop.logo_details}
              {if $page.page_name == 'index'}
                <h1>
                  {renderLogo}
                </h1>
              {else}
                {renderLogo}
              {/if}
            {/if}
          </div>
        </div>
        <div class="searchbar_desktop hidden-sm-down col-md-4">
          {hook h='displaySearch'}
        </div>
        <div class="header-top-right hidden-sm-down col-md-4 col-sm-12 position-static">
          {hook h='displayTop'  mod='ps_customersignin'}
          <div class="help-menu"><i class="fa-regular fa-circle-question"></i><a>Ajuda</a></div>
          {hook h='displayTop'  mod='ps_shoppingcart'}
        </div>
        <div class="header-top-right-mobile hidden-md-up col-md-4 col-sm-6 col-xs-6 position-static">
          <i class="material-icons search mobile" aria-hidden="true">search</i>
          <div class="search-mobile" style="display: none;">
            {hook h='displayTop'  mod='ps_searchbar'}
          </div>
          <div class="help-menu"><a><i class="fa-regular fa-circle-question"></i></a></div>
          {hook h='displayTop'  mod='ps_customersignin'}
          {hook h='displayTop'  mod='ps_shoppingcart'}
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
          <ul class="desktop_menu">
            <li><a href="/">opcao 1</a></li>
            <li><a href="/">opcao 2</a></li>
            <li><a href="/">opcao 3</a></li>
            <li><a href="/">opcao 4</a></li>
          </ul>
        </div>
        <div class="js-top-menu-bottom">
          <div id="_desktop_currency_selector"></div>
          <div id="_desktop_language_selector"></div>
          <div id="_desktop_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  {hook h='displayNavFullWidth'}
{/block}

<style>
  .header-top {
    background: transparent;
  }
  .header-top .container{
    width: 100%;
  }
</style>