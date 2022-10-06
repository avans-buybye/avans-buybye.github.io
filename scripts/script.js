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
/* popup onclick button contact*/
/*document.getElementById("contactbutton").click(function () {
  this.speedoPopup({
    width: 550,
    height: 265,
    useFrame: TRUE,
    href: "#contactpop",
  });
});*/

const openBtn = document.getElementById("contactbutton");

openBtn.addEventListener("click", () => {
  contactpop.classList.remove("none");
});

/*setTimeout(() => {
  modalMenu.classList.add("show");
}, 3000);

modalBtn.addEventListener("click", () => {
  modalMenu.classList.remove("show");
});*/
