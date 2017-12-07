<?php

include_once 'api/bd/connect.php';
include_once 'api/func.php';
include_once 'api/country/country.php';
$host_mane = 'http://tour-arsenal.by/admin/';

?>

<!DOCTYPE html>
<html class="  ">
<head>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,cyrillic'; rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="База отдыха – это территория где можно забыть о внешнем мире и полностью посвятить время своей семье и друзьям. Устройте незабываемые приключения на Базе отдыха!" />
    <link href="<?= $host_mane ?>css/morris.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/animate.min.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/bootstrap.min.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/bootstrap-theme.min.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/font-awesome.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/orange.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/pace-theme-flash.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/perfect-scrollbar.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/responsive.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/site.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_mane ?>css/style.css" type="text/css"  rel="stylesheet" />

    <script type="text/javascript" src="<?= $host_mane ?>js/main.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/chart-sparkline.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/icheck.min.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/pace.min.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/perfect-scrollbar.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/scripts.js"></script>
    <script type="text/javascript" src="<?= $host_mane ?>js/viewportchecker.js"></script>

</head>
<body>

<style>
    body {
        overflow-x: hidden;
    }
</style>
<script>
    var name_site = 'http://tour-arsenal.by/';
</script>
