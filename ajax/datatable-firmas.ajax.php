<?php

require_once "../controladores/firmas.controlador.php";
require_once "../modelos/firmas.modelo.php";

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class TablaFirmas{

  /*=============================================
  MOSTRAR TABLA DE FIRMAS
  =============================================*/

  public function mostrarTablaFirmas(){

    $item = null;
    $valor = null;

    $firmas = ControladorFirmas::ctrMostrarFirmas($item, $valor);

    
    $botones = "<div class='btn-group'><button class='btn btn-warning'><i class='fas fa-pencil-alt'></i></button><button class='btn btn-danger'><i class='fa fa-times'></i></button></div>";

    $datosJson = '{
      "data": [';

      for($i = 0; $i < count($firmas); $i++){

        $imagen = "<img src='".$firmas[$i]["imagen"]."' width='40px'>";

        $item = "iduser";
        $valor = $firmas[$i]["id_usuario"];

        $usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

        $datosJson.='[
                "'.($i+1).'",
                "'.$imagen.'",
                "'.$firmas[$i]["codigo"].'",
                "'.$usuario["usuario"].'",
                "'.$firmas[$i]["descripcion"].'",
                "'.$firmas[$i]["fecha"].'",
                "'.$botones.'"
              ],';

      }

      $datosJson = substr($datosJson, 0, -1);

      $datosJson.= ']
    
    }';
    echo $datosJson;
    

  }

}

/*=============================================
  ACTIVAR TABLA DE FIRMAS
  =============================================*/
  $activarFirmas = new TablaFirmas();
  $activarFirmas -> mostrarTablaFirmas();

