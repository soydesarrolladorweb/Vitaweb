/*=============================================
	EDITAR SOLICITUD
=============================================*/

$(".btnEditarSolicitud").click(function(){

    var idSolicitud = $(this).attr("idSolicitud");

    window.location = "index.php?ruta=editar-solicitud&idSolicitud="+idSolicitud;

})

/*=============================================
ELIMINAR SOLICITUD
=============================================*/

$(document).on("click", ".btnEliminarSolicitud", function(){

    var idTiposolicitud = $(this).attr("idTiposolicitud");
    var codigoUnico = $(this).attr("codigoUnico");


    Swal.fire({
        title: '¿Está seguro de borrar la solicitud?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, Borrar la borrar la solicitud!',
         
        

    }).then(function(result){

        if(result.value){

            window.location = "index.php?ruta=solicitudes&idTiposolicitud="+idTiposolicitud+"&codigoUnico="+codigoUnico;
  
        }

    })
  
  })
  