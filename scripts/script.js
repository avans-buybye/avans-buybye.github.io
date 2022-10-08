/* responsive menu voor kleine schermen */
function myIcon() {
  var x = document.getElementById("myTopnav");
  console.log(x.className);

  if (x.className === "navbtns") {
    x.className += " responsive";
  } else {
    x.className = "navbtns";
  }
}

/* Popup onclick button contact */
function showContact() {
  var popup = document.getElementById("contactpop"); // Element ophalen voor in-line style

  if (!popup.style.display) {
    popup.style.display = "initial";
  } else {
    popup.style.removeProperty("display");
  }
}
