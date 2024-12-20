<?php
$host="sql310.infinityfree.com";
$bd="if0_37630106_pagina";
$usuario="if0_37630106";
$contraseña="xVBoFmXlJUGK";

try {
         $conexion = new PDO("mysql:host=$host; dbname=$bd",$usuario,$contraseña );
         
         if ($conexion) {
			echo "<script>console.log('conectado al sistema')</script>";
		}
		
	} catch (Exception $ex) {
		echo $ex->getMessage();	
	}
 ?>