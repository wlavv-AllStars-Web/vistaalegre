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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
      <div class="container-catalogs container-catalogs-0">
        <h1>Brevemente</h1>
        <div class="btn-close" onclick="closeC()">
          <i class="fa-solid fa-circle-xmark"></i>
        </div>
      </div>

      <div class="container-catalogs container-catalogs-1">
        {* <h1 style="flex: 0.5;text-transform:uppercase;">Catalogos</h1> *}
        <div class="catalog-card">
          <a href="/img/catalogs/Vis_Brochura_BordalloStoneware_Julho23.pdf" download>
            <img src="/img/catalogs/HighlightGresBP2023.jpg" />
          </a>
        </div>
        <div class="btn-close" onclick="closeC()">
          <i class="fa-solid fa-circle-xmark"></i>
        </div>
      </div>

      <div class="container-catalogs container-catalogs-2">
        <h1>Brevemente</h1>
        <div class="btn-close" onclick="closeC()">
          <i class="fa-solid fa-circle-xmark"></i>
        </div>
      </div>

      <div class="container-catalogs container-catalogs-3">
        {* <h1 style="flex: 0.5;text-transform:uppercase;">Catalogos</h1> *}
        <div class="catalog-card">
          <a href="/img/catalogs/VIS_BrochuraGres_Hotelware_SINGLE.pdf" download>
            <img src="/img/catalogs/Highlight_BrochuraGres_Hotelware.jpg" />
          </a>
        </div>
        
        <div class="catalog-card">
          <a href="/img/catalogs/Vis_Premium_Selection_2020.pdf" download>
            <img src="/img/catalogs/HighlightPremium.jpg" />
          </a>
        </div>
        <div class="catalog-card">
          <a href="/img/catalogs/TradeHotelware_2023_VsDigital_v02_Pages.pdf" download>
            <img src="/img/catalogs/HighlightTradeHotelware2023.jpg" />
          </a>
        </div>

        
      </div>
      
      <div class="footer_maintenance">
        <div class="btn-close" onclick="closeC()">
          <i class="fa-solid fa-circle-xmark"></i>
        </div>
        <div class="brands-logo btn-to">
          <img src="/img/Cutipol.webp" />
        </div>
        <div class="brands-logo btn-to">
          <img src="/img/BordalloPinheiro.webp" />
          <div class="bola"></div>
        </div>
        <div class="brands-logo btn-to">
          <img src="/img/catelbel.webp" />
        </div>
        <div class="brands-logo btn-to">
          <img src="/img/vistaalegre.webp" />
          <div class="bola"></div>
        </div>
      </div>
      <div style="background: rgba(0, 0, 0, 0.6);">
        <p style="color: #fff;position:relative;font-family:sans-serif;">Deslize o rato por cima das marcas para ver os seus catálogos.</p>
      </div>
    {/block}

  </section>

<script src="/themes/classic_alegre/assets/js/error.js"></script>

<script>
  

    const btnsV = document.querySelectorAll(".btn-to");
    // const container = document.querySelector(`.container-catalogs`)
    if (window.innerWidth > 900) {

    btnsV.forEach((btn, index) => {
      const container = document.querySelector(`.container-catalogs-`+ index)
      
        btn.addEventListener("mouseover",() => {
          document.querySelectorAll('.container-catalogs').forEach((el) => {
            el.classList.remove("show-catalogs");
          });
          container.classList.add("show-catalogs")
        })
      // btn.addEventListener("mouseleave",() => {
      //     container.classList.remove("show-catalogs")
      // })
        container.addEventListener("mouseover",() => {
          container.classList.add("show-catalogs")
        })
        container.addEventListener("mouseleave",() => {
          container.classList.remove("show-catalogs")
        })
    });

    }else{
      btnsV.forEach((btn, index) => {

          btn.addEventListener("click",() => {
            const container = document.querySelector(`.container-catalogs-`+ index)
            const btnClose = document.querySelector(".footer_maintenance .btn-close");
            document.querySelectorAll('.container-catalogs').forEach((el) => {
              el.classList.remove("show-catalogs");
            });
            container.classList.add("show-catalogs")
            console.log(btnClose)
            btnClose.classList.add("show")
          })

          document.querySelector(".btn-close").addEventListener("click", (event) => {
            document.querySelectorAll('.container-catalogs').forEach((el) => {
              el.classList.remove("show-catalogs");
            });
            
          });
        // btn.addEventListener("mouseleave",() => {
        //     container.classList.remove("show-catalogs")
        // })
        });
      }
    
    // btnV.addEventListener("mouseover",() => {
    //   container.classList.add("show-catalogs")
    // })
    // container.addEventListener("mouseover",() => {
    //   container.classList.add("show-catalogs")
    // })
    // container.addEventListener("mouseleave",() => {
    //   container.classList.remove("show-catalogs")
    // })
  
    function closeC(){
      document.querySelectorAll('.container-catalogs').forEach((el) => {
        el.classList.remove("show-catalogs");
      });
      document.querySelector(".footer_maintenance .btn-close").classList.remove("show")
    }

</script>

<style>
.container-catalogs {
  width: 100%;
  height: 0;
  /* background: rgba(250, 250, 250, .5); */
  background: #fff;
  transition: height 0.5s ease-in-out, opacity 0.5s ease-in-out;
  visibility: hidden;
  overflow: hidden;
  opacity: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  /* position: absolute;
  bottom: 100%;
  left: 0; */
}
.container-catalogs h1{
    color: #111 !important;
    font-size: 3rem !important;
}
.container-catalogs .catalog-card {
  padding: 1rem;
}

.container-catalogs .catalog-card:hover img {
  transform: scale(1.1);
  cursor: pointer;
}

.container-catalogs .catalog-card img {
  height: 100%;
  max-height: 300px;
  object-fit: contain;
  transition: all 250ms;
  border-radius: 0.25rem;
}

.container-catalogs.show-catalogs {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 400px;
  visibility: visible;
  opacity: 1;
  position: relative;
}

.brands-logo{
  position: relative;
}

.bola{
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: #fff;
  top: 0;
  right: 0;
}

.btn-close{
  display: none;
}

@media screen and (max-width:900px){
  .container-catalogs.show-catalogs {
    display: flex;
    justify-content: unset;
    align-items: center;
    height: 400px;
    visibility: visible;
    opacity: 1;
    position: relative;
    overflow-x: scroll;
    scroll-snap-type: x mandatory;
    scroll-snap-align: start;
    width: 100vw;
  }

  .container-catalogs h1{
    width: 100vw;
    text-align: center;
  }

  .container-catalogs .catalog-card {
  padding: 1rem;
  width: 100vw;
}

  .btn-close{
    display: none !important;
  }
  .btn-close.show{
    position: absolute;
    top: -2rem;
    z-index: 999;
    width: 3rem;
    height: 3rem;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 50%;
    font-size: 3rem;
    font-family: sans-serif;
    display: flex !important;
    justify-content: center;
    align-items: center;
    color: #000;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  }
}
</style>

{/block}

