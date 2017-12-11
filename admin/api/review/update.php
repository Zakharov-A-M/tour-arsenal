<?php
include_once '../bd/connect.php';


if (isset($_POST)) {

    if (isset($_POST["comment"])) {
        $query = Connect::Query("SELECT * FROM review_client WHERE review_client.ID = ".(int)$_POST['comment']);
        if ((int)$query[0]['status']) {
            $comments = Connect::QueryInsert("UPDATE review_client SET  review_client.status = 0 where review_client.ID = ".(int)$_POST['comment']);
        } else {
            $comments = Connect::QueryInsert("UPDATE review_client SET  review_client.status = 1 where review_client.ID = ".(int)$_POST['comment']);
        }
        echo (int)$comments;
    }
}
