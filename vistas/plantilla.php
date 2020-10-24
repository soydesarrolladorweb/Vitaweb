<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vitalis| Seleccion de personal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="vistas/dist/img/logo3.png">

  <!-- PLUGING CSS -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="vistas/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="vistas/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="vistas/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="vistas/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="vistas/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="vistas/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">



  <!-- PLUGINS JAVASCRIPT -->


  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="vistas/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="vistas/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="vistas/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="vistas/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="vistas/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="vistas/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="vistas/plugins/moment/moment.min.js"></script>
  <script src="vistas/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="vistas/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="vistas/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="vistas/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.js"></script>

  <!-- DataTables -->
  <script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="vistas/dist/js/pages/dashboard.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="vistas/dist/js/demo.js"></script>
  
  <!-- SweetAlert2 -->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.min.js"></script>

  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        "language": {

        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
        },
        "oAria": {
          "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
          "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }

	}
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>


</head>

<body class="hold-transition sidebar-collapse sidebar-mini login-page">



  <?php

  if (isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok") {

    echo '<div class="wrapper">';

    /*==================================
        NAV
        ==================================*/
    include "modulos/nav.php";
    /*==================================
        MENU
        ==================================*/
    include "modulos/menu.php";

    /*==================================
        CONTENIDO
        ==================================*/
    if (isset($_GET["ruta"])) {

      if (
        $_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "asignacionFirma" ||
        $_GET["ruta"] == "administrarsolicitudes" ||
        $_GET["ruta"] == "crear-solicitud" ||
        $_GET["ruta"] == "editar-solicitud" ||
        $_GET["ruta"] == "tiposIngreso" ||
        $_GET["ruta"] == "centroCostos" ||
        $_GET["ruta"] == "horarios" ||
        $_GET["ruta"] == "atributosCargo" ||
        $_GET["ruta"] == "reportes" ||
        $_GET["ruta"] == "configuraciones" ||
        $_GET["ruta"] == "configurarCorreo" ||
        $_GET["ruta"] == "datosFormato" ||
        $_GET["ruta"] == "perfiles" ||
        $_GET["ruta"] == "login" ||

        $_GET["ruta"] == "salir"
      ) {

        include "modulos/" . $_GET["ruta"] . ".php";
      } else {
        include "modulos/404.php";
      }
    } else {
      include "modulos/inicio.php";
    }


    /*==================================
        FOOTER
        ==================================*/
    include "modulos/footer.php";

    echo '</div>';
  } else {

    include "modulos/login.php";
  }

  ?>


  <script src="vistas/js/plantilla.js"></script>
  <script src="vistas/js/usuarios.js"></script>
  <script src="vistas/js/tiposIngreso.js"></script>
  <script src="vistas/js/firmas.js"></script>  
  <script src="vistas/js/horarios.js"></script>
  <script src="vistas/js/centroCostos.js"></script>
 

</body>

</html>