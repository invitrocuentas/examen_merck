<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    if(!$_SESSION['alumno']){
        header('Location: inicio');
    }

    $alumno = $_SESSION['alumno'];
?>

<?php include_once('inc/title.php'); ?>

<section class="datos">
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
                <p>Asegúrate de marcar todas las preguntas antes de enviar el formulario:</p>
            </div>
            <div class="col">
                <div class="timer">
                    <p>Tiempo para la prueba:</p>
                    <div class="timer_box">
                        <img src="<?php echo IMG; ?>/icon-reloj.svg" alt="Temporizador" title="Temporizador">
                        <span>02:00 hrs</span>
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