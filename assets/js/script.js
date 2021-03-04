const target = document.querySelectorAll('[data-animate');
const animationClassElement = 'animate';

const debounce = function(func, wait, immediate) {
    let timeout;
    return function(...args) {
        const context = this;
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

function animateElement() {
    target.forEach(function(element) {
        const offsetYElement = element.getBoundingClientRect().top + 50;
        if (offsetYElement < window.innerHeight) {
            element.classList.add(animationClassElement);
        } else {
            element.classList.remove(animationClassElement);
        }
    })
}
animateElement();
if (target.length > 0) {
    window.addEventListener('scroll', debounce(function() {
        animateElement();
    }, 100));

}