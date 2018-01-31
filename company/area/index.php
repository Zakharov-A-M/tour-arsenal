<?php
include_once '../../header.php';
?>
<title>Территория - "Дача на Ладоге"</title>

				<div class="line-row visible-xs"></div>
			</header>
			<div role="main" class="main">
													<section class="page-top COLOR">
						<div class="row">
							<div class="maxwidth-theme">
								<div class="col-md-12">
									<div class="row">
										<div class="col-md-12">
											<ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../../index.html" title="<?= $json->aboutUs->territory->mainLink[0] ?>" itemprop="url"><span itemprop="title"><?= $json->aboutUs->territory->mainLink[0] ?></span></a></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../index.html" title="<?= $json->aboutUs->territory->mainLink[0] ?>" itemprop="url"><span itemprop="title"><?= $json->aboutUs->territory->mainLink[1] ?></span></a></li><li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><?= $json->aboutUs->territory->mainLink[2] ?></span></li></ul>										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<h1><?= $json->aboutUs->territory->mainText ?></h1>
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
							<li class="active ">
					<a href="../area"><?= $json->aboutUs->menu->territory ?></a>
													</li>
							<li class=" ">
					<a href="../reviews"><?= $json->aboutUs->menu->guestReviews ?></a>
													</li>
					</ul>
	</aside>
										<div class="sidearea">
																																</div>
									</div>
									<div class="col-md-9 col-sm-9 content-md">
					<?php
                        foreach ($json->aboutUs->territory->text as $item)
                            echo '</>'.$item.'</p>'
                    ?>


<p>
	<a href="../../upload/company/area/DJI_0109.jpg" class="fancybox">
        <img width="768" alt="<?= $json->aboutUs->territory->foto->one ?>"
             src="../../upload/company/area/DJI_0109.jpg"
             title="Дача на Ладоге территория"
             class="img-responsive">
    </a>
</p>
                                        <p>
                                            <a href="../../upload/company/area/DJI_0110.jpg" class="fancybox">
                                                <img width="768" alt="<?= $json->aboutUs->territory->foto->one ?>"
                                                     src="../../upload/company/area/DJI_0110.jpg"
                                                     title="Дача на Ладоге территория"
                                                     class="img-responsive">
                                            </a>
                                        </p>
                                        <p>
                                            <a href="../../upload/company/area/DJI_0111.jpg" class="fancybox">
                                                <img width="768" alt="<?= $json->aboutUs->territory->foto->one ?>"
                                                     src="../../upload/company/area/DJI_0111.jpg"
                                                     title="Дача на Ладоге территория"
                                                     class="img-responsive">
                                            </a>
                                        </p>


																															</div>																					</div>						</div>															</div>											</div>		</div>
<?php
include_once '../../footer.php';
?>