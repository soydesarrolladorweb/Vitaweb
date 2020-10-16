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


      $datosJson = '{
        "data": [';

        for($i =0; $i < count($firmas); $i++){

          /*=============================================
          TRAEMOS LA FIRMA
          =============================================*/

          $imagen = "<img src='".$firmas[$i]["firma"]."' width='40px'>";

          /*=============================================
          TRAEMOS EL USUARIO
          =============================================*/

          $item ="iduser";
          $valor = $firmas[$i ]["id_usuario"];

          $usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

          /*=============================================
          TRAEMOS LAS ACCIONES
          =============================================*/

          $botones =  "<div class='btn-group'><button class='btn btn-warning btnEditarFirma'idFirma='".$firmas[$i ]["id"]."' data-toggle='modal' data-target='#modalEditarFirma'><i class='fas fa-pencil-alt'></i></button><button class='btn btn-danger btnEliminarFirma'idfirma='".$firmas[$i ]["id"]."' imagen='".$firmas[$i]["firma"]."'><i class='fa fa-times'></i></button></div>";


          $datosJson .= '[
                "'.($i+1).'",
                "'.$imagen.'",
                "'.$usuario["usuario"].'",
                "'.$firmas[$i ]["fecha"].'",
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