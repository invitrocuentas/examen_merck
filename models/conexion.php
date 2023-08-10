<?php

class Conexion
{

    public static function conectar()
    {
        $link = new PDO("mysql:host=localhost;dbname=examen", "root", "");
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $link->exec("SET CHARACTER SET utf8");
        return $link;
    }
}
