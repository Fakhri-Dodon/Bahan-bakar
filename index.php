
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shell</title>
</head>
<body>
	<center>
		<h1>Pembelian Bahan Bakar Shell</h1>
		<form method="post" action="">
			<table>
				<tr>
					<td for="liter" style="border: none;">Masukan Jumlah Liter :</td>
					<td>
						<input type="number" name="liter">
					</td>
				</tr>
				<tr>
					<td for="jenis">Masukan Jenis :</td>
					<td>
						<select name="jenis" id="apa" required style="width: 100%;">
							<option disabled selected>----------pilih jenis----------</option>
							<option value="SSuper">Shell Super</option>
							<option value="SVPower">Shell VPower</option>
							<option value="SVPowerDiesel">Shell VPower Diesel</option>
							<option value="SVPowerNitro">Shell VPower Nitro</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><button name="kirim" style="width: 220%;">Beli</button></td>
				</tr>
			</table>		
		</form>
	</center>
</body>
</html>

<?php

include 'proses.php';
$proses = new beli();
$proses->setHarga(15420, 16130, 18310, 16510);
if (isset($_POST['kirim'])) {
	$proses->jumlah = $_POST['liter'];
	$proses->jenis = $_POST['jenis'];
	echo "<br>";
	$proses->hargaBeli();
	$proses->cetakPembelian();
}

?>