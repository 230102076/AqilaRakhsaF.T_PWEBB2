<?php

// Membuat Kelas Person
class Person {
    //atribut
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Mmembuat kelas Student yang mewarisi dari Person
class Student extends Person {
    private $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getName() {
        return "Nama Siswa: " . $this->name;
    }

    public function getStudentID() {
        return $this->studentID;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
}

// Membuat Kelas Teacher yang juga mewarisi dari Person
class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getName() {
        return "Guru: " . $this->name;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }
}

// Membuat Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetails();
}

class onlineCourse extends Course {
    public function getCourseDetails() {
        return "Online Cource";
    }
}

class offlineCourse extends Course {
    public function getCourseDetails() {
        return "Offline Cource";
    }
}

//implementasi
$student = new Student("AqilaRFT", "A200");
$teacher = new Teacher("Ivan Gunawan", "I206");


echo $student->getName() . PHP_EOL;
echo "<br>";
echo "Student ID: " . $student->getStudentID() . PHP_EOL;
echo "<br>";
echo "<br>";
echo $teacher->getName() . PHP_EOL;
echo "<br>";
echo "Teacher ID: " . $teacher->getTeacherID() . PHP_EOL;
echo "<br>";

$onlineCourse = new onlineCourse();
$offlineCourse = new offlineCourse();

echo $onlineCourse->getCourseDetails() . PHP_EOL;
echo $offlineCourse->getCourseDetails() . PHP_EOL;

?>
