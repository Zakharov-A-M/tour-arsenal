<?php
include_once '../../header.php';
?>
<title>Отзывы гостей - Туркомплекс "Арсенал"</title>


			<div class="menu-row row">
						<div class="maxwidth-theme">
							<div class="col-md-12">
								<div class="nav-main-collapse collapse">
									<div class="menu-only">
                                        <nav class="mega-menu">
                                            <div class="top_menu_fixed_js">
                                                <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenuF">
                                                    <li class="dropdown active">
                                                        <a class="dropdown-toggle" href="../" title="<?= $json->menu->aboutUs->name?>">
                                                            <?= $json->menu->aboutUs->name?>						<i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <ul class="dropdown-menu fixed_menu_ext">
                                                            <li class=" ">
                                                                <a href="../company" title="<?= $json->menu->aboutUs->aboutAs?>">
                                                                    <?= $json->menu->aboutUs->aboutAs?>																		</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../area" title="<?= $json->menu->aboutUs->territory?>">
                                                                    <?= $json->menu->aboutUs->territory?>														</a>
                                                            </li>
                                                            <li class=" active">
                                                                <a href="../reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
                                                                    <?= $json->menu->aboutUs->guestReviews?>																			</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a class="dropdown-toggle" href="../../rooms" title="Размещение">
                                                            Размещение													<i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <ul class="dropdown-menu fixed_menu_ext">
                                                            <li class=" ">
                                                                <a href="../../rooms/twin" title="Двухместный Номер Эконом Класса">
                                                                    Двухместный Номер Эконом Класса																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../rooms/triple" title="Трёхместный Однокомнатный Номер">
                                                                    Трёхместный Однокомнатный Номер																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../rooms/quarter" title="Четырехместный Номер">
                                                                    Четырехместный Номер																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">
                                                                    ЛЮКС Четырёхместный С Камином И Сауной																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../rooms/quarter_cottage" title="Четырёхместный Коттедж">
                                                                    Четырёхместный Коттедж																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">
                                                                    3-комнатный коттедж с сауной «Vip»																			</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a class="dropdown-toggle" href="../../services" title="<?= $json->menu->services->name?>">
                                                            <?= $json->menu->services->name?>											<i class="fa fa-angle-right"></i>
                                                        </a>
                                                        <ul class="dropdown-menu fixed_menu_ext">
                                                            <li class=" ">
                                                                <a href="../../services/rybalka" title="<?= $json->menu->services->fishing?>">
                                                                    <?= $json->menu->services->fishing?>																		</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../services/okhota" title="<?= $json->menu->services->hunt?>">
                                                                    <?= $json->menu->services->hunt?>																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../services/kafe" title="<?= $json->menu->services->cafe?>">
                                                                    <?= $json->menu->services->cafe?>											</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../services/banya" title="<?= $json->menu->services->bathhouse?>">
                                                                    <?= $json->menu->services->bathhouse?>																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../services/ostrov-robinzonada" title="<?= $json->menu->services->island?>">
                                                                    <?= $json->menu->services->island?>																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                                    <?= $json->menu->services->forest?>																		</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                                    <?= $json->menu->services->addServices?>																		</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
                                                                    <?= $json->menu->services->winterRelax?>																		</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class=" ">
                                                        <a class="" href="../../price" title="<?= $json->menu->cost->name?>">
                                                            <?= $json->menu->cost->name?>											</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a class="" href="../../promo" title="<?= $json->menu->promo->name?>">
                                                            <?= $json->menu->promo->name?>											</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a class="" href="../../galereya" title="<?= $json->menu->gallery->name?>">
                                                            <?= $json->menu->gallery->name?>											</a>
                                                    </li>
                                                    <li class=" ">
                                                        <a class="" href="../../contacts" title="<?= $json->menu->contacts->name?>">
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
                                                        <td class="dropdown active">
                                                            <div class="wrap">
                                                                <a class="dropdown-toggle link_first" href="../" title="<?= $json->menu->aboutUs->name?>">
                                                                    <?= $json->menu->aboutUs->name?>																	&nbsp;<i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <span class="tail"></span>
                                                                <ul class="dropdown-menu">
                                                                    <li class=" ">
                                                                        <a href="../" title="<?= $json->menu->aboutUs->aboutAs?>"><?= $json->menu->aboutUs->aboutAs?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../area" title="<?= $json->menu->aboutUs->territory?>"><?= $json->menu->aboutUs->territory?></a>
                                                                    </li>
                                                                    <li class=" active">
                                                                        <a href="../reviews" title="<?= $json->menu->aboutUs->guestReviews?>"><?= $json->menu->aboutUs->guestReviews?></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td class="dropdown ">
                                                            <div class="wrap">
                                                                <a class="dropdown-toggle link_first" href="../../rooms" title="Размещение">
                                                                    Размещение																	&nbsp;<i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <span class="tail"></span>
                                                                <ul class="dropdown-menu">
                                                                    <li class=" ">
                                                                        <a href="../../rooms/twin" title="Двухместный Номер Эконом Класса">Двухместный Номер Эконом Класса</a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../rooms/triple" title="Трёхместный Однокомнатный Номер">Трёхместный Однокомнатный Номер</a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../rooms/quarter" title="Четырехместный Номер">Четырехместный Номер</a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">ЛЮКС Четырёхместный С Камином И Сауной</a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../rooms/quarter_cottage" title="Четырёхместный Коттедж">Четырёхместный Коттедж</a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">3-комнатный коттедж с сауной «Vip»</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td class="dropdown ">
                                                            <div class="wrap">
                                                                <a class="dropdown-toggle link_first" href="../../services/" title="<?= $json->menu->services->name?>">
                                                                    <?= $json->menu->services->name?>																&nbsp;<i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <span class="tail"></span>
                                                                <ul class="dropdown-menu">
                                                                    <li class=" ">
                                                                        <a href="../../services/rybalka" title="<?= $json->menu->services->fishing?>"><?= $json->menu->services->fishing?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../services/okhota" title="<?= $json->menu->services->hunt?>"><?= $json->menu->services->hunt?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../services/kafe" title="<?= $json->menu->services->cafe?>"><?= $json->menu->services->cafe?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../services/banya" title="<?= $json->menu->services->bathhouse?>"><?= $json->menu->services->bathhouse?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../services/ostrov-robinzonada" title="<?= $json->menu->services->island?>"><?= $json->menu->services->island?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>"><?= $json->menu->services->forest?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>"><?= $json->menu->services->addServices?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>"><?= $json->menu->services->winterRelax?></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>
                                                        <td class=" ">
                                                            <div class="wrap">
                                                                <a class=" link_first" href="../../price" title="<?= $json->menu->cost->name?>">
                                                                    <?= $json->menu->cost->name?>															</a>
                                                            </div>
                                                        </td>
                                                        <td class=" ">
                                                            <div class="wrap">
                                                                <a class=" link_first" href="../../promo" title="<?= $json->menu->promo->name?>">
                                                                    <?= $json->menu->promo->name?>															</a>
                                                            </div>
                                                        </td>
                                                        <td class=" ">
                                                            <div class="wrap">
                                                                <a class=" link_first" href="../../galereya" title="<?= $json->menu->gallery->name?>">
                                                                    <?= $json->menu->gallery->name?>															</a>
                                                            </div>
                                                        </td>
                                                        <td class=" ">
                                                            <div class="wrap">
                                                                <a class=" link_first" href="../../contacts" title="<?= $json->menu->contacts->name?>">
                                                                    <?= $json->menu->contacts->name?>															</a>
                                                            </div>
                                                        </td>
                                                        <td class="dropdown js-dropdown nosave" style="display:none;">
                                                            <div class="wrap">
                                                                <a class="dropdown-toggle more-items" href="index.html#">
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
                                                <li class="dropdown active">
                                                    <a class="dropdown-toggle" href="../company" title="<?= $json->menu->aboutUs->name?>">
                                                        <?= $json->menu->aboutUs->name?>									<i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class=" ">
                                                            <a href="../" title="<?= $json->menu->aboutUs->aboutAs?>">
                                                                <?= $json->menu->aboutUs->aboutAs?>																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../area/" title="<?= $json->menu->aboutUs->territory?>">
                                                                <?= $json->menu->aboutUs->territory?>																	</a>
                                                        </li>
                                                        <li class=" active">
                                                            <a href="../reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
                                                                <?= $json->menu->aboutUs->guestReviews?>																	</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown ">
                                                    <a class="dropdown-toggle" href="../../rooms" title="Размещение">
                                                        Размещение											<i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class=" ">
                                                            <a href="../../rooms/twin" title="Двухместный Номер Эконом Класса">
                                                                Двухместный Номер Эконом Класса																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../rooms/triple" title="Трёхместный Однокомнатный Номер">
                                                                Трёхместный Однокомнатный Номер																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../rooms/quarter" title="Четырехместный Номер">
                                                                Четырехместный Номер																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../rooms/quarter_cottage_sauna_fireplace" title="ЛЮКС Четырёхместный С Камином И Сауной">
                                                                ЛЮКС Четырёхместный С Камином И Сауной																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../rooms/quarter_cottage" title="Четырёхместный Коттедж">
                                                                Четырёхместный Коттедж																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../rooms/3-komnatnyy-kottedzh-s-saunoy-vip" title="3-комнатный коттедж с сауной «Vip»">
                                                                3-комнатный коттедж с сауной «Vip»																	</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown ">
                                                    <a class="dropdown-toggle" href="../../services" title="<?= $json->menu->services->name?>">
                                                        <?= $json->menu->services->name?>										<i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class=" ">
                                                            <a href="../../services/rybalka" title="<?= $json->menu->services->fishing?>">
                                                                <?= $json->menu->services->fishing?>													</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../services/okhota" title="<?= $json->menu->services->hunt?>">
                                                                <?= $json->menu->services->hunt?>														</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../services/kafe" title="<?= $json->menu->services->cafe?>">
                                                                <?= $json->menu->services->cafe?>														</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../services/banya" title="<?= $json->menu->services->bathhouse?>">
                                                                <?= $json->menu->services->bathhouse?>													</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../services/ostrov-robinzonada" title="<?= $json->menu->services->island?>">
                                                                <?= $json->menu->services->island?>														</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../services/dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                                <?= $json->menu->services->forest?>														</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                                <?= $json->menu->services->addServices?>									     		</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
                                                                <?= $json->menu->services->winterRelax?>												</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class=" ">
                                                    <a class="" href="../../price" title="<?= $json->menu->cost->name?>">
                                                        <?= $json->menu->cost->name?>									</a>
                                                </li>
                                                <li class=" ">
                                                    <a class="" href="../../promo" title="<?= $json->menu->promo->name?>">
                                                        <?= $json->menu->promo->name?>									</a>
                                                </li>
                                                <li class=" ">
                                                    <a class="" href="../../galereya" title="<?= $json->menu->gallery->name?>">
                                                        <?= $json->menu->gallery->name?>									</a>
                                                </li>
                                                <li class=" ">
                                                    <a class="" href="../../contacts" title="<?= $json->menu->contacts->name?>">
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
		'AJAX_PAGE' : '/company/reviews/',
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
											<ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../../index.html" title="Главная" itemprop="url"><span itemprop="title">Главная</span></a></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../index.html" title="О нас" itemprop="url"><span itemprop="title">О нас</span></a></li><li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">Отзывы</span></li></ul>										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h1>Отзывы гостей</h1>
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
					<a href="../">О нас</a>
													</li>
							<li class=" ">
					<a href="../area">Территория</a>
													</li>
							<li class="active ">
					<a href="../reviews">Отзывы гостей</a>
													</li>
					</ul>
	</aside>
										<div class="sidearea">
																																</div>
									</div>
									<div class="col-md-9 col-sm-9 content-md">
																		<div class="text_before_items">
	<p>Мы можем организовать отдых для каждого!&nbsp;В этом разделе собраны отзывы тех, кто побывал на нашей базе. Оставляйте замечания и пожелания, делитесь впечатлениями и приятными событиями, произошедшими у нас. Ваши положительные эмоции говорят о том, что мы работаем не зря, а критику мы воспринимаем как руководство к дальнейшему развитию.</p>






<div class="fonotzyv">
							<p>Поделитесь своим мнением об отдыхе в туркомплексе Арсенал!"</p>								
							
									<span class="btn btn-default white_br white btn-lg otzbt" data-event="jqm" data-param-id="23" data-name="question">Оставить отзыв</span>								</div></div>
		<div class="item-views  image_left reviews">
		
			<div class="group-content">
														
								<div class="row sid- items">
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_248">
								<div class="it">
																		<div class="text">Если кому то кажетс­я, что администрация фильтрует отзывы, размещая только полож­ительные , смею вас успокоить. Негативных отзывов об этой ба­зе просто не может быть!<br />
<br />
Выбрали базу случай­но по интернету. Это любовь навсегда! Ме­ста волшебные, разме­щение более, чем ком­фортное. Администрац­ия в номерах предусм­отрела малейший ваш &quot;чих&quot; . Все необходимые хозсре­дства, полностью уко­мплектованеая кухня от посуды и бытовой техники до одноразрв­ых фильтрой <br />
для кофе варки. Кофе молотый тоже есть. И чай, и соль. Фуми­гаторы помимо комнат­ных &#40; для каждого по­мещения свой&#41; еще и уличный для отлы отд­ыха на террасе. Дров­а, решетки для барбе­кю, даже запасные ла­мпочки предусмотрели! <br />
Можно просто сесть в машину и приехать на базу отдыхать. Бл­ижайшая &quot;цивили­зация&quot; &#40; магазин &quot;Пятерочка&qu­ot;, аптека, рынок со свежим мясом, почт­а, медицинская помощ­ь&#41; в 10 минутах на машине. Ваша задача- просто отдыхать и на­слаждаться природой. <br />
Территория базы сод­ержится в идеальном порядке.<br />
<br />
Еда в местном кафе: завтраки включены в стоимость. Одно осн­овное блюдо на выбор. К примеру яичница с ветчиной и сыром. Дети ели блинчики, муж кашу. Огромные по­рции великолепно при­готовленных блюд. К основному блюду прил­агалось творожок Дан­исимо, сыр в нарезке, масло, булка, стак­ан сока.<br />
<br />
Столы сервированы, атмосфера не столово­й, а именно кафе. <br />
О персонале. Более радушного приема на территории РФ мы еще не встречали. Там действительно искренне относятся к людям. <br />
Спасибо за такой ве­ликолепный отдых. Ищ­ем возможность снова к вам приехать. </div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Светлана</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_225">
								<div class="it">
																		<div class="text">Отдыхали в Арсенале летом, получили массу положительных эмоций. Мы с мужем любители активного отдыха, поэтому взяли номер эконом, так как времени там почти не проводим. Постоянно чем-то занимались – то играли в волейбол с другими жителями, то на рыбалку, то просто гулять ходили. Впервые попробовали катание на водных лыжах – ноги и руки на следующий день гудели, но оно того стоило! Сотрудники базы очень хорошо работают, проявляют участие, дружелюбные, в общем, только приятные люди. Отдых получился замечательный!</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Ксения Мухина</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_224">
								<div class="it">
																		<div class="text">Зимний отдых получился, что надо. Лыжи, коньки, а главное – зимняя рыбалка. В целом не 5 звезд, конечно, но очень даже неплохо. В номере было тепло, вода горячая работала хорошо.<br />
Заезд: 16.12.16</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Анатолий Полухин</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_223">
								<div class="it">
																		<div class="text">Божественно красивые окрестности, для увлеченных фотографией настоящее раздолье. Очень уютные и оборудованные комнаты, вкусная еда, и при этом цены очень доступные.<br />
Заезд 30 янв. 2017</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">MadMAx</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_169">
								<div class="it">
																		<div class="text">Отдыхали двумя парами в 4-х местном коттедже. Все очень понравилось. Коттедж для турбазы очень уютный, на кухне много посуды, свой мангал и коптильня под навесом....Персонал очень приветливый...Озеро - свой причал, красивый вид, обалденные закаты. Очень подходит для тихого и спокойного отдыха хоть семьей, хоть с друзьями , хоть просто вдвоем...В поселке (6 км) есть Пятерочка, так что все можно там купить<br>
Единственный минус - долго добираться...<br>
Внимание: турбаза находится в пограничной зоне, так что НЕ ЗАБУДЬТЕ ПАСПОРТА НА ВСЕХ!!! При нас 4 машины завернули назад...</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Ольга</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_134">
								<div class="it">
																		<div class="text">Тихое и красивое место.</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Igor Bozhko</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_133">
								<div class="it">
																		<div class="text">Отличное место для отдыха.</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Дмитрий Петров</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_132">
								<div class="it">
																		<div class="text">Охота? Рыбалка? Тишина? Вам сюда.</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Max Mishnew</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_131">
								<div class="it">
																		<div class="text">Божественно красивые места. Тёплые комнатки. Отдельная
территория. Невысокие цены. Вкусные обеды. Недалеко от Мраморного каньона.</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Михаил Капушин</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_130">
								<div class="it">
																		<div class="text">Добрый
вечер,в воскресенье вернулись с Арсенала, боже, как не хотелось уезжать,снимали
коттедж на 4+2,всё супер,рекомендую, доброжелательный персонал,отличное
озеро,комфортные условия,даже для большой компании,спасибо за отдых!</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Виктория Ильина</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_129">
								<div class="it">
																		<div class="text">И мы с
мужем хотим отзыв оставить. Случайно попали на вашу базу. Чему очень рады. Что
вроде не планировали. Но остались на вторую ночь. Очень приятный дружеский
персонал. Теперь тоже мечтаем о след поездке. Конечно нам очень далеко. Но
думаю повторим и не раз ☺. Спасибо!!!</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Оксана Сурудина</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_128">
								<div class="it">
																		<div class="text">Добрый
вечер! Вчера вернулись из поездки с отдыхом в вашем туркомплексе. Большое
спасибо! Нам всё понравилось. Мы даже размечтались, как будет здорово приехать
к вам зимой. А муж до сих пор вспоминает какой вкусной кашей накормили нас на
завтрак. Большое вам спасибо.</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Татьяна Жукова</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_127">
								<div class="it">
																		<div class="text">Спасибо
Вам за замечательный отдых! Хоть мы и не охотники и не рыбаки, но и место, и
обслуживание, и номер понравились очень! Обязательно расскажем о Вас
друзьям-знакомым и ждите в гости снова :)</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Варвара Ходарина</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_126">
								<div class="it">
																		<div class="text"><p>
	 Отдыхали у друзей в гостях 3 дня в августе 2007 года. Погода, природа, грибы, рыбалка, быт-все на высшем уровне
</p>
<p>
	 Обязательно приедем в следующем году всей семьей, для детей лучшего места на земле и не придумать.
</p></div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Лилия</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_125">
								<div class="it">
																		<div class="text">Райское место, приезжала поработать над книгой, лучше места для этого, наверное, не найти! Тишина, природа, вдохновение! Обслуживание отличное, а главное не навязчивое.</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Эллина</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_124">
								<div class="it">
																		<div class="text">Охота в Карелии событие необыкновенное! Спасибо! Буду снова!</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Володя</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_123">
								<div class="it">
																		<div class="text">Ездил в командировку, остановился в Арсенале. Спал ночью как младенец, воздух просто чудодейственный. Обслуживание на высшем уровне. Скоро пойду в отпуск! Ждите!!! Серега из Твери</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Ежик</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_122">
								<div class="it">
																		<div class="text">Скептически отношусь к всякого рода базам: обычно отношение не особо уважительное, условия сомнительные. Но сюда приеду снова. Приняли - как родного. Прошел уже почти месяц как вернулся, а Карелия так и снится почти каждый день.</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Антон</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_121">
								<div class="it">
																		<div class="text">Отдохнули великолепно! Спасибо! Отдых получился разнообразным, и все остались довольны и я, и муж, и ребенок. Сынуля когда вернулись домой, сказал: «Мама, я буду Ыбаком».</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Марина</div>
																		<div class="post"></div>
								</div>
							</div>
						</div>
																	<div class="col-md-12">
							<div class="item review" id="bx_3218110189_120">
								<div class="it">
																		<div class="text">Отлично отдохнули! Грибы, рыбалка - супер! Сервис отличный! Очень доброжелательные люди.</div>
																											<div class="border"></div>
								</div>
								<div class="info">
																												<div class="title">Виктор и Алла</div>
																		<div class="post">knopar@yandex.ru</div>
								</div>
							</div>
						</div>
									</div>
					</div>
	
				<div class="wrap_pagination">
	<ul class="pagination">
																																			<li class="active"><span>1</span></li>
																																		<li><a href="index.html%3FPAGEN_1=2.html">2</a></li>
																													<li  class="next"><a href="index.html%3FPAGEN_1=2.html"><i class="fa fa-angle-right"></i></a></li>
								</ul>
</div>	</div>																																</div>																					</div>						</div>															</div>											</div>		</div>		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="maxwidth-theme">
						<div class="top_block clearfix">
							<div class="col-md-3 hidden-sm hidden-xs">
								<div class="info">
									<div class="compass">
										<i class="fa"></i>
										Республика Карелия, г.Сортавала, п. Вяртсиля, 6-ой км. автодороги Вяртсиля-Суйстамо.									</div>
									<div class="contacts"><a class="btn btn-default" href="../../contacts/index.html">Схема проезда</a></div>
								</div>
							</div>
							<div class="col-md-9 col-sm-12">
								<div class="row">
									<div class="col-md-9 col-sm-9">
											<div class="bottom-menu">
		<div class="items row">
											<div class="col-md-4 col-sm-6">
					<div class="item active">
						<div class="title">
															<a href="../">О нас</a>
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
					<div class="item">
						<div class="title">
															<a href="../../services">Услуги</a>
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
															<a href="../../contacts/index.html">Контакты</a>
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