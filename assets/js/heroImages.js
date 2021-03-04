
const $divBackgrounds = document.querySelectorAll('.hero-image');
let max = $divBackgrounds.length;
let index = 0;

function start() {
  const divs = Array.from($divBackgrounds);
  divs[0].classList.add('dlc-selected')
  if (divs.length === 0) return;
  setInterval(function () { carousel(divs) }, 4500);
}

function carousel(arrayDivs) {
  arrayDivs[index].classList.remove('dlc-selected');
  index++;
  if (index >= max) {
    index = 0;
  }
  arrayDivs[index].classList.add('dlc-selected');
}

window.addEventListener('load', start);
