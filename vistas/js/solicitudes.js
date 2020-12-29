/*=============================================
	EDITAR SOLICITUD
=============================================*/

$(".btnEditarSolicitud").click(function(){

    var idSolicitud = $(this).attr("idSolicitud");

    window.location = "index.php?ruta=editar-solicitud&idSolicitud="+idSolicitud;

})