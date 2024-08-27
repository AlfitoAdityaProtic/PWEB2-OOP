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

// ini adalah batas antara JobSheet dan Tugas 3

// Tugas Start
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
// Tugas End

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

// Instansiasi Tugas Start
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

// Instansiasi Tugas End