<?php

require_once "../controladores/firmas.controlador.php";
require_once "../modelos/firmas.modelo.php";

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class TablaFirmas{

    /*=============================================
    MOSTRAR LA TABLA DE FIRMAS
    =============================================*/

    public function mostrarTablaFirmas(){

      $item = null;
      $valor = null;

      $firmas =ControladorFirmas::ctrMostrarFirmas($item, $valor);

      
      $botones =  "<div class='btn-group'><button class='btn btn-warning'><i class='fas fa-pencil-alt'></i></button><button class='btn btn-danger'><i class='fa fa-times'></i></button></div>";

      $datosJson = '{
        "data": [';

        for($i =0; $i < count($firmas); $i++){

          $imagen = "<img src='".$firmas[$i]["firma"]."' width='40px'>";

          $datosJson .= '[
                "'.($i+1).'",
                "'.$imagen.'",
                "20782",
                "2020-10-08 13:58:50",
                "'.$botones.'"
              ],';

        }

        $datosJson = substr($datosJson, 0, -1);
          
        $datosJson .= '] 
      
        }';

        echo $datosJson;

      
    }

}

    /*=============================================
    ACTIVAR LA TABLA DE FIRMAS
    =============================================*/
    $activarFirmas = new TablaFirmas();
    $activarFirmas -> mostrarTablaFirmas();