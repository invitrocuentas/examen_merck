<?php 
    if(isset($_SESSION)){
        session_destroy();
    }
    include_once('inc/title.php'); 
?>

<section class="datos">
    <div class="contenedor">
        <div class="datos_personales">
            <p>Datos Personales</p>
            <form class="datos_form">
                <div>
                    <label for="nombres">Nombres y Apellidos</label>
                    <input type="text" name="nombres" placeholder="Ingrese su Nombre y Apellidos" id="nombres">
                </div>
                <div>
                    <label for="codigo">Número de colegiatura</label>
                    <input type="number" name="nro_colegiatura" placeholder="Ingrese su numero de colegiatura" id="codigo">
                </div>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
</section>

<div class="disclaimer">
    <div class="contenedor">
        <div class="disclaimer_txt">
            <p><b>Consentimiento informado:</b>Para nosotros es muy importante mantener la privacidad de los usuarios del presente examen virtual y la seguridad de su información personal. Merck Peruana, S.A., con domicilio en Av. Manuel Olguin 325, Oficina 1702, Surco, Lima, Perú (en adelante “Merck”), e IN VITRO MARKETING SAC (en adelante “InVitro Agencia”), con domicilio en Calle Pomalca 455, Santiago de Surco, Lima – Perú, para los fines previstos en la legislación aplicable sobre protección de datos, son las entidades responsables del tratamiento de sus datos personales.</p>
            <button id="cookies">Acepto</button>
        </div>
        <div class="w-100">
            <p>Para los fines del presente examen, se le informa lo siguiente:</p>
            <ul>
                <li>InVitro Agencia será el responsable del tratamiento de sus datos personales y respuestas que brinde en el cuestionario durante el sábado 12 de agosto en el horario de 2 p.m. a 4 p.m.</li>
                <li>El examen realizado se realizará con cámara encendida y será grabado para fines de asegurar el cumplimiento de las condiciones necesarias para el desarrollo del mismo, por lo que deberá realizarlo con cámara encendida en la reunión de Teams.</li>
                <li>El examen contará con 50 preguntas en total, cada respuesta correcta sumará 0.4 puntos para su nota final del cuestionario. No hay preguntas con puntaje negativo.</li>
                <li>Solo tendrá 1 oportunidad de realizar el cuestionario.</li>
            </ul>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const miDiv = document.querySelector('.disclaimer');
    const botonOcultar = document.getElementById("cookies");

    // Comprobar si hay un valor en localStorage para ocultar el div
    const ocultarDiv = localStorage.getItem("ocultarDiv");
    if (ocultarDiv === "true") {
        miDiv.style.display = "none";
    }

    // Manejador de clic para el botón
    botonOcultar.addEventListener("click", function() {
        miDiv.style.display = "none";
        localStorage.setItem("ocultarDiv", "true");
    });
});
</script>