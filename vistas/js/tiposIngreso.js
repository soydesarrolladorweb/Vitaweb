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
