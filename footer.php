<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="maxwidth-theme">
                <div class="top_block clearfix">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="info">
                            <div class="compass">
                                <i class="fa"></i>
                                Республика Карелия, п. Лумиваара +3,5 км.Ладожские шхеры.									</div>
                            <div class="contacts"><a class="btn btn-default" href="<?= $siteURL ?>/contacts">Схема проезда</a></div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="row">
                            <div class="col-md-9 col-sm-9">
                                <div class="bottom-menu">
                                    <div class="items row">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item <?= strripos($_SERVER["REQUEST_URI"], '/company') !== false ? 'active' : ''; ?>">
                                                <div class="title">
                                                    <a href="<?= $siteURL ?>company">О нас</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item <?=  strripos($_SERVER["REQUEST_URI"], '/rooms') !== false ? 'active' : ''; ?>">
                                                <div class="title">
                                                    <a href="<?= $siteURL ?>rooms">Размещение</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item <?=  strripos($_SERVER["REQUEST_URI"], '/services') !== false ? 'active' : ''; ?>">
                                                <div class="title">
                                                    <a href="<?= $siteURL ?>services">Услуги</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item <?= strripos($_SERVER["REQUEST_URI"] === '/price/') !== false ? 'active' : ''; ?>">
                                                <div class="title">
                                                    <a href="<?= $siteURL ?>price">Цены</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item <?= strripos($_SERVER["REQUEST_URI"] === '/promo/') !== false ? 'active' : ''; ?>">
                                                <div class="title">
                                                    <a href="<?= $siteURL ?>promo">Акции</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item <?=  strripos($_SERVER["REQUEST_URI"], '/galereya/') !== false ? 'active' : ''; ?>">
                                                <div class="title">
                                                    <a href="<?= $siteURL ?>galereya">Галерея</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="item <?=  strripos($_SERVER["REQUEST_URI"], '/contacts/') !== false ? 'active' : ''; ?>">
                                                <div class="title">
                                                    <a href="<?= $siteURL ?>contacts">Контакты</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="social pull-right">
                                    <div class="social-icons">
                                        <!-- noindex -->
                                        <div class="title">Мы в соцсетях:</div>
                                        <ul>
                                            <li class="vk">
                                                <a href="https://vk.com/tour_arsenal" target="_blank" rel="nofollow" title="Вконтакте">
                                                    Вконтакте					<i class="fa fa-vk"></i>
                                                    <i class="fa fa-vk hide"></i>
                                                </a>
                                            </li>
                                            <li class="lj">
                                                <a href="https://www.youtube.com/channel/UCmomd_mcGiaMxATj35_V_Jw" target="_blank" rel="nofollow" title="YouTube">
                                                    YouTube					<i class="fa fa-youtube"></i>
                                                    <i class="fa fa-youtube hide"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- /noindex -->
                                    </div>										</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="maxwidth-theme">
                <div class="bottom_block clearfix">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                            <div class="copy">
                                &copy; 2017 Все права защищены.									</div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                            <div id="bx-composite-banner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="bx_areas">
</div>
</body>
</html>