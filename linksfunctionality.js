function myFunction() {
  var y = document.getElementById("signin");
  var x = document.getElementById("signup");

  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";

  } else {
    x.style.display = "none";
    y.style.display = "block";

  }
}
function myFunction2() {
location.replace("logout.php")
}