<?php

include_once 'api/func.php';
include_once 'api/country/country.php';
include_once 'api/bd/connectBD.php';


//ConnectDB::connect_BD();

?>


<!DOCTYPE html>
<html class="  ">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,cyrillic'; rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="База отдыха – это территория где можно забыть о внешнем мире и полностью посвятить время своей семье и друзьям. Устройте незабываемые приключения на Базе отдыха!" />
    <link href="http://tour-arsenal.by/bitrix/cache/css/s1/aspro-resort/kernel_main/kernel_main.css?150839992529761" type="text/css"  rel="stylesheet" />
    <link href="http://tour-arsenal.by/bitrix/cache/css/s1/aspro-resort/default_95d5eff7abedc35c6060dd1d3ce9311b/default_95d5eff7abedc35c6060dd1d3ce9311b.css?1502657030896" type="text/css"  rel="stylesheet" />
    <link href="http://tour-arsenal.by/bitrix/cache/css/s1/aspro-resort/template_ac7466d0103bc99d1e005bfea49e2c5a/template_ac7466d0103bc99d1e005bfea49e2c5a.css?1502659483321481" type="text/css"  data-template-style="true"  rel="stylesheet" />
    <script type="text/javascript">if(!window.BX)window.BX={};if(!window.BX.message)window.BX.message=function(mess){if(typeof mess=='object') for(var i in mess) BX.message[i]=mess[i]; return true;};</script>
    <script type="text/javascript">(window.BX||top.BX).message({'JS_CORE_LOADING':'Загрузка...','JS_CORE_NO_DATA':'- Нет данных -','JS_CORE_WINDOW_CLOSE':'Закрыть','JS_CORE_WINDOW_EXPAND':'Развернуть','JS_CORE_WINDOW_NARROW':'Свернуть в окно','JS_CORE_WINDOW_SAVE':'Сохранить','JS_CORE_WINDOW_CANCEL':'Отменить','JS_CORE_WINDOW_CONTINUE':'Продолжить','JS_CORE_H':'ч','JS_CORE_M':'м','JS_CORE_S':'с','JSADM_AI_HIDE_EXTRA':'Скрыть лишние','JSADM_AI_ALL_NOTIF':'Показать все','JSADM_AUTH_REQ':'Требуется авторизация!','JS_CORE_WINDOW_AUTH':'Войти','JS_CORE_IMAGE_FULL':'Полный размер'});</script>
    <script type="text/javascript">(window.BX||top.BX).message({'LANGUAGE_ID':'ru','FORMAT_DATE':'DD.MM.YYYY','FORMAT_DATETIME':'DD.MM.YYYY HH:MI:SS','COOKIE_PREFIX':'BITRIX_SM','SERVER_TZ_OFFSET':'10800','SITE_ID':'s1','SITE_DIR':'/','USER_ID':'','SERVER_TIME':'1509983944','USER_TZ_OFFSET':'0','USER_TZ_AUTO':'Y','bitrix_sessid':'bcedb80867a78b7f7f108c0963dc83ec'});</script>


    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/core/core.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/core/core_db.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/core/core_ajax.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/json/json2.min.js?14758345923467"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/core/core_ls.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/core/core_fx.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/core/core_frame_cache.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/jquery/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/core/core_popup.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/js/main/ajax.js"></script>
    <script type="text/javascript">BX.setCSSList(['/bitrix/js/main/core/css/core.css','/bitrix/js/main/core/css/core_popup.css','/bitrix/js/main/core/css/core_date.css','/bitrix/templates/aspro-resort/css/bootstrap.css','/bitrix/templates/aspro-resort/css/fonts/font-awesome/css/font-awesome.min.css','/bitrix/templates/aspro-resort/vendor/flexslider/flexslider.css','/bitrix/templates/aspro-resort/css/jquery.fancybox.css','/bitrix/templates/aspro-resort/css/theme-elements.css','/bitrix/templates/aspro-resort/css/theme-responsive.css','/bitrix/templates/.default/ajax/ajax.css','/bitrix/templates/aspro-resort/styles.css','/bitrix/templates/aspro-resort/template_styles.css','/bitrix/templates/aspro-resort/css/responsive.css','/bitrix/templates/aspro-resort/themes/CUSTOM_s1/colors.css','/bitrix/templates/aspro-resort/components/bitrix/map.yandex.system/.default/style.css']); </script>
    <script>BX.message({'JS_REQUIRED':'Заполните это поле!','JS_FORMAT':'Неверный формат!','JS_FILE_EXT':'Недопустимое расширение файла!','JS_PASSWORD_COPY':'Пароли не совпадают!','JS_PASSWORD_LENGTH':'Минимум 6 символов!','JS_ERROR':'Неверно заполнено поле!','JS_RECAPTCHA_ERROR':'Не подтверждено!','JS_PROCESSING_ERROR':'Согласитесь с условиями!','JS_FILE_SIZE':'Максимальный размер 5мб!','JS_FILE_BUTTON_NAME':'Выберите файл','JS_FILE_DEFAULT':'Файл не найден','JS_DATE':'Некорректная дата!','JS_DATETIME':'Некорректная дата/время!','S_CALLBACK':'Заказать звонок','ERROR_INCLUDE_MODULE_RESORT_TITLE':'Ошибка подключения модуля &laquo;Аспро: Курорт - сайт базы отдыха, санатория, гостиницы&raquo;','ERROR_INCLUDE_MODULE_RESORT_TEXT':'Ошибка подключения модуля &laquo;Аспро: Курорт - сайт базы отдыха, санатория, гостиницы&raquo;.<br />Пожалуйста установите модуль и повторите попытку','S_SERVICES':'Наши услуги','S_SERVICES_SHORT':'Услуги','S_TO_ALL_SERVICES':'Все услуги','S_CATALOG':'Каталог товаров','S_CATALOG_SHORT':'Каталог','S_TO_ALL_CATALOG':'Весь каталог','S_CATALOG_FAVORITES':'Наши товары','S_CATALOG_FAVORITES_SHORT':'Товары','S_NEWS':'Новости','S_TO_ALL_NEWS':'Все новости','S_COMPANY':'О компании','S_OTHER':'Прочее','FANCY_CLOSE':'Закрыть','FANCY_NEXT':'Следующий','FANCY_PREV':'Предыдущий','S_MOBILE_MENU':'Меню','CT_BST_SEARCH_BUTTON':'Найти','HEADER_CONTACTS_LINK':'Схема<br> проезда','CONTACTS_LINK':'Схема проезда','INSTAGRAM_TITLE':'Мы в Instagram','INSTAGRAM_DESCRIPTION':'Отдых в экологически чистом месте, на берегу Лесного озера — это то, о чём мечтает любой горожанин!'})</script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <style>.maxwidth-banner{max-width: auto;}</style>
    <meta property="og:title" content="Туркомплекс "Арсенал" - Главная" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="/" />
    <meta property="og:description" content="База отдыха – это территория где можно забыть о внешнем мире и полностью посвятить время своей семье и друзьям. Устройте незабываемые приключения на Базе отдыха!" />


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/blink.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/vendor/jquery.easing.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/vendor/jquery.appear.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/vendor/jquery.cookie.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/vendor/bootstrap.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/vendor/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/vendor/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jqModal.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/detectmobilebrowser.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/device.min.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jquery.alphanumeric.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jquery.counterup.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jquery.dotdotdot.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/general.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/custom.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/components/bitrix/search.title/script.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/js/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript" src="http://tour-arsenal.by/bitrix/templates/aspro-resort/components/bitrix/map.yandex.view/.default/script.js"></script>
    <script type="text/javascript">var _ba = _ba || []; _ba.push(["aid", "bcc93b1d8395e5bd858a567ff5f49a50"]); _ba.push(["host", "tour-arsenal.ru"]); (function() {var ba = document.createElement("script"); ba.type = "text/javascript"; ba.async = true;ba.src = (document.location.protocol == "https:" ? "https://" : "http://") + "bitrix.info/ba.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ba, s);})();</script>


</head>
<body>
<!--<div class="jqmOverlay" style="height: 100%; width: 100%; position: fixed; left: 0px; top: 0px; z-index: 2999; opacity: 0.5;"></div>-->


<div id="panel"></div>
<script type='text/javascript'>
    var arResortOptions = ({
        'SITE_DIR' : '/',
        'SITE_ID' : 's1',
        'SITE_TEMPLATE_PATH' : '/bitrix/templates/aspro-resort',
        'THEME' : ({
            'THEME_SWITCHER' : 'N',
            'BASE_COLOR' : 'CUSTOM',
            'BASE_COLOR_CUSTOM' : '468d41',
            'TOP_MENU' : 'COLOR',
            'TOP_MENU_FIXED' : 'Y',
            'COLORED_LOGO' : 'N',
            'SIDE_MENU' : 'LEFT',
            'SCROLLTOTOP_TYPE' : 'ROUND_COLOR',
            'SCROLLTOTOP_POSITION' : 'PADDING',
            'USE_CAPTCHA_FORM' : 'RECAPTCHA',
            'DISPLAY_PROCESSING_NOTE' : 'Y',
            'PHONE_MASK' : '+7 (999) 999-99-99',
            'VALIDATE_PHONE_MASK' : '^[+][0-9] [(][0-9]{3}[)] [0-9]{3}[-][0-9]{2}[-][0-9]{2}$',
            'DATE_MASK' : 'd.m.y',
            'DATE_PLACEHOLDER' : 'дд.мм.гггг',
            'VALIDATE_DATE_MASK' : '^[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{4}$',
            'DATETIME_MASK' : 'd.m.y h:s',
            'DATETIME_PLACEHOLDER' : 'дд.мм.гггг чч:мм',
            'VALIDATE_DATETIME_MASK' : '^[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{4} [0-9]{1,2}\:[0-9]{1,2}$',
            'VALIDATE_FILE_EXT' : 'png|jpg|jpeg|gif|doc|docx|xls|xlsx|txt|pdf|odt|rtf',
            'SOCIAL_VK' : 'https://vk.com/tour_arsenal',
            'SOCIAL_FACEBOOK' : '',
            'SOCIAL_TWITTER' : '',
            'SOCIAL_YOUTUBE' : 'https://www.youtube.com/channel/UCmomd_mcGiaMxATj35_V_Jw',
            'SOCIAL_ODNOKLASSNIKI' : '',
            'SOCIAL_GOOGLEPLUS' : '',
            'BANNER_WIDTH' : 'AUTO',
            'TEASERS_INDEX' : '',
            'CATALOG_INDEX' : '',
            'CATALOG_FAVORITES_INDEX' : '',
            'BIGBANNER_ANIMATIONTYPE' : 'SLIDE_HORIZONTAL',
            'BIGBANNER_SLIDESSHOWSPEED' : '5000',
            'BIGBANNER_ANIMATIONSPEED' : '600',
            'PARTNERSBANNER_SLIDESSHOWSPEED' : '5000',
            'PARTNERSBANNER_ANIMATIONSPEED' : '600',
            'USE_YA_COUNTER' : 'N',
            'YA_COUNTER_ID' : '',
            'USE_FORMS_GOALS' : 'COMMON',
            'USE_SALE_GOALS' : '',
            'USE_DEBUG_GOALS' : 'N',
        })
    });
</script>
<div class="body index">
    <div class="body_media"></div>
    <header class="topmenu-COLOR canfixed">
        <div class="logo_and_menu-row">
            <div class="logo-row row">
                <div class="maxwidth-theme">
                    <div class="desc_wrap col-md-7 col-sm-7">
                        <div class="row">
                            <div class="top-description col-md-5 hidden-sm hidden-xs">
                                <a href="/"><?php echo $json->header->title;  ?></a>
                            </div>
                            <div class="scheme col-md-3 col-sm-3">
                                <a href="http://tour-arsenal.by/contacts/"><?= $json->header->scheme ?></a>
                            </div>
                            <div class="logo">
                                <a href="http://tour-arsenal.by"><img src="logo.png" alt='Туркомплекс "Арсенал"' title='Туркомплекс "Арсенал"' /></a>									</div>
                            <div class="fixed_menu">
                                <div class="title">Меню</div>
                                <div class="nav-main-collapse">
                                    <div class="menu_wr mega-menu"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="callback_wrap col-md-5 col-sm-5 col-xs-12">
                        <div class="top-callback">
                            <div class="callback pull-right hidden-xs">
                                <span class="btn btn-default"><?= $json->header->buttonOrder ?></span>
                            </div>
                            <div class="phone pull-right hidden-xs c_2">
                                <div class="phone-number">
                                    <div>
                                        <a href="tel:+79216044033" rel="nofollow"><span>+7 (921)</span> 6-044-033</a><a href="tel:+79216047816" rel="nofollow"><span>+7 (921)</span> 604-78-16</a>											</div>
                                </div>
                            </div>
                            <button class="burger btn btn-responsive-nav visible-xs" data-toggle="collapse" data-target=".nav-main-collapse"></button>
                        </div>
                    </div>
                </div>
            </div>




