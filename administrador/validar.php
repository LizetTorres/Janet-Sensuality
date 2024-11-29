<?php
  
  include("../config/db.php"); 
    session_start();

    if(!isset($_POST['username'],$_POST['password'])){

        // sino hay datos muestra error y redirecciona al index.php

        //header('location: index.php');
    }

    // evitar que haga una inyeccion de datos sql

    if($stmt = $conexion -> prepare('SELECT id, password FROM usuarios WHERE username = ?')){

        // parametros de enlace de las cadena (s)
        $stmt -> bind_param('s',$_POST['username']);
        $stmt -> execute();
    }
    // validacion si lo que ingreso coincide con lo que hay en la base de datos

    $stmt -> store_result();
    if($stmt -> num_rows > 0){
       $stmt -> bind_result($id,$password);
       $stmt -> fetch();

       // se confirma que la cuenta existe y se valida la contraseña

       if($_POST['password']=== $password){

        session_regenerate_id();

        $_SESSION['loggedin'] = true;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header('location: index.php');
       }
    }else{
      echo  "usuario incorrecto";
     // header('location: index.php');
      }
    $stmt -> close();
?>

