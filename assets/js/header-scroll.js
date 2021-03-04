const header = document.querySelector('.container-all-menu');
const itemsMenu = document.querySelectorAll('#menu-menu-principal a');
const classTransparentMenu = 'container-all-menu-scroll';
const classTransparentMenuItem = 'primary_menu-item-scroll';
let scrolling = false;
let timer = null;
itemsMenu.forEach(a => a.addEventListener('click', scrollToId));

function scrollToId(event) {
    event.preventDefault();
    const element = event.target;
    const id = element.getAttribute('href');
    const to = document.querySelector(id).offsetTop - 100;

    window.scroll({
        top: to,
        behavior: 'smooth',
    })
}

function headerTransparent() {
    if (document.documentElement.scrollTop && !scrolling) {
        header.classList.add(classTransparentMenu);
        itemsMenu.forEach(a => a.classList.add(classTransparentMenuItem))
        scrolling = true;
    } else if (!document.documentElement.scrollTop && scrolling) {
        header.classList.remove(classTransparentMenu);
        itemsMenu.forEach(a => a.classList.remove(classTransparentMenuItem))
        scrolling = false;
    }
}
window.addEventListener('scroll', function() {
    if (timer) {
        clearTimeout(timer);
    }
    timer = setTimeout(function() {
        headerTransparent();
    }, 30);
}, false);