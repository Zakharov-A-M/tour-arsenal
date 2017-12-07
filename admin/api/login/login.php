<?php
include_once '../bd/connect.php';

if (!empty($_POST)) {
    $data['email'] = $_POST['email'];
    $data['password'] = md5($_POST['password']);
    $query = Connect::Query('SELECT * FROM admin_users as a where a.email = "'.$data['email'].'" and a.password = "'.$data['password'].'"');
    if (count($query) > 0) {
        echo json_encode(array('status' => true));
        return true;
    }
    echo json_encode(array('status' => false));
    return false;
}