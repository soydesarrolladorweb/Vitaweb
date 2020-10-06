/*=============================================
	EDITAR TIPOS DE INGRESOS
=============================================*/

$(".btnEditarTipoingreso").click(function(){

    var idTipoingreso = $(this).attr("idTipoingreso");

    var datos = new FormData();
    datos.append("idTipoingreso", idTipoingreso);

    $.ajax({

        url:"ajax/tiposIngreso.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){

            $("#editarIngreso").val(respuesta["ingreso"]);
            $("#idTipoingreso").val(respuesta["id"]);
        
            
        }

    })
    
})

/*=============================================
	ELIMINAR TIPOS DE INGRESOS
=============================================*/

$(".btnEliminarTipoingreso").click(function(){

    var idTipoingreso = $(this).attr("idTipoingreso");

    Swal.fire({
        title: '¿Está seguro de borrar el tipo de ingreso?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, Borrar el tipo de ingreso!',
         

    }).then(function(result){

        if(result.value){

            window.location = "index.php?ruta=tiposIngreso&idTipoingreso="+idTipoingreso;
  
        }

    })

})
