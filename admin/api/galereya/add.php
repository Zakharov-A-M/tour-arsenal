<?php
include_once '../bd/connect.php';

if (isset($_POST)) {
    $galereya = Connect::QueryInsert("INSERT INTO galereya (name_galereya_ru, name_galereya_eu, name_galereya_fi, name_galereya_cn, status) values('".$_POST['ru']."', '".$_POST['eu']."', '".$_POST['fi']."', '".$_POST['cn']."', 0)");
    echo (int)$galereya;
}
