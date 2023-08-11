-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2023 a las 21:28:49
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `nro_colegiatura` int(50) NOT NULL,
  `hora_inicio` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(800) NOT NULL,
  `opciones` text NOT NULL,
  `opcion_correcta` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `opciones`, `opcion_correcta`) VALUES
(1, 'Sobre el ciclo menstrual, marque la alternativa correspondiente a la respuesta falsa:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Cambios regulares que de forma natural ocurren en el sistema reproductor femenino los cuales hacen posible el embarazo o la menstruación\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Existen tres fases en el ciclo ovárico: la menstruación, la fase proliferativa y la secretora\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Folículo primordial: van atresiándose en todas las etapas de la vida de la mujer. El ovocito se encuentra detenido en profase de la 1era meiosis\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Ovocito secundario: detenido en la metafase de la meiosis II y será ovulado en este estadio, considerado maduro\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Selección de cohorte folicular: los ovocitos se seleccionan alrededor de 70-85 días antes de la ovulación (2-2.5 ciclos)\"}]', 'b'),
(2, 'Hormonas que intervienen en el ciclo menstrual, marque la alternativa correcta:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"La GnRH, secretada por el hipotálamo es considerada una neurohormona\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Secreción pulsátil de GnRH 1 pulso cada 90-10 minutos en la fase folicular temprana y cada  60 minutos en fase folicular tardía. La liberación pulsátil lenta de esta hormona estimula a la LH, mientras que la rápida favorece la secreción de la FSH.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"En los ovarios la secreción hormonal es de estrógenos y andrógenos<br>- Folículo produce: Estradiol (en mayor cantidad), Progesterona y Andrógenos.<br>- Cuerpo lúteo produce: Progesterona (en mayor cantidad) y Estrógenos.<br>- Estroma produce: Andrógenos (en mayor cantidad), Estrógenos y Progesterona.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"El ovario segrega activina e inhibina, que actúan sobre el hipotálamo activando o inhibiendo respectivamente la producción de FSH\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"b y d son falsas\"}]', 'e'),
(3, 'En la definición de infertilidad es verdadero que:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Debemos iniciar estudios si la mujer tiene 35 años y son menos de 6 meses de relaciones sexuales sin cuidados anticonceptivos\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Debemos iniciar estudios si la mujer tiene 40 años y son menos de 6 meses de relaciones sexuales sin cuidados anticonceptivos\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Debemos iniciar estudios si la mujer tiene menos de 35 años y son menos de 12 meses de relaciones sexuales sin cuidados anticonceptivos\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Todas las anteriores\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Ninguna de las anteriores\"}]', 'b'),
(4, 'Respecto a la evaluación de factor Tubario marcar el verdadero', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"La evaluación ecográfica es el gold estándar para evaluar este factor\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"La Histerosalpingografia se realiza  en la 2da fase del ciclo menstrual\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"En paciente con obstrucción tubaria unilateral el tratamiento siempre es FIV\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Todas las anteriores\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Ninguna de las anteriores\"}]', 'e'),
(5, '¿Cuál es la aportación volumétrica de las vesículas seminales al eyaculado?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"66 – 80%\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"12 – 30%\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"3 -6%\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"25 – 30%\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"25 – 40%\"}]', 'a'),
(6, '¿Que estudios solicitaremos, con preferencia, ante un a azoospermia sin otros datos seminológicos de interés?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Flebografía espermática\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Estudio inmunológico\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Cariotipo\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Determinar la FSH\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Biopsia testicular\"}]', 'd'),
(7, 'Responde la aseveración falsa:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"La OPS /OMS en abril 2023 dicen que 17.5% de los adultos padecen de Infertilidad.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"OMS refiere 37% de los problemas de infertilidad es un factor femenino y 25% por trastornos Ováricos.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"La Infertilidad ya debería ser tomada como un problema de Salud Pública y así el estado ingresar a dar diversos tipos de apoyo a la ciudadanía.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Se nace con 1’000,000 de ovocitos y en la menopausia quedan aproximadamente 1,000 y durante toda la vida reproductiva se usan como 400 a 500 óvulos y el resto pasa a la atresia.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"La mejor época para guardar Óvulos es cuando la mujer tiene más de 35 años.\"}]', 'e'),
(8, 'Cómo se puede evaluar la reserva ovárica? Responde la Opción Falsa:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Medir los niveles de hormonas la hormona antimulleriana (AMH)\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"También se pueden realizar pruebas de ultrasonido para contar Recuento de los folículos Antrales del Ovárico (RFA).\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Edad\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"En el día basal 3 día del ciclo tomar FSH, LH, Estradiol, Volumen Ovarico, Inhibina B, doppler Estroma, Marcadores Genéticos FMR1 etc.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas son falsas.\"}]', 'e'),
(9, 'Las causas de Aborto Habitual que muestran mayor evidencia y correlación son:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Alteraciones endocrinas.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Anomalías uterinas.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Causas genéticas.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Factores autoinmunes.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"b y d.\"}]', 'e'),
(10, 'Cuál es la probabilidad que las parejas con Aborto Habitual logren un nacido \r\nvivo?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"75%\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"50%\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"20%\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"5%\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"0%\"}]', 'a'),
(11, 'Los quimioterápicos con mayor riesgo de gonadotoxicidad son:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Metotrexate\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Ciclofosfamida y agentes alquilantes.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Tamoxifeno\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Letrozol.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Citrato de Clomifeno e inductores de ovulación\"}]', 'b'),
(12, 'La cantidad de radiación necesaria para generar daño gonadal es menor en:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Testículos\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Ovarios\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Útero\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"a y b.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Ninguna de las anteriores.\"}]', 'a'),
(13, 'Es falso en el tratamiento de SOP que buscan embarazo.', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Dieta y ejercicios.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Inducción ovárica.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Inseminación intrauterina y FIV.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Maduración in vitro.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Ninguno.\"}]', 'e'),
(14, '¿Son afirmaciones verdaderas con respecto a cómo afecta el SOP en la fertilidad?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Factor endocrino es la anovulación.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Alteración producción de estrógenos y progesterona.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Disminución en la receptividad endometrial.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Fallo implantación.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas son verdaderas.\"}]', 'e'),
(15, '¿Cuál es la malformación mulleriana más asociada abortos recurrentes?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Agenesia mulleriana\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Útero arcuato\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Útero bicorne\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Útero didelfo\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Útero tabicado\"}]', 'e'),
(16, 'Son criterios diagnósticos según el consenso de útero en T (CUME):', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Angulo de indentación lateral ≤ 130 grados\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Profundidad de la indentación lateral ≥ 7 mm\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Angulo T o cornual ≤ 40 grados\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"A + B\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"A + B + C\"}]', 'e'),
(17, '¿Qué repercusión tiene el hidrosalpinx en la fertilidad, excepto:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Efecto tóxico directo del fluido en los embriones.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Déficit de nutrientes\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Disminuye la receptividad endometrial\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Desplaza los embriones de la cavidad endometrial\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Disminuye el peristaltismo endometrial\"}]', 'e'),
(18, '¿Cuál de las siguientes opciones describe mejor la relación entre el tamaño y la localización de los miomas uterinos y la infertilidad?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Los miomas más grandes son más propensos a causar infertilidad.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Los miomas submucosos tienen un mayor impacto en la fertilidad.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Los miomas intramurales raramente afectan la capacidad de concebir.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Los miomas cervicales están asociados exclusivamente con la infertilidad.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"En los miomas de pequeño tamaño (<2-3 cm) está indicada la conducta expectante.\"}]', 'b'),
(19, 'Cuál de las siguientes afirmaciones es cierta acerca de los pólipos endometriales?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Pueden causar sangrado uterino anormal.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Cuando se siguen durante un año, la resolución espontánea puede ocurrir haste en un 27%.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"La polipectomía aumenta las tasas de embarazo clínico en pacientes sometidas a TRA\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Existe una mayor prevalencia de endometritis crónica en mujeres que presentan pólipos endometriales.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas las afirmaciones son correctas.\"}]', 'e'),
(20, 'Es correcto sobre hallazgos histopatológicos en endometritis crónica, excepto:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Edema superficial de mucosa.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Infiltración de plasmocitos con marcador CD 138.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Presencia de microabscesos.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Mayor densidad de células estromales.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Asincronía en diferenciación celular epitelial\"}]', 'c'),
(21, 'Los mecanismos potenciales de la infusión de plasma rico en plaquetas (PRP) al endometrio son, excepto:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Propiedad antiinflamatoria: a través de la Lipoxina A4, disminuye los polimorfonucleares.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Mejora de la receptividad: activación de marcador HOXA 10.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Propiedad anti fibrótica: disminuye el colágeno 1A.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Neovascularización: a través del VEGF.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Propiedad genética: mejora la calidad genética de las células epiteliales.\"}]', 'e'),
(22, 'La mayor evidencia científica actual de mejora para patología endometrial reproductiva con la infusión de PRP es en casos de:\r\n', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Endometrio delgado.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Fallo de implantación recurrente.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Endometritis crónica.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Síndrome de Asherman.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Sinequias endometriales.\"}]', 'a'),
(23, 'Son hallazgos ecográficos relacionados a endometriosis profunda, excepto:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Sliding sign positivo\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Kissing ovaries\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Indian headdress\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Todas las anteriores.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Ninguna de las anteriores.\"}]', 'e'),
(24, 'Cuáles son las teorías más aceptadas de Adenomiosis<p>1.- Invasión miometrial por tejido endometrial a través de la zona de unión endometrio -miometrial traumatizada.<br>2.- Metaplasia de Restos mullerianos embrionarios formados por tejido de Novo endometrial en ubicaciones ectópicas<br>3.- Migración y diferenciación de células madre endometriales y estromales adultas después de menstruación retrograda<br>4.- Teoría de la Diseminación Linfática<br>Son ciertas</p>', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"solo 1\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"solo 1 y 2\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"solo 4\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"solo 1, 2 y 3\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas\"}]', 'd'),
(25, 'Es cierto sobre la Adenomiosis<p>1.- Fue descrita por primera vez en 1860  por el patologo Carl  Von  Rokitansky , el hallazgo patologico se denomino \'Cistosarcoma adenoides uterino\'.<br>2.- La adenomiosis se define como la presencia de glandulas endometriales y estroma en el miometrio.<br>3.- Histopatológicamente la Adenomiosis se divide en Adenomiosis Difusa y Adenomiosis Focal.<br>4.- La clínica de adenomiosis es sangrado menstrual abundante en un 25% y dismenorrea en un 90%<br>5.- La ecografía 2D  para el diagnóstico de adenomiosis tiene una sensibilidad del 75%<br>Son ciertas</p>', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Todas son verdaderas\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"1,2,3 son verdaderas\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Todas son falsas\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Son ciertas 2 y 4\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Solo la 4 es falsa\"}]', 'e'),
(26, 'En la Terapia Add Back:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Se indica en Pacientes con Baja Reserva y Endometriosis.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Se usa En El Tratamiento Médico de Endometriosis desde el inicio de la Gnrh.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Se indica para disminuir los efectos adversos del Hipoestrogenismo.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Es mejor usarlo Previo al Tratamiento de Fiv\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Ninguna de las anteriores.\"}]', 'c'),
(27, 'Acude a Consulta Paciente De 38 Años, G0p0, Soltera, Con Dismenorrea Intensa, Deseo de Preservación De La Fertilidad, Preocupada Por Ecografía Transvaginal: Quiste en Vidrio Esmerilado De 35mm En Ovario Derecho. Y Amh: 1.1, El Proceder Seria:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Cirugía Laparoscópica, y Luego Intente gestación 6 Meses Sino Tratamiento reproducción Asistida.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Cirugía Laparoscopica y Luego Estimulación Ovárica Controlada (Eoc) Y Aspiración Para Criopreservacion (Crio)\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Explicarle Que Debe Acudir A Una Evaluación Por El Especialista En reproducción Por El Deseo Genesico Futuro Y La Baja Reserva.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Eoc + Aspiración Folicular (Crio) + Tratamiento Médico De No Presentar Mejoría En 3 Meses Plantear cirugía\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"C y D\"}]', 'e'),
(28, 'Para realizar el método ROPA en parejas de mujeres no casadas hay que tomar en consideración los siguientes aspectos excepto:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Legal\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Social\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Moral\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Religioso\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"N.A.\"}]', 'e'),
(29, 'Sobre los consentimientos informados es correcto afirmar que:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"El médico tratante es el responsable de llevar a cabo el proceso de consentimiento informado, debiendo garantizar el derecho a la información y el derecho a la libertad de decisión de la persona usuaria.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"El consentimiento informado puede ser otorgado verbalmente por el usuario siempre que le sea explicado, de manera que evidencie el proceso de información y decisión.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Los consentimientos informados no forman parte de la historia clínica de la persona, las historias clínicas se organizan a razón de una por pareja que solicita el servicio de reproducción asistida.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"El consentimiento informado no puede ser revocado excepto si es expresado en la misma forma en que fue otorgado.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas son correctas.\"}]', 'a'),
(30, 'Sobre el vientre subrogado en el Perú es correcto afirmar que:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Tanto la madre como el padre, no son reconocidos en el Acta de Nacimiento y se ven obligados a acudir a la justicia para que ambos puedan ejercer su maternidad/paternidad.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"La sentencia Artavia Murillo y otros vs Costa Rica es favorable para el reconocimiento y puesta en práctica de las técnicas de reproducción humana asistida, pero no es de obligatorio cumplimiento para el Perú.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"No existe ningún precedente judicial en el Perú en materia de vientre subrogado, lo que hace muy difícil su reconocimiento.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Es un tema que no tiene una regulación legal específica, por lo que se aplica la Constitución y como no está prohibido entonces está permitido.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"a y d son correctas\"}]', 'd'),
(31, 'Los siguientes factores se asocian a mejores resultados en el tratamiento quirúrgico del varicocele, excepto:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Varicocele grande y evidente \"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"FSH mayor a 7 IU/L\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Mujer menor de 36 años\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Ausencia de hipotrofia testicular\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas son verdaderas.\"}]', 'b'),
(32, 'Respecto a la IIU marque lo falso:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"El uso de progesterona vaginal post IIU es sugerido\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"La mayoria de estudios concuerda que se deben intentar hasta 6 veces\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"El mejor momento para realizar la IIU es entre 24 y 40 hrs post hcg\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Inseminar 2 veces en un mismo ciclo tiene tanta eficacia como hacerlo solo 1 vez por ciclo.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"El reposo post IIU deberia de ser 10 a 15 m.\"}]', 'b'),
(33, 'Respecto a la IIU marque lo falso:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"El conteo pre y post lavado no tienen el mismo valor pronostico.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"El scratching endometrial con una canula blanda podria aumentar la tasa de éxito de la IIU\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"La presencia de regurgitacion durante la IIU podria afectar la tasa de éxito del procedimiento\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"El IMC parece no afectar la tasa de éxito de la IIU\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"No existe diferencia en las tasas de éxito entre una canula rigida y una blanda en la IIU\"}]', 'c'),
(34, 'Que factores influyen en el resultado de la ovodonación Preparación endometrial', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Edad materna\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Índice de masa corporal\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"a + b\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Todas la anteriores.\"}]', 'd'),
(35, '¿Como se prepara el endometrio de la receptora?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Si no menstrua se bloquea el ovario con agonista de la Gnrh\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Administración de estradiol previa a progesterona\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Luego de obtener un buen grosor endometrial y tener una concentración adecuada de estradiol se inicia la progesterona\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"b + c\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas la anteriores.\"}]', 'd'),
(36, 'Señale cuál es una posible causa de falla de implantación embrionaria:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Calidad embrionaria\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Técnica de transferencia embrionaria\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Interacción durante la ventana de implantación\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Soporte de fase lútea\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas la anteriores.\"}]', 'e'),
(37, 'Señale cual es el Protocolo ideal de Transferencia Embrionaria que debe aplicarse:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Ciclo artificial\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Ciclo natural\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Ciclo natural modificado\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Ciclo con Letrozol\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"No existe el protocolo ideal.\"}]', 'e'),
(38, 'Cual de las afirmaciones es falsa respecto a los fármacos usados en ciclos de FIV', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Los fármacos usados para la estimulación ovárica son FSH y HMG\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Los fármacos usados para inhibir la ovulación son antagonistas de GnRH y progesterona\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Los fármacos usados para gatillar la ovulación son hCG y agonistas de la GnRH\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Los fármacos usados para soporte de fase lútea son citrato de Clomifeno y Letrozol\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Los fármacos usados para mejorar la sincronía folicular previo a la estimulación ovárica son estrógenos y anticonceptivos orales combinados\"}]', 'd'),
(39, 'Cual afirmación es falsa respecto del síndrome de hiperestimulación ovárica en ciclos de FIV\r\n', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"El síndrome de hiperestimulación ovárica temprano se asocia a menos complicaciones que el tardío\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Gatillar con agonistas de la GnRH prácticamente elimina la posibilidad de síndrome de hiperestimulacion ovárica temprano\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"El síndrome de hiperestimulacion ovárica temprano se puede prevenir haciendo transferencia diferida\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Se debe evitar gatillar la ovulación con hCG en pacientes hiperrespondedoras en ciclos de FIV\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"El síndrome de hiperestimulacion tardío es producido por el embarazo\"}]', 'c'),
(40, 'Indique cuál de las siguientes afirmaciones sobre la reacción acrosómica es la correcta:\r\n', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"La unión primaria se da a través del receptor ZP1\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"La interacción de la  unión secundaria se da a través de la glicoproteína ZP3\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Se da la fusión de la membrana plasmática postacrosomal con la membrana plasmática del ovocito y el espermatozoide se  incorpora al citoplasma del ovocito\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"todas las anteriores.\"}]', 'c'),
(41, 'Qué proposición es verdadera  sobre la capacitación espermática durante la fecundación?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Los espermatozoides adquieren movilidad hiperactiva\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Los espermatozoides sufren cambios estructurales y fisiológicos\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Se da el paso de los espermatozoides a través de la corona del ovocito\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"todas las anteriores.\"}]', 'd'),
(42, 'Según las recomendaciones, una pareja debe ser estudiada con Falla Recurrente de Implantación si el porcentaje de su tasa cumulativa de embarazo supera el:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"45%\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"23%\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"60%\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"80%\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"70%\"}]', 'c'),
(43, 'El éxito de la implantación se define como:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Presencia de saco uterino con latido cardiaco.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Nacido vivo.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Presencia de la hormona hCG en sangre ≥5 mUI/mL\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Presencia de saco uterino.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Embarazo mayor a las 20 semanas de gestación.\"}]', 'a'),
(44, '¿Por qué tenemos que esperar 2 horas post desvitrificación para hacer el ICSI?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Es importante para que el ovocito de deshaga de todo el crioprotector.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Los ovocitos necesitan tiempo para adaptarse a la nueva temperatura de 37°C.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"El huso meiótico del ovocito se restablece completamente a las dos horas post descongelación.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Para darle chance a los biólogos de hacer otras cosas.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Porque la zona pelúcida del ovocito tiene que recuperar su osmolaridad.\"}]', 'c'),
(45, 'Con respecto al sistema de AI Violet', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Sirve para predecir el fenotipo y genotipo del embrión antes de la transferencia.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Ayuda a los embriólogos a calcular una mejor tasa de embarazo.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Predice probabilidades de llegar a blastocisto con una determinada cohorte de ovocitos vitrificados.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Predice la probabilidad que tienen algunos ovocitos de ser euploides.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Ninguna de las anteriores.\"}]', 'c'),
(46, '¿En qué tecnología se basa el test ERA de receptividad endometrial?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Proteómica.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Metabolómica.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Lipidómica.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Transcriptómica.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Peptidómica.\"}]', 'd'),
(47, 'Respecto al análisis de receptividad endometrial (ERA)', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Identifica el día óptimo de receptividad.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Usando tecnología NGS, analiza la expresión de 248 genes involucrados en la receptividad endometrial\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"El test ha sido empleado en pacientes que han tenido fallo de implantación con embriones de buena calidad morfológica.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Solo b y c.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas son correctas.\"}]', 'e'),
(48, 'Respecto al ADN libre circulante usado para la prueba de NIPT – NACE, ¿Cuál de los siguientes postulados es CORRECTO?', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"Es exclusivamente de origen fetal\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"Es exclusivamente de origen materno\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"Es exclusivamente de origen placentario\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Es tanto de origen placentario como de origen materno\"}]', 'd'),
(49, 'Sobre la Reproducción Médicamente Asistida en pacientes con infección o enfermedad viral, es correcto lo siguiente:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"La técnica recomendada para procesar el semen en hombres positivos para VIH: Gradiente de densidad seguido por 2 pasos de lavado y finalmente swim-up.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"En las muestras de semen procesadas y lavadas para Hepatitis C no es necesario medir carga viral.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"En pacientes o parejas con Hepatitis B, sólo la causa de infertilidad determinará la técnica específica de tratamiento (IIU, FIV o ICSI).\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"Es recomendado que gametos y embriones potencialmente infecciosos sean criopreservados y almacenados en tanques con nitrógeno líquido solo destinados para ellos, separados de aquellos con un estado viral negativo.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Todas las anteriores.\"}]', 'e'),
(50, 'Respecto a los aspectos inmunológicos espermáticos y embrionarios, señale lo correcto:', '[{\"opcion_letra\":\"a\",\"opcion_texto\":\"La calidad de los blastocistos no tiene un impacto sobre la respuesta inflamatoria en el diálogo embrión-endometrio.\"},{\"opcion_letra\":\"b\",\"opcion_texto\":\"No existen factores solubles secretados por el embrión antes de la implantación.\"},{\"opcion_letra\":\"c\",\"opcion_texto\":\"No hay una necesidad urgente por encontrar biomarcadores embrionarios no invasivos para la selección de embriones con mayor potencial de implantación.\"},{\"opcion_letra\":\"d\",\"opcion_texto\":\"El epidídimo crea un balance inmunológico durante la maduración espermática.\"},{\"opcion_letra\":\"e\",\"opcion_texto\":\"Ninguna de las anteriores.\"}]', 'd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `rptas` text NOT NULL,
  `timer` varchar(20) DEFAULT NULL,
  `respuestas_acertadas` varchar(11) DEFAULT NULL,
  `nota_final` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
