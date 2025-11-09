<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Switch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        $bulan = 13;
        switch ($bulan) {
            case 1:
                echo "bulan januari";
                break;
            case 2:
                echo "bulan februari";
                break;
            case 3:
                echo "bulan maret";
                break;
            case 4:
                echo "bulan april";
                break;
            case 5:
                echo "bulan mei";
                break;
            case 6:
                echo "bulan juni";
                break;
            case 7:
                echo "bulan juli";
                break;
            case 8:
                echo "bulan agustus";
                break;
            case 9:
                echo "bulan september";
                break;
            case 10:
                echo "bulan oktober";
                break;
            case 11:
                echo "bulan november";
                break;
            case 12:
                echo "bulan desember";
                break;
            default:
                echo "anda salah memilih bulan";
                break;
        }
    ?>
</body>
</html>