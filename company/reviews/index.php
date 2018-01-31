<?php
include_once '../../header.php';
include_once '../../api/review/review.php';

?>
<title>Отзывы гостей - "Дача на Ладоге"</title>

				<div class="line-row visible-xs"></div>
			</header>
			<div role="main" class="main">
													<section class="page-top COLOR">
						<div class="row">
							<div class="maxwidth-theme">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../../" title="<?= $json->aboutUs->guestReviews->mainLink[0] ?>" itemprop="url"><span itemprop="title"><?= $json->aboutUs->guestReviews->mainLink[0] ?></span></a></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../" title="<?= $json->aboutUs->guestReviews->mainLink[1] ?>" itemprop="url"><span itemprop="title"><?= $json->aboutUs->guestReviews->mainLink[1] ?></span></a></li><li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><?= $json->aboutUs->guestReviews->mainLink[2] ?></span></li></ul>										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h1><?= $json->aboutUs->guestReviews->mainText ?></h1>
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
					<a href="../"><?= $json->aboutUs->menu->aboutUs ?></a>
													</li>
							<li class=" ">
					<a href="../area"><?= $json->aboutUs->menu->territory ?></a>
													</li>
							<li class="active ">
					<a href="../reviews"><?= $json->aboutUs->menu->guestReviews ?></a>
													</li>
					</ul>
	</aside>
										<div class="sidearea">
																																</div>
									</div>
									<div class="col-md-9 col-sm-9 content-md">
																		<div class="text_before_items">
	<p><?= $json->aboutUs->guestReviews->text[0] ?></p>






<div class="fonotzyv">
							<p><?= $json->aboutUs->guestReviews->text[1] ?></p>
							
									<span class="btn btn-default white_br white btn-lg otzbt" id="guestReviews"><?= $json->aboutUs->guestReviews->mainText ?></span>								</div></div>
		<div class="item-views  image_left reviews">
			<div class="group-content">
                <div class="row sid- items">
                     <?php
                        foreach ($review as $item) {
                            ?>
                            <div class="col-md-12">
                                <div class="item review" id="<?= (int)$item['ID']?>">
                                    <div class="it">
                                        <div class="text">
                                            <?= $item['review']?>
                                        </div>
                                        <div class="border"></div>
                                    </div>
                                    <div class="info">
                                        <div class="title"><?= $item['name']?></div>
                                        <div class="post"><?= $item['email']?></div>
                                    </div>
                                </div>
                            </div>
                     <?php
                        }
                     ?>

						</div>
					</div>

				<div class="wrap_pagination">
	<ul class="pagination">
        <?php

            if ((int)$_GET['page'] > 1) { ?>
                <li  class="next"><a href="../reviews?page=<?= (int)$_GET['page']-1 ?>"><i class="fa fa-angle-left"></i></a></li>
            <?php }


            for ($i = 1; $i < $count+1; $i++){
                if($i == (int)$_GET['page'] || ((int)$_GET['page'] == 0 && $i == 1)) { ?>
                    <li class="active"><span><?= $i ?></span></li>
               <?php } else { ?>
                         <li><a href="../reviews?page=<?= $i ?>"><?= $i ?></a></li>

               <?php   }
            }


            if ((int)$_GET['page'] < $count) { ?>
                <li  class="next"><a href="../reviews?page=<?= (int)$_GET['page']+1 ?>"><i class="fa fa-angle-right"></i></a></li>
            <?php }


        ?>

	</ul>
</div>	</div>

                                    </div>
                            </div>
                                            </div>
                                </div>
            </div>		</div>
<?php
include_once '../../footer.php';
?>