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
	
	/*=============================================
	CREAR FIRMAS
    =============================================*/
	
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

	/*=============================================
	EDITAR FIRMA
    =============================================*/
	
	static public function ctrEditarFirma(){

		if (isset($_POST["editarUser"])) {
			
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarUser"])){

				/*=============================================
				VALIDAR IMAGEN
				=============================================*/
				
				$ruta = $_POST["imagenActual"];	
				
				if (isset($_FILES["editarImagen"]["tmp_name"]) && !empty($_FILES["editarImagen"]["tmp_name"])){
					
					list($ancho, $alto) = getimagesize($_FILES["editarImagen"]["tmp_name"]);

					$nuevoAncho = 500;
					$nuevoAlto = 500;

						/*=============================================
						CREAMOS DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO
						=============================================*/			
							
						$directorio = "vistas/img/firmas/".$_POST["editarUser"];

						/*=============================================
						PRIMERO PREGUNTAMOS SI EXISTE OTRA IMAGEN EN LA BD
						=============================================*/

						if(!empty($_POST["imagenActual"])){

							unlink($_POST["imagenActual"]);
	
						}else{
	
							mkdir($directorio, 0755);
	
						}	
						

						/*=============================================
						DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
						=============================================*/

					if($_FILES["editarImagen"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/firmas/".$_POST["editarUser"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["editarImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["editarImagen"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/firmas/".$_POST["editarUser"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["editarImagen"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}
			

				}

				$tabla = "firmas";

				$datos = array("id_usuario" => $_POST["editarUser"],
								"imagen" => $ruta);

				$respuesta = ModeloFirmas::mdlEditarFirma($tabla, $datos);

				

				

				if($respuesta == "ok"){
                    
                    echo '<script>
			
					swal.fire({

					
						title: "La firma ha sido modificada correctamente",
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

			}else{
                
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

	/*=============================================
	ELIMINAR FIRMA
	=============================================*/
	
	static public function ctrEliminarFirma(){

		if (isset($_GET["idFirma"])){
			
			$tabla = "firmas";
			$datos = $_GET["idFirma"];

			if ($_GET["imagen"] != "" && $_GET["imagen"] != "vistas/img/firmas/default/firma2.png"){
				
				unlink($_GET["imagen"]);
				rmdir('vistas/img/firmas/'.$_GET["id_usuario"]);

			}

			$respuesta = ModeloFirmas::mdlEliminarFirma($tabla, $datos);

			if($respuesta == "ok"){
					
				echo '<script>
		
			swal.fire({

				
				    icon: "success",
					title: "La firma ha sido borrada correctamente",
					text: "",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
						
				
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