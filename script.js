function menuFunction() {
  var x = document.getElementById("myLinks");
  var a = document.getElementById("myHeader");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.height = "40px";
  } else {
    x.style.display = "block";
    a.style.height = "auto";
  }
}

var modal = document.getElementById("myModal");
var btn = document.getElementById("btn-form");
var span = document.getElementsByClassName("close")[0];

btn.addEventListener('submit',function(){
  modal.style.display = 'block';

});

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


$('#my-Form').submit(function(e){
  const datos = {
    nom: $('#nombre').val(),
    ape: $('#apellido').val(),
    num: $('#numero').val(),
    mail: $('#email').val(),
    seg: $('#seguro').val()



  };

  $.post("http://localhost/ampas/action.php", datos, function(respuesta){
    console.log(respuesta);

  }); 
  e.preventDefault();

});


