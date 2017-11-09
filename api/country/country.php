<?php



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




}

$json = Country::getTextPage();
