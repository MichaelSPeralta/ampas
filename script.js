var x = document.getElementById("myLinks");

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
