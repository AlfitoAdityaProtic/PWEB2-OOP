<?php
// membuat class Mahasiswa
class Mahasiswa
{
    // membuat atribut nama, nim dan jurusan dalam class mahasiswa
    private $nama;
    private $nim;
    private $jurusan;

    // membuat construtor untuk method mahasiswa
    public function __construct($nama = "mikel", $nim = "230202016", $jurusan = "JTM")
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    // method yang berfungsi untuk menampilkan data mahasiswa yang sudah dibuat
    public function tampilkanData()
    {
        return "Nama: $this->nama" . "<br>" .
            "NIM: $this->nim" . "<br>" .
            "Jurusan: $this->jurusan";
    }
    // membuat method update jurusan untuk mengubah jurusan yang sudah di tetapkan
    public function updateJurusan($jurusan)
    {
        return $this->jurusan = $jurusan;
    }
    // membuat method getter untuk atribut nim
    public function getnim()
    {
        return $this->nim;
    }
    // membuat method setter untuk atribut nim
    public function setnim($nim)
    {
        $this->nim = $nim;
    }
}
// membuat class Dosen
class Dosen
{
    // membuat atribut atau properties dalam class dosen yang berisi nama, nip dan mata kuliah
    private $nama;
    private $nip;
    private $mataKuliah;

    // membuat construtor agar langsung di eksekusi jika dijalankan
    public function __construct($nama, $nip, $mataKuliah)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    // membuat method tampilkan dosen untuk menampilkan data dari class dosen yang sudah dibuat
    public function tampilkanDosen()
    {
        return "Nama: $this->nama" . "<br>" .
            "NIP: $this->nip" . "<br>" .
            "Mata Kuliah: $this->mataKuliah";
    }
}
// instansiasi Objek dari class mahasiswa
$mahasiswa = new Mahasiswa();

// menampilkan data dari method tampilkanData untuk class mahasiswa
echo $mahasiswa->tampilkanData();
echo "<br><br>";
// mengupdate jurusna dari method updateJurusan
echo "menampilkan data setelah update jurusan : " . $mahasiswa->updateJurusan("Jurusan Teknik Informatika") . "<br><br>";

// mengubah nim dari method getter dan setter
$mahasiswa->getnim();
$mahasiswa->setnim("230202002") . "<br>";
// menampilkan data yang sudah diubah dalam class mahasiswa
echo $mahasiswa->tampilkanData() . "<br><br>";

// instansiasi objek dari class dosen
$dosen = new Dosen("Prih Diantono Abda`u", "22222222", "PWEB 2");
// menampilkan data dari method tampilkanDosen dalam class dosen
echo $dosen->tampilkanDosen();
