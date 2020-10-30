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

    static public function mdlIngresarFirma($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_usuario, imagen) VALUES (:id_usuario, :imagen)");

        $stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_INT);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";	

       }else{

           return "error";
       
       }

        $stmt->close();
       
        $stmt = null;
    }
    

    /*=============================================
	EDITAR FIRMA
    =============================================*/

    static public function mdlEditarFirma($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET imagen = :imagen WHERE id_usuario = :id_usuario");

        $stmt->bindParam(":id_usuario", $datos["id_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";	

       }else{

           return "error";
       
       }

        $stmt->close();
       
        $stmt = null;
    }

/*=============================================
	ELIMINAR FIRMA
=============================================*/
    static public function mdlEliminarFirma($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

    $stmt-> bindParam("id", $datos, PDO::PARAM_INT);

    if($stmt -> execute()){

        return "ok";
    
    }else{

        return "error";	

    }

    $stmt -> close();

    $stmt = null;

}

}