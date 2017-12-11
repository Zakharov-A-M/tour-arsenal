<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include_once '../../menu-start.php';
include_once '../../api/review/review.php';
?>

<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal" style="margin-top: 20px;">Add Comment</button>

<table class="table table-striped table-bordered" style="margin-top: 20px;">
    <thead>
    <tr>
        <th>#</th>
        <th>Имя</th>
        <th>E-mail</th>
        <th>Отзыв</th>
        <th>Статус</th>
        <th>Действия</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($comments as $comment) {?>
    <tr>
        <td><?= $comment['ID']?></td>
        <td><?= $comment['name']?></td>
        <td><?= $comment['email']?></td>
        <td><?= $comment['review']?></td>
        <td style="color: <?= ($comment['status']) ? 'green' : 'red' ?>; "><?= ($comment['status']) ? 'Показываем' : 'Не показываем' ?></td>
        <td>
            <button type="button" comment="<?= $comment['ID']?>" class="btn btn-danger">Удалить</button>
            <button type="button" comment="<?= $comment['ID']?>" class="btn btn-success"><?= ($comment['status']) ? 'Не показать' : 'Показать' ?></button>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<?php
if ($count > 1) {
?>
<nav aria-label="Page navigation">
    <ul class="pagination" style="margin: auto; text-align: center; display: table;">
        <?php
        if ($page > 1) {
            ?>
            <li>
                <a href="?page=<?= $page-1 ?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php }
        for ($i = 1; $i < $count+1; $i++) {
            if ($page == $i) { ?>
                <li class="active"><a><?= $i ?></a></li>
            <?php } else { ?>
                <li><a href="?page=<?= $i ?>"><?= $i ?></a></li>
          <?php  }
        }?>
       <?php if ($page != $count) { ?>
            <li>
                <a href="?page=<?= $page+1 ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
       <?php } ?>
    </ul>
</nav>



<?php
}
include_once $host_mane.'menu-end.php';
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
                    <label for="first_name">Name</label>
                    <input type="text" id="name" placeholder="Name" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="last_name">E-mail</label>
                    <input type="text" id="email" placeholder="E-mail" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="email">Text</label>
                    <input type="text" id="text" placeholder="Text" class="form-control" />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="add">Add Record</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {

        $('.btn-danger').click(function () {
            var comment = $(this).attr("comment");
            $.ajax({
                type: 'POST',
                url: name_site+'api/review/delete.php',
                data: {comment: comment},
                success: function(data){
                    if (data == 1) {
                      location.reload();
                    }
                }
            });
        });


        $('.btn-success').click(function () {
            var comment = $(this).attr("comment");
            $.ajax({
                type: 'POST',
                url: name_site+'api/review/update.php',
                data: {comment: comment},
                success: function(data){
                    if (data == 1) {
                        location.reload();
                    }
                }
            });
        });

        $('#add').click(function () {
            // get values
            var name = $("#name").val();
            var email = $("#email").val();
            var text = $("#text").val();
            var status = 0;
            $.ajax({
                type: 'POST',
                url: name_site+'api/review/insert.php',
                data: {name: name, email: email, text: text, status: status},
                success: function(data){
                   location.reload();
                }
            });
        });

    });
</script>