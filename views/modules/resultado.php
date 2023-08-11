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

<?php         
    $t = new RegistroController();
    $t1 = $t->traerResultadoCtrl($alumno['id']);

    if(empty($t1)){
        header("Location: ".SERVERURL);
    }

    function restarHoras($hora1, $hora2) {
        $formato = 'H:i'; // Formato de horas
    
        $time1 = DateTime::createFromFormat($formato . ' \h\r\s', $hora1);
        $time2 = DateTime::createFromFormat($formato . ' \h\r\s', $hora2);
    
        $interval = $time1->diff($time2);
    
        $horas = $interval->h;
        $minutos = $interval->i;
    
        $resultado = sprintf('%02d:%02d hrs', $horas, $minutos);
        return $resultado;
    }
    
    $hora1 = '02:00 hrs';
    $hora2 = $t1['timer'];
    $timer = restarHoras($hora1, $hora2);
    
?>

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
                        <span><?php echo $timer; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 

    $respuestas_acertadas = 0;
    
    foreach(json_decode($t1['rptas']) as $item){
        $t2 = $t->validarResultadoPuntaje($item->pregunta, $item->respuesta);
        $respuestas_acertadas += $t2;
    }

    $nota_final = round($respuestas_acertadas*0.4);

?>

<section class="resultado">
    <div class="contenedor">
        <div class="resultado_txt">
            <p class="msg">¡Culminó la prueba!</p>
            <div class="flex">
                <div>
                    <p>Respuestas acertadas:</p>
                    <span><?php echo $respuestas_acertadas; ?>/50</span>
                </div>
                <div>
                    <p>Nota final:</p>
                    <span><?php echo $nota_final; ?>/20</span>
                </div>
            </div>
            <p>Resultado: <?php echo $nota_final > 10 ? '<b>APROBADO</b>' : '<b style="color: red">DESAPROBADO</b>'; ?></p>
        </div>
    </div>
</section>