<?php

if($_POST['id'] == 'call') {

?>

    <span class="jqmClose top-close fa fa-close"></span>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
        <div class="form popup">

            <form name="aspro_resort_callback">
                <div class="form-header">
                    <i class="fa fa-phone"></i>
                    <div class="text">
                        <div class="title">Обратный звонок</div>
                        Представьтесь, мы вам перезвоним.										</div>
                </div>
                <div class="form-body">
                    <div class="row" data-SID="FIO">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="FIO">Ваше имя: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="FIO" name="FIO" class="form-control required" maxlength="50" onkeypress="return filter_input(event,/[A-ZА-Я'` ]/i)" value="" /><i class="fa fa-user"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="PHONE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="PHONE">Телефон: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="PHONE" name="PHONE" class="form-control required phone" onkeypress="return filter_input(event,/[0-9 -()+]/i)" value="" /><i class="fa fa-phone"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row recaptcha-row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Подтвердите, что вы не робот:<span class="required-star">*</span></label>																	<div class="input ">
                                    <input type="hidden" class="recaptcha" name="recaptcha" id="recaptcha">
                                    <div class="g-recaptcha" data-sitekey="6LdnBTgUAAAAADEc2bmSdxiEmYWxBAKlvWx_mcDi" data-callback="reCaptchaVerify" data-theme="light" data-size="normal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row processing-block">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input">
                                    <input type="checkbox" class="processing_approval" id="processing_approval" name="processing_approval" value="Y">
                                    <label for="processing_approval">Я согласен на <!-- noindex  --><a href="/info/processing/" target="_blank" rel="nofollow">обработку персональных данных</a><!-- /noindex  --></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer clearfix">
                    <div class="pull-left required-fileds">
                        <i class="star">*</i> - Обязательные поля				</div>
                    <div class="pull-right">
                        <button class="btn-lg btn btn-default" type="button" id="callme">Отправить</button><br/><input type="hidden" name="form_submit" value="Отправить">				</div>
                </div>
            </form>	</div>
       </div>



<?php
}
?>

<?php

if($_POST['id'] == 'question') {

?>


    <span class="jqmClose top-close fa fa-close"></span>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <div id="comp_c6dbabef203591a9f020e3e2dec22dbc">
        <div class="form popup">

            <form name="aspro_resort_question">
                <input type="hidden" name="bxajaxid" id="bxajaxid_c6dbabef203591a9f020e3e2dec22dbc_8BACKi" value="c6dbabef203591a9f020e3e2dec22dbc" /><input type="hidden" name="AJAX_CALL" value="Y" />
                <input type="hidden" name="sessid" id="sessid" value="de20a4d199f64ecc9bee4be78b1cd84f" />			<div class="form-header">
                    <i class="fa fa-phone"></i>
                    <div class="text">
                        <div class="title">Задать вопрос</div>
                        Менеджеры компании с радостью ответят на ваши вопросы и произведут расчет стоимости услуг и подготовят индивидуальное коммерческое предложение. 										</div>
                </div>
                <div class="form-body">
                    <div class="row" data-SID="NAME">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="NAME">Имя и фамилия: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="NAME" name="NAME" class="form-control required " maxlength="50"   onkeypress="return filter_input(event,/[A-ZА-Я'` ]/i)"    value="" /><i class="fa fa-user"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="EMAIL">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="EMAIL">E-mail: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="email" id="EMAIL" name="EMAIL" class="form-control required " maxlength="70"   value="" />										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="PHONE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="PHONE">Телефон: <span class="required-star">*</span></label>										<div class="input">
                                    <input type="text" id="PHONE" name="PHONE" class="form-control required phone"  onkeypress="return filter_input(event,/[0-9 ()+-]/i)"   value="" /><i class="fa fa-phone"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="NEED_PRODUCT">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="NEED_PRODUCT">Интересующий номер/услуга: </label>										<div class="input">
                                    <input type="text" id="NEED_PRODUCT" name="NEED_PRODUCT" class="form-control"  value="<?= $_POST['services'] ?>" /><i class="fa 88"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row" data-SID="MESSAGE">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="MESSAGE">Ваш вопрос: <span class="required-star">*</span></label>										<div class="input">
                                    <textarea id="MESSAGE" rows="3" name="MESSAGE" class="form-control required" ></textarea><i class="fa fa-pencil"></i>										</div>
                            </div>
                        </div>
                    </div>
                    <div class="row recaptcha-row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Подтвердите, что вы не робот:<span class="required-star">*</span></label>																	<div class="input ">
                                    <input type="hidden" class="recaptcha" name="recaptcha" id="recaptcha">
                                    <div class="g-recaptcha" data-sitekey="6LdnBTgUAAAAADEc2bmSdxiEmYWxBAKlvWx_mcDi" data-callback="reCaptchaVerify" data-theme="light" data-size="normal"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row processing-block">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="input">
                                    <input type="checkbox" class="processing_approval" id="processing_approval" name="processing_approval" value="Y">
                                    <label for="processing_approval">Я согласен на <!-- noindex  --><a href="/info/processing/" target="_blank" rel="nofollow">обработку персональных данных</a><!-- /noindex  --></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-footer clearfix">
                    <div class="pull-left required-fileds">
                        <i class="star">*</i> - Обязательные поля				</div>
                    <div class="pull-right">
                        <button class="btn-lg btn btn-default" type="button" id="questionme">Отправить</button><br/><input type="hidden" name="form_submit" value="Отправить">				</div>
                </div>
            </form>	</div>
       </div>

<?php
}
?>