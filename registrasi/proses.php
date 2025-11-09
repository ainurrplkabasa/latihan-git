<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Berhasil Registrasi</title>
</head>
<body>
<h1>Halaman Proses</h1>
<?php
    echo "Nama : " . $_POST['nama'] . "<br>";
    echo "NIM : " . $_POST['nim'] . "<br>";
    echo "Tanggal Lahir : " . $_POST['tgl'] . "-" .$_POST["bln"]. "-".$_POST["thn"] . "<br>";
    echo "Alamat : " . $_POST['alamat'] . "<br>";
    echo "Jenis Kelamin : " . $_POST['kel'] . "<br>";
    echo "Username : " . $_POST['username'] . "<br>";
    echo "Email : " . $_POST['email'] . "<br>";
    echo "Password : " . $_POST['password'] . "<br>";
    echo "Konfirmasi Password : " . $_POST['repassword'] . "<br>";
    echo "Target1 : " . $_POST['target1'] . "<br>";
    echo "Target2 : " . $_POST['target2'] . "<br>";
    echo "Target3 : " . $_POST['target3'];
?>
<br>
<a href="index.php" class="btn btn-success">Kembali</a>
</body>
</html>