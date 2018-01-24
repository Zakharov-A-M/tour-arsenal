<?php


if ($_POST['country']) {
    setcookie('country', $_POST['country'], time()+3600, '/', 'xn--80aaaapbej4csp5h.xn--p1ai');
}