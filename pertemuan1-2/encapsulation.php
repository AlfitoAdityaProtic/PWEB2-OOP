<?php 
class Buku {
    private $judul;
    private $penulis;

    public function __construct($judul,$penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    public function getJudul(){
        return "$this->judul, $this->penulis";
    }
    public function setJudul($judul){
        $this->judul = $judul;
    }
}
$buku1 = new Buku("Pemrograman PHP", "Alfito Dwi Aditya");
echo $buku1->getjudul(); // Output: Pemrograman PHP, Alfito Dwi Aditya
?>