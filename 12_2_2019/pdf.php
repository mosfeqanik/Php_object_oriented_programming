<?php  


include"mpdf/mpdf.php";

$pdf=new Mpdf();

$htmlTemplate=
<<<MYPDF
			<!DOCTYPE html>
			<html>
			<head>
				<title>my pdf</title>
			</head>
			<body>
				<h2>happy birthday to me</h2>
				<table style='width:100%;' border='1';>
					<tr>
						<th>name</th>
						<th>ignorlist</th>
					</tr>
					<tr>
						<td>kuttar </td>
						<td>suyor </td>
					</tr>	
					<tr>
					    <td><img src="Koala.jpg"/></td>
					</tr>
				</table>
			</body>
			</html>

MYPDF;


$pdf->WriteHTML($htmlTemplate);
$pdf->Output();


?>
