<?php
	// Include the env.php file
	require_once 'env.php';

	$servername = $env["DB_HOST"];
	$database = $env["DB_NAME"];
	$username = $env["DB_USER"];
	$password = $env["DB_PASS"];
	$port = $env["DB_PORT"];

	$destino = "https://www.birdi3fy.com/";
	$inicio = "/mua/USER/sics/83N177N3A0C_I322NrxStPNTQ0CAw0M2342LI1cgz0tvUwkpiAJKG533/30/no-bakc-buton/";

	function conectar()
	{
		$conn = mysqli_connect($GLOBALS["servername"], $GLOBALS["username"], $GLOBALS["password"], $GLOBALS["database"], $GLOBALS["port"]);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		return $conn;
	}

	function sentencia($conn, $sql)
	{
		$rst = mysqli_query($conn, $sql);
		return $rst;
	}

	function contarfilas($rst)
	{
		$nRows = mysqli_num_rows($rst);
		return $nRows;
	}

	function traerdatos($rst)
	{
		$filas = mysqli_fetch_assoc($rst);
		return $filas;
	}

	function desconectar($conn)
	{
		mysqli_close($conn);
	}
?>
