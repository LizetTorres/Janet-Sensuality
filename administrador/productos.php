<?php include("template/cabecera.php"); ?>

<?php
include("../config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaproductos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>
<?php foreach($listaproductos as $productos ) { ?>

<div class="col-md-3">    
    <div class="card">
        <img class="card-img-top" src="img/sosten1.jpeg" alt="">
        <div class="card-body">
            <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
          <a name="" id="" class="btn btn-primary" href="#" role="button"> Ver más </a>
    
</div>
</div>
</div>


<?php } ?>

<?php include("template/pie.php");?>