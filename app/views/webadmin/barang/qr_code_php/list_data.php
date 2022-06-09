<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Membuat QRcode Dengan PHP</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<h3>Membuat QRcode Generator Dengan PHP</h3>

	<table>
		<tr>
			<td> No </td>
			<td> Barcode </td>
			<td> ID BARANG </td>
			<td> Barang </td>
		</tr>
		<?php
		include "qr_code/qrlib.php";
		for ($i = 1; $i <= 9; $i++) {
			$kode_barcode = '100' . $i . '';
			$tempdir = "img-qrcode/";
			if (!file_exists($tempdir))
				mkdir($tempdir, 0755);
			//$file_name = date("Ymd") . rand() . ".png";
			$file_name = $i . ".png";
			$file_path = $tempdir . $file_name;
			QRcode::png($kode_barcode, $file_path, "H", 3, 2);
			/* param (1)qrcontent,(2)filename,(3)errorcorrectionlevel,(4)pixelwidth,(5)margin */
			$img_barcode = "<img src='" . $file_path . "' />";
		?>
			<tr>
				<td> <?= $i ?> </td>
				<td> <?= $img_barcode ?> </td>
				<td> 100<?= $i ?> </td>
				<td> Indomie-<?= $i ?> </td>
			</tr>
		<?php
		}
		?>

	</table>
</body>

</html>