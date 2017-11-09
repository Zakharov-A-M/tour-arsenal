<?php


class ConnectDB
{
    const HOST = 'localhost';
    const USER = 'root';
    const PASSWORD = 'root';
    const BD = 'tour-arsenal';

    public static function connect_BD() {
        $mysqli = new mysqli(self::HOST, self::USER, self::PASSWORD, self::BD);
        if (!$mysqli) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

       /* if ($result = $mysqli->query('SELECT * FROM name_site')) {
            var_dump( $result);


            $result->close();
        } else {
            var_dump('Ошибка Запроса!');
        }*/


        $mysqli->close();
    }



}