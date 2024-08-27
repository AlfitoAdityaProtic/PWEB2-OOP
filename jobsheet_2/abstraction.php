<?php
// membuat class abstrak Pengguna
abstract class Pengguna
{
    // membuat method abstract aksesFitur
    abstract public function aksesFitur();
}

// membuat class Dosen yang mewarisi class Pengguna
class Dosen extends Pengguna
{
    public function __construct() {}
    // membuat method aksesFitur untuk class Dosen
    public function aksesFitur()
    {
        return "Saya ingin mengajar PWEB 2" . "<br/>" . PHP_EOL;
    }
}
// membuat class Mahasiswa yang mewarisi class Pengguna
class Mahasiswa extends Pengguna
{
    public function __construct() {}
    // membuat method aksesFitur untuk class Mahasiswa
    public function aksesFitur()
    {
        return "Saya ingin mengikuti kuliah PWEB 2" . "<br/>" . PHP_EOL;
    }
}
// instansiasi Objek dan memanggil aksesfitur dari class Dosen dan Mahasiswa
$aksesFitur = new Dosen();
echo $aksesFitur->aksesFitur();
$b = new Mahasiswa();
echo $b->aksesFitur();
