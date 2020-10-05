<?php

class ControladorIngresos{

    static public function ctrCrearIngreso(){

        if (isset($_POST["nuevoIngreso"])){

            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoIngreso"])){

                $tabla = "tiposdeingreso";

                $datos = $_POST["nuevoIngreso"];

                $respuesta = ModeloIngresos::mdlCrearIngreso($tabla, $datos);

                if ($respuesta == "ok") {
                    
                    echo '<script>
			
				swal.fire({

					
						title: "El tipo de ingreso ha sido guardado correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "tiposIngreso";
					}	
				});
			
			</script>';
                }

            }else {
                
                echo '<script>
			
					swal.fire({

					
					title: "El tipo de ingreso no puede ir vacio o llevar caracteres especiales",
					text: "",
					icon: "error",
					button: "Cerrar",
					showConfirmButton: true,
					confirmButtonText: "Cerrar",	
					
					}).then(function(result){

					if(result.value){

						window.location = "tiposIngreso";
					}	
					});
			
					</script>';
	
           }

        }
    }

}