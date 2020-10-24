/*=============================================
	EDITAR CENTRO DE COSTO
=============================================*/

$(".btnEditarCentro").click(function(){

    var idCentro = $(this).attr("idCentro");

    var datos = new FormData();
    datos.append("idCentro", idCentro);

    $.ajax({

        url:"ajax/centroCostos.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){

            $("#idCentro").val(respuesta["id"]);
            $("#editarCentro").val(respuesta["codigo"]);
            $("#editarNombreCentro").val(respuesta["nombre"]);
            
        }

    })
    
})

/*=============================================
	ELIMINAR CENTRO DE COSTO
=============================================*/

$(".btnEliminarCentro").click(function(){

    var idCentro = $(this).attr("idCentro");
        
    Swal.fire({
        title: '¿Está seguro de borrar el centro de costo?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, Borrar el centro de costo!',
         

    }).then(function(result){

        if(result.value){

            window.location = "index.php?ruta=centroCostos&idCentro="+idCentro;
  
        }

    })
})