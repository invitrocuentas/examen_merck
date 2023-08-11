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
?>


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

<section class="cuestionario">
    <div class="contenedor">
        <div class="row">
            <div class="cuestionario_preguntas">
                <h1>PREGUNTAS</h1>
                <div>
                    <button type="button" class="q_1 <?php //echo $nro == 1 ? 'active' : ''; ?>">
                        <p>1</p>
                    </button>
                    <button type="button" class="q_2 <?php //echo $nro == 2 ? 'active' : ''; ?>">
                        <p>2</p>
                    </button>
                    <button type="button" class="q_3 <?php //echo $nro == 3 ? 'active' : ''; ?>">
                        <p>3</p>
                    </button>
                    <button type="button" class="q_4 <?php //echo $nro == 4 ? 'active' : ''; ?>">
                        <p>4</p>
                    </button>
                    <button type="button" class="q_5 <?php //echo $nro == 5 ? 'active' : ''; ?>">
                        <p>5</p>
                    </button>
                    <button type="button" class="q_6 <?php //echo $nro == 6 ? 'active' : ''; ?>">
                        <p>6</p>
                    </button>
                    <button type="button" class="q_7 <?php //echo $nro == 7 ? 'active' : ''; ?>">
                        <p>7</p>
                    </button>
                    <button type="button" class="q_8 <?php //echo $nro == 8 ? 'active' : ''; ?>">
                        <p>8</p>
                    </button>
                    <button type="button" class="q_9 <?php //echo $nro == 9 ? 'active' : ''; ?>">
                        <p>9</p>
                    </button>
                    <button type="button" class="q_10 <?php //echo $nro == 10 ? 'active' : ''; ?>">
                        <p>10</p>
                    </button>
                    <button type="button" class="q_11 <?php //echo $nro == 11 ? 'active' : ''; ?>">
                        <p>11</p>
                    </button>
                    <button type="button" class="q_12 <?php //echo $nro == 12 ? 'active' : ''; ?>">
                        <p>12</p>
                    </button>
                    <button type="button" class="q_13 <?php //echo $nro == 13 ? 'active' : ''; ?>">
                        <p>13</p>
                    </button>
                    <button type="button" class="q_14 <?php //echo $nro == 14 ? 'active' : ''; ?>">
                        <p>14</p>
                    </button>
                    <button type="button" class="q_15 <?php //echo $nro == 15 ? 'active' : ''; ?>">
                        <p>15</p>
                    </button>
                    <button type="button" class="q_16 <?php //echo $nro == 16 ? 'active' : ''; ?>">
                        <p>16</p>
                    </button>
                    <button type="button" class="q_17 <?php //echo $nro == 17 ? 'active' : ''; ?>">
                        <p>17</p>
                    </button>
                    <button type="button" class="q_18 <?php //echo $nro == 18 ? 'active' : ''; ?>">
                        <p>18</p>
                    </button>
                    <button type="button" class="q_19 <?php //echo $nro == 19 ? 'active' : ''; ?>">
                        <p>19</p>
                    </button>
                    <button type="button" class="q_20 <?php //echo $nro == 20 ? 'active' : ''; ?>">
                        <p>20</p>
                    </button>
                    <button type="button" class="q_21 <?php //echo $nro == 21 ? 'active' : ''; ?>">
                        <p>21</p>
                    </button>
                    <button type="button" class="q_22 <?php //echo $nro == 22 ? 'active' : ''; ?>">
                        <p>22</p>
                    </button>
                    <button type="button" class="q_23 <?php //echo $nro == 23 ? 'active' : ''; ?>">
                        <p>23</p>
                    </button>
                    <button type="button" class="q_24 <?php //echo $nro == 24 ? 'active' : ''; ?>">
                        <p>24</p>
                    </button>
                    <button type="button" class="q_25 <?php //echo $nro == 25 ? 'active' : ''; ?>">
                        <p>25</p>
                    </button>
                    <button type="button" class="q_26 <?php //echo $nro == 26 ? 'active' : ''; ?>">
                        <p>26</p>
                    </button>
                    <button type="button" class="q_27 <?php //echo $nro == 27 ? 'active' : ''; ?>">
                        <p>27</p>
                    </button>
                    <button type="button" class="q_28 <?php //echo $nro == 28 ? 'active' : ''; ?>">
                        <p>28</p>
                    </button>
                    <button type="button" class="q_29 <?php //echo $nro == 29 ? 'active' : ''; ?>">
                        <p>29</p>
                    </button>
                    <button type="button" class="q_30 <?php //echo $nro == 30 ? 'active' : ''; ?>">
                        <p>30</p>
                    </button>
                    <button type="button" class="q_31 <?php //echo $nro == 31 ? 'active' : ''; ?>">
                        <p>31</p>
                    </button>
                    <button type="button" class="q_32 <?php //echo $nro == 32 ? 'active' : ''; ?>">
                        <p>32</p>
                    </button>
                    <button type="button" class="q_33 <?php //echo $nro == 33 ? 'active' : ''; ?>">
                        <p>33</p>
                    </button>
                    <button type="button" class="q_34 <?php //echo $nro == 34 ? 'active' : ''; ?>">
                        <p>34</p>
                    </button>
                    <button type="button" class="q_35 <?php //echo $nro == 35 ? 'active' : ''; ?>">
                        <p>35</p>
                    </button>
                    <button type="button" class="q_36 <?php //echo $nro == 36 ? 'active' : ''; ?>">
                        <p>36</p>
                    </button>
                    <button type="button" class="q_37 <?php //echo $nro == 37 ? 'active' : ''; ?>">
                        <p>37</p>
                    </button>
                    <button type="button" class="q_38 <?php //echo $nro == 38 ? 'active' : ''; ?>">
                        <p>38</p>
                    </button>
                    <button type="button" class="q_39 <?php //echo $nro == 39 ? 'active' : ''; ?>">
                        <p>39</p>
                    </button>
                    <button type="button" class="q_40 <?php //echo $nro == 40 ? 'active' : ''; ?>">
                        <p>40</p>
                    </button>
                    <button type="button" class="q_41 <?php //echo $nro == 41 ? 'active' : ''; ?>">
                        <p>41</p>
                    </button>
                    <button type="button" class="q_42 <?php //echo $nro == 42 ? 'active' : ''; ?>">
                        <p>42</p>
                    </button>
                    <button type="button" class="q_43 <?php //echo $nro == 43 ? 'active' : ''; ?>">
                        <p>43</p>
                    </button>
                    <button type="button" class="q_44 <?php //echo $nro == 44 ? 'active' : ''; ?>">
                        <p>44</p>
                    </button>
                    <button type="button" class="q_45 <?php //echo $nro == 45 ? 'active' : ''; ?>">
                        <p>45</p>
                    </button>
                    <button type="button" class="q_46 <?php //echo $nro == 46 ? 'active' : ''; ?>">
                        <p>46</p>
                    </button>
                    <button type="button" class="q_47 <?php //echo $nro == 47 ? 'active' : ''; ?>">
                        <p>47</p>
                    </button>
                    <button type="button" class="q_48 <?php //echo $nro == 48 ? 'active' : ''; ?>">
                        <p>48</p>
                    </button>
                    <button type="button" class="q_49 <?php //echo $nro == 49 ? 'active' : ''; ?>">
                        <p>49</p>
                    </button>
                    <button type="button" class="q_50 <?php //echo $nro == 50 ? 'active' : ''; ?>">
                        <p>50</p>
                    </button>
                </div>
            </div>
            <?php 
            
                $p = new RegistroController();
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