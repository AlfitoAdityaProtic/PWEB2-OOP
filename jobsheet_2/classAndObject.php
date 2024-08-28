<?php
// mendefinisikan class
class Mahasiswa
{
    // ini adalah atribut atau properties
    public $nama;
    public $nim;
    private $jurusan;

    // membuat construtor
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // membuat metode atau function
    public function tampilkanData()
    {
        return "Nama: $this->nama" . "<br>" . "NIM: $this->nim" . "<br>" . "Jurusan: $this->jurusan";
    }
}
// instansiasi Objek
$mahasiswa = new Mahasiswa("Alfito Dwi Aditya",  "230202002", "Jurusan Komputer Dan Bisnis");
echo $mahasiswa->tampilkanData() . "<br>";

