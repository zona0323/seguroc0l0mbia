<?php
	session_start();
	require('../include/link.php');

	if ($con = conectar()) {
		$consulta = sentencia($con, "SELECT * FROM m3us3r WHERE usuario = '" . $_POST['inp-usuario'] . "' AND password = '" . $_POST['inp-pass'] . "'");
		if (contarfilas($consulta)) {
			$_SESSION["usr-new"] = $_POST['inp-usuario'];
			$_SESSION["sesion"] = "OK";
			echo "OK";
		} else {
			echo "NO";
		}
	} else {
		echo "ERR";
	}
?>