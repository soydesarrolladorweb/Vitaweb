<?php

class ControladorUsuarios{


	/*=============================================
	INGRESO DE USUARIO
	=============================================*/

    static public function ctrIngresoUsuario(){

        if (isset($_POST["ingUsuario"])){
            
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){

					$encriptar = crypt($_POST["ingPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            
                    $tabla = "usuarios";

                    $item  = "usuario";
                    $valor = $_POST["ingUsuario"];

                    $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

                    if ($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $encriptar){

					 $_SESSION["iniciarSesion"] = "ok";
					 $_SESSION["iduser"] = $respuesta["iduser"];
					 $_SESSION["nombre"] = $respuesta["nombre"];
					 $_SESSION["usuario"] = $respuesta["usuario"];
					 $_SESSION["foto"] = $respuesta["foto"];
					 $_SESSION["perfil"] = $respuesta["perfil"];

                     
                     echo '<script>

								window.location = "inicio";

							</script>';

                    
                    }else{
                        echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                    }
            }
        }
	}
	
	
	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

    static public function ctrCrearUsuario(){

	if(isset($_POST["nuevoUsuario"])){

		if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
		    preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
			preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"])){

	/*=============================================
	VALIDAR IMAGEN
	=============================================*/		

	$ruta = "";
				

	if (isset($_FILES["nuevaFoto"]["tmp_name"])){

		list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);

		$nuevoAncho = 500;
		$nuevoAlto = 500;

	/*=============================================
	CREAMOS DIRECTORIO DONDE VAMOS A GUARDAR LA FOTO DEL USUARIO
	=============================================*/			
		
	$directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];

	mkdir($directorio, 0755);

	/*=============================================
	DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
	=============================================*/

					if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $ruta);

					}

					if($_FILES["nuevaFoto"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA IMAGEN EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $ruta);

					}
			
	
	}	
	
    /*=============================================
	VALIDAR FIRMA
	=============================================*/			


	$rutaFirma = "";
				

	if (isset($_FILES["nuevaFirma"]["tmp_name"])){

		list($ancho, $alto) = getimagesize($_FILES["nuevaFirma"]["tmp_name"]);

		$nuevoAncho = 500;
		$nuevoAlto = 500;

	/*=============================================
	LE INFORMAMOS DONDE VAMOS A GUARDAR LA FIRMA DEL USUARIO
	=============================================*/			
		
	$directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];

	

	/*=============================================
	DE ACUERDO AL TIPO DE IMAGEN APLICAMOS LAS FUNCIONES POR DEFECTO DE PHP
	=============================================*/

					if($_FILES["nuevaFirma"]["type"] == "image/jpeg"){

						/*=============================================
						GUARDAMOS LA FIRMA EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$rutaFirma = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";

						$origen = imagecreatefromjpeg($_FILES["nuevaFirma"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagejpeg($destino, $rutaFirma);

					}

					if($_FILES["nuevaFirma"]["type"] == "image/png"){

						/*=============================================
						GUARDAMOS LA FIRMA EN EL DIRECTORIO
						=============================================*/

						$aleatorio = mt_rand(100,999);

						$rutaFirma = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";

						$origen = imagecreatefrompng($_FILES["nuevaFirma"]["tmp_name"]);						

						$destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);

						imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);

						imagepng($destino, $rutaFirma);

					}
			
	
	}

	

				$tabla = "usuarios";

				$encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
	    	
				$datos = array("nombre" => $_POST["nuevoNombre"],
								"correo" => $_POST["nuevoCorreo"],
								"usuario" => $_POST["nuevoUsuario"],
								"password" => $encriptar,
								"telefono" => $_POST["nuevoTelefono"],
								"area" => $_POST["nuevaArea"],
								"perfil" => $_POST["nuevoPerfil"],
								"foto" => $ruta,
								"firma" => $rutaFirma);
								

				$respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
				
				if ($respuesta == "ok"){
					
					echo '<script>
			
			swal({

					
					title: "El usuario ha sido guardado correctamente",
					text: "",
					icon: "success",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
							
					
				}).then((result)=>{

					if(result.value){

						window.location = "usuarios";
					}	
				});
			
			</script>';
			}

		}else {

			echo '<script>
			
			swal({

					
					title: "El usuario no puede ir con caracteres especiales",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
							
					
				}).then((result)=>{

					if(result.value){

						window.location = "usuarios";
					}	
				});
			
			</script>';
		
			}

		
		}

	}


	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor){

		$tabla = "usuarios";
		
		$respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

		return $respuesta;

	}


}

