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