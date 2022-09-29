window.onscroll = function () {
  myFunction();
};

var wrapper = document.getElementsByClassName("wrapper");
var sticky = wrapper.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    wrapper.classList.add("sticky");
  } else {
    wrapper.classList.remove("sticky");
  }
}
