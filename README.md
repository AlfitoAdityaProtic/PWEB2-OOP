# OOP PHP
# Introduction
repositori ini dibuat untuk memenuhi tugas perkuliahan Praktikum Web 2 yang berisi JobSheet 1 hingga Jobsheet 3. <br>
Pemrograman Berorientasi Objek (OOP) adalah paradigma pemrograman yang mengorganisasi kode menjadi objek-objek. 
Objek ini merepresentasikan entitas dunia nyata, seperti mobil, orang, atau bahkan konsep abstrak seperti akun bank. 
Setiap objek memiliki atribut (data) dan metode (fungsi) yang terkait. 
<hr>

# Jobsheet 1 Start
Pada JobSheet 1 ini, saya membuat class mahasiswa, dan class dosen yang diharuskan menampilkan nama, nim, jurusan, nip dan mata kuliah serta update jurusan dan update nim menggunakan methode yang di perintahkan. <br><br>
Contoh Code yang saya Buat :
```php
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
```
<br><br>
Output dari Code yang saya buat diatas : <br>
![alt text](https://github.com/AlfitoAdityaProtic/PWEB2-OOP/blob/main/jobsheet_1/mahasiswa%26dosen.png?raw=true)


# JobSheet 1 END

# JobSheet 2 Start
## Introduction
pada repositori ini akan menunjukan konsep inti dari OOP termasuk Enkapsulasi, Pewarisan, Polimorfisme, dan Abstraksi.
code-code dibawah ini merupakan code yang sudah saya buat selama jam perkuliahan. bisa di cek kembali pada folder folder diatas
# Daftar Isi :
- [Class dan Object](#classAndobject)
- [Encapsulation](#Encapsulation)
- [Inheritance](#Inheritance)
- [Polymorphism](#Polymorphism)
- [Abstraction](#Abstraction)

## 1. Class dan Object
+ Class: Blueprint atau template untuk menciptakan objek.
+ Object: Instansiasi  dari class yang memiliki atribut (properties) dan perilaku
(methods).
<br>berikut saya lampirkan code yang saya buat :<br>

```php
<?php
// mendefinisikan class
class Mahasiswa
{
    // ini adalah atribut atau properties
    public $nama;
    public $nim;
    public $jurusan;

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
$mahasiswa = new Mahasiswa("Alfito Dwi Aditya", "230202002", "Jurusan Komputer Dan Bisnis");
echo $mahasiswa->tampilkanData();
```

Dan ini adalah outputnya : <br><br>
![alt text](https://github.com/AlfitoAdityaProtic/PWEB2-OOP/blob/main/jobsheet_2/output/Class%20and%20Object.png?raw=true)

## 2. Encapsulation
Encapsulation dalam OOP PHP adalah konsep yang menyembunyikan detail internal suatu objek dan hanya membiarkan akses ke data melalui metode yang ditentukan. 
Ini dilakukan dengan menggunakan visibility modifiers seperti private, protected, dan public untuk mengontrol akses terhadap properti dan metode.
+ Private: Hanya dapat diakses di dalam kelas itu sendiri.
+ Protected: Dapat diakses oleh kelas itu sendiri dan kelas turunannya.
+ Public: Dapat diakses dari mana saja.
<br>

berikut code yang sudah saya buat :<br>

```php
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
```
Berikut adalah outputnya : <br>

![alt text](https://github.com/AlfitoAdityaProtic/PWEB2-OOP/blob/main/jobsheet_2/output/Encapsulation.png?raw=true)

<br>

## 3. Inheritance 
Inheritance atau pewarisan adalah konsep dalam OOP PHP di mana sebuah kelas dapat mewarisi properti dan metode dari kelas lain. Ini memungkinkan kita untuk membuat kelas baru yang mewarisi fungsionalitas dari kelas yang sudah ada.<br>
Berikut saya lampirkan kode yang sudah saya buat :<br><br>

```php
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
```
<br>
Berikut adalah output dari kode di atas: <br><br>

![alt text](https://github.com/AlfitoAdityaProtic/PWEB2-OOP/blob/main/jobsheet_2/output/Inheritance.png?raw=true)
<br>

## 4. Polymorphism
Polymorphism adalah konsep dalam OOP PHP yang memungkinkan objek dari kelas berbeda untuk diakses melalui antarmuka yang sama, tetapi memberikan hasil atau perilaku yang berbeda. Dengan kata lain, satu fungsi bisa bekerja secara berbeda tergantung pada objek yang memanggilnya. <br>
Dengan Polymorphism, kita bisa menggunakan fungsi yang sama dengan hasil yang berbeda tergantung pada kelas yang digunakan, membuat kode lebih fleksibel dan mudah dikembangkan. <br>
Lampiran Kode yang sudah saya buat : 
```php
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
```
<br>
Outputnya adalah : <br><br>

![alt text](https://github.com/AlfitoAdityaProtic/PWEB2-OOP/blob/main/jobsheet_2/output/Polymorphisme.png?raw=true)

<br>

## 5. Abstraction 
Abstraction adalah konsep dalam OOP PHP di mana kita mendefinisikan kelas yang tidak bisa langsung digunakan untuk membuat objek, tetapi berfungsi sebagai kerangka dasar untuk kelas lain. Kelas abstrak ini biasanya memiliki metode yang harus diimplementasikan oleh kelas turunannya.<br>
Untuk contoh code nya adalah :<br><br>

```php
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
```
<br>
Outputnya adalah : <br><br>

![alt text](https://github.com/AlfitoAdityaProtic/PWEB2-OOP/blob/main/jobsheet_2/output/abstraction.png?raw=true)

# JobSheet 2 END
