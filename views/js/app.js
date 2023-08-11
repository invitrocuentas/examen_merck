if(document.querySelector('.datos_form')){

    let formulario = document.querySelector('.datos_form');

    formulario.addEventListener('submit', (e)=>{

        e.preventDefault();
        const formSend = new FormData(formulario)

        for (const value of formSend.values()) {
            if (value == "" || value.name == "") {
                alert('Asegúrate de completar todos los campos del formulario')
                return;
            }
        }

        formSend.append('validar', 'guardarAlumno')
        fetch('views/ajax/registro.php', {
            method: 'POST',
            body: formSend
        })
        .then(res => res.json())
        .then(data => {

            if(data){
                localStorage.removeItem('startTime');
                
                setTimeout(function(){
                    window.location.href = SERVERURL+'previo'
                }, 500)
            }

        })

    })

}

if(document.querySelector('#init')){
    document.querySelector('#init').addEventListener('click', (e)=>{
        e.preventDefault();
        window.location.href = SERVERURL+'preguntas/1'
    })
}

function startTimer(duration, display) {
    var startTime = localStorage.getItem("startTime")
        ? parseInt(localStorage.getItem("startTime"))
        : Date.now();

    function updateTimer() {
        var currentTime = Date.now();
        var elapsedTime = Math.floor((currentTime - startTime) / 1000);
        var remainingTime = Math.max(duration - elapsedTime, 0);

        var hours = Math.floor(remainingTime / 3600);
        var minutes = Math.floor((remainingTime % 3600) / 60);
        var seconds = remainingTime % 60;

        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        //display.textContent = hours + ":" + minutes + ":" + seconds;
        display.textContent = hours + ":" + minutes + " hrs";

        /*if (remainingTime <= 0) {
            clearInterval(timerInterval);
            localStorage.removeItem("startTime");
            // Redirigir cuando termine el temporizador
            window.location.href = SERVERURL+'resultado'; // Reemplaza con la URL deseada
        }*/
    }

    var timerInterval = setInterval(updateTimer, 1000);
}

window.onload = function () {
    if(document.querySelector('#temporizador')){
        var twoHours = 2 * 60 * 60, // 2 horas en segundos
            display = document.querySelector('#temporizador');
    
        if (localStorage.getItem("startTime")) {
            var savedStartTime = parseInt(localStorage.getItem("startTime"));
            var currentTime = Date.now();
            var elapsedTime = Math.floor((currentTime - savedStartTime) / 1000);
            twoHours -= elapsedTime;
        } else {
            localStorage.setItem("startTime", Date.now());
        }

        startTimer(twoHours, display);
    }
};



if(document.querySelector('.cuestionario_preguntas')){
    let contenedor = document.querySelector('.cuestionario_preguntas'),
        botones = Array.from(contenedor.querySelectorAll('button'));

    botones.forEach(boton=>{
        boton.addEventListener('click', (e)=>{
            let nro = parseInt(e.currentTarget.querySelector('p').textContent)
            window.location.href = SERVERURL+`preguntas/${nro}`
        })
    })
}

if(document.querySelector('#toFinishExam')){
    document.querySelector('#toFinishExam').addEventListener('click', (e)=>{
        e.preventDefault();
        guardarTimer( parseInt(document.querySelector('[name="id_alumno"]').value) )
    })
}

if(document.querySelector('.cuestionario_respuestas')){
    let contenedor = document.querySelector('.cuestionario_respuestas'),
        modal = document.querySelector('.modal'),
        modalClose = Array.from(document.querySelectorAll('.modal_close')),
        id_alumno = parseInt(document.querySelector('[name="id_alumno"]').value),
        pregunta = parseInt(document.querySelector('[name="pregunta"]').value),
        botonSiguiente = contenedor.querySelector('button.nxt'),
        opciones = Array.from(contenedor.querySelectorAll('[type="radio"]'));

    opciones.forEach(opcion => {
        opcion.addEventListener('input', (e)=>{

            const formSend = new FormData()
            formSend.append('id_alumno', id_alumno)
            formSend.append('pregunta', pregunta)
            formSend.append('opcion', e.currentTarget.value)
            formSend.append('validar', 'opcionMarcada')
            fetch('../views/ajax/registro.php', {
                method: 'POST',
                body: formSend
            })
            .then(res => res.json())
            .then(data => {

                console.log(data)

            })

        })
    })

    botonSiguiente.addEventListener('click', (e)=>{
        e.preventDefault();

        let validar = 0;

        opciones.forEach(opcion=>{
            if(opcion.checked == true){
                validar++;
            }
        })

        //console.log(validar)

        if(validar!=0){

            if(pregunta != 50){
                window.location.href = SERVERURL+`preguntas/${pregunta+1}`
            }else{

                guardarTimer(id_alumno);

            }

        }else{
            modal.classList.add('active');
        }



    })

    modalClose.forEach(close=>{
        close.addEventListener('click', (e)=>{
            e.preventDefault();

            if(modal.classList.contains('active')){
                modal.classList.remove('active')
            }

        })
    })

}

function guardarTimer(id_alumno){

    console.log('alumno'+id_alumno)

    const formSend = new FormData()
    formSend.append('id_alumno', id_alumno)
    formSend.append('timer', document.querySelector('#temporizador').textContent)
    formSend.append('validar', 'guardarTiempo')
    fetch('../views/ajax/registro.php', {
        method: 'POST',
        body: formSend
    })
    .then(res => res.json())
    .then(data => {
        //console.log(data)
        if(data){
            window.location.href = SERVERURL+'resultado'
        }
    })

}