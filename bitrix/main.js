
$(document).ready(function(){

    var host = location.protocol+'//'+location.hostname;


    var test = 0;
    var files;
    var data = new FormData();
    var agree_terms = {'ru': 'Согласитесь с условиями!', 'eu': 'Agree to the terms!', 'fi': 'Hyväksy ehdot!', 'cn': '同意條款！'};
    var error_email = {'ru': 'Не верно введен E-mail!', 'eu': 'Not correctly entered E-mail!', 'fi': 'Ei oikein kirjoitettu E-mail!', 'cn': '沒有正確輸入電子郵件'};
    var error_file = {'ru': 'Недопустимое расширение файла!', 'eu': 'Invalid file extension!', 'fi': 'Virheellinen tiedostopääte!', 'cn': '無效的文件擴展名'};
    var error_file_not = {'ru': 'Файл не найден', 'eu': 'File not found', 'fi': 'Tiedostoa ei löytynyt', 'cn': '未找到文件'};
    var error_field = {'ru': 'Заполните это поле!', 'eu': 'Fill this field!', 'fi': 'Täytä tämä kenttä!', 'cn': '填補這個領域!'};
    var expansion = ['png', 'ico', 'jpg'];
    var lang = $.cookie('country');


    /**
     * Заказать звонок
     */
    $('#orderCall').click(function () {
        $('body').prepend('<div class="jqmOverlay" style="height: 100%; width: 100%; position: fixed; left: 0px; top: 0px; z-index: 2999; opacity: 0.5;"></div>');
        $('body').prepend('<div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 202px; opacity: 1; display: block;" </div>');
        var action = 'call';
        $.ajax({
            type: 'POST',
            url: host + '/ajax/form.php',
            data: 'id='+action,
            success: function(data){
                $('.jqmWindow').prepend(data);
            }
        });
    });





    $( "body" ).delegate(".jqmOverlay", "click", function() {
        $('.jqmOverlay').remove();
        $('.jqmWindow').remove();
        test = 0;
    });


    $( "body" ).delegate(".jqmClose", "click", function() {
        $('.jqmOverlay').remove();
        $('.jqmWindow').remove();
        test = 0;
    });


    /**
     * отправка формы ОБРАТНЫЙ ЗВОНОК!
     */
    $("body").delegate("#callme", "click", function() {
        $('#FIO-error').remove();
        $('#PHONE-error').remove();
        $('#processing_approval-error').remove();
        var flag = 0;
        if($('#FIO').val() == ''){
            $('#FIO').before('<label id="FIO-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#FIO').css('border-color', '#e02222');
            flag++;
        }
        if($('#PHONE').val() == ''){
            $('#PHONE').before('<label id="PHONE-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#PHONE').css('border-color', '#e02222');
            flag++;
        }

        $.ajax({
            type: 'POST',
            url: host + '/ajax/capcha.php',
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

        if ($('#processing_approval').is(":checked") ) {
        } else {
            flag++;
            $('#processing_approval').before('<label id="processing_approval-error" class="error" for="processing_approval">'+agree_terms[lang]+'</label>');
        }

        if(flag == 0) {
            $.ajax({
                url: host + '/api/post/notification.php',
                type: 'post',
                data: {name: $('#FIO').val(),  phone: $('#PHONE').val(), id: 1},
                success: function (message) {
                    $('.jqmWindow').remove();
                    $('body').prepend(message);
                },
                error: function (message) {
                }
            });
            test = 0;
        } else {
            test = 1;
        }

    });





    $("body").delegate('#processing_approval', 'change', function() {
        if ($(this).is(':checked')) {
            $('#processing_approval-error').hide();
        } else {
            $('#processing_approval-error').show();
        }
    });


    $("body").delegate('#FIO', 'focusout', function() {
        if (test != 0) {
            if ($('#FIO').val() == '') {
                $('#FIO-error').show();
                $('#FIO').css('border-color', '#e02222');
            } else {
                $('#FIO-error').hide();
                $('#FIO').css('border-color', '#d7dee3');
            }
        }
    });


    $("body").delegate('#PHONE', 'focusout', function() {
        if (test != 0) {
            if ($('#PHONE').val() == '') {
                $('#PHONE-error').show();
                $('#PHONE').css('border-color', '#e02222');
            } else {
                $('#PHONE-error').hide();
                $('#PHONE').css('border-color', '#d7dee3');
            }
        }
    });

    /-------------------------------------------------------------------/

    /**
     * Задать вопрос
     */
    $('#askQuestion').click(function () {
        $('body').prepend('<div class="jqmOverlay" style="height: 100%; width: 100%; position: fixed; left: 0px; top: 0px; z-index: 2999; opacity: 0.5;"></div>');
        $('body').prepend('<div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 202px; opacity: 1; display: block;" </div>');
        var action = 'question';
        var services = $(this).attr('services');
        $.ajax({
            type: 'POST',
            url: host + '/ajax/form.php',
            data: 'id='+action+'&services='+services,
            success: function(data){
                $('.jqmWindow').prepend(data);
            }
        });
    });




    /**
     * отправка формы ОБРАТНЫЙ ЗВОНОК!
     */
    $("body").delegate("#questionme", "click", function() {
        $('#NAME-error').remove();
        $('#EMAIL-error').remove();
        $('#PHONE-error').remove();
        $('#MESSAGE-error').remove();
        $('#processing_approval-error').remove();
        //$('#processing_approval').remove();
        var flag = 0;
        if($('#NAME').val() == ''){
            $('#NAME').before('<label id="NAME-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#NAME').css('border-color', '#e02222');
            flag++;
        }

        if($('#EMAIL').val() == ''){
            $('#EMAIL').before('<label id="EMAIL-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#EMAIL').css('border-color', '#e02222');
            flag++;
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($('#EMAIL').val())){
            } else {
                $('#EMAIL').before('<label id="EMAIL-error" class="error" for="PHONE">'+error_email[lang]+'</label>');
                $('#EMAIL').css('border-color', '#e02222');
                flag++;
            }
        }



        if($('#PHONE').val() == ''){
            $('#PHONE').before('<label id="PHONE-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#PHONE').css('border-color', '#e02222');
            flag++;
        }

        if($('#MESSAGE').val() == ''){
            $('#MESSAGE').before('<label id="MESSAGE-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#MESSAGE').css('border-color', '#e02222');
            flag++;
        }

        $.ajax({
            type: 'POST',
            url: host + '/ajax/capcha.php',
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

        if ($('#processing_approval').is(":checked") ) {
        } else {
            flag++;
            $('#processing_approval').before('<label id="processing_approval-error" class="error" for="processing_approval">'+agree_terms[lang]+'</label>');
        }

        if(flag == 0) {
            $.ajax({
                url: host + '/api/post/notification.php',
                type: 'post',
                data: {name: $('#NAME').val(), email: $('#EMAIL').val(), phone: $('#PHONE').val(), message: $('#MESSAGE').val(), service: $('#NEED_PRODUCT').val(), id: 2},
                success: function (message) {
                    $('.jqmWindow').remove();
                    $('body').prepend(message);
                },
                error: function (message) {
                }
            });
            test = 0;
        } else {
            test = 1;
        }

    });



    $("body").delegate('#NAME', 'focusout', function() {
        if (test != 0) {
            if ($('#NAME').val() == '') {
                $('#NAME-error').show();
                $('#NAME').css('border-color', '#e02222');
            } else {
                $('#NAME-error').hide();
                $('#NAME').css('border-color', '#d7dee3');
            }
        }
    });


    $("body").delegate('#EMAIL', 'focusout', function() {
        if (test != 0) {
            if ($('#EMAIL').val() == '') {
                $('#EMAIL-error').text(error_field[lang]);
                $('#EMAIL-error').show();
                $('#EMAIL').css('border-color', '#e02222');
            } else {
                var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                if(pattern.test($('#EMAIL').val())){
                    $('#EMAIL-error').hide();
                    $('#EMAIL').css('border-color', '#d7dee3');
                } else {
                    $('#EMAIL-error').text(error_email[lang]);
                    $('#EMAIL').css('border-color', '#e02222');
                    $('#EMAIL-error').show();
                }
            }
        }
    });


    $("body").delegate('#MESSAGE', 'focusout', function() {
        if (test != 0) {
            if ($('#MESSAGE').val() == '') {
                $('#MESSAGE-error').show();
                $('#MESSAGE').css('border-color', '#e02222');
            } else {
                $('#MESSAGE-error').hide();
                $('#MESSAGE').css('border-color', '#d7dee3');
            }
        }
    });


    /-------------------------------------------------------------------/

    /**
     * Заказать услугу
     */
    $('#orderServices').click(function () {
        $('body').prepend('<div class="jqmOverlay" style="height: 100%; width: 100%; position: fixed; left: 0px; top: 0px; z-index: 2999; opacity: 0.5;"></div>');
        $('body').prepend('<div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 202px; opacity: 1; display: block;" </div>');
        var action = 'orderservices';
        var services = $(this).attr('services');
        $.ajax({
            type: 'POST',
            url: host + '/ajax/form.php',
            data: 'id='+action+'&services='+services,
            success: function(data){
                $('.jqmWindow').prepend(data);
            }
        });
    });



    /**
     * отправка формы ЗАКАЗАТЬ УСЛУГУ!
     */
    $("body").delegate("#orderServicesAll", "click", function() {
        $('#NAME-error').remove();
        $('#PHONE-error').remove();

        $('#EMAIL-error').remove();
        $('#SERVICE-error').remove();

        $('#processing_approval-error').remove();
        //$('#processing_approval').remove();
        var flag = 0;
        if($('#NAME').val() == ''){
            $('#NAME').before('<label id="NAME-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#NAME').css('border-color', '#e02222');
            flag++;
        }

        if($('#EMAIL-email').val() == ''){
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($('#EMAIL-email').val())){
            } else {
                $('#EMAIL-email').before('<label id="EMAIL-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
                $('#EMAIL-email').css('border-color', '#e02222');
                flag++;
            }
        }


        if($('#PHONE').val() == ''){
            $('#PHONE').before('<label id="PHONE-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#PHONE').css('border-color', '#e02222');
            flag++;
        }

        if($('#SERVICE-service').val() == ''){
            $('#SERVICE-service').before('<label id="SERVICE-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#SERVICE-service').css('border-color', '#e02222');
            flag++;
        }

        $.ajax({
            type: 'POST',
            url: host + '/ajax/capcha.php',
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

        if ($('#processing_approval').is(":checked") ) {
        } else {
            flag++;
            $('#processing_approval').before('<label id="processing_approval-error" class="error" for="processing_approval">'+agree_terms[lang]+'</label>');
        }

        if(flag == 0) {
            $.ajax({
                url: host + '/api/post/notification.php',
                type: 'post',
                data: {name: $('#NAME').val(), email: $('#EMAIL-email').val(), phone: $('#PHONE').val(), message: $('#MESSAGE-message').val(), service: $('#SERVICE-service').val(), id: 3},
                success: function (message) {
                    $('.jqmWindow').remove();
                    $('body').prepend(message);
                },
                error: function (message) {
                }
            });
            test = 0;
        } else {
            test = 1;
        }

    });


    $("body").delegate('#EMAIL-email', 'focusout', function() {
        $('#EMAIL-error').remove();
        console.log('sdfsdfsdfsd');
        if (test != 0) {
            if ($('#EMAIL-email').val() == '') {
                console.log('11111111');
                $('#EMAIL-error').hide();
                $('#EMAIL-email').css('border-color', '#d7dee3');
            } else {
                var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                if(pattern.test('#EMAIL-email').val()){
                    console.log('22222222');
                    $('#EMAIL-error').hide();
                    $('#EMAIL-email').css('border-color', '#d7dee3');
                } else {
                    console.log('33333333');
                    $('#EMAIL-email').before('<label id="EMAIL-error" class="error" for="PHONE">'+error_email[lang]+'</label>');
                    $('#EMAIL-email').css('border-color', '#e02222');
                    $('#EMAIL-error').show();
                }
            }
        }
    });

    $("body").delegate('#SERVICE-service', 'focusout', function() {
        $('#SERVICE-error').remove();
        if (test != 0) {
            if ($('#SERVICE-service').val() == '') {
                $('#SERVICE-service').before('<label id="SERVICE-error" class="error" for="SERVICE">'+error_field[lang]+'</label>');
                $('#SERVICE-error').show();
                $('#SERVICE-service').css('border-color', '#e02222');
            } else {
                $('#SERVICE-error').hide();
                $('#SERVICE-service').css('border-color', '#d7dee3');
            }
        }
    });


    /**
     * Вызов формы для отзыва
     */
    $('#guestReviews').click(function () {
        $('body').prepend('<div class="jqmOverlay" style="height: 100%; width: 100%; position: fixed; left: 0px; top: 0px; z-index: 2999; opacity: 0.5;"></div>');
        $('body').prepend('<div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 202px; opacity: 1; display: block;" </div>');
        var action = 'guestreviews';
        $.ajax({
            type: 'POST',
            url: host + '/ajax/form.php',
            data: 'id='+action,
            success: function(data){
                $('.jqmWindow').prepend(data);
            }
        });
    });


    /**
     * отправка формы ОТЗЫВЫ ГОСТЕЙ!
     */
    $("body").delegate("#postReviews", "click", function() {
        $('#NAME-error').remove();
        $('#EMAIL-error').remove();
        $('#MESSAGE-error').remove();
        $('#uniform-STUDY-error').remove();
        $('#processing_approval-error').remove();
        var flag = 0;

        if($('#NAME').val() == ''){
            $('#NAME').before('<label id="NAME-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#NAME').css('border-color', '#e02222');
            flag++;
        }


        if($('#EMAIL').val() == ''){
            $('#EMAIL').before('<label id="EMAIL-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#EMAIL').css('border-color', '#e02222');
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($('#EMAIL').val())){
            } else {
                $('#EMAIL').before('<label id="EMAIL-error" class="error" for="PHONE">'+error_email[lang]+'</label>');
                $('#EMAIL').css('border-color', '#e02222');
                flag++;
            }
        }

        if($('#MESSAGE').val() == ''){
            $('#MESSAGE').before('<label id="MESSAGE-error" class="error" for="PHONE">'+error_field[lang]+'</label>');
            $('#MESSAGE').css('border-color', '#e02222');
            flag++;
        }

        $.ajax({
            type: 'POST',
            url: host + '/ajax/capcha.php',
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

        if ($('#processing_approval').is(":checked") ) {
        } else {
            flag++;
            $('#processing_approval').before('<label id="processing_approval-error" class="error" for="processing_approval">'+agree_terms[lang]+'</label>');
        }


        if($('input[type=file]').val() != '') {
            var str = $('.filename').html();
            var pos = str.lastIndexOf('.') + 1;
            var parts = str.substr(pos, str.length - pos);
            if (expansion.indexOf(parts) >= 0) {
                $('#uniform-STUDY-error').remove();
                $('.uploader').css('border-color', '#d7dee3');
            } else {
                files = '';
                $('input[type=file]').val('');
                $('#uniform-STUDY').before('<label id="uniform-STUDY-error" class="error" for="PHONE">'+error_file[lang]+'</label>');
                $('.uploader').css('border-color', '#e02222');
                $('.filename').text(error_file_not[lang]);
                flag++;
            }
        }



        if(flag == 0) {

            data.append('name', $('#NAME').val());
            data.append('email', $('#EMAIL').val());
            data.append('message', $('#MESSAGE').val());
            data.append('id', 4);
            $.ajax({
                url: host + '/api/post/notification.php',
                type: 'post',
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                success: function (message) {
                    $('.jqmWindow').remove();
                    $('body').prepend(message);
                },
                error: function (message) {
                }
            });
            test = 0;
        } else {
            test = 1;
        }

    });


    /**
     * Загрузка файла
     */
    $("body").delegate('input[type=file]', 'change', function() {
        $('#uniform-STUDY-error').remove();
        $('.uploader').css('border-color', '#d7dee3');
        files = this.files;
        var pos = files[0].name.lastIndexOf('.')+1;
        var parts = files[0].name.substr(pos, files[0].name.length - pos);
        if (expansion.indexOf(parts) >= 0) {
            $.each(files, function( key, value ){
                data.append('file_v', value );
            });
            $('.filename').text(files[0].name);
        } else {
            files = '';
            $('input[type=file]').val('');
            $('#uniform-STUDY').before('<label id="uniform-STUDY-error" class="error" for="PHONE">'+error_file[lang]+'</label>');
            $('.uploader').css('border-color', '#e02222');
            $('.filename').text(error_file_not[lang]);
        }

    });


});