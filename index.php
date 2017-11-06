<?php

echo '1111111111111';
$db = mysqli_connect('localhost',"root","root", 'tour-arsenal');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
var_dump($db);
echo '1111111111111';
?>


