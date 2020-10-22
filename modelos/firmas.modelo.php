<?php

require_once "conexion.php";

class ModeloFirmas{

    /*=============================================
	MOSTRAR FIRMAS
    =============================================*/

    static public function mdlMostrarFirmas($tabla, $item, $valor){

        if ($item !=null){
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();

        }else {
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt ->fetchAll();

        }

        $stmt -> close();

		$stmt = null;

    }

    /*=============================================
	REGISTRO DE FIRMA
    =============================================*/

    // static public function mdlIngresarFirma($tabla, $datos){

    //     $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_usuario, firma) VALUES (:id_usuario, :firma)");

    //     $stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
    //     $stmt->bindParam(":firma", $datos["firma"], PDO::PARAM_INT);

    //     if($stmt->execute()){

    //         return "ok";	

    //    }else{

    //        return "error";
       
    //    }

    //     $stmt->close();
       
    //     $stmt = null;
    // }
    
}