<?php
					$server = "localhost";
					$bd = 'prueba';
					$nombre_usuario = 'root';
					$contrasea = '';
					$conexion = mysqli_connect($server,$nombre_usuario,$contrasea,$bd);
					if (!$conexion) {
						echo "acceso denegado";
					}

					$sql = "SELECT Numero FROM numeros";
					$result = $conexion->query($sql);
					
				    while ($row = $result->fetch_array(MYSQLI_BOTH)){	
				 	
				    	if ($row['Numero'] == "15" OR $row['Numero'] == "30" OR $row['Numero'] =="45" OR $row['Numero'] == "60" OR $row['Numero'] == "75" OR $row['Numero'] == "90") {
				    		echo "FizzBuzz";
				    		echo "<br>";
				    	}
				    	elseif ($row['Numero'] == "5" OR $row['Numero'] == "10" OR $row['Numero'] == "15" OR $row['Numero'] == "20" OR $row['Numero'] == "25" OR $row['Numero'] == "30" OR $row['Numero'] == "35" OR $row['Numero'] == "40" OR $row['Numero'] == "45" OR $row['Numero'] == "50" OR $row['Numero'] == "55" OR $row['Numero'] == "60" OR $row['Numero'] == "65" OR $row['Numero'] == "70" OR $row['Numero'] == "75" OR $row['Numero'] == "80" OR $row['Numero'] == "85" OR $row['Numero'] == "90" OR $row['Numero'] == "95" OR $row['Numero'] == "100") {
				    		echo "Buzz";
				    		echo "<br>";
				    	}
				    	elseif ($row['Numero'] == "3" OR $row['Numero'] == "6" OR $row['Numero'] == "9" OR $row['Numero'] == "12" OR $row['Numero'] == "15" OR $row['Numero'] == "18" OR $row['Numero'] == "21" OR $row['Numero'] == "24" OR $row['Numero'] == "27" OR $row['Numero'] == "30" OR $row['Numero'] == "33" OR $row['Numero'] == "36" OR $row['Numero'] == "39" OR $row['Numero'] == "42" OR $row['Numero'] == "45" OR $row['Numero'] == "48" OR $row['Numero'] == "51" OR $row['Numero'] == "54" OR $row['Numero'] == "57" OR $row['Numero'] == "60" OR $row['Numero'] == "66" OR $row['Numero'] == "69" OR $row['Numero'] == "72" OR $row['Numero'] == "75" OR $row['Numero'] == "78" OR $row['Numero'] == "81" OR $row['Numero'] == "84" OR $row['Numero'] == "87" OR $row['Numero'] == "90" OR $row['Numero'] == "93" OR $row['Numero'] == "96" OR $row['Numero'] == "99") {
				    		echo "Fizz";
				    		echo "<br>";
				    	}
				    	else{
				    		echo $row['Numero'];
				            echo "<br>";
				    	}
				    }
				 

					mysqli_close($conexion);
				?>