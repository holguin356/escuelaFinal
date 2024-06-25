<?php
include_once("../Templates/cabeza.html");
include_once("../../Config/conexion.php");
include_once("../../Model/estudiante.php");
$estudiante = Estudiante::obtenerUno($_GET["id"]);
?>
<div class="row">
    <div class="col">
        <h1>Editar Estudiante</h1>
        <form action="../../Controller/editar_estudiante.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>"/>
        <div class="mb-3">
            <label for="nombre_estudiante" class="form-label">Nombre Estudiante</label>
            <input type="text" class="form-control" id="nombre_estudiante" value="<?php echo $estudiante->nombre ?>"
            required autofocus name="nombre_estudiante" placeholder="Jhon Smith">
        </div>
        <div class="mb-3">
            <label for="grupo_estudiante" class="form-label">Grupo Estudiante</label>
            <input type="text" class="form-control" id="grupo_estudiante" value="<?php echo $estudiante->grupo ?>"
             name="grupo_estudiante" placeholder="10-A">
        </div>
        <div>
            <button type="submit">Actualizar</button>
        </div>
        </form>
    </div>
</div>