<?php
include_once 'header.php';
?>
    <title>Ошибка: 404 - Страница не найдена - "Дача на Ладоге"</title>
   			<div class="menu-row row">
                <div class="maxwidth-theme">
                    <div class="col-md-12">
                        <div class="nav-main-collapse collapse">
                            <div class="menu-only">
                                <nav class="mega-menu">
                                    <div class="top_menu_fixed_js">
                                        <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenuF">
                                            <li class="dropdown ">
                                                <a class="dropdown-toggle" href="http://tour-arsenal.by/company/" title="<?= $json->menu->aboutUs->name?>">
                                                    <?= $json->menu->aboutUs->name?>													<i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu fixed_menu_ext">
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/company" title="<?= $json->menu->aboutUs->aboutAs?>">
                                                            <?= $json->menu->aboutUs->aboutAs?>																		</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/company/area" title="<?= $json->menu->aboutUs->territory?>">
                                                            <?= $json->menu->aboutUs->territory?>														</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
                                                            <?= $json->menu->aboutUs->guestReviews?>																			</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown ">
                                                <a class="dropdown-toggle" href="rooms" title="Размещение">
                                                    Размещение													<i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu fixed_menu_ext">
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/rooms/twin" title="Двухместный Номер Эконом Класса">
                                                            Двухместный Номер Эконом Класса																			</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/rooms/triple" title="Трёхместный Однокомнатный Номер">
                                                            Трёхместный Однокомнатный Номер																			</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="vrooms/quarter" title="Четырехместный Номер">
                                                            Четырехместный Номер																			</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">
                                                            ЛЮКС Четырёхместный С Камином И Сауной																			</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/rooms/quarter_cottage" title="Четырёхместный Коттедж">
                                                            Четырёхместный Коттедж																			</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">
                                                            3-комнатный коттедж с сауной «Vip»																			</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown ">
                                                <a class="dropdown-toggle" href="services" title="<?= $json->menu->services->name?>">
                                                    <?= $json->menu->services->name?>											<i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu fixed_menu_ext">
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/services/rybalka" title="<?= $json->menu->services->fishing?>">
                                                            <?= $json->menu->services->fishing?>																		</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/services/okhota" title="<?= $json->menu->services->hunt?>">
                                                            <?= $json->menu->services->hunt?>																			</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/services/banya" title="<?= $json->menu->services->bathhouse?>">
                                                            <?= $json->menu->services->bathhouse?>																			</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                            <?= $json->menu->services->forest?>																		</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                            <?= $json->menu->services->addServices?>																		</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="http://tour-arsenal.by/services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
                                                            <?= $json->menu->services->winterRelax?>																		</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" ">
                                                <a class="" href="http://tour-arsenal.by/price" title="<?= $json->menu->cost->name?>">
                                                    <?= $json->menu->cost->name?>											</a>
                                            </li>
                                            <li class=" ">
                                                <a class="" href="http://tour-arsenal.by/promo" title="<?= $json->menu->promo->name?>">
                                                    <?= $json->menu->promo->name?>											</a>
                                            </li>
                                            <li class=" ">
                                                <a class="" href="http://tour-arsenal.by/galereya" title="<?= $json->menu->gallery->name?>">
                                                    <?= $json->menu->gallery->name?>											</a>
                                            </li>
                                            <li class=" ">
                                                <a class="" href="http://tour-arsenal.by/contacts" title="<?= $json->menu->contacts->name?>">
                                                    <?= $json->menu->contacts->name?>											</a>
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
                                                        <a class="dropdown-toggle link_first" href="http://tour-arsenal.by/company/" title="<?= $json->menu->aboutUs->name?>">
                                                            <?= $json->menu->aboutUs->name?>																	&nbsp;<i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <span class="tail"></span>
                                                        <ul class="dropdown-menu">
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/company" title="<?= $json->menu->aboutUs->aboutAs?><"><?= $json->menu->aboutUs->aboutAs?></a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/company/area" title="<?= $json->menu->aboutUs->territory?>"><?= $json->menu->aboutUs->territory?></a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>"><?= $json->menu->aboutUs->guestReviews?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="dropdown ">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle link_first" href="rooms" title="Размещение">
                                                            Размещение																	&nbsp;<i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <span class="tail"></span>
                                                        <ul class="dropdown-menu">
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/rooms/twin" title="Двухместный Номер Эконом Класса">Двухместный Номер Эконом Класса</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/rooms/triple" title="Трёхместный Однокомнатный Номер">Трёхместный Однокомнатный Номер</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/rooms/quarter" title="Четырехместный Номер">Четырехместный Номер</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">ЛЮКС Четырёхместный С Камином И Сауной</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/rooms/quarter_cottage" title="Четырёхместный Коттедж">Четырёхместный Коттедж</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">3-комнатный коттедж с сауной «Vip»</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class="dropdown ">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle link_first" href="services/" title="<?= $json->menu->services->name?>">
                                                            <?= $json->menu->services->name?>																&nbsp;<i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <span class="tail"></span>
                                                        <ul class="dropdown-menu">
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/services/rybalka" title="<?= $json->menu->services->fishing?>"><?= $json->menu->services->fishing?></a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/services/okhota" title="<?= $json->menu->services->hunt?>"><?= $json->menu->services->hunt?></a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/services/banya" title="<?= $json->menu->services->bathhouse?>"><?= $json->menu->services->bathhouse?></a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>"><?= $json->menu->services->forest?></a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>"><?= $json->menu->services->addServices?></a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="http://tour-arsenal.by/services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>"><?= $json->menu->services->winterRelax?></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class=" link_first" href="http://tour-arsenal.by/price" title="<?= $json->menu->cost->name?>">
                                                            <?= $json->menu->cost->name?>															</a>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class=" link_first" href="http://tour-arsenal.by/promo" title="<?= $json->menu->promo->name?>">
                                                            <?= $json->menu->promo->name?>															</a>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class=" link_first" href="http://tour-arsenal.by/galereya" title="<?= $json->menu->gallery->name?>">
                                                            <?= $json->menu->gallery->name?>															</a>
                                                    </div>
                                                </td>
                                                <td class=" ">
                                                    <div class="wrap">
                                                        <a class=" link_first" href="http://tour-arsenal.by/contacts" title="<?= $json->menu->contacts->name?>">
                                                            <?= $json->menu->contacts->name?>															</a>
                                                    </div>
                                                </td>
                                                <td class="dropdown js-dropdown nosave" style="display:none;">
                                                    <div class="wrap">
                                                        <a class="dropdown-toggle more-items" href="http://tour-arsenal.by/">
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
                                            <a class="dropdown-toggle" href="http://tour-arsenal.by/company" title="<?= $json->menu->aboutUs->name?>">
                                                <?= $json->menu->aboutUs->name?>									<i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/company" title="<?= $json->menu->aboutUs->aboutAs?>">
                                                        <?= $json->menu->aboutUs->aboutAs?>																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/company/area" title="<?= $json->menu->aboutUs->territory?>">
                                                        <?= $json->menu->aboutUs->territory?>																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
                                                        <?= $json->menu->aboutUs->guestReviews?>																	</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="http://tour-arsenal.by/rooms" title="Размещение">
                                                Размещение											<i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/rooms/twin" title="Двухместный Номер Эконом Класса">
                                                        Двухместный Номер Эконом Класса																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/rooms/triple" title="Трёхместный Однокомнатный Номер">
                                                        Трёхместный Однокомнатный Номер																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/rooms/quarter" title="Четырехместный Номер">
                                                        Четырехместный Номер																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">
                                                        ЛЮКС Четырёхместный С Камином И Сауной																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/rooms/quarter_cottage" title="Четырёхместный Коттедж">
                                                        Четырёхместный Коттедж																	</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">
                                                        3-комнатный коттедж с сауной «Vip»																	</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown ">
                                            <a class="dropdown-toggle" href="http://tour-arsenal.by/services" title="<?= $json->menu->services->name?>">
                                                <?= $json->menu->services->name?>										<i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/services/rybalka" title="<?= $json->menu->services->fishing?>">
                                                        <?= $json->menu->services->fishing?>													</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/services/okhota" title="<?= $json->menu->services->hunt?>">
                                                        <?= $json->menu->services->hunt?>														</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/services/banya" title="<?= $json->menu->services->bathhouse?>">
                                                        <?= $json->menu->services->bathhouse?>													</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                        <?= $json->menu->services->forest?>														</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                        <?= $json->menu->services->addServices?>									     		</a>
                                                </li>
                                                <li class=" ">
                                                    <a href="http://tour-arsenal.by/services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
                                                        <?= $json->menu->services->winterRelax?>												</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="http://tour-arsenal.by/price" title="<?= $json->menu->cost->name?>">
                                                <?= $json->menu->cost->name?>									</a>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="http://tour-arsenal.by/promo" title="<?= $json->menu->promo->name?>">
                                                <?= $json->menu->promo->name?>									</a>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="http://tour-arsenal.by/galereya" title="<?= $json->menu->gallery->name?>">
                                                <?= $json->menu->gallery->name?>									</a>
                                        </li>
                                        <li class=" ">
                                            <a class="" href="http://tour-arsenal.by/contacts" title="<?= $json->menu->contacts->name?>">
                                                <?= $json->menu->contacts->name?>									</a>
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
                                        <form action="/search/">
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
                                    'AJAX_PAGE' : '/gdfgdfg',
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
        <div class="container">
            <div class="row">
                <div class="maxwidth-theme">
                    <div class="col-md-3 col-sm-3 left-menu-md">
                        <div class="sidearea">
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 content-md">
                        <style>
                            .page-top, .left-menu-md, .right-menu-md{display:none;}
                            .content-md{width:100%;}
                        </style>
                        <div class="page404">
                            <div class="row">
                                <div class="col-md-7 hidden-xs hidden-sm">
                                    <div class="i404">404</div>
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="t404">
                                        <div style="font-size:44px;line-height:50px;text-transform:uppercase;">Ошибка 404</div>
                                        <div style="font-size:18px;line-height:32px;color:#666666;">Страница не найдена</div>
                                        <div style="font-size:13px;margin:14px 0 35px;">Неправильно набран адрес или такой<br />страницы не существует</div>
                                        <a href="http://tour-arsenal.by/" class="btn btn-default btn-lg">Перейти на главную</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(window).resize(function(){ //  BX.addCustomEvent('onWindowResize', function(eventdata) {
                                try{
                                    var windowHeight = $(window).outerHeight();
                                    var panelHeight = $('#panel').outerHeight();
                                    var headerHeight = $('header').outerHeight();
                                    var footerHeight = $('footer').outerHeight();
                                    var mainPaddingTop = parseInt($('.main').css('padding-top'));
                                    var mainPaddingBottom = parseInt($('.main').css('padding-bottom'));
                                    var bodyMarginTop = parseInt($('.body').css('margin-top'));
                                    var bodyMarginBottom = parseInt($('.body').css('margin-bottom'));
                                    var page404Height = $('.page404').outerHeight();
                                    var part = Math.floor((windowHeight - panelHeight - headerHeight - footerHeight - page404Height) / 2);
                                    console.log(part);
                                    if(part < (mainPaddingTop + bodyMarginTop)){
                                        part = mainPaddingTop + bodyMarginTop;
                                    }
                                    if(part < (mainPaddingBottom + bodyMarginBottom)){
                                        part = mainPaddingBottom + bodyMarginBottom;
                                    }
                                    console.log(part);
                                    var top = (part - mainPaddingTop - bodyMarginTop);
                                    if(top < 0){
                                        top = 0;
                                    }
                                    var bottom = (part - mainPaddingBottom - bodyMarginBottom);
                                    if(bottom < 0){
                                        bottom = 0;
                                    }
                                    ignoreResize.push(true);
                                    $('.page404').css({'opacity': '1', 'margin-top': top + 'px', 'margin-bottom': bottom + 'px'});
                                    setTimeout(function() {
                                        $('.page404').css({'transition': 'none', '-moz-transition': 'none', '-ms-transition': 'none', '-o-transition': 'none', '-webkit-transition': 'none'});
                                    }, 400);
                                    ignoreResize.pop();
                                }
                                catch(e){}
                            });
                        </script>
                    </div>																					</div>						</div>															</div>											</div>		</div>		<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="top_block clearfix">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="info">
                            <div class="compass">
                                <i class="fa"></i>
                                Республика Карелия, п. Лумиваара +3,5 км.Ладожские шхеры.									</div>
                            <div class="contacts"><a class="btn btn-default" href="/contacts/">Схема проезда</a></div>
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
                                                    <a href="/company/">О нас</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="/catalog/">Размещение</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="/services/">Услуги</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="/price/">Цены</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="/promo/">Акции</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="/galereya/">Галерея</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item">
                                                <div class="title">
                                                    <a href="/contacts/">Контакты</a>
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