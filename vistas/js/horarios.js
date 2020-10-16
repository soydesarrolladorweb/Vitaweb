/*=============================================
	EDITAR HORARIOS
=============================================*/

$(".btnEditarhorario").click(function(){

    var idTipohorario = $(this).attr("idTipohorario");

    var datos = new FormData();
    datos.append("idTipohorario", idTipohorario);

    $.ajax({

        url:"ajax/horarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){

            $("#editarHorario").val(respuesta["horario"]);
            $("#idTipohorario").val(respuesta["id"]);
        
            
        }

    })
    
})

/*=============================================
	ELIMINAR HORARIOS
=============================================*/

$(".btnEliminarHorario").click(function(){

    var idTipohorario = $(this).attr("idTipohorario");

    Swal.fire({
        title: '¿Está seguro de borrar el horario?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, Borrar el horario!',
         

    }).then(function(result){

        if(result.value){

            window.location = "index.php?ruta=horarios&idTipohorario="+idTipohorario;
  
        }

    })

})
