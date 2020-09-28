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

document.addEventListener("DOMContentLoaded", function () {
  var btn = document.getElementById("acc-btn-1");
  var btn2 = document.getElementById("acc-btn-2");
  var form = document.getElementById("myForm");
  var span = document.getElementsByClassName("close")[0];

  btn.addEventListener("click", function () {
    form.style.display = "block";
  });

  btn2.addEventListener("click", function () {
    form.style.display = "block";
  });

  span.onclick = function () {
    form.style.display = "none";
  };
});
