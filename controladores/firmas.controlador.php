<?php

class ControladorFirmas{

    /*=============================================
	MOSTRAR FIRMAS
    =============================================*/
    
    static public function ctrMostrarFirmas($item, $valor){

        $tabla = "firmas";

        $respuesta = ModeloFirmas::mdlMostrarFirmas($tabla, $item, $valor);

        return $respuesta;

    }
}