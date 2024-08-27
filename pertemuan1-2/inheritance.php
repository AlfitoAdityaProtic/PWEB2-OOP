<?php 
// membuat class Produk
class Produk{
    // membuat atribut menjadi protected agar dapat digunakan di class turunannya
    protected $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    public function getNama(){
        return $this->nama;
    }
}
class Buku extends Produk {
    private $penulis;
    public function __construct($nama, $penulis){
        parent::__construct($nama);
        $this->penulis = $penulis;
    }
}
$buku1 = new Buku("Pemrograman PHP", "Alfito Dwi Aditya");
echo $buku1->getNama(); //Output : Pemrograman PHP
?>