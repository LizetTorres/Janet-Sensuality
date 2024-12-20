<?php 
	session_start();
	if ($_POST) {
		if (($_POST['usuario'] == "janettorres") && ($_POST['contrasenia'] == "blanca")) {
			$_SESSION['usuario']="ok";
			$_SESSION['nombreUsuario']="JanetTorres";
			header('Location:inicio.php');
		}else{
			$mensaje = "el usuario y contraseña son incorrectos";
		}

		
	}

 ?>

<?php include("template/cabecera.php"); ?>
<?php
header (Location:index.php);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Administrador del sitio web</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
   
</head>
<body>
    
    
<div class="container">
     <div class="row">            
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
  <br><br><br/>
           <div class="card">
            <div class="card_header">
           <h2><center>Ingresar</center></h2>
        </div>

        <div class="card-body"> 

       <?php if(isset($mensaje)){ ?>
        <div class="alert alert-danger" role="alert">
        <?php echo $mensaje; ?>
        </div>
        <?php } ?>

              <form method="POST">

              <div class="form-group">
              <label>Usuario</label>
              <input type="text" class="form-control" name="usuario" placeholder="Escribe tu Usuario">
         </div>

         <div class="form-group">
              <label>Contraseña</label>
              <input type="password" class="form-control" name="contraseña" placeholder="Escribe tu Contraseña">
         </div>
       
         <button type="submit" class="btn btn-primary S">Entrar al administrador
       </form>
    
           </div>
      </div>
</div>
</div>
</body>
</html>