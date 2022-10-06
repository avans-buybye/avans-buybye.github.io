/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myIcon() {
  var x = document.getElementById("myTopnav");
  console.log(x.className);

  if (x.className === "navbtns") {
    x.className += " responsive";
  } else {
    x.className = "navbtns";
  }
}
//document.getElementById("contactbutton").onclick = function showContact() {
//document.getElementById("contactpop").style.display = "";
//};
/* popup onclick button contact*/
function showContact() {
  var popup = document.getElementById("contactpop");
  popup.classList.remove("none");
}

/*const openBtn = document.getElementById("contactbutton");

openBtn.addEventListener("click", () => {
  contactpop.classList.remove("none");
});

setTimeout(() => {
  modalMenu.classList.add("show");
}, 3000);

modalBtn.addEventListener("click", () => {
  modalMenu.classList.remove("show");
});*/
