/*=============================================
SideBar Menu
=============================================*/

$('.sidebar-menu').tree()

/*=============================================
Inicializar Select2
=============================================*/
$('.select2').select2()

//Funcionamiento de Select2 para modal
$.fn.modal.Constructor.prototype.enforceFocus = function() {};
