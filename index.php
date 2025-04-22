<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Futurista de Accesorios</title>
  <link rel="stylesheet" href="css/estilosindex.css">
  <link rel="stylesheet" href="lib/boostrap-css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/boostrap-iconos/bootstrap-icons.min.css">
    </head>
    <body>
    
      <!-- Barra de Navegación -->
      <nav class="navbar navbar-expand-lg  sticky-top" id="xd">
        <div class="container"id="xd">
          <a class="navbar-brand" href="#">Hotel Luxor</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHotel">
            <span class="navbar-toggler-icon"></span>
            
          </button>
    
          <div class="collapse navbar-collapse justify-content-end" id="navbarHotel">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Habitaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Galería</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>

<!-- Carrusel -->
<div id="miCarrusel" class="carousel slide carrusel-pequeno" data-bs-ride="carousel">
  <!-- Indicadores -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#miCarrusel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#miCarrusel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#miCarrusel" data-bs-slide-to="2"></button>
  </div>

  <!-- Imágenes del carrusel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/hotel1.jpg" class="d-block w-100" alt="Primera">
    </div>
    <div class="carousel-item">
      <img src="img/hotel2.jpg" class="d-block w-100" alt="Segunda">
    </div>
    <div class="carousel-item">
      <img src="img/hotel3.jpg" class="d-block w-100" alt="Tercera">
    </div>
  </div>

  <!-- Controles del carrusel -->
  <button class="carousel-control-prev" type="button" data-bs-target="#miCarrusel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#miCarrusel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>



  <!-- servicios-->
  <section class="container my-5">
  <h2 class="text-center mb-4">Nuestras Habitaciones</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Habitación Personal -->
    <div class="col">
      <div class="card h-100">
        <img src="img/personal.jpg" class="card-img-top" alt="Habitación Personal">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-person"></i> Cama Personal</h5>
          <p class="card-text">Perfecta para viajeros solitarios. Cómoda, tranquila y equipada con todo lo necesario.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-wifi"></i> WiFi gratis</li>
            <li class="list-group-item"><i class="bi bi-water"></i> Acceso a piscina</li>
            <li class="list-group-item"><i class="bi bi-cup-hot"></i> Desayuno incluido</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Habitación Doble -->
    <div class="col">
      <div class="card h-100">
        <img src="img/doble.jpg" class="card-img-top" alt="Habitación Doble">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-people"></i> Cama Doble</h5>
          <p class="card-text">Ideal para parejas. Amplio espacio, comodidad y estilo en cada rincón.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-wifi"></i> WiFi gratis</li>
            <li class="list-group-item"><i class="bi bi-water"></i> Acceso a piscina</li>
            <li class="list-group-item"><i class="bi bi-tv"></i> Televisión HD</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Habitación Familiar -->
    <div class="col">
      <div class="card h-100">
        <img src="img/familiar.jpg" class="card-img-top" alt="Habitación Familiar">
        <div class="card-body">
          <h5 class="card-title"><i class="bi bi-house-heart"></i> Cama Familiar</h5>
          <p class="card-text">Perfecta para familias o grupos. Espacio amplio y total comodidad.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-wifi"></i> WiFi gratis</li>
            <li class="list-group-item"><i class="bi bi-water"></i> Acceso a piscina</li>
            <li class="list-group-item"><i class="bi bi-snow"></i> Aire acondicionado</li>
            <li class="list-group-item"><i class="bi bi-cup-straw"></i> Desayuno buffet</li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</section>




<!-- Sección Sobre el Hotel -->
<section class="container my-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="img/hootel.jpg" class="img-fluid rounded" alt="Sobre el Hotel Olympo">
    </div>
    <div class="col-md-6">
      <h2 class="mb-3">Sobre el Hotel Olympo</h2>
      <p>
        Bienvenidos al <strong>Hotel Olympo</strong>, un oasis de confort y elegancia en el corazón de la ciudad. Nuestro hotel ha sido diseñado para ofrecer una experiencia inolvidable tanto a viajeros de negocios como a turistas que buscan descanso y sofisticación.
      </p>
      <p>
        Con una arquitectura moderna y servicios de alta calidad, en Olympo encontrarás habitaciones acogedoras, atención personalizada y una variedad de comodidades como piscina, restaurante gourmet, gimnasio y más.
      </p>
      <p>
        Ya sea que te hospedes por una noche o una semana, en el Hotel Olympo vivirás momentos únicos con el máximo confort y estilo. ¡Te esperamos!
      </p>
    </div>
  </div>
</section>



<!-- Sección Mapa Empresarial Mediano - Hotel Olympo -->
<section class="container my-5 d-flex justify-content-center">
  <div class="card shadow-sm border-0 rounded-4 bg-light" style="max-width: 720px; width: 100%;">
    <div class="card-body px-4 py-5">
      <div class="text-center mb-4">
        <h2 class="fw-bold text-dark mb-2">
          <i class="bi bi-geo-alt-fill text-primary me-2"></i>Ubicación Estratégica
        </h2>
        <p class="text-muted mb-0">
          Hotel Olympo se encuentra en una zona privilegiada, ideal para negocios y turismo.
        </p>
      </div>

      <div class="ratio ratio-16x9 rounded-4 overflow-hidden mb-4">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9444569272876!2d-77.04275408468866!3d-12.046374945070465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c937d274f9%3A0xd4d3613b3a30b88e!2sCentro%20de%20Lima!5e0!3m2!1ses!2spe!4v1713814570379!5m2!1ses!2spe" 
          allowfullscreen 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

      <div class="text-center">
        <a href="https://www.google.com/maps?q=Centro+de+Lima" 
           target="_blank" 
           class="btn btn-outline-primary rounded-pill px-5 fw-semibold shadow-sm">
          <i class="bi bi-compass me-2"></i>Ver en Google Maps
        </a>
      </div>
    </div>
  </div>
</section>


<!-- Formulario de Contacto / Reserva - Hotel Olympo -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="fw-bold text-dark">Contáctanos o Realiza tu Reserva</h2>
      <p class="text-muted">Nuestro equipo se pondrá en contacto contigo a la brevedad.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow rounded-4 border-0">
          <div class="card-body p-4">
            <form>
              <div class="mb-3">
                <label for="nombre" class="form-label fw-semibold">Nombre completo</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ej: Juan Pérez" required>
              </div>
              <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Correo electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ej: juan@email.com" required>
              </div>
              <div class="mb-3">
                <label for="telefono" class="form-label fw-semibold">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Ej: +51 987 654 321" required>
              </div>
              <div class="mb-3">
                <label for="fecha" class="form-label fw-semibold">Fecha de llegada</label>
                <input type="date" class="form-control" id="fecha" required>
              </div>
              <div class="mb-3">
                <label for="mensaje" class="form-label fw-semibold">Mensaje / Solicitud</label>
                <textarea class="form-control" id="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
              </div>
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary px-5 rounded-pill">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Footer Empresarial Premium - Hotel Olympo -->
<footer class="bg-dark text-white pt-5 pb-4 mt-5">
  <div class="container">
    <div class="row">

      <!-- Branding -->
      <div class="col-md-4 mb-4">
        <h4 class="text-uppercase fw-bold mb-3">Hotel Olympo</h4>
        <p class="text-secondary">
          Donde el confort y la excelencia se encuentran. Referente en hospitalidad empresarial.
        </p>
      </div>

      <!-- Navegación -->
      <div class="col-md-4 mb-4">
        <h6 class="text-uppercase fw-semibold mb-3">Enlaces Corporativos</h6>
        <ul class="list-unstyled text-secondary">
          <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Nosotros</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Salas Ejecutivas</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Reservas</a></li>
          <li class="mb-2"><a href="#" class="text-decoration-none text-secondary">Políticas</a></li>
        </ul>
      </div>

      <!-- Información de contacto -->
      <div class="col-md-4 mb-4">
        <h6 class="text-uppercase fw-semibold mb-3">Contáctenos</h6>
        <ul class="list-unstyled text-secondary">
          <li class="mb-2"><i class="bi bi-geo-alt-fill me-2"></i>Av. Ejecutiva 456, San Isidro, Lima</li>
          <li class="mb-2"><i class="bi bi-telephone-fill me-2"></i>+51 987 654 321</li>
          <li><i class="bi bi-envelope-fill me-2"></i>corporativo@hotelolympo.com</li>
        </ul>
      </div>

    </div>

    <!-- Divider -->
    <hr class="border-secondary">

    <!-- Footer bottom -->
    <div class="row">
      <div class="col-md-6 text-md-start text-center text-secondary small">
        &copy; 2025 Hotel Olympo. Todos los derechos reservados.
      </div>
      <div class="col-md-6 text-md-end text-center">
        <a href="#" class="text-secondary me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-secondary me-3"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="text-secondary"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>


    
      <!-- Botón de WhatsApp flotante -->
      <a href="https://wa.me/51945558032" class="whatsapp-btn" target="_blank">
        <i class="bi bi-whatsapp"></i>
      </a>
    
    <script src="lib/bostrap-js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>