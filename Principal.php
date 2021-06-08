<?php
$server = "localhost";
$bd = 'bd1';
$nombre_usuario = 'root';
$contrasea = '';
$conexion = mysqli_connect($server,$nombre_usuario,$contrasea,$bd);
if (!$conexion) {
	echo "acceso denegado";
}
?>
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<head>
	<title>PRINCIPAL</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="styles/Principal.css">
	<script src="validar.js"></script>
</head>

<body>
	<div class="jumbotron text-center"id="id0">
	  <img src="https://image.freepik.com/vector-gratis/banner-retro-tienda-discos-vinilo_12454-2142.jpg" style="width: 175px"class="img-fluid img-responsive" alt="Imagen">
	  <hr id="id0-1" class="my-4">
	</div>
	<div class="container" id="id1">

	 

	  <div class="row justify-content-md-center">
	    <div class="col col-lg-2">
	      <br>
	    </div>
	  </div>

	  <br>
  	<div class="row justify-content-md-center">
  	<div class="card">
	  <div class="card-header" >
	    Compra
	  </div>
	  <div class="card-body">
	    <form name="Principal" method="post" action="#" onsubmit="return validar();">
		  <div class="form-group">
		    <label for="exampleInputPassword1">Selecciona tu opci&oacute;n a pedir</label>


		    <select class="form-control " id="nombre" name="nombre">
		    	<option value=""></option>
		      <?php 
		      $server = "localhost";
					$bd = 'bd1';
					$nombre_usuario = 'root';
					$contrasea = '';
					$conexion = mysqli_connect($server,$nombre_usuario,$contrasea,$bd);
					if (!$conexion) {
						echo "acceso denegado";
					}

				  $sql = "SELECT id, nombre FROM clientes";

				  $query = $conexion -> query ($sql);

				  while($valores = mysqli_fetch_array($query)){
				     echo "<option value='".$valores['id']."'>".$valores['nombre']."</option>";
				  }

				?>
			</select>



			<input type="date" id="calendario" min="2021-01-01" max="2030-12-31">



		<select class="form-control " id="productos" name="productos">
			<option value=""></option>
		     <?php 
		     $server = "localhost";
					$bd = 'bd1';
					$nombre_usuario = 'root';
					$contrasea = '';
					$conexion = mysqli_connect($server,$nombre_usuario,$contrasea,$bd);
					if (!$conexion) {
						echo "acceso denegado";
					}

				 $sql = "SELECT id_producto, nombre, Precio FROM productos";

				 $query = $conexion -> query ($sql);

				 while($valores = mysqli_fetch_array($query)){
				    echo "<option value='".$valores['id_producto']."'>".$valores['nombre']."$".$valores['Precio']."</option>";
				 }

				?>
			</select>


			<select class="form-control " id="cantidad" name="cantidad">
			  <option value=""></option>
		      <option value="1">1</option>
		      <option value="3">3</option>
		      <option value="5" >5</option>
		      <option value="10" >10</option>
			</select>




		  </div>
		  <button type="submit" class="btn btn-primary">PEDIR</button>
		</form>
	  </div>
	</div>
	</div>
	</div><br><br>
	<div id="id3">
		<p></p>
	</div>
</body>
</html>
