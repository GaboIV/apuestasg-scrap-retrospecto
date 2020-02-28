
<?php
	date_default_timezone_set('America/Toronto');
	function conectarse() {		
		$servidor = "localhost"; $usuario = "phpmyadmin"; $password = "yosoyyo19"; $bd = "apuestasg";
		$conectar = new mysqli($servidor, $usuario, $password, $bd);
		return $conectar; }
	$conexion = conectarse();

?>