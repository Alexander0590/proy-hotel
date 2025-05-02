$(document).ready(function() {
    // Cargar cartillas desde PHP
    $("#contenedor-habitaciones").load("procesos/mantehabi.php");
  
    // Evento del botón +
    $(document).on("click", ".btn-mas", function() {
      const idHabitacion = $(this).data("id");
      
      $.ajax({
        url: "accion_habitacion.php",
        type: "POST",
        data: { id: idHabitacion },
        success: function(respuesta) {
          alert("Respuesta: " + respuesta);
        }
      });
    });
  });