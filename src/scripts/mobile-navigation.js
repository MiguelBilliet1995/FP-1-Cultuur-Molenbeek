function toggleNav() {
  var x = document.getElementById("dropdown-content");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
}