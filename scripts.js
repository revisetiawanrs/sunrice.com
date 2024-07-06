let slideIndex = 0;
showSlides();

function showSlides() {
    const slides = document.querySelectorAll('.slides img');
    const indicators = document.querySelectorAll('.indicator');
    slides.forEach((slide, index) => {
        slide.style.display = 'none';
    });
    indicators.forEach((indicator, index) => {
        indicator.classList.remove('active');
    });
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = 'block';
    indicators[slideIndex - 1].classList.add('active');
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}

document.querySelectorAll('.indicator').forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        const slides = document.querySelectorAll('.slides img');
        const indicators = document.querySelectorAll('.indicator');
        slides.forEach((slide, index) => {
            slide.style.display = 'none';
        });
        indicators.forEach((indicator, index) => {
            indicator.classList.remove('active');
        });
        slideIndex = index + 1;
        slides[slideIndex - 1].style.display = 'block';
        indicators[slideIndex - 1].classList.add('active');
    });
});