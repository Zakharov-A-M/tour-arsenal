<?php
include_once '../bd/connect.php';

$questions = Connect::Query("SELECT * FROM order_question ");
