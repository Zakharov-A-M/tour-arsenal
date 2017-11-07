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
            var_dump($country);
        }

        //$json = Func::getLanguagePage($_COOKIE["country"]);
        $country = Func::getLanguagePage($country);
        $json = Func::getСontentPage($country);
        return $json;

    }




}

Country::getCountry();

