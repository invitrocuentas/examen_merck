<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    if(!$_SESSION['alumno']){
        header('Location: inicio');
    }

    $alumno = $_SESSION['alumno'];
?>

<header>
    <div class="contenedor">
        <div class="row start">
            <div class="col">
                <img src="<?php echo IMG; ?>/logo-sociedad.svg" alt="Sociedad Peruana de Endocrinología" title="Sociedad Peruana de Endocrinología">
            </div>
            <div class="col">
                <div class="auspicio">
                    <p>Auspiciado por</p>
                    <img src="<?php echo IMG; ?>/logo-merck.svg" alt="Merck" title="Merck">
                </div>
            </div>
        </div>
    </div>
</header>

<section class="title">
    <div class="contenedor">
        <h1>CURSO LOREM IPSUM<br>"LOREM IPSUM LOREM IPSUM LOREM IPSUM"</h1>
    </div>
</section>

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

<section class="aviso finalizado">
    <div class="contenedor">
        <div class="row center">
            <div class="col">
                <p>Formulario finalizado en:</p>
            </div>
            <div class="col">
                <div class="timer">
                    <div class="timer_box">
                        <img src="<?php echo IMG; ?>/icon-reloj.svg" alt="Temporizador" title="Temporizador">
                        <span>02:00 hrs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="resultado">
    <div class="contenedor">
        <div class="resultado_txt">
            <p class="msg">¡Felicitaciones culminó la prueba!</p>
            <p>Respuestas acertadas:</p>
            <span>58/60</span>
            <p>Resultado: <b>APROBADO</b></p>
        </div>
    </div>
</section>