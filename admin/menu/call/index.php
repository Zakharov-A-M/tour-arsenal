<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../../menu-start.php';
include_once '../../api/call/call.php';
?>


<table class="table table-striped table-bordered" style="margin-top: 20px;">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($calls as $call) {?>
    <tr>
        <td><?= $call['ID']?></td>
        <td><?= $call['name']?></td>
        <td><?= $call['phone']?></td>
        <td>
            <button type="button" call="<?= $call['ID']?>" class="btn btn-danger">Удалить</button>
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
            var call = $(this).attr("call");
            $.ajax({
                type: 'POST',
                url: name_site+'api/call/delete.php',
                data: {call: call},
                success: function(data){
                    if (data == 1) {
                      location.reload();
                    }
                }
            });
        });

    });
</script>