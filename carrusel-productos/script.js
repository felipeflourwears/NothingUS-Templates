const carousel = document.querySelector('.carousel');
const products = Array.from(carousel.children);

const slidesToShow = 20;

const maxIndex = products.length - slidesToShow; // Nueva línea agregada

let slideWidth = 0;
let currentIndex = 0;

function setSlideWidth() {
  const carouselWidth = products[0].offsetWidth;
  slideWidth = carouselWidth / slidesToShow;
  products.forEach(product => {
    product.style.width = `${slideWidth}px`;
  });
}

function moveToSlide(index) {
  // Asegurarse de que el índice esté dentro del rango correcto
  currentIndex = index;
  if (currentIndex < 0) {
    currentIndex = 0;
  } else if (currentIndex >= products.length) {
    currentIndex = products.length - 1;
  }
  
  const maxIndex = products.length - slidesToShow;
  if (currentIndex > maxIndex) {
    currentIndex = maxIndex;
  }
  
  carousel.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
}

function showNextSlide() {
  const nextIndex = currentIndex + slidesToShow;
  if (nextIndex <= products.length) {
    moveToSlide(nextIndex);
    if (nextIndex >= products.length) {
      nextButton.setAttribute('disabled', 'disabled');
    }
    prevButton.removeAttribute('disabled');
  } else {
    nextButton.setAttribute('disabled', 'disabled');
  }
}
function showPrevSlide() {
  const prevIndex = currentIndex - slidesToShow;
  if (prevIndex >= 0) {
    moveToSlide(prevIndex);
    if (prevIndex === 0) {
      prevButton.setAttribute('disabled', 'disabled');
    }
    nextButton.removeAttribute('disabled');
  } else {
    prevButton.setAttribute('disabled', 'disabled');
  }
}

setSlideWidth();

const prevButton = document.querySelector('.carousel__button--prev');
const nextButton = document.querySelector('.carousel__button--next');

prevButton.addEventListener('click', showPrevSlide);
nextButton.addEventListener('click', showNextSlide);