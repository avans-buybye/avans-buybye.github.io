/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myIcon() {
  var x = document.getElementById('myTopnav');
  console.log(x.className);

  if (x.className === 'navbtns') {
    x.className += ' responsive';
  } else {
    x.className = 'navbtns';
  }
}
//document.getElementById("contactbutton").onclick = function showContact() {
//document.getElementById("contactpop").style.display = "";
//};

/* Popup onclick button contact */
function showContact() {
  var popup = document.getElementById('contactpop'); // Element ophalen voor in-line style

  // popup.classList.remove("none"); // Dit werkt dus niet, omdat je geen toegang hebt tot de css file

  if (!popup.style.display) {
    popup.style.display = 'initial';
  } else {
    popup.style.removeProperty('display');
  }
}

/* Popup onclick button contact with Class list toggle */
function showContact2() {
  document.getElementById('contactpop').classList.toggle('show-popup');
}
