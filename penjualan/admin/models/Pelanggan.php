<?php
    class Pelanggan{
        private $koneksi;
        public function __construct(){
            global $dbh;
            $this->koneksi = $dbh;
        }
        public function dataPelanggan()
        {
            $sql = "SELECT pelanggan.*,kartu.nama as kartu FROM pelanggan LEFT JOIN kartu ON pelanggan.kartu_id = kartu.id";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function getPelanggan($id){
        $sql= "SELECT * FROM pelanggan WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);//prepare statement PDO
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data){
        $sql="INSERT INTO pelanggan(kode,nama_pelanggan,jk,tmp_lahir,tgl_lahir,email,kartu_id) VALUES(?,?,?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);//prepare statement PDO
        $ps->execute($data);
    }

    public function ubah($data){
        $sql = "UPDATE pelanggan SET kode=?,nama_pelanggan=?,jk=?,tmp_lahir=?,tgl_lahir=?,alamat=?,email=?,kartu_id=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id){
        $sql = "DELETE FROM pelanggan WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
    }
?>