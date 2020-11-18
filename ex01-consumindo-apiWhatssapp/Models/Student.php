<?php

require "Connection.php";

class Student
{
    public $id;
    public $name;
    public $phone;

    public static function getAll()
    {
        //$conn = new Connection;
        //$connection = $conn -> getDb();
        $connection = Connection::getDb();

        $stmt = $connection -> query("select * from students");
        return $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}
