<?php
include_once '../../../menu-start.php';
include_once '../../../api/setting/name-site/edit-name-site.php';
?>

<h1 align="center">Названия сайта</h1>
<div style="width: 50%; margin-left: 30%; font-size: 16px;">
    <div style="margin: 20px;">
        <b>Русский</b>
        <input type="text" name="ru" value="<?= $name['name_ru']?>" style="color: black; padding-left: 5px; width: 100%;" disabled>
    </div>

    <div style="margin: 20px;">
        <b>Финский</b>
        <input type="text" name="fi" value="<?= $name['name_fi']?>" style="color: black; padding-left: 5px; width: 100%;" disabled>
    </div>

    <div style="margin: 20px;">
        <b>Английский</b>
        <input type="text" name="eu" value="<?= $name['name_eu']?>" style="color: black; padding-left: 5px; width: 100%; " disabled>
    </div>

    <div style="margin: 20px;">
        <b>Китайский</b>
        <input type="text" name="cn" value="<?= $name['name_cn']?>" style="color: black; padding-left: 5px; width: 100%;" disabled>
    </div>

    <div style="margin: 20px;">
        <button type="button" class="btn btn-warning"><b>Изменить</b></button>
        <button type="button" class="btn btn-primary" style="display: none;"><b>Отмена</b></button>
        <button type="button" class="btn btn-success" style="display: none;"><b>Сохранить</b></button>
    </div>

</div>


<script>
    $(function() {

        $('.btn-warning').click(function () {
            $('input[type="text"]').removeAttr('disabled');
            $('button[type="button"]').show();
            $('.btn-warning').hide();
        });

        $('.btn-primary').click(function () {
            $('input[type="text"]').prop('disabled',true);
            $('button[type="button"]').hide();
            $('.btn-warning').show();
        });

        $('.btn-success').click(function () {
            $.ajax({
                type: 'POST',
                url: name_site+'api/setting/name-site/edit-name-site.php',
                data: {ru: $('input[name="ru"]').val(), fi: $('input[name="fi"]').val(), eu: $('input[name="eu"]').val(), cn: $('input[name="cn"]').val()},
                success: function(data){
                   location.reload();
                }
            });
        });

    });
</script>



<?php
include_once $host_name.'menu-end.php';
?>
