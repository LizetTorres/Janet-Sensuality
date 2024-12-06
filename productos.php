<?php include("template/cabecera.php"); ?>

<?php
include("administrador/config/db.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaproductos=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
?>
<?php foreach($listaproductos as $producto) { ?>

<div class="col-md-3">  
<div class="card">
<img class="card-img-top" src="./img/<?php echo $producto['imagen']; ?>" alt="">
<div class="card-body">
     <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
     <a name="" id="" class="btn btn-primary" href="https://republicablanca.com/pages/guia-de-tallas-mujer" role="button"> Ver más</a>
</div>
</div>
</div>
<?php } ?>


<?php include("template/pie.php");?>