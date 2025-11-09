<?php
class Siswa
{
    //ini adalah property dengan nama variabel nisn,alamat, tgl_lahir
    public $nisn=325;
    public $alamat="";
    public $tgl_lahir="";

    //ini adalah method dengan variabel Identitas
    public function Identitas(){
        return "biodata siswa";
    }
}

//membuat sebuah object
$fanny = new Siswa();
$fanny->nisn=325001;
$fanny->alamat="malang";
$fanny->tgl_lahir="1990-03-25";

$nova = new Siswa();
$nova->nisn=325002;
$nova->alamat="batu";
$nova->tgl_lahir="2000-03-25";

$novi = new Siswa();
$novi->nisn=325003;
$novi->alamat="surabaya";
$novi->tgl_lahir="2002-03-25";

//print_r untuk menampilkan semua object beserta property nya
print_r($fanny);
echo "<br>";
print_r($nova);
echo "<br>";
print_r($novi);

