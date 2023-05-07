<?php 
class Produk{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi=$dbh;
    }
    //member method CRUD
    public function dataProduk(){
        $sql="SELECT produk.*, jenis_produk.nama as kategori FROM produk INNER JOIN jenis_produk
                ON jenis_produk.id = produk.jenis_produk_id";
        $ps = $this->koneksi->prepare($sql);//prepare statement PDO
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

?>