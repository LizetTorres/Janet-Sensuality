<?php include("template/cabecera.php"); 
//include("productos.php");
?>
    <div class"col-md-12">   
      <div class="jumbotron">
            <h2 class="display-3">Bienvenida <?php echo $nombreUsuario; ?></h2>
       
             <p class="lead">Vamos a administrar nuestros productos en el sitio web</p>
             <hr class="my-2">
             <p>Más información</p>
             <p class="lead">
             <a class="btn btn-primary btn-lg" href="seccion/productos.php" role="button">Administrar productos</a>
             </p>
        </div>
    </div>
    <?php include('template/pie.php'); ?>
