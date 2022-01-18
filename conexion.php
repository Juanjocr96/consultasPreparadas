<?php
	include ('configdb.php');

	class Conexion{
		function __construct(){
			$this->conexion = new mysqli(SERVIDORBD, USUARIO, PASSWORD, BASEDATOS);
		}

		// function consultaPreparada($sql){
		//
		// 	$stmt = $this->conexion->prepare($sql);
		//
		// 	$stmt->bind_param('iss', $id, $nombre, $url);
		//
		// 	$id=5;
		// 	$nombre = 'cartas';
		// 	$url = 'evg.es/cartas';
		//
		// 	$stmt->execute();
		//
		// 	$id=6;
		// 	$nombre = 'TablaPeriodica2';
		// 	$url = 'evg.es/tabla2';
		//
		// 	$stmt->execute();
		//
		// 	$stmt->close();
		// }

		function consultar($sql){

			$stmt = $this->conexion->prepare($sql);

			$stmt->bind_param('i', $id);

			$array_id = array(2,3,5);

			echo '<table>';
			echo '<tr>
							<th>idMinijuego</th>
							<th>Nombre</th>
							<th>url</th>
						</tr>';

			foreach ($array_id as $id) {
				$stmt->execute();
				$resultado = $stmt->get_result();
				while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
					echo '<tr>
									<td>'.$fila["idMinijuego"].'</td>
									<td>'.$fila["nombre"].'</td>
									<td>'.$fila["url"].'</td>
								</tr>';
			}
		}
		echo '</table>';
	}
}
?>
