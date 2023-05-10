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

    public function getProduk($id){
        $sql="SELECT produk.*, jenis_produk.nama as kategori FROM produk INNER JOIN jenis_produk
                ON jenis_produk.id = produk.jenis_produk_id WHERE produk.id=?";
        $ps = $this->koneksi->prepare($sql);//prepare statement PDO
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql="INSERT INTO produk(kode,nama,harga_jual,harga_beli,stok,min_stok,jenis_produk_id)
            VALUES (?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);//prepare statement PDO
        $ps->execute($data);
    }
}

?>