<?php
include_once 'header.php';
?>
    <title>Дача на Ладоге - Главная</title>
    <div class="menu-row row">
        <div class="maxwidth-theme">
            <div class="col-md-12">
                <div class="nav-main-collapse collapse">
                    <div class="menu-only">
                        <nav class="mega-menu">
                            <div class="top_menu_fixed_js">
                                <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenuF">
                                    <li class="dropdown ">
                                        <a class="dropdown-toggle" href="company/"
                                           title="<?= $json->menu->aboutUs->name ?>">
                                            <?= $json->menu->aboutUs->name ?> <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu fixed_menu_ext">
                                            <li class=" ">
                                                <a href="company" title="<?= $json->menu->aboutUs->aboutAs ?>">
                                                    <?= $json->menu->aboutUs->aboutAs ?>                                                                        </a>
                                            </li>
                                            <li class=" ">
                                                <a href="company/area" title="<?= $json->menu->aboutUs->territory ?>">
                                                    <?= $json->menu->aboutUs->territory ?>                                                        </a>
                                            </li>
                                            <li class=" ">
                                                <a href="company/reviews"
                                                   title="<?= $json->menu->aboutUs->guestReviews ?>">
                                                    <?= $json->menu->aboutUs->guestReviews ?>                                                                            </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="dropdown-toggle" href="rooms" title="Размещение">
                                            Размещение <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu fixed_menu_ext">
                                            <li class=" ">
                                                <a href="rooms/twin" title="Двухместный Номер Эконом Класса">
                                                    Двухместный Номер Эконом Класса </a>
                                            </li>
                                            <li class=" ">
                                                <a href="rooms/triple" title="Трёхместный Однокомнатный Номер">
                                                    Трёхместный Однокомнатный Номер </a>
                                            </li>
                                            <li class=" ">
                                                <a href="rooms/quarter" title="Четырехместный Номер">
                                                    Четырехместный Номер </a>
                                            </li>
                                            <li class=" ">
                                                <a href="rooms/quarter_cottage_sauna_fireplace"
                                                   title="ЛЮКС Четырёхместный С Камином И Сауной">
                                                    ЛЮКС Четырёхместный С Камином И Сауной </a>
                                            </li>
                                            <li class=" ">
                                                <a href="rooms/quarter_cottage" title="Четырёхместный Коттедж">
                                                    Четырёхместный Коттедж </a>
                                            </li>
                                            <li class=" ">
                                                <a href="rooms/3-komnatnyy-kottedzh-s-saunoy-vip"
                                                   title="3-комнатный коттедж с сауной «Vip»">
                                                    3-комнатный коттедж с сауной «Vip» </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown ">
                                        <a class="dropdown-toggle" href="services"
                                           title="<?= $json->menu->services->name ?>">
                                            <?= $json->menu->services->name ?> <i class="fa fa-angle-down"></i>
                                        </a>
                                        <ul class="dropdown-menu fixed_menu_ext">
                                            <li class=" ">
                                                <a href="services/rybalka"
                                                   title="<?= $json->menu->services->fishing ?>">
                                                    <?= $json->menu->services->fishing ?>                                                                        </a>
                                            </li>
                                            <li class=" ">
                                                <a href="services/okhota" title="<?= $json->menu->services->hunt ?>">
                                                    <?= $json->menu->services->hunt ?>                                                                            </a>
                                            </li>
                                            <li class=" ">
                                                <a href="services/banya"
                                                   title="<?= $json->menu->services->bathhouse ?>">
                                                    <?= $json->menu->services->bathhouse ?>                                                                            </a>
                                            </li>
                                            <li class=" ">
                                                <a href="services/dosug-v-lesu-griby-yagody"
                                                   title="<?= $json->menu->services->forest ?>">
                                                    <?= $json->menu->services->forest ?>                                                                        </a>
                                            </li>
                                            <li class=" ">
                                                <a href="services/dopolnitelnye-uslugi"
                                                   title="<?= $json->menu->services->addServices ?>">
                                                    <?= $json->menu->services->addServices ?>                                                                        </a>
                                            </li>
                                            <li class=" ">
                                                <a href="services/zimnie-razvlecheniya"
                                                   title="<?= $json->menu->services->winterRelax ?>">
                                                    <?= $json->menu->services->winterRelax ?>                                                                        </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a class="" href="price" title="<?= $json->menu->cost->name ?>">
                                            <?= $json->menu->cost->name ?>                                            </a>
                                    </li>
                                    <li class=" ">
                                        <a class="" href="promo" title="<?= $json->menu->promo->name ?>">
                                            <?= $json->menu->promo->name ?>                                            </a>
                                    </li>
                                    <li class=" ">
                                        <a class="" href="galereya" title="<?= $json->menu->gallery->name ?>">
                                            <?= $json->menu->gallery->name ?>                                            </a>
                                    </li>
                                    <li class=" ">
                                        <a class="" href="contacts" title="<?= $json->menu->contacts->name ?>">
                                            <?= $json->menu->contacts->name ?>                                            </a>
                                    </li>
                                    <!--<div class="search">
                                        <div class="search-input-div">
                                            <input class="search-input" type="text" autocomplete="off" maxlength="50" size="40" placeholder="" value="" name="q">
                                        </div>
                                        <div class="search-button-div">
                                            <button class="btn btn-search btn-default" value="Найти" name="s" type="submit">Найти</button>
                                        </div>
                                    </div>-->
                                </ul>
                            </div>
                            <div class="table-menu hidden-xs">
                                <table>
                                    <tr>
                                        <td class="dropdown ">
                                            <div class="wrap">
                                                <a class="dropdown-toggle link_first" href="company/"
                                                   title="<?= $json->menu->aboutUs->name ?>">
                                                    <?= $json->menu->aboutUs->name ?> &nbsp;<i
                                                            class="fa fa-angle-down"></i>
                                                </a>
                                                <span class="tail"></span>
                                                <ul class="dropdown-menu">
                                                    <li class=" ">
                                                        <a href="company"
                                                           title="<?= $json->menu->aboutUs->aboutAs ?><"><?= $json->menu->aboutUs->aboutAs ?></a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="company/area"
                                                           title="<?= $json->menu->aboutUs->territory ?>"><?= $json->menu->aboutUs->territory ?></a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="company/reviews"
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
                                                <span class="tail"></span>
                                                <ul class="dropdown-menu">
                                                    <li class=" ">
                                                        <a href="rooms/twin" title="Двухместный Номер Эконом Класса">Двухместный
                                                            Номер Эконом Класса</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="rooms/triple" title="Трёхместный Однокомнатный Номер">Трёхместный
                                                            Однокомнатный Номер</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="rooms/quarter" title="Четырехместный Номер">Четырехместный
                                                            Номер</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="rooms/quarter_cottage_sauna_fireplace"
                                                           title="ЛЮКС Четырёхместный С Камином И Сауной">ЛЮКС
                                                            Четырёхместный С Камином И Сауной</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="rooms/quarter_cottage" title="Четырёхместный Коттедж">Четырёхместный
                                                            Коттедж</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="rooms/3-komnatnyy-kottedzh-s-saunoy-vip"
                                                           title="3-комнатный коттедж с сауной «Vip»">3-комнатный
                                                            коттедж с сауной «Vip»</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="dropdown ">
                                            <div class="wrap">
                                                <a class="dropdown-toggle link_first" href="services/"
                                                   title="<?= $json->menu->services->name ?>">
                                                    <?= $json->menu->services->name ?> &nbsp;<i
                                                            class="fa fa-angle-down"></i>
                                                </a>
                                                <span class="tail"></span>
                                                <ul class="dropdown-menu">
                                                    <li class=" ">
                                                        <a href="services/rybalka"
                                                           title="<?= $json->menu->services->fishing ?>"><?= $json->menu->services->fishing ?></a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="services/okhota"
                                                           title="<?= $json->menu->services->hunt ?>"><?= $json->menu->services->hunt ?></a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="services/banya"
                                                           title="<?= $json->menu->services->bathhouse ?>"><?= $json->menu->services->bathhouse ?></a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="services/dosug-v-lesu-griby-yagody"
                                                           title="<?= $json->menu->services->forest ?>"><?= $json->menu->services->forest ?></a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="services/dopolnitelnye-uslugi"
                                                           title="<?= $json->menu->services->addServices ?>"><?= $json->menu->services->addServices ?></a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="services/zimnie-razvlecheniya"
                                                           title="<?= $json->menu->services->winterRelax ?>"><?= $json->menu->services->winterRelax ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class=" ">
                                            <div class="wrap">
                                                <a class=" link_first" href="price"
                                                   title="<?= $json->menu->cost->name ?>">
                                                    <?= $json->menu->cost->name ?>                                                            </a>
                                            </div>
                                        </td>
                                        <td class=" ">
                                            <div class="wrap">
                                                <a class=" link_first" href="promo"
                                                   title="<?= $json->menu->promo->name ?>">
                                                    <?= $json->menu->promo->name ?>                                                            </a>
                                            </div>
                                        </td>
                                        <td class=" ">
                                            <div class="wrap">
                                                <a class=" link_first" href="galereya"
                                                   title="<?= $json->menu->gallery->name ?>">
                                                    <?= $json->menu->gallery->name ?>                                                            </a>
                                            </div>
                                        </td>
                                        <td class=" ">
                                            <div class="wrap">
                                                <a class=" link_first" href="contacts"
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
                                        <!-- <td class="search-item nosave">
                                             <div class="wrap">
                                                 <a href="/">
                                                     <i class="fa fa-search"></i>
                                                 </a>
                                             </div>
                                         </td> -->
                                    </tr>
                                </table>
                            </div>
                            <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenu">
                                <li class="dropdown ">
                                    <a class="dropdown-toggle" href="company" title="<?= $json->menu->aboutUs->name ?>">
                                        <?= $json->menu->aboutUs->name ?> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class=" ">
                                            <a href="company" title="<?= $json->menu->aboutUs->aboutAs ?>">
                                                <?= $json->menu->aboutUs->aboutAs ?>                                                                    </a>
                                        </li>
                                        <li class=" ">
                                            <a href="company/area" title="<?= $json->menu->aboutUs->territory ?>">
                                                <?= $json->menu->aboutUs->territory ?>                                                                    </a>
                                        </li>
                                        <li class=" ">
                                            <a href="company/reviews" title="<?= $json->menu->aboutUs->guestReviews ?>">
                                                <?= $json->menu->aboutUs->guestReviews ?>                                                                    </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a class="dropdown-toggle" href="rooms" title="Размещение">
                                        Размещение <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class=" ">
                                            <a href="rooms/twin" title="Двухместный Номер Эконом Класса">
                                                Двухместный Номер Эконом Класса </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rooms/triple" title="Трёхместный Однокомнатный Номер">
                                                Трёхместный Однокомнатный Номер </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rooms/quarter" title="Четырехместный Номер">
                                                Четырехместный Номер </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rooms/quarter_cottage_sauna_fireplace"
                                               title="ЛЮКС Четырёхместный С Камином И Сауной">
                                                ЛЮКС Четырёхместный С Камином И Сауной </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rooms/quarter_cottage" title="Четырёхместный Коттедж">
                                                Четырёхместный Коттедж </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rooms/3-komnatnyy-kottedzh-s-saunoy-vip"
                                               title="3-комнатный коттедж с сауной «Vip»">
                                                3-комнатный коттедж с сауной «Vip» </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a class="dropdown-toggle" href="services"
                                       title="<?= $json->menu->services->name ?>">
                                        <?= $json->menu->services->name ?> <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class=" ">
                                            <a href="services/rybalka" title="<?= $json->menu->services->fishing ?>">
                                                <?= $json->menu->services->fishing ?>                                                    </a>
                                        </li>
                                        <li class=" ">
                                            <a href="services/okhota" title="<?= $json->menu->services->hunt ?>">
                                                <?= $json->menu->services->hunt ?>                                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="services/banya" title="<?= $json->menu->services->bathhouse ?>">
                                                <?= $json->menu->services->bathhouse ?>                                                    </a>
                                        </li>
                                        <li class=" ">
                                            <a href="services/dosug-v-lesu-griby-yagody"
                                               title="<?= $json->menu->services->forest ?>">
                                                <?= $json->menu->services->forest ?>                                                        </a>
                                        </li>
                                        <li class=" ">
                                            <a href="services/dopolnitelnye-uslugi"
                                               title="<?= $json->menu->services->addServices ?>">
                                                <?= $json->menu->services->addServices ?>                                                </a>
                                        </li>
                                        <li class=" ">
                                            <a href="services/zimnie-razvlecheniya"
                                               title="<?= $json->menu->services->winterRelax ?>">
                                                <?= $json->menu->services->winterRelax ?>                                                </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a class="" href="price" title="<?= $json->menu->cost->name ?>">
                                        <?= $json->menu->cost->name ?>                                    </a>
                                </li>
                                <li class=" ">
                                    <a class="" href="promo" title="<?= $json->menu->promo->name ?>">
                                        <?= $json->menu->promo->name ?>                                    </a>
                                </li>
                                <li class=" ">
                                    <a class="" href="galereya" title="<?= $json->menu->gallery->name ?>">
                                        <?= $json->menu->gallery->name ?>                                    </a>
                                </li>
                                <li class=" ">
                                    <a class="" href="contacts" title="<?= $json->menu->contacts->name ?>">
                                        <?= $json->menu->contacts->name ?>                                    </a>
                                </li>
                                <!--<div class="search">
                                    <div class="search-input-div">
                                        <input class="search-input" type="text" autocomplete="off" maxlength="50" size="40" placeholder="Найти" value="" name="q">
                                    </div>
                                    <div class="search-button-div">
                                        <button class="btn btn-search btn-default" value="Найти" name="s" type="submit">Найти</button>
                                    </div>
                                </div>-->
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
                                        <input class="search-input" id="title-search-input" type="text" name="q"
                                               value="" placeholder="Найти" size="40" maxlength="50"
                                               autocomplete="off"/>
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
                        var jsControl = new JCTitleSearch({
                            //'WAIT_IMAGE': '/bitrix/themes/.default/images/wait.gif',
                            'AJAX_PAGE': '/',
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

        <div class="banners-big front">
            <div class="maxwidth-banner">
                <div class="flexslider unstyled "
                     data-plugin-options='{"directionNav": true, "controlNav": true, "slideshow": true, "animation": "slide", "direction": "horizontal", "slideshowSpeed": 5000, "animationSpeed": 600, "animationLoop": true}'>
                    <ul class="slides items">
                        <li class="item" id="bx_3218110189_35"
                            style="background:url('upload/start-page-index/беседка.jpg') 0% 70% / 105% no-repeat !important;">
                            <div class="maxwidth-theme">
                                <div class="row light ">
                                    <div class="col-md-6 text">
                                        <div class="inner">
                                            <div class="title">Уютные беседки на берегу Ладожского озера</div>
                                            <div class="text-block">
                                                Поможем устроить пикник на двоих или для большой компании. Берём на себя
                                                полную организацию и предоставляем всё
                                                необходимое для шашлыка и барбекю.
                                            </div>
                                            <div class="wr_button_slider">
																							<span class="button_slider">
													<a href="company/area" class="btn btn-default white">
														Подробнее													</a>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item" id="bx_3218110189_34"
                            style="background:url('upload/start-page-index/природа.jpg') 0% 70% / 105% no-repeat !important;">
                            <div class="maxwidth-theme">
                                <div class="row dark ">


                                    <div class="col-md-6 text">
                                        <div class="inner">
                                            <div class="title">Отдых в Карелии</div>
                                            <div class="text-block">
                                                Рыбалка, охота,прогулка на катере, организация экскурсий
                                            </div>
                                            <div class="wr_button_slider">
																							<span class="button_slider">
													<a href="galereya" class="btn btn-default white">
														Смотрите фото													</a>
												</span>
                                                <span class="button_slider">
													<a href="services" class="btn btn-default">
														Услуги													</a>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="item" id="bx_3218110189_33"
                            style="background:url('upload/start-page-index/квадрик.jpg') center center no-repeat !important;">
                            <div class="maxwidth-theme">
                                <div class="row dark ">
                                    <div class="col-md-6 text">
                                        <div class="inner">

                                            <div class="title"> Активный отдых?</div>

                                            <div class="text-block">
                                                Прокат лодок,снегоходов,путешествия на квадроциклах!
                                            </div>
                                            <div class="wr_button_slider">
																							<span class="button_slider">
													<a href="services" class="btn btn-default white">
														Услуги													</a>
												</span>
                                                <span class="button_slider">
													<a href="price" class="btn btn-default">
														Цены													</a>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <div class="item-views catalog sections front">
                        <div class="items row">
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="item wline" id="bx_651765591_36">
                                    <a href="services/rybalka" class="dark_block_animate"></a>

                                    <div class="img_block scale_block_animate"
                                         style="background-image: url('upload/start-page-index/338b766c81ddcb1ed87a73da7c41d76c.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
									<span class="wrap_outer titles">
										<a href="services/rybalka" class="outer_text">
											<span class="inner_text">Рыбалка</span>
										</a>
									</span>
                                        </div>

                                        <div class="text">
                                            Рыбалка
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="item wline" id="bx_651765591_37">
                                    <a href="rooms/4-kh-mestnyy-kottedzh/quarter_cottage"
                                       class="dark_block_animate"></a>

                                    <div class="img_block scale_block_animate"
                                         style="background-image: url('upload/start-page-index/b0dae01a2c9ddc28a4cd07092732057a.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
									<span class="wrap_outer titles">
										<a href="rooms/4-kh-mestnyy-kottedzh/quarter_cottage" class="outer_text">
											<span class="inner_text">Дома</span>
										</a>
									</span>
                                        </div>

                                        <div class="text">
                                            Комфортные дома
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-6">
                                <div class="item wline" id="bx_651765591_38">
                                    <a href="services/banya" class="dark_block_animate"></a>

                                    <div class="img_block scale_block_animate"
                                         style="background-image: url('upload/start-page-index/9436f96a10fa16953df705d256c6a330.jpg');"></div>
                                    <div class="info">
                                        <div class="title">
									<span class="wrap_outer titles">
										<a href="services/banya" class="outer_text">
											<span class="inner_text">Дровяная баня</span>
										</a>
									</span>
                                        </div>

                                        <div class="text">
                                            Какая бы погода ни была на улице, легкий пар пойдет на пользу!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        /*$(document).ready(function() {
                            try{
                                if(arResortOptions.THEME.CATALOG_INDEX == 'Y'){
                                    $('.catalog.item-views.sections.front').show();
                                }
                                else{
                                    $('.catalog.item-views.sections.front').remove();
                                }
                            }
                            catch(e){}
                        });*/
                    </script>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <div class="row_custom">
                        <div class="maxwidth-theme">
                            <div class="col-md-12_custom">
                                <div class="banners-small front">
                                    <div class="items row_custom">
                                        <div class="item_block">
                                            <div class="item" id="bx_1373509569_41">
                                                <div class="image">
                                                    <a href="company/area"> <img
                                                                src="upload/iblock/208/2083fd0c98fe9ca729b9312a3d54b321.png"/>
                                                    </a></div>
                                                <div class="title">
                                                    <a href="company/area"> Территория базы с высоты птичьего
                                                        полета </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="greyline front_services_wrap">
            <div class="row">
                <div class="maxwidth-theme">
                    <div class="col-md-12">
                        <div class="front_tizers_wrap">
                            <div class="front_title"><h3 class="title_block">К вашим услугам</h3></div>
                            <div class="item-views sections teasers front">
                                <div class="items row">
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item noborder" id="bx_3485106786_80">
                                            <div class="image">
                                                <a href="services/rybalka" class="blink">
                                                    <img src="upload/start-page-index/b7bc31b7d51a3ce5b0569fafc33d0e4e.jpg"
                                                         alt="Рыбалка" title="Рыбалка" class="img-responsive"/>
                                                </a>
                                            </div>

                                            <div class="info">
                                                <div class="title">
                                                    <a href="services/rybalka">
                                                        Рыбалка
                                                    </a>
                                                </div>
                                                <div class="text">
                                                    Разнообразие видов рыб в Ладожском озере, поражает воображение.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item noborder" id="bx_3485106786_81">
                                            <div class="image">
                                                <a href="services/banya" class="blink">
                                                    <img src="upload/start-page-index/a84abe8f79de788daf77c2c3e29356e4.jpg"
                                                         alt="Баня" title="Баня" class="img-responsive"/>
                                                </a>
                                            </div>

                                            <div class="info">
                                                <div class="title">
                                                    <a href="services/banya">
                                                        Баня
                                                    </a>
                                                </div>
                                                <div class="text">
                                                    Не что не сравнится с настоящей дровяной русской баней!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-6">
                                        <div class="item noborder" id="bx_3485106786_60">
                                            <div class="image">
                                                <a href="services/dosug-v-lesu-griby-yagody" class="blink">
                                                    <img src="upload/start-page-index/022e7e0da4b8c985939d14e521c4073e.jpg"
                                                         alt="Досуг в лесу (грибы-ягоды)"
                                                         title="Досуг в лесу (грибы-ягоды)" class="img-responsive"/>
                                                </a>
                                            </div>

                                            <div class="info">
                                                <div class="title">
                                                    <a href="services/dosug-v-lesu-griby-yagody">
                                                        Досуг в лесу (грибы-ягоды)
                                                    </a>
                                                </div>

                                                <div class="text">
                                                    Карельские леса славятся обилием грибов и ягод.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        // $('.teasers.front .item .info').sliceHeight();
                                        $('.teasers.front .item').sliceHeight();

                                    });
                                    /*BX.addCustomEvent('onWindowResize', function(eventdata) {
                                        try{
                                            ignoreResize.push(true);
                                            var ih = $('.teasers.front .item').height();
                                            $('.teasers.front .info').each(function() {
                                                var h = $(this).height();
                                                var p = 26;
                                                //if(h > 45){
                                                    if((p = Math.floor((ih - h) / 2)) < 0){
                                                        p = 0;
                                                    }
                                                //}
                                                $(this).css('padding-top', p + 'px');
                                            });
                                        }
                                        catch(e){}
                                        finally{
                                            ignoreResize.pop();
                                        }
                                    });*/
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="front_title">
                                <h3 class="title_block">Фотогалерея</h3>
                            </div>
                            <div class="front_gallery front">
                                <div class="wrap clearfix">
                                    <div class="item">
                                        <div class="wrap">
                                            <div class="img_block scale_block_animate"><a title="Лес, ягоды, грибы ..."
                                                                                          rel="gallery" class="fancybox"
                                                                                          href="upload/start-page-index/324d9c094c676f12dfd63cccfa978dc8.jpg"><img
                                                            src="upload/resize_cache/iblock/324/276_207_2/324d9c094c676f12dfd63cccfa978dc8.jpg"
                                                            alt="Лес, ягоды, грибы ..." title="Лес, ягоды, грибы ..."/></a>
                                            </div>
                                            <div class="text">Лес, ягоды, грибы ...</div>
                                            <span title="Лес, ягоды, грибы ..." class="dark_block_animate"></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wrap">
                                            <div class="img_block scale_block_animate"><a title="Наш пирс" rel="gallery"
                                                                                          class="fancybox"
                                                                                          href="upload/iblock/823/823178de2548b7dec568a2d41bbcbaa3.jpg"><img
                                                            src="upload/resize_cache/iblock/823/276_207_2/823178de2548b7dec568a2d41bbcbaa3.jpg"
                                                            alt="Наш пирс" title="Наш пирс"/></a></div>
                                            <div class="text">Наш пирс</div>
                                            <span title="Наш пирс" class="dark_block_animate"></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wrap">
                                            <div class="img_block scale_block_animate"><a
                                                        title="Фотогалерея Дача на Ладоге" rel="gallery"
                                                        class="fancybox"
                                                        href="upload/iblock/76b/76b78f43a459c6172583519aa4dfdda7.jpg"><img
                                                            src="upload/resize_cache/iblock/76b/276_207_2/76b78f43a459c6172583519aa4dfdda7.jpg"
                                                            alt="Фотогалерея Дача на Ладоге"
                                                            title="Фотогалерея Дача на Ладоге"/></a></div>
                                            <div class="text">Фотогалерея Дача на Ладоге</div>
                                            <span title="Фотогалерея Дача на Ладоге" class="dark_block_animate"></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wrap">
                                            <div class="img_block scale_block_animate"><a title="Летняя пыбалка"
                                                                                          rel="gallery" class="fancybox"
                                                                                          href="upload/iblock/e41/e415e5ce787fc38dc031d614651f4004.jpg"><img
                                                            src="upload/resize_cache/iblock/e41/276_207_2/e415e5ce787fc38dc031d614651f4004.jpg"
                                                            alt="Летняя пыбалка" title="Летняя пыбалка"/></a></div>
                                            <div class="text">Летняя пыбалка</div>
                                            <span title="Летняя пыбалка" class="dark_block_animate"></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wrap">
                                            <div class="img_block scale_block_animate"><a title="Зимние развлечения"
                                                                                          rel="gallery" class="fancybox"
                                                                                          href="upload/iblock/339/339fdbbaba256b075dee6e609970a95b.jpg"><img
                                                            src="upload/resize_cache/iblock/339/276_207_2/339fdbbaba256b075dee6e609970a95b.jpg"
                                                            alt="Зимние развлечения" title="Зимние развлечения"/></a>
                                            </div>
                                            <div class="text">Зимние развлечения</div>
                                            <span title="Зимние развлечения" class="dark_block_animate"></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wrap">
                                            <div class="img_block scale_block_animate"><a title="Территория"
                                                                                          rel="gallery" class="fancybox"
                                                                                          href="upload/iblock/97f/97f832e0c5749b9b9c5163e809107869.jpg"><img
                                                            src="upload/resize_cache/iblock/97f/276_207_2/97f832e0c5749b9b9c5163e809107869.jpg"
                                                            alt="Территория" title="Территория"/></a></div>
                                            <div class="text">Территория</div>
                                            <span title="Территория" class="dark_block_animate"></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wrap">
                                            <div class="img_block scale_block_animate"><a title="Зимняя рыбалка"
                                                                                          rel="gallery" class="fancybox"
                                                                                          href="upload/iblock/243/243e57e8da0caccebb06b04435d70791.jpg"><img
                                                            src="upload/resize_cache/iblock/243/276_207_2/243e57e8da0caccebb06b04435d70791.jpg"
                                                            alt="Зимняя рыбалка" title="Зимняя рыбалка"/></a></div>
                                            <div class="text">Зимняя рыбалка</div>
                                            <span title="Зимняя рыбалка" class="dark_block_animate"></span>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="wrap">
                                            <div class="img_block scale_block_animate"><a title="Карелия" rel="gallery"
                                                                                          class="fancybox"
                                                                                          href="upload/iblock/fd2/fd27ac277bc988a7495b36a443d6b361.jpg"><img
                                                            src="upload/resize_cache/iblock/fd2/276_207_2/fd27ac277bc988a7495b36a443d6b361.jpg"
                                                            alt="Карелия" title="Карелия"/></a></div>
                                            <div class="text">Карелия</div>
                                            <span title="Карелия" class="dark_block_animate"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                $(document).ready(function () {
                                    $('.front_gallery .item .img_block').sliceHeight({'lineheight': -3});
                                    $('.front_gallery .item .dark_block_animate').on('click', function () {
                                        $(this).closest('.item').find('a').click();
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_map_block">
            <div class="maxwidth-theme">
                <div class="main_contacts_wrap">
                    <div class="main_contacts">
                        <div class="title">
                            Мы ждем вас!
                        </div>
                        <div class="wrap">
                            <div class="contact">
                                186757 Россия, Республика Карелия, п. Лумиваара +3,5 км.Ладожские шхеры
                            </div>
                            <div class="contact email">
                                <a href="mailto:arsenal@tour-arsenal.ru">arsenal@tour-arsenal.ru</a>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <div class="bx-yandex-view-layout">
                <script type="text/javascript" charset="utf-8" async
                        src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8e54b1683532cc9fd27a9a82389704541cd8e0ba74503f8b1ce388386a8fd61f&amp;width=100%25&amp;height=500&amp;lang=en_RU&amp;scroll=true"></script>
            </div>
            <!--'end_frame_cache_map-block'-->
        </div>

        <div class="color_block">
            <div class="row">
                <div class="maxwidth-theme">
                    <div class="col-md-12">
                        <div class="block front">
                            <div class="row">
                                <div class="col-md-3 col-sm-3">
                                    <div class="front-text1">
                                        <h2>Остались вопросы?</h2></div>
                                </div>
                                <div class="col-md-7 col-sm-6">
                                    <div class="front-text2">
                                        Подробно расскажем о базе отдыха,&nbsp;услугах, ценах&nbsp;и подготовим
                                        индивидуальное предложение!&nbsp;<br></div>
                                </div>
                                <div class="col-md-2 col-sm-3">
                                    <div class="front-text3">
                                        <span class="btn btn-default white_br white btn-lg" id="askQuestion"
                                              services="">Задать вопрос</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        </div>
    </div>        </div>

<?php
include_once 'footer.php';
?>