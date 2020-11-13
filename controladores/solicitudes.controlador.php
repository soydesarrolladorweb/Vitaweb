<?php

    class ControladorSolicitudes{

    

    /*=============================================
	MOSTRAR SOLICITUDES
	=============================================*/

	static public function ctrMostrarSolicitudes($item, $valor){

		$tabla = "solicitud";
		
		$respuesta = ModeloSolicitudes::mdlMostrarSolicitudes($tabla, $item, $valor);

		return $respuesta;

    }
    
}    
