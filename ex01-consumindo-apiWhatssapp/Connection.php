<?php

class Connection
{
    public static function getDb()
    {
        $conn  = new PDO (
            'mysql:host=127.0.0.1:3306; dbname=recode; charset=utf8',
            'root',
            'M@ltodextrina10'
        );

        if ($conn) {
            return $conn;
        } else {
            return "<h1>falha na conexão</h1>";
        }
    }
}

