<?php
include_once '../header.php';
?>
<title>Услуги - Туркомплекс "Арсенал"</title>



<div class="menu-row row">
    <div class="maxwidth-theme">
        <div class="col-md-12">
            <div class="nav-main-collapse collapse">
                <div class="menu-only">
                    <nav class="mega-menu">
                        <div class="top_menu_fixed_js">
                            <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenuF">
                                <li class="dropdown ">
                                    <a class="dropdown-toggle" href="../company" title="<?= $json->menu->aboutUs->name?>">
                                        <?= $json->menu->aboutUs->name?>						<i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="dropdown-menu fixed_menu_ext">
                                        <li class=" ">
                                            <a href="../company" title="<?= $json->menu->aboutUs->aboutAs?>">
                                                <?= $json->menu->aboutUs->aboutAs?>																		</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../company/area" title="<?= $json->menu->aboutUs->territory?>">
                                                <?= $json->menu->aboutUs->territory?>														</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
                                                <?= $json->menu->aboutUs->guestReviews?>																			</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown ">
                                    <a class="dropdown-toggle" href="../rooms" title="Размещение">
                                        Размещение													<i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="dropdown-menu fixed_menu_ext">
                                        <li class=" ">
                                            <a href="../rooms/twin" title="Двухместный Номер Эконом Класса">
                                                Двухместный Номер Эконом Класса																			</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../rooms/triple" title="Трёхместный Однокомнатный Номер">
                                                Трёхместный Однокомнатный Номер																			</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../rooms/quarter" title="Четырехместный Номер">
                                                Четырехместный Номер																			</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">
                                                ЛЮКС Четырёхместный С Камином И Сауной																			</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../rooms/quarter_cottage" title="Четырёхместный Коттедж">
                                                Четырёхместный Коттедж																			</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">
                                                3-комнатный коттедж с сауной «Vip»																			</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown active">
                                    <a class="dropdown-toggle" href="../services" title="<?= $json->menu->services->name?>">
                                        <?= $json->menu->services->name?>											<i class="fa fa-angle-right"></i>
                                    </a>
                                    <ul class="dropdown-menu fixed_menu_ext">
                                        <li class=" ">
                                            <a href="../services/rybalka" title="<?= $json->menu->services->fishing?>">
                                                <?= $json->menu->services->fishing?>																		</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../services/okhota" title="<?= $json->menu->services->hunt?>">
                                                <?= $json->menu->services->hunt?>																			</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../services/kafe" title="<?= $json->menu->services->cafe?>">
                                                <?= $json->menu->services->cafe?>											</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../services/banya" title="<?= $json->menu->services->bathhouse?>">
                                                <?= $json->menu->services->bathhouse?>																			</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../services/ostrov-robinzonada" title="<?= $json->menu->services->island?>">
                                                <?= $json->menu->services->island?>																			</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                <?= $json->menu->services->forest?>																		</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                <?= $json->menu->services->addServices?>																		</a>
                                        </li>
                                        <li class=" ">
                                            <a href="../services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
                                                <?= $json->menu->services->winterRelax?>																		</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a class="" href="../price" title="<?= $json->menu->cost->name?>">
                                        <?= $json->menu->cost->name?>											</a>
                                </li>
                                <li class=" ">
                                    <a class="" href="../promo" title="<?= $json->menu->promo->name?>">
                                        <?= $json->menu->promo->name?>											</a>
                                </li>
                                <li class=" ">
                                    <a class="" href="../galereya" title="<?= $json->menu->gallery->name?>">
                                        <?= $json->menu->gallery->name?>											</a>
                                </li>
                                <li class=" ">
                                    <a class="" href="../contacts" title="<?= $json->menu->contacts->name?>">
                                        <?= $json->menu->contacts->name?>											</a>
                                </li>
                                <div class="search">
                                    <div class="search-input-div">
                                        <input class="search-input" type="text" autocomplete="off" maxlength="50" size="40" placeholder="" value="" name="q">
                                    </div>
                                    <div class="search-button-div">
                                        <button class="btn btn-search btn-default" value="Найти" name="s" type="submit">Найти</button>
                                    </div>
                                </div>
                            </ul>
                        </div>
                        <div class="table-menu hidden-xs">
                            <table>
                                <tr>
                                    <td class="dropdown ">
                                        <div class="wrap">
                                            <a class="dropdown-toggle link_first" href="../company" title="<?= $json->menu->aboutUs->name?>">
                                                <?= $json->menu->aboutUs->name?>																	&nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
                                            <span class="tail"></span>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="../company" title="<?= $json->menu->aboutUs->aboutAs?>"><?= $json->menu->aboutUs->aboutAs?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../company/area" title="<?= $json->menu->aboutUs->territory?>"><?= $json->menu->aboutUs->territory?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>"><?= $json->menu->aboutUs->guestReviews?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="dropdown ">
                                        <div class="wrap">
                                            <a class="dropdown-toggle link_first" href="../rooms" title="Размещение">
                                                Размещение																	&nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
                                            <span class="tail"></span>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="../rooms/twin" title="Двухместный Номер Эконом Класса">Двухместный Номер Эконом Класса</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../rooms/triple" title="Трёхместный Однокомнатный Номер">Трёхместный Однокомнатный Номер</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../rooms/quarter" title="Четырехместный Номер">Четырехместный Номер</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">ЛЮКС Четырёхместный С Камином И Сауной</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../rooms/quarter_cottage" title="Четырёхместный Коттедж">Четырёхместный Коттедж</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">3-комнатный коттедж с сауной «Vip»</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="dropdown active">
                                        <div class="wrap">
                                            <a class="dropdown-toggle link_first" href="../services/" title="<?= $json->menu->services->name?>">
                                                <?= $json->menu->services->name?>																&nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
                                            <span class="tail"></span>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="../services/rybalka" title="<?= $json->menu->services->fishing?>"><?= $json->menu->services->fishing?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../services/okhota" title="<?= $json->menu->services->hunt?>"><?= $json->menu->services->hunt?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../services/kafe" title="<?= $json->menu->services->cafe?>"><?= $json->menu->services->cafe?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../services/banya" title="<?= $json->menu->services->bathhouse?>"><?= $json->menu->services->bathhouse?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../services/ostrov-robinzonada" title="<?= $json->menu->services->island?>"><?= $json->menu->services->island?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>"><?= $json->menu->services->forest?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>"><?= $json->menu->services->addServices?></a>
                                                </li>
                                                <li class=" ">
                                                    <a href="../services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>"><?= $json->menu->services->winterRelax?></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="wrap">
                                            <a class=" link_first" href="../price" title="<?= $json->menu->cost->name?>">
                                                <?= $json->menu->cost->name?>															</a>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="wrap">
                                            <a class=" link_first" href="../promo" title="<?= $json->menu->promo->name?>">
                                                <?= $json->menu->promo->name?>															</a>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="wrap">
                                            <a class=" link_first" href="../galereya" title="<?= $json->menu->gallery->name?>">
                                                <?= $json->menu->gallery->name?>															</a>
                                        </div>
                                    </td>
                                    <td class=" ">
                                        <div class="wrap">
                                            <a class=" link_first" href="../contacts" title="<?= $json->menu->contacts->name?>">
                                                <?= $json->menu->contacts->name?>															</a>
                                        </div>
                                    </td>
                                    <td class="dropdown js-dropdown nosave" style="display:none;">
                                        <div class="wrap">
                                            <a class="dropdown-toggle more-items" href="index.php#">
                                                <span>...</span>
                                            </a>
                                            <span class="tail"></span>
                                            <ul class="dropdown-menu"></ul>
                                        </div>
                                    </td>
                                    <td class="search-item nosave">
                                        <div class="wrap">
                                            <a href="index.php#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenu">
                            <li class="dropdown ">
                                <a class="dropdown-toggle" href="../company" title="<?= $json->menu->aboutUs->name?>">
                                    <?= $json->menu->aboutUs->name?>									<i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="../company" title="<?= $json->menu->aboutUs->aboutAs?>">
                                            <?= $json->menu->aboutUs->aboutAs?>																	</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../company/area" title="<?= $json->menu->aboutUs->territory?>">
                                            <?= $json->menu->aboutUs->territory?>																	</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
                                            <?= $json->menu->aboutUs->guestReviews?>																	</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a class="dropdown-toggle" href="../rooms" title="Размещение">
                                    Размещение											<i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="../rooms/twin" title="Двухместный Номер Эконом Класса">
                                            Двухместный Номер Эконом Класса																	</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../rooms/triple" title="Трёхместный Однокомнатный Номер">
                                            Трёхместный Однокомнатный Номер																	</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../rooms/quarter" title="Четырехместный Номер">
                                            Четырехместный Номер																	</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">
                                            ЛЮКС Четырёхместный С Камином И Сауной																	</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../rooms/quarter_cottage" title="Четырёхместный Коттедж">
                                            Четырёхместный Коттедж																	</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">
                                            3-комнатный коттедж с сауной «Vip»																	</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown active">
                                <a class="dropdown-toggle" href="../services" title="<?= $json->menu->services->name?>">
                                    <?= $json->menu->services->name?>										<i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="../services/rybalka" title="<?= $json->menu->services->fishing?>">
                                            <?= $json->menu->services->fishing?>													</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../services/okhota" title="<?= $json->menu->services->hunt?>">
                                            <?= $json->menu->services->hunt?>														</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../services/kafe" title="<?= $json->menu->services->cafe?>">
                                            <?= $json->menu->services->cafe?>														</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../services/banya" title="<?= $json->menu->services->bathhouse?>">
                                            <?= $json->menu->services->bathhouse?>													</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../services/ostrov-robinzonada" title="<?= $json->menu->services->island?>">
                                            <?= $json->menu->services->island?>														</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                            <?= $json->menu->services->forest?>														</a>
                                    </li>
                                    <li class=" ">
                                        <a href="../services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                            <?= $json->menu->services->addServices?>									     		</a>
                                    </li>
                                    <li class=" ">
                                        <a href="zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
                                            <?= $json->menu->services->winterRelax?>												</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a class="" href="../price" title="<?= $json->menu->cost->name?>">
                                    <?= $json->menu->cost->name?>									</a>
                            </li>
                            <li class=" ">
                                <a class="" href="../promo" title="<?= $json->menu->promo->name?>">
                                    <?= $json->menu->promo->name?>									</a>
                            </li>
                            <li class=" ">
                                <a class="" href="../galereya" title="<?= $json->menu->gallery->name?>">
                                    <?= $json->menu->gallery->name?>									</a>
                            </li>
                            <li class=" ">
                                <a class="" href="../contacts" title="<?= $json->menu->contacts->name?>">
                                    <?= $json->menu->contacts->name?>									</a>
                            </li>
                            <div class="search">
                                <div class="search-input-div">
                                    <input class="search-input" type="text" autocomplete="off" maxlength="50" size="40" placeholder="Найти" value="" name="q">
                                </div>
                                <div class="search-button-div">
                                    <button class="btn btn-search btn-default" value="Найти" name="s" type="submit">Найти</button>
                                </div>
                            </div>
                        </ul>
                    </nav>
                </div>
            </div>						</div>
        <div class="header_search hide">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <style type="text/css">
                        .bx_searche .bx_image{width: 25px;	height: 25px;}
                        .bx_searche .bx_img_element{width: 45px;	height: 36px;}
                        .bx_searche .bx_item_block{min-height: 35px;line-height: 35px;
                    </style>
                    <div class="search" id="title-search">
                        <div class="maxwidth-theme">
                            <div class="col-md-12">
                                <form action="http://tour-arsenal.ru/search/">
                                    <div class="search-input-div">
                                        <input class="search-input" id="title-search-input" type="text" name="q" value="" placeholder="Найти" size="40" maxlength="50" autocomplete="off" />
                                    </div>
                                    <div class="search-button-div">
                                        <button class="btn btn-search btn-default" type="submit" name="s" value="Найти">Найти</button>
                                        <span class="fa fa-close"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        var jsControl = new JCTitleSearch({
                            //'WAIT_IMAGE': '/bitrix/themes/.default/images/wait.gif',
                            'AJAX_PAGE' : '/services/',
                            'CONTAINER_ID': 'title-search',
                            'INPUT_ID': 'title-search-input',
                            'MIN_QUERY_LEN': 2
                        });
                    </script>								</div>
            </div>
        </div>
    </div>				</div>
<div class="line-row visible-xs"></div>
</header>
<div role="main" class="main">
    <section class="page-top COLOR">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://tour-arsenal.by" title="<?= $json->services->mainLink[0] ?>" itemprop="url"><span itemprop="title"><?= $json->services->mainLink[0] ?></span></a></li><li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><?= $json->services->mainLink[1] ?></span></li></ul>										</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?= $json->services->listService->mainText ?></h1>
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
                                <a href="rybalka"><?= $json->services->menu->fishing ?></a>
                            </li>
                            <li class=" ">
                                <a href="okhota"><?= $json->services->menu->hunting ?></a>
                            </li>
                            <li class=" ">
                                <a href="kafe"><?= $json->services->menu->cafe ?></a>
                            </li>
                            <li class=" ">
                                <a href="banya"><?= $json->services->menu->bathhouse ?></a>
                            </li>
                            <li class=" ">
                                <a href="ostrov-robinzonada"><?= $json->services->menu->iclandRob ?></a>
                            </li>
                            <li class=" ">
                                <a href="dosug-v-lesu-griby-yagody"><?= $json->services->menu->relaxInForrest ?></a>
                            </li>
                            <li class=" ">
                                <a href="dopolnitelnye-uslugi"><?= $json->services->menu->additionalServices ?></a>
                            </li>
                            <li class=" ">
                                <a href="zimnie-razvlecheniya"><?= $json->services->menu->winterInter ?></a>
                            </li>
                        </ul>
                    </aside>
                    <div class="sidearea">
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 content-md">
                    <div class="text_before_items">
                        <?= $json->services->listService->firstText ?><br></div>
                    <div class="item-views list image_left services">

                        <div class="items row">


                            <div class="col-md-12">
                                <div class="item noborder" id="bx_651765591_80">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="rybalka" class="blink">
                                                    <img src="../upload/iblock/b7b/b7bc31b7d51a3ce5b0569fafc33d0e4e.jpg" alt="<?= $json->services->serviceFish->name ?>" title="<?= $json->services->serviceFish->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="rybalka"><?= $json->services->serviceFish->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceFish->text ?></p>

                                                <div class="button"><a href="rybalka" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_61">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="okhota" class="blink">
                                                    <img src="../upload/iblock/73a/73a97224c0d01de69aabc585d860bc42.jpg" alt="<?= $json->services->serviceHunt->name ?>" title="<?= $json->services->serviceHunt->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="okhota"><?= $json->services->serviceHunt->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceHunt->text ?></p>
                                                <div class="button"><a href="okhota" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_62">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="kafe" class="blink">
                                                    <img src="../upload/iblock/2c3/2c3f308832c9e6ff0f5c0769b014e06c.jpg" alt="<?= $json->services->serviceCafe->name ?>" title="<?= $json->services->serviceCafe->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="kafe"><?= $json->services->serviceCafe->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceCafe->text ?></p>
                                                <div class="button"><a href="kafe" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_81">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="banya" class="blink">
                                                    <img src="../upload/iblock/a84/a84abe8f79de788daf77c2c3e29356e4.jpg" alt="<?= $json->services->serviceBathHouse->name ?>" title="<?= $json->services->serviceBathHouse->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="banya"><?= $json->services->serviceBathHouse->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceBathHouse->text ?></p>
                                                <div class="button"><a href="banya" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_82">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="ostrov-robinzonada" class="blink">
                                                    <img src="../upload/iblock/38d/38d44751e94564b2db4691825aa8ce9a.jpg" alt="<?= $json->services->serviceIslandRob->name ?>" title="<?= $json->services->serviceIslandRob->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="ostrov-robinzonada"><?= $json->services->serviceIslandRob->name ?></a>
                                                </div>


                                                <p><?= $json->services->serviceIslandRob->text ?></p>

                                                <div class="button"><a href="ostrov-robinzonada" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_60">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="dosug-v-lesu-griby-yagody" class="blink">
                                                    <img src="../upload/iblock/022/022e7e0da4b8c985939d14e521c4073e.jpg" alt="<?= $json->services->serviceRelaxForest->name ?>" title="<?= $json->services->serviceRelaxForest->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="dosug-v-lesu-griby-yagody"><?= $json->services->serviceRelaxForest->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceRelaxForest->text ?></p>
                                                <div class="button"><a href="dosug-v-lesu-griby-yagody" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_83">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="dopolnitelnye-uslugi" class="blink">
                                                    <img src="../upload/iblock/780/780ed73fa097c4ecdc8b030f6c7d1d7f.jpg" alt="<?= $json->services->serviceAddservices->name ?>" title="<?= $json->services->serviceAddservices->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="dopolnitelnye-uslugi"><?= $json->services->serviceAddservices->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceAddservices->text ?></p>
                                                <div class="button"><a href="dopolnitelnye-uslugi" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_159">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="zimnie-razvlecheniya" class="blink">
                                                    <img src="../upload/iblock/3bd/3bd7427519a253c570d0017b37b2d77f.jpg" alt="<?= $json->services->serviceWinter->name ?>" title="<?= $json->services->serviceWinter->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="zimnie-razvlecheniya"><?= $json->services->serviceWinter->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceWinter->text ?></p>

                                                <div class="button"><a href="zimnie-razvlecheniya" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>																																</div>																					</div>						</div>															</div>											</div>		</div>		<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="top_block clearfix">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="info">
                            <div class="compass">
                                <i class="fa"></i>
                                Республика Карелия, г.Сортавала, п. Вяртсиля, 6-ой км. автодороги Вяртсиля-Суйстамо.									</div>
                            <div class="contacts"><a class="btn btn-default" href="../contacts">Схема проезда</a></div>
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
                                                    <a href="../company">О нас</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../rooms/">Размещение</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item active">
                                                <div class="title">
                                                    <a href="../services">Услуги</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../price">Цены</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../promo">Акции</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../galereya">Галерея</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="../contacts">Контакты</a>
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
                                                <a href="https://vk.com/tour_arsenal" target="_blank" rel="nofollow" title="Вконтакте">
                                                    Вконтакте					<i class="fa fa-vk"></i>
                                                    <i class="fa fa-vk hide"></i>
                                                </a>
                                            </li>
                                            <li class="lj">
                                                <a href="https://www.youtube.com/channel/UCmomd_mcGiaMxATj35_V_Jw" target="_blank" rel="nofollow" title="YouTube">
                                                    YouTube					<i class="fa fa-youtube"></i>
                                                    <i class="fa fa-youtube hide"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /noindex -->
                                    </div>										</div>
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
                                &copy; 2017 Все права защищены.									</div>
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