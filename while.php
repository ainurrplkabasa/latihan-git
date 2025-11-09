<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perulangan dengan while</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $angka = 1;
        while ($angka < 20) {
            echo "angka ke :".$angka."<br>";
            $angka++;
        }
        echo "<br>";
        for ($angka2=1; $angka2 <20 ; $angka2++) { 
            echo "angka ke :".$angka2."<br>";
        }
    ?>
</body>
</html>