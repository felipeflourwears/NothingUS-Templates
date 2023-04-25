const carousel = document.querySelector('.carousel');
const products = Array.from(carousel.children);

const slidesToShow = 3;

let slideWidth = 0;
let currentIndex = 0;

function setSlideWidth() {
  slideWidth = carousel.clientWidth / slidesToShow;
  products.forEach(product => {
    product.style.width = `${slideWidth}px`;
  });
}

function moveToSlide(index) {
  carousel.style.transform = `translateX(-${slideWidth * index}px)`;
  currentIndex = index;
}

function showNextSlide() {
  const nextIndex = currentIndex + slidesToShow;
  if (nextIndex <= products.length) {
    moveToSlide(nextIndex);
  } else {
    moveToSlide(0);
  }
}

function showPrevSlide() {
  const prevIndex = currentIndex - 1; // modificar esta línea
  if (prevIndex >= 0) {
    moveToSlide(prevIndex);
  } else {
    moveToSlide(products.length - slidesToShow);
  }
}

setSlideWidth();

const prevButton = document.querySelector('.carousel__button--prev');
const nextButton = document.querySelector('.carousel__button--next');

prevButton.addEventListener('click', showPrevSlide);
nextButton.addEventListener('click', showNextSlide);