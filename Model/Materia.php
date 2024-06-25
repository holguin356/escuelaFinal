<?php
class Materia {
    private $id;
    private $nombre_materia;
    private $puntaje;

    public function __construct($nombre_materia, $puntaje, $id = null) {
        $this->nombre_materia = $nombre_materia;
        $this->puntaje = $puntaje;

        // Asignar id solo si no es null
        if (!is_null($id)) {
            $this->id = $id;
        }
    }

    public static function consultar($id_estudiante) {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT m.nombre_materia, n.puntaje, n.id
                                       FROM notas_estudiantes_materia n
                                       JOIN materia m ON n.id_materia = m.id
                                       WHERE n.id_estudiante = ?");
        $sentencia->bind_param("i", $id_estudiante);
        $sentencia->execute();
        $resultado = $sentencia->get_result()->fetch_all(MYSQLI_ASSOC);
        $sentencia->close();
        return $resultado;
    }

    public static function consultarUno($id) {
        global $mysqli;
        $sentencia = $mysqli->prepare("SELECT m.nombre_materia, n.puntaje 
                                       FROM notas_estudiantes_materia n
                                       JOIN materia m ON n.id_materia = m.id
                                       WHERE n.id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result()->fetch_all(MYSQLI_ASSOC);
        $sentencia->close();
        return $resultado;
    }

    public static function actualizar($id_nota, $puntaje) {
        global $mysqli;
        $query = "UPDATE notas_estudiantes_materia SET puntaje = ? WHERE id = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("di", $puntaje, $id_nota);
        $stmt->execute();
        $stmt->close();
    }
}
