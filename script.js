function menuFunction() {
  var x = document.getElementById("myLinks");
  var a = document.getElementById("myHeader");
  if (x.style.display === "block") {
    x.style.display = "none";
    // a.style.height = "40px";
  } else {
    x.style.display = "block";
    a.style.height = "auto";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  var btn = document.getElementById("acc-btn-1");
  // var btn2 = document.getElementById("acc-btn-2");
  var form = document.getElementById("myForm");
  var nombre = document.getElementById("nombre");
  var apellido = document.getElementById("apellido");
  var span = document.getElementsByClassName("close")[0];

  // Acciones con el formulario
  // Abrir formulario con boton Contactar
  btn.addEventListener("click", function () {
    form.style.display = "block";
  });

  // Abrir formulario con boton Saber Mas
  // btn2.addEventListener("click", function () {
  //   form.style.display = "block";
  // });

  // Cerrar
  span.onclick = function () {
    form.style.display = "none";
  };

  // Cerrar presionando en cualquier lado fuera del form
  window.onclick = function (event) {
    if (event.target == form) {
      form.style.display = "none";
    }
  };

  // apellido.onkeyup = function () {
  //   if (apellido == Number) {
  //     var valor = apellido.value;
  //     console.log(valor);
  //   }
  // };
});
