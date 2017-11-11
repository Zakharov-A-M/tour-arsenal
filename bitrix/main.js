
$(document).ready(function(){

    var test = 0;

    /**
     * Заказать звонок
     */
    $('#orderCall').click(function () {
        $('body').prepend('<div class="jqmOverlay" style="height: 100%; width: 100%; position: fixed; left: 0px; top: 0px; z-index: 2999; opacity: 0.5;"></div>');
        $('body').prepend('<div class="callback_frame jqmWindow jqm-init show" style="width: 500px; z-index: 3000; margin-left: -250px; top: 202px; opacity: 1; display: block;" </div>');
        var action = 'call';
        $.ajax({
            type: 'POST',
            url: 'http://tour-arsenal.by/ajax/form.php',
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
        console.log(flag);
        if($('#FIO').val() == ''){
            $('#FIO').before('<label id="FIO-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#FIO').css('border-color', '#e02222');
            flag++;
        }
        if($('#PHONE').val() == ''){
            $('#PHONE').before('<label id="PHONE-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#PHONE').css('border-color', '#e02222');
            flag++;
        }

       /* $.ajax({
            type: 'POST',
            url: 'http://tour-arsenal.by/ajax/capcha.php',
            success: function(data){
                if (data == 'no') {
                    $('.rc-anchor-light').css('border-color', '#e02222');

                }
            }
        });*/

        if ($('#processing_approval').is(":checked") ) {
        } else {
            flag++;
            $('#processing_approval').before('<label id="processing_approval-error" class="error" for="processing_approval">Согласитесь с условиями!</label>');
        }

        if(flag == 0) {
            $.ajax({
                url: 'http://tour-arsenal.by/api/post/notification.php',
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
            url: 'http://tour-arsenal.by/ajax/form.php',
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
            $('#NAME').before('<label id="NAME-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#NAME').css('border-color', '#e02222');
            flag++;
        }

        if($('#EMAIL').val() == ''){
            $('#EMAIL').before('<label id="EMAIL-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#EMAIL').css('border-color', '#e02222');
            flag++;
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($('#EMAIL').val())){
            } else {
                $('#EMAIL').before('<label id="EMAIL-error" class="error" for="PHONE">Не верно введен E-mail!</label>');
                $('#EMAIL').css('border-color', '#e02222');
                flag++;
            }
        }



        if($('#PHONE').val() == ''){
            $('#PHONE').before('<label id="PHONE-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#PHONE').css('border-color', '#e02222');
            flag++;
        }

        if($('#MESSAGE').val() == ''){
            $('#MESSAGE').before('<label id="MESSAGE-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#MESSAGE').css('border-color', '#e02222');
            flag++;
        }

       /* $.ajax({
            type: 'POST',
            url: 'http://tour-arsenal.by/ajax/capcha.php',
            success: function(data){
                if (data == 'no') {
                    $('.rc-anchor-light').css('border-color', '#e02222');

                }
            }
        });*/

        if ($('#processing_approval').is(":checked") ) {
        } else {
            $('#processing_approval').before('<label id="processing_approval-error" class="error" for="processing_approval">Согласитесь с условиями!</label>');
        }

        if(flag == 0) {
            console.log($('#NEED_PRODUCT').val());
            $.ajax({
                url: 'http://tour-arsenal.by/api/post/notification.php',
                type: 'post',
                data: {name: $('#NAME').val(), email: $('#EMAIL').val(), phone: $('#PHONE').val(), message: $('#MESSAGE').val(), service: $('#NEED_PRODUCT').val(), id: 2},
                success: function (message) {
                    console.log(message);
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
                $('#EMAIL-error').text('Заполните это поле!');
                $('#EMAIL-error').show();
                $('#EMAIL').css('border-color', '#e02222');
            } else {
                var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
                if(pattern.test($('#EMAIL').val())){
                    $('#EMAIL-error').hide();
                    $('#EMAIL').css('border-color', '#d7dee3');
                } else {
                    $('#EMAIL-error').text('Не верно введен E-mail!');
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
            url: 'http://tour-arsenal.by/ajax/form.php',
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
            $('#NAME').before('<label id="NAME-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#NAME').css('border-color', '#e02222');
            flag++;
        }

        if($('#EMAIL-email').val() == ''){
        } else {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if(pattern.test($('#EMAIL-email').val())){
            } else {
                $('#EMAIL-email').before('<label id="EMAIL-error" class="error" for="PHONE">Не верно введен E-mail!</label>');
                $('#EMAIL-email').css('border-color', '#e02222');
                flag++;
            }
        }


        if($('#PHONE').val() == ''){
            $('#PHONE').before('<label id="PHONE-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#PHONE').css('border-color', '#e02222');
            flag++;
        }

        if($('#SERVICE-service').val() == ''){
            $('#SERVICE-service').before('<label id="SERVICE-error" class="error" for="PHONE">Заполните это поле!</label>');
            $('#SERVICE-service').css('border-color', '#e02222');
            flag++;
        }

        /*$.ajax({
            type: 'POST',
            url: 'http://tour-arsenal.by/ajax/capcha.php',
            success: function(data){
                if (data == 'no') {
                    $('.rc-anchor-light').css('border-color', '#e02222');

                }
            }
        });*/

        if ($('#processing_approval').is(":checked") ) {
        } else {
            $('#processing_approval').before('<label id="processing_approval-error" class="error" for="processing_approval">Согласитесь с условиями!</label>');
        }

        if(flag == 0) {
            $.ajax({
                url: 'http://tour-arsenal.by/api/post/notification.php',
                type: 'post',
                data: {name: $('#NAME').val(), email: $('#EMAIL-email').val(), phone: $('#PHONE').val(), message: $('#MESSAGE-message').val(), service: $('#SERVICE-service').val(), id: 3},
                success: function (message) {
                    console.log(message);
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
                    $('#EMAIL-email').before('<label id="EMAIL-error" class="error" for="PHONE">Не верно введен E-mail!</label>');
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
                $('#SERVICE-service').before('<label id="SERVICE-error" class="error" for="SERVICE">Заполните это поле!</label>');
                $('#SERVICE-error').show();
                $('#SERVICE-service').css('border-color', '#e02222');
            } else {
                $('#SERVICE-error').hide();
                $('#SERVICE-service').css('border-color', '#d7dee3');
            }
        }
    });



});