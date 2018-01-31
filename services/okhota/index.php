<?php
include_once '../../header.php';
include_once '../../api/services/hunt.php';
?>




<title>Охота</title>
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
											<h1><?= $json->huntPage->mainText ?></h1>
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
<!--		-->
<!--		-->
<!--						-->
<!--		<div class="detailimage image-left col-md-4 col-sm-4 col-xs-12"><a href="../../upload/iblock/02d/02d4ec4ca4cac1cb41c177b54b4edf99.jpg" class="fancybox" title="--><?php // $json->huntPage->mainText ?><!--"><img src="../../upload/iblock/02d/02d4ec4ca4cac1cb41c177b54b4edf99.jpg" class="img-responsive" title="--><?php //= $json->huntPage->mainText ?><!--" alt="--><?php //= $json->huntPage->mainText ?><!--" /></a></div>-->
<!--	-->
<!--	<div class="ask_a_question">-->
<!--		<div class="inner">-->
<!--			<span class="btn btn-default" id="askQuestion" services="--><?php //$json->huntPage->mainText ?><!--">-->
<!--                <span>--><?php //$json->serviceFishing->questionBlock->buttonText ?><!--</span>-->
<!--            </span>-->
<!--			<div class="margin-bottom-20">-->
<!--                --><?php //$json->serviceFishing->questionBlock->text ?>
<!--            </div>-->
<!--		</div>-->
<!--	</div>-->
<!---->
<!---->
<!--	<div class="content">-->
<!--		--><?php
//            foreach ($json->huntPage->textPageHunt as $key => $item) {
//                if ($cost[$key]['cost_to'] != null) {
//                    $str = 'от '.$cost[$key]['cost_from'].' руб. (до '.$cost[$key]['cost_to'].' руб.).';
//                } else {
//                    $str = $cost[$key]['cost_from'].' руб.';
//                }
//
//                    echo '<p>'.$item.' '.$str.'</p>';
//            }
//
//        ?>
<!---->
<!---->
<!--	</div>-->
<!---->
<!--<hr/>-->
<!---->
<!--	-->
<!---->
<!---->
<!--	<div class="order-block">-->
<!--		<div class="row">-->
<!--			<div class="col-md-4 col-sm-4 col-xs-5 valign">-->
<!--				<span class="btn btn-default btn-lg" id="orderServices" services="--><?php //$json->huntPage->mainText ?><!--"><span>--><?php //$json->orderService->buttonText ?><!--</span></span>-->
<!--			</div>-->
<!--			<div class="col-md-8 col-sm-8 col-xs-7 valign">-->
<!--				<div class="text">-->
<!--                    --><?php //$json->orderService->orderText ?>
<!--                </div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--	<hr />-->
<!--                                            -->
<!--						-->
<!--                                            -->
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