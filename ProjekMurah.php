<?php
// include 'Karyawan.php';

class ProjekMurah extends Karyawan{
    public $tugas = false;
    
    public function getProgress(){
        return " sedang mengerjakan Projek Murah";
    }

    public function setTugas(){
        
        $tugas = false;
        if ($tugas != true) {
            return "Tugas sudah selesai...<br>";
        }    
    }
}

$projek = new ProjekMurah('','','','');

?>