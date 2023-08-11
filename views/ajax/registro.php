<?php 

require_once('../../controllers/registro.controller.php');
require_once('../../models/registro.models.php');

class Registro{

    public $vars;

    public function guardarAlumnoAjax(){
        $respuesta = RegistroController::guardarAlumnoCtrl($this->vars);
        echo json_encode($respuesta);
    }

    public function guardarTimerAjax(){
        $respuesta = RegistroController::guardarTimerCtrl($this->vars);
        echo json_encode($respuesta);
    }

    public function opcionMarcadaAjax(){
        $respuesta = RegistroController::opcionMarcadaCtrl($this->vars);
        echo json_encode($respuesta);
    }

    public function subirResultadosAjax(){
        $respuesta = RegistroController::guardarResultadosCtrol($this->vars);
        echo json_encode($respuesta);
    }

    public function empezoExamenAjax(){
        $respuesta = RegistroController::empezoExamenCtrl($this->vars);
        echo json_encode($respuesta);
    }

}

$e = new Registro();

if($_POST['validar'] == 'guardarAlumno'){
    $e->vars = $_POST;
    $e->guardarAlumnoAjax();
}

if($_POST['validar'] == 'subirResultados'){
    $e->vars = $_POST;
    $e->subirResultadosAjax();
}


if($_POST['validar'] == 'guardarTiempo'){
    $e->vars = $_POST;
    $e->guardarTimerAjax();
}

if($_POST['validar'] == 'opcionMarcada'){
    $e->vars = $_POST;
    $e->opcionMarcadaAjax();
}

if($_POST['validar'] == 'empezoExamen'){
    $e->vars = $_POST;
    $e->empezoExamenAjax();
}

?>