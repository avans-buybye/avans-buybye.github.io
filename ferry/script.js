/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
const klik = document
  .getElementsByClassName("fa fa-bars")
  .addEventListener("click", myFunction);

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navflex") {
    x.className += " responsive";
  } else {
    x.className = "navflex";
  }
}
