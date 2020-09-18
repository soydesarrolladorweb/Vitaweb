// SUBIENDO FOTO

$(".nuevaFoto").change(function(){

    var imagen = this.files[0];
    


    // VALIDANDO EL FORMATO DE LA IMAGEN QUE SEA JPG O PNG

    if (imagen["type"] != "imagen/jpeg"  && imagen["type"] != "imagen/png"){

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