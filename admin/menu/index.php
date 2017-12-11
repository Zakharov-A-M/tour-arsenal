
<?php

include_once '../menu-start.php';
/*$query = Connect::Query('SELECT * FROM admin_users');
var_dump($query);
var_dump($host_mane);*/
?>


<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
    <div class="page-title">

        <div class="pull-left">
            <h1 class="title">Chart JSqqqq</h1>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Почта</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Иван</td>
            <td>Николайчук</td>
            <td>ivan@example.com</td>
        </tr>
        <tr>
            <td>Мария</td>
            <td>Иванова</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>Юлия</td>
            <td>Петренко</td>
            <td>julia@example.com</td>
        </tr>
        </tbody>
    </table>
</div>

<?php
include_once $host_mane.'menu-end.php';
?>