<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <title>Administrador</title>
    
</head>
<body>
    
    

        
        <div class="col-md-4">
  
           <div class="card">
            <div class="card_header">
           
        </div>

        <div class="card-body"> 

       <?php 
       if(isset($mensaje)){ ?>
        <div class="alert alert-danger" role="alert">
         <?php echo $mensaje; ?>
        </div>
        <?php } ?>

              <form method="POST">

              <div class="form-group">
              <label>Usuario</label>
              <input type="text" class="form-control" name="usuario" placeholder="Email">
         </div>

         <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="usuario" placeholder="Contraseña">
         </div>
       
         <button type="submit" class="btn btn-primary">Entrar al administrador
       </form>
    
  </div>

</body>
</html>