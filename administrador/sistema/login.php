<?php
session_start();

    include("./config/db.php"); 
    if( !isset($_SESSION['usuario_id'])){
        header("Location:login.html");
        exit();
    }
    ?>

    <!DOCTYPE html>
    <bs5-1></bs5-1>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>iss$_SESSION['usuario']=$lista_usuario['usuario'];