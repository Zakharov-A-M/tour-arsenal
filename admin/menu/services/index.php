<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../../menu-start.php';
include_once '../../api/services/services.php';
?>


<table class="table table-striped table-bordered" style="margin-top: 20px;">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Service</th>
        <th>Text</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($services as $service) {?>
    <tr>
        <td><?= $service['ID']?></td>
        <td><?= $service['name']?></td>
        <td><?= $service['email']?></td>
        <td><?= $service['phone']?></td>
        <td><?= $service['service']?></td>
        <td><?= $service['question']?></td>
        <td>
            <button type="button" call="<?= $service['ID']?>" class="btn btn-danger">Удалить</button>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>


<?php

include_once $host_mane.'menu-end.php';
?>

<script>
    $(function() {

        $('.btn-danger').click(function () {
            var service = $(this).attr("call");
            $.ajax({
                type: 'POST',
                url: name_site+'api/services/delete.php',
                data: {service: service},
                success: function(data){
                    if (data == 1) {
                      location.reload();
                    }
                }
            });
        });

    });
</script>