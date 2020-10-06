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

    /*=============================================
	MOSTRAR TIPOS DE INGRESOS
    =============================================*/	

    static public function mdlMostrarTiposingresos($tabla, $item, $valor){

        if ($item != null) {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt ->fetch();

        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt ->fetchAll();
        }

        $stmt -> close();

		$stmt = null;
    }

    /*=============================================
	EDITAR TIPO DE INGRESO
    =============================================*/			
    
    static public function mdlEditarIngreso($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET ingreso = :ingreso WHERE id = :id");

        $stmt->bindParam(":ingreso", $datos["ingreso"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

        if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

    }


}