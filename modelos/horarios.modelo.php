<?php

require_once "conexion.php";

class ModeloHorarios{

    /*=============================================
	CREAR HORARIO
    =============================================*/			
    
    static public function mdlCrearHorario($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(horario) VALUES (:horario)");

        $stmt->bindParam(":horario", $datos, PDO::PARAM_STR);

        if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

    }

    /*=============================================
	MOSTRAR TIPOS DE HORARIOS
    =============================================*/	

    static public function mdlMostrarHorarios($tabla, $item, $valor){

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
	EDITAR HORARIO
    =============================================*/			
    
    static public function mdlEditarHorario($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET horario = :horario WHERE id = :id");

        $stmt->bindParam(":horario", $datos["horario"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

        if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

    }

    /*=============================================
	ELIMINAR HORARIO
    =============================================*/	

    static public function mdlBorrarHorario($tabla, $datos){

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