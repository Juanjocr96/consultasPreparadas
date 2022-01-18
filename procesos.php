<?php
	include_once 'conexion.php';
	class Procesos{
		function __construct(){
			$this->conexion = new Conexion;
		}

		/*Consulta preparada*/
    function consulta(){
			$sql = "SELECT * FROM minijuego WHERE idMinijuego = ?";
			$this->conexion->consultar($sql);
	}
}
