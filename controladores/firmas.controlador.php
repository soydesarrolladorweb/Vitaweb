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
	
	static public function ctrCrearFirma(){

		if (isset($_POST["newUser"])) {
			
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["newUser"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/
				
				$ruta = "";	
				
				if (isset($_FILES["nuevaImagen"]["tmp_name"])){
					
					list($ancho, $alto) = getimagesize($_FILES["nuevaImagen"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

						/*=============================================
						CREAMOS DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO
						=============================================*/			
							
						$directorio = "vistas/img/firmas/".$_POST["newUser"];

						mkdir($directorio, 0755);

						/*=============================================
						DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
						=============================================*/

					if($_FILES["nuevaImagen"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/firmas/".$_POST["newUser"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaImagen"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/firmas/".$_POST["newUser"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}
			

				}

				$tabla = "firmas";
				$datos = array("id_usuario" => $_POST["newUser"],
								"imagen" => $ruta);

				$respuesta = ModeloFirmas::mdlIngresarFirma($tabla, $datos);

				

				if ($respuesta == "ok") {
                    
                    echo '<script>
			
					swal.fire({

					
						title: "La firma ha sido guardada correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "asignacionFirma";
					}	
				});
			
			</script>';
                }

			}else {
                
                echo '<script>
			
			swal.fire({

					
					title: "Los campos no pueden ir vacios.",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
							
					
				}).then(function(result){

					if(result.value){

						window.location = "asignacionFirma";
					}	
				});
			
			</script>';

            }
		}
	}
}