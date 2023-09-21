$(document).ready(function () {
  $("#btn-ingresar").click(function (evento) {
    if ($("#inp-usuario").val().length > 0) {
      if ($("#inp-pass").val().length > 0) {
        iniciar_sesion();
      } else {
        alert("ingrese su contraseña");
      }
    } else {
      alert("ingrese un nombre de usuario");
    }
  });
});

function iniciar_sesion() {
  let formulario = new FormData(document.getElementById("formLoginMetronic"));
  // fetch post method php
  fetch("run/sesion.php", {
    method: "POST",
    body: formulario,
  })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        if (data == "OK") {
          window.location.href = "dashboard/";
          return;
        }

        if (data == "NO") {
          alert("Usuario no Registrado");
          $(".mensaje").show();
          $(".mensaje").html("Usuario no Registrado");
          $("#txtUsuario").focus();
        }
    })
    .catch(function (error) {
      console.log(error);
    });
}

function cerrar_sesion() {
  $.post("../run/cerar-sesion.php", function (data) {
    if (data == "OK") window.location.href = "../";
  });
}

function sonido() {
  $.post("../run/sonido.php", function (data) {
    console.log(data);
    if (data == "SI") {
      console.log($("#snd").get(0));
      $("#snd").get(0).loop = true;
      $("#snd").get(0).play();
    }

    if (data == "OTP") {
      $("#sndOTP").get(0).play();
    }

    $("#snd").get(0).loop = false;
  });
}

function load_items() {
  $.post("../run/items.php", { caso: sitP }, function (data) {
    $(".items-trans").html(data);
    sonido();
  });
}
