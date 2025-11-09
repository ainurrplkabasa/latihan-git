<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center">Selamat Datang <?php echo $_POST["name"]; ?></h1>
    <h6 class="text-center">Email <?php echo $_POST["email"]; ?></h6>
    <h6 class="text-center">Alamat <?php echo $_POST["alamat"]; ?></h6>
    <h6 class="text-center">hobby <?php echo $_POST["hobby"]; ?></h6>
    <h6 class="text-center">Cita-cita <?php echo $_POST["cita"]; ?></h6>
    <h6 class="text-center">Email <?php echo $_POST["makanan"]; ?></h6>
    <a href="index.php" class="btn btn-danger">LogOut</a>
</body>
</html>