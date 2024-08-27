<?php 
// menambah Atribut dan metode
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function tampilkanInfo(){
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}
$buku1 = new Buku("Pemrograman PHP", "Erlangga");
echo $buku1->tampilkanInfo();
?>