<?php
include_once '../bd/connect.php';


if (isset($_POST)) {
    if (isset($_POST["gallery"])) {
        $galereya = Connect::QueryInsert("DELETE FROM galereya where galereya.ID = ".(int)$_POST['gallery']);
        echo $galereya;
    }
}
