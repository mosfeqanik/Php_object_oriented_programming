<?php

include 'mpdf/mpdf.php';
include 'db.php';
$sh = new db();
$result = $sh->show();

$pdf = new Mpdf();

$data = "";

foreach ($result as $value) {
	$data.="<tr>";
	$data.="<td>" . $value['name']."</td>";
	$data.="<td>" . $value['model']."</td>";
	$data.="<td>" . $value['price']."</td>";
	$data.="</tr>";
}

$htmlTemplate = 
<<<CTPDF
	<!DOCTYPE html>
		<html>
		<head>
			<title></title>
		</head>
		<body>
			<table style='width:100%;'>
				$data;
			</table>
		</body>
		</html>	
CTPDF;

$pdf->WriteHTML($htmlTemplate);
$pdf->Output();		

?>