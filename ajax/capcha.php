<?php


$secret = '6LdnBTgUAAAAAEx7B7Z3YJluRXPKuWOmYPuEk8GL';
$response = $_POST['recaptcha'];
$remoteip = $_SERVER['REMOTE_ADDR'];
if ($response != ''){
    $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
    $result = json_decode($url, TRUE);

    if ($result['success'] == 1) {
        echo true;
        return true;
    } else {
        if (in_array('timeout-or-duplicate', $result['error-codes'])) {
            echo true;
            return true;
        }
    }
}
echo 0;

