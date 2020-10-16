<?php

class ControladorHorarios{

    static public function ctrCrearHorario(){

        if (isset($_POST["nuevoHorario"])){

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoHorario"])){

                $tabla = "horarios";

                $datos = $_POST["nuevoHorario"];

                $respuesta = ModeloHorarios::mdlCrearHorario($tabla, $datos);

                if ($respuesta == "ok") {
                    
                    echo '<script>
			
					swal.fire({

					
						title: "El tipo de horario ha sido guardado correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "horarios";
					}	
				});
			
			</script>';
                }

            }else {
                
                echo '<script>
			
					swal.fire({

					
					title: "El horario no puede ir vacio o llevar caracteres especiales",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",	
					
					}).then(function(result){

					if(result.value){

						window.location = "horarios";
					}	
					});
			
					</script>';
	
           }

        }
	}
	
	/*=============================================
	MOSTRAR TIPOS DE HORARIOS
    =============================================*/	

	static public function ctrMostrarHorarios($item, $valor){

		$tabla = "horarios";

		$respuesta = ModeloHorarios::mdlMostrarHorarios($tabla, $item, $valor);

		return $respuesta;
	}
	
	/*=============================================
	EDITAR TIPOS DE HORARIOS
    =============================================*/	
	static public function ctrEditarHorario(){

        if (isset($_POST["editarHorario"])){

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarHorario"])){

                $tabla = "horarios";

				$datos = array("horario"=>$_POST["editarHorario"],
								"id"=>$_POST["idTipohorario"]);

                $respuesta = ModeloHorarios::mdlEditarHorario($tabla, $datos);

                if ($respuesta == "ok") {
                    
                    echo '<script>
			
					swal.fire({

					
						title: "El horario ha sido modificado correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "horarios";
					}	
				});
			
			</script>';
                }

            }else {
                
                echo '<script>
			
					swal.fire({

					
					title: "El horario no puede ir vacio o llevar caracteres especiales",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",	
					
					}).then(function(result){

					if(result.value){

						window.location = "horarios";
					}	
					});
			
					</script>';
	
           }

        }
	}

	/*=============================================
	ELIMINAR TIPOS DE HORARIOS
	=============================================*/
	
	static public function ctrBorrarHorario(){

		if (isset($_GET["idTipohorario"])){
			
			$tabla ="horarios";
			$datos =$_GET["idTipohorario"];

			$respuesta =  ModeloHorarios::mdlBorrarHorario($tabla, $datos);

			if ($respuesta == "ok") {
				
				echo '<script>
		
			swal.fire({

				
				    icon: "success",
					title: "El horario ha sido borrado correctamente",
					text: "",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
						
				
				}).then(function(result){

					if(result.value){

						window.location = "horarios";
					}	
				});
		
				</script>';
			}
		}
	}

}
