<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Form Processing</title>
</head>
<body>
    <h1>Pemrosesan Form</h1>
    <form action="proses.php" method="post">
        <p>Name : <input type="text" name="nama"></p>
        <p>Email : <input type="email" name="email"></p>
        <p><label><input type="checkbox" name="belajar" value="php">Belajar PHP</label></p>
        <input type="submit" value="Proses Data" name="submit">
    </form>
</body>
</html>