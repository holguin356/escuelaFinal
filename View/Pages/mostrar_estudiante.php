<?php
include_once("../../Config/conexion.php");
include_once("../Templates/cabeza.html");
include_once("../../Model/Estudiante.php");

$estudiantes = Estudiante::consultar();
?>
<div class="row">
    <div class="col-md-12">
        <h1>Listado de Estudiantes</h1>
        <a href="formulario_registro_estudiante.php" class="btn btn-success my-2">Nuevo</a>
    </div>
    <div class="col-md-12">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre Estudiante</th>
      <th scope="col">Grupo</th>
      <th scope="col">Notas</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>

    </tr>
  </thead>
  <tbody>
    
      <?php foreach($estudiantes as $estudiante){?>
      <tr>
        <td><?php echo $estudiante["nombre"] ?></td>
        <td><?php echo $estudiante["grupo"] ?></td>
        <td><a href="notas_estudiante.php?id=<?php echo $estudiante["id"]?>&nombre=<?php echo urlencode($estudiante["nombre"])?>" class="btn btn-primary">notas</a></td>
        <td><a href="formulario_editar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-warning">Editar</a></td>
        <td><a href="../../Controller/eliminar_estudiante.php?id=<?php echo $estudiante["id"] ?>" class="btn btn-danger">Eliminar</a></td>
      </tr>
     <?php } ?>  
  </tbody>
</table>
    </div>
</div>

<?php include_once("../Templates/pie.php"); ?>


