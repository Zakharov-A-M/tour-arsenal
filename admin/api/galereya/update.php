<?php
include_once '../bd/connect.php';


if (isset($_POST)) {

    if (isset($_POST["gallery"])) {
        $query = Connect::Query("SELECT * FROM galereya WHERE galereya.id = ".(int)$_POST['gallery']);
        if ((int)$query[0]['status']) {
            $galereya = Connect::QueryInsert("UPDATE galereya SET  galereya.status = 0 where galereya.id = ".(int)$_POST['gallery']);
        } else {
            $galereya = Connect::QueryInsert("UPDATE galereya SET  galereya.status = 1 where galereya.id = ".(int)$_POST['gallery']);
        }
        echo (int)$galereya;
    }
}