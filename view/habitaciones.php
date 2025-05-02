<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .cartilla {
      border: 1px solid #ccc;
      padding: 10px;
      margin: 10px;
      display: inline-block;
      width: 65px;
      text-align: center;
      border-radius: 10px;
    }
    .btn-mas {
      font-size: 10px;
      padding: 5px 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
<div class="container py-4">
  <h2 class="mb-4 text-center">Listado de Habitaciones</h2>
   <!-- Filtros -->
   <div class="row mb-4">
    <div class="col-md-4">
      <select id="filtro-categoria" class="form-select text-center">
        <option value="todas">Todas las categorías</option>
        <?php
        include("../conecxion/conecxion.php");
        $cat_sql = "SELECT categoria_id, Nombre FROM categoria_habitacion";
        $cat_result = $cnn->query($cat_sql);
        while ($cat = $cat_result->fetch_assoc()) {
          echo "<option value='{$cat['categoria_id']}'>{$cat['Nombre']}</option>";
        }
        ?>
      </select>
    </div>
    <div class="col-md-4">
      <select id="filtro-estado" class="form-select text-center">
        <option value="todos">Todos los estados</option>
        <option value="disponible">Disponible</option>
        <option value="ocupado">Ocupado</option>
        <option value="limpieza">Limpieza</option>
      </select>
    </div>
  </div>
  <div id="contenedor-habitaciones" class="row g-3 justify-content-center">

  </div>
</div>
<script src="js/habitaciones.js"></script>
</body>
</html>