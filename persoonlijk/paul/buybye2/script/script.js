function toggleMainMenu() {
    let element = document.getElementById('nav-main-menu');

    if (!element.style.display) {
        element.style.display = 'initial';
    } else {
        element.style.removeProperty('display');
    }
}