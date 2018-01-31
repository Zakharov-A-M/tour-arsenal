<?php
include_once '../../header.php';
?>

<title>Досуг в лесу (грибы-ягоды)</title>
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
                                                <?php
                                                include_once '../menu.php';
                                                ?>
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
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/dosug-v-lesu-griby-yagody/DSC_1456.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/DSC_1456.jpg');">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/dosug-v-lesu-griby-yagody/DSC_1458.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/DSC_1458.jpg');">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/dosug-v-lesu-griby-yagody/DSC_4766.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/DSC_4766.jpg');">
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <div class="item wline">
                        <a href="../../upload/services/dosug-v-lesu-griby-yagody/DSC_6095.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->relaxForest->gallety->textFoto ?>"></a>
                        <div class="img_block scale_block_animate"
                             style="background-image: url('../../upload/services/dosug-v-lesu-griby-yagody/DSC_6095.jpg');">
                        </div>
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
</div>																																</div>																					</div>						</div>															</div>											</div>		</div>

<?php
include_once '../../footer.php';
?>
