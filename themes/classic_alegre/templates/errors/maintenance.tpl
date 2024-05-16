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
{extends file='layouts/layout-error.tpl'}

{block name='content'}

  <section id="main">

    {block name='page_header_container'}
      <header class="page-header">
        {block name='page_header_logo'}
        <div class="logo"><img src="/img/vistaalegre.webp" alt="logo" loading="lazy"></div>
        <div class="contacts_maintenance">
          <a href="mailto:info@vistaalegre-valenca.com"><i class="fa-solid fa-envelope"></i>info@vistaalegre-valenca.com</a>
          <div class="contact_whatsapp_container">
            <img class="button_whatsapp" src="/img/whatsapp_search.png" width="40" />
            <div class="whatsapp_content whatsapp_hidden">
              <a href="https://wa.me/+351962551603" class="contact_whatsapp"><img src="/img/flags/pt.svg" width="32" />+351 962 551 603</a>
              <a href="https://wa.me/+351964516148" class="contact_whatsapp"><img src="/img/flags/pt.svg" width="32" />+351 964 516 148</a>
              <a href="https://wa.me/+34673208992" class="contact_whatsapp"><img src="/img/flags/es.svg" width="32" />+34 673 208 992</a>
            </div>
          </div>
        </div>
        <div class="contacts_maintenance_mobile">
          <a class="email_mobile" href="mailto:info@vistaalegre-valenca.com"><i class="fa-solid fa-envelope"></i></a>
          <div class="contact_whatsapp_container">
            <img class="button_whatsapp" src="/img/whatsapp_search.png" width="40" />
            <div class="whatsapp_content whatsapp_hidden">
              <a href="https://wa.me/+351962551603" class="contact_whatsapp"><img src="/img/flags/pt.svg" width="32" />+351 962 551 603</a>
              <a href="https://wa.me/+351964516148" class="contact_whatsapp"><img src="/img/flags/pt.svg" width="32" />+351 964 516 148</a>
              <a href="https://wa.me/+34673208992" class="contact_whatsapp"><img src="/img/flags/es.svg" width="32" />+34 673 208 992</a>
            </div>
          </div>
        </div>
 
        {/block}

        {block name='hook_maintenance'}
          {$HOOK_MAINTENANCE nofilter}
        {/block}

        {block name='page_header'}
          {* <h1>{block name='page_title'}{l s='We\'ll be back soon.' d='Shop.Theme.Global'}{/block}</h1> *}
        {/block}
      </header>
    {/block}
    {* <div class="brevemente">
      <h1>Brevemente</h1>
    </div> *}
    {block name='page_content_container'}
      <section id="content" class="page-content page-maintenance">
        {block name='page_content'}
          {* {$maintenance_text nofilter} *}
          <h1>Brevemente</h1>

        {/block}
      </section>
    {/block}
    {block name='page_footer_container'}
      <div class="footer_maintenance">
        <div class="brands-logo"><img src="/img/Cutipol.webp" /></div>
        <div class="brands-logo"><img src="/img/BordalloPinheiro.webp" /></div>
        <div class="brands-logo"><img src="/img/catelbel.webp" /></div>
        <div class="brands-logo"><img src="/img/vistaalegre.webp" /></div>
      </div>
    {/block}

  </section>

<script src="/themes/classic_alegre/assets/js/error.js"></script>
{/block}

<style>

</style>