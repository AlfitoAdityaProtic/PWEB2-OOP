<?php 
// membuat class person
class Person{
    // membuat property name dengan visibility private
    private $name;
    public function __construct(string $name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function getRole(){
        return "Hanya Manusia Biasa";
    }
}
// membuat class student yang mewarisi class Person
class Student extends Person{
    private $studentID;
    public function __construct(string $name, int $studentID){
        parent::__construct($name);
        $this->studentID = $studentID;
    }
    public function getStudentID(){
        return "Student ID: " . $this->studentID;
    }
    public function setStudentID(int $studentID){
        $this->studentID = $studentID;
    }
    // Override method getName() untuk student
    public function getName(){
        return "Student Name: " . parent::getName(); //memanggil getName() dari class Person
    }
}
// membuat class teacher yang mewarisi dari Person
class Teacher extends Person{
    private $teacherID;
    public function __construct(string $name, int $teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID(){
        return "Teacher ID: " . $this->teacherID;
    }

    public function getName(){
        return "Teacher Name: " . parent::getName();
    }
}
abstract class Course {
    abstract public function getCourseDetails();
}
class OnlineCourse extends Course{
    public function __construct(){}
    public function getCourseDetails(){
        return "Online Course akan dilakukan secara Daring" . "<br>";
    }
}
class OfflineCourse extends Course{
    public function __construct(){}
    public function getCourseDetails(){
        return "Offline Course akan dilakukan secara Luring" . "<br>";
    }
}
class Dosen extends Person{
    private $nidn;
    public function __construct(string $name, int $nidn){
        parent ::__construct($name);
        $this->nidn = $nidn;
    }
    public function getNidn(){
        return "NIDN : " . $this->nidn;
    }
    public function setNidn(int $nidn){
        $this->nidn = $nidn;
    }
    public function getName(){
        return "Dosen Name: " . parent::getName();
    }
    public function getRole(){
        return "Saya Seorang Dosen";
    }
}
class Mahasiswa extends Person{
    private $nim;
    public function __construct(string $name, int $nim){
        parent ::__construct($name);
        $this->nim = $nim;
    }
    public function getNim(){
        return "NIM : " . $this->nim;
    }
    public function setNim(int $nim){
        $this->nim = $nim;
    }
    public function getName(){
        return "Mahasiswa Name: " . parent::getName();
    }
    public function getRole(){
        return "Saya Seorang Mahasiswa";
    }
}
abstract class Jurnal{
    protected $judul;
    protected $penulis;
    public function __construct(string $judul, Person $penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }
    abstract function getJurnal();
}
class JurnalDosen extends Jurnal{
    public function __construct($judul, Dosen $penulis){
        parent::__construct($judul, $penulis);
    }
    public function getJurnal(){
        return "Judul jurnal: " . $this->judul . "<br>" .
                "Penulis jurnal: " . $this->penulis->getName() . "<br>" .
                "Dengan " . $this->penulis->getNidn(); 
    }
}
class JurnalMahasiswa extends Jurnal {
    public function __construct(string $judul, Mahasiswa $penulis){
        parent::__construct($judul, $penulis);
    }
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