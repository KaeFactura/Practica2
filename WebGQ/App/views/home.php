<?php $baseURL = "/WebGQ/Public"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- 🔍 SEO Básico -->
    <title>Autos de Lujo en Costa Rica - Modelos y Pruebas de Manejo</title>
    <meta name="description" content="Descubre los mejores autos de lujo en Costa Rica. Reserva tu prueba de manejo y encuentra el vehículo ideal para ti.">
    <meta name="keywords" content="autos, carros de lujo, pruebas de manejo, Costa Rica, concesionarios">
    <meta name="author" content="WebGQ">
    <meta name="robots" content="index, follow">

    <!-- 🌎 Open Graph (Facebook, WhatsApp) -->
    <meta property="og:title" content="Autos de Lujo en Costa Rica - Modelos y Pruebas de Manejo">
    <meta property="og:description" content="Encuentra los mejores autos de lujo en Costa Rica. Reserva una prueba de manejo.">
    <meta property="og:image" content="<?= $baseURL ?>/img/hero-desktop.jpg">
    <meta property="og:url" content="https://tu-sitio-web.com">
    <meta property="og:type" content="website">

    <!-- 🐦 Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Autos de Lujo en Costa Rica - Modelos y Pruebas de Manejo">
    <meta name="twitter:description" content="Descubre los mejores autos de lujo en Costa Rica. Reserva una prueba de manejo.">
    <meta name="twitter:image" content="<?= $baseURL ?>/img/hero-desktop.jpg">

    <!-- 🎨 Favicons -->
    <link rel="icon" type="image/png" href="<?= $baseURL ?>/img/favicons/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $baseURL ?>/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $baseURL ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $baseURL ?>/img/favicons/android-chrome-192x192.png">

    <!-- 📌 Estilos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $baseURL ?>/css/styles.css">
    <link rel="stylesheet" href="<?= $baseURL ?>/css/navbar.css">
    <link rel="stylesheet" href="<?= $baseURL ?>/css/contacto.css">
    <link rel="stylesheet" href="<?= $baseURL ?>/css/carousel.css">
    <link rel="stylesheet" href="<?= $baseURL ?>/css/animations.css">
    <link rel="stylesheet" href="<?= $baseURL ?>/css/responsive.css">

    <!-- 📌 Iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar  -->
    <?php include __DIR__ . "/partials/navbar.php"; ?>

    <header class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <img src="<?= $baseURL ?>/img/hero-desktop.jpg" alt="Vehículo destacado" class="hero-image">
            <h1>Hello, Costa Rica</h1>
            <p>El destino no importa, solo el viaje. Domina cualquier camino.</p>
            <div class="hero-buttons">
                <a href="#modelos" class="btn-custom">Descubre Más</a>
                <a href="contacto.php" class="btn-custom btn-outline">Reserve su Test Drive</a>
            </div>
        </div> 
    </header> 

    <!-- Sección Expomóvil -->
    <section class="expomovil-section">
        <img src="<?= $baseURL ?>/img/nos-vemos.jpg" alt="Nos vemos en Expomóvil" class="expomovil-image">
    </section>

    <!-- 🚗 Modelos Disponibles -->
    <section class="modelos-disponibles">
        <h2 class="titulo">Modelos disponibles</h2>
        
        <div class="carousel-container">
            <button class="carousel-prev">◀</button>

            <div class="carousel">
                <div class="carousel-item">
                    <img src="<?= $baseURL ?>/img/modelo1.jpg" alt="Vehículo 1">
                </div>
                <div class="carousel-item">
                    <img src="<?= $baseURL ?>/img/modelo2.jpg" alt="Vehículo 2">
                </div>
                <div class="carousel-item">
                    <img src="<?= $baseURL ?>/img/modelo3.jpg" alt="Vehículo 3">
                </div>
            </div>

            <button class="carousel-next">▶</button>

            <div class="carousel-indicators">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>

    <!-- ✉️ Sección de Contacto -->
    <section class="contact-section">
        <div class="contact-container">
            <!-- 📌 Mitad negra: Información de contacto -->
            <div class="contact-info">
                <h2>Contáctanos</h2>
                <p>¿Tienes dudas? Estamos aquí para ayudarte.</p>
                <ul>
                    <li><i class="fas fa-phone"></i> +506 1234-5678</li>
                    <li><i class="fas fa-envelope"></i> contacto@empresa.com</li>
                    <li><i class="fas fa-map-marker-alt"></i> San José, Costa Rica</li>
                </ul>
            </div>

            <!-- 📌 Mitad blanca: Formulario de contacto -->
            <div class="contact-form">
                <h2>Déjanos tu mensaje</h2>
                <form>
                    <div class="input-group">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" placeholder="Tu nombre" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" placeholder="Tu correo" required>
                    </div>
                    <div class="input-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" placeholder="Escribe tu mensaje" required></textarea>
                    </div>
                    <button type="submit" class="btn-send">Enviar</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="custom-footer">
    <div class="footer-container">
        <!-- 📌 Columna 1: Logo y Redes Sociales -->
        <div class="footer-column">
            <h3>Grupo Q</h3>
            <p>Descubre nuestra app y obtén beneficios exclusivos.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <!-- 📌 Columna 2: Menú de Enlaces -->
        <div class="footer-column">
            <h4>Navegación</h4>
            <ul>
                <li><a href="#modelos">Modelos</a></li>
                <li><a href="#postventa">Servicio Postventa</a></li>
                <li><a href="#test-drive">Prueba de Manejo</a></li>
                <li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </div>

        <!-- 📌 Columna 3: Descarga la App -->
        <div class="footer-column">
            <h4>Descarga Nuestra App</h4>
            <p>Disponible en Play Store y App Store.</p>
            <div class="app-buttons">
                <a href="https://play.google.com" target="_blank">
                    <img src="<?= $baseURL ?>/img/playstore.png" alt="Google Play">
                </a>
                <a href="https://www.apple.com/app-store/" target="_blank">
                    <img src="<?= $baseURL ?>/img/appstore.png" alt="App Store">
                </a>
            </div>
        </div>
    </div>

    <!-- 📌 Derechos reservados -->
    <div class="footer-bottom">
        <p>&copy; <?= date("Y") ?> Grupo Q. Todos los derechos reservados.</p>
    </div>
</footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $baseURL ?>/js/hero.js"></script>
    <script src="<?= $baseURL ?>/js/navbar.js"></script>
    <script src="<?= $baseURL ?>/js/carousel.js"></script>
</body>
</html>

