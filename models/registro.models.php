<?php

require_once('conexion.php');

class RegistroModel
{

    public static function guardarAlumnoMdl($n, $c)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO alumnos (nombre_completo, nro_colegiatura) VALUES(:nombre_completo, :nro_colegiatura)");
        $stmt->bindParam(":nombre_completo", $n, PDO::PARAM_STR);
        $stmt->bindParam(":nro_colegiatura", $c, PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
        $stmt = "";
    }

    public static function selectAlumnoMdl($n, $c)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM alumnos WHERE nombre_completo=:nombre_completo AND nro_colegiatura=:nro_colegiatura ORDER BY id DESC LIMIT 1");
        $stmt->bindParam(":nombre_completo", $n, PDO::PARAM_STR);
        $stmt->bindParam(":nro_colegiatura", $c, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt->fetch();
        $stmt = "";
    }

    public static function registrarRespuestasVacias($id, $c)
    {

        $stmt = Conexion::conectar()->prepare("INSERT INTO respuestas (id_alumno, rptas) VALUES(:id_alumno, :rptas)");
        $stmt->bindParam(":id_alumno", $id, PDO::PARAM_INT);
        $stmt->bindParam(":rptas", $c, PDO::PARAM_STR);
        return $stmt->execute() ? true : false;
        $stmt = "";
    }

    public static function traerRptasMdl($id)
    {

        $stmt = Conexion::conectar()->prepare("SELECT * FROM respuestas WHERE id_alumno=:id_alumno ORDER BY id LIMIT 1");
        $stmt->bindParam(":id_alumno", $id, PDO::PARAM_INT);
        $stmt -> execute();
        return $stmt->fetch();
        $stmt = "";
    }

    public static function actualizarRptasMdl($id, $id_alumno, $rptas)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE respuestas SET rptas=:rptas WHERE id_alumno=:id_alumno AND id=:id");
        $stmt -> bindParam(":rptas", $rptas, PDO::PARAM_STR);
        $stmt -> bindParam(":id", $id, PDO::PARAM_INT);
        $stmt -> bindParam(":id_alumno", $id_alumno, PDO::PARAM_INT);
        return $stmt->execute() ? true : false;
        $stmt = "";
    }

}
