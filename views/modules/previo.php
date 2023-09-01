<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    /*if(!$_SESSION['alumno']){
        header('Location: inicio');
    }*/

    $alumno = $_SESSION['alumno'];

    //echo $alumno['time'];

    /*if(intval($alumno['estado']) == 1){
        header("Location: ".SERVERURL);
    }*/
?>

<?php include_once('inc/title.php'); ?>

<section class="datos">
    <input type="hidden" name="id_alumno" value="<?php echo $alumno['id']; ?>">
    <div class="contenedor">
        <div class="datos_personales">
            <p>Datos Personales</p>
            <form class="datos_form with_info">
                <div>
                    <input type="text" name="nombres" placeholder="Ingrese su Nombre y Apellidos" id="nombres" value="<?php echo $alumno['nombre']; ?>" disabled>
                </div>
                <div>
                    <input type="number" name="nro_colegiatura" placeholder="Ingrese su numero de colegiatura" id="codigo" value="<?php echo $alumno['codigo']; ?>" disabled>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="aviso">
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <!-- <p>Asegúrate de marcar todas las preguntas antes de enviar el formulario:</p> -->
                <p>Bienvenido al Examen Virtual del Curso Integral de Reproducción Asistida.</p>
                <ul>
                    <li>Usted tendrá 1 hora para completar el total de 50 preguntas del cuestionario.</li>
                    <li>En la prueba no existen preguntas con puntaje negativo, y podrá saltar las que necesite en caso de no conocer la respuesta.</li>
                    <li>Las respuestas cuentan con autoguardado al momento de hacer clic en “siguiente”, y el formulario se finaliza al culminar la pregunta número 50.</li>
                    <li>El examen está programado para tener una duración máxima hasta las 3.30 p.m.</li>
                    <li>En caso de saltar alguna pregunta para contestar al finalizar el examen, podrá volver a ella haciendo clic en el número de pregunta (no estará sombreada).</li>
                </ul>
                </p>
            </div>
            <div class="col">
                <div class="timer">
                    <p>Tiempo para la prueba:</p>
                    <div class="timer_box">
                        <img src="<?php echo IMG; ?>/icon-reloj.svg" alt="Temporizador" title="Temporizador">
                        <span>01:10 hrs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="init" id="init">
    <div class="contenedor">
        <button>Iniciar</button>
    </div>
</section>