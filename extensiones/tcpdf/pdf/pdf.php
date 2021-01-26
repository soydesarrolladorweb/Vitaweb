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
			
			<td style="border-bottom: 1px solid #666; border: 1px solid #666; width:50px;"><img src="images/image_demo.jpg"></td>

			<td style="background-color:white; width:370px; border-bottom: 1px solid #666; border: 1px solid #666;">
				
				<div style="font-size:9.5px; text-align:center;">
					
					<br>
					<strong>REQUISICIÓN DE PERSONAL A DESARROLLO HUMANO</strong>

				</div>

			</td>

			

			<td style="background-color:white; width:120px; font-size:8.5px; text-align:center; border-bottom: 1px solid #666; border: 1px solid #666;"><br>A-DH-F-018<br>Version:7.0<br>Vigente desde:30.03.2019</td>

		</tr>

	</table>

EOF;

$pdf->writeHTML($bloque1, false, false, false, false, '');

// ---------------------------------------------------------
//SALIDA DEL ARCHIVO 

$pdf->Output('pdf.pdf');

?>
 