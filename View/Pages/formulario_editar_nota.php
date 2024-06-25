<?php
include_once("../../Config/conexion.php");
include_once("../Templates/cabeza.html");
include_once("../../Model/Materia.php");

$id_nota = $_GET['id'];
$notas = Materia::consultarUno($id_nota);
?>

<div class="row">
    <div class="col-md-12">

        <form action="../../Controller/editar_nota.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $nota['id'] ?>"/>
            <?php foreach($notas as $nota) { ?>
            <h1>Editar Nota</h1>
            <div class="mb-3">
                <label for="puntaje" class="form-label">Nota</label>
                <input type="decimal" class="form-control" id="puntaje" value="<?php echo $nota['puntaje'] ?>" name="puntaje">
            </div>
            <div>
            <?php } ?>  
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>

<?php include_once("../Templates/pie.php"); ?>

