<?php
session_start();
    if(!isset($_SESSION['usuario'])){
       // header("Location:../index.php");
    }else{

        if($_SESSION['usuario']=="ok"){
           $nombreUsuario=$_SESSION["nombreUsuario"]; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensuality Janet</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>

<?php $url="http://".$_SERVER['HTTP_HOST']."/Landingpage" ?>

<nav class="navbar navbar-expand navbar-light bg-light">
<div class="nav navbar-nav">
    <a class="nav-item nav-link active" href="#"> Administrador del sitio web <span class="sr-only"></span></a>
    <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">Inicio</a>
    <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Productos</a>
    <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar</a>
    <a class="nav-item nav-link" href="<?php echo $url;?>">Ver pagina</a> 
</div>
</nav>

<div class="container">
    <br/>
    <div class="row">