<?php 
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'Staff.php';

$d1 = new Dosen ('Budi','L','111','M.Kom');
$d2 = new Dosen ('Andi','L','112','M.Kom');
$m1 = new Mahasiswa ('Ali','L','3','Teknik Informatika');
$m2 = new Mahasiswa ('Siti','P','6','Teknik Informatika');
$s1 = new Staff ('Joko','L','1111','Teknik Informatika','500');
$s2 = new Staff ('Dewi','P','1112','Teknik Informatika','400');

$ar_data=[$d1,$d2,$m1,$m2,$s1,$s2];

foreach($ar_data as $data){
    $data->cetak();
}

?>