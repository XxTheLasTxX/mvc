<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql://mysql;port=3306;dbname=mercado;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}