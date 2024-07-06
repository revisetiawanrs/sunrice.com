let slideIndex = 0;
const slides = document.querySelectorAll('.slides img');
const indicators = document.querySelectorAll('.indicators span');

function showSlides() {
    slides.forEach((slide, index) => {
        slide.style.display = 'none';
        indicators[index].classList.remove('active');
    });

    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = 'block';
    indicators[slideIndex - 1].classList.add('active');
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

document.addEventListener('DOMContentLoaded', showSlides);