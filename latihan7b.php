<?php
	$uts = $_POST['jumlah_uts'];
	$uas = $_POST['jumlah_uas'];
	$tugas = $_POST['jumlah_tugas'];

	echo "Nilai Uts = $uts <br>";
	echo "Nilai Uas = $uas<br>";
	echo "Nilai Tugas = $tugas<br>";

	$itunguts = $uts * 35/100;
	$itunguas = $uas * 50/100;
	$itungtugas = $tugas * 15/100;
	$total= $itunguts + $itunguas + $itungtugas;
	echo "Nilai Total Keseluruhan Risma adalah $total";