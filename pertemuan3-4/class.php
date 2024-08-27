<?php 
// definisi Kelas
class Mobil{
    public $merk;
    public $warna;

    // Construct
    public function __construct($merk, $warna){
        $this->merk = $merk;
        $this->warna = $warna;
    }

    // Metode atau Function
    public function deskripsi(){
        return "Mobil ini adalah $this->merk dengan warna $this->warna";
    }
}

// Instansiasi Objek 
$mobil = new Mobil("Toyoya", "Hitam");
echo $mobil->deskripsi();
?>