<?php
include_once '../bd/connect.php';


if (isset($_POST)) {
    if (isset($_POST["comment"])) {
        $comments = Connect::QueryInsert("DELETE FROM review_client where review_client.ID = ".(int)$_POST['comment']);
        echo $comments;
    }
}
