<?php
if(!isset($_POST["submit"])){
    header("location:form.php");
    die();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Proses Form</title>
</head>
<body>
    <h1>Halaman Proses</h1>
    <?php
        echo "Nama : " . $_POST['nama'] . "<br>";
        echo "Email : " . $_POST['email']."<br>";
        if (isset($_POST['belajar'])) {
            echo "Belajar : " . $_POST['belajar']."<br>";
        }
    ?>
</body>
</html>