<?php


class Func
{

    const RU_COUNTRY = ['ru', 'by'];
    const EU_COUNTRY = ['fr', 'de'];
    const FI_COUNTRY = ['fi', 'dk'];

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

    public static function getLanguagePage($country) {
        if (in_array($country, self::RU_COUNTRY)) {
            return 'ru';
        }
        if (in_array($country, self::EU_COUNTRY)) {
            return 'eu';
        }
        if (in_array($country, self::FI_COUNTRY)) {
            return 'fi';
        }
        return 'eu';
    }

    public static function getСontentPage($country) {
        $json = json_decode(file_get_contents('./translations/'.$country.'.json', true));
        if ($json) {
            return $json;
        }
        $json = json_decode(file_get_contents('../translations/'.$country.'.json', true));
        return $json;
        //var_dump($json);

    }






}