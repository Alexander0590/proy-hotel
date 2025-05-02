<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel OLIMPO - Lujo y Elegancia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosindex.css">
    <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
    <img src="" alt="" height="60" class="me-2">
    <span class="d-none d-md-inline" style="color:white">OLIMPO</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#hotelCarousel">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#habitaciones">Habitaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre-nosotros">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ubicacion">Ubicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-gold rounded-pill" href="#contacto">Reservar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section with Carousel -->
    <section class="hero-section">
        <div id="hotelCarousel" class="carousel slide carousel-fade h-100" data-bs-ride="carousel">
            <div class="carousel-inner h-100">
                <div class="carousel-item active h-100">
                    <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Luxury Hotel Room">
                </div>
                <div class="carousel-item h-100">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="d-block w-100" alt="Hotel Pool">
                </div>
                <div class="carousel-item h-100">
                    <img src="img/hootel.jpg" alt="Hotel Lobby">
                </div>
            </div>
            <div class="hero-overlay"></div>
            <div class="hero-content">
                <h1 class="hero-title">Hotel OLIMPO</h1>
                <p class="hero-subtitle">Donde el lujo se encuentra con la comodidad</p>
                <a href="#habitaciones" class="btn btn-gold">Descubre nuestras suites</a>
            </div>
        </div>
    </section>

    <!-- Rooms Section -->
    <section id="habitaciones" class="rooms-section">
        <div class="container">
            <div class="section-title">
                <h2>Nuestras Habitaciones</h2>
                <p>Diseñadas para ofrecer el máximo confort y elegancia</p>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Suite Deluxe">
                        <div class="card-body">
                            <h3 class="room-title">Suite Deluxe</h3>
                            <p class="room-price">Desde $250/noche</p>
                            <p>Amplia suite con vista al mar y todas las comodidades para una estancia inolvidable.</p>
                            <ul class="room-features list-unstyled">
                                <li><i class="bi bi-check-circle"></i> 45 m² de espacio</li>
                                <li><i class="bi bi-check-circle"></i> Cama king size</li>
                                <li><i class="bi bi-check-circle"></i> Baño de mármol</li>
                                <li><i class="bi bi-check-circle"></i> Desayuno incluido</li>
                            </ul>
                            <a href="#contacto" class="btn btn-outline-dark w-100">Reservar</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <img src="img/doble.jpg" class="card-img-top" alt="Suite Ejecutiva">
                        <div class="card-body">
                            <h3 class="room-title">Suite Ejecutiva</h3>
                            <p class="room-price">Desde $350/noche</p>
                            <p>Elegante suite diseñada para viajeros de negocios con zona de trabajo exclusiva.</p>
                            <ul class="room-features list-unstyled">
                                <li><i class="bi bi-check-circle"></i> 55 m² de espacio</li>
                                <li><i class="bi bi-check-circle"></i> Sala de estar separada</li>
                                <li><i class="bi bi-check-circle"></i> Escritorio ejecutivo</li>
                                <li><i class="bi bi-check-circle"></i> Acceso a lounge</li>
                            </ul>
                            <a href="#contacto" class="btn btn-outline-dark w-100">Reservar</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="room-card">
                        <img src="img/lujo.jpg" class="card-img-top" alt="Suite Presidencial">
                        <div class="card-body">
                            <h3 class="room-title">Suite Presidencial</h3>
                            <p class="room-price">Desde $600/noche</p>
                            <p>La máxima expresión de lujo con servicios personalizados y exclusivos.</p>
                            <ul class="room-features list-unstyled">
                                <li><i class="bi bi-check-circle"></i> 120 m² de espacio</li>
                                <li><i class="bi bi-check-circle"></i> Terraza privada</li>
                                <li><i class="bi bi-check-circle"></i> Jacuzzi</li>
                                <li><i class="bi bi-check-circle"></i> Mayordomo 24/7</li>
                            </ul>
                            <a href="#contacto" class="btn btn-outline-dark w-100">Reservar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre-nosotros" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Hotel OLIMPO">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Sobre Hotel OLIMPO</h2>
                        <p>Ubicado en el corazón de la ciudad, el Hotel OLIMPO es un refugio de lujo y sofisticación donde cada detalle ha sido cuidadosamente diseñado para ofrecer una experiencia inolvidable.</p>
                        <p>Desde nuestra inauguración en 2010, nos hemos comprometido a superar las expectativas de nuestros huéspedes con un servicio impecable, instalaciones de primera clase y una atención personalizada que nos distingue.</p>
                        <p>Nuestro equipo está compuesto por profesionales apasionados por la hospitalidad, dedicados a hacer de su estancia un momento memorable.</p>
                        <p class="signature">— Gerente General, Frank Martinez</p>
                        <a href="#contacto" class="btn btn-gold">Contáctenos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section id="ubicacion" class="location-section">
        <div class="container">
            <div class="section-title">
                <h2>Ubicación Privilegiada</h2>
                <p>En el centro de todo lo que la ciudad tiene para ofrecer</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.461126487237!2d-80.63266152586526!3d-5.189959352351413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904a10784d76cbdd%3A0xb67ebcb81dc5876b!2sHOTEL%20OLIMPO%20-%20PIURA!5e0!3m2!1ses-419!2spe!4v1746138024468!5m2!1ses-419!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <h3 class="mb-4">Cómo llegar</h3>
                        <p>Nuestra ubicación céntrica en la Avenida Principal 1234 hace que sea fácil acceder a los principales puntos de interés de la ciudad:</p>
                        <ul class="list-unstyled">
                            <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i> A 5 minutos del centro financiero</li>
                            <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i> A 10 minutos del aeropuerto internacional</li>
                            <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i> A 2 cuadras de la zona comercial</li>
                            <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i> A 15 minutos de las principales atracciones turísticas</li>
                        </ul>
                        <p>Ofrecemos servicio de transporte desde y hacia el aeropuerto para mayor comodidad de nuestros huéspedes.</p>
                        <a href="https://www.google.com/maps/place/HOTEL+OLIMPO+-+PIURA/@-5.1899594,-80.6326615,17z/data=!3m1!4b1!4m6!3m5!1s0x904a10784d76cbdd:0xb67ebcb81dc5876b!8m2!3d-5.1899647!4d-80.6300866!16s%2Fg%2F11c45knt96?entry=ttu&g_ep=EgoyMDI1MDQyOS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-gold mt-3">Ver en Google Maps</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Contacto</h2>
                <p>Estamos aquí para ayudarte en lo que necesites</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre completo</label>
                                        <input type="text" class="form-control" id="nombre" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="telefono" class="form-label">Teléfono</label>
                                        <input type="tel" class="form-control" id="telefono">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="fecha" class="form-label">Fecha de llegada</label>
                                        <input type="date" class="form-control" id="fecha">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="habitacion" class="form-label">Tipo de habitación</label>
                                <select class="form-select" id="habitacion">
                                    <option selected>Seleccione una opción</option>
                                    <option value="deluxe">Suite Deluxe</option>
                                    <option value="ejecutiva">Suite Ejecutiva</option>
                                    <option value="presidencial">Suite Presidencial</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="4"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-gold px-5">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-about">
                    <a href="#" class="footer-logo d-flex align-items-center">
                    <img src="img/logo3.jpeg" alt="Hotel Olimpo" height="40" class="me-2">
                    <span class="text-white">OLIMPO</span>
                  </a>
                        <p>El Hotel OLIMPO redefine el concepto de lujo con un servicio excepcional, diseño elegante y atención al detalle que crea experiencias memorables.</p>
                        <div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <div class="footer-links">
                        <h5 class="footer-title">Enlaces</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#habitaciones">Habitaciones</a></li>
                            <li><a href="#sobre-nosotros">Sobre Nosotros</a></li>
                            <li><a href="#ubicacion">Ubicación</a></li>
                            <li><a href="#contacto">Contacto</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-links">
                        <h5 class="footer-title">Servicios</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">Spa & Bienestar</a></li>
                            <li><a href="#">Restaurante Gourmet</a></li>
                            <li><a href="#">Salas de Eventos</a></li>
                            <li><a href="#">Transporte Ejecutivo</a></li>
                            <li><a href="#">Concierge 24/7</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-contact">
                        <h5 class="footer-title">Contacto</h5>
                        <ul class="footer-contact-info list-unstyled">
                            <li><i class="bi bi-geo-alt"></i> Amazonas 332, Piura 20001</li>
                            <li><i class="bi bi-telephone"></i> +51 910 082 196</li>
                            <li><i class="bi bi-envelope"></i> reservas@hotelOLIMPO.com</li>
                            <li><i class="bi bi-clock"></i> Recepción 24 horas</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="copyright text-center">
                <p>&copy; 2023 Hotel OLIMPO. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- WhatsApp Button -->
    <a href="https://wa.me/51910082196" class="whatsapp-btn" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>