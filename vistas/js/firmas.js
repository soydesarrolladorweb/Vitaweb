/*==================================
SUBIENDO FIRMA
===================================*/

$(".nuevaImagen").change(function(){

    var imagen = this.files[0];

    /*=============================================
  	VALIDAMOS EL FORMATO DE LA IMAGEN SEA JPG O PNG
  	=============================================*/

      if (imagen["type"] != "image/jpeg"  && imagen["type"] != "image/png"){

        $(".nuevaImagen").val("");

        swal.fire({
            title: "Error al subir la imagen",
            text: "La imagen debe estar en formato JPG O PNG",
            icon: "error",
            button: "Cerrar",
            confirmButtonText: "Cerrar"
        });
        
    }else if(imagen["size"] > 2000000){

        $(".nuevaImagen").val("");

        swal.fire({
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

            $(".visualizar").attr("src", rutaImagen);

        })
    }
    
})

/*=============================================
  	EDITAR FIRMA
=============================================*/

$(document).on("click", ".btnEditarFirma", function(){

    var idFirma = $(this).attr("idFirma");

    var datos = new FormData();
        datos.append("idFirma", idFirma);

        $.ajax({

            url:"ajax/firmas.ajax.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta){

                var datosUser = new FormData();
                datosUser.append("idUsuario", respuesta["id"]);

                $.ajax({

                    url:"ajax/usuarios.ajax.php",
                    method: "POST",
                    data: datosUser,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(respuesta){

                        $("#editarUser").val(respuesta["usuario"]);

                    }
                
            })

            $("#imagenActual").val(respuesta["imagen"]);
            
            if(respuesta["imagen"] != ""){
                    
                $(".visualizar").attr("src", respuesta["imagen"]);

            }else{

                $(".visualizarEditar").attr("src", "vistas/img/firmas/default/firma2.png");

            }

            

        }

    });

})

/*=============================================
  	ELIMINAR FIRMA
=============================================*/

$(document).on("click", ".btnEliminarFirma", function(){

    var idFirma = $(this).attr("idFirma");
    var imagen = $(this).attr("imagen");
    var id_usuario = $(this).attr("id_usuario");
    
    Swal.fire({
        title: '¿Está seguro de borrar la firma?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, Borrar firma!',
         
        

    }).then(function(result){

        if(result.value){

            window.location = "index.php?ruta=asignacionFirma&idFirma="+idFirma+"&imagen="+imagen+"&id_usuario="+id_usuario;
  
        }

    })
  
  })