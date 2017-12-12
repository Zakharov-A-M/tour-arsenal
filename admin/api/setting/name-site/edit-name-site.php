<?php
include_once '../../bd/connect.php';


if (isset($_POST['ru'])) {
        $name = Connect::QueryInsert("UPDATE name_site  SET name_site.name_ru = '".$_POST['ru']."', name_site.name_fi = '".$_POST['fi']."', name_site.name_eu = '".$_POST['eu']."', name_site.name_cn = '".$_POST['cn']."' where name_site.ID = 1");
        echo $name;
}

$name =  Connect::Query("SELECT * FROM name_site");
$name = $name[0];