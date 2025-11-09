<?php
    include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap-min-css">
</head>
<body>

<div class="container">
    <h3 class="text-center">Form Biodata Siswa</h3>
    <form action="welcome.php" method="POST">
        name: <input class="form-control" type="text" name="name"><br>
        E-Mail: <input class="form-control" type="email" name="email"><br>
        alamat : <input class="form-control" type="text" name="alamat"><br>
        Hobby : <input class="form-control" type="text" name="hobby"><br>
        Cita-cita <input class="form-control" type="cita" name="cita"><br>
        makanan Kesukaan <input class="form-control" type="text" name="makanan"><br>
        <input class="btn btn-primary" type="submit" value="submit">
    </form>
</div>
    


</body>
</html>