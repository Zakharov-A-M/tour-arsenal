<?php
include_once '../../../menu-start.php';
include_once '../../../api/setting/name-phone/edit-phone-site.php';
?>

<h1 align="center">Телефоны сайта</h1>
<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal" style="margin: 20px;">Добавить телефон</button>

<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Телефон</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($phones as $phone) { ?>
            <tr>
                <td><?= $phone['ID']?></td>
                <td><?= $phone['tel']?></td>
                <td>
                    <button type="button" phone="<?= $phone['ID']?>" class="btn btn-danger">Удалить</button>
                    <button type="button" phone="<?= $phone['tel']?>" id="<?= $phone['ID']?>" class="btn btn-primary" data-toggle="modal" data-target="#add_new_record_modal">Изменить</button>
                </td>
            </tr>
        <?php
         }
        ?>

    </tbody>
</table>

<script>
    $(function() {




        $('.btn-primary').click(function () {
            var id = $(this).attr('id');
            var phone = $(this).attr('phone');
            $('#tel').val(phone);
            $('#add').attr('phone', id);
        });

        $('#add').click(function () {
            var id = $(this).attr('phone');
            var phone = $('#tel').val();
            var action = 'edit';
            if(!id) {
                var action = 'add';
            }
            console.log(action);
            console.log(id);
           /* $.ajax({
                type: 'POST',
                url: name_site+'api/setting/name-phone/edit-phone-site.php',
                data: {id: id, phone: phone, action: action},
                success: function(data){
                    //location.reload();
                }
            });*/
        });

        $('.btn-success').click(function () {
            $('#tel').val('');
            $('.btn-primary').attr('phone', '');
        });

    });
</script>

<?php
include_once $host_name.'menu-end.php';
?>

<!-- Modal -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="first_name">Телефон</label>
                    <input type="text" id="tel" placeholder="Телефон" class="form-control" />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary" id="add" phone="">Сохранить</button>
            </div>
        </div>
    </div>
</div>