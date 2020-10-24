<?php 

 
  require_once "controladores/plantilla.controlador.php";
  require_once "controladores/usuarios.controlador.php";
  require_once "controladores/solicitudes.controlador.php";
  require_once "controladores/horarios.controlador.php";
  require_once "controladores/reportes.controlador.php";
  require_once "controladores/tiposIngreso.controlador.php";
  require_once "controladores/atributosCargo.controlador.php";
  require_once "controladores/firmas.controlador.php";
  require_once "controladores/centroCostos.controlador.php";

  require_once "modelos/usuarios.modelo.php";
  require_once "modelos/solicitudes.modelo.php";
  require_once "modelos/horarios.modelo.php";
  require_once "modelos/reportes.modelo.php";
  require_once "modelos/tiposIngreso.modelo.php";
  require_once "modelos/atributosCargo.modelo.php";
  require_once "modelos/firmas.modelo.php";
  require_once "modelos/centroCostos.modelo.php";

  $plantilla =new ControladorPlantilla();
  $plantilla -> ctrPlantilla();

  ?>