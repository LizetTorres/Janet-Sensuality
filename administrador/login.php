<?php

        session_start();
        
     
include("../config/db.php");
   
      

        // Verificar si se ha enviado el usuario y la contraseña
        if (isset($_POST['id']) && isset($_POST['password'])) {
            $password = $_POST['password'];

            //Preparar la consulta para buscar el usuario y verificar su rol

            $sql = "SELECT rol FROM usuarios WHERE id = :id AND password = :password";
            $stmt = $conexion->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':password', $password);
            $stmt->is_execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user['rol'] == 'admin') {
                // Redirigir a la vista del administrador
                header("Location:administrador/productos.php");
            }
            }else {

              // Enviar mensaje de error
              echo "Usuario o contreaseña incorrectos, intente de nuevol";

            }
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
    <div class="container-login-info-fluid">
        <div class="container" style="font: size 1em">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-intern-box" style="opacity: 1;">
                  <p style="text-align: center">
                <img class)="login-logo" src="img/logojanet.png"/></p>
    <form role="form" name="frm" id="frm" method="POST" acion="login.php">
        <div class="form-group">
            <label for="id_usuario">Usuario</label>
            <input type="email" class="form-control" id="id_usuario" name"id_usuario" required>
        </div>

        <div class="form-group"
        <label for="password">Contraseña</label>
        <input type="text" class="form-control" id="password" name"password" required>
        </div>
        <div class="form-group" style="text-align: center">
            <button id="btn_login" class="btn btn-primary btn-sm" style="text-decoration: none;
             background-color: #7FC41C; border-color: #7FC41C type="submit">Iniciar sesion</button>

        </div>
            </div>
             </div>
                 </div>
                     </div>
                       </div>
   
       
 
 </body>          
</form>
</html>
