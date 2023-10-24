const programSlider = document.querySelector('#slider');

const cards = document.getElementsByClassName('card');
const lastCardIdx = cards.length - 1;
const cardSize = 640.81;

let slideIndex = 0;

function plusSlide(n) {
  // 616.81px + 24px (gap)
  slideIndex += n;

  if (slideIndex <= 0) slideIndex = 0;
  else if (slideIndex >= lastCardIdx) slideIndex = lastCardIdx;

  let x = slideIndex * -cardSize;
  programSlider.style.transform = `translateX(${x}px)`;
}
