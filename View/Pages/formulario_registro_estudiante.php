<?php
include("../Templates/cabeza.html");
?>
<div class="row">
    <div class="col">
        <h1>Formulario Estudiante</h1>
        <form action="../../Controller/guardar_estudiante.php" method="POST">
        <div class="mb-3">
            <label for="nombre_estudiante" class="form-label">Nombre Estudiante</label>
            <input type="text" class="form-control" id="nombre_estudiante" 
            required autofocus name="nombre_estudiante" placeholder="Jhon Smith">
        </div>
        <div class="mb-3">
            <label for="grupo_estudiante" class="form-label">Grupo Estudiante</label>
            <input type="text" class="form-control" id="grupo_estudiante" 
             name="grupo_estudiante" placeholder="10-A">
        </div>
        <div>
            <button type="submit">ingresar</button>
        </div>
        </form>
    </div>
</div>