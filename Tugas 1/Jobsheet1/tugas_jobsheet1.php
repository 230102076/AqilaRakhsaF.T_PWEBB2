<?php
//Definisi Kelas
class Dosen {
    //Atribut atau Properties
    public $nama;
    public $nip;
    public $mataKuliah;

    //Constructor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    //Metode atau Function
    public function TampilkanDosen() {
        return "Nama : $this->nama <br>
        NIP : $this->nip <br>
        Mata Kuliah : $this->mataKuliah";
    }
                                                                                                         
}

$dosen1 = new Dosen("Aqila Rakhsa Fadzila Tunnisa", "1234567890", "Pemrograman Web");
echo $dosen1->TampilkanDosen();
echo "<br>";
?>