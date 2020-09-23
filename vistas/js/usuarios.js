// SUBIENDO FOTO

$(".nuevaFoto").change(function(){

    var imagen = this.files[0];
    


    // VALIDANDO EL FORMATO DE LA IMAGEN QUE SEA JPG O PNG

    if (imagen["type"] != "image/jpeg"  && imagen["type"] != "image/png"){

        $(".nuevaFoto").val("");

        swal({
            title: "Error al subir la imagen",
            text: "La imagen debe estar en formato JPG O PNG",
            icon: "error",
            button: "Cerrar",
            confirmButtonText: "Cerrar"
        });
        
    }else if(imagen["size"] > 2000000){

        $(".nuevaFoto").val("");

        swal({
            title: "Error al subir la imagen",
            text: "La imagen no debe pesar mas de 2MB",
            icon: "error",
            button: "Cerrar",
            confirmButtonText: "Cerrar"
        });

    }else{

        var datosImagen = new FileReader;
        datosImagen.readAsDataURL(imagen);

        $(datosImagen).on("load", function(event){

            var rutaImagen = event.target.result;

            $(".previsualizar").attr("src", rutaImagen);

        })
    }
})



// SUBIENDO FIRMA

$(".nuevaFirma").change(function(){

    var firma = this.files[0];
    


    // VALIDANDO EL FORMATO DE LA FIRMA QUE SEA JPG O PNG

    if (firma["type"] != "image/jpeg"  && firma["type"] != "image/png"){

        $(".nuevaFirma").val("");

        swal({
            title: "Error al subir la firma",
            text: "La imagen debe estar en formato JPG O PNG",
            icon: "error",
            button: "Cerrar",
            confirmButtonText: "Cerrar"
        });
        
    }else if(firma["size"] > 2000000){

        $(".nuevaFoto").val("");

        swal({
            title: "Error al subir la firma",
            text: "La imagen no debe pesar mas de 2MB",
            icon: "error",
            button: "Cerrar",
            confirmButtonText: "Cerrar"
        });

    }else{

        var datosFirma = new FileReader;
        datosFirma.readAsDataURL(firma);

        $(datosFirma).on("load", function(event){

            var rutaFirma = event.target.result;

            $(".visualizando").attr("src", rutaFirma);

        })
    }
})

   /*=============================================
	EDITAR USUARIOS
    =============================================*/
    
    $(document).on("click", ".btnEditarUsuario", function(){

        var idUsuario = $(this).attr("idUsuario");

        var datos = new FormData();
        datos.append("idUsuario",idUsuario);

        $.ajax({

            url:"ajax/usuarios.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta){

                $("#editarNombre").val(respuesta["nombre"]);
                $("#editarCorreo").val(respuesta["correo"]);
                $("#editarUsuario").val(respuesta["usuario"]);
                $("#editarTelefono").val(respuesta["telefono"]);
                $("#editarArea").html(respuesta["area"]);
                $("#editarPerfil").html(respuesta["perfil"]);
                $("#editarArea").val(respuesta["area"]);
                $("#editarPerfil").val(respuesta["perfil"]);
                $("#fotoActual").val(respuesta["foto"]);
                $("#firmaActual").val(respuesta["firma"]);

                $("#passwordActual").val(respuesta["password"]);

                if(respuesta["foto"] != ""){
                    
                    $(".previsualizar").attr("src", respuesta["foto"]);

                }

                if(respuesta["firma"] != ""){
                    
                    $(".visualizando").attr("src", respuesta["firma"]);

                }
                
                
            }



        })
    })