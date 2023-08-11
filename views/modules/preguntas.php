<?php 
    if(!isset($_SESSION)){
        session_start();
    }
    if(!$_SESSION['alumno']){
        header('Location: inicio');
    }

    $alumno = $_SESSION['alumno'];

    $cadena = $_GET['views'];
    $nro = str_replace('preguntas/', '', $cadena);

    $p = new RegistroController();
?>

<style>button.active{background: #137fd3;border-color: #137fd3;}</style>

<div class="modal">
    <div class="modal_bg modal_close"></div>
    <div class="modal_box">
        <div class="modal_btn modal_close">+</div>
        <div class="modal_content">
            <p>Aún no haz marcado la pregunta<br>¿Seguro que deseas continuar?</p>
            <div>
                <button class="modal_close">Volver a la pregunta actual</button>

                <?php if($nro == 50): ?>
                    <!-- <a href="<?php //echo SERVERURL ?>resultado">Sí, finalizar</a> -->
                    <button id="toFinishExam">Sí, finalizar</button>
                <?php else: ?>
                    <a href="<?php echo SERVERURL ?>preguntas/<?php echo $nro+1; ?>">Sí, continuar a la siguiente</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="modal_2">
    <div class="modal_2_bg modal_2_close"></div>
    <div class="modal_2_box">
        <div class="modal_2_btn modal_2_close">+</div>
        <div class="modal_2_content">
            <p>¿Seguro que quieres finalizar el examen?<br>Aún tienes preguntas pendientes por responder</p>
            <div>
                <button id="toFinishExamWithoutFullQuestion">Si, finalizar</button>
                <button class="modal_2_close">No, volver al examen.</button>
            </div>
        </div>
    </div>
</div>

<section class="aviso fixed">
    <div class="contenedor">
        <div class="row">
            <div class="col">
                <p>Asegúrate de marcar todas las preguntas antes de enviar el formulario:</p>
            </div>
            <div class="col">
                <div class="timer">
                    <p>Tiempo restante:</p>
                    <div class="timer_box">
                        <img src="<?php echo IMG; ?>/icon-reloj.svg" alt="Temporizador" title="Temporizador">
                        <span id="temporizador">00:00 hrs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<input type="hidden" name="id_alumno" value="<?php echo $alumno['id']; ?>">
<input type="hidden" name="pregunta" value="<?php echo $nro ?>">

<?php 
    $results = $p->traerResultadoCtrl($alumno['id']);
    $respuestas_contestadas = json_decode($results['rptas']);
    $rptas_cntstds = [];

    foreach($respuestas_contestadas as $rc){
        if(trim($rc->respuesta) != ""){
            array_push($rptas_cntstds, $rc->pregunta);
        }
    }

    //var_dump($rptas_cntstds);

?>
<section class="cuestionario">
    <div class="contenedor">
        <div class="row">
            <div class="cuestionario_preguntas">
                <h1>PREGUNTAS</h1>
                <div>
                    <button type="button" class="q_button q_1 <?php echo in_array(1, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>1</p>
                    </button>
                    <button type="button" class="q_button q_2 <?php echo in_array(2, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>2</p>
                    </button>
                    <button type="button" class="q_button q_3 <?php echo in_array(3, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>3</p>
                    </button>
                    <button type="button" class="q_button q_4 <?php echo in_array(4, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>4</p>
                    </button>
                    <button type="button" class="q_button q_5 <?php echo in_array(5, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>5</p>
                    </button>
                    <button type="button" class="q_button q_6 <?php echo in_array(6, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>6</p>
                    </button>
                    <button type="button" class="q_button q_7 <?php echo in_array(7, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>7</p>
                    </button>
                    <button type="button" class="q_button q_8 <?php echo in_array(8, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>8</p>
                    </button>
                    <button type="button" class="q_button q_9 <?php echo in_array(9, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>9</p>
                    </button>
                    <button type="button" class="q_button q_10 <?php echo in_array(10, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>10</p>
                    </button>
                    <button type="button" class="q_button q_11 <?php echo in_array(11, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>11</p>
                    </button>
                    <button type="button" class="q_button q_12 <?php echo in_array(12, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>12</p>
                    </button>
                    <button type="button" class="q_button q_13 <?php echo in_array(13, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>13</p>
                    </button>
                    <button type="button" class="q_button q_14 <?php echo in_array(14, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>14</p>
                    </button>
                    <button type="button" class="q_button q_15 <?php echo in_array(15, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>15</p>
                    </button>
                    <button type="button" class="q_button q_16 <?php echo in_array(16, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>16</p>
                    </button>
                    <button type="button" class="q_button q_17 <?php echo in_array(17, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>17</p>
                    </button>
                    <button type="button" class="q_button q_18 <?php echo in_array(18, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>18</p>
                    </button>
                    <button type="button" class="q_button q_19 <?php echo in_array(19, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>19</p>
                    </button>
                    <button type="button" class="q_button q_20 <?php echo in_array(20, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>20</p>
                    </button>
                    <button type="button" class="q_button q_21 <?php echo in_array(21, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>21</p>
                    </button>
                    <button type="button" class="q_button q_22 <?php echo in_array(22, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>22</p>
                    </button>
                    <button type="button" class="q_button q_23 <?php echo in_array(23, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>23</p>
                    </button>
                    <button type="button" class="q_button q_24 <?php echo in_array(24, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>24</p>
                    </button>
                    <button type="button" class="q_button q_25 <?php echo in_array(25, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>25</p>
                    </button>
                    <button type="button" class="q_button q_26 <?php echo in_array(26, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>26</p>
                    </button>
                    <button type="button" class="q_button q_27 <?php echo in_array(27, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>27</p>
                    </button>
                    <button type="button" class="q_button q_28 <?php echo in_array(28, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>28</p>
                    </button>
                    <button type="button" class="q_button q_29 <?php echo in_array(29, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>29</p>
                    </button>
                    <button type="button" class="q_button q_30 <?php echo in_array(30, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>30</p>
                    </button>
                    <button type="button" class="q_button q_31 <?php echo in_array(31, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>31</p>
                    </button>
                    <button type="button" class="q_button q_32 <?php echo in_array(32, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>32</p>
                    </button>
                    <button type="button" class="q_button q_33 <?php echo in_array(33, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>33</p>
                    </button>
                    <button type="button" class="q_button q_34 <?php echo in_array(34, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>34</p>
                    </button>
                    <button type="button" class="q_button q_35 <?php echo in_array(35, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>35</p>
                    </button>
                    <button type="button" class="q_button q_36 <?php echo in_array(36, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>36</p>
                    </button>
                    <button type="button" class="q_button q_37 <?php echo in_array(37, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>37</p>
                    </button>
                    <button type="button" class="q_button q_38 <?php echo in_array(38, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>38</p>
                    </button>
                    <button type="button" class="q_button q_39 <?php echo in_array(39, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>39</p>
                    </button>
                    <button type="button" class="q_button q_40 <?php echo in_array(40, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>40</p>
                    </button>
                    <button type="button" class="q_button q_41 <?php echo in_array(41, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>41</p>
                    </button>
                    <button type="button" class="q_button q_42 <?php echo in_array(42, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>42</p>
                    </button>
                    <button type="button" class="q_button q_43 <?php echo in_array(43, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>43</p>
                    </button>
                    <button type="button" class="q_button q_44 <?php echo in_array(44, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>44</p>
                    </button>
                    <button type="button" class="q_button q_45 <?php echo in_array(45, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>45</p>
                    </button>
                    <button type="button" class="q_button q_46 <?php echo in_array(46, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>46</p>
                    </button>
                    <button type="button" class="q_button q_47 <?php echo in_array(47, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>47</p>
                    </button>
                    <button type="button" class="q_button q_48 <?php echo in_array(48, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>48</p>
                    </button>
                    <button type="button" class="q_button q_49 <?php echo in_array(49, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>49</p>
                    </button>
                    <button type="button" class="q_button q_50 <?php echo in_array(50, $rptas_cntstds) ? 'active' : ''; ?>">
                        <p>50</p>
                    </button>
                </div>
            </div>
            <?php 
            
                $p = $p->traerPreguntaCtrl($nro);

            ?>
            <div class="cuestionario_respuestas">
                <div class="pregunta">

                    <h2><?php echo $nro.'. '.$p['pregunta']; ?></h2>

                    <div class="options">
                        <?php 
                            if( isset($p['opciones']) && !empty(json_decode($p['opciones'])) ): 
                            $opciones = json_decode($p['opciones']);
                            foreach($opciones as $o => $opcion):
                            //var_dump($opcion);
                        ?>
                        <div class="opt opt_<?php echo $o+1; ?>">
                            <input type="radio" name="p_<?php echo $nro; ?>" value="<?php echo $opcion->opcion_letra ?>"><label for="<?php echo $opcion->opcion_letra ?>"><?php echo ucwords($opcion->opcion_letra).'. '.$opcion->opcion_texto ?></label>
                        </div>
                        <?php endforeach; endif; ?>
                    </div>
                    <?php if($nro == 50): ?>
                    <button type="button" class="nxt to_finish">
                        Finalizar
                    </button>
                    <?php else: ?>
                    <button type="button" class="nxt to_next">
                        Siguiente    
                    </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>