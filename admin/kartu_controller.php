<?php
include_once 'koneksi.php';
include_once 'models/Kartu.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$diskon = doubleval($_POST['diskon']) / 100;
$iuran = $_POST['iuran'];

$data = [$kode, $nama, $diskon, $iuran];

$model = new Kartu();
$tombol =$_REQUEST['proses'];
switch($tombol){
    case 'simpan':$model->simpan($data);break;
    //case 'ubah':
        //$data[]=$_POST['idx']; $model->ubah($data);break;
    default:
    header('Location:index.php?url=kartu');
}
header('Location:index.php?url=kartu');
?>