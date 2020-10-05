<?php

require_once "conexion.php";

class ModeloIngresos{

    /*=============================================
	CREAR TIPO DE INGRESO
    =============================================*/			
    
    static public function mdlCrearIngreso($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(ingreso) VALUES (:ingreso)");

        $stmt->bindParam(":ingreso", $datos, PDO::PARAM_STR);

        if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

    }
}