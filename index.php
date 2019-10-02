<?php
require 'Karyawan.php';
require 'ProjekMurah.php';
require 'ProjekMahal.php';

use ProjekBesar\Tugas as PB;
use ProjekKecil\Tugas as PK;

$objKaryawanSatu = new Karyawan('Achmad ', ' Munib ','', 17);
$objJenisKelamin = new Karyawan('','','','');

echo $objKaryawanSatu->getNamaDepan();
echo $objKaryawanSatu->getNamaBelakang();
echo $objKaryawanSatu->getUmur();
echo "<br>Jenis Kelamin : ". Karyawan::jenis_kelamin;

$objKaryawanDua = new Karyawan('Munib ', ' Achmad ','', 17);
$objJenisKelamin = "Karyawan";

echo $objKaryawanDua->getNamaDepan();
echo $objKaryawanDua->getNamaBelakang();
echo $objKaryawanDua->getUmur();
echo "<br>Jenis Kelamin : ". $objJenisKelamin::jenis_kelamin;

$projekMurah = new ProjekMurah('','','','');
$projekMahal = new ProjekMahal('','','','');
$fullname = new Karyawan('','','Achmad Munib','');

echo $fullname->getFullName();
echo $projekMurah->getProgress();
echo "<br>";
echo $projekMurah->setTugas();

echo $fullname->getFullName();
echo $projekMahal->getProgress();
echo "<br>";
echo $projekMahal->setTugas();

?>