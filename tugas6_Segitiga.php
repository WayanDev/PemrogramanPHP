<?php 
require_once 'tugas6_abstract1.php';

class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;
    public $sisi;
    public function __construct($alas,$sisi,$tinggi){
        $this->alas=$alas;
        $this->sisi=$sisi;
        $this->tinggi=$tinggi;
    }
    public function namaBidang(){
        echo 'Segitiga';
    }
    public function luasBidang(){
        $luas =0.5*$this->alas*$this->tinggi;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling =$this->alas+$this->sisi+$this->tinggi;
        return $keliling;
    }
    public function cetak(){
        echo 'Sisi a : '.$this->alas;
        echo '<br> Sisi b : '.$this->sisi;
        echo '<br> Tinggi : '.$this->tinggi;
    }
}
?>