<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan pemrograman PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="tex/javascript" src="js/bootstrap.min.js"></script>
</head>
<body class="bg-info">
    <div class="container bg-warning">
        <div class="mt-3 p-3 bg-primary text-white rounded">
            <p class="h1">Jumlah Data siswa</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda explicabo nulla ipsum hic, corporis culpa! Animi harum quaerat beatae quis quas eum. Atque ratione necessitatibus numquam. Consequuntur cum odit voluptate.</p>
        </div>

        <div class="mt-2 p-3 bg-secondary text-white rounded">
            <p class="h1">Data guru</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius id incidunt animi, placeat ea enim aperiam dignissimos, commodi provident, quibusdam eum modi nobis ipsam libero tempore quas repellat! Asperiores, pariatur!</p>
        </div>

        <p class="h3 text-danger">ini adalah tabel</p>

        <button type="button" class="btn btn-primary">
            <span class="spinner-border spinner-border-sm"></span>
            Tambah Data
        </button>

        <button type="button" class="btn btn-dark">
            <span class="spinner-grow spinner-grow-sm"></span>    
            Ubah Data
        </button>
        
        <button type="button" class="btn btn-danger">Hapus Data</button>
        
        <div class="table responsive">
            <table class=" table table-striped table-bordered table-hover">
                <thead>
                    <tbody>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">nama</th>
                            <th class="text-center">kelas</th>
                            <th class="text-center">Foto</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Bpk. Ainur Roziqin</td>
                            <td>XI</td>
                            <td class="text-center"><img src="images/profil.jpg" alt="" class="img-thumbnail" width="80" height="110"></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bpk. Roziqin</td>
                            <td>XII</td>
                            <td class="text-center"><img src="images/profil.jpg" alt="" class="img-thumbnail" width="80" height="110"></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bpk. Ainur</td>
                            <td>X</td>
                            <td class="text-center"><img src="images/download.jpeg" alt="" class="img-thumbnail" width="80" height="110"></td>
                        </tr>
                    </tbody>
                </thead>
            </table>
        </div>

        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Sukses !</strong>By Disipline
        </div>

        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Warning !</strong>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem rerum quam molestiae culpa vero, quisquam asperiores hic vel odio expedita aperiam consectetur obcaecati ea. Cumque aliquam sequi ad sed? Voluptatum?
        </div>
        
        <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <strong>Warning !</strong>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem rerum quam molestiae culpa vero, quisquam asperiores hic vel odio expedita aperiam consectetur obcaecati ea. Cumque aliquam sequi ad sed? Voluptatum?
        </div>


    </div>
</body>
</html>