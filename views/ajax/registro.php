<?php 

require_once('../../controllers/registro.controller.php');
require_once('../../models/registro.models.php');

class Registro{

    public $vars;

    public function guardarAlumnoAjax(){
        $respuesta = RegistroController::guardarAlumnoCtrl($this->vars);
        echo json_encode($respuesta);
    }

    public function opcionMarcadaAjax(){
        $respuesta = RegistroController::opcionMarcadaCtrl($this->vars);
        echo json_encode($respuesta);
    }

}

$e = new Registro();

if($_POST['validar'] == 'guardarAlumno'){
    $e->vars = $_POST;
    $e->guardarAlumnoAjax();
}

if($_POST['validar'] == 'opcionMarcada'){
    $e->vars = $_POST;
    $e->opcionMarcadaAjax();
}

?>