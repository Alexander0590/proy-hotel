
const sidebar = document.getElementById('mySidebar');
const vistas = document.getElementById('vistas');
const barra=document.getElementById('bhoriz')

//expander la barra horizontal
sidebar.addEventListener('mouseover', function() {
    sidebar.classList.add('expanded');
});
//constraer la barra horizontal
sidebar.addEventListener('mouseout', function() {
    sidebar.classList.remove('expanded');
});

//traer las vistas con jquery
$(document).ready(function () {
 
    // productos
    $("#hab").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/habitaciones.php"); 
    });
    // Usuarios
    $("#aho").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/reservas.php"); 
    });
    //clientes
    $("#rec").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/clientes.php"); 
    });
    //Proveedor
    $("#tar").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/pagos.php"); 
    });
    //ventas
    $("#est").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/reseñas.php"); 
    });
     //almacen
     $("#lis").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/usuarios.php"); 
    });
    //editarperfil
    $("#perfil").click(function (e) {
      e.preventDefault(); 
      $("#vistas").load("view/perfil.php"); 
    });
    //verperfil
   $("#verperfil").click(function (e) {
      e.preventDefault();
    $("#vistas").load("view/panel_control.php", function() {
    
    $("#vistas").hide(); 
    });
  $("#perfilModal").modal('show'); 
  
  });
  //muestra panelcontrol
  $("#mcerrar").click(function (e) {
    e.preventDefault(); 
    $("#vistas").show(); 
  });

  $("#irperfil").click(function (e) {
    e.preventDefault(); 
    $("#vistas").load("view/perfil.php"); 
  });
 
  
  });



 	

 