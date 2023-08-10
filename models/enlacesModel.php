<?php

class EnlacesModelo
{

    protected function enlacesModel($enlace)
    {
        // echo $enlace;

        if (file_exists("views/modules/" . $enlace . ".php")) {
            $module = "views/modules/" . $enlace . ".php";
        } elseif ($enlace == 'inicio') {
            $module = "views/modules/home.php";
        } elseif ($enlace == 'login') {
            $module = "views/modules/login.php";
        } elseif ($enlace == 'index') {
            $module = "views/modules/login.php";
        } else {
            $module = "views/modules/login.php";
        }
        return $module;
    }
}
