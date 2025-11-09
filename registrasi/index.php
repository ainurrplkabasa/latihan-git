<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Form Registrasi</title>
</head>
<body>
<div>
    <h1>Form Registrasi</h1>

    <form action="proses.php" method="post">
        <fieldset>
            <legend>Biodata</legend>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </p>

            <p>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim">
            </p>
            <p>
                <label for="tgl">TGL Lahir : </label>
                <select name="tgl" id="tgl">
                    <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value=$i>";
                            echo str_pad($i, 2, "0", STR_PAD_LEFT);
                            echo "</option>";
                        }
                    ?>
                </select>
                <select name="bln">
                    <option value=1>Januari</option>
                    <option value=2>Februari</option>
                    <option value=3>Maret</option>
                    <option value=4>April</option>
                    <option value=5>Mei</option>
                    <option value=6>Juni</option>
                    <option value=7>Juli</option>
                    <option value=8>Agustus</option>
                    <option value=9>September</option>
                    <option value=10>Oktober</option>
                    <option value=11>November</option>
                    <option value=12>Desember</option>
                </select>
                <select name="thn">
                    <?php
                        for ($i = 2025; $i >= 1980; $i--) {
                            echo "<option value=$i>$i</option>";
                        }
                    ?>
                </select>
            </p>
            <p>
                <label for="alamat">Alamat : </label>
                <textarea name="alamat" id="alamat" cols="60" rows="10"></textarea>
            </p>
            <p>
                <label>Jenis Kelamin</label>
                <label><input type="radio" name="kel" value="laki2">Laki-Laki</label>
                <label><input type="radio" name="kel" value="perempuan">Perempuan</label>
            </p>
        </fieldset>

        <fieldset>
            <legend>user Account</legend>
            <p>
                <label for="username">username : </label>
                <input type="text" name="username" id="username">
            </p>
            <p>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="pass">password : </label>
                <input type="password" name="password" id="password">
            </p>
            <p>
                <label for="repass">Ulangi password : </label>
                <input type="password" name="repassword" id="respassword">
            </p>
        </fieldset>

        <fieldset>
            <legend>Resolusi Tahun ini</legend>
            <p>
                <input type="checkbox" name="target1" value="html" id="html">
                <label for="html">Menguasai HTML</label>
            </p>
            <p>
                <input type="checkbox" name="target2" value="css" id="css">
                <label for="css">Menguasai CSS</label>
            </p>
            <p>
                <input type="checkbox" name="target3" value="php" id="php">
                <label for="php">Menguasai PHP</label>
            </p>
        </fieldset>
        <br>
        <p>
            <input type="submit" value="Kirim Data" class="btn btn-success">
        </p>
    </form>
</div>
</body>
</html>