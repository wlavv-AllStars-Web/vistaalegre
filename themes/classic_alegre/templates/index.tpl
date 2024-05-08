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
{extends file='page.tpl'}

    {block name='page_content_container'}
      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}

        {block name='page_content'}
          {block name='hook_home'}
            {* {$HOOK_HOME nofilter} *}

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
                    {hook h="displayFooter" mod="ps_emailsubscription"}
                    {hook h="displayFooter" mod="ps_socialfollow"}
                    {hook h='displayFooter' mod='ps_linklist' id_module=1}
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

            {* <div class="inicio-sessao">
              <div class="container-inicio">
                <div>
                {block name='login_form'}

                  {block name='login_form_errors'}
                    {include file='_partials/form-errors.tpl' errors=$errors['']}
                  {/block}
                
                  <form id="login-form" action="{block name='login_form_actionurl'}{$action}{/block}" method="post">
                
                    <div>
                      {block name='login_form_fields'}
                        {foreach from=$formFields item="field"}
                          {block name='form_field'}
                            {form_field field=$field}
                          {/block}
                        {/foreach}
                      {/block}
                      <div class="forgot-password">
                        <a href="{$urls.pages.password}" rel="nofollow">
                          {l s='Forgot your password?' d='Shop.Theme.Customeraccount'}
                        </a>
                      </div>
                    </div>
                
                    {block name='login_form_footer'}
                      <footer class="form-footer text-sm-center clearfix">
                        <input type="hidden" name="submitLogin" value="1">
                        {block name='form_buttons'}
                          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
                            {l s='Sign in' d='Shop.Theme.Actions'}
                          </button>
                        {/block}
                      </footer>
                    {/block}
                
                  </form>
                {/block}
                </div>

                <div>
                {block name='page_content'}
                    {block name='register_form_container'}
                      {$hook_create_account_top nofilter}
                      <section class="register-form">
                        <h3>{l s='Novos Clientes' d='Shop.Theme.Customeraccount'}</h3>
                        <p>{l s='Already have an account?' d='Shop.Theme.Customeraccount'} <a href="{$urls.pages.authentication}">{l s='Log in instead!' d='Shop.Theme.Customeraccount'}</a></p>
                        {render file='customer/_partials/customer-form.tpl' ui=$register_form}
                      </section>
                    {/block}
                {/block}
                </div>
              </div>
            </div> *}



          {/block}
        {/block}
      </section>
    {/block}

