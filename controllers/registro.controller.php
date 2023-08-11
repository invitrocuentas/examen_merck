<?php

class RegistroController
{

    public static function guardarAlumnoCtrl($vars)
    {
        $n = $vars['nombres'];
        $c = $vars['nro_colegiatura'];
        $respuesta = RegistroModel::guardarAlumnoMdl($n, $c);

        if($respuesta){

            $respuesta2 = RegistroModel::selectAlumnoMdl($n, $c);

            session_start();
            $_SESSION['alumno']['id'] = $respuesta2['id'];
            $_SESSION['alumno']['nombre'] = $respuesta2['nombre_completo'];
            $_SESSION['alumno']['codigo'] = $respuesta2['nro_colegiatura'];


            $contenido = '[{"pregunta":1,"respuesta":""},{"pregunta":2,"respuesta":""},{"pregunta":3,"respuesta":""},{"pregunta":4,"respuesta":""},{"pregunta":5,"respuesta":""},{"pregunta":6,"respuesta":""},{"pregunta":7,"respuesta":""},{"pregunta":8,"respuesta":""},{"pregunta":9,"respuesta":""},{"pregunta":10,"respuesta":""},{"pregunta":11,"respuesta":""},{"pregunta":12,"respuesta":""},{"pregunta":13,"respuesta":""},{"pregunta":14,"respuesta":""},{"pregunta":15,"respuesta":""},{"pregunta":16,"respuesta":""},{"pregunta":17,"respuesta":""},{"pregunta":18,"respuesta":""},{"pregunta":19,"respuesta":""},{"pregunta":20,"respuesta":""},{"pregunta":21,"respuesta":""},{"pregunta":22,"respuesta":""},{"pregunta":23,"respuesta":""},{"pregunta":24,"respuesta":""},{"pregunta":25,"respuesta":""},{"pregunta":26,"respuesta":""},{"pregunta":27,"respuesta":""},{"pregunta":28,"respuesta":""},{"pregunta":29,"respuesta":""},{"pregunta":30,"respuesta":""},{"pregunta":31,"respuesta":""},{"pregunta":32,"respuesta":""},{"pregunta":33,"respuesta":""},{"pregunta":34,"respuesta":""},{"pregunta":35,"respuesta":""},{"pregunta":36,"respuesta":""},{"pregunta":37,"respuesta":""},{"pregunta":38,"respuesta":""},{"pregunta":39,"respuesta":""},{"pregunta":40,"respuesta":""},{"pregunta":41,"respuesta":""},{"pregunta":42,"respuesta":""},{"pregunta":43,"respuesta":""},{"pregunta":44,"respuesta":""},{"pregunta":45,"respuesta":""},{"pregunta":46,"respuesta":""},{"pregunta":47,"respuesta":""},{"pregunta":48,"respuesta":""},{"pregunta":49,"respuesta":""},{"pregunta":50,"respuesta":""}]';
            $respuesta3 = RegistroModel::registrarRespuestasVacias($respuesta2['id'], $contenido);

            return $respuesta3;
        }


    }

    public static function guardarTimerCtrl($vars)
    {
        $id = $vars['id_alumno'];
        $timer = $vars['timer'];
        $respuesta = RegistroModel::guardarTimerMdl($id, $timer);
        return $respuesta;
    }

    public static function opcionMarcadaCtrl($vars){
        // seleccionar las rptas de dicho alumno
        $respuesta1 = RegistroModel::traerRptasMdl($vars['id_alumno']);
        if($respuesta1){
            $array = json_decode($respuesta1['rptas']);

            $array[$vars['pregunta'] - 1]->respuesta = $vars['opcion'];

            $JSONtoBD = json_encode($array);
            //var_dump($JSONtoBD);

            $respuesta2 = RegistroModel::actualizarRptasMdl($respuesta1['id'], $vars['id_alumno'], $JSONtoBD);

            return $respuesta2;

        }

    }

    public static function traerPreguntaCtrl($id)
    {
        $table = "preguntas";
        $respuesta = RegistroModel::traerPreguntaMdl($table, $id);
        return $respuesta;
    }

    public static function traerResultadoCtrl($id)
    {
        $table = "respuestas";
        $respuesta = RegistroModel::traerResultadoMdl($table, $id);
        return $respuesta;
    }

    public static function validarResultadoPuntaje($pregunta, $respuesta_letra)
    {
        $sumatoria = 0;
        $respuesta = RegistroModel::validarResultadoPuntajeMdl($pregunta);

        if($respuesta_letra == $respuesta['opcion_correcta']){
            $sumatoria = 1;
        }

        return $sumatoria;
    }

}
