<?php
    class Pesanan{
        private $koneksi;
        public function __construct(){
            global $dbh;
            $this->koneksi = $dbh;
        }
        public function dataPesanan()
        {
            $sql = "SELECT pesanan.*,pelanggan.nama_pelanggan as nama,pelanggan.kode as kode FROM pesanan INNER JOIN pelanggan ON pesanan.pelanggan_id = pelanggan.id";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }
    }
?>