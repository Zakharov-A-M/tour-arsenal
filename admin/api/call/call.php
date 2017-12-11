<?php
include_once '../bd/connect.php';

$calls= Connect::Query("SELECT * FROM order_call ");
