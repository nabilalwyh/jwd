<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Live 2</title>
</head>
<body>
	<?php 

	//input nilai dari variable uts, tugas, dan uas yang bertipe data integer
	$uts = 60;
	$tugas = 60;
	$uas = 90;

	//melakukan perhitungan variable nilaiUAS dengan menghitung rata-rata dari ketiga nilai variable tadi
	$nilaiUAS = ($uts + $tugas + $uas) / 3;

	//if dengan kondisi nilai dari variable nilaiUAS lebih dari sama dengan 90. Jika kondisi terpenuhi maka akan memproses program di baris selanjutnya.
	if ($nilaiUAS >= 90) {
		echo "Nilai UAS anda : $nilaiUAS , Grade = A <br>";
	}

	//else if dengan kondisi nilai dari variable nilaUAS lebih dari sama dengan 80. Jika kondisi terpenuhi maka akan memproses program di baris selanjutnya.
	elseif ($nilaiUAS >= 80) {
		echo "Nilai UAS anda : $nilaiUAS , Grade = B <br>";
	}
	
	//else, jika kedua kondisi tersebut tidak terpenuhi, maka akan memproses program di baris selanjutnya.
	else {
		echo "Nilai UAS anda : $nilaiUAS , Grade = C <br>";
	}	
	?>
</body>
</html>