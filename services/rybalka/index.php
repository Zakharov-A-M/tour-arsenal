<?php
include_once '../../header.php';
?>


<title>Рыбалка</title>
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
											<h1><?= $json->serviceFishing->mainText ?></h1>
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
			<span class="btn btn-default" id="askQuestion" services="<?= $json->serviceFishing->mainText ?>"><span><?= $json->serviceFishing->questionBlock->buttonText ?></span></span>
			<div class="margin-bottom-20">
                <?= $json->serviceFishing->questionBlock->text ?>
            </div>
		</div>
	</div>


	<div class="content">
        <h3>Где можно порыбачить и полюбоваться северными красотами, в северо-западном районе России?</h3>

        <p>Прекрасные по красоте и рыбацкому счастью места, находятся недалеко от Петербурга. Это Ладожское озеро. Крупнейший внутренний водоем на территории западноевропейского региона. Озеро, занимает площадь около 18 000 квадратных километров. Протяженность, Ладоги по линии берега составляет порядка 1 500 км. Протяженность, красивейшего участка шхер около 800 километров. В Ладогу впадает порядка 40 рек.</p>
        <p>Резкие перепады глубин в северных районах (от 60 до 220 метров), на южных участках разница меньше (от 15 до 70 метров). Самая глубокая точка находится на Валааме (233 м). Ледостав начинается в октябре, а сходит лед в период конец апреля начало мая. </p>
        <p>Озеро очень редко покрывается льдом полностью, центр стоит безо льда. Очень переменчив характер погоды. Смена проходит резко. Только светило солнце и штиль, через несколько часов может смениться штормом. </p>
        <p>Более 500 больших и малых островов расположены по всей территории Ладоги. Валаамский островной архипелаг, состоит из больших участков скал и земли. Прекрасное место — это Ладожские шхеры, проливы между островами. </p>
        <p>На острове Коневец, 600 лет тому назад, был заложен и воздвигнут, одно из самых значимых для православных, место. Одноименный мужской монастырь, притягивает к себе много верующих и туристов. Но сюда стекаются огромное количество, людей, поклоняющихся другой вере — РЫБАЛКЕ. </p>
        <p>Множество видов рыб, обитающих здесь, красота этих мест, да и значимые уловы — вот причины поклонения этим местам. Только, перед поездкой. Нужно сразу определиться с рыбой, которую хотелось бы ловить. От этого зависит выбор места ловли, подборе «грамотных» снастей. Ведь на севере есть в основном рыба, обитающая только здесь, также и в других местах. Хотя есть рыбки, обитающие по всему водоему — это ряпушка и корюшка.</p>
    </div>

<hr/>


	<div class="wraps">		
		<h4 class="title_block"><?= $json->serviceFishing->textPageFish->contentFoto->mainText ?></h4>
		<div class="item-views portfolio front">	
			<div class="row" itemscope itemtype="http://schema.org/ItemList">
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/36907512cd9a63ae39c9545799ad5e40.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/36907512cd9a63ae39c9545799ad5e40.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/1cb5b16e6f107c6287424bcaffc6bc35.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/1cb5b16e6f107c6287424bcaffc6bc35.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/060570c5966d7031d937fd7fd75d4d75.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/060570c5966d7031d937fd7fd75d4d75.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/33e77e634ad98d2a346f10a248b6c031.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/33e77e634ad98d2a346f10a248b6c031.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/0681699726915589b81f3be4c93160a3.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/0681699726915589b81f3be4c93160a3.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/26d48bbb158523722f652d3af449b74b.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/26d48bbb158523722f652d3af449b74b.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/a32d46cf7280477e8889a21119113083.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/a32d46cf7280477e8889a21119113083.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/1290a5036b493a858ae51626e94ea4ec.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/1290a5036b493a858ae51626e94ea4ec.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/8c356367137c29d48fdc5c4f0556dc30.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/8c356367137c29d48fdc5c4f0556dc30.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/31a72a7100610b2e0040f6158adad410.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/31a72a7100610b2e0040f6158adad410.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/d1e4479b5b3cf294bd14431765c43281.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/d1e4479b5b3cf294bd14431765c43281.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/8ccac1d5cda7b71dc01a973fe5c79c4b.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/8ccac1d5cda7b71dc01a973fe5c79c4b.jpg');"></div>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-6">
						<div class="item wline">
							<a href="../../upload/services/fishing/c4c0de5adc73a152ff5e49cbd31e15ed.jpg" class="dark_block_animate fancybox_ext" rel="big_gallery" title="<?= $json->serviceFishing->textPageFish->contentFoto->nameFoto ?>"></a>
							<div class="img_block scale_block_animate" style="background-image: url('../../upload/services/fishing/c4c0de5adc73a152ff5e49cbd31e15ed.jpg');"></div>
						</div>
					</div>
				</div>
		</div>	
		<hr />	
	</div>

	<div class="order-block">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-5 valign">
				<span class="btn btn-default btn-lg" id="orderServices" services="<?= $json->serviceFishing->mainText ?>"><span><?= $json->orderService->buttonText ?></span></span>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-7 valign">
				<div class="text">
                    <?= $json->orderService->orderText ?>
                </div>
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
		<a class="back-url" href="../"><i class="fa fa-chevron-left"></i><?= $json->backList->mainText ?></a>
	</div>
</div>																																</div>																					</div>						</div>															</div>											</div>		</div>

<?php
include_once '../../footer.php';
?>

<title>Рыбалка</title>