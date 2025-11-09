<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar If else PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    $nilai = 98;
    if($nilai > 90){
        echo "selamat anda lulus dengan predikat sangat baik";
    }elseif($nilai < 90 ){
        echo "Selamat anda lulus dengan predikat baik";
    } else {
        echo "anda harus remidi";
    }

    echo "<br>";

    //jika umur lebih dari 18 boleh membeli
    $umur = 18;

    if($umur >= 18){
        echo "boleh membeli";
    } else {
        echo "tidak boleh membeli";
    }
?>
</body>
</html>