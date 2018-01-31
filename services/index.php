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
                                <ul class="breadcrumb">
                                    <li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <a href="<?= $siteURL ?>" title="<?= $json->services->mainLink[0] ?>" itemprop="url">
                                            <span itemprop="title"><?= $json->services->mainLink[0] ?></span>
                                        </a>
                                    </li>
                                    <li class="active" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                                        <span itemprop="title">
                                            <?= $json->services->mainLink[1] ?>
                                        </span>
                                    </li>
                                </ul>
                            </div>
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
                            <?php
                            include_once 'menu.php';
                            ?>
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
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="image">
                                                    <a href="<?= $siteURL ?>services/rybalka" class="blink">
                                                        <img src="../upload/services/lodka-3-700x400.jpg"
                                                             alt="<?= $json->services->serviceFish->name ?>"
                                                             title="<?= $json->services->serviceFish->name ?>"
                                                             class="img-responsive"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="text">
                                                    <div class="title">
                                                        <a href="<?= $siteURL ?>services/rybalka">
                                                            <?= $json->services->serviceFish->name ?>
                                                        </a>
                                                    </div>
                                                    <p><?= $json->services->serviceFish->text ?></p>
                                                    <div class="button">
                                                        <a href="<?= $siteURL ?>services/rybalka" class="btn btn-default btn-sm white">
                                                            <span><?= $json->services->buttonAboutService ?></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <hr/>
                                    <div class="item noborder" id="bx_651765591_61">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="image">
                                                    <a href="<?= $siteURL ?>services/okhota" class="blink">
                                                        <img src="../upload/services/1485463862.jpg"
                                                             alt="<?= $json->services->serviceHunt->name ?>"
                                                             title="<?= $json->services->serviceHunt->name ?>"
                                                             class="img-responsive"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="text">
                                                    <div class="title">
                                                        <a href="<?= $siteURL ?>services/okhota">
                                                            <?= $json->services->serviceHunt->name ?>
                                                        </a>
                                                    </div>
                                                    <p><?= $json->services->serviceHunt->text ?></p>
                                                    <div class="button">
                                                        <a href="<?= $siteURL ?>services/okhota" class="btn btn-default btn-sm white">
                                                            <span><?= $json->services->buttonAboutService ?></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <hr/>
                                    <div class="item noborder" id="bx_651765591_81">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="image">
                                                    <a href="<?= $siteURL ?>services/banya" class="blink">
                                                        <img src="../upload/services/banya/9436f96a10fa16953df705d256c6a330.jpg"
                                                             alt="<?= $json->services->serviceBathHouse->name ?>"
                                                             title="<?= $json->services->serviceBathHouse->name ?>"
                                                             class="img-responsive"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="text">
                                                    <div class="title">
                                                        <a href="<?= $siteURL ?>services/banya">
                                                            <?= $json->services->serviceBathHouse->name ?>
                                                        </a>
                                                    </div>
                                                    <p><?= $json->services->serviceBathHouse->text ?></p>
                                                    <div class="button">
                                                        <a href="<?= $siteURL ?>services/banya" class="btn btn-default btn-sm white">
                                                            <span><?= $json->services->buttonAboutService ?></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <hr/>
                                    <div class="item noborder" id="bx_651765591_60">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="image">
                                                    <a href="<?= $siteURL ?>services/dosug-v-lesu-griby-yagody" class="blink">
                                                        <img src="../upload/services/538762.jpg"
                                                             alt="<?= $json->services->serviceRelaxForest->name ?>"
                                                             title="<?= $json->services->serviceRelaxForest->name ?>"
                                                             class="img-responsive"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="text">
                                                    <div class="title">
                                                        <a href="<?= $siteURL ?>services/dosug-v-lesu-griby-yagody">
                                                            <?= $json->services->serviceRelaxForest->name ?>
                                                        </a>
                                                    </div>
                                                    <p><?= $json->services->serviceRelaxForest->text ?></p>
                                                    <div class="button">
                                                        <a href="<?= $siteURL ?>services/dosug-v-lesu-griby-yagody"
                                                            class="btn btn-default btn-sm white">
                                                            <span><?= $json->services->buttonAboutService ?></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <hr/>
                                    <div class="item noborder" id="bx_651765591_83">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="image">
                                                    <a href="<?= $siteURL ?>services/dopolnitelnye-uslugi" class="blink">
                                                        <img src="../upload/services/Karelia-vid_010.jpg"
                                                             alt="<?= $json->services->serviceAddservices->name ?>"
                                                             title="<?= $json->services->serviceAddservices->name ?>"
                                                             class="img-responsive"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="text">
                                                    <div class="title">
                                                        <a href="<?= $siteURL ?>services/dopolnitelnye-uslugi">
                                                            <?= $json->services->serviceAddservices->name ?>
                                                        </a>
                                                    </div>
                                                    <p><?= $json->services->serviceAddservices->text ?></p>
                                                    <div class="button">
                                                        <a href="<?= $siteURL ?>services/dopolnitelnye-uslugi"
                                                                           class="btn btn-default btn-sm white">
                                                            <span><?= $json->services->buttonAboutService ?></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <hr/>
                                    <div class="item noborder" id="bx_651765591_159">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="image">
                                                    <a href="<?= $siteURL ?>services/zimnie-razvlecheniya" class="blink">
                                                        <img src="../upload/services/langlaufen-gross.jpg"
                                                             alt="<?= $json->services->serviceWinter->name ?>"
                                                             title="<?= $json->services->serviceWinter->name ?>"
                                                             class="img-responsive"
                                                        />
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-12">
                                                <div class="text">
                                                    <div class="title">
                                                        <a href="<?= $siteURL ?>services/zimnie-razvlecheniya">
                                                            <?= $json->services->serviceWinter->name ?>
                                                        </a>
                                                    </div>
                                                    <p><?= $json->services->serviceWinter->text ?></p>

                                                    <div class="button">
                                                        <a href="<?= $siteURL ?>services/zimnie-razvlecheniya"
                                                           class="btn btn-default btn-sm white">
                                                            <span><?= $json->services->buttonAboutService ?></span>
                                                        </a>
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
    </div>        </div>
<?php
include_once '../footer.php';
?>