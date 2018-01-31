<?php
include_once '../../header.php';
?>

<title>Дополнительные услуги</title>
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
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../../"
                                                                                                     title="<?= $json->services->mainLink[0] ?>"
                                                                                                     itemprop="url"><span
                                                itemprop="title"><?= $json->services->mainLink[0] ?></span></a></li>
                                <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../"
                                                                                                     title="Услуги"
                                                                                                     itemprop="url"><span
                                                itemprop="title"><?= $json->services->mainLink[1] ?></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?= $json->AddServices->mainText ?></h1>
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


                        <div class="detailimage image-left col-md-4 col-sm-4 col-xs-12"><a
                                    href="../../upload/services/dopoln-uslugi/df9afadef666d62_3192.f582a58e98_p-middle.jpg" class="fancybox"
                                    title="Дополнительные услуги"><img
                                        src="../../upload/services/dopoln-uslugi/df9afadef666d62_3192.f582a58e98_p-middle.jpg"
                                        class="img-responsive" title="Дополнительные услуги"
                                        alt="Дополнительные услуги"/></a></div>

                        <div class="ask_a_question">
                            <div class="inner">
			<span class="btn btn-default" id="askQuestion" services="<?= $json->AddServices->mainText ?>">
                <span><?= $json->serviceFishing->questionBlock->buttonText ?></span>
            </span>
                                <div class="margin-bottom-20">
                                    <?= $json->serviceFishing->questionBlock->text ?>
                                </div>
                            </div>
                        </div>


                        <div class="content">

                            <?= $json->AddServices->firsText1 ?><br>
                            <br>
                            <?= $json->AddServices->textPageAddService->mainText ?><br>
                            <ul>
                                <?php
                                foreach ($json->AddServices->textPageAddService->list as $item) {
                                    echo '<li>' . $item . '</li>';
                                }
                                ?>
                            </ul>
                            <br>
                            <br>
                            <?= $json->AddServices->textPageHotTime->mainText ?><br>
                            <ul>
                                <?php
                                foreach ($json->AddServices->textPageHotTime->list as $item) {
                                    echo '<li>' . $item . '</li>';
                                }
                                ?>
                            </ul>
                        </div>

                        <hr/>


                        <div class="wraps">
                            <h4 class="title_block"><?= $json->AddServices->gallety->textmain ?></h4>
                            <div class="item-views portfolio front">
                                <div class="row" itemscope itemtype="http://schema.org/ItemList">
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6208.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6208.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6212.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6212.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6236.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6236.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_0842.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_0842.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7705.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7705.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7765.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7765.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7891.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7891.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7715.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7715.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7950.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7950.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/CIMG3131.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/CIMG3131.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_4138.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_4138.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6000.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6000.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6102.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6102.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6109.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6109.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6159.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6159.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6163.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6163.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6164.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6164.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6172.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6172.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/DSC_6184.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/DSC_6184.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7962.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7962.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7972.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7972.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_7980.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_7980.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8003.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8003.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8294.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8294.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8318.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8318.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8343.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8343.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-6">
                                        <div class="item wline">
                                            <a href="../../upload/services/dopoln-uslugi/IMG_8372.jpg"
                                               class="dark_block_animate fancybox_ext"
                                               rel="big_gallery"
                                               title="<?= $json->AddServices->gallety->textFoto[0] ?>">
                                            </a>
                                            <div class="img_block scale_block_animate"
                                                 style="background-image: url('../../upload/services/dopoln-uslugi/IMG_8372.jpg');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>
                        </div>

                        <div class="order-block">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-5 valign">
                                    <span class="btn btn-default btn-lg" id="orderServices"
                                          services="<?= $json->AddServices->mainText ?>"><span><?= $json->orderService->buttonText ?></span></span>
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-7 valign">
                                    <div class="text">
                                        <?= $json->orderService->orderText ?>            </div>
                                </div>
                            </div>
                        </div>
                        <hr/>


                        <!--'start_frame_cache_video'--><!--'end_frame_cache_video'-->


                    </div>
                    <div style="clear:both"></div>
                    <div class="row">
                        <div class="col-md-6 share">
                            <span class="text">Поделиться ссылкой:</span>
                            <script type="text/javascript" src="http://yastatic.net/share2/share.js" async="async"
                                    charset="utf-8"></script>
                            <div class="ya-share2"
                                 data-services="vkontakte,facebook,twitter,viber,whatsapp,odnoklassniki,moimir"></div>
                        </div>
                        <div class="col-md-6">
                            <a class="back-url" href="../"><i
                                        class="fa fa-chevron-left"></i><?= $json->backList->mainText ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        </div>
<?php
include_once '../../footer.php';
?>