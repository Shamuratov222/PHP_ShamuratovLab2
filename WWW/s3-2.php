<!DOCTYPE html>
<html lang="ru">
    <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <title>Ошибка  :: Панель управления хостингом sprinthost</title>
        <script src="/js/vuedist/js/manifest.js?1639382482915"></script>
        <script src="/js/vuedist/js/mainApp.js?1639382482915"></script>
        <link href="/lib/fontawesome/css/font-awesome.css" rel="stylesheet"/>

<link href="/lib/sweetalert/dist/sweetalert.css" rel="stylesheet"/>
<link href="/lib/toastr/toastr.min.css" rel="stylesheet"/>

<link href="/css/app.min.css?1639388955" rel="stylesheet"/>
<link href="/css/dashboard.min.css?1639388955" rel="stylesheet"/>

<link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">

<link rel="icon" href="/favicons/sprinthost/favicon.ico?1639382482915" type="image/x-icon" />
<link rel="shortcut icon" href="/favicons/sprinthost/favicon.ico?1639382482915" type="image/x-icon" />

<script type="text/javascript" src="/lib/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/lib/jquery-ui/ui/minified/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="/lib/yepnope/dist/yepnope-2.0.0.js"></script>
<script type="text/javascript" src="/lib/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="/lib/jquery.cookie/jquery.cookie.js"></script>

<script type="text/javascript" src="/lib/parsleyjs/dist/parsley.min.js"></script>
<script type="text/javascript" src="/lib/parsleyjs/dist/i18n/ru.js"></script>

<script type="text/javascript" src="/js/libs.min.js?1639382482915"></script>
<script type="text/javascript" src="/js/components.min.js?1639382482915"></script>

<script src="/js/dashboard/tabsync.js"></script>
<script type="text/javascript" src="/js/dashboard/long_task.js?1639382482915"></script>

    <script type="text/javascript" src="/js/dashboard.min.js?1639382482915"></script>


<script type="text/javascript" src="/js/dashboard/account_access_widget.js?1639382482915"></script>

    <!-- GoogleAnalytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-5556760-8', 'auto');
        ga('send', 'pageview');
    </script>
    <!-- /GoogleAnalytics -->
    </head>
    <body id="body">
                <script type="application/json" id="initial-side-bar">
          {"sections":[{"name":"sites_cards","id":"menu-section-sites_cards","title":"","icon":"sites_cards","type":"item","target":null,"active":null},{"name":"domains_cards","id":"menu-section-domains_cards","title":"","icon":"domains_cards","type":"item","target":null,"active":null},{"name":"file_manager","id":"menu-section-file_manager","title":"","icon":"filemanager_icon","type":"item","target":null,"active":null},{"name":"databases_cards","id":"menu-section-databases_cards","title":"","icon":"databases_cards","type":"item","target":null,"active":null}],"items":[{"name":"","section":"sites_cards","id":"menu-item-","title":"\u0421\u0430\u0439\u0442\u044b","link":"\/customer\/sites\/index","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"domains_cards","id":"menu-item-","title":"\u0414\u043e\u043c\u0435\u043d\u044b","link":"\/customer\/domain\/main","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"file_manager","id":"menu-item-","title":"\u0424\u0430\u0439\u043b\u043e\u0432\u044b\u0439 \u043c\u0435\u043d\u0435\u0434\u0436\u0435\u0440","link":"\/customer\/files\/manager","num":"","freehosting":"","target":null,"label":null,"description":""},{"name":"","section":"databases_cards","id":"menu-item-","title":"\u0411\u0430\u0437\u044b \u0434\u0430\u043d\u043d\u044b\u0445","link":"\/customer\/databases\/index","num":"","freehosting":"","target":null,"label":null,"description":""}]}
        </script>
        <script type="application/json" id="initial-page-side-bar">
          {"sections":[{"name":"account","id":"menu-section-account","title":"\u041d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","icon":"account_icon","type":"section","target":null,"active":null},{"name":"profile","id":"menu-section-profile","title":"\u041d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430","icon":"account_icon","type":"section","target":null,"active":null},{"name":"security","id":"menu-section-security","title":"\u0411\u0435\u0437\u043e\u043f\u0430\u0441\u043d\u043e\u0441\u0442\u044c","icon":"account_icon","type":"section","target":null,"active":null},{"name":"personal_data","id":"menu-section-personal_data","title":"\u041f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0435 \u0434\u0430\u043d\u043d\u044b\u0435","icon":"account_icon","type":"section","target":null,"active":null},{"name":"finances","id":"menu-section-finances","title":"\u0423\u0441\u043b\u0443\u0433\u0438 \u0438 \u0444\u0438\u043d\u0430\u043d\u0441\u044b","icon":"finance_icon","type":"section","target":null,"active":null}],"items":[{"name":"general_settings","section":"account","id":"menu-item-general_settings","title":"\u041e\u0431\u0449\u0438\u0435 \u043d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438","link":"\/customer\/account\/general-settings","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"account_info","section":"account","id":"menu-item-account_info","title":"\u0414\u0430\u043d\u043d\u044b\u0435 \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430","link":"\/customer\/account\/info","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":"f"},{"name":"reissue_account","section":"account","id":"menu-item-reissue_account","title":"\u0421\u043c\u0435\u043d\u0438\u0442\u044c \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430","link":"\/customer\/account\/reissue","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"notifications","section":"account","id":"menu-item-notifications","title":"\u0423\u0432\u0435\u0434\u043e\u043c\u043b\u0435\u043d\u0438\u044f","link":"\/notifications\/index","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"account_access_list","section":"account","id":"menu-item-account_access_list","title":"\u0421\u0432\u044f\u0437\u0430\u043d\u043d\u044b\u0435 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u044b","link":"\/customer\/account-access\/list","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"account_auth_access","section":"account","id":"menu-item-account_auth_access","title":"\u0410\u0443\u0442\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0446\u0438\u044f","link":"\/security\/auth-access","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"log_operation","section":"account","id":"menu-item-log_operation","title":"\u0418\u0441\u0442\u043e\u0440\u0438\u044f \u0434\u0435\u0439\u0441\u0442\u0432\u0438\u0439","link":"\/security\/log-operation","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"login_history","section":"account","id":"menu-item-login_history","title":"\u0410\u043a\u0442\u0438\u0432\u043d\u044b\u0435 \u0441\u0435\u0430\u043d\u0441\u044b","link":"\/security\/login-history","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"general_settings","section":"profile","id":"menu-item-general_settings","title":"\u041e\u0431\u0449\u0438\u0435 \u043d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438","link":"\/customer\/account\/general-settings","num":"","freehosting":"","target":null,"label":null,"description":"\u0418\u043d\u0444\u043e\u0440\u043c\u0430\u0446\u0438\u044f \u043e\u0431 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0435, \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0438\u044f \u0447\u0435\u0440\u0435\u0437 \u0441\u043e\u0446\u0438\u0430\u043b\u044c\u043d\u044b\u0435 \u0441\u0435\u0442\u0438, \u043d\u0430\u0441\u0442\u0440\u043e\u0439\u043a\u0438 \u043e\u043f\u044b\u0442\u043d\u043e\u0433\u043e \u043f\u043e\u043b\u044c\u0437\u043e\u0432\u0430\u0442\u0435\u043b\u044f. ","cust_type":""},{"name":"notifications","section":"profile","id":"menu-item-notifications","title":"\u0423\u0432\u0435\u0434\u043e\u043c\u043b\u0435\u043d\u0438\u044f","link":"\/notifications\/index","num":"","freehosting":"","target":null,"label":null,"description":"\u041d\u0430\u0441\u0442\u0440\u043e\u0438\u0442\u044c \u0443\u0432\u0435\u0434\u043e\u043c\u043b\u0435\u043d\u0438\u044f \u043f\u043e\u00a0\u0421\u041c\u0421 \u0438\u00a0email, \u043f\u043e\u0434\u043a\u043b\u044e\u0447\u0438\u0442\u044c Telegram-\u0431\u043e\u0442\u0430.","cust_type":""},{"name":"account_access_list","section":"profile","id":"menu-item-account_access_list","title":"\u0421\u0432\u044f\u0437\u0430\u043d\u043d\u044b\u0435 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u044b","link":"\/customer\/account-access\/list","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u0440\u0435\u0434\u043e\u0441\u0442\u0430\u0432\u0438\u0442\u044c \u043f\u043e\u043b\u043d\u044b\u0439 \u0438\u043b\u0438 \u0447\u0430\u0441\u0442\u0438\u0447\u043d\u044b\u0439 \u0434\u043e\u0441\u0442\u0443\u043f \u043a\u00a0\u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0443 \u0438 \u0443\u043f\u0440\u0430\u0432\u043b\u044f\u0442\u044c \u0434\u0440\u0443\u0433\u0438\u043c\u0438 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430\u043c\u0438.","cust_type":""},{"name":"password","section":"security","id":"menu-item-password","title":"\u0421\u043c\u0435\u043d\u0430 \u043f\u0430\u0440\u043e\u043b\u044f","link":"\/password\/change","num":"","freehosting":"","target":null,"label":null,"description":"\u0418\u0437\u043c\u0435\u043d\u0438\u0442\u044c \u043f\u0430\u0440\u043e\u043b\u044c \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430 \u0434\u043b\u044f\u00a0\u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0438\u0438.","cust_type":""},{"name":"account_auth_access","section":"security","id":"menu-item-account_auth_access","title":"\u0410\u0443\u0442\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0446\u0438\u044f","link":"\/security\/auth-access","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u043e\u0434\u043a\u043b\u044e\u0447\u0438\u0442\u044c \u0430\u0443\u0442\u0435\u043d\u0442\u0438\u0444\u0438\u043a\u0430\u0446\u0438\u044e \u043f\u043e\u00a0\u043f\u0440\u0438\u043b\u043e\u0436\u0435\u043d\u0438\u044e, email \u0438\u043b\u0438 \u0421\u041c\u0421. \u041d\u0430\u0441\u0442\u0440\u043e\u0438\u0442\u044c \u043f\u0440\u043e\u0432\u0435\u0440\u043a\u0443 IP-\u0430\u0434\u0440\u0435\u0441\u0430.","cust_type":""},{"name":"login_history","section":"security","id":"menu-item-login_history","title":"\u0410\u043a\u0442\u0438\u0432\u043d\u044b\u0435 \u0441\u0435\u0430\u043d\u0441\u044b","link":"\/security\/login-history","num":"","freehosting":"","target":null,"label":null,"description":"\u0421\u043f\u0438\u0441\u043e\u043a \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u043e\u0432\u0430\u043d\u043d\u044b\u0445 \u0443\u0441\u0442\u0440\u043e\u0439\u0441\u0442\u0432 \u0438\u00a0\u043f\u043e\u043f\u044b\u0442\u043e\u043a \u0430\u0432\u0442\u043e\u0440\u0438\u0437\u0430\u0446\u0438\u0438 \u0432\u00a0\u0432\u0430\u0448\u00a0\u0430\u043a\u043a\u0430\u0443\u043d\u0442.","cust_type":""},{"name":"log_operation","section":"security","id":"menu-item-log_operation","title":"\u0418\u0441\u0442\u043e\u0440\u0438\u044f \u0434\u0435\u0439\u0441\u0442\u0432\u0438\u0439","link":"\/security\/log-operation","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u043e\u0441\u043c\u043e\u0442\u0440\u0435\u0442\u044c \u0438\u0441\u0442\u043e\u0440\u0438\u044e \u0432\u0441\u0435\u0445\u00a0\u0434\u0435\u0439\u0441\u0442\u0432\u0438\u0439 \u0432\u00a0\u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0435.","cust_type":""},{"name":"account_info","section":"personal_data","id":"menu-item-account_info","title":"\u0414\u0430\u043d\u043d\u044b\u0435 \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430","link":"\/customer\/account\/info","num":"","freehosting":"","target":null,"label":null,"description":"\u0412\u043d\u0435\u0441\u0442\u0438 \u043f\u0435\u0440\u0441\u043e\u043d\u0430\u043b\u044c\u043d\u044b\u0435 \u0434\u0430\u043d\u043d\u044b\u0435 \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430 \u0430\u043a\u043a\u0430\u0443\u043d\u0442\u0430.","cust_type":"f"},{"name":"reissue_account","section":"personal_data","id":"menu-item-reissue_account","title":"\u0421\u043c\u0435\u043d\u0438\u0442\u044c \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430","link":"\/customer\/account\/reissue","num":"","freehosting":"","target":null,"label":null,"description":"\u041f\u0435\u0440\u0435\u043e\u0444\u043e\u0440\u043c\u0438\u0442\u044c \u0430\u043a\u043a\u0430\u0443\u043d\u0442 \u043d\u0430\u00a0\u043d\u043e\u0432\u043e\u0433\u043e \u0432\u043b\u0430\u0434\u0435\u043b\u044c\u0446\u0430.","cust_type":""},{"name":"statements","section":"finances","id":"menu-item-statements","title":"\u041f\u043e\u0434\u0440\u043e\u0431\u043d\u044b\u0439 \u0431\u0430\u043b\u0430\u043d\u0441","link":"\/statm\/list","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""},{"name":"withdraws","section":"finances","id":"menu-item-withdraws","title":"\u0418\u0441\u0442\u043e\u0440\u0438\u044f \u0441\u0447\u0451\u0442\u0430","link":"\/withdraws\/list","num":"","freehosting":"","target":null,"label":null,"description":"","cust_type":""}]}
        </script>
        <script type="application/json" id="initial-page-info">
          {"login":"f0606083","client_type":"customer","loginBda":null,"help_url":"https:\/\/help.sprinthost.ru","cust_type":"f","isSlave":"n","isAdvanced":"n","can_change_services":true,"current_avatar":"\/ajax\/customer\/avatars\/get","platform_version":"4.0","dealer":null,"pin":null,"user_from_dealer":"n","is_suspend":"n","suspend_type":null,"resources_blocked":"n","cp_actions_blocked":"n","usergroup":"customers","seller_awstats":"y","seller_mailservice":"y","nemails":"0","package":"free1","package_type":"shared","domains_only":"n","freehosting":"y","server_available":"y","rub_sign":"<span class=\"rub-sign\">a<\/span>","is_production":true,"memcache":0,"ddos":0,"redis":0,"nemails_count":0,"isFederal":false,"hasEdo":false,"freeSiteBlocked":false,"reqLimit":2500,"is_frozen":"n","statm":"0.00","paid_days":false,"bonus_statm":0,"real_statm":0,"paid_today":false,"title":"\u041e\u0448\u0438\u0431\u043a\u0430 ","breadcrumbs":[{"title":"\u041e\u0448\u0438\u0431\u043a\u0430 \u0432\u044b\u043f\u043e\u043b\u043d\u0435\u043d\u0438\u044f \u0437\u0430\u043f\u0440\u043e\u0441\u0430"}]}
        </script>
                        
        <div id="cp-wrapper" class="cp-wrapper">            <header id="vue-header"></header>
            <aside id="v-side-bar"></aside>
            <main id="main">                <div id="bread-crumbs"></div>
                <div id="page-content">
                        <div class="ibox m-b">
        <div class="ibox-content">
                            <div class="alert alert-danger">
                    Произошла ошибка, попробуйте повторить запрос позже.
                </div>
            
                    </div>
    </div>
                </div>
                <div id="overlay-alert"></div>
                            </main>
        </div>
        <div id="v-side-bar-overlay"></div>
        

<div id="shackle-menu"></div>
<script src="/js/vuedist/js/shackleMenu.js?1639382482915"></script>

<!--Tippy.js-->
<script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

<script type="text/javascript" >
    document.addEventListener('DOMContentLoaded', function (){
        let titles = document.querySelectorAll('[data-tippy-content]');
        titles.forEach((item) => {
            let itemToolTip = item.getAttribute('data-tippy-content');
            tippy(item, {
                content    : itemToolTip,
                duration   : 0,
                arrow      : false,
                animation  : 'fade',
                inertia    : true,
                offset     : [0, 8],
                delay      : [700, 20],
                theme      : 'custom',
                zIndex: 999999,
            });
        });
    });
</script>


            <!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
            (function(m, e, t, r, i, k, a) {
                m[i]   = m[i] || function() {(m[i].a = m[i].a || []).push(arguments)};
                m[i].l = 1 * new Date();
                k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(19760185, "init", {
                clickmap:true,
                trackLinks:true,
                accurateTrackBounce:true,
                webvisor:true,
                params: {
                    "ip": "46.191.232.200",
                    "login": "f0606083",
                    "type": "common",
                    "package": "free1"
                }
            });
        </script>
        <noscript>
            <div>
                <img src="https://mc.yandex.ru/watch/19760185" style="position:absolute; left:-9999px;" alt="" />
            </div>
        </noscript>
        <!-- /Yandex.Metrika counter -->        
    
    <script type='text/javascript'>
    </script>

<script>
    var yandexMetrika = {};

    yandexMetrika.getReachGoals = function (typeGoal){
      if (typeof (ym) !== 'undefined') {
        ym(19760185,'reachGoal', typeGoal)
      }
    }

    window.yandexMetrika = yandexMetrika;

</script>
        <!--Overlays-->
        <div id="overlay-modal"></div>
        <div id="slide-overlay"></div>
        <div id="task-process" class="hidden-simple" data-task=""></div>
        <script type="text/javascript" src="/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/lib/metisMenu/dist/metisMenu.min.js"></script>
<script type="text/javascript" src="/lib/slimScroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/lib/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="/lib/toastr/toastr.min.js"></script>


        <div id="alert_modal" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">

                            <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
                    <h4 class="modal-title">Сообщение</h4>
                </div>
            
            <div class="modal-body"></div>

                    </div>
    </div>
</div>
            <script>
        dr(function() {
            Validator.setErrors('{"defaultMessage":"Некорректное значение","email":"Некорректный адрес электронной почты","url":"Некорректный URL адрес","number":"Значение не является числом","integer":"Значение не является целым числом","digits":"Введите только цифры","alphanum":"Введите буквенно-цифровое значение","notblank":"Это поле должно быть заполнено","required":"Обязательное поле","pattern":"Это значение некорректно","min":"Значение должно быть не менее чем %s","max":"Значение должно быть не более чем %s","range":"Это значение должно быть от %s до %s","minlength":"Введите не менее %s символов","maxlength":"Введите не более %s символов","length":"Введите от %s до %s символов","mincheck":"Выберите не менее %s значений","maxcheck":"Выберите не более %s значений","check":"Выберите от %s до %s значений","equalto":"Значения должны совпадать","full-name":"Некорректное ФИО.","db-name":"Некорректное значение. Допускаются латинские буквы, цифры, нижнее подчеркивание и тире.","db-user":"Некорректное значение. Допускаются латинские буквы, цифры, нижнее подчеркивание и тире.","date":"Некорректная дата","date-birth":"Некорректная дата рождения","password":"Значение пароля содержит недопустимые символы. Допускаются латинские буквы, цифры и спецсимволы ! $ % @ #","phone":"Некорректный номер телефона. Допускаются только цифры и первый знак плюса.","ipv4":"Некорректный IP-адрес","ipv6":"Некорректный IP-адрес"}');
        });
    </script>
        
                
        <script type="text/javascript" src="/js/vuedist/js/Freeze.js?1639382482915"></script>
    </body>
</html>