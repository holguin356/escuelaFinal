<?php
include_once "../Config/conexion.php";
include_once "../Model/Materia.php";

// Verificar que el formulario haya sido enviado por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el id y puntaje de la nota desde el formulario
    $id_nota = $_POST["id"];
    $puntaje = $_POST["puntaje"];

    Materia::actualizar($id_nota, $puntaje);
    echo $id_nota, $puntaje;

    header("Location: ../");
}
?>



