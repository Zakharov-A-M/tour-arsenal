<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../../menu-start.php';
include_once '../../api/galereya/galereya.php';
?>

<a class="btn btn-success" href="add.php" style="margin-top: 15px;">Добавить галлерею</a>

<table class="table table-striped table-bordered" style="margin-top: 20px;">
    <thead>
    <tr>
        <th>#</th>
        <th>Название на русском</th>
        <th>Название на английском</th>
        <th>Название на финсоком</th>
        <th>Название на Китайском</th>
        <th>Статус</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($gallerys as $gallery) {?>
    <tr>
        <td><?= $gallery['id']?></td>
        <td><?= $gallery['name_galereya_ru']?></td>
        <td><?= $gallery['name_galereya_eu']?></td>
        <td><?= $gallery['name_galereya_fi']?></td>
        <td><?= $gallery['name_galereya_cn']?></td>
        <td style="color: <?= ($gallery['status']) ? 'green' : 'red' ?>; "><?= ($gallery['status']) ? 'Показываем' : 'Не показываем' ?></td>
        <td>
            <button type="button" gallery="<?= $gallery['id']?>" class="btn btn-danger">Удалить</button>
            <button type="button" gallery="<?= $gallery['id']?>" class="btn btn-success"><?= ($gallery['status']) ? 'Не показать' : 'Показать' ?></button>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php
include_once $host_name.'menu-end.php';
?>


<script>
    $(function() {

        $('.btn-danger').click(function () {
            var gallery = $(this).attr("gallery");
            $.ajax({
                type: 'POST',
                url: name_site+'api/galereya/delete.php',
                data: {gallery: gallery},
                success: function(data){
                    if (data == 1) {
                        location.reload();
                    }
                }
            });
        });

        $('.btn-success').click(function () {
            var gallery = $(this).attr("gallery");
            $.ajax({
                type: 'POST',
                url: name_site+'api/galereya/update.php',
                data: {gallery: gallery},
                success: function(data){
                    if (data == 1) {
                        location.reload();
                    }
                }
            });
        });

    });
</script>
