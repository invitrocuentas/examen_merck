<?php

require_once('models/enlacesModel.php');

class enlacesControl extends EnlacesModelo
{

    public function mostrarTemplate()
    {

        include "views/template.php";
    }

    public function mostrarVistas()
    {


        if (isset($_GET['views'])) {
            $enlace = explode("/", $_GET['views'])[0];
            $respuesta = EnlacesModelo::enlacesModel($enlace);
        } else {

            $respuesta = EnlacesModelo::enlacesModel('inicio');
        }

        include $respuesta;
    }
}
