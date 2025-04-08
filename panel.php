<?php
session_start();

// Verificar si la sesión está activa
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php?dato=" . urlencode("Debe iniciar sesión para acceder."));
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <title>Panel</title>
    <link rel="stylesheet" href="lib/ficonos/css/all.min.css">
    <script src="lib/jquery-3.7.1.min.js"></script>
   <link rel="stylesheet" href="css/estilos_panel.css">
   <link rel="stylesheet" href="css/estilosdeviews.css">
   <link rel="shortcut icon" href="img/logo2.png" type="image/x-icon">

   
</head>
<body class="animate__animated animate__fadeIn">
  
<!-- Menu de nacegacion horizontal -->
<div class="container-tp" id="bhoriz">
        <div class="perfil" data-bs-toggle="modal" data-bs-target="#perfilModal">
        <div id="foto2">
                <img src="img/LOGO.png" alt="Foto de perfil">
            </div>
            <div id="foto">
                <img src="img/fotoperfil.jpg" alt="Foto de perfil">
            </div>
            <div id="nombre">
                <h5>
                    <?php echo htmlspecialchars($_SESSION['dato']); ?>
                    <i class="bi bi-caret-down-square-fill"></i>
                </h5>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="perfilModal" tabindex="-1" aria-labelledby="perfilModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: #000000; color: #ffffff;">
      <div class="modal-header" style="border-bottom: 1px solid #56a6db;">
        <h5 class="modal-title" id="perfilModalLabel"><b>Información del perfil</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body ">
        <div id="foto-modal " class="text-center mb-3">
          <img src="img/fotoperfil.jpg" alt="Foto de perfil" class="img-fluid rounded-circle" style="width: 150px; height: 150px; margin-bottom: 10px ;">
        </div>
        <div text-fill>
        <p><strong>Nombre:</strong> <?php echo htmlspecialchars($_SESSION['dato']); ?></p>
        <p><strong>Usuario:</strong> <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
        <p><strong>Rol:</strong> <?php echo htmlspecialchars($_SESSION['rol']); ?> </p>
        <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($_SESSION['tel']); ?></p>
        </div>
     
      </div>
        <div class="modal-footer" style="border-top: 1px solid #56a6db;">
       <a href="proceso/cerrar_sesion.php" class="btn btn-secondary" style="background-color: #56a6db; color: #ffffff;">
          <i class="bi bi-box-arrow-right"></i> Cerrar Sesión
      </a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #56a6db; color: #ffffff; " id="mcerrar">
          <i class="bi bi-x-circle"></i> Cerrar
        </button>
        <button type="button" class="btn" style="background-color: #56a6db; color: #ffffff;">
            <a href="#" id="irperfil" style="background-color: #56a6db; color: #ffffff;text-decoration:none" >
            <i class="bi bi-pencil-square"></i> Cambiar Foto
            </a>
          
        </button>
      </div>
    </div>
  </div>
</div>
<!-- Menu Navegacion Vertical -->
<div class="sidebar v-a" id="mySidebar">
    <i class="bi bi-list menu-btn" onclick="toggleSidebar()" id="xd"></i>
    <a href="#"><i class="fa-solid fa-chart-line"></i><span>Dashboard</span></a>
    <div class="menu-item">
        <a href="#"><i class="bi bi-person-circle"></i><span>Perfil</span></a>
        <div class="submenu">
            <a href="#" id="verperfil">Ver perfil</a>
            <a href="#" id="perfil" >Editar perfil</a>
        </div>  
    </div>
    <div class="menu-item">
        <a href="#"><i class="fa-solid fa-bed"></i><span>Habitaciones</span></a>
        <div class="submenu">
            <a href="#" id="per">Personal</a>
            <a href="#" id="dob">Dobles</a>
            <a href="#" id="fam">Familiar</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="fa-solid fa-newspaper"></i><span>Reservas</span></a>
        <div class="submenu">
            <a href="#" id="aho">Ahora</a>
            <a href="#" id="his">Historial</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="fa-solid fa-user-group"></i><span>Clientes</span></a>
        <div class="submenu">
            <a href="#" id="rec">Recientes</a>
            <a href="#" id="fre">Frecuentes</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="fa-solid fa-money-check-dollar"></i><span>Pagos</span></a>
        <div class="submenu">
            <a href="#" id="tar">Tarjeta</a>
            <a href="#" id="efe">Efectivo</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="fa-solid fa-star"></i><span>Reseñas</span></a>
        <div class="submenu">
            <a href="#" id="est">Estrellas</a>
            <a href="#" id="men" >Mensajes</a>
        </div>
    </div>
    <div class="menu-item">
        <a href="#"><i class="fa-solid fa-user-tie"></i><span>Usuarios</span></a>
        <div class="submenu">
            <a href="#" id="lis">Lista de usuarios</a>
        </div>
    </div>
    <a href="proceso/cerrar_sesion.php"><i class="fa-solid fa-right-to-bracket"></i><span>Cerrar Session</span></a>
    
</div>

<div id="vistas">
    
</div>


<script src="js/panel.js"></script>
<script src="lib/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

