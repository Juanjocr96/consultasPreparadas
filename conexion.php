<?php
	include ('configdb.php');

	class Conexion{
		function __construct(){
			$this->conexion = new mysqli(SERVIDORBD, USUARIO, PASSWORD, BASEDATOS);
		}

		function consultaPreparada($sql){

			$stmt = $this->conexion->prepare($sql);

			$stmt->bind_param('iss', $id, $nombre, $url);

			$id=5;
			$nombre = 'cartas';
			$url = 'evg.es/cartas';

			$stmt->execute();

			$id=6;
			$nombre = 'TablaPeriodica2';
			$url = 'evg.es/tabla2';

			$stmt->execute();

			$stmt->close();
		}
 }
?>
