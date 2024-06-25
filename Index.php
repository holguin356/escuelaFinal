<?php include "View/Templates/cabeza.html" ?>

<h1 class="text-center mt-5 mb-4">Galería Sencilla</h1>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Aquí se colocan las imágenes de la galería -->
    <div class="col">
        <div class="card">
            <img src="Style/Img/logo.png" class="card-img-top" alt="Imagen 1">
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="Style/Img/imagen2.png" class="card-img-top" alt="Imagen 2">
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="Style/Img/imagen3.jpg" class="card-img-top" alt="Imagen 3">
        </div>
    </div>
    <!-- Agrega más columnas para más imágenes -->
</div>

<?php include "View/Templates/pie.php"?>
