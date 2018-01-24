<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../../menu-start.php';
include_once '../../api/galereya/galereya.php';
?>

<a class="btn btn-success" href="../" style="margin-top: 15px;">Список галлерей</a>
<br>
<br>

    <div class="form-group">
        <label for="exampleInputEmail1">Название галлереи на русском</label>
        <input type="text" class="form-control" id="ru" placeholder="Название галлереи на русском">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Название галлереи на английском</label>
        <input type="text" class="form-control" id="eu" placeholder="Название галлереи на английском">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Название галлереи на финском</label>
        <input type="text" class="form-control" id="fi" placeholder="Название галлереи на финском">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Название галлереи на китайском</label>
        <input type="text" class="form-control" id="cn" placeholder="Название галлереи на китайском">
    </div>
    <button class="btn btn-primary">Добавить галлерею</button>



<?php
include_once $host_name.'menu-end.php';
?>


<script>
    $(function() {

        $('.btn-primary').click(function () {
            var comment = $(this).attr("comment");
            $.ajax({
                type: 'POST',
                url: name_site+'api/galereya/add.php',
                data: {ru: $('#ru').val(), eu: $('#eu').val(), fi: $('#fi').val(), cn: $('#cn').val()},
                success: function(data){
                    if (data == 1) {
                        location.reload();
                    }
                }
            });
        });

    });
</script>

