<?php
include_once '../bd/connect.php';

$num_rec_per_page = 10;

if (isset($_GET["page"]))
{
    $page  = $_GET["page"];
} else {
    $page = 1;
};

$start_from = ($page - 1) * $num_rec_per_page;
$count = Connect::Query("SELECT * FROM review_client ");
$count = ceil(count($count)/10);
$comments = Connect::Query("SELECT * FROM review_client Order By status  LIMIT $start_from, $num_rec_per_page");
