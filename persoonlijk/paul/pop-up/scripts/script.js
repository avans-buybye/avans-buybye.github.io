/* Popup Contact onclick */
function showContact() {
  var element = document.getElementById('overlay-contact');

  if (!element.style.display) {
    element.style.display = 'initial';
  } else {
    element.style.removeProperty('display');
  }
}
