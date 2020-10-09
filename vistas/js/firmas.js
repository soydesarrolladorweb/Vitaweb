/*=============================================
CARGAR LA TABLA DINAMICA DE FIRMAS
=============================================*/

$.ajax({

    url: "ajax/datatable-firmas.ajax.php",
    success:function(respuesta){

        console.log("respuesta", respuesta);
    }

})

$('.tablaFirmas').DataTable( {
    "ajax": "ajax/datatable-firmas.ajax.php"
} );