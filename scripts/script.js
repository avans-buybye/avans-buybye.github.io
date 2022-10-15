/* responsive menu voor kleine schermen */
function myIcon() {
  var x = document.getElementById("myTopnav");
  console.log(x.className);

  if (x.className === "navbtns") {
    x.className += " responsive";
    var y = document.getElementById("wrapperpad");
    y.style.paddingBottom = "22px";
  } else {
    x.className = "navbtns";
    var y = document.getElementById("wrapperpad");
    y.style.paddingBottom = "10px";
  }
}

/* Popup onclick button contact */
function showContact() {
  var popup = document.getElementsById("popup"); // Element ophalen voor in-line style

  if (!popup.style.display) {
    popup.style.display = "initial";
  } else {
    popup.style.removeProperty("display");
  }
}
