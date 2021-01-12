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
	
	/*=============================================
	CREAR SOLICITUD
	=============================================*/
	
	static public function ctrCrearSolicitud(){

		if(isset($_POST["nuevoCodigo"])){


			/*=============================================
			ACTUALIZAR EL TOTAL DE SOLICITUDES REALIZADAS POR CADA USUARIO
			=============================================*/	

			$totalsolicitudes = array();

			foreach ($totalsolicitudes as $key => $value) {

				array_push($totalsolicitudes, $value["id_usuario"]);
				
				var_dump($totalsolicitudes);
			}

			$tablaUsuarios = "usuarios";

			$item = "iduser";
			$valor = $_POST["idSolicitante"];

			$traerUsuario = ModeloUsuarios::mdlMostrarUsuarios($tablaUsuarios, $item, $valor);

			$item1 = "solicitudes";

			$valor1 = array_sum($totalsolicitudes) + $traerUsuario["solicitudes"];
			

			$solicitudesUsuario = ModeloUsuarios::mdlActualizarSolicitudes($tablaUsuarios, $item1, $valor1, $valor); 

			/*=============================================
			GUARDAR LA SOLICITUD
			=============================================*/


				$tabla = "solicitud";

				$datos = array("codigo" => $_POST["nuevoCodigo"],
				"id_usuario" => $_POST["idSolicitante"],
				"ciudad" => $_POST["nuevaCiudad"],
				"formacion" => $_POST["nuevaFormacion"],
				"otra_formacion" => $_POST["otraformacion"],
				"genero" => $_POST["nuevoGenero"],
				"experiencia_en" => $_POST["nuevaExp_lab"],
				"tiempo_exp" => $_POST["nuevoTiempo_exp"],
				"ciudad_labor" => $_POST["nuevaciudadLabor"],
				"tipo_salario" => $_POST["nuevoSalario"],
				"monto_salario" => $_POST["otroSalario"],
				"tipo_contrato" => $_POST["nuevoTipo_contrato"],
				"otra_duracion" => $_POST["otra_duracion"],
				"observaciones" => $_POST["observaciones"],
				"motivo" => $_POST["nuevoMotivo"],
				"cargo_solicitado" => $_POST["nuevoCargo"],
				"area_personal" => $_POST["nuevArea_personal"],
				"tipo_ingreso" => $_POST["nuevo_ingreso"],
				"horario" => $_POST["nuevoHorario"],
				"nombre_ceco" => $_POST["nuevoNombre_ceco"],
				"ti_pc" => $_POST["ti_pc"],
				"pc_observaciones" => $_POST["pc_observaciones"],
				"ti_telefono" => $_POST["ti_telefono"],
				"tel_observaciones" => $_POST["tel_observaciones"],
				"ti_correo" => $_POST["ti_correo"],
				"correo_observaciones" => $_POST["correo_observaciones"],
				"codigo_ceco" => $_POST["nuevoCodigo_ceco"],
				"ti_observaciones" => $_POST["ti_observaciones"]);
				
				$respuesta = ModeloSolicitudes::mdlIngresarSolicitud($tabla, $datos);
				
				if ($respuesta == "ok"){
					
					echo '<script>
			
				swal.fire({

					
						title: "La solicitud ha sido guardado correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "solicitudes";
					}	
				});
			
			</script>';

			}


		}

	}

	/*=============================================
	EDITAR SOLICITUD
	=============================================*/
	
	static public function ctrEditarSolicitud(){

		if(isset($_POST["editarCodigo"])){
			
			if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarCodigo"])){

			$tabla = "solicitud";

			$item = "codigo";
			$valor = $_POST["editarCodigo"];


				$datos = array("codigo" => $_POST["editarCodigo"],
				"id_usuario" => $_POST["idSolicitante"],
				"ciudad" => $_POST["editarCiudad"],
				"formacion" => $_POST["editarFormacion"],
				"otra_formacion" => $_POST["editarOtraformacion"],
				"genero" => $_POST["editarGenero"],
				"experiencia_en" => $_POST["editarExperiencia_en"],
				"tiempo_exp" => $_POST["editarTiempo_exp"],
				"ciudad_labor" => $_POST["editarciudadLabor"],
				"tipo_salario" => $_POST["editarSalario"],
				"monto_salario" => $_POST["editar_otroSalario"],
				"tipo_contrato" => $_POST["editarTipo_contrato"],
				"otra_duracion" => $_POST["editar_otra_duracion"],
				"observaciones" => $_POST["editarObservaciones"],
				"motivo" => $_POST["editarMotivo"],
				"cargo_solicitado" => $_POST["editarCargo"],
				"area_personal" => $_POST["editarArea_personal"],
				"tipo_ingreso" => $_POST["editar_ingreso"],
				"horario" => $_POST["editarHorario"],
				"nombre_ceco" => $_POST["editarNombre_ceco"],
				"ti_pc" => $_POST["editar_ti_pc"],
				"pc_observaciones" => $_POST["editar_pc_observaciones"],
				"ti_telefono" => $_POST["editar_ti_telefono"],
				"tel_observaciones" => $_POST["editar_tel_observaciones"],
				"ti_correo" => $_POST["editar_ti_correo"],
				"correo_observaciones" => $_POST["editar_correo_observaciones"],
				"codigo_ceco" => $_POST["editarCodigo_ceco"],
				"ti_observaciones" => $_POST["editar_ti_observaciones"]);
				
				$respuesta = ModeloSolicitudes::mdlEditarSolicitud($tabla, $item, $valor, $datos);
				
				if ($respuesta == "ok"){
					
					echo '<script>
			
				swal.fire({

					
						title: "La solicitud ha sido editada correctamente",
						text: "",
						icon: "success",
						button: "Cerrar",
						showConfirmButton: true,
						confirmButtonText: "Cerrar",
						closeOnConfirm: false
							
					
					}).then(function(result){

						if(result.value){

						window.location = "solicitudes";
					}	
				});
			
				</script>';
			}
			}

		}

	}
	
	
}  
