<?php

require_once "../controladores/tiposIngreso.controlador.php";
require_once "../modelos/tiposIngreso.modelo.php";

class AjaxTiposingreso{

    /*=============================================
        EDITAR TIPOS DE INGRESOS
    =============================================*/

    public $idTipoingreso;

    public function ajaxEditarTipoingreso(){

        $item = "id";

        $valor =$this->idTipoingreso;

        $respuesta = ControladorIngresos::ctrMostrarTiposingresos($item, $valor);

        echo json_encode($respuesta);

    }


}

    /*=============================================
        EDITAR TIPOS DE INGRESOS
    =============================================*/
    if (isset($_POST["idTipoingreso"])) {
        
        $editartipo = new AjaxTiposingreso();
        $editartipo -> idTipoingreso = $_POST["idTipoingreso"];
        $editartipo -> ajaxEditarTipoingreso();
    }
