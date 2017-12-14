<?php
$host_name = 'http'.(empty($_SERVER['HTTPS'])?'':'s').'://'.$_SERVER['HTTP_HOST'].'/admin/';
include_once 'api/bd/connect.php';
include_once 'api/func.php';
include_once 'api/country/country.php';

?>

<!DOCTYPE html>
<html class="  ">
<head>
    <title>Admin Arsenal</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,cyrillic'; rel='stylesheet' type='text/css'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="База отдыха – это территория где можно забыть о внешнем мире и полностью посвятить время своей семье и друзьям. Устройте незабываемые приключения на Базе отдыха!" />
    <link href="<?= $host_name ?>css/morris.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/animate.min.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/bootstrap.min.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/bootstrap-theme.min.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/font-awesome.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/orange.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/pace-theme-flash.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/perfect-scrollbar.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/responsive.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/site.css" type="text/css"  rel="stylesheet" />
    <link href="<?= $host_name ?>css/style.css" type="text/css"  rel="stylesheet" />

    <script type="text/javascript" src="<?= $host_name ?>js/main.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/chart-sparkline.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/icheck.min.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/pace.min.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/perfect-scrollbar.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/scripts.js"></script>
    <script type="text/javascript" src="<?= $host_name ?>js/viewportchecker.js"></script>

</head>
<body>

<style>
    body {
        overflow-x: hidden;
    }
</style>
<script>
    var name_site = "<?= $host_name ?>";
</script>
