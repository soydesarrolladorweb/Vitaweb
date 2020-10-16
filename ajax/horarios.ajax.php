<?php

require_once "../controladores/horarios.controlador.php";
require_once "../modelos/horarios.modelo.php";

class AjaxHorarios{

    /*=============================================
        EDITAR HORARIOS
    =============================================*/

    public $idTipohorario;

    public function ajaxEditarHorario(){

        $item = "id";

        $valor =$this->idTipohorario;

        $respuesta = ControladorHorarios::ctrMostrarHorarios($item, $valor);

        echo json_encode($respuesta);

    }


}

    /*=============================================
        EDITAR HORARIOS
    =============================================*/
    if (isset($_POST["idTipohorario"])) {
        
        $editarTipohorario = new AjaxHorarios();
        $editarTipohorario -> idTipohorario = $_POST["idTipohorario"];
        $editarTipohorario -> ajaxEditarHorario();
    }
