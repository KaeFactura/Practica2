document.addEventListener("DOMContentLoaded", function () {
    const heroSection = document.querySelector(".hero-section");
    const heroImage = document.querySelector(".hero-image");

    // 🔹 Crear el overlay dinámicamente si no existe
    if (!document.querySelector(".hero-overlay")) {
        let overlay = document.createElement("div");
        overlay.classList.add("hero-overlay");
        heroSection.appendChild(overlay);
    }

    // 🔹 Efecto de botones en hover
    document.body.addEventListener("mouseover", function (event) {
        if (event.target.classList.contains("btn")) {
            event.target.style.transform = "scale(1.05)";
            event.target.style.boxShadow = "0px 0px 12px rgba(255, 255, 255, 0.5)";
        }
    });

    document.body.addEventListener("mouseout", function (event) {
        if (event.target.classList.contains("btn")) {
            event.target.style.transform = "scale(1)";
            event.target.style.boxShadow = "none";
        }
    });

    // 🔹 Aplicar Modo Oscuro
    function checkDarkMode() {
        document.body.classList.toggle("dark-mode", window.matchMedia('(prefers-color-scheme: dark)').matches);
    }
    checkDarkMode();
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', checkDarkMode);

    // 🔹 Aplicar la animación solo cuando la imagen haya cargado
    if (heroImage) {
        heroImage.onload = function () {
            heroImage.style.animation = "fadeBlur 1s ease-in-out forwards";
        };
    }

    // 🔹 Funcionalidad de la Barra de Búsqueda
    const searchToggle = document.querySelector(".btn-search-toggle");
    const searchForm = document.querySelector(".search-form");
    const searchInput = searchForm ? searchForm.querySelector("input") : null;

    if (searchToggle && searchForm && searchInput) {
        // 🔹 Mostrar la barra de búsqueda al hacer clic en la lupa
        searchToggle.addEventListener("click", function () {
            searchForm.classList.add("active");
            searchForm.style.opacity = "1";
            searchInput.focus(); // Enfocar automáticamente el input
        });

        // ⛔ Cerrar la barra de búsqueda cuando el usuario haga clic fuera de ella
        document.addEventListener("click", function (event) {
            if (!searchForm.contains(event.target) && !searchToggle.contains(event.target)) {
                searchForm.classList.remove("active");
                searchForm.style.opacity = "0";
            }
        });

        // 🕵️‍♂️ Cerrar la barra si se presiona "Escape"
        searchInput.addEventListener("keydown", function (event) {
            if (event.key === "Escape") {
                searchForm.classList.remove("active");
                searchForm.style.opacity = "0";
            }
        });
    }
});
