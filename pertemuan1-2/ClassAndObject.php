<?php 
// Definisi Class
class buku {
    // Atribut atau Properties
    public $judul;
    public $penulis;

    // Constructor
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    // Method atau Function
    public function tampilkanInfo(){
        return "Judul Buku : $this->judul, Penulis : $this->penulis";
    }
}
// Instansiasi Objek
$buku1 = new Buku("Pemrograman PHP", "ALfito Dwi Aditya");
echo $buku1->tampilkanInfo();
?>