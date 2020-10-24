<?php

require_once "../controladores/centroCostos.controlador.php";
require_once "../modelos/centroCostos.modelo.php";

class AjaxCentros{

    /*=============================================
    EDITAR CENTRO DE COSTO
    =============================================*/

    public $idCentro;

    public function ajaxEditarCentro(){

        $item = "id";
        $valor =$this->idCentro;

        $respuesta = ControladorCentros::ctrMostrarCentros($item, $valor);

        echo json_encode($respuesta);

    }

}

/*=============================================
EDITAR CENTRO DE COSTO
=============================================*/

if (isset($_POST["idCentro"])){
    
    $ceco = new AjaxCentros();
    $ceco -> idCentro = $_POST["idCentro"];
    $ceco -> ajaxEditarCentro();
}