<?php

//REQUERIMOS LA CLASE TCPDF

require_once('tcpdf_include.php');

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

// ---------------------------------------------------------

$bloque1 = <<<EOF

	<table>
		
		<tr>
			
			<td style="width:50px;"><img src="images/image_demo.jpg"></td>

			<td style="background-color:white; width:300px;">
				
				<div style="font-size:8.5px; text-align:right;">
					
					<br>
					REQUISICIÓN DE PERSONAL A DESARROLLO HUMANO

				</div>

			</td>

			

			<td style="background-color:white; width:190px; font-size:8.5px; text-align:center;"><br>A-DH-F-018<br>Version:7.0<br>Vigente desde:30.03.2019</td>

		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------
//SALIDA DEL ARCHIVO 

$pdf->Output('pdf.pdf');

?>
 