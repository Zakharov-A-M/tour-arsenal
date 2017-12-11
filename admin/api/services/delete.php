<?php
include_once '../bd/connect.php';


if (isset($_POST)) {
    if (isset($_POST["service"])) {
        $comments = Connect::QueryInsert("DELETE FROM order_services where order_services.ID = ".(int)$_POST['service']);
        echo $comments;
    }
}
