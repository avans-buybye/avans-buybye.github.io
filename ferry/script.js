/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myIcon() {
  var x = document.getElementById("myTopnav");
  if (x.className === "navbtns") {
    x.className += " responsive";
  } else {
    x.className = "navbtns";
  }
}
