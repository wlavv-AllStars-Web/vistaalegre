<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__cdc9beed007a105ea2cb937e202eefff */
class __TwigTemplate_6f3d2ddb428e059009587195a9f0f8e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Manutenção • vistaalegre</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMaintenance';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.5';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Ler esta mensagem';
    var token = 'f0bde48d983312dc5daa46b3c53cbad6';
    var currentIndex = 'index.php?controller=AdminMaintenance';
    var employee_token = 'a5c4f40621164f6f0de12192db90ed6a';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '1';
    var admin_modules_link = '/adminvistaalegre/index.php/improve/modules/manage?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA';
    var admin_notification_get_link = '/adminvistaalegre/index.php/common/notifications?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA';
    var admin_notification_push_link = adminNotificationPushLink = '/adminvistaalegre/index.php/common/notifications/ack?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
    var se";
        // line 43
        echo "arch_product_msg = 'Pesquisar um produto';
  </script>



<link
      rel=\"preload\"
      href=\"/adminvistaalegre/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/adminvistaalegre/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminvistaalegre/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminvistaalegre\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminvistaalegre\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders ";
        // line 70
        echo "= \"1\";
</script>
<script type=\"text/javascript\" src=\"/adminvistaalegre/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/adminvistaalegre/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.5\"></script>
<script type=\"text/javascript\" src=\"/adminvistaalegre/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt adminmaintenance\"
  data-base-url=\"/adminvistaalegre/index.php\"  data-token=\"vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminDashboard&amp;token=065840c096d5d913c0b28f832a5388cc\"></a>
      <span id=\"shop_version\">8.1.5</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=d711ff966bcc04ae642cc8de69889143\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminvistaalegre/index.php/improve/modules/manage?token=eddab6e3e88de57dd369026d00cec477\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminvistaalegre/index.php/sell/catalog/categories/new?token=eddab6e3e88de57dd369026d00cec477\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://192.168.1.64:86/adminvistaalegre/index.php/sell/catalog/products-v2/create?token=eddab6e3e88de57dd369026d00cec477\"
                 data-item=\"New product\"
      >New product</a>
  ";
        // line 120
        echo "        <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b8a713d8fc3c0348c8a7c0ecc859bd87\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:86/adminvistaalegre/index.php/sell/orders?token=eddab6e3e88de57dd369026d00cec477\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"123\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/maintenance\"
        data-post-link=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminQuickAccesses&token=7303672fee5e61d89e796beb7ebb7797\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"Maintenance - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar página atual ao «Acesso Rápido»
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminQuickAccesses&token=7303672fee5e61d89e796beb7ebb7797\">
      <i class=\"material-icons\">settings</i>
      Gerir os seus acessos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/adminvistaalegre/index.php?controller=AdminSearch&amp;token=8819f776e2033c8eb82177df43a86e56\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input";
        // line 160
        echo " type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 174
        echo "Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=d711ff966bcc04ae642cc8de69889143\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminvistaalegre/index.php/improve/modules/manage?token=eddab6e3e88de57dd369026d00cec477\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminvistaalegre/index.php/sell/catalog/categories/new?token=eddab6e3e88de57dd369026d00cec477\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminvistaalegre/index.php/sell/catalog/products-v2/create?token=eddab6e3e88de57dd369026d00cec477\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b8a713d8fc3c0348c8a7c0ecc859bd87\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-";
        // line 213
        echo "row-link\"
       href=\"http://192.168.1.64:86/adminvistaalegre/index.php/sell/orders?token=eddab6e3e88de57dd369026d00cec477\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"190\"
      data-icon=\"icon-AdminParentPreferences\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/maintenance\"
      data-post-link=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminQuickAccesses&token=7303672fee5e61d89e796beb7ebb7797\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"Maintenance - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar página atual ao «Acesso Rápido»
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminQuickAccesses&token=7303672fee5e61d89e796beb7ebb7797\">
    <i class=\"material-icons\">settings</i>
    Gerir os seus acessos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                  \"
             ";
        // line 259
        echo "href=\"/adminvistaalegre/index.php/configure/shop/maintenance/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\"
          >
            <i class=\"material-icons\"
              style=\"\"
            >build</i>
            <span>Modo de manutenção</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://192.168.1.64:86/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Encomendas<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li clas";
        // line 310
        echo "s=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e58ca3ec427083e162f7482f63d6f071\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"flo";
        // line 356
        echo "at-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://192.168.1.64:86/img/pr/default.jpg\" alt=\"Paulo\" /></span>
        <span class=\"employee_profile\">Seja bem-vindo ao Paulo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminvistaalegre/index.php/configure/advanced/employees/1/edit?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminLogin&amp;logout=1&amp;token=342d0b3acdfef4ef9f8cf5a7e0665004\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Fechar sessão</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d";
        // line 408
        echo "-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminvistaalegre/index.php/configure/advanced/employees/toggle-navigation?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminDashboard&amp;token=065840c096d5d913c0b28f832a5388cc\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.5</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminDashboard&amp;token=065840c096d5d913c0b28f832a5388cc\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adminvistaalegre/index.php/sell/orders/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
      ";
        // line 451
        echo "                                                              keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adminvistaalegre/index.php/sell/orders/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adminvistaalegre/index.php/sell/orders/invoices/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adminvistaalegre/index.php/sell/orders/credit-slips/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                       ";
        // line 482
        echo "       <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/adminvistaalegre/index.php/sell/orders/delivery-slips/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCarts&amp;token=e58ca3ec427083e162f7482f63d6f071\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/adminvistaalegre/index.php/sell/catalog/products?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                ";
        // line 513
        echo "              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adminvistaalegre/index.php/sell/catalog/products?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adminvistaalegre/index.php/sell/catalog/categories?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/adminvistaalegre/index.php/sell/catalog/monitoring/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminAttributesGroups&amp;token=bf5caf992708b2027eed79e99ecbf06a\" class=\"link\"> Attributes &amp; Features
                                </a>
     ";
        // line 542
        echo "                         </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/adminvistaalegre/index.php/sell/catalog/brands/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/adminvistaalegre/index.php/sell/attachments/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCartRules&amp;token=b8a713d8fc3c0348c8a7c0ecc859bd87\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/adminvistaalegre/index.php/sell/stocks/?_token=vv";
        // line 572
        echo "Z_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adminvistaalegre/index.php/sell/customers/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adminvistaalegre/index.php/sell/customers/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
              ";
        // line 605
        echo "                  <a href=\"/adminvistaalegre/index.php/sell/addresses/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCustomerThreads&amp;token=85008e2286750caac5c256ec31af7ad8\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCustomerThreads&amp;token=85008e2286750caac5c256ec31af7ad8\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
    ";
        // line 635
        echo "                          
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adminvistaalegre/index.php/sell/customer-service/order-messages/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminReturn&amp;token=b5bf8da98d3a2764812edb1d7b26b99d\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminStats&amp;token=d711ff966bcc04ae642cc8de69889143\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                              ";
        // line 666
        echo "          </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/adminvistaalegre/index.php/improve/modules/manage?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adminvistaalegre/index.php/improve/modules/manage?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                ";
        // line 704
        echo "                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adminvistaalegre/index.php/improve/design/themes/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminThemes\">
                                <a href=\"/adminvistaalegre/index.php/improve/design/themes/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adminvistaalegre/index.php/improve/design/mail_theme/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                    ";
        // line 734
        echo "          
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adminvistaalegre/index.php/improve/design/cms-pages/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adminvistaalegre/index.php/improve/design/modules/positions/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminImages&amp;token=60358198da1abab26ed2ab68353fbada\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adminvistaalegre/index.php/modules/link-widget/list?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Lista de ligações
                                </a>
                ";
        // line 763
        echo "              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCarriers&amp;token=c37f13cf662228aca86874ca49d31a3c\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminCarriers&amp;token=c37f13cf662228aca86874ca49d31a3c\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/adminvistaalegre/index.php/improve/shipping/pre";
        // line 794
        echo "ferences/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adminvistaalegre/index.php/improve/payment/payment_methods?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adminvistaalegre/index.php/improve/payment/payment_methods?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\"";
        // line 826
        echo " id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adminvistaalegre/index.php/improve/payment/preferences?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adminvistaalegre/index.php/improve/international/localization/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/adminvistaalegre/index.php/improve/international/localization/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                ";
        // line 857
        echo "              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adminvistaalegre/index.php/improve/international/zones/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adminvistaalegre/index.php/improve/international/taxes/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/adminvistaalegre/index.php/improve/international/translations/settings?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                  ";
        // line 894
        echo "                                    
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adminvistaalegre/index.php/configure/shop/preferences/preferences?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adminvistaalegre/index.php/configure/shop/preferences/preferences?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adminvistaalegre/index.php/configure/shop/order-preferences/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Order Settings
                                </a>
                ";
        // line 921
        echo "              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adminvistaalegre/index.php/configure/shop/product-preferences/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/adminvistaalegre/index.php/configure/shop/customer-preferences/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/adminvistaalegre/index.php/configure/shop/contacts/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/adminvistaalegre/index.php/configure/s";
        // line 951
        echo "hop/seo-urls/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminSearchConf&amp;token=f3e09fdce01649802f25337ceea15d62\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adminvistaalegre/index.php/configure/advanced/system-information/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
  ";
        // line 983
        echo "                            <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/system-information/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/performance/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/administration/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/emails/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> E-mail
                                </a>
                              </li>

                                              ";
        // line 1012
        echo "                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/import/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/employees/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/sql-requests/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/logs/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Logs
                            ";
        // line 1041
        echo "    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/webservice-keys/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/feature-flags/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adminvistaalegre/index.php/configure/advanced/security/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
";
        // line 1072
        echo "                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">General</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/adminvistaalegre/index.php/configure/shop/maintenance/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" aria-current=\"page\">Maintenance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Manutenção          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/adminvistaalegre/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminMaintenance%253Fversion%253D8.1.5%2526country%253Dpt/Ajuda?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                               ";
        // line 1125
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <li class=\"nav-item\">
                    <a href=\"/adminvistaalegre/index.php/configure/shop/preferences/preferences?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" id=\"subtab-AdminPreferences\" class=\"nav-link tab \" data-submenu=\"73\">
                      General
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/adminvistaalegre/index.php/configure/shop/maintenance/?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab active current\" data-submenu=\"74\">
                      Maintenance
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                            ";
        // line 1141
        echo "                                                                                                                                                                                      </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/adminvistaalegre/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminMaintenance%253Fversion%253D8.1.5%2526country%253Dpt/Ajuda?_token=vvZ_N9IHXSCKrp0hrHyazJyJtyTmAqOBLyoQa9UimqA\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1177
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://192.168.1.64:86/adminvistaalegre/index.php?controller=AdminDashboard&amp;token=065840c096d5d913c0b28f832a5388cc\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1211
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1177
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1211
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__cdc9beed007a105ea2cb937e202eefff";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1376 => 1211,  1355 => 1177,  1344 => 83,  1335 => 1211,  1295 => 1177,  1257 => 1141,  1239 => 1125,  1184 => 1072,  1151 => 1041,  1120 => 1012,  1089 => 983,  1055 => 951,  1023 => 921,  994 => 894,  955 => 857,  922 => 826,  888 => 794,  855 => 763,  824 => 734,  792 => 704,  752 => 666,  719 => 635,  687 => 605,  652 => 572,  620 => 542,  589 => 513,  556 => 482,  523 => 451,  478 => 408,  424 => 356,  376 => 310,  323 => 259,  275 => 213,  234 => 174,  218 => 160,  176 => 120,  134 => 83,  119 => 70,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cdc9beed007a105ea2cb937e202eefff", "");
    }
}
