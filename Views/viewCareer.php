<?php 

	class viewCareer implements viewStructure{
		public function showAdd(){
			echo"<form action='Controllers/controllerSaveCareer.php' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='action'>Acción</label>";
				echo"<br>";
				echo "<input id='action' type='text' name='action' value='INGRESO' readonly>";
				echo"<br><br>";

				echo "<label for='nombre_carrera'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_carrera' type='text' name='nombre_carrera'  required>";

				echo "<input type='submit' value='ENVIAR' id='enviar'>";
			echo"</form>";
		}
		public function showDelete($result){
			echo "<table>";
			echo"<br><br><br><br>";
			while($key = $result->fetch_row()){
				echo "<tr>";
					echo "<td>";
						echo "<img src='img/icon/delete.svg'>";
					echo "</td>";
					echo "<td>";
						echo $key[0];
					echo "</td>";
					echo "<td>";
						echo $key[1];
					echo "</td>";
				echo "</tr>";
			}
			echo "</table>";

			echo"<br><br>";
			echo"<button type='button'>Borrar</button>";
 			echo"<button type='button'>Cancelar</button>";
		}
		public function showUpdate($arrayData){
			echo"<form action='Controllers/controllerSaveCareer.php' method='POST'>";
				echo"<br><br><br><br>";

				echo "<label for='action'>Acción</label>";
				echo"<br>";
				echo "<input id='action' type='text' name='action' value='ACTUALIZAR' readonly>";
				echo"<br><br>";

				echo "<input type='text' id='privado' name='key' value='".$arrayData[0]."' readonly>";
				echo"<br>";

				echo "<label for='nombre_carrera'>Nombre</label>";
				echo"<br>";
				echo "<input id='nombre_carrera' type='text' name='nombre_carrera'  value=".$arrayData[1]." required>";

				echo"<br><br>";
				echo "<input type='submit' value='ACTUALIZAR' id='enviar'>";
				echo "<input type='reset'>";
			echo"</form>";
		}
		public function showView($result){
			$count=0;
			echo "<table>";
			echo"<br><br><br><br>";
			while($key = $result->fetch_row()){
				echo "<tr>";
					echo "<td>";
						echo "<input type='checkbox' name='check' id='_".$key[0]."'/>";
					echo "</td>";		
					echo "<td>";
						echo $key[0];
					echo "</td>";
					echo "<td>";
						echo $key[1];
					echo "</td>";
				echo "</tr>";
				$count++;
			}
			echo "</table>";
			echo "<div id='total'>".$count
			."</div>";
		}
	}
 ?>