
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php bagian 1</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    echo "seri belajar pemrograman server-side dengan php <br>";
    echo "di SMKS Babussalam sekolah pusat keunggulan<br>";
    $nama = "Bpk. Ainur Roziqin";
    $usia = 31;
    $alamat = "dsn sumber perkul gedangan kabupaten malang";
    $notelp = "082234684025";
    $beratBadan = 45.4;

    $nama = "roziqin ainur";
    $isMenikah = true;

    $murid = array("ainur","roziqin","dico","emma","anam");

    echo "ini adalah murid dari data array : ".$murid[4]."<br>";

    echo " anda : $nama <br>";
    echo "usia anda : $usia <br> ";
    echo "alamat anda : $alamat <br>";
    echo "no telp anda : $notelp <br>";
    echo "nama anda : ".$nama." usia anda adalah :".$usia;
    echo "<br>";
    echo "Berat badan : $beratBadan <br>";
    echo "apakah sudah menikah : ".$isMenikah."<br>";

    echo "jumlah karakter".strlen($alamat);
    echo "<br>";
    echo strlen($nama);
    echo "<br>";
    echo "menghitung jumlah kata ".str_word_count($alamat);
?>  
</body>
</html>