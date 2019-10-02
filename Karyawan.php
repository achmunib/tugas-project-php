<?php
class Karyawan{
    private $nama_depan;
    private $nama_belakang;
    private $full_name;
    private $umur;
    const jenis_kelamin = ' Laki-laki<br><br>';

    public function __construct($nama_depan, $nama_belakang, $full_name, $umur){
        $this->nama_depan = $nama_depan;
        $this->nama_belakang = $nama_belakang;
        $this->umur = $umur;
        $this->full_name = $full_name;
    }

    public function getNamaDepan(){
        // echo "Nama Depan : ";
        return $this->nama_depan;
    }

    public function getNamaBelakang(){
        // echo "<br>Nama Belakang : ";
        return $this->nama_belakang;
    }

    public function getFullName(){
        $this->getNamaDepan();
        $this->getNamaBelakang();
        return $this->full_name;
    }

    public function getUmur(){
        echo "<br>Umur : ";
        return $this->umur;
    }

    public function getJenisKelamin(){
        // echo "<br>Jenis Kelamin : ";
        return self::jenis_kelamin;
    }

}

?>