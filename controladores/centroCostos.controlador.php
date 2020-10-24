<?php

class ControladorCentros{

    /*=============================================
	CREAR CENTROS DE COSTO
    =============================================*/
    
    static public function ctrCrearCentro(){


        if (isset($_POST["nuevoCentro"])){
            
            if(preg_match('/^[0-9]+$/', $_POST["nuevoCentro"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombreCentro"])){

                $tabla = "centrocosto";

                $datos = array("codigo"=>$_POST["nuevoCentro"],
                                "nombre"=>$_POST["nuevoNombreCentro"]);

                $respuesta = ModeloCentros::mdlIngresarCentros($tabla, $datos);
                
                if ($respuesta == "ok"){
					
					echo '<script>
			
				swal.fire({

					
						title: "El centro de costo ha sido guardado correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "centroCostos";
					}	
				});
			
			</script>';

			}
            
             
                
            }else {
                
                echo '<script>
			
			swal.fire({

					
					title: "El centro de costo no puede ir vacio o llevar caracteres especiales.",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
							
					
				}).then(function(result){

					if(result.value){

						window.location = "centroCostos";
					}	
				});
			
			</script>';

            }
        }
    }

    /*=============================================
	MOSTRAR CENTROS DE COSTO
	=============================================*/

	static public function ctrMostrarCentros($item, $valor){

		$tabla = "centroCosto";
		
		$respuesta = ModeloCentros::mdlMostrarCentros($tabla, $item, $valor);

		return $respuesta;

    }
    
    /*=============================================
	EDITAR CENTRO DE COSTO
    =============================================*/
    
    static public function ctrEditarCentro(){


        if (isset($_POST["editarCentro"])){
            
            if(preg_match('/^[0-9]+$/', $_POST["editarCentro"]) &&
               preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarNombreCentro"])){

                $tabla = "centrocosto";

                $datos = array("id"=>$_POST["idCentro"],
                               "codigo"=>$_POST["editarCentro"],
                               "nombre"=>$_POST["editarNombreCentro"]);

                $respuesta = ModeloCentros::mdlEditarCentros($tabla, $datos);
                
                if ($respuesta == "ok"){
					
					echo '<script>
			
				swal.fire({

					
						title: "El centro de costo ha sido modificado correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "centroCostos";
					}	
				});
			
			    </script>';

			}
            
        }else{
                
                echo '<script>
			
			swal.fire({

					
					title: "El centro de costo no puede ir vacio o llevar caracteres especiales.",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
					closeOnConfirm: false
							
					
				}).then(function(result){

					if(result.value){

						window.location = "centroCostos";
					}	
				});
			
			    </script>';

            }
        }
    }


    /*=============================================
    ELIMINAR CENTRO DE COSTO
    =============================================*/

    static public function ctrEliminarCentro(){

        if (isset($_GET["idCentro"])){

            $tabla = "centrocosto";
            $datos = $_GET["idCentro"];

            $respuesta = ModeloCentros::mdlEliminarCentro($tabla, $datos);

            if ($respuesta == "ok") {
				
				echo '<script>
		
			swal.fire({

				
				    icon: "success",
					title: "El centro de costo ha sido borrado correctamente",
					text: "",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",
						
				
				}).then(function(result){

					if(result.value){

						window.location = "centroCostos";
					}	
				});
		
				</script>';
			}
        }
    }

}