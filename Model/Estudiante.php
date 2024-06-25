<?php
    class Estudiante {
        private $id;
        private $nombre;
        private $grupo;

        public function __construct(string $nombre, string $grupo, $id = null) {
            $this->nombre = $nombre;
            $this->grupo = $grupo;
            if ($id) {
                $this->id = $id;
            }
        }

        public function insertar() {
            global $mysqli;
            $sentencia = $mysqli->prepare("INSERT INTO estudiante (nombre, grupo) VALUES (?, ?)");
            if ($sentencia === false) {
                die('Error en la preparación: ' . $mysqli->error);
            }

            $sentencia->bind_param("ss", $this->nombre, $this->grupo);
            $sentencia->execute();
            $sentencia->close();
        }
        public static function consultar(){
            global $mysqli;
            $sentencia = $mysqli->query("SELECT * FROM estudiante");
            $resultado = $sentencia->fetch_all(MYSQLI_ASSOC);
            $sentencia->close();
                return $resultado; 
        }
        public static function obtenerUno($id){
            global $mysqli;
            $sentencia = $mysqli->prepare("SELECT * FROM estudiante WHERE id = ?");
            $sentencia->bind_param("i",$id);
            $sentencia->execute();
            $resultado = $sentencia->get_result();
            $sentencia->close();
                return $resultado->fetch_object(); 
        }
        public function actualizar() {
            global $mysqli;
            $sentencia = $mysqli->prepare("UPDATE estudiante SET  nombre = ?, grupo = ? WHERE id = ?");
            $sentencia->bind_param("ssi", $this->nombre, $this->grupo, $this->id);
            $sentencia->execute();
            $sentencia->close();
        }

        public static function eliminar($id) {
            global $mysqli;
            $sentencia = $mysqli->prepare("DELETE FROM estudiante WHERE id = ?");
            $sentencia->bind_param("i", $id);
            $sentencia->execute();
            $sentencia->close();
        }
        
    }
