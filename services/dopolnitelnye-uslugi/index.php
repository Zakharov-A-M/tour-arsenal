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
                                                        <a class="dropdown-toggle" href="../../company/" title="<?= $json->menu->aboutUs->name?>">
                                                            <?= $json->menu->aboutUs->name?>													<i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu fixed_menu_ext">
                                                            <li class=" ">
                                                                <a href="../../company" title="<?= $json->menu->aboutUs->aboutAs?>">
                                                                    <?= $json->menu->aboutUs->aboutAs?>																		</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../company/area" title="<?= $json->menu->aboutUs->territory?>">
                                                                    <?= $json->menu->aboutUs->territory?>														</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../../company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
                                                                    <?= $json->menu->aboutUs->guestReviews?>																			</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown ">
                                                        <a class="dropdown-toggle" href="../../rooms" title="Размещение">
                                                            Размещение													<i class="fa fa-angle-down"></i>
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
                                                    <li class="dropdown active">
                                                        <a class="dropdown-toggle" href="../../services" title="<?= $json->menu->services->name?>">
                                                            <?= $json->menu->services->name?>											<i class="fa fa-angle-down"></i>
                                                        </a>
                                                        <ul class="dropdown-menu fixed_menu_ext">
                                                            <li class=" ">
                                                                <a href="../rybalka" title="<?= $json->menu->services->fishing?>">
                                                                    <?= $json->menu->services->fishing?>																		</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../okhota" title="<?= $json->menu->services->hunt?>">
                                                                    <?= $json->menu->services->hunt?>																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../kafe" title="<?= $json->menu->services->cafe?>">
                                                                    <?= $json->menu->services->cafe?>											</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../banya" title="<?= $json->menu->services->bathhouse?>">
                                                                    <?= $json->menu->services->bathhouse?>																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../ostrov-robinzonada" title="<?= $json->menu->services->island?>">
                                                                    <?= $json->menu->services->island?>																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                                    <?= $json->menu->services->forest?>																		</a>
                                                            </li>
                                                            <li class=" active">
                                                                <a href="../dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                                    <?= $json->menu->services->addServices?>																		</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
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
                                                        <td class="dropdown ">
                                                            <div class="wrap">
                                                                <a class="dropdown-toggle link_first" href="../../company/" title="<?= $json->menu->aboutUs->name?>">
                                                                    <?= $json->menu->aboutUs->name?>																	&nbsp;<i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <span class="tail"></span>
                                                                <ul class="dropdown-menu">
                                                                    <li class=" ">
                                                                        <a href="../../company" title="<?= $json->menu->aboutUs->aboutAs?><"><?= $json->menu->aboutUs->aboutAs?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../company/area" title="<?= $json->menu->aboutUs->territory?>"><?= $json->menu->aboutUs->territory?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../../company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>"><?= $json->menu->aboutUs->guestReviews?></a>
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
                                                        <td class="dropdown active">
                                                            <div class="wrap">
                                                                <a class="dropdown-toggle link_first" href="../" title="<?= $json->menu->services->name?>">
                                                                    <?= $json->menu->services->name?>																&nbsp;<i class="fa fa-angle-down"></i>
                                                                </a>
                                                                <span class="tail"></span>
                                                                <ul class="dropdown-menu">
                                                                    <li class=" ">
                                                                        <a href="../rybalka" title="<?= $json->menu->services->fishing?>"><?= $json->menu->services->fishing?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../okhota" title="<?= $json->menu->services->hunt?>"><?= $json->menu->services->hunt?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../kafe" title="<?= $json->menu->services->cafe?>"><?= $json->menu->services->cafe?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../banya" title="<?= $json->menu->services->bathhouse?>"><?= $json->menu->services->bathhouse?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../ostrov-robinzonada" title="<?= $json->menu->services->island?>"><?= $json->menu->services->island?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>"><?= $json->menu->services->forest?></a>
                                                                    </li>
                                                                    <li class=" active">
                                                                        <a href="../dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>"><?= $json->menu->services->addServices?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>"><?= $json->menu->services->winterRelax?></a>
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
                                                    <a class="dropdown-toggle" href="../../company" title="<?= $json->menu->aboutUs->name?>">
                                                        <?= $json->menu->aboutUs->name?>									<i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class=" ">
                                                            <a href="../../company" title="<?= $json->menu->aboutUs->aboutAs?>">
                                                                <?= $json->menu->aboutUs->aboutAs?>																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../company/area" title="<?= $json->menu->aboutUs->territory?>">
                                                                <?= $json->menu->aboutUs->territory?>																	</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../../company/reviews" title="<?= $json->menu->aboutUs->guestReviews?>">
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
                                                <li class="dropdown active">
                                                    <a class="dropdown-toggle" href="../" title="<?= $json->menu->services->name?>">
                                                        <?= $json->menu->services->name?>										<i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class=" ">
                                                            <a href="../rybalka" title="<?= $json->menu->services->fishing?>">
                                                                <?= $json->menu->services->fishing?>													</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../okhota" title="<?= $json->menu->services->hunt?>">
                                                                <?= $json->menu->services->hunt?>														</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../kafe" title="<?= $json->menu->services->cafe?>">
                                                                <?= $json->menu->services->cafe?>														</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../banya" title="<?= $json->menu->services->bathhouse?>">
                                                                <?= $json->menu->services->bathhouse?>													</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../ostrov-robinzonada" title="<?= $json->menu->services->island?>">
                                                                <?= $json->menu->services->island?>														</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                                <?= $json->menu->services->forest?>														</a>
                                                        </li>
                                                        <li class=" active">
                                                            <a href="../dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                                <?= $json->menu->services->addServices?>									     		</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../zimnie-razvlecheniya" title="<?= $json->menu->services->winterRelax?>">
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
    $(".body").attr("class", '');
	var jsControl = new JCTitleSearch({
		//'WAIT_IMAGE': '/bitrix/themes/.default/images/wait.gif',
		'AJAX_PAGE' : '/services/dopolnitelnye-uslugi/',
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
											<ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../../" title="Главная" itemprop="url"><span itemprop="title">Главная</span></a></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../" title="Услуги" itemprop="url"><span itemprop="title">Услуги</span></a></li></ul>										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h1>Дополнительные услуги</h1>
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
					<a href="../rybalka">Рыбалка</a>
													</li>
							<li class=" ">
					<a href="../okhota">Охота</a>
													</li>
							<li class=" ">
					<a href="../kafe">Кафе</a>
													</li>
							<li class=" ">
					<a href="../banya">Баня</a>
													</li>
							<li class=" ">
					<a href="../ostrov-robinzonada">Остров (Робинзонада)</a>
													</li>
							<li class=" ">
					<a href="../dosug-v-lesu-griby-yagody">Досуг в лесу (грибы-ягоды)</a>
													</li>
							<li class="active ">
					<a href="../dopolnitelnye-uslugi">Дополнительные услуги</a>
													</li>
							<li class=" ">
					<a href="../zimnie-razvlecheniya">Зимние развлечения</a>
													</li>
					</ul>
	</aside>
										<div class="sidearea">
																																</div>
									</div>
									<div class="col-md-9 col-sm-9 content-md">
																				<div class="detail services">
		
						
		<div class="detailimage image-left col-md-4 col-sm-4 col-xs-12"><a href="../../upload/iblock/914/91443eb9626284707da8beea3be4d8eb.jpg" class="fancybox" title="Дополнительные услуги"><img src="../../upload/iblock/914/91443eb9626284707da8beea3be4d8eb.jpg" class="img-responsive" title="Дополнительные услуги" alt="Дополнительные услуги" /></a></div>
	
	<div class="ask_a_question">
		<div class="inner">
			<span class="btn btn-default" id="askQuestion" services="Дополнительные услуги"><span>Задать вопрос</span></span>
			<div class="margin-bottom-20">
				Хотите узнать больше? Спросите нас!&nbsp;			</div>
		</div>
	</div>


	<div class="content">
				
											Мы предлагаем Вашему вниманию организацию увлекательнейших мероприятий, которые надолго останутся в Вашей памяти!<br>
 <br>
 В зимний период рекомендуем обратить внимание на следующие виды развлечений:<br>
<ul>
	<li>Катание на схегоходах;</li>
	<li>Катание на собачьих упряжках;</li>
	<li>Зимняя рыбалка;</li>
	<li>Дровяная баня;</li>
</ul>
 <br>
 <br>
 Ну а в более теплое время года Вас ждут:<br>
<ul>
	<li>Экскурсии;</li>
	<li>
	Квадроциклы;</li>
	<li>
	Конные прогулки;</li>
	<li>
	Хаски;</li>
	<li>
	Рафтинг;</li>
	<li>
	Корпоративный отдых.</li>
</ul>						</div>

<hr/>

	

	<div class="wraps">		
		<h4 class="title_block">Галерея</h4>
		<div class="item-views portfolio front">	
			<div class="row" itemscope itemtype="http://schema.org/ItemList">
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/6ed/6ed7aaf9a58c987f631a8b1404300519.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/6ed/800_500_2/6ed7aaf9a58c987f631a8b1404300519.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/64e/64ef7bca57eebe1b70ae3829b16253e5.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/64e/800_500_2/64ef7bca57eebe1b70ae3829b16253e5.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/cbd/cbd6d4ce6a4733bd1bfea4c1c36af4bb.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/cbd/800_500_2/cbd6d4ce6a4733bd1bfea4c1c36af4bb.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/398/3985d2ffaf094a189d877ff1bc2af6db.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/398/800_500_2/3985d2ffaf094a189d877ff1bc2af6db.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/568/568536aeddd7c071cc4437173ce4c8ff.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/568/800_500_2/568536aeddd7c071cc4437173ce4c8ff.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/ee7/ee74d54f42ffed0c80acee165405e059.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/ee7/800_500_2/ee74d54f42ffed0c80acee165405e059.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/992/992fc37ee75a77c080037edb38b4466f.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/992/800_500_2/992fc37ee75a77c080037edb38b4466f.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/2de/2de690e677bc27effe5637bd7d97761b.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Если Вы приехали без лодки, можете взять ее на прокат"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/2de/800_500_2/2de690e677bc27effe5637bd7d97761b.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/05f/05f423b8bd9875d830f80ba822c3bf46.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Рысья гора"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/05f/800_500_2/05f423b8bd9875d830f80ba822c3bf46.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/a6f/a6f85aeb3e167a2a767aa02b0a8f1e90.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Рускеала. Мраморный каньон."></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/a6f/800_500_2/a6f85aeb3e167a2a767aa02b0a8f1e90.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/567/5673456b6004cb8cdd1980ed3d8b1260.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/567/800_500_2/5673456b6004cb8cdd1980ed3d8b1260.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/0da/0dab1f05fe033ade5a33e88cc263d281.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/0da/800_500_2/0dab1f05fe033ade5a33e88cc263d281.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/1d5/1d5c2ac9236fecdf4c54b60d9993dbf8.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/1d5/800_500_2/1d5c2ac9236fecdf4c54b60d9993dbf8.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/f5d/f5d3dec30b1c052a94774d109791f75a.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/f5d/800_500_2/f5d3dec30b1c052a94774d109791f75a.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/bab/baba40a000efd3e4a6d620488f9bd1eb.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/bab/800_500_2/baba40a000efd3e4a6d620488f9bd1eb.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/f85/f852422e18cf621a36d0630d1ca6e6d7.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/f85/800_500_2/f852422e18cf621a36d0630d1ca6e6d7.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/34d/34d873353c3f0d6e23d2b0960b4dae26.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/34d/800_500_2/34d873353c3f0d6e23d2b0960b4dae26.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/9ec/9ecb8ed3e33aaedb722fa174fc7ed05f.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/9ec/800_500_2/9ecb8ed3e33aaedb722fa174fc7ed05f.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/5e5/5e503001dcdc7c551b48c0d7ebd00c81.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Дополнительные услуги"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/5e5/800_500_2/5e503001dcdc7c551b48c0d7ebd00c81.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/210/210c5926fbf85485e4453ff8badc61b3.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Экскурсию к мраморному каньону можно заказать у нас."></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/210/800_500_2/210c5926fbf85485e4453ff8badc61b3.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/fc1/fc192175f58c6c549322d5a18fc6956c.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Двойная радуга на озере Янисъярви"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/fc1/800_500_2/fc192175f58c6c549322d5a18fc6956c.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/847/84745183cdb5085d5a043f80232ef15f.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Ну и конечно же наши потрясающие закаты!"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/847/800_500_2/84745183cdb5085d5a043f80232ef15f.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/d6a/d6af7c0de426e1a284ac280b3d649766.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Вид с Рысьей горы на Янис"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/d6a/800_500_2/d6af7c0de426e1a284ac280b3d649766.jpg');"></div>						
						</div>
					</div>
									<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/iblock/d6b/d6bf5153cc6ccb4eea8af81bad1ec06b.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="Где-то в штольнях мраморного каньона..."></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/resize_cache/iblock/d6b/800_500_2/d6bf5153cc6ccb4eea8af81bad1ec06b.jpg');"></div>						
						</div>
					</div>
							</div>
		</div>	
		<hr />	
	</div>

	<div class="order-block">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-5 valign">
				<span class="btn btn-default btn-lg" id="orderServices" services="Дополнительные услуги"><span>Заказать услугу</span></span>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-7 valign">
				<div class="text">
					Оформите заявку на сайте, мы свяжемся с вами в ближайшее время и ответим на все интересующие вопросы.				</div>
			</div>
		</div>
	</div>
	<hr />


<!--'start_frame_cache_video'--><!--'end_frame_cache_video'-->		
						
						
						
						
					</div>
	<div style="clear:both"></div>
<div class="row">
	<div class="col-md-6 share">
					<span class="text">Поделиться ссылкой:</span>
			<script type="text/javascript" src="http://yastatic.net/share2/share.js" async="async" charset="utf-8"></script>
			<div class="ya-share2" data-services="vkontakte,facebook,twitter,viber,whatsapp,odnoklassniki,moimir"></div>
			</div>
	<div class="col-md-6">
		<a class="back-url" href="../"><i class="fa fa-chevron-left"></i>Вернуться к списку</a>
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
									<div class="contacts"><a class="btn btn-default" href="../../contacts">Схема проезда</a></div>
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