<?php

require_once "../controladores/firmas.controlador.php";
require_once "../modelos/firmas.modelo.php";

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";

class AjaxFirmas{

    /*=============================================
    EDITAR FIRMA
    =============================================*/

    public $idFirma;

    public function ajaxEditarFirma(){

        $item = "id";
        $valor = $this->idFirma;
        $respuesta = ControladorFirmas::ctrMostrarFirmas($item, $valor);

        echo json_encode($respuesta);

    }


}

/*=============================================
    EDITAR FIRMA
=============================================*/

if (isset($_POST["idFirma"])){
    
    $editar = new AjaxFirmas();
    $editar -> idFirma = $_POST["idFirma"];
    $editar -> ajaxEditarFirma();

}

