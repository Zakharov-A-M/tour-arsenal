<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../../menu-start.php';
include_once '../../api/question/question.php';
?>


<table class="table table-striped table-bordered" style="margin-top: 20px;">
    <thead>
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Service</th>
        <th>Question</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($questions as $question) {?>
    <tr>
        <td><?= $question['ID']?></td>
        <td><?= $question['name']?></td>
        <td><?= $question['email']?></td>
        <td><?= $question['phone']?></td>
        <td><?= $question['service']?></td>
        <td><?= $question['question']?></td>
        <td>
            <button type="button" call="<?= $question['ID']?>" class="btn btn-danger">Удалить</button>
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
            var question = $(this).attr("call");
            $.ajax({
                type: 'POST',
                url: name_site+'api/question/delete.php',
                data: {question: question},
                success: function(data){
                    if (data == 1) {
                      location.reload();
                    }
                }
            });
        });

    });
</script>