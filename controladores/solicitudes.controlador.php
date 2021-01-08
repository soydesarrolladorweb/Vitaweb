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
			

			$tabla = "solicitud";

			$item = "codigo";
			$valor = $_POST["editarCodigo"];

			$traerSolicitud = ModeloSolicitudes::mdlMostrarSolicitudes($tabla, $item, $valor);

			var_dump($traerSolicitud);

			// foreach ($traerSolicitud as $key => $value) {

			// 	$tablaUsuarios = "usuarios";

			// 	$item = "iduser";
			// 	$valor = $_POST["idSolicitante"];

			// 	$traerUsuario = ModeloUsuarios::mdlMostrarUsuarios($tablaUsuarios, $item, $valor);
				
				
				
			// }

			/*=============================================
			ACTUALIZAR EL TOTAL DE SOLICITUDES REALIZADAS POR CADA USUARIO
			=============================================*/	

			// $totalsolicitudes = array();

			// foreach ($totalsolicitudes as $key => $value) {

			// 	array_push($totalsolicitudes, $value["id_usuario"]);
				
			// 	var_dump($totalsolicitudes);
			// }

			// $item1 = "solicitudes";

			// $valor1 = array_sum($totalsolicitudes) + $traerUsuario["solicitudes"];
			

			// $solicitudesUsuario = ModeloUsuarios::mdlActualizarSolicitudes($tablaUsuarios, $item1, $valor1, $valor);
			
			

			/*=============================================
			GUARDAR LOS CAMBIOS
			=============================================*/

			// 	$datos = array("codigo" => $_POST["editarCodigo"],
			// 	"id_usuario" => $_POST["idSolicitante"],
			// 	"ciudad" => $_POST["nuevaCiudad"],
			// 	"formacion" => $_POST["nuevaFormacion"],
			// 	"otra_formacion" => $_POST["otraformacion"],
			// 	"genero" => $_POST["nuevoGenero"],
			// 	"experiencia_en" => $_POST["nuevaExp_lab"],
			// 	"tiempo_exp" => $_POST["nuevoTiempo_exp"],
			// 	"ciudad_labor" => $_POST["nuevaciudadLabor"],
			// 	"tipo_salario" => $_POST["nuevoSalario"],
			// 	"monto_salario" => $_POST["otroSalario"],
			// 	"tipo_contrato" => $_POST["nuevoTipo_contrato"],
			// 	"otra_duracion" => $_POST["otra_duracion"],
			// 	"observaciones" => $_POST["observaciones"],
			// 	"motivo" => $_POST["nuevoMotivo"],
			// 	"cargo_solicitado" => $_POST["nuevoCargo"],
			// 	"area_personal" => $_POST["nuevArea_personal"],
			// 	"tipo_ingreso" => $_POST["nuevo_ingreso"],
			// 	"horario" => $_POST["nuevoHorario"],
			// 	"nombre_ceco" => $_POST["nuevoNombre_ceco"],
			// 	"ti_pc" => $_POST["ti_pc"],
			// 	"pc_observaciones" => $_POST["pc_observaciones"],
			// 	"ti_telefono" => $_POST["ti_telefono"],
			// 	"tel_observaciones" => $_POST["tel_observaciones"],
			// 	"ti_correo" => $_POST["ti_correo"],
			// 	"correo_observaciones" => $_POST["correo_observaciones"],
			// 	"codigo_ceco" => $_POST["nuevoCodigo_ceco"],
			// 	"ti_observaciones" => $_POST["ti_observaciones"]);
				
			// 	$respuesta = ModeloSolicitudes::mdlEditarSolicitud($tabla, $datos);
				
			// 	if ($respuesta == "ok"){
					
			// 		echo '<script>
			
			// 	swal.fire({

					
			// 			title: "La solicitud ha sido editada correctamente",
			// 			text: "",
			// 			icon: "success",
			// 			button: "Cerrar",
			// 			showConfirmButton: true,
			// 			confirmButtonText: "Cerrar",
			// 			closeOnConfirm: false
							
					
			// 		}).then(function(result){

			// 			if(result.value){

			// 			window.location = "solicitudes";
			// 		}	
			// 	});
			
			// 	</script>';

			// }

		}

	}
	
	
}  
