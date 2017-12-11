<?php
include_once '../bd/connect.php';


if (isset($_POST)) {
    if (isset($_POST["question"])) {
        $comments = Connect::QueryInsert("DELETE FROM order_question where order_question.ID = ".(int)$_POST['question']);
        echo $comments;
    }
}
