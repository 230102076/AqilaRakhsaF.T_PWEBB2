<?php
//Definisi Kelas
class Mahasiswa {
    //Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    //Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Metode atau Function
    public function TampilkanData() {
        return "Nama : $this->nama <br>
        NIM : $this->nim <br>
        Jurusan : $this->jurusan";


    }
     public function updateJurusan() {
        $this->jurusan = "Teknik Mesin";
        return "Nama : $this->nama <br>
        NIM : $this->nim <br>
        Jurusan : $this->jurusan";

     }
}

$mahasiswa1 = new Mahasiswa("Aqila Rakhsa Fadzila Tunnisa", "230102076", "Teknik Informatika");
echo $mahasiswa1->TampilkanData();
echo "<br>";
echo $mahasiswa1->updateJurusan();
?>