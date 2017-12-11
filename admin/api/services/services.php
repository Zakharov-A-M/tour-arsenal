<?php
include_once '../bd/connect.php';

$services = Connect::Query("SELECT * FROM order_services ");
