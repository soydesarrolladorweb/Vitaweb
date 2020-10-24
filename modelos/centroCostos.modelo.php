<?php

require_once "conexion.php";

class ModeloCentros{

    /*=============================================
	CREAR CENTROS DE COSTO
    =============================================*/

    static public function mdlIngresarCentros($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(codigo, nombre) VALUES (:codigo, :nombre)");

        $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        
        if($stmt->execute()){

            return "ok";	

       }else{

           return "error";
       
       }

        $stmt->close();
       
        $stmt = null;

    }

    /*=============================================
	MOSTRAR CENTROS
	=============================================*/

	static public function mdlMostrarCentros($tabla, $item, $valor){


		if ($item != null) {
		
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        	$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        	$stmt -> execute();

        	return $stmt -> fetch();


		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        	$stmt -> execute();

        	return $stmt -> fetchAll();
		}

        

			$stmt -> close();
		
        	$stmt = null;

    }

    /*=============================================
	EDITAR CENTROS DE COSTO
    =============================================*/

    static public function mdlEditarCentros($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET codigo = :codigo, nombre = :nombre WHERE id = :id");

        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
        $stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_INT);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        
        if($stmt->execute()){

            return "ok";	

       }else{

           return "error";
       
       }

        $stmt->close();
       
        $stmt = null;

    }

    /*=============================================
	ELIMINAR CENTRO DE COSTO
    =============================================*/

    static public function mdlEliminarCentro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt ->bindParam(":id", $datos, PDO::PARAM_INT);

        if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;
    }

}