<?php
include_once '../../header.php';
?>

<title>Зимние развлечения</title>


                    <div class="menu-row row">
						<div class="maxwidth-theme">
							<div class="col-md-12">
								<div class="nav-main-collapse collapse">
									<div class="menu-only">
                                        <nav class="mega-menu">
                                            <div class="top_menu_fixed_js">
                                                <ul class="nav nav-pills responsive-menu visible-xs" id="mainMenuF">
                                                    <li class="dropdown ">
                                                        <a class="dropdown-toggle" href="company/" title="<?= $json->menu->aboutUs->name?>">
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
                                                        <a class="dropdown-toggle" href="rooms" title="Размещение">
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
                                                                <a href="../banya" title="<?= $json->menu->services->bathhouse?>">
                                                                    <?= $json->menu->services->bathhouse?>																			</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                                    <?= $json->menu->services->forest?>																		</a>
                                                            </li>
                                                            <li class=" ">
                                                                <a href="../dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                                    <?= $json->menu->services->addServices?>																		</a>
                                                            </li>
                                                            <li class=" active">
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
                                                                    Размещение
<!--                                                                    &nbsp;<i class="fa fa-angle-down"></i>-->
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
                                                                <a class="dropdown-toggle link_first" href="services/" title="<?= $json->menu->services->name?>">
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
                                                                        <a href="../banya" title="<?= $json->menu->services->bathhouse?>"><?= $json->menu->services->bathhouse?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>"><?= $json->menu->services->forest?></a>
                                                                    </li>
                                                                    <li class=" ">
                                                                        <a href="services/dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>"><?= $json->menu->services->addServices?></a>
                                                                    </li>
                                                                    <li class=" active">
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
                                                    <a class="dropdown-toggle" href="company" title="<?= $json->menu->aboutUs->name?>">
                                                        <?= $json->menu->aboutUs->name?>									<i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class=" ">
                                                            <a href="company" title="<?= $json->menu->aboutUs->aboutAs?>">
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
                                                            <a href="../banya" title="<?= $json->menu->services->bathhouse?>">
                                                                <?= $json->menu->services->bathhouse?>													</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                                <?= $json->menu->services->forest?>														</a>
                                                        </li>
                                                        <li class=" ">
                                                            <a href="../dopolnitelnye-uslugi" title="<?= $json->menu->services->addServices?>">
                                                                <?= $json->menu->services->addServices?>									     		</a>
                                                        </li>
                                                        <li class=" active">
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
                                                    <a class="" href="contacts" title="<?= $json->menu->contacts->name?>">
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
		'AJAX_PAGE' : '/services/zimnie-razvlecheniya/',
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
											<h1>Зимние развлечения</h1>
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
					<a href="../banya">Баня</a>
													</li>
							<li class=" ">
					<a href="../dosug-v-lesu-griby-yagody">Досуг в лесу (грибы-ягоды)</a>
													</li>
							<li class=" ">
					<a href="../dopolnitelnye-uslugi">Дополнительные услуги</a>
													</li>
							<li class="active ">
					<a href="../zimnie-razvlecheniya">Зимние развлечения</a>
													</li>
					</ul>
	</aside>
										<div class="sidearea">
																																</div>
									</div>
									<div class="col-md-9 col-sm-9 content-md">
																				<div class="detail services">
		

	<div class="ask_a_question">
		<div class="inner">
			<span class="btn btn-default" id="askQuestion" services="Зимние развлечения"><span>Задать вопрос</span></span>
			<div class="margin-bottom-20">
				Хотите узнать больше? Спросите нас!&nbsp;			</div>
		</div>
	</div>


	<div class="content">
				
											Зимой наша "Дача на Ладоге" предлагает Вам много интересных занятий:<br>
<br>
<ul>
	<li>Подледная рыбалка, когда терпение рыбака, наконец, бывает награждено отличным уловом!</li>
	<li>
	Катание на лыжах по таинственному и заснеженному лесу.</li>
	<li>
	Весёлое катание с крутой горки на ватрушках. Редкий взрослый устоит и не прокатится с нашей горки хоть разок.</li>
	<li>
	Катание на снегоходах по трассам, разной протяженности в лесу, и по замерзшему озеру.&nbsp;</li>
	<li>
	После морозной прогулки, Вам поможет согреться просторная русская баня, где так хорошо посидеть с друзьями.</li>
	<li>
	Тихие настольные игры, общение в кругу семьи зимними вечерами у камина или в уютном кафе, где вас всегда вкусно накормят. </li>
</ul>
 Если Вы любите веселье, то в кафе можно спеть караоке и потанцевать.<br>
 <br>
А Ваш приезд на "Дача на Ладоге" в декабре, надолго запомнится Вам встречей Нового года на морозном воздухе у живой, нарядной елки, настоящей лесной красавицы!						</div>

<hr/>

	

	<div class="wraps">		
		<h4 class="title_block">Галерея</h4>
		<div class="item-views portfolio front">	
			<div class="row" itemscope itemtype="http://schema.org/ItemList">
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div class="item wline">
						<a href="../../upload/services/zimnie-razvlecheniya/0_2738f_62422587_orig.jpg"
                           class="dark_block_animate fancybox_ext" rel="big_gallery" title="Зимние развлечения">
                        </a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/zimnie-razvlecheniya/0_2738f_62422587_orig.jpg');">
                        </div>
					</div>
				</div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/zimnie-razvlecheniya/0_c7822_ee70c763_XL.jpg"
                           class="dark_block_animate fancybox_ext" rel="big_gallery" title="Зимние развлечения">
                        </a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/zimnie-razvlecheniya/0_c7822_ee70c763_XL.jpg');">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/zimnie-razvlecheniya/5.jpg"
                           class="dark_block_animate fancybox_ext" rel="big_gallery" title="Зимние развлечения">
                        </a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/zimnie-razvlecheniya/5.jpg');">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/zimnie-razvlecheniya/1024.jpg"
                           class="dark_block_animate fancybox_ext" rel="big_gallery" title="Зимние развлечения">
                        </a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/zimnie-razvlecheniya/1024.jpg');">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/zimnie-razvlecheniya/491841_blog-21156.jpg"
                           class="dark_block_animate fancybox_ext" rel="big_gallery" title="Зимние развлечения">
                        </a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/zimnie-razvlecheniya/491841_blog-21156.jpg');">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/zimnie-razvlecheniya/snow-tubing-93024_1280.jpg"
                           class="dark_block_animate fancybox_ext" rel="big_gallery" title="Зимние развлечения">
                        </a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/zimnie-razvlecheniya/snow-tubing-93024_1280.jpg');">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/zimnie-razvlecheniya/snow-winter-vehicle-ice-skate.jpg"
                           class="dark_block_animate fancybox_ext" rel="big_gallery" title="Зимние развлечения">
                        </a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/zimnie-razvlecheniya/snow-winter-vehicle-ice-skate.jpg');">
                        </div>
                    </div>
                </div>
            </div>
		</div>	
		<hr />	
	</div>

	<div class="order-block">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-5 valign">
				<span class="btn btn-default btn-lg" id="orderServices" services="Зимние развлечения"><span>Заказать услугу</span></span>
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
                                        Республика Карелия, п. Лумиваара +3,5 км.Ладожские шхеры.
                                    </div>
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
															<a href="../../company/">О нас</a>
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