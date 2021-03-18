<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$buku = $_POST['jumlah_buku'];
	$harga = 12500;
	$diskon = 5/100;
	$total = ($buku * $harga);
	$itungdiskon = 0;

	if($buku>20){
	$itungdiskon = $total * $diskon;
	}
	$hasil = $total - $itungdiskon;
	echo"jumlah yg dibeli $buku";
	echo"dengan $harga dan mendapatkan diskon sebesar 5%";
	echo" jadi total keseluruhan yang harus dibayarkan oleh irwan adalah Rp.$hasil,00.";

	?>

</body>
</html>