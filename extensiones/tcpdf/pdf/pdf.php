<?php

require_once "../../../controladores/solicitudes.controlador.php";
require_once "../../../modelos/solicitudes.modelo.php";

class imprimirSolicitud{

	public $codigo;

	public function traerImpresionSolicitud(){

//TRAEMOS LA FUNCIÓN DE LA SOLICITUD

$itemSolicitud = "codigo";
$valorSolicitud = $this->codigo;

$respuestaSolicitud = ControladorSolicitudes::ctrMostrarSolicitudes($itemSolicitud, $valorSolicitud);

$ciudad = substr($respuestaSolicitud["ciudad"],1);
$fecha = substr($respuestaSolicitud["fecha"],0,-8);

//REQUERIMOS LA CLASE TCPDF

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

// ---------------------------------------------------------

$bloque1 = <<<EOF

	<table>
		
		<tr>
			
			<td style="border-bottom: 1px solid #666; border: 1px solid #666; width:50px;"><img src="images/image_demo.jpg"></td>

			<td style="background-color:white; width:370px; border-bottom: 1px solid #666; border: 1px solid #666;">
				
				<div style="font-size:9.5px; text-align:center;">
					
					<br>
					<strong>REQUISICIÓN DE PERSONAL A DESARROLLO HUMANO</strong>

				</div>

			</td>

			

			<td style="background-color:white; width:120px; font-size:8.5px; text-align:center; border-bottom: 1px solid #666; border: 1px solid #666;"><br>A-DH-F-018<br>Version:7.0<br>Vigente desde:30.03.2019<br>Solicitud N. $valorSolicitud</td>

		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------

$bloque2 = <<<EOF

	<table>
		
		<tr>
	
			<td style="width:540px"><img src="images/back.jpg"></td>

		</tr>

	</table>

		<table style="font-size:10px; padding:5px 1px;">

			<tr>

				<td style="background-color:white; text-align:left; width:100px">

				Ciudad: $respuestaSolicitud[ciudad]

	</td>

	<td style="background-color:white; width:440px; text-align:left">
	
		Fecha: $fecha

	</td>

</tr>

	
	</table>


EOF;

$pdf->writeHTML($bloque2, false, false, false, false, '');

// ---------------------------------------------------------


//SALIDA DEL ARCHIVO 

$pdf->Output('pdf.pdf');

}

}

$solicitud = new imprimirSolicitud();
$solicitud ->codigo = $_GET["codigo"];
$solicitud -> traerImpresionSolicitud();

?>
 