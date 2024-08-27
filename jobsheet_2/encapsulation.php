<?php
// mendefinisikan class
class Mahasiswa
{
    // membuat atribut atau properties menjadi private 
    private $nama;
    private $nim;
    private $jurusan;

    // membuat construtor
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // membuat method getter dan setter untuk masing-masing atribut
    public function getnama()
    {
        return $this->nama;
    }
    public function setnama($nama)
    {
        $this->nama = $nama;
    }
    public function getnim()
    {
        return $this->nim;
    }
    public function setnim($nim)
    {
        $this->nim = $nim;
    }
    public function getjurusan()
    {
        return $this->jurusan;
    }
    public function setjurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    // membuat method tampilkan Data
    public function tampilkanData()
    {
        echo "Nama: $this->nama" . "<br>";
        echo "NIM: $this->nim" . "<br>";
        echo "Jurusan: $this->jurusan";
    }
}
// instansiasi Objek
$mahasiswa = new Mahasiswa("Alfito Dwi Aditya", "230202002", "Jurusan Komputer Dan Bisnis");


// mengambil data menggunakan getter
echo "Menampilkan data mahasiswa menggunakan getter : <br><br>";
echo "Nama: " . $mahasiswa->getnama() . "<br>";
echo "NIM: " . $mahasiswa->getnim() .  "<br>";
echo "Jurusan: " . $mahasiswa->getjurusan() . "<br><br>";

// mengubah data menggunakan setter
echo "Menampilkan data mahasiswa menggunakan setter : <br><br>";
$mahasiswa->setnama("bikra abna satanic al ma'juj");
$mahasiswa->setnim("666");
$mahasiswa->setjurusan("Jurusan Grand Satanic Temple");

$mahasiswa->tampilkanData();
