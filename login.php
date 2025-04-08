<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Corporativo</title>
  <link rel="stylesheet" href="lib/boostrap-css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/boostrap-iconos/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/estiloslogin.css   ">
  <link rel="shortcut icon" href="img/logo_respaldo1.ico" type="image/x-icon">

</head>
<body>
  
<video autoplay muted loop id="video-bg">
        <source src="img/video1.mp4" type="video/mp4">
        Tu navegador no soporta videos en HTML5.
    </video>
  <div class="login-container">
    <img src="img/logo2.png" alt="Logo de la Empresa">

    <form action="procesos/procesologin.php" method="post">
      <div class="form-group position-relative mb-3">
        <i class="bi bi-person-fill"></i>
        <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
      </div>
      <div class="form-group position-relative mb-3">
      
        <i class="bi bi-lock-fill"></i>
        <input type="password" class="form-control" placeholder="Contraseña" name="clave" required>
      </div>
      <button type="submit" class="btn btn-custom btn-block mb-3"><span id="ingre">Ingresar</span></button>
      
      <?php
       
        $dato = isset($_GET['dato']) ? $_GET['dato'] : '';
        if (!empty($dato)) {
            echo "<spam>$dato</spam>"; 
        } else {
            echo "<spam> </spam>";
        }
    ?>
    </form>
  </div>
  
  <script src="lib/bostrap-js/bootstrap.min.js"></script>
</body>
</html>
