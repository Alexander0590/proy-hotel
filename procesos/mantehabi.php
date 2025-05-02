<?php
include("../conecxion/conecxion.php");

$sql = "SELECT h.id_habi, h.numero_habi, h.estado, c.Nombre AS categoria
        FROM habitaciones h
        JOIN categoria_habitacion c ON h.categoria_id = c.categoria_id";
$result = $cnn->query($sql);

// Contenedor de tarjetas
echo "<div class='row g-3'>";

while ($row = $result->fetch_assoc()) {
    $estado = strtolower($row['estado']);
    $classCard = '';

    switch ($estado) {
        case 'ocupado':
            $classCard = 'card-ocupado';
            break;
        case 'disponible':
            $classCard = 'card-disponible';
            break;
        case 'limpieza':
            $classCard = 'card-limpieza';
            break;
        default:
            $classCard = 'card-default';
            break;
    }

    echo "
    <div class='col-12 col-sm-6 col-md-3'>
      <div class='card shadow-sm h-100 $classCard'>
        <div class='card-header text-center text-uppercase fw-semibold'>
          Estado: {$row['estado']}
        </div>
        <div class='card-body d-flex flex-column justify-content-between'>
          <div class='d-flex flex-column justify-content-center align-items-center mb-2'>
            <i class='fa-solid fa-bed fs-icon'></i>
            <span class='fs-numero'>{$row['numero_habi']}</span>
          </div>
          <p class='card-text text-center mb-2'>Categoría: {$row['categoria']}</p>
          <div class='text-center'>
            <button class='btn btn-light btn-sm btn-mas' data-id='{$row['id_habi']}'>
              <i class='bi bi-plus-lg'></i> Agregar
            </button>
          </div>
        </div>
      </div>
    </div>";
}

echo "</div>"; // cierre de row
$cnn->close();
?>
