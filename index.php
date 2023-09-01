<?php

    ob_start();
    require_once('core/core.php');
    require_once('controllers/enlacesController.php');

    require_once('controllers/registro.controller.php');
    require_once('models/registro.models.php');

    $plantilla = new enlacesControl();
    $plantilla->mostrarTemplate();

?>