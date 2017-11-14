<?php

$call = ['ru' => 'Обратный звонок', 'eu' => 'Back call', 'fi' => 'soittopyyntö', 'cn' => '回調'];
$req_field = ['ru' => 'Обязательные поля', 'eu' => 'Required fields', 'fi' => 'Pakolliset kentät', 'cn' => '必填字段'];
$into_you = ['ru' => 'Представьтесь, мы вам перезвоним', 'eu' => 'Introduce yourself, we will call you back', 'fi' => 'Esittele itsesi, soitamme sinut takaisin', 'cn' => '介紹你自己，我們會給你回電話'];
$name = ['ru' => 'Ваше имя', 'eu' => 'Your name', 'fi' => 'Sinun nimesi', 'cn' => '你的名字'];
$phone = ['ru' => 'Телефон', 'eu' => 'Phone', 'fi' => 'Puhelinnumero', 'cn' => '電話號碼'];
$robot = ['ru' => 'Подтвердите, что вы не робот', 'eu' => 'Confirm that you are not a robot', 'fi' => 'Varmista, ettet ole robotti', 'cn' => '確認你不是機器人'];
$i_agree = ['ru' => 'Я согласен на', 'eu' => 'I agree to', 'fi' => 'Olen samaa mieltä', 'cn' => '我同意'];
$proces_data = ['ru' => 'обработку персональных данных', 'eu' => 'processing of personal data', 'fi' => 'henkilötietojen käsittely', 'cn' => '處理個人資料'];
$send = ['ru' => 'Отправить', 'eu' => 'Send', 'fi' => 'lähettämään', 'cn' => '送'];
$ask_question = ['ru' => 'Задать вопрос', 'eu' => 'Ask a Question', 'fi' => 'Kysy kysymys', 'cn' => '問一個問題'];
$name_fam = ['ru' => 'Имя и фамилия', 'eu' => 'Name and surname', 'fi' => 'Nimi ja sukunimi', 'cn' => '名字和姓氏'];
$meneg_answer = ['ru' => 'Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости услуг и подготовят индивидуальное коммерческое предложение.', 'eu' => 'The managers of the company will gladly answer your questions and calculate the cost of services and prepare an individual commercial offer.', 'fi' => 'Yrityksen johtajat mielellään vastaavat kysymyksiisi ja laskevat palveluiden kustannukset ja valmistavat yksittäisen kaupallisen tarjouksen.', 'cn' => '公司的管理人員很樂意回答你的問題，併計算服務成本，並準備個人商業報價。'];
$email = ['ru' => 'E-mail', 'eu' => 'E-mail', 'fi' => 'Sähköpostiosoite', 'cn' => '電子郵件地址'];
$services = ['ru' => 'Интересующий номер/услуга', 'eu' => 'Number of interest / service', 'fi' => 'Kiinnostuksen / palvelun määrä', 'cn' => '感興趣的數量/服務'];
$question = ['ru' => 'Ваш вопрос', 'eu' => 'Your question', 'fi' => 'Kysymyksesi', 'cn' => '你的問題'];
$order_service = ['ru' => 'Заказать услугу', 'eu' => 'Order service', 'fi' => 'Tilaa palvelu', 'cn' => '訂單服務'];
$serv = ['ru' => 'Услуга', 'eu' => 'Service', 'fi' => 'palvelu', 'cn' => '服務'];
$messege = ['ru' => 'Сообщение', 'eu' => 'Message', 'fi' => 'Viestisi', 'cn' => '您的消息'];
$add_file = ['ru' => 'Добавить файл', 'eu' => 'Add file', 'fi' => 'Lisää tiedosto', 'cn' => '添加文件'];
$feedback = ['ru' => 'Отзыв', 'eu' => 'Feedback', 'fi' => 'muistaa', 'cn' => '召回'];
$post_feedback = ['ru' => 'Оставить отзыв', 'eu' => 'Give feedback', 'fi' => 'Jätä vastaus', 'cn' => '留下回應'];

if($_POST['id'] == 'call') {

?>

    <span class="jqmClose top-close fa fa-close"></span>
    <script src='https://www.google.com/recaptcha/api.js?hl=<?= $_COOKIE["country"] ?>'></script>
    <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
        <div class="form popup">

            <form name="aspro_resort_callback" id="form">
                <div class="form-header">
                    <i class="fa fa-phone"></i>
                    <div class="text">
                        <div class="title"><?= $call[$_COOKIE["country"]] ?></div>
                        <?= $into_you[$_COOKIE["country"]] ?>										</div>
                </div>
                <div class="form-body">
                    <div class="row" data-SID="FIO">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="FIO"><?= $name[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="FIO" name="FIO" class="form-control required" maxlength="50" onkeypress="return filter_input(event,/[A-ZА-Я'` ]/i)" value="" /><i class="fa fa-user"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="PHONE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="PHONE"><?= $phone[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="PHONE" name="PHONE" class="form-control required phone" onkeypress="return filter_input(event,/[0-9 -()+]/i)" value="" /><i class="fa fa-phone"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row recaptcha-row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label><?= $robot[$_COOKIE["country"]] ?>:<span class="required-star">*</span></label>																	<div class="input ">
                                    <input type="hidden" class="recaptcha" name="recaptcha" id="recaptcha">
                                    <div class="g-recaptcha" data-callback="imNotARobot" data-sitekey="6LdnBTgUAAAAADEc2bmSdxiEmYWxBAKlvWx_mcDi"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row processing-block">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input">
                                    <input type="checkbox" class="processing_approval" id="processing_approval" name="processing_approval" value="Y">
                                    <label for="processing_approval"><?= $i_agree[$_COOKIE["country"]] ?> <!-- noindex  --><a href="/info/processing/" target="_blank" rel="nofollow"><?= $proces_data[$_COOKIE["country"]] ?></a><!-- /noindex  --></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer clearfix">
                    <div class="pull-left required-fileds">
                        <i class="star">*</i> - <?= $req_field[$_COOKIE["country"]] ?>				</div>
                    <div class="pull-right">
                        <button class="btn-lg btn btn-default" type="button" id="callme"><?= $send[$_COOKIE["country"]] ?></button><br/><input type="hidden" name="form_submit" value="Отправить">				</div>
                </div>
            </form>	</div>
       </div>

    <script type="text/javascript">
        var imNotARobot = function() {
            $.ajax({
                type: 'POST',
                url: 'http://tour-arsenal.by/ajax/capcha.php',
                data: {recaptcha : grecaptcha.getResponse()},
                success: function(data){
                    if (+data == 0) {
                        $('.g-recaptcha>div').css('border', '1px solid #e02222');
                        flag++;
                    } else {
                        $('.g-recaptcha>div').css('border', '');
                    }
                }
            });
        };
    </script>


<?php

    }

?>

<?php



if($_POST['id'] == 'question') {

?>


    <span class="jqmClose top-close fa fa-close"></span>
    <script src='https://www.google.com/recaptcha/api.js?hl=<?= $_COOKIE["country"] ?>'></script>
    <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
        <div class="form popup">

            <form name="aspro_resort_question">
                <input type="hidden" name="bxajaxid" id="bxajaxid_c6dbabef203591a9f020e3e2dec22dbc_8BACKi" value="c6dbabef203591a9f020e3e2dec22dbc" /><input type="hidden" name="AJAX_CALL" value="Y" />
                <input type="hidden" name="sessid" id="sessid" value="de20a4d199f64ecc9bee4be78b1cd84f" />			<div class="form-header">
                    <i class="fa fa-phone"></i>
                    <div class="text">
                        <div class="title"><?= $ask_question[$_COOKIE["country"]] ?></div>
                        	<?= $meneg_answer[$_COOKIE["country"]] ?>									</div>
                </div>
                <div class="form-body">
                    <div class="row" data-SID="NAME">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="NAME"><?= $name_fam[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="NAME" name="NAME" class="form-control required " maxlength="50"   onkeypress="return filter_input(event,/[A-ZА-Я'` ]/i)"    value="" /><i class="fa fa-user"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="EMAIL">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="EMAIL"><?= $email[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="email" id="EMAIL" name="EMAIL" class="form-control required " maxlength="70"   value="" />										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="PHONE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="PHONE"><?= $phone[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="PHONE" name="PHONE" class="form-control required phone"  onkeypress="return filter_input(event,/[0-9 ()+-]/i)"   value="" /><i class="fa fa-phone"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="NEED_PRODUCT">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="NEED_PRODUCT"><?= $services[$_COOKIE["country"]] ?>: </label>										<div class="input">
                                    <input type="text" id="NEED_PRODUCT" name="NEED_PRODUCT" class="form-control"  value="<?= $_POST['services'] ?>" /><i class="fa 88"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="MESSAGE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="MESSAGE"><?= $question[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <textarea id="MESSAGE" rows="3" name="MESSAGE" class="form-control required" ></textarea><i class="fa fa-pencil"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row recaptcha-row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label><?= $robot[$_COOKIE["country"]] ?>:<span class="required-star">*</span></label>																	<div class="input ">
                                    <input type="hidden" class="recaptcha" name="recaptcha" id="recaptcha">
                                    <div class="g-recaptcha" data-callback="imNotARobot" data-sitekey="6LdnBTgUAAAAADEc2bmSdxiEmYWxBAKlvWx_mcDi" data-callback="reCaptchaVerify" data-theme="light" data-size="normal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row processing-block">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input">
                                    <input type="checkbox" class="processing_approval" id="processing_approval" name="processing_approval" value="Y">
                                    <label for="processing_approval"><?= $i_agree[$_COOKIE["country"]] ?>  <!-- noindex  --><a href="/info/processing/" target="_blank" rel="nofollow"><?= $proces_data[$_COOKIE["country"]] ?></a><!-- /noindex  --></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer clearfix">
                    <div class="pull-left required-fileds">
                        <i class="star">*</i> - <?= $req_field[$_COOKIE["country"]] ?>				</div>
                    <div class="pull-right">
                        <button class="btn-lg btn btn-default" type="button" id="questionme"><?= $send[$_COOKIE["country"]] ?></button><br/><input type="hidden" name="form_submit" value="Отправить">				</div>
                </div>
            </form>	</div>
       </div>

    <script type="text/javascript">
        var imNotARobot = function() {
            $.ajax({
                type: 'POST',
                url: 'http://tour-arsenal.by/ajax/capcha.php',
                data: {recaptcha : grecaptcha.getResponse()},
                success: function(data){
                    if (+data == 0) {
                        $('.g-recaptcha>div').css('border', '1px solid #e02222');
                        flag++;
                    } else {
                        $('.g-recaptcha>div').css('border', '');
                    }
                }
            });
        };
    </script>

<?php

    }

?>


<?php

if($_POST['id'] == 'orderservices') {

?>


    <span class="jqmClose top-close fa fa-close"></span>
    <script src='https://www.google.com/recaptcha/api.js?hl=<?= $_COOKIE["country"] ?>'></script>
    <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
        <div class="form popup">

            <form name="aspro_resort_order_services">
                <input type="hidden" name="bxajaxid" id="bxajaxid_c6dbabef203591a9f020e3e2dec22dbc_8BACKi" value="c6dbabef203591a9f020e3e2dec22dbc" />
                <input type="hidden" name="AJAX_CALL" value="Y" />
                <input type="hidden" name="sessid" id="sessid" value="530ebcd3b99588a88bae71bf68fbf14a" />			<div class="form-header">
                    <i class="fa fa-phone"></i>
                    <div class="text">
                        <div class="title"><?= $order_service[$_COOKIE["country"]] ?></div>
                        <p></p>
                    </div>
                </div>
                <div class="form-body">
                    <div class="row" data-SID="NAME">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="NAME"><?= $name[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="NAME" name="NAME" class="form-control required " onkeypress="return filter_input(event,/[A-ZА-Я'` ]/i)" value="" /><i class="fa fa-user"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="PHONE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="PHONE"><?= $phone[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="PHONE" name="PHONE" class="form-control required phone" onkeypress="return filter_input(event,/[0-9 ()+-]/i)" value="" /><i class="fa fa-phone"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="EMAIL">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="EMAIL"><?= $email[$_COOKIE["country"]] ?>: </label>										<div class="input">
                                    <input type="email" id="EMAIL-email" name="EMAIL" class="form-control"  onkeypress="return filter_input(event,/[A-Z0-9_'`.@ ]/i)"  value="" /><i class="fa fa-envelope"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="SERVICE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="SERVICE"><?= $serv[$_COOKIE["country"]] ?>: </label>										<div class="input">
                                    <input type="text" id="SERVICE-service" name="SERVICE" class="form-control"  value="<?= $_POST['services'] ?>" /><i class="fa 73"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="MESSAGE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="MESSAGE"><?= $messege[$_COOKIE["country"]] ?>: </label>										<div class="input">
                                    <textarea id="MESSAGE-message" rows="3" name="MESSAGE" class="form-control " ></textarea><i class="fa fa-pencil"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row recaptcha-row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label><?= $robot[$_COOKIE["country"]] ?>:<span class="required-star">*</span></label>																	<div class="input ">
                                    <input type="hidden" class="recaptcha" name="recaptcha" id="recaptcha">
                                    <div class="g-recaptcha" data-callback="imNotARobot" data-sitekey="6LdnBTgUAAAAADEc2bmSdxiEmYWxBAKlvWx_mcDi" data-callback="reCaptchaVerify" data-theme="light" data-size="normal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row processing-block">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input">
                                    <input type="checkbox" class="processing_approval" id="processing_approval" name="processing_approval" value="Y">
                                    <label for="processing_approval"><?= $i_agree[$_COOKIE["country"]] ?> <!-- noindex  --><a href="/info/processing/" target="_blank" rel="nofollow"><?= $proces_data[$_COOKIE["country"]] ?></a><!-- /noindex  --></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer clearfix">
                    <div class="pull-left required-fileds">
                        <i class="star">*</i> - <?= $req_field[$_COOKIE["country"]] ?>				</div>
                    <div class="pull-right">
                        <button class="btn-lg btn btn-default" type="button" id="orderServicesAll"><?= $send[$_COOKIE["country"]] ?></button><br/><input type="hidden" name="form_submit" value="Отправить">				</div>
                </div>
            </form>	</div>
        </div>

    <script type="text/javascript">
        var imNotARobot = function() {
            $.ajax({
                type: 'POST',
                url: 'http://tour-arsenal.by/ajax/capcha.php',
                data: {recaptcha : grecaptcha.getResponse()},
                success: function(data){
                    if (+data == 0) {
                        $('.g-recaptcha>div').css('border', '1px solid #e02222');
                        flag++;
                    } else {
                        $('.g-recaptcha>div').css('border', '');
                    }
                }
            });
        };
    </script>

<?php

    }

?>



<?php

if($_POST['id'] == 'guestreviews') {

?>

    <span class="jqmClose top-close fa fa-close"></span>
    <script src='https://www.google.com/recaptcha/api.js?hl=<?= $_COOKIE["country"] ?>'></script>
    <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
        <div class="form popup">

            <form name="aspro_resort_order_study">
                <input type="hidden" name="bxajaxid" id="bxajaxid_c6dbabef203591a9f020e3e2dec22dbc_8BACKi" value="c6dbabef203591a9f020e3e2dec22dbc" />
                <input type="hidden" name="AJAX_CALL" value="Y" />
                  <input type="hidden" name="sessid" id="sessid" value="764076fdb2a98a53dbdaaa08967e6ec6" />			<div class="form-header">
                    <i class="fa fa-phone"></i>
                    <div class="text">
                        <div class="title"><?= $post_feedback[$_COOKIE["country"]] ?></div>
                        <p></p>
                    </div>
                </div>
                <div class="form-body">
                    <div class="row" data-SID="NAME">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="NAME"><?= $name[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="NAME" name="NAME" class="form-control required "  onkeypress="return filter_input(event,/[A-ZА-Я'` ]/i)" value="" /><i class="fa fa-user"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="EMAIL">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="EMAIL"><?= $email[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="email" id="EMAIL" name="EMAIL" class="form-control required " onkeypress="return filter_input(event,/[A-Z0-9_'`.@ ]/i)" value="" /><i class="fa fa-envelope"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="STUDY">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="STUDY"><?= $add_file[$_COOKIE["country"]] ?>: </label>
                                <div class="input">
                                    <div class="uploader" id="uniform-STUDY"><input type="file" id="STUDY" name="STUDY" class="inputfile" value=""><span class="filename" style="user-select: none;">Файл не найден</span><span class="action" style="user-select: none;">Выберите файл</span></div><i class="fa 227"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="MESSAGE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="MESSAGE"><?= $feedback[$_COOKIE["country"]] ?>: <span class="required-star">*</span></label>										<div class="input">
                                    <textarea id="MESSAGE" rows="3" name="MESSAGE" class="form-control required" ></textarea><i class="fa fa-pencil"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row recaptcha-row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label><?= $robot[$_COOKIE["country"]] ?>:<span class="required-star">*</span></label>																	<div class="input ">
                                    <input type="hidden" class="recaptcha" name="recaptcha" id="recaptcha">
                                    <div class="g-recaptcha" data-callback="imNotARobot" data-sitekey="6LdnBTgUAAAAADEc2bmSdxiEmYWxBAKlvWx_mcDi" data-callback="reCaptchaVerify" data-theme="light" data-size="normal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row processing-block">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input">
                                    <input type="checkbox" class="processing_approval" id="processing_approval" name="processing_approval" value="Y">
                                    <label for="processing_approval"><?= $i_agree[$_COOKIE["country"]] ?>  <!-- noindex  --><a href="/info/processing/" target="_blank" rel="nofollow"><?= $proces_data[$_COOKIE["country"]] ?></a><!-- /noindex  --></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer clearfix">
                    <div class="pull-left required-fileds">
                        <i class="star">*</i> - <?= $req_field[$_COOKIE["country"]] ?>				</div>
                    <div class="pull-right">
                        <button class="btn-lg btn btn-default" type="button" id="postReviews"><?= $send[$_COOKIE["country"]] ?></button><br/><input type="hidden" name="form_submit" value="Отправить">				</div>
                </div>
            </form>	</div>
        </div>

    <script type="text/javascript">

        var imNotARobot = function() {
            $.ajax({
                type: 'POST',
                url: 'http://tour-arsenal.by/ajax/capcha.php',
                data: {recaptcha : grecaptcha.getResponse()},
                success: function(data){
                    if (+data == 0) {
                        $('.g-recaptcha>div').css('border', '1px solid #e02222');
                        flag++;
                    } else {
                        $('.g-recaptcha>div').css('border', '');
                    }
                }
            });
        };
    </script>

<?php

    }

?>
