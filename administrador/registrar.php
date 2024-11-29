<?php 

include("./config/db.php"); 



$txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
$txtpassword=(isset($_POST['txtpassword']))?$_POST['txtpassword']:"";
$txtid=(isset($_FILES['txtid']['name']))?$_FILES['txtid']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";



switch($accion){    
case "Agregar":

    $sentenciaSQL= $conexion->prepare("INSERT INTO usuarios (id,password) VALUES (:id,:password);");
    $sentenciaSQL->bindParam(':email',$txtid);
    $sentenciaSQL->bindParam(':password',$txtpassword);
    $sentenciaSQL->execute();

break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janet sensuality</title>
    <style>
        /* ... (estilos anteriores) ... */
        
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: 0 auto;
            align-self: center;
        }
      
  

        input, button {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        button {
            background-color: #ff69b4;
            color: white;
            border: none;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #ff1493;
        }
        
        #message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
        }
        
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <!-- ... (contenido anterior del body) ... -->

    <section id="contacto" class="section">
        <h2>Regístrate</h2>
        <form id="registroForm">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
           
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrarse</button>
        </form>
        <div id="message"></div>
    </section>


</body>
</html>