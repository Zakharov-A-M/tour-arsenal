<?php


class Connect
{
    const HOST = 'localhost';fdgdfgd
    const USER = 'exobag41_root';
    const PASSWORD = 'morgan19951';
    const BD = 'exobag41_ladoga';


    public static function Query($query) {
        $mysqli = new mysqli(self::HOST, self::USER, self::PASSWORD, self::BD);
        if (!$mysqli) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        $mysqli->set_charset("utf8");

        if ($result = $mysqli->query($query)) {
            return   $result->fetch_all(MYSQLI_ASSOC);
        } else {
            var_dump('Ошибка Запроса!');
        }
    }


    public static function QueryInsert($query) {
        $mysqli = new mysqli(self::HOST, self::USER, self::PASSWORD, self::BD);
        if (!$mysqli) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        $mysqli->set_charset("utf8");

        if ($result = $mysqli->query($query)) {
            return   $result;
        } else {
            var_dump('Ошибка Запроса!');
            var_dump($mysqli->error);
        }
    }

}
