<?php
include_once '../header.php';
?>
<title>О нас - "Дача на Ладоге"</title>

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
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../"
                                                                                                     title="<?= $json->aboutUs->aboutUs->mainLink[0] ?>"
                                                                                                     itemprop="url"><span
                                                itemprop="title"><?= $json->aboutUs->aboutUs->mainLink[0] ?></span></a>
                                </li>
                                <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span
                                            itemprop="title"><?= $json->aboutUs->aboutUs->mainLink[1] ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?= $json->aboutUs->aboutUs->mainText ?></h1>
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
                            <li class="active ">
                                <a href="../company"><?= $json->aboutUs->menu->aboutUs ?></a>
                            </li>
                            <li class=" ">
                                <a href="area"><?= $json->aboutUs->menu->territory ?></a>
                            </li>
                            <li class=" ">
                                <a href="reviews"><?= $json->aboutUs->menu->guestReviews ?></a>
                            </li>
                        </ul>
                    </aside>
                    <div class="sidearea">
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 content-md">
                    <div class="company detail">
                        <div class="items row">
                            <div class="col-md-12">
                                <div class="item_block" id="bx_3218110189_76">
                                    <div class="detailimage image-wide">
                                        <a href="../upload/company/turi_v_kareliu.jpg"
                                           class="fancybox" title="<?= $json->aboutUs->aboutUs->foto->one ?>">
                                            <img src="../upload/company/turi_v_kareliu.jpg"
                                                 class="img-responsive"
                                                 title="<?= $json->aboutUs->aboutUs->foto->one ?>"
                                                 alt="<?= $json->aboutUs->aboutUs->foto->one ?>"
                                            />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <div class="text">

                                            <?php foreach ($json->aboutUs->aboutUs->text as $item) {
                                                echo '<p>' . $item . '</p>';
                                            } ?>

                                            <hr class="big"/>
                                        </div>


                                        <div class="wraps">
                                            <h4 class="title_block"><?= $json->aboutUs->aboutUs->textGallery ?></h4>
                                            <div class="item-views portfolio front">
                                                <div class="row" itemscope itemtype="http://schema.org/ItemList">
                                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                                        <div class="item wline">
                                                            <a href="../upload/company/unnamed.jpg"
                                                               class="dark_block_animate fancybox_ext" rel="big_gallery"
                                                               title="<?= $json->aboutUs->aboutUs->foto->one ?>"></a>
                                                            <div class="img_block scale_block_animate"
                                                                 style="background-image: url('../upload/company/unnamed.jpg');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                                        <div class="item wline">
                                                            <a href="../upload/company/ng-v-rf3-2.jpg"
                                                               class="dark_block_animate fancybox_ext" rel="big_gallery"
                                                               title="<?= $json->aboutUs->aboutUs->foto->two ?>"></a>
                                                            <div class="img_block scale_block_animate"
                                                                 style="background-image: url('../upload/company/ng-v-rf3-2.jpg');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                                        <div class="item wline">
                                                            <a href="../upload/company/1468489377.jpg"
                                                               class="dark_block_animate fancybox_ext" rel="big_gallery"
                                                               title="<?= $json->aboutUs->aboutUs->foto->tree ?>"></a>
                                                            <div class="img_block scale_block_animate"
                                                                 style="background-image: url('../upload/company/1468489377.jpg');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                                        <div class="item wline">
                                                            <a href="../upload/company/finlandmain.jpg"
                                                               class="dark_block_animate fancybox_ext" rel="big_gallery"
                                                               title="<?= $json->aboutUs->aboutUs->foto->four ?>"></a>
                                                            <div class="img_block scale_block_animate"
                                                                 style="background-image: url('../upload/company/finlandmain.jpg');">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="big"/>
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
</div>        </div>

<?php
include_once '../footer.php';
?>
