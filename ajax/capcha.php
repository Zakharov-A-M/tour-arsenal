<?php


$res = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LdnBTgUAAAAAEx7B7Z3YJluRXPKuWOmYPuEk8GL&response=g-recaptcha-response');
$res = json_decode($res);
 if ($res->success == 0) {
     echo 'no';
 } else {
     echo "yes";
 }


