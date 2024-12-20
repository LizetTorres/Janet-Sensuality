<?php include("../template/cabecera.php"); ?>
<?php 
	$txtID = (isset($_POST['txtID']))?$_POST['txtID']:"";
	$txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
	$txtImagen = (isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
	$accion = (isset($_POST['accion']))?$_POST['accion']:"";

	include("../config/db.php");
	switch ($accion) {
		case 'Agregar':
			$senteciaSQL = $conexion->prepare("INSERT INTO productos (nombre, imagen) VALUES (:nombre, :imagen);");
			$senteciaSQL->bindParam(':nombre',$txtNombre);

			$fecha = new Datetime();
			$nombreArchivo = ($txtImagen!= "") ? $fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
			$tmpImange = $_FILES["txtImagen"]["tmp_name"];

			if ($tmpImange != "") {
				move_uploaded_file($tmpImange, "../../img/".$nombreArchivo);
			}

			$senteciaSQL->bindParam(':imagen',$nombreArchivo);
			$senteciaSQL->execute(); 
			
			header("Location:productos.php");
			break;
		case 'Modificar':
			//echo "Presionado el boton de Modificar";
			$senteciaSQL = $conexion->prepare("UPDATE productos set nombre=:nombre WHERE id=:id");
			$senteciaSQL->bindParam(':nombre', $txtNombre);
			$senteciaSQL->bindParam(':id', $txtID);
			$senteciaSQL->execute();

			if ($txtImagen != "") {
				$fecha = new Datetime();
				$nombreArchivo = ($txtImagen!= "") ? $fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
				$tmpImange=$_FILES["txtImagen"]["tmp_name"];
				move_uploaded_file($tmpImange,"../../img/".$nombreArchivo);

				$senteciaSQL = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id");
				$senteciaSQL->bindParam(':id', $txtID);
				$senteciaSQL->execute();
				$producto = $senteciaSQL->fetch(PDO::FETCH_LAZY);
				if (isset($producto["imagen"]) && ($producto["imagen"] != "imagen.jpg")) {
					
					if (file_exists("../../img/".$producto["imagen"])) {
						
						unlink("../../img/".$producto["imagen"]);
					}
				}

				$senteciaSQL = $conexion->prepare("UPDATE productos SET imagen=:imagen WHERE id=:id");
				$senteciaSQL->bindParam(':imagen',$nombreArchivo);
				$senteciaSQL->bindParam(':id', $txtID);
				$senteciaSQL->execute();
			}
			header("Location:productos.php");
			break;

		case 'Cancelar':
			header("Location:productos.php");
			break;
		case 'Seleccionar':
			//echo "Presionado el boton de Seleccionar";
			$senteciaSQL = $conexion->prepare("SELECT * FROM productos WHERE id=:id");
			$senteciaSQL->bindParam(':id', $txtID);
			$senteciaSQL->execute();
			$producto = $senteciaSQL->fetch(PDO::FETCH_LAZY);

			$txtNombre = $producto['nombre'];
			$txtImagen = $producto['imagen'];
			break;

		case 'Borrar':
			//echo "Presionado el boton de Borrar";
			$senteciaSQL = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id");
			$senteciaSQL->bindParam(':id', $txtID);
			$senteciaSQL->execute();
			$libro = $senteciaSQL->fetch(PDO::FETCH_LAZY);
			if (isset($libro["imagen"]) && ($producto["imagen"] != "imagen.jpg")) {
				if (file_exists("../../img/".$producto["imagen"])) {
					
					unlink("../../img/".$producto["imagen"]);
				}
			}
			$senteciaSQL = $conexion->prepare("DELETE from productos WHERE id=:id");
			$senteciaSQL->bindParam(':id',$txtID);
			$senteciaSQL->execute();
			header("Location:productos.php");
			break;
	}

	$senteciaSQL = $conexion->prepare("SELECT * FROM productos");
	$senteciaSQL->execute();
	$listarProductos = $senteciaSQL->fetchAll(PDO::FETCH_ASSOC);
 ?>
<div class="col-md-5">
	<div class="card">
	  <div class="card-header">
	    Datos del producto
	  </div>
	  <div class="card-body">
	  	<form method="POST" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="txtID"></label>
		    <input type="hidden" required readonly class="form-control" value="<?php echo $txtID; ?>" id="txtID" name="txtID" placeholder="">
		  </div>

		  <div class="form-group">
		    <label for="txtNombre">Nombre: </label>
		    <input type="text" required class="form-control" value="<?php echo $txtNombre; ?>" id="txtNombre" name="txtNombre" placeholder="Nombre">
		  </div>
          <br/> <br/>
		  <div class="form-group">
		    <label for="txtImagen">Imagen: </label>

		    <br/>
		    <?php if ($txtImagen != "") { ?>
		    	<img class="img thumbnail rounded" src="../../img/<?php echo $txtImagen; ?>" width="50">
		    <?php } ?>

		    <input type="file"  class="form-control" id="txtImagen" name="txtImagen" placeholder="ID">
		  </div>
	  
		  <div class="btn-group" role="group" aria-label="">
		    <button type="submit" name="accion" <?php echo ($accion == "Seleccionar") ? "disabled" :""; ?> value="Agregar" class="btn btn-success">Agregar</button>
		    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" :""; ?> value="Modificar" class="btn btn-warning">Modificar</button>
		    <button type="submit" name="accion" <?php echo ($accion != "Seleccionar") ? "disabled" :""; ?> value="Cancelar" class="btn btn-info">Cancelar</button>
		  </div>
		</form>
	  </div>
	  
	</div>

	
</div>
<div class="col-md-7">

	<div class="table">
		<table class="table table-striped">
		
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Imagen</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach ($listarProductos as $producto) { ?>
		    <tr>
		      <th scope="row"><?php echo $producto['id']; ?></th>
		      <td><?php echo $producto['nombre']; ?></td>
		      <td>
		      	<img class="img thumbnail rounded" src="../../img/<?php echo $producto['imagen']; ?>" width="50">
		      	</td>
		      <td>
		      <form method="POST">
		      	<input type="hidden" name="txtID" id="txtID" value="<?php echo $producto['id']; ?>"/>
		      	<input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
		      	<input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
		      </form>
		  	  </td>
		    </tr>
		    <?php } ?>
		    
		  </tbody>
		</table>

	</div>
</div>

<?php include("../template/pie.php"); ?>