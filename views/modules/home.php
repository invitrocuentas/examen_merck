<?php include_once('inc/title.php'); ?>

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
            <p><b>Disclaimer:</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in.</p>
            <button id="cookies">Acepto</button>
        </div>
        <div class="w-100">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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