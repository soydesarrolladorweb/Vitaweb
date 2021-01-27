<?php

require_once "conexion.php";

class ModeloSolicitudes{

    /*=============================================
	MOSTRAR SOLICITUDES
    =============================================*/	

    static public function mdlMostrarSolicitudes($tabla, $item, $valor){

        if ($item != null) {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY id ASC");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt ->fetch();

        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

            $stmt -> execute();

            return $stmt ->fetchAll();
        }

        $stmt -> close();

		$stmt = null;
    }


    /*=============================================
	CREAR SOLICITUDES
    =============================================*/	

    static public function mdlIngresarSolicitud($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, id_usuario, ciudad, formacion, otra_formacion, genero, experiencia_en, exp_lab, tiempo_exp, ciudad_labor, tipo_salario, monto_salario, tipo_contrato, otra_duracion, observaciones, motivo, cargo_solicitado, area_personal, tipo_ingreso, horario, nombre_ceco, ti_pc, pc_observaciones, ti_telefono, tel_observaciones, ti_correo, correo_observaciones, codigo_ceco, ti_observaciones) VALUES (:codigo, :id_usuario, :ciudad, :formacion, :otra_formacion, :genero, :experiencia_en, :exp_lab, :tiempo_exp, :ciudad_labor, :tipo_salario, :monto_salario, :tipo_contrato, :otra_duracion, :observaciones, :motivo, :cargo_solicitado, :area_personal, :tipo_ingreso, :horario, :nombre_ceco, :ti_pc, :pc_observaciones, :ti_telefono, :tel_observaciones, :ti_correo, :correo_observaciones, :codigo_ceco, :ti_observaciones)");

        $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
        $stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
        $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":formacion", $datos["formacion"], PDO::PARAM_STR);
        $stmt->bindParam(":otra_formacion", $datos["otra_formacion"], PDO::PARAM_STR);
        $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
        $stmt->bindParam(":experiencia_en", $datos["experiencia_en"], PDO::PARAM_STR);
        $stmt->bindParam(":exp_lab", $datos["exp_lab"], PDO::PARAM_STR);
        $stmt->bindParam(":tiempo_exp", $datos["tiempo_exp"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad_labor", $datos["ciudad_labor"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_salario", $datos["tipo_salario"], PDO::PARAM_STR);
        $stmt->bindParam(":monto_salario", $datos["monto_salario"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_contrato", $datos["tipo_contrato"], PDO::PARAM_STR);
        $stmt->bindParam(":otra_duracion", $datos["otra_duracion"], PDO::PARAM_STR);
        $stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
        $stmt->bindParam(":motivo", $datos["motivo"], PDO::PARAM_STR);
        $stmt->bindParam(":cargo_solicitado", $datos["cargo_solicitado"], PDO::PARAM_STR);
        $stmt->bindParam(":area_personal", $datos["area_personal"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_ingreso", $datos["tipo_ingreso"], PDO::PARAM_STR);
        $stmt->bindParam(":horario", $datos["horario"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre_ceco", $datos["nombre_ceco"], PDO::PARAM_STR);
        $stmt->bindParam(":ti_pc", $datos["ti_pc"], PDO::PARAM_STR);
        $stmt->bindParam(":pc_observaciones", $datos["pc_observaciones"], PDO::PARAM_STR);
        $stmt->bindParam(":ti_telefono", $datos["ti_telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":tel_observaciones", $datos["tel_observaciones"], PDO::PARAM_STR);
        $stmt->bindParam(":ti_correo", $datos["ti_correo"], PDO::PARAM_STR);
        $stmt->bindParam(":correo_observaciones", $datos["correo_observaciones"], PDO::PARAM_STR);
        $stmt->bindParam(":codigo_ceco", $datos["codigo_ceco"], PDO::PARAM_STR);
        $stmt->bindParam(":ti_observaciones", $datos["ti_observaciones"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";	

	   }else{

		   return "error";
	   
	   }

		$stmt->close();
	   
		$stmt = null;
    }

    /*=============================================
	EDITAR SOLICITUD
    =============================================*/			
    
    static public function mdlEditarSolicitud($tabla, $item, $valor, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_usuario = :id_usuario, ciudad = :ciudad, formacion = :formacion, otra_formacion = :otra_formacion, genero = :genero, experiencia_en = :experiencia_en, exp_lab = :exp_lab, tiempo_exp = :tiempo_exp, ciudad_labor = :ciudad_labor, tipo_salario = :tipo_salario, monto_salario = :monto_salario, tipo_contrato = :tipo_contrato, otra_duracion = :otra_duracion, observaciones = :observaciones, motivo = :motivo, cargo_solicitado = :cargo_solicitado, area_personal = :area_personal, tipo_ingreso = :tipo_ingreso, horario = :horario, nombre_ceco = :nombre_ceco, ti_pc = :ti_pc, pc_observaciones = :pc_observaciones, ti_telefono = :ti_telefono, tel_observaciones = :tel_observaciones, ti_correo = :ti_correo, correo_observaciones = :correo_observaciones, codigo_ceco = :codigo_ceco, ti_observaciones = :ti_observaciones WHERE codigo = :codigo");

        $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
        $stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
        $stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
        $stmt->bindParam(":formacion", $datos["formacion"], PDO::PARAM_STR);
        $stmt->bindParam(":otra_formacion", $datos["otra_formacion"], PDO::PARAM_STR);
        $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
        $stmt->bindParam(":experiencia_en", $datos["experiencia_en"], PDO::PARAM_STR);
        $stmt->bindParam(":exp_lab", $datos["exp_lab"], PDO::PARAM_STR);
        $stmt->bindParam(":tiempo_exp", $datos["tiempo_exp"], PDO::PARAM_STR);
        $stmt->bindParam(":ciudad_labor", $datos["ciudad_labor"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_salario", $datos["tipo_salario"], PDO::PARAM_STR);
        $stmt->bindParam(":monto_salario", $datos["monto_salario"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_contrato", $datos["tipo_contrato"], PDO::PARAM_STR);
        $stmt->bindParam(":otra_duracion", $datos["otra_duracion"], PDO::PARAM_STR);
        $stmt->bindParam(":observaciones", $datos["observaciones"], PDO::PARAM_STR);
        $stmt->bindParam(":motivo", $datos["motivo"], PDO::PARAM_STR);
        $stmt->bindParam(":cargo_solicitado", $datos["cargo_solicitado"], PDO::PARAM_STR);
        $stmt->bindParam(":area_personal", $datos["area_personal"], PDO::PARAM_STR);
        $stmt->bindParam(":tipo_ingreso", $datos["tipo_ingreso"], PDO::PARAM_STR);
        $stmt->bindParam(":horario", $datos["horario"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre_ceco", $datos["nombre_ceco"], PDO::PARAM_STR);
        $stmt->bindParam(":ti_pc", $datos["ti_pc"], PDO::PARAM_STR);
        $stmt->bindParam(":pc_observaciones", $datos["pc_observaciones"], PDO::PARAM_STR);
        $stmt->bindParam(":ti_telefono", $datos["ti_telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":tel_observaciones", $datos["tel_observaciones"], PDO::PARAM_STR);
        $stmt->bindParam(":ti_correo", $datos["ti_correo"], PDO::PARAM_STR);
        $stmt->bindParam(":correo_observaciones", $datos["correo_observaciones"], PDO::PARAM_STR);
        $stmt->bindParam(":codigo_ceco", $datos["codigo_ceco"], PDO::PARAM_STR);
        $stmt->bindParam(":ti_observaciones", $datos["ti_observaciones"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";	

	   }else{

		   return "error";
	   
	   }

		$stmt->close();
	   
		$stmt = null;
    }


    /*=============================================
	BORRAR SOLICITUD
	=============================================*/

	static public function mdlBorrarSolicitud($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE codigo = :codigo");

		$stmt-> bindParam("codigo", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

}