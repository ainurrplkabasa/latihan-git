<?php
    class Siswa
    {
        //ini adalah property dengan nama variabel nisn,alamat, tgl_lahir
        public $nisn=12345;
        public $alamat="banjarejo pagelaran malang";
        public $tgl_lahir="27 September 1998";

        //ini adalah method dengan variabel Identitas
        public function Identitas(){
            return "biodata siswa";
        }
    }

    //membuat sebuah object
    $fanny = new Siswa();
    $fanny->nisn=6789;
    $fanny->alamat="jakarta";
    $fanny->tgl_lahir="2002-10-10";

    //mengakses function di dalam kelas siswa
    echo $fanny->Identitas();
    echo "<br>";

    //mengakses sebuah property dari class siswa
    echo $fanny->nisn;
    echo "<br>";
    echo $fanny->alamat;
    echo "<br>";
    echo $fanny->tgl_lahir;
