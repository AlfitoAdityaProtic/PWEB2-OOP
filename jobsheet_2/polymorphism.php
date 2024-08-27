<?php
// membuat class Pengguna
class Pengguna
{
    public function __construct() {}
    // membuat method aksesFitur dari class pengguna
    public function aksesFitur()
    {
        echo "Akses Fitur" . "<br/>";
    }
}
// membuat class Dosen
class Dosen
{
    public function __construct() {}
    // membuat method aksesFitur dari class Dosen
    function aksesFitur()
    {
        echo "akses kampus luar dan dalam" . "<br/>";
    }
}
// membuat class Mahasiswa
class Mahasiswa
{
    public function __construct() {}
    // membuat method aksesFitur dari class Mahasiswa
    function aksesFitur()
    {
        echo "coba coba aja";
    }
}
// instansiasi Objek dari class Pengguna, Dosen dan Mahasiswa dan memanggil method aksesFitur
$pengguna = new Pengguna();
$pengguna->aksesFitur();
$aksesFitur = new Dosen();
$aksesFitur->aksesFitur();
$aksesFitur = new Mahasiswa();
$aksesFitur->aksesFitur();
