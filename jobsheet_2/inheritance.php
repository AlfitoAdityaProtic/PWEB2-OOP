<?php
// membuat class Pengguna
class Pengguna
{
    // membuat atribut nama
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    // membuat method getNama
    public function getNama()
    {
        return $this->nama;
    }
}
// membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna
{
    // menambahkan atribut mataKuliah
    private $mataKuliah;

    public function __construct($nama, $mataKuliah)
    {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    public function getMataKuliah()
    {
        return $this->mataKuliah;
    }
}
// instansiasi Objek dari class dosen dan menampilkan data dari class dosen
$dosen = new Dosen("Alfito Dwi Aditya", "Pemrograman PHP");
echo $dosen->getNama() . "<br/>";
echo $dosen->getmataKuliah();
