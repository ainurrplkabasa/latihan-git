<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $buah = array(
            'semangka' => "isi nya merah",
            'jeruk' => "rasanya manis",
            'apel' => "warna nya merah",
            'anggur' => "harganya mahal"
        );
        echo $buah['apel'];
        echo $buah['jeruk'];

        echo "<br>";

        echo date('l,D-M-y');
        echo date('H:i:s');
    ?>
</body>
</html>