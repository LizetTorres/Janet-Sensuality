<?php include("template/cabecera.php"); ?>
<?php include("administrador/config/db.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM productos");
$sentenciaSQL->execute();
$listaProductos=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
?>

<?php foreach ($listarProductos as $producto ) { ?>

<div class="col-md-3">  
      <div class="card">
      <img class="card-img-top" src="<?php echo "img/".$producto['imagen']; ?>" alt="">
<div class="card-body">
     <h4 class="card-title"><?php echo $producto['nombre']; ?></h4>
     <a name="" id="" href="https://www.google.com/imgres?q=tallas%20de%20brasier%20en%20mexico%20y%20usa&imgurl=https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0335%2F7474%2F8296%2Ffiles%2F2_480x480.jpg%3Fv%3D1626376179&imgrefurl=https%3A%2F%2Fmarel.com.mx%2Fpages%2Ftalla-arriba&docid=e30GrIu9lYti5M&tbnid=I31ENgtcewcWEM&vet=12ahUKEwitksv-lKmKAxUY38kDHTNFKoQQM3oECGYQAA..i&w=480&h=214&hcb=2&ved=2ahUKEwitksv-lKmKAxUY38kDHTNFKoQQM3oECGYQAA" 
     class="btn btn-primary" role="button"> Ver más</a>
          </div>
        </div>
     </div>
<?php } ?>


<?php include("template/pie.php");?>