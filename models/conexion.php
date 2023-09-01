<?php

class Conexion
{

    public static function conectar()
    {
        $link = new PDO("mysql:host=localhost;dbname=u954616314_ex", "u954616314_ex", "8tD?Ce0u!C>");
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $link->exec("SET CHARACTER SET utf8");
        return $link;
    }
}
