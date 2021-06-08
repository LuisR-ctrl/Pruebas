<?php
					$server = "localhost";
					$bd = 'bd1';
					$nombre_usuario = 'root';
					$contrasea = '';
					$conexion = mysqli_connect($server,$nombre_usuario,$contrasea,$bd);
					if (!$conexion) {
						echo "acceso denegado";
					}

					$sql = "SELECT * FROM clientes";
					$result = $conexion->query($sql);
					
				    while ($row = $result->fetch_array(MYSQLI_BOTH)){	
				 	
				    	
				    		echo $row['nombre'];
				            echo "<br>";
				    	
				    }
				 

					mysqli_close($conexion);
				?>