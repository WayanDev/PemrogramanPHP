<?php 
require 'tugas_5.php';

$pegawai1 = new Pegawai('01111','Andi','Manager','Islam','Menikah');
$pegawai2 = new Pegawai('01112','Dani','Staff','Kristen','Menikah');
$pegawai3 = new Pegawai('01113','Fani','Asisten Manager','Hindu','Belum Menikah');
$pegawai4 = new Pegawai('01114','Ghani','Kepala Bagian','Budha','Menikah');
$pegawai5 = new Pegawai('01115','Sony','Manager','Konghucu','Belum Menikah');

$ar_pegawai = [$pegawai1,$pegawai2,$pegawai3,$pegawai4,$pegawai5];

foreach($ar_pegawai as $pegawai){
    $pegawai->cetak();
}


?>