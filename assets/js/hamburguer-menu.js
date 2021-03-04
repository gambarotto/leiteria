const hamburguer = document.querySelector('.hamburguer-menu');
const primaryMenu = document.querySelector('.primary_menu');
const itemsM = document.querySelectorAll('#menu-menu-principal a');
const animationClassMenu = 'active';
let menuClicked = false;

hamburguer.addEventListener('click', toggleMenu)
itemsM.forEach(a => a.addEventListener('click', closeHamburguerMenu));

function toggleMenu() {
    return !menuClicked ? toggleAdd() : toggleRemove();
}

function closeHamburguerMenu() {
    const classes = hamburguer.classList.value;
    if (classes.indexOf(animationClassMenu) > -1) {
        toggleRemove();
    }
}

function toggleAdd() {
    hamburguer.classList.add(animationClassMenu);
    primaryMenu.classList.add(animationClassMenu);
    menuClicked = true;
}

function toggleRemove() {
    hamburguer.classList.remove(animationClassMenu);
    primaryMenu.classList.remove(animationClassMenu);
    menuClicked = false;
}