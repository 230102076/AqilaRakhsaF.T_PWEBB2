<?php

//Membuat Class dan Object
class Mahasiswa {
    // Mengubah atribut dalam class Mahasiswa menjadi private
    private $nama;
    private $nim;
    private $jurusan;

    //Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Membuat metode tampilkanData() dalam class Mahasiswa
    public function tampilkanData() {
        return "1. Data Mahasiswa <br>
        Nama : $this->nama <br>
        NIM  : $this->nim <br>
        Jurusan : $this->jurusan";
    }

    //Membuat metode getter setter untuk atribut nama, nim, jurusan
        public function getNama(){
            return $this->nama;
        }  
        public function getNim(){
            return $this->nim;
        }
        public function getJurusan() {
            return $this->jurusan;
        }
        public function setNama($nama){
            $this->nama = $nama;
        }
        public function setNim($nim){
            $this->nim = $nim;
        }
        public function setJurusan($jurusan){
            $this->jurusan = $jurusan;
        }
}
    //Inheritance
    //Membuat class Pengguna dengan atribut nama dan metode getNama
    //Class Pengguna
class Pengguna1 {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Class Dosen yang mewarisi Pengguna
class Dosen extends Pengguna1 {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    public function tampilkanDataDosen() {
        return "Nama Dosen: " . $this->getNama() . "<br>Mata Kuliah: " . $this->getMataKuliah();
    }
}
    //Polymorphism
    // Class Pengguna
class Pengguna2 {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function aksesFitur() {
        return "Pengguna dapat mengakses fitur umum.";
    }
}
    class Dosen2 extends Pengguna2 {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }

    public function aksesFitur() {
        return "Dosen $this->nama dapat mengakses fitur dosen untuk mata kuliah $this->mataKuliah.";
    }
}
class Mahasiswa2 extends Pengguna2 {
    private $nim;

    public function __construct($nama, $nim) {
        parent::__construct($nama);
        $this->nim = $nim;
    }

    public function aksesFitur() {
        return "Mahasiswa $this->nama dengan NIM $this->nim dapat mengakses fitur mahasiswa.";
    }
}

    // Membuat abstract
    abstract class penggunaB {
        abstract public function aksesFitur();
    }

    class Mahasiswa3 extends PenggunaB {
        public function aksesFitur() {
            echo "Mahasiswa dapat mengakses portal akademik<br>";
        }
    }

    class dosen3 extends penggunaB {
        public function aksesFitur() {
            echo "Dosen dapat mengakses fitur spesial";
        }
    }

    //Instansiasi
    $mahasiswa1 = new Mahasiswa("Aqila Rakhsa Fadzila Tunnisa", "230102076", "Komputer dan Bisnis");
    
    //Tampilkan data mahasiswa
    echo $mahasiswa1->tampilkanData(); 
    //Demonstrasi penggunaan getter dan setter
    echo "<br><br>2. Encapsulation";
    echo "<br>Medemonstrasikan akses ke atribut menggunakan metode getter setter:<br>";

    echo $mahasiswa1->setNama("Spina");
    echo $mahasiswa1->setNim("230102077");
    echo $mahasiswa1->setJurusan("Teknik Mesin");

    // Menggunakan getter untuk menampilkan data baru
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

// Instansiasi Objek dari Class Dosen
echo "<br>3. Inheritance";
echo "<br>Instansiasi objek dari class Dosen:<br>";
$dosen1 = new Dosen("Ivan Gunawan", "Akutansi<br>");

// Tampilkan data dosen
echo $dosen1->tampilkanDataDosen();

// Instansiasi Objek dari Class Dosen dan Mahasiswa
echo "<br>4. Polymorphism";
echo "<br>Instansiasi objek dari class Dosen dan Mahasiswa:<br>";
$dosen1 = new Dosen2("Ivan Gunawan S", "Pemrograman Python");
$mahasiswa1 = new Mahasiswa2("Aqila Rakhsa Fadzila Tunnisa", "230102076","teknik informatika");

// Panggil metode aksesFitur
echo $dosen1->aksesFitur() . "<br>";
echo $mahasiswa1->aksesFitur();

//5.
echo "<br><br>5. Abstraction";
echo "<br>Demonstrasikan memanggil metod aksesFitur<br>";
$mahasiswa1 = new Mahasiswa3();
$dosen = new dosen3();
$mahasiswa1->aksesFitur();
$dosen->aksesFitur();




?>