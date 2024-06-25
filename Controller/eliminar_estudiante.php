<?php
include_once "../Config/conexion.php";
include_once "../Model/Estudiante.php";
Estudiante::eliminar($_GET["id"]);
header("Location: ../");