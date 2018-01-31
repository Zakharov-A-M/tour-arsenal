<?php
include_once '../header.php';
?>
    <title>Галерея - "Дача на Ладоге"</title>

    <div class="line-row visible-xs"></div>
    </header>
    <div role="main" class="main">
        <section class="page-top COLOR">
            <div class="row">
                <div class="maxwidth-theme">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="breadcrumb">
                                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a
                                                href="http://tour-arsenal.by" title="<?= $json->gallery->mainLink[0] ?>"
                                                itemprop="url"><span
                                                    itemprop="title"><?= $json->gallery->mainLink[0] ?></span></a></li>
                                    <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <span itemprop="title"><?= $json->gallery->mainLink[1] ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h1><?= $json->gallery->mainText ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="maxwidth-theme">
                    <div class="col-md-12 col-sm-12 col-xs-12 content-md">
                        <div class="item-views catalog sections front all">
                            <div class="items row">
                                <div class="col-sm-12"><h2><?= $json->gallery->fotoGallery->mainTextFoto ?></h2></div>

                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item wline" id="bx_3218110189_77">
                                        <a href="fotogalereya-dacha-na-ladoge" class="dark_block_animate"></a>
                                        <div class="img_block scale_block_animate"
                                             style="background-image: url('../upload/gallery/s1200.jpg');"></div>
                                        <div class="info">
                                            <div class="title">
						<span class="wrap_outer titles">
							<a href="fotogalereya-dacha-na-ladoge" class="outer_text"><span
                                        class="inner_text"><?= $json->gallery->fotoGallery->topicFoto->fotoArsenal ?></span></a>
						</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item wline" id="bx_3218110189_138">
                                        <a href="letnyaya-rybalka" class="dark_block_animate"></a>
                                        <div class="img_block scale_block_animate"
                                             style="background-image: url('../upload/gallery/wallperz.jpg');"></div>
                                        <div class="info">
                                            <div class="title">
						<span class="wrap_outer titles">
							<a href="letnyaya-rybalka" class="outer_text"><span
                                        class="inner_text"><?= $json->gallery->fotoGallery->topicFoto->summerFish ?></span></a>
						</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-views catalog sections front all">
                            <div class="items row">
                                <div class="col-sm-12"><h2><?= $json->gallery->videoGallery->mainTextVideo ?></h2></div>

                                <div class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="item wline" id="bx_651765591_200">
                                        <a href="https://www.youtube.com/watch?v=QVWy1tU6nRs?autoplay=1"
                                           class="dark_block_animate fancybox-video"></a>
                                        <div class="img_block scale_block_animate"
                                             style="background-image: url('../upload/iblock/7fe/7fe34669d2faaf4d55a7b863be4feb29.jpg');"></div>
                                        <div class="info">
                                            <div class="title">
						<span class="wrap_outer titles">
							<a href="https://www.youtube.com/watch?v=QVWy1tU6nRs?autoplay=1"
                               class="outer_text fancybox-video">
								<span class="inner_text"> Отдых </span>
							</a>
						</span>
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
    </div>
    </div>

<?php
include_once '../footer.php';
?>