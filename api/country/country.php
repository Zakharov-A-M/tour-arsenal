<?php



class Country {

    const COUNTRY = 'ru';

    public static function getCountry() {
        $ip = Func::getClientIp();
        if ($ip) {
            $country = Func::getClientCountry($ip);
        } else {
            $country = self::COUNTRY;
        }
        if (!$_COOKIE["country"]) {
            //setcookie("country", $country, 18000);
            var_dump($country);
        }

    }




}

Country::getCountry();

