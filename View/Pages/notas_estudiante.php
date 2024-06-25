<?php
include_once("../../Config/conexion.php");
include_once("../Templates/cabeza.html");
include_once("../../Model/Materia.php");

$id_estudiante = $_GET['id'];
$nombre_estudiante = urldecode($_GET['nombre']);
$notas = Materia::consultar($id_estudiante);
?>

<div class="row">
    <div class="col-md-12">
        <h1>Notas del Estudiante <?=$nombre_estudiante?></h1>
    </div>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Materia</th>
                    <th scope="col">Nota</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($notas as $nota) { ?>
                    <tr>
                        <td><?php echo $nota["nombre_materia"] ?></td>
                        <td><?php echo $nota["puntaje"] ?></td>
                        <td><a href="formulario_editar_nota.php?id=<?php echo $nota["id"] ?>" class="btn btn-warning">Editar</a></td>
                    </tr>
                <?php } ?>  
            </tbody>
        </table>
        <a href="http://localhost/phpPuro/practicas_estudiante/View/Pages/mostrar_estudiante.php" class="btn btn-danger my-2">Atrás</a>
    </div>
</div>

<?php include_once("../Templates/pie.php"); ?>

