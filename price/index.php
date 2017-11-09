<?php
include_once '../header.php';
?>
<title>Прайс-лист - Туркомплекс "Арсенал"</title>



				<div class="menu-row row">
						<div class="maxwidth-theme">
							<div class="col-md-12">
								<div class="nav-main-collapse collapse">
									<div class="menu-only">
                                        <nav class="mega-menu">
                                            <div class="top_menu_fixed_js">
                                                <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenuF">
                                                    <li class="dropdown">
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
                                                    <li class="dropdown ">
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
                                                    <li class=" active">
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
                                                        <td class="dropdown">
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
                                                        <td class="dropdown ">
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
                                                        <td class=" active">
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
                                                                <a class="dropdown-toggle more-items" href="index.php">
                                                                    <span>...</span>
                                                                </a>
                                                                <span class="tail"></span>
                                                                <ul class="dropdown-menu"></ul>
                                                            </div>
                                                        </td>
                                                        <td class="search-item nosave">
                                                            <div class="wrap">
                                                                <a href="index.php">
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
                                                            <a href="area" title="<?= $json->menu->aboutUs->territory?>">
                                                                <?= $json->menu->aboutUs->territory?>																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
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
                                                <li class="dropdown ">
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
                                                            <a href="../services/zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
                                                                <?= $json->menu->services->winterRelax?>												</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class=" active">
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
		'AJAX_PAGE' : '/price/',
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
											<ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://tour-arsenal.by" title="Главная" itemprop="url"><span itemprop="title">Главная</span></a></li><li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">Прайс-лист</span></li></ul>										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h1>Прайс-лист</h1>
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
					<a href="#tseny-na-prozhivanie">Цены на проживание</a>
													</li>
							<li class=" ">
					<a href="#tseny-na-dopolnitelnye-uslugi">Цены на дополнительные услуги</a>
													</li>
					</ul>
	</aside>
										<div class="sidearea">
																																</div>
									</div>
									<div class="col-md-9 col-sm-9 content-md">
																		
<h2>Бесплатные услуги базы:</h2>
<ul>
	<li>проход на территорию; </li>
	<li>пользование пляжем, детскими и спортивными площадками.</li>
</ul>
<br>
<br>
<div class="price-list-page">
			<div class="section" id="tseny-na-prozhivanie">
			<h3>Цены на проживание</h3>
			<div class="info">
												<div class="dscr"><p>
	 Номерной фонд состоит из 49 стационарных мест + 17 доп. стационарных мест:
</p>
<ul>
	<li>4 двухместных однокомнатных номера эконом - класса с совмещенными удобствами; </li>
	<li>
	3 трёхместных однокомнатных благоустроенных номера; </li>
	<li>
	2 четырёхместных трехкомнатных номера на 4-6 человек; </li>
	<li>
	2 четырёхместных трехкомнатных номера - ЛЮКС на 4-6 человек; </li>
	<li>
	3 четырёхместных коттеджа&nbsp; на 4-6 человек.</li>
	<li>
	-1 четырёхместный коттедж «Vip» с сауной на 4-6 человек.</li>
</ul>
<p>
</p>
 <div class="skroll-x">
<table class="table table-striped">
<thead>
<tr>
	<th>
		 &nbsp;
	</th>
	<th>
		 В стоимость проживания включены:<br>
		 завтрак и стоянка автомобиля.<br>
		 Расчётный час – 12.00
	</th>
	<th>
		 Межсезонье<br>
		 (16.10 – 30.12)<br>
		 (14.01 – 30.04)
	</th>
	<th>
		 Сезон<br>
		 (01.05 – 15.10)
	</th>
</tr>
</thead>
<tbody>
<tr>
	<td>
		 1.
	</td>
	<td>
		 Двухместный номер эконом-класса<br>
		 + 1 доп. место в гостиной
	</td>
	<td>
		 2400 руб. <br>
		 1000 руб./1 сут.
	</td>
	<td>
		 2800 руб <br>
		 1000 руб./1 сут.
	</td>
</tr>
<tr>
	<td>
		 2.
	</td>
	<td>
		 Трёхместный однокомнатный номер
	</td>
	<td>
		 &nbsp;3500 руб. &nbsp;
	</td>
	<td>
		 4000 руб. &nbsp;
	</td>
</tr>
<tr>
	<td>
		 3.
	</td>
	<td>
		 3-комнатный номер на 4 человека<br>
		 + 2 доп. места
	</td>
	<td>
		 4700 руб.<br>
		 1000 руб./1 сут. &nbsp;
	</td>
	<td>
		 6000 руб.<br>
		 1000 руб./1сут. &nbsp;
	</td>
</tr>
<tr>
	<td>
		 4.
	</td>
	<td>
		 3-комнатный номер-ЛЮКС&nbsp; на 4 человека с камином и сауной<br>
		 + 2 доп. места
	</td>
	<td>
		 6000 руб.<br>
		 1000 руб./1сут.
	</td>
	<td>
		 6800 руб.<br>
		 1000 руб./1сут.
	</td>
</tr>
<tr>
	<td>
		 5.
	</td>
	<td>
		 3-комнатный коттедж на 4 человека <br>
		 + 2 доп. места
	</td>
	<td>
		 5700 руб. <br>
		 1000 ./1 сут.
	</td>
	<td>
		 6300 руб. <br>
		 1000 руб./1сут.
	</td>
</tr>
<tr>
	<td>
		 6.
	</td>
	<td>
		 3-комнатный коттедж с сауной «Vip» на 4 человека<br>
		 + 2 доп. места
	</td>
	<td>
		 8000 руб. <br>
		 1000 ./1 сут.
	</td>
	<td>
		 10000 руб. <br>
		 1000 руб./1сут.
	</td>
</tr>
</tbody>
</table>
</div>
<ul>
	<li>Размещение животного на базе: 250 руб./сутки; </li>
	<li>Лесное кафе (TV, музыка, караоке, организация банкетов, свадеб, дней рождений); </li>
	<li>Русская баня &nbsp;у пруда; </li>
	<li>Летняя беседка на берегу озера; </li>
	<li>Робинзонада на необитаемом острове в охотничьей избе (баня, пикниковое место, пирс); </li>
	<li>Охраняемая стоянка для катеров и автомобилей;</li>
	<li>Спуск катеров на воду; </li>
	<li>Спортивная площадка (волейбол, мини-футбол). </li>
</ul></div>
							</div>
		</div>
			<div class="section" id="tseny-na-dopolnitelnye-uslugi">
			<h3>Цены на дополнительные услуги</h3>
			<div class="info">
				 <div class="skroll-x">
				<table class="table table-striped" id="top">
					<thead>
						<tr>
							<th>№</th>
							<th>Наименование</th>
							<th>Ед.изм.</th>
							<th>Цена(ед.)</th>
						</tr>
					</thead>
					<tbody>
												<tr>
							<td class="title_center">1</td>
							<td class="title_left">Русская баня</td>
							<td class="title_center">1 час / 1 чел.</td>
							<td class="title_center">200, ₽</td>
						</tr>
												<tr>
							<td class="title_center">2</td>
							<td class="title_left">Аренда чума (для гостей - бесплатно)</td>
							<td class="title_center">1 час</td>
							<td class="title_center">300, ₽</td>
						</tr>
												<tr>
							<td class="title_center">3</td>
							<td class="title_left">Стоянка машины  (для гостей туркомплекса – бесплатно)</td>
							<td class="title_center">1 сутки</td>
							<td class="title_center">300, ₽</td>
						</tr>
												<tr>
							<td class="title_center">4</td>
							<td class="title_left">Стоянка машины  с электроподключением</td>
							<td class="title_center">1 сутки</td>
							<td class="title_center">500, ₽</td>
						</tr>
												<tr>
							<td class="title_center">5</td>
							<td class="title_left">Стирка белья</td>
							<td class="title_center">1 партия </td>
							<td class="title_center">300, ₽</td>
						</tr>
												<tr>
							<td class="title_center">6</td>
							<td class="title_left">Чистка рыбы</td>
							<td class="title_center">1 кг</td>
							<td class="title_center">100, ₽</td>
						</tr>
												<tr>
							<td class="title_center">7</td>
							<td class="title_left">Копчение рыбы</td>
							<td class="title_center">1 партия</td>
							<td class="title_center">500, ₽</td>
						</tr>
												<tr>
							<td class="title_center">8</td>
							<td class="title_left">Водные лыжи</td>
							<td class="title_center">10 мин. / 1 час</td>
							<td class="title_center">250 ₽ / 1000, ₽</td>
						</tr>
												<tr>
							<td class="title_center">9</td>
							<td class="title_left">Лодка весельная</td>
							<td class="title_center">1час / 1 сутки  </td>
							<td class="title_center">100 ₽/ 1000, ₽</td>
						</tr>
												<tr>
							<td class="title_center">10</td>
							<td class="title_left">Лодка с мотором: 15 л.с (Прогресс, Казанка, МДК, Обь)</td>
							<td class="title_center">1 час / 1 сутки</td>
							<td class="title_center">500 ₽ / 3500, ₽</td>
						</tr>
												<tr>
							<td class="title_center">11</td>
							<td class="title_left">Лодка с мотором 5 л.с (Прогресс, Казанка, МДК, Обь)</td>
							<td class="title_center">1 час / 1 сутки</td>
							<td class="title_center">500 ₽ / 2500, ₽</td>
						</tr>
												<tr>
							<td class="title_center">12</td>
							<td class="title_left">Установка палатки</td>
							<td class="title_center">1 палатка / 1 сутки</td>
							<td class="title_center">500, ₽</td>
						</tr>
											</tbody>
				</table>
			</div>
											</div>
		</div>
	</div>																																</div>																					</div>						</div>															</div>																			<div class="color_block">
		<div class="row">
			<div class="maxwidth-theme">
				<div class="col-md-12">
					<div class="block front">
						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-3 col-sm-3">
											<h2>Остались вопросы?</h2>										</div>
										<div class="col-md-7 col-sm-6">
											Подробно расскажем о базе отдыха,&nbsp;услугах, ценах&nbsp;и подготовим индивидуальное предложение!&nbsp;<br>										</div>
										<div class="col-md-2 col-sm-3">
											<span class="btn btn-default white_br white btn-lg" data-event="jqm" data-param-id="21" data-name="question">Задать вопрос</span>										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
							</div>		</div>		<footer id="footer">
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
					<div class="item">
						<div class="title">
															<a href="../services">Услуги</a>
													</div>
					</div>
				</div>
											<div class="col-md-4 col-sm-6">
					<div class="item active">
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