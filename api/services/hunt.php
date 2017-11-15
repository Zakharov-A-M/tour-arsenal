<?php


Class Hunt
{
    public static function getCostHunt() {
        $query = Connect::Query('SELECT * FROM cost_hunt');
        return $query;
    }





}

$cost = Hunt::getCostHunt();
//var_dump($cost);