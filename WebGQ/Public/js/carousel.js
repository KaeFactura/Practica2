document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.querySelector(".carousel");
    const items = document.querySelectorAll(".carousel-item");
    const dots = document.querySelectorAll(".dot");
    const prevButton = document.querySelector(".carousel-prev");
    const nextButton = document.querySelector(".carousel-next");
    let index = 0;
    let interval;

    function updateCarousel() {
        const offset = -index * 33.33; // Se mueve 1/3 por cada paso
        carousel.style.transform = `translateX(${offset}%)`;

        // Actualizar indicadores
        dots.forEach(dot => dot.classList.remove("active"));
        dots[index].classList.add("active");
    }

    function nextSlide() {
        index = (index < items.length - 1) ? index + 1 : 0;
        updateCarousel();
    }

    function prevSlide() {
        index = (index > 0) ? index - 1 : items.length - 1;
        updateCarousel();
    }

    function startAutoSlide() {
        interval = setInterval(nextSlide, 3000); // Cambia cada 3 segundos
    }

    function stopAutoSlide() {
        clearInterval(interval);
    }

    prevButton.addEventListener("click", function () {
        prevSlide();
        stopAutoSlide();
        startAutoSlide();
    });

    nextButton.addEventListener("click", function () {
        nextSlide();
        stopAutoSlide();
        startAutoSlide();
    });

    dots.forEach((dot, i) => {
        dot.addEventListener("click", function () {
            index = i;
            updateCarousel();
            stopAutoSlide();
            startAutoSlide();
        });
    });

    startAutoSlide(); // Iniciar el carrusel automáticamente
    updateCarousel();
});
