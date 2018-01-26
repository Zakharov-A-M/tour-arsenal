<?php
include_once '../../header.php';
?>

<title>Досуг в лесу (грибы-ягоды)</title>
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
                                                            <li class=" active">
                                                                <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                                    <?= $json->menu->services->forest?>																		</a>
                                                            </li>
                                                            <li class=" ">
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
                                                                        <a href="../banya" title="<?= $json->menu->services->bathhouse?>"><?= $json->menu->services->bathhouse?></a>
                                                                    </li>
                                                                    <li class=" active">
                                                                        <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>"><?= $json->menu->services->forest?></a>
                                                                    </li>
                                                                    <li class=" ">
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
                                                        <li class=" active">
                                                            <a href="../dosug-v-lesu-griby-yagody" title="<?= $json->menu->services->forest?>">
                                                                <?= $json->menu->services->forest?>														</a>
                                                        </li>
                                                        <li class=" ">
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
		'AJAX_PAGE' : '/services/dosug-v-lesu-griby-yagody/',
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
											<ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../../" title="<?= $json->services->mainLink[0] ?>" itemprop="url"><span itemprop="title"><?= $json->services->mainLink[0] ?></span></a></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../" title="Услуги" itemprop="url"><span itemprop="title"><?= $json->services->mainLink[1] ?></span></a></li></ul>										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h1><?= $json->relaxForest->mainText ?></h1>
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
							<li class="active ">
					<a href="../dosug-v-lesu-griby-yagody"><?= $json->services->menu->relaxInForrest ?></a>
													</li>
							<li class=" ">
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
		

	<div class="ask_a_question">
		<div class="inner">
			<span class="btn btn-default" id="askQuestion" services="<?= $json->relaxForest->mainText ?>">
                <span><?= $json->serviceFishing->questionBlock->buttonText ?></span>
            </span>
			<div class="margin-bottom-20">
                <?= $json->serviceFishing->questionBlock->text ?>
            </div>
		</div>
	</div>


	<div class="content">
				<?php
                /*foreach ($json->relaxForest->textPageForest as $item) {
                           echo $item.'<br><br>';
                    }*/
                ?>
        <h2 align="center">Виды грибов встречающиеся в Карелии чаще всего</h2>
        <p>Видов грибов в Карелии растет очень много. Если точнее, то их целых 272 вида. Вот несколько самых известных из них:</p>
        <ol>
            <li><b>Белый гриб.</b> Чаще всего встречается в сосновых, еловых, березовых и других лесах.</li><br>
            <li><b> Подосиновик.</b> Собирают такие грибы в лесу. Обычно они растут возле берез, осин, иногда их можно увидеть возле дуба, тополя, сосны и ели.</li><br>
            <li><b>Подберезовик.</b> Место обитание этого вида грибов можно легко узнать из названия. Подберезовики собирают в березовых рощах или возле берез.</li><br>
            <li><b>Масленок.</b> Встречается в сосновых, а иногда в еловых лесах.</li><br>
            <li><b>Моховик.</b> Данный вид грибов растет исключительно в хвойных рощах. Например, в сосновом лесу.</li><br>
            <li><b>Лисичка.</b> Места обитания – хвойные и смешанные леса.</li><br>
            <li><b>Сыроежки.</b> Такие грибы собирают в основном в лесах.</li><br>
            <li><b>Грузди.</b> Можно найти в березовых или смешанных лесах. В основном растут группками.</li><br>
            <li><b>Опята.</b> Произрастают большими группами на пнях, стволах определённых деревьев и валежнике.</li><br>
            <li><b>Волнушка.</b> Не редко встречаются целыми гнездами в смешанных и сыроватых лесах.</li>
        </ol>
        <h2 align="center">Время, когда можно собирать грибы в Карелии</h2>
        <p>Для разных видов грибов характерно разное время появления:</p>
        <ul>
            <li>Ранней весной, в конце апреля появляются сморчки, строчки, которые растут в течение 2 месяцев.</li><br>
            <li>Некоторые съедобные грибы появляются уже в конце июня. Это: березовики, осиновики, белые грибы и маслята.</li><br>
            <li>В июле помимо перечисленных видов начинают появляться сыроежки, горькушки, волнушки, серушки и т.д. Рост продолжается в течении полумесяца. Кроме открытых пространств грибочки можно встретить в смешанных молодняках.</li><br>
            <li>Наиболее урожайный период начинается с середины августа, а заканчивается примерно в октябре. Все виды грибов можно встретить в лесах, на полянах, на тропинках и т.д.</li>
        </ul>
        <h2 align="center">Ягоды</h2>
        <ul>
            <li>Сезон сбора ягод в Карелии длится всего 3 месяца. Одной из первых поспевает земляника, её вкус придает отдыху в Карелии особую свежесть. Её нужно успеть собрать в начале июля. Сразу за ней спеет костяника. Потом наступает пора царской ягоды Морошки. Внешне она похожа на малину, только жёлтого цвета, растёт в болотистой местности. Ягода эта очень сочная и сладкая, с косточками.. На Севере говорят: «Морошку запасать – болезней не знать!» полезные качества морошки оценили уже во всем мире: в 100 грамм морошки содержится в 3-4 раза больше витаминов, чем в среднем апельсине, а по содержанию каротина морошка превосходит морковь.</li><br>
            <li>Чуть позже поспевают другие ягоды Карелии, голубика и черника созревают к концу июля - началу августа. Голубика потому так и называется, что имеет слегка голубоватый, матовый оттенок. Она крупнее черники и растёт во влажных местах. Зрелая черника тёмная, сладкая, собрать её можно очень быстро, так как в урожайный год черничник буквально этими карельскими ягодами усыпан. Черника не только красивая и вкусная ягода, благодаря целебным свойствам, чернику часто используют в народной медицине для профилактики и лечения многих заболеваний. Черника отличное средство для профилактики снижения зрения, после долгих часов у компьютера.</li><br>
            <li>Конец августа - начало сентября - время для сбора другой ягоды Карелии и окрестностей Петрозаводска - брусники. Начинают брать бруснику ещё слегка зеленоватой, тогда она лучше хранится. Однако вкуснее всего она в начале сентября. Крупные гроздья тёмно-алых ягод, особенно собранные на солнечной поляне, очень сладкие, хоть и оставляют едва уловимое горькое послевкусие, которым запомнится отдых в Карелии. Традиционно используют бруснику в лечебных целях. Целебными являются листья и ягоды растения.</li><br>
            <li>Позже всех в Карелии собирают клюкву. Клюква - особенная ягода. В ней очень много витамина С. После первых заморозков эта ягода становится значительно слаще. Ещё одна особенность ягоды клюквы - её способность хранится целый год, не теряя своих целебных качеств, незаменима для укрепления иммунитета.</li><br>
        </ul>
    </div>

<hr/>

	

	<div class="wraps">		
		<h4 class="title_block"><?= $json->relaxForest->gallety->textmain ?></h4>
		<div class="item-views portfolio front">	
			<div class="row" itemscope itemtype="http://schema.org/ItemList">
				    <div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/dosug-v-lesu-griby-yagody/88bf74e8c6d8b85b5db413f4f7ece61f.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/88bf74e8c6d8b85b5db413f4f7ece61f.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/dosug-v-lesu-griby-yagody/e3dc735f2cfb821295a00e85ec98096e.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/e3dc735f2cfb821295a00e85ec98096e.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/dosug-v-lesu-griby-yagody/17710c7cc0134adee8d0a5d00f4de0ce.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/17710c7cc0134adee8d0a5d00f4de0ce.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/dosug-v-lesu-griby-yagody/2c71a4d08d48d0965038a541337a615e.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/2c71a4d08d48d0965038a541337a615e.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/dosug-v-lesu-griby-yagody/bc4bc690b951cd24409a7cf7cb25c2f6.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/bc4bc690b951cd24409a7cf7cb25c2f6.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/dosug-v-lesu-griby-yagody/65d2ac06e80884beafaf818d69db4a77.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/65d2ac06e80884beafaf818d69db4a77.jpg');"></div>
						</div>
					</div>
                    <div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/dosug-v-lesu-griby-yagody/3378b58016a2b73005a58171d3efcd32.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/3378b58016a2b73005a58171d3efcd32.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/dosug-v-lesu-griby-yagody/45f11d1ff2c43242ab646d2bed7f02c9.jpeg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/45f11d1ff2c43242ab646d2bed7f02c9.jpeg');"></div>
						</div>
					</div>


                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/dosug-v-lesu-griby-yagody/5445fbc3f55ddae06ef1e00cbc2867ad.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
                        <div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/5445fbc3f55ddae06ef1e00cbc2867ad.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/dosug-v-lesu-griby-yagody/0cfd6980d88c69e6d4d90a75af5a8a94.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
                        <div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/0cfd6980d88c69e6d4d90a75af5a8a94.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/dosug-v-lesu-griby-yagody/9dc7469110ea5355929efc01b531a442.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
                        <div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/9dc7469110ea5355929efc01b531a442.jpg');"></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/dosug-v-lesu-griby-yagody/3f23ec60b0a401141f7d97b37a652601.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
                        <div class="img_block scale_block_animate" style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/3f23ec60b0a401141f7d97b37a652601.jpg');"></div>
                    </div>
                </div>

		</div>	
		<hr />	
	</div>



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
		<a class="back-url" href="../"><i class="fa fa-chevron-left"></i><?= $json->backList->mainText ?></a>
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
															<a href="../../company">О нас</a>
													</div>
					</div>
				</div>
											<div class="col-md-4 col-sm-6">
					<div class="item">
						<div class="title">
															<a href="../../rooms/">Размещение</a>
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