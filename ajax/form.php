<span class="jqmClose top-close fa fa-close"></span>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<div id="comp_c6dbabef203591a9f020e3e2dec22dbc">			<script type="text/javascript">
        if(typeof grecaptcha === 'undefined'){
            var script = document.createElement('script');
            script.src = 'https://www.google.com/recaptcha/api.js?render=explicit&hl=ru';
            (document.head || document.documentElement).appendChild(script);
        }
    </script>
    <div class="form popup">

        <form name="aspro_resort_order_study" action="/ajax/form.php?id=23&amp;data-trigger=%7B%22class%22%3A%22btn+btn-default+white_br+white+btn-lg+otzbt%22%2C%22data-event%22%3A%22jqm%22%2C%22data-param-id%22%3A%2223%22%2C%22data-name%22%3A%22question%22%7D" method="POST" enctype="multipart/form-data"><input type="hidden" name="bxajaxid" id="bxajaxid_c6dbabef203591a9f020e3e2dec22dbc_8BACKi" value="c6dbabef203591a9f020e3e2dec22dbc" /><input type="hidden" name="AJAX_CALL" value="Y" /><script type="text/javascript">
                function _processform_8BACKi(){
                    var obForm = top.BX('bxajaxid_c6dbabef203591a9f020e3e2dec22dbc_8BACKi').form;
                    top.BX.bind(obForm, 'submit', function() {BX.ajax.submitComponentForm(this, 'comp_c6dbabef203591a9f020e3e2dec22dbc', true)});
                    top.BX.removeCustomEvent('onAjaxSuccess', _processform_8BACKi);
                }
                if (top.BX('bxajaxid_c6dbabef203591a9f020e3e2dec22dbc_8BACKi'))
                    _processform_8BACKi();
                else
                    top.BX.addCustomEvent('onAjaxSuccess', _processform_8BACKi);
            </script><input type="hidden" name="sessid" id="sessid" value="4ab306eb96c41e0e08d6ef33b4caf904" />			<div class="form-header">
                <i class="fa fa-phone"></i>
                <div class="text">
                    <div class="title">Оставить отзыв</div>
                    <p></p>
                </div>
            </div>
            <div class="form-body">
                <div class="row" data-SID="NAME">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="NAME">Ваше имя: <span class="required-star">*</span></label>										<div class="input">
                                <input type="text" id="NAME" name="NAME" class="form-control required "  value="" /><i class="fa fa-user"></i>										</div>
                        </div>
                    </div>
                </div>
                <div class="row" data-SID="EMAIL">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="EMAIL">E-mail: <span class="required-star">*</span></label>										<div class="input">
                                <input type="email" id="EMAIL" name="EMAIL" class="form-control required "  value="" /><i class="fa fa-envelope"></i>										</div>
                        </div>
                    </div>
                </div>
                <div class="row" data-SID="STUDY">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="STUDY">Добавить файл: </label>										<div class="input">
                                <input type="file" id="STUDY" name="STUDY"   class="inputfile" value="" /><i class="fa 227"></i>										</div>
                        </div>
                    </div>
                </div>
                <div class="row" data-SID="MESSAGE">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="MESSAGE">Отзыв: <span class="required-star">*</span></label>										<div class="input">
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
                    <button class="btn-lg btn btn-default" type="submit">Отправить</button><br/><input type="hidden" name="form_submit" value="Отправить">				</div>
            </div>
        </form>	</div>
    <script>
        $(document).ready(function(){
            if(arResortOptions['THEME']['USE_CAPTCHA_FORM'] == 'RECAPTCHA'){
                reCaptchaRender();
            }

            $('.popup form[name="aspro_resort_order_study"]').validate({
                ignore: ".ignore",
                highlight: function( element ){
                    $(element).parent().addClass('error');
                },
                unhighlight: function( element ){
                    $(element).parent().removeClass('error');
                },
                submitHandler: function( form ){
                    if( $('.popup form[name="aspro_resort_order_study"]').valid() ){
                        $(form).find('button[type="submit"]').attr('disabled', 'disabled');
                        form.submit();
                    }
                },
                errorPlacement: function( error, element ){
                    error.insertBefore(element);
                }
            });

            if(arResortOptions['THEME']['PHONE_MASK'].length){
                var base_mask = arResortOptions['THEME']['PHONE_MASK'].replace( /(\d)/g, '_' );
                $('.popup form[name="aspro_resort_order_study"] input.phone').inputmask('mask', {'mask': arResortOptions['THEME']['PHONE_MASK'] });
                $('.popup form[name="aspro_resort_order_study"] input.phone').blur(function(){
                    if( $(this).val() == base_mask || $(this).val() == '' ){
                        if( $(this).hasClass('required') ){
                            $(this).parent().find('div.error').html(BX.message('JS_REQUIRED'));
                        }
                    }
                });
            }

            $('.popup form[name="aspro_resort_order_study"] input.date').inputmask(arResortOptions['THEME']['DATE_MASK'], { 'placeholder': arResortOptions['THEME']['DATE_PLACEHOLDER'] });
            $('.popup form[name="aspro_resort_order_study"] input.datetime').inputmask(arResortOptions['THEME']['DATETIME_MASK'], { 'placeholder': arResortOptions['THEME']['DATETIME_PLACEHOLDER'] });

            $('.jqmClose').closest('.jqmWindow').jqmAddClose('.jqmClose');

            $('input[type=file]').uniform({fileButtonHtml: BX.message('JS_FILE_BUTTON_NAME'), fileDefaultHtml: BX.message('JS_FILE_DEFAULT')});
        });
    </script></div>