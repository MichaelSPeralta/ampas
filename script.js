var x = document.getElementById("myLinks");

function menuFunction() {
  var x = document.getElementById("myLinks");
  var a = document.getElementById("myHeader");
  if (x.style.display === "block") {
    x.style.display = "none";
    a.style.boxShadow = "0px 3px 11px rgba(0, 0, 0, 0.25)";
    a.style.height = "40px";
  } else {
    x.style.display = "block";
    a.style.boxShadow = "none";
    a.style.height = "auto";
  }
}
