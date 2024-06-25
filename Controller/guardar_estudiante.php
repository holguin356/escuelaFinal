<?php
include_once "../Config/conexion.php";
include_once "../Model/Estudiante.php";

$estudiante = new Estudiante($_POST["nombre_estudiante"], $_POST["grupo_estudiante"]);
$estudiante -> insertar();
header("Location: ../");