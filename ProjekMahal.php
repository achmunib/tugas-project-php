<?php

// include 'Karyawan.php';

class ProjekMahal extends Karyawan{
    public $tugas = false;
    
    public function getProgress(){
        return " sedang mengerjakan Projek Mahal";
    }

    public function setTugas(){
        // $this->tugas = $tugas(true);
        $tugas = false;
        if ($tugas != true) {
            return "Tugas sudah selesai...<br>";
        }    
    }
}


$projek = new ProjekMahal('','','','');
?>