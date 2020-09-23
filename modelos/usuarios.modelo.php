<?php

require_once "conexion.php";

class ModeloUsuarios{



	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($tabla, $item, $valor){


		if ($item != null) {
		
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

        	$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

        	$stmt -> execute();

        	return $stmt -> fetch();


		}else {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

        	$stmt -> execute();

        	return $stmt -> fetchAll();
		}

        

		$stmt -> close();
		
        $stmt = null;


    }
    /*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarUsuario($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, usuario, password, perfil, area, correo, foto,  telefono, firma) VALUES (:nombre, :usuario, :password, :perfil, :area, :correo, :foto, :telefono, :firma)");

	    $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":area", $datos["area"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":firma", $datos["firma"], PDO::PARAM_STR);

		if($stmt->execute()){

	 		return "ok";	

		}else{

			return "error";
		
		}

	 	$stmt->close();
		
	 	$stmt = null;

	 }

	  /*=============================================
	  EDITAR USUARIO
	  =============================================*/


	  static public function mdlEditarUsuarios($tabla, $datos){

	  $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, password = :password, perfil = :perfil, area = :area, correo = :correo, foto = :foto, telefono = :telefono, firma = :firma WHERE usuario = :usuario");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":area", $datos["area"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["foto"], PDO::PARAM_STR);
		$stmt->bindParam(":firma", $datos["firma"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";	

	   }else{

		   return "error";
	   
	   }

		$stmt->close();
	   
		$stmt = null;

	}

}    