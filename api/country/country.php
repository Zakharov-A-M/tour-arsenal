<?php
ini_set('error_reporting', TRUE);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Country {



    const COUNTRY = 'ru';

    public static function getCountry() {
        if (!$_COOKIE["country"]) {
            $ip = Func::getClientIp();
            if ($ip) {
                $country = Func::getClientCountry($ip);
                if (!$country) {
                    $country = self::COUNTRY;
                }
            } else {
                $country = self::COUNTRY;
            }
            //setcookie("country", $country, 18000);
           // var_dump($country);
        }

        return($country ? $country : $_COOKIE["country"]);

    }



    public static function getTextPage() {
        $country = self::getCountry();
        $country = Func::getLanguagePage($country);
        $json = Func::getСontentPage($country);
        return $json;
    }


    public static function getNameSite() {
        $country = self::getCountry();
        $country = Func::getLanguagePage($country);
        $query = Connect::Query('SELECT * FROM name_site limit 1');
        return $query[0]['name_'.$country];
    }

    public static function getPhoneSite() {
        $query = Connect::Query('SELECT * FROM phone');
        return $query;
    }

    public static function getPhoneInSite($phone, $str = null) {
        $kod_ru = substr($phone, 0, 2);
        $kod_city = substr($phone, 2, 3);
        $phone1 = substr($phone, 5, 3);
        $phone2 = substr($phone, 8, 2);
        $phone3 = substr($phone, 10, 2);
        echo '<span>'.$kod_ru.' ('.$kod_city.') </span>'.$phone1.'-'.$phone2.'-'.$phone3.''.$str;

    }


}

$json = Country::getTextPage();
$name_site = Country::getNameSite();
$phone_site = Country::getPhoneSite();


