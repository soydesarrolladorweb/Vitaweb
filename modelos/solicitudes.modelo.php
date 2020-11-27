<?php

class ModeloSolicitudes{

    /*=============================================
	MOSTRAR SOLICITUDES
    =============================================*/	

    static public function mdlMostrarSolicitudes($tabla, $item, $valor){

        if ($item != null) {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY fecha DESC");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt ->fetch();

        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY fecha DESC");

            $stmt -> execute();

            return $stmt ->fetchAll();
        }

        $stmt -> close();

		$stmt = null;
    }


    /*=============================================
	CREAR SOLICITUDES
    =============================================*/	

    // static public function mdlIngresarSolicitud(){

    //     $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, id_usuario, ciudad, formacion, otra_formacion, genero, exp_lab, tiempo_exp, ciudad_labor, tipo_salario, monto_salario, tipo_contrato, otra_duracion, observaciones, motivo, cargo_solicitado, area_personal, tipo_ingreso, horario, nombre_ceco, ti_pc, pc_observaciones, ti_telefono, tel_observaciones, ti_correo, correo_observaciones, ti_observaciones) VALUES (:codigo, :id_usuario, :ciudad, :formacion, :otra_formacion, :genero, :exp_lab, :tiempo_exp, :ciudad_labor, :tipo_salario, :monto_salario, :tipo_contrato, :otra_duracion, :observaciones, :motivo, :cargo_solicitado, :area_personal, :tipo_ingreso, :horario, :nombre_ceco, :ti_pc, :pc_observaciones, :ti_telefono, :tel_observaciones, :ti_correo, :correo_observaciones, :ti_observaciones)");

    //     $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    //     $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		

	// 	if($stmt->execute()){

	// 		return "ok";	

	//    }else{

	// 	   return "error";
	   
	//    }

	// 	$stmt->close();
	   
	// 	$stmt = null;
    // }

}