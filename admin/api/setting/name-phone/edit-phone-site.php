<?php
include_once '../../bd/connect.php';


if (isset($_POST['action'])) {
    if ($_POST['action'] == 'edit') {
        $name = Connect::QueryInsert("UPDATE name_site  SET name_site.name_ru = '".$_POST['ru']."', name_site.name_fi = '".$_POST['fi']."', name_site.name_eu = '".$_POST['eu']."', name_site.name_cn = '".$_POST['cn']."' where name_site.ID = 1");
        echo $name;
    }
    if ($_POST['action'] == 'add') {
        $name = Connect::QueryInsert("UPDATE name_site  SET name_site.name_ru = '".$_POST['ru']."', name_site.name_fi = '".$_POST['fi']."', name_site.name_eu = '".$_POST['eu']."', name_site.name_cn = '".$_POST['cn']."' where name_site.ID = 1");
        echo $name;
    }
    if ($_POST['action'] == 'delete') {
        $name = Connect::QueryInsert("UPDATE name_site  SET name_site.name_ru = '".$_POST['ru']."', name_site.name_fi = '".$_POST['fi']."', name_site.name_eu = '".$_POST['eu']."', name_site.name_cn = '".$_POST['cn']."' where name_site.ID = 1");
        echo $name;
    }
}

$phones =  Connect::Query("SELECT * FROM phone");
$phones = $phones;