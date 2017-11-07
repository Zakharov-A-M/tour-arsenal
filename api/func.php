<?php


class Func
{

    public static function getClientIp() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) //check ip from share internet
        {
            $ip =  $_SERVER['HTTP_CLIENT_IP'];
        } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return '37.212.73.249';
        return $ip;
    }


    public static function getClientCountry($ip) {
          $country = json_decode(file_get_contents('https://ipinfo.io/'.$ip.'/json'))->country;
          return strtolower($country);
    }






}