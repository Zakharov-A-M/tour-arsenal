$(document).ready(function() {

    /**
     * Вход в админук
     */
    $('#singIn').click(function () {
        var email = $('#user_login').val();
        var password = $('#user_pass').val();
        $.ajax({
            type: 'POST',
            url: name_site+'api/login/login.php',
            data: {email: email,  password: password},
            success: function(data){
                var objData = $.parseJSON(data);
                if(!objData.status) {
                    $('.error').remove();
                    $('.submit').before('<span class ="error" style="color: white; font-size: 17px; padding-left: 7%">Доступ закрыт! Обратесь к администратору!</span>');
                } else {
                    $('.login_page').remove();
                    $('.pace-inactive').remove();
                    $('body').append('<div class="cssload-thecube" style="width: 450px; height: 450px;">' +
                        '<div class="cssload-cube cssload-c1"></div>' +
                        '<div class="cssload-cube cssload-c2"></div>' +
                        '<div class="cssload-cube cssload-c4"></div>' +
                        '<div class="cssload-cube cssload-c3"></div>' +
                        '</div>' +
                        '<script>  function GoNah(){ window.location.assign(name_site + "menu/"); } setTimeout("GoNah()", 3000); </script>');

                }
            }
        });
    });





});
