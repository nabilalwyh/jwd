<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas2_Nabila Alawiyah</title>
    <!-- merupakan judul dari web ini -->
</head>

<body>
    <h3>=====CETAK BILANGAN GANJIL GENAP 1-100=====</h3>
    <!-- untuk mencetak teks dengan ukuran h3 -->

    <?php
    for ($bil = 1; $bil <= 100; $bil++) {
        //looping for untuk variable bil ($bil) yang nilainya selalu bertambah dari 1 sampai 100.

        if ($bil % 2 == 0) {
            //jika kondisi nilai variable bil habis dibagi 2 terpenuhi, maka akan mengeksekusi perintah pada baris selanjutnya yaitu
            echo "$bil adalah Bilangan Genap <br>";
        } else {
            //jika kondisi tadi tidak terpenuhi, maka akan mengeksekusi perintah pada baris selanjutnya yaitu
            echo "$bil adalah Bilangan Ganjil <br>";
        }
    }
    ?>

</body>

</html>