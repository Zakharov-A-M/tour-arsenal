<?php
include_once '../header.php';
?>
<title>Услуги - "Дача на Ладоге"</title>

<div class="line-row visible-xs"></div>
</header>
<div role="main" class="main">
    <section class="page-top COLOR">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="breadcrumb"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="http://tour-arsenal.by" title="<?= $json->services->mainLink[0] ?>" itemprop="url"><span itemprop="title"><?= $json->services->mainLink[0] ?></span></a></li><li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><?= $json->services->mainLink[1] ?></span></li></ul>										</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1><?= $json->services->listService->mainText ?></h1>
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
                                <a href="rybalka"><?= $json->services->menu->fishing ?></a>
                            </li>
                            <li class=" ">
                                <a href="okhota"><?= $json->services->menu->hunting ?></a>
                            </li>
                            <li class=" ">
                                <a href="kafe"><?= $json->services->menu->cafe ?></a>
                            </li>
                            <li class=" ">
                                <a href="banya"><?= $json->services->menu->bathhouse ?></a>
                            </li>
                            <li class=" ">
                                <a href="ostrov-robinzonada"><?= $json->services->menu->iclandRob ?></a>
                            </li>
                            <li class=" ">
                                <a href="dosug-v-lesu-griby-yagody"><?= $json->services->menu->relaxInForrest ?></a>
                            </li>
                            <li class=" ">
                                <a href="dopolnitelnye-uslugi"><?= $json->services->menu->additionalServices ?></a>
                            </li>
                            <li class=" ">
                                <a href="zimnie-razvlecheniya"><?= $json->services->menu->winterInter ?></a>
                            </li>
                        </ul>
                    </aside>
                    <div class="sidearea">
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 content-md">
                    <div class="text_before_items">
                        <?= $json->services->listService->firstText ?><br></div>
                    <div class="item-views list image_left services">

                        <div class="items row">


                            <div class="col-md-12">
                                <div class="item noborder" id="bx_651765591_80">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="rybalka" class="blink">
                                                    <img src="../upload/iblock/b7b/b7bc31b7d51a3ce5b0569fafc33d0e4e.jpg" alt="<?= $json->services->serviceFish->name ?>" title="<?= $json->services->serviceFish->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="rybalka"><?= $json->services->serviceFish->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceFish->text ?></p>

                                                <div class="button"><a href="rybalka" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_61">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="okhota" class="blink">
                                                    <img src="../upload/iblock/73a/73a97224c0d01de69aabc585d860bc42.jpg" alt="<?= $json->services->serviceHunt->name ?>" title="<?= $json->services->serviceHunt->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="okhota"><?= $json->services->serviceHunt->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceHunt->text ?></p>
                                                <div class="button"><a href="okhota" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_62">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="kafe" class="blink">
                                                    <img src="../upload/iblock/2c3/2c3f308832c9e6ff0f5c0769b014e06c.jpg" alt="<?= $json->services->serviceCafe->name ?>" title="<?= $json->services->serviceCafe->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="kafe"><?= $json->services->serviceCafe->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceCafe->text ?></p>
                                                <div class="button"><a href="kafe" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_81">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="banya" class="blink">
                                                    <img src="../upload/iblock/a84/a84abe8f79de788daf77c2c3e29356e4.jpg" alt="<?= $json->services->serviceBathHouse->name ?>" title="<?= $json->services->serviceBathHouse->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="banya"><?= $json->services->serviceBathHouse->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceBathHouse->text ?></p>
                                                <div class="button"><a href="banya" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_82">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="ostrov-robinzonada" class="blink">
                                                    <img src="../upload/iblock/38d/38d44751e94564b2db4691825aa8ce9a.jpg" alt="<?= $json->services->serviceIslandRob->name ?>" title="<?= $json->services->serviceIslandRob->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="ostrov-robinzonada"><?= $json->services->serviceIslandRob->name ?></a>
                                                </div>


                                                <p><?= $json->services->serviceIslandRob->text ?></p>

                                                <div class="button"><a href="ostrov-robinzonada" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_60">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="dosug-v-lesu-griby-yagody" class="blink">
                                                    <img src="../upload/iblock/022/022e7e0da4b8c985939d14e521c4073e.jpg" alt="<?= $json->services->serviceRelaxForest->name ?>" title="<?= $json->services->serviceRelaxForest->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="dosug-v-lesu-griby-yagody"><?= $json->services->serviceRelaxForest->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceRelaxForest->text ?></p>
                                                <div class="button"><a href="dosug-v-lesu-griby-yagody" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_83">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="dopolnitelnye-uslugi" class="blink">
                                                    <img src="../upload/iblock/780/780ed73fa097c4ecdc8b030f6c7d1d7f.jpg" alt="<?= $json->services->serviceAddservices->name ?>" title="<?= $json->services->serviceAddservices->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="dopolnitelnye-uslugi"><?= $json->services->serviceAddservices->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceAddservices->text ?></p>
                                                <div class="button"><a href="dopolnitelnye-uslugi" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <hr />
                                <div class="item noborder" id="bx_651765591_159">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">						<div class="image">
                                                <a href="zimnie-razvlecheniya" class="blink">
                                                    <img src="../upload/iblock/3bd/3bd7427519a253c570d0017b37b2d77f.jpg" alt="<?= $json->services->serviceWinter->name ?>" title="<?= $json->services->serviceWinter->name ?>" class="img-responsive" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12"><div class="text">
                                                <div class="title">
                                                    <a href="zimnie-razvlecheniya"><?= $json->services->serviceWinter->name ?></a>
                                                </div>
                                                <p><?= $json->services->serviceWinter->text ?></p>

                                                <div class="button"><a href="zimnie-razvlecheniya" class="btn btn-default btn-sm white"><span><?= $json->services->buttonAboutService ?></span></a></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>																																</div>																					</div>						</div>															</div>											</div>		</div>
<?php
include_once '../footer.php';
?>