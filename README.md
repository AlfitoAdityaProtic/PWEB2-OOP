# OOP PHP
# Introduction
repositori ini dibuat untuk memenuhi tugas perkuliahan Praktikum Web 2 yang berisi JobSheet 1 hingga Jobsheet 3. <br><br>
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
Output dari Code yang saya buat diatas : <br><br>
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
<br><br>

#JobSheet 3 Start
pada JobSheet ke 3 kali ini saya diharapkan mampu menerapkan prinsip OOP dalam pemrograman PHP melalui tugas yang mengintegrasikan konsep Inheritance, Polymorphism, Encapsulation dan Abstraction.<br><br>

Contoh Code yang sudah saya buat : <br>

```php
    <?php 
// membuat class person
class Person{
    // membuat property name dengan visibilitas private
    private $name;
    // membuat methode construct untuk menginisialisasi properti name saat objek Person dibuat
    public function __construct(string $name){
        $this->name = $name;
    }
    // method untuk mendapatkan nilai dari properti name
    public function getName(){
        return $this->name;
    }
    // method untuk mengubah nilai dari properti
    public function setName(string $name){
        $this->name = $name;
    }
    // method untuk mendapatkan peran dari kelas person
    public function getRole(){
        return "Hanya Manusia Biasa";
    }
}
// membuat class student yang mewarisi(extends) class Person
class Student extends Person{
    // menambahkan property student ID dengan visibilitas private
    private $studentID;
    // method yang berisi argumen name, student id dan memanggil constructor dari class induk (Person)
    public function __construct(string $name, int $studentID){
        parent::__construct($name); //memanggil constructor dari class Person
        $this->studentID = $studentID;
    }
    // method untuk mendapatkan nilai student id
    public function getStudentID(){
        return "Student ID: " . $this->studentID;
    }
    // method untuk mengubah nilai student id
    public function setStudentID(int $studentID){
        $this->studentID = $studentID;
    }
    // Override(menggantikan) method getName() untuk student dari kelas Person untuk memberikan nama dengan format berbeda
    public function getName(){
        return "Student Name: " . parent::getName(); //memanggil getName() dari class Person
    }
}
// membuat class teacher yang mewarisi dari class Person
class Teacher extends Person{
    // menambahkan property teacher id dengan visibilitas private
    private $teacherID;
    // method yang berisi argumen name, teacher id dan memanggil constructor dari class induk (Person)
    public function __construct(string $name, int $teacherID){
        parent::__construct($name); //memanggil construct dari kelas Person
        $this->teacherID = $teacherID;
    }
    // method untuk mendapatkan nilai teacher id
    public function getTeacherID(){
        return "Teacher ID: " . $this->teacherID;
    }
    // override method getname() dari kelas Person untuk memberikan nama dengan format yang berbeda
    public function getName(){
        return "Teacher Name: " . parent::getName(); //memanggil method getName() dari kelas Person
    }
}
// membuat kelas abstrak course yang berfungsi sebagai blueprint untuk kelas-kelas turunan
abstract class Course {
    // method abstrak yang harus di implementasikan oleh kelas turunannya
    abstract public function getCourseDetails();
}
// membbuat kelas OnlineCourse yang mewarisi kelas Course
class OnlineCourse extends Course{
    public function __construct(){}
    // implementasi dari method getCourseDetails untuk kelas OnlineCourse
    public function getCourseDetails(){
        return "Online Course akan dilakukan secara Daring" . "<br>";
    }
}
// membuat kelas OfflineCourse yang mewarisi kelas Course
class OfflineCourse extends Course{
    public function __construct(){}
    // Implementasi dari method getCourseDetails untuk kelas OfflineCourse 
    public function getCourseDetails(){
        return "Offline Course akan dilakukan secara Luring" . "<br>";
    }
}
// membuat kelas Dosen yang mewarisi kelas Person
class Dosen extends Person{
    // menambahkan properti nidn dengan visibilitas private
    private $nidn;
    // konstruktor yang berisi argumen name, nidn dan memanggil konstruktor kelas induk(Person)
    public function __construct(string $name, int $nidn){
        parent ::__construct($name); //memanggil konstruktor dari kelas Person
        $this->nidn = $nidn;
    }
    // method untuk mendapatkan nilai nidn
    public function getNidn(){
        return "NIDN : " . $this->nidn;
    }
    // method untuk mengubah nilai nidn
    public function setNidn(int $nidn){
        $this->nidn = $nidn;
    }
    // override method getName() untuk menambahkan informasi bahwa ini adalah nama dosen
    public function getName(){
        return "Dosen Name: " . parent::getName(); // memanggil method getName() dari kelas Person
    }
    // override method getRole() untuk memberikan peran dosen
    public function getRole(){
        return "Saya Seorang Dosen";
    }
}
// membuat kelas mahasiswa yang mewarisi kelas Person
class Mahasiswa extends Person{
    // menambahkan properti nim dengan visibilitas private
    private $nim;
    // konstruktor yang berisi argumen name, nim dan memanggil konstruktor kelas induk(Person)
    public function __construct(string $name, int $nim){
        parent::__construct($name); //memanggil konstruktor dari kelas Person
        $this->nim = $nim;
    }
    // method untuk mendapatkan nilai nim
    public function getNim(){
        return "NIM : " . $this->nim;
    }
    // method untuk mengubah nilai nim
    public function setNim(int $nim){
        $this->nim = $nim;
    }
    // override methode getName() untuk menambahkan informasi bahwa ini adalah nama mahasiswa
    public function getName(){
        return "Mahasiswa Name: " . parent::getName();
    }
    // override method getRole() dari class person untuk memberikan peran mahasiswa
    public function getRole(){
        return "Saya Seorang Mahasiswa";
    }
}
// membuat kelas abstrak jurnal
abstract class Jurnal{
    // menambahkan properti judul dan penulis dengan visibilitas protected
    protected $judul;
    protected $penulis;
    // konstruktor yang berisi argumen judul dan penulis, argumen penulis akan diambil dari class person
    public function __construct(string $judul, Person $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    abstract function getJurnal();
}
// membuat kelas turunan JurnalDosen yagn mewarisi dari kelas Jurnal
class JurnalDosen extends Jurnal{
    // konstruktor yang berisi argumen judul dan penulis(dosen)
    public function __construct($judul, Dosen $penulis){
        parent::__construct($judul, $penulis);
    }
    // Implementasi method getJurnal() untuk kelas JurnalDosen
    public function getJurnal(){
        return "Judul jurnal: " . $this->judul . "<br>" .
                "Penulis jurnal: " . $this->penulis->getName() . "<br>" .
                "Dengan " . $this->penulis->getNidn(); 
    }
}
// membuat class JurnalMahasiswa yang mewarisi dari kelas Jurnal
class JurnalMahasiswa extends Jurnal {
    // Construct untuk mengisialisasi property judul dan penuli(Mahasiswa)
    public function __construct(string $judul, Mahasiswa $penulis){
        parent::__construct($judul, $penulis);
    }
    // Implementasi method getJurnal() untuk JurnalMahasiswa
    public function getJurnal(){
        return "Judul jurnal: " . $this->judul . "<br>" .
                "Penulis jurnal: " . $this->penulis->getName() . "<br>" .
                "Dengan " . $this->penulis->getNim();
    }
}

// instansiasi objek dari class Person
$name = new Person("Alfito Dwi Aditya");
// menampilkan data dari class Person
echo $name->getName() . "<br>";
echo $name->getRole() . "<br><br>";

// instansiasi objek dari class Student
$nama2 = new Student("mikel",230200000);
// mengambil data nama dan student id dari class Student menggunakan setter
echo $nama2->setName("bikra") . "<br>";
echo $nama2->setStudentID(230202006);
// menampilkan data nama dan student id dari class Student menggunakan getter
echo $nama2->getName() . "<br>";
echo $nama2->getStudentID() . "<br><br>";


// instansiasi objek dari class Teacher
$teacher = new  Teacher("Mr. John Smith", 3000000);
// menampilkan data nama dan teacher id dari class Teacher
echo $teacher->getName() . "<br>";
echo $teacher->getTeacherID(). "<br><br>";

// instansiasi objek dari class Online Course
$course = new OnlineCourse();
echo $course->getCourseDetails() . "<br>"; //menampilkan data dari methode getCourseDetails dari class OnlineCourse

// instansiasi objek dari class Offline Course
$course2 = new OfflineCourse();
echo $course2->getCourseDetails() . "<br>"; //menampilkan data dari methode getCourseDetails dari class OfflineCourse

// intansiasi objek dari class Dosen
$dosen = new Dosen("Prih Diantono Abda`u", 123456789);

// mengambil data nama dan nidn dari class dosen menggunakan setter
echo $dosen->setName("dendi") . "<br>";
echo $dosen->setNidn(26) . "<br>";

// menampilkan data nama dan nidn dari class Dosen menggunakan getter
echo $dosen->getNidn() . "<br>";
echo $dosen->getName() . "<br>";
echo $dosen->getRole() . "<br>";

// instansiasi objek dari class Mahasiswa
$mahasiswa = new Mahasiswa("Muhammad Alfito", 230202002);

// mengambil data nama dan nim dari class mahasiswa menggunakan setter
echo $mahasiswa->setName("bikra") . "<br>";
echo $mahasiswa->setNim(230202006) . "<br>";

// menampilkan data dari class Mahasiswa menggunakan getter
echo $mahasiswa->getNim() . "<br>";
echo $mahasiswa->getName() . "<br>";
echo $mahasiswa->getRole() . "<br><br>";

// instansiasi objek dari class jurnal dosen
$jurnal  = new JurnalDosen("Implementasi Pemrograman Web", $dosen);
echo $jurnal->getJurnal(). "<br><br>"; //menampilkan hasil

// instansiasi objek dari class jurnal mahasiswa
$jurnal2 = new JurnalMahasiswa("Pembuatan Kerangka bij Besi", $mahasiswa);
echo $jurnal2->getJurnal();
```
<br><br>

Output dari Code yang sudah Saya Buat : <br><br>

![alt text](https://github.com/AlfitoAdityaProtic/PWEB2-OOP/blob/main/jobsheet_3/output/perkuliahan.png?raw=true)

# JobSheet 3 END
