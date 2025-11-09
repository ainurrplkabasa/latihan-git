<?php
//cek apakah form telah di submit
if (isset($_POST['kirim'])) {

    //ambil nilai form
    $nama =trim($_POST['nama']) ;
    $email = trim($_POST['email']) ;

    //siapkan variabel untuk menampung pesan error
    $pesan_error ="";

    //cek apakah "nama" sudah di isi atau belum
    if (empty($nama)) {
        $pesan_error .= "Nama tidak boleh kosong<br>";
    }

    //cek email
    if (empty($email)) {
        $pesan_error .= "Email tidak boleh kosong<br>";
    }
    //jika tidak ada error, tampilkan isi form
    if($pesan_error==""){
        //form telah disubmit, proses data
        echo "<h1>Form Berhasil di Proses</h1>";
        echo "Nama : $nama<br>";
        echo "Email : $email";
        die();
    }
} else {
    $pesan_error = "";
    $nama = "";
    $email = "";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Form Register</h1>
<?php echo $pesan_error; ?>
<form action="index.php" method="post">
    <p>Nama : <label>
            <input type="text" name="nama" value="<?php echo $nama ?>">
        </label></p>
    <p>Email : <input type="text" name="email" value="<?php echo $email ?>"></p>
    <input type="submit" name="kirim" value="Proses Data">
</form>
</body>
</html>