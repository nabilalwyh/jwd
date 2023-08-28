<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas Live 2</title>
</head>
<body>
	<?php 

	$uts = 60
	$tugas = 60
	$uas = 90

	$nilaiUAS = ($uts + $tugas + $uas) / 3;

	if ($nilaiUAS >= 90) {
		echo "Nilai UAS anda : $nilaiUAS , Grade = A";
	}

	if ($nilaiUAS >= 80) {
		echo "Nilai UAS anda : $nilaiUAS , Grade = B";
	}
	
	if ($nilaiUAS >= 70) {
		echo "Nilai UAS anda : $nilaiUAS , Grade = C";
	}
	
	if ($nilaiUAS >= 60) {
		echo "Nilai UAS anda : $nilaiUAS Grade = D";
	}
	
	else{
		echo "Nilai UAS anda : $nilaiUAS , Grade = E";
	}
	?>
</body>
</html>