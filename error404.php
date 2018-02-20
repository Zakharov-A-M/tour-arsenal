<?php
include_once 'header.php';
?>
    <title>Ошибка: 404 - Страница не найдена - "Дача на Ладоге"</title>
        <div class="line-row visible-xs"></div>
    </header>
    <div role="main" class="main">
        <div class="container">
            <div class="row">
                <div class="maxwidth-theme">
                    <div class="col-md-3 col-sm-3 left-menu-md">
                        <div class="sidearea">
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 content-md">
                        <style>
                            .page-top, .left-menu-md, .right-menu-md{display:none;}
                            .content-md{width:100%;}
                        </style>
                        <div class="page404">
                            <div class="row">
                                <div class="col-md-7 hidden-xs hidden-sm">
                                    <div class="i404">404</div>
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="t404">
                                        <div style="font-size:44px;line-height:50px;text-transform:uppercase;">Ошибка 404</div>
                                        <div style="font-size:18px;line-height:32px;color:#666666;">Страница не найдена</div>
                                        <div style="font-size:13px;margin:14px 0 35px;">Неправильно набран адрес или такой<br />страницы не существует</div>
                                        <a href="<?= $siteURL ?>" class="btn btn-default btn-lg">Перейти на главную</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $(window).resize(function(){ //  BX.addCustomEvent('onWindowResize', function(eventdata) {
                                try{
                                    var windowHeight = $(window).outerHeight();
                                    var panelHeight = $('#panel').outerHeight();
                                    var headerHeight = $('header').outerHeight();
                                    var footerHeight = $('footer').outerHeight();
                                    var mainPaddingTop = parseInt($('.main').css('padding-top'));
                                    var mainPaddingBottom = parseInt($('.main').css('padding-bottom'));
                                    var bodyMarginTop = parseInt($('.body').css('margin-top'));
                                    var bodyMarginBottom = parseInt($('.body').css('margin-bottom'));
                                    var page404Height = $('.page404').outerHeight();
                                    var part = Math.floor((windowHeight - panelHeight - headerHeight - footerHeight - page404Height) / 2);
                                    console.log(part);
                                    if(part < (mainPaddingTop + bodyMarginTop)){
                                        part = mainPaddingTop + bodyMarginTop;
                                    }
                                    if(part < (mainPaddingBottom + bodyMarginBottom)){
                                        part = mainPaddingBottom + bodyMarginBottom;
                                    }
                                    console.log(part);
                                    var top = (part - mainPaddingTop - bodyMarginTop);
                                    if(top < 0){
                                        top = 0;
                                    }
                                    var bottom = (part - mainPaddingBottom - bodyMarginBottom);
                                    if(bottom < 0){
                                        bottom = 0;
                                    }
                                    ignoreResize.push(true);
                                    $('.page404').css({'opacity': '1', 'margin-top': top + 'px', 'margin-bottom': bottom + 'px'});
                                    setTimeout(function() {
                                        $('.page404').css({'transition': 'none', '-moz-transition': 'none', '-ms-transition': 'none', '-o-transition': 'none', '-webkit-transition': 'none'});
                                    }, 400);
                                    ignoreResize.pop();
                                }
                                catch(e){}
                            });
                        </script>
                    </div>																					</div>						</div>															</div>											</div>		</div>
<?php
include_once 'footer.php';
?>