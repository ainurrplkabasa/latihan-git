<?php
class Produk{
    public $jenis;
    public $merek;

    public $stok;

    public function pesanProduk(){
        return $this->jenis." ".$this->merek." ".$this->stok." dipesan...";
    }

    public function cekStok(){
        return "Sisa Stok ".$this->stok."<br>";
    }
}

$produk1 = new Produk();
$produk1->jenis = "Televisi";
$produk1->merek = "Samsung";
$produk1->stok = 100;

$produk2 = new Produk();
$produk2->jenis = "Laptop";
$produk2->merek = "Axioo";
$produk2->stok = 5;

$produk3 = new Produk();
$produk3->jenis = "Komputer";
$produk3->merek = "Acer";
$produk3->stok = 10;

$produk4 = new Produk();
$produk4->jenis = "Mouse";
$produk4->merek = "Logitec";
$produk4->stok = 35;

echo $produk1->pesanProduk();
echo "<br>";
echo $produk1->cekStok();
echo "<br>";

echo $produk2->pesanProduk();
echo "<br>";
echo $produk2->cekStok();
echo "<br>";

echo $produk3->pesanProduk();
echo "<br>";
echo $produk3->cekStok();
echo "<br>";

echo $produk4->pesanProduk();