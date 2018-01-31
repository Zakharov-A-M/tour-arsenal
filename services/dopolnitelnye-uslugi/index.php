<?php
include_once '../../header.php';
?>

<title>Дополнительные услуги</title>
<div class="menu-row row">
    <div class="maxwidth-theme">
        <div class="col-md-12">
            <div class="nav-main-collapse collapse">
                <div class="menu-only">
                    <nav class="mega-menu">
                        <div class="top_menu_fixed_js">
                            <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenuF">
                                <li class="dropdown ">
                                    <a class="dropdown-toggle" href="../../company/"
                                       title="<?= $json->menu->aboutUs->name ?>">
                                        <?= $json->menu->aboutUs->name ?> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu fixed_menu_ext">
                                        <li class=" ">
                                            <a href="../../company" title="<?= $json->menu->aboutUs->aboutAs ?>">
                                                <?= $json->menu->aboutUs->aboutAs ?>                                                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../../company/area" title="<?= $json->menu->aboutUs->territory ?>">
                                                <?= $json->menu->aboutUs->territory ?>                                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../../company/reviews"
                                               title="<?= $json->menu->aboutUs->guestReviews ?>">
                                                <?= $json->menu->aboutUs->guestReviews ?>                                                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a class="dropdown-toggle" href="../../rooms" title="Размещение">
                                        Размещение
                                        <!--                                                            <i class="fa fa-angle-down"></i>-->
                                    </a>
                                    <!--                                                        <ul class="dropdown-menu fixed_menu_ext">-->
                                    <!--                                                            <li class=" ">-->
                                    <!--                                                                <a href="../../rooms/twin" title="Двухместный Номер Эконом Класса">-->
                                    <!--                                                                    Двухместный Номер Эконом Класса																			</a>-->
                                    <!--                                                            </li>-->
                                    <!--                                                            <li class=" ">-->
                                    <!--                                                                <a href="../../rooms/triple" title="Трёхместный Однокомнатный Номер">-->
                                    <!--                                                                    Трёхместный Однокомнатный Номер																			</a>-->
                                    <!--                                                            </li>-->
                                    <!--                                                            <li class=" ">-->
                                    <!--                                                                <a href="../../rooms/quarter" title="Четырехместный Номер">-->
                                    <!--                                                                    Четырехместный Номер																			</a>-->
                                    <!--                                                            </li>-->
                                    <!--                                                            <li class=" ">-->
                                    <!--                                                                <a href="../../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">-->
                                    <!--                                                                    ЛЮКС Четырёхместный С Камином И Сауной																			</a>-->
                                    <!--                                                            </li>-->
                                    <!--                                                            <li class=" ">-->
                                    <!--                                                                <a href="../../rooms/quarter_cottage" title="Четырёхместный Коттедж">-->
                                    <!--                                                                    Четырёхместный Коттедж																			</a>-->
                                    <!--                                                            </li>-->
                                    <!--                                                            <li class=" ">-->
                                    <!--                                                                <a href="../../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">-->
                                    <!--                                                                    3-комнатный коттедж с сауной «Vip»																			</a>-->
                                    <!--                                                            </li>-->
                                    <!--                                                        </ul>-->
                                </li>
                                <li class="dropdown active">
                                    <a class="dropdown-toggle" href="../../services"
                                       title="<?= $json->menu->services->name ?>">
                                        <?= $json->menu->services->name ?> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu fixed_menu_ext">
                                        <li class=" ">
                                            <a href="../rybalka" title="<?= $json->menu->services->fishing ?>">
                                                <?= $json->menu->services->fishing ?>                                                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../okhota" title="<?= $json->menu->services->hunt ?>">
                                                <?= $json->menu->services->hunt ?>                                                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../banya" title="<?= $json->menu->services->bathhouse ?>">
                                                <?= $json->menu->services->bathhouse ?>                                                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../ostrov-robinzonada"
                                               title="<?= $json->menu->services->island ?>">
                                                <?= $json->menu->services->island ?>                                                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../dosug-v-lesu-griby-yagody"
                                               title="<?= $json->menu->services->forest ?>">
                                                <?= $json->menu->services->forest ?>                                                                        </a>
                                        </li>
                                        <li class=" active">
                                            <a href="../dopolnitelnye-uslugi"
                                               title="<?= $json->menu->services->addServices ?>">
                                                <?= $json->menu->services->addServices ?>                                                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="../zimnie-razvlecheniya"
                                               title="<?= $json->menu->services->winterRelax ?>">
                                                <?= $json->menu->services->winterRelax ?>                                                                        </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a class="" href="../../price" title="<?= $json->menu->cost->name ?>">
                                        <?= $json->menu->cost->name ?>                                            </a>
                                </li>
                                <li class=" ">
                                    <a class="" href="../../promo" title="<?= $json->menu->promo->name ?>">
                                        <?= $json->menu->promo->name ?>                                            </a>
                                </li>
                                <li class=" ">
                                    <a class="" href="../../galereya" title="<?= $json->menu->gallery->name ?>">
                                        <?= $json->menu->gallery->name ?>                                            </a>
                                </li>
                                <li class=" ">
                                    <a class="" href="../../contacts" title="<?= $json->menu->contacts->name ?>">
                                        <?= $json->menu->contacts->name ?>                                            </a>
                                </li>
                                <div class="search">
                                    <div class="search-input-div">
                                        <input class="search-input" type="text" autocomplete="off" maxlength="50"
                                               size="40" placeholder="" value="" name="q">
                                    </div>
                                    <div class="search-button-div">
                                        <button class="btn btn-search btn-default" value="Найти" name="s" type="submit">
                                            Найти
                                        </button>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="table-menu hidden-xs">
                            <table>
                                <tr>
                                    <td class="dropdown ">
                                        <div class="wrap">
                                            <a class="dropdown-toggle link_first" href="../../company/"
                                               title="<?= $json->menu->aboutUs->name ?>">
                                                <?= $json->menu->aboutUs->name ?> &nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
                                            <span class="tail"></span>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="../../company"
                                                       title="<?= $json->menu->aboutUs->aboutAs ?><"><?= $json->menu->aboutUs->aboutAs ?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../../company/area"
                                                       title="<?= $json->menu->aboutUs->territory ?>"><?= $json->menu->aboutUs->territory ?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../../company/reviews"
                                                       title="<?= $json->menu->aboutUs->guestReviews ?>"><?= $json->menu->aboutUs->guestReviews ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="dropdown ">
                                        <div class="wrap">
                                            <a class="dropdown-toggle link_first" href="rooms" title="Размещение">
                                                Размещение &nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
                                            <!--                                                                <span class="tail"></span>-->
                                            <!--                                                                <ul class="dropdown-menu">-->
                                            <!--                                                                    <li class=" ">-->
                                            <!--                                                                        <a href="../../rooms/twin" title="Двухместный Номер Эконом Класса">Двухместный Номер Эконом Класса</a>-->
                                            <!--                                                                    </li>-->
                                            <!--                                                                    <li class=" ">-->
                                            <!--                                                                        <a href="../../rooms/triple" title="Трёхместный Однокомнатный Номер">Трёхместный Однокомнатный Номер</a>-->
                                            <!--                                                                    </li>-->
                                            <!--                                                                    <li class=" ">-->
                                            <!--                                                                        <a href="../../rooms/quarter" title="Четырехместный Номер">Четырехместный Номер</a>-->
                                            <!--                                                                    </li>-->
                                            <!--                                                                    <li class=" ">-->
                                            <!--                                                                        <a href="../../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">ЛЮКС Четырёхместный С Камином И Сауной</a>-->
                                            <!--                                                                    </li>-->
                                            <!--                                                                    <li class=" ">-->
                                            <!--                                                                        <a href="../../rooms/quarter_cottage" title="Четырёхместный Коттедж">Четырёхместный Коттедж</a>-->
                                            <!--                                                                    </li>-->
                                            <!--                                                                    <li class=" ">-->
                                            <!--                                                                        <a href="../../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">3-комнатный коттедж с сауной «Vip»</a>-->
                                            <!--                                                                    </li>-->
                                            <!--                                                                </ul>-->
                                        </div>
                                    </td>
                                    <td class="dropdown active">
                                        <div class="wrap">
                                            <a class="dropdown-toggle link_first" href="../"
                                               title="<?= $json->menu->services->name ?>">
                                                <?= $json->menu->services->name ?> &nbsp;<i
                                                        class="fa fa-angle-down"></i>
                                            </a>
                                            <span class="tail"></span>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="../rybalka"
                                                       title="<?= $json->menu->services->fishing ?>"><?= $json->menu->services->fishing ?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../okhota"
                                                       title="<?= $json->menu->services->hunt ?>"><?= $json->menu->services->hunt ?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../banya"
                                                       title="<?= $json->menu->services->bathhouse ?>"><?= $json->menu->services->bathhouse ?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../ostrov-robinzonada"
                                                       title="<?= $json->menu->services->island ?>"><?= $json->menu->services->island ?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../dosug-v-lesu-griby-yagody"
                                                       title="<?= $json->menu->services->forest ?>"><?= $json->menu->services->forest ?></a>
                                                </li>
                                                <li class=" active">
                                                    <a href="../dopolnitelnye-uslugi"
                                                       title="<?= $json->menu->services->addServices ?>"><?= $json->menu->services->addServices ?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../zimnie-razvlecheniya"
                                                       title="<?= $json->menu->services->winterRelax ?>"><?= $json->menu->services->winterRelax ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="wrap">
                                            <a class=" link_first" href="../../price"
                                               title="<?= $json->menu->cost->name ?>">
                                                <?= $json->menu->cost->name ?>                                                            </a>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="wrap">
                                            <a class=" link_first" href="../../promo"
                                               title="<?= $json->menu->promo->name ?>">
                                                <?= $json->menu->promo->name ?>                                                            </a>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="wrap">
                                            <a class=" link_first" href="../../galereya"
                                               title="<?= $json->menu->gallery->name ?>">
                                                <?= $json->menu->gallery->name ?>                                                            </a>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="wrap">
                                            <a class=" link_first" href="../../contacts"
                                               title="<?= $json->menu->contacts->name ?>">
                                                <?= $json->menu->contacts->name ?>                                                            </a>
                                        </div>
                                    </td>
                                    <td class="dropdown js-dropdown nosave" style="display:none;">
                                        <div class="wrap">
                                            <a class="dropdown-toggle more-items" href="/">
                                                <span>...</span>
                                            </a>
                                            <span class="tail"></span>
                                            <ul class="dropdown-menu"></ul>
                                        </div>
                                    </td>
                                    <td class="search-item nosave">
                                        <div class="wrap">
                                            <a href="/">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenu">
                            <li class="dropdown ">
                                <a class="dropdown-toggle" href="../../company"
                                   title="<?= $json->menu->aboutUs->name ?>">
                                    <?= $json->menu->aboutUs->name ?> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="../../company" title="<?= $json->menu->aboutUs->aboutAs ?>">
                                            <?= $json->menu->aboutUs->aboutAs ?>                                                                    </a>
                                    </li>
                                    <li class=" ">
                                        <a href="../../company/area" title="<?= $json->menu->aboutUs->territory ?>">
                                            <?= $json->menu->aboutUs->territory ?>                                                                    </a>
                                    </li>
                                    <li class=" ">
                                        <a href="../../company/reviews"
                                           title="<?= $json->menu->aboutUs->guestReviews ?>">
                                            <?= $json->menu->aboutUs->guestReviews ?>                                                                    </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a class="dropdown-toggle" href="../../rooms" title="Размещение">
                                    Размещение
                                    <!--                                                        <i class="fa fa-angle-down"></i>-->
                                </a>
                                <!--                                                    <ul class="dropdown-menu">-->
                                <!--                                                        <li class=" ">-->
                                <!--                                                            <a href="../../rooms/twin" title="Двухместный Номер Эконом Класса">-->
                                <!--                                                                Двухместный Номер Эконом Класса																	</a>-->
                                <!--                                                        </li>-->
                                <!--                                                        <li class=" ">-->
                                <!--                                                            <a href="../../rooms/triple" title="Трёхместный Однокомнатный Номер">-->
                                <!--                                                                Трёхместный Однокомнатный Номер																	</a>-->
                                <!--                                                        </li>-->
                                <!--                                                        <li class=" ">-->
                                <!--                                                            <a href="../../rooms/quarter" title="Четырехместный Номер">-->
                                <!--                                                                Четырехместный Номер																	</a>-->
                                <!--                                                        </li>-->
                                <!--                                                        <li class=" ">-->
                                <!--                                                            <a href="../../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">-->
                                <!--                                                                ЛЮКС Четырёхместный С Камином И Сауной																	</a>-->
                                <!--                                                        </li>-->
                                <!--                                                        <li class=" ">-->
                                <!--                                                            <a href="../../rooms/quarter_cottage" title="Четырёхместный Коттедж">-->
                                <!--                                                                Четырёхместный Коттедж																	</a>-->
                                <!--                                                        </li>-->
                                <!--                                                        <li class=" ">-->
                                <!--                                                            <a href="../../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">-->
                                <!--                                                                3-комнатный коттедж с сауной «Vip»																	</a>-->
                                <!--                                                        </li>-->
                                <!--                                                    </ul>-->
                            </li>
                            <li class="dropdown active">
                                <a class="dropdown-toggle" href="../" title="<?= $json->menu->services->name ?>">
                                    <?= $json->menu->services->name ?> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="../rybalka" title="<?= $json->menu->services->fishing ?>">
                                            <?= $json->menu->services->fishing ?>                                                    </a>
                                    </li>
                                    <li class=" ">
                                        <a href="../okhota" title="<?= $json->menu->services->hunt ?>">
                                            <?= $json->menu->services->hunt ?>                                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="../banya" title="<?= $json->menu->services->bathhouse ?>">
                                            <?= $json->menu->services->bathhouse ?>                                                    </a>
                                    </li>
                                    <li class=" ">
                                        <a href="../ostrov-robinzonada" title="<?= $json->menu->services->island ?>">
                                            <?= $json->menu->services->island ?>                                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="../dosug-v-lesu-griby-yagody"
                                           title="<?= $json->menu->services->forest ?>">
                                            <?= $json->menu->services->forest ?>                                                        </a>
                                    </li>
                                    <li class=" active">
                                        <a href="../dopolnitelnye-uslugi"
                                           title="<?= $json->menu->services->addServices ?>">
                                            <?= $json->menu->services->addServices ?>                                                </a>
                                    </li>
                                    <li class=" ">
                                        <a href="../zimnie-razvlecheniya"
                                           title="<?= $json->menu->services->winterRelax ?>">
                                            <?= $json->menu->services->winterRelax ?>                                                </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a class="" href="../../price" title="<?= $json->menu->cost->name ?>">
                                    <?= $json->menu->cost->name ?>                                    </a>
                            </li>
                            <li class=" ">
                                <a class="" href="../../promo" title="<?= $json->menu->promo->name ?>">
                                    <?= $json->menu->promo->name ?>                                    </a>
                            </li>
                            <li class=" ">
                                <a class="" href="../../galereya" title="<?= $json->menu->gallery->name ?>">
                                    <?= $json->menu->gallery->name ?>                                    </a>
                            </li>
                            <li class=" ">
                                <a class="" href="../../contacts" title="<?= $json->menu->contacts->name ?>">
                                    <?= $json->menu->contacts->name ?>                                    </a>
                            </li>
                            <div class="search">
                                <div class="search-input-div">
                                    <input class="search-input" type="text" autocomplete="off" maxlength="50" size="40"
                                           placeholder="Найти" value="" name="q">
                                </div>
                                <div class="search-button-div">
                                    <button class="btn btn-search btn-default" value="Найти" name="s" type="submit">
                                        Найти
                                    </button>
                                </div>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="header_search hide">
        <div class="maxwidth-theme">
            <div class="col-md-12">
                <style type="text/css">
                    .bx_searche .bx_image {
                        width: 25px;
                        height: 25px;
                    }

                    .bx_searche .bx_img_element {
                        width: 45px;
                        height: 36px;
                    }

                    .bx_searche .bx_item_block {
                        min-height: 35px;
                        line-height: 35px;
                </style>
                <div class="search" id="title-search">
                    <div class="maxwidth-theme">
                        <div class="col-md-12">
                            <form action="http://tour-arsenal.ru/search/">
                                <div class="search-input-div">
                                    <input class="search-input" id="title-search-input" type="text" name="q" value=""
                                           placeholder="Найти" size="40" maxlength="50" autocomplete="off"/>
                                </div>
                                <div class="search-button-div">
                                    <button class="btn btn-search btn-default" type="submit" name="s" value="Найти">
                                        Найти
                                    </button>
                                    <span class="fa fa-close"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(".body").attr("class", '');
                    var jsControl = new JCTitleSearch({
                        //'WAIT_IMAGE': '/bitrix/themes/.default/images/wait.gif',
                        'AJAX_PAGE': '/services/dopolnitelnye-uslugi/',
                        'CONTAINER_ID': 'title-search',
                        'INPUT_ID': 'title-search-input',
                        'MIN_QUERY_LEN': 2
                    });
                </script>
            </div>
        </div>
    </div>
</div>                </div>
<div class="line-row visible-xs"></div>
</header>
<div role="main" class="main">
    <section class="page-top COLOR">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../../"
                                                                                                     title="<?= $json->services->mainLink[0] ?>"
                                                                                                     itemprop="url"><span
                                                itemprop="title"><?= $json->services->mainLink[0] ?></span></a></li>
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../"
                                                                                                     title="Услуги"
                                                                                                     itemprop="url"><span
                                                itemprop="title"><?= $json->services->mainLink[1] ?></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?= $json->AddServices->mainText ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="col-md-3 col-sm-3 left-menu-md">
                    <aside class="sidebar">
                        <ul class="nav nav-list side-menu">
                            <li class=" ">
                                <a href="../rybalka"><?= $json->services->menu->fishing ?></a>
                            </li>
                            <li class=" ">
                                <a href="../okhota"><?= $json->services->menu->hunting ?></a>
                            </li>
                            <li class=" ">
                                <a href="../banya"><?= $json->services->menu->bathhouse ?></a>
                            </li>
                            <li class=" ">
                                <a href="../ostrov-robinzonada"><?= $json->services->menu->iclandRob ?></a>
                            </li>
                            <li class=" ">
                                <a href="../dosug-v-lesu-griby-yagody"><?= $json->services->menu->relaxInForrest ?></a>
                            </li>
                            <li class="active ">
                                <a href="../dopolnitelnye-uslugi"><?= $json->services->menu->additionalServices ?></a>
                            </li>
                            <li class=" ">
                                <a href="../zimnie-razvlecheniya"><?= $json->services->menu->winterInter ?></a>
                            </li>
                        </ul>
                    </aside>
                    <div class="sidearea">
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 content-md">
                    <div class="detail services">


                        <div class="detailimage image-left col-md-4 col-sm-4 col-xs-12"><a
                                    href="../../upload/services/dopoln-uslugi/df9afadef666d62_3192.f582a58e98_p-middle.jpg" class="fancybox"
                                    title="Дополнительные услуги"><img
                                        src="../../upload/services/dopoln-uslugi/df9afadef666d62_3192.f582a58e98_p-middle.jpg"
                                        class="img-responsive" title="Дополнительные услуги"
                                        alt="Дополнительные услуги"/></a></div>

                        <div class="ask_a_question">
                            <div class="inner">
			<span class="btn btn-default" id="askQuestion" services="<?= $json->AddServices->mainText ?>">
                <span><?= $json->serviceFishing->questionBlock->buttonText ?></span>
            </span>
                                <div class="margin-bottom-20">
                                    <?= $json->serviceFishing->questionBlock->text ?>
                                </div>
                            </div>
                        </div>


                        <div class="content">

                            <?= $json->AddServices->firsText1 ?><br>
                            <br>
                            <?= $json->AddServices->textPageAddService->mainText ?><br>
                            <ul>
                                <?php
                                foreach ($json->AddServices->textPageAddService->list as $item) {
                                    echo '<li>' . $item . '</li>';
                                }
                                ?>
                            </ul>
                            <br>
                            <br>
                            <?= $json->AddServices->textPageHotTime->mainText ?><br>
                            <ul>
                                <?php
                                foreach ($json->AddServices->textPageHotTime->list as $item) {
                                    echo '<li>' . $item . '</li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <hr/>


                        <div class="wraps">
                            <h4 class="title_block"><?= $json->AddServices->gallety->textmain ?></h4>
                            <div class="item-views portfolio front">
                                <div class="row" itemscope itemtype="http://schema.org/ItemList">
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6208.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6208.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6212.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6212.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6236.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6236.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_0842.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_0842.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7705.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7705.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7765.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7765.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7891.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7891.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7715.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7715.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7950.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7950.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/CIMG3131.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/CIMG3131.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_4138.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_4138.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6000.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6000.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6102.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6102.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6109.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6109.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6159.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6159.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6163.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6163.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6164.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6164.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6172.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6172.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6184.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6184.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7962.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7962.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7972.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7972.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7980.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7980.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8003.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8003.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8294.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8294.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8318.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8318.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8343.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8343.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8372.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8372.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                        </div>

                        <div class="order-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-5 valign">
                                    <span class="btn btn-default btn-lg" id="orderServices"
                                          services="<?= $json->AddServices->mainText ?>"><span><?= $json->orderService->buttonText ?></span></span>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 valign">
                                    <div class="text">
                                        <?= $json->orderService->orderText ?>            </div>
                                </div>
                            </div>
                        </div>
                        <hr/>


                        <!--'start_frame_cache_video'--><!--'end_frame_cache_video'-->


                    </div>
                    <div style="clear:both"></div>
                    <div class="row">
                        <div class="col-md-6 share">
                            <span class="text">Поделиться ссылкой:</span>
                            <script type="text/javascript" src="http://yastatic.net/share2/share.js" async="async"
                                    charset="utf-8"></script>
                            <div class="ya-share2"
                                 data-services="vkontakte,facebook,twitter,viber,whatsapp,odnoklassniki,moimir"></div>
                        </div>
                        <div class="col-md-6">
                            <a class="back-url" href="../"><i
                                        class="fa fa-chevron-left"></i><?= $json->backList->mainText ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        </div>
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="top_block clearfix">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="info">
                            <div class="compass">
                                <i class="fa"></i>
                                Республика Карелия, п. Лумиваара +3,5 км.Ладожские шхеры.
                            </div>
                            <div class="contacts"><a class="btn btn-default" href="../../contacts">Схема проезда</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                            <div class="col-md-9 col-sm-9">
                                <div class="bottom-menu">
                                    <div class="items row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../../company">О нас</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../../rooms">Размещение</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item active">
                                                <div class="title">
                                                    <a href="../">Услуги</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../../price">Цены</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../../promo">Акции</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../../galereya">Галерея</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../../contacts">Контакты</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="social pull-right">
                                    <div class="social-icons">
                                        <!-- noindex -->
                                        <div class="title">Мы в соцсетях:</div>
                                        <ul>
                                            <li class="vk">
                                                <a href="https://vk.com/tour_arsenal" target="_blank" rel="nofollow"
                                                   title="Вконтакте">
                                                    Вконтакте <i class="fa fa-vk"></i>
                                                    <i class="fa fa-vk hide"></i>
                                                </a>
                                            </li>
                                            <li class="lj">
                                                <a href="https://www.youtube.com/channel/UCmomd_mcGiaMxATj35_V_Jw"
                                                   target="_blank" rel="nofollow" title="YouTube">
                                                    YouTube <i class="fa fa-youtube"></i>
                                                    <i class="fa fa-youtube hide"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /noindex -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="maxwidth-theme">
                <div class="bottom_block clearfix">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                            <div class="copy">
                                &copy; 2017 Все права защищены.
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <div id="bx-composite-banner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bx_areas">
</div>
</body>
</html>