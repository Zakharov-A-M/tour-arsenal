<?php
include_once '../bd/connect.php';


if (isset($_POST)) {
    if (isset($_POST["call"])) {
        $comments = Connect::QueryInsert("DELETE FROM order_call where order_call.ID = ".(int)$_POST['call']);
        echo $comments;
    }
}
