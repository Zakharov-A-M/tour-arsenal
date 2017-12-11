<?php
include_once '../bd/connect.php';

if (isset($_POST)) {
    $comments = Connect::QueryInsert(Connect::QueryInsert("INSERT INTO review_client (name, email, review, status) values('".$_POST['name']."', '".$_POST['email']."', '".$_POST['text']."', 0)"));
    echo (int)$comments;
}
