function myFunction() {
  var x = document.getElementById("signin");
  var y = document.getElementById("signup");

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