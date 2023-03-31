<?php 
require_once 'tugas6_abstract1.php';

class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;
    public function __construct($panjang,$lebar){
        $this->panjang=$panjang;
        $this->lebar=$lebar;
    }
    public function namaBidang(){
        echo 'Persegi Panjang';
    }
    public function luasBidang(){
        $luas =$this->panjang*$this->lebar;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling =2*($this->panjang+$this->lebar);
        return $keliling;
    }
    public function cetak(){
        echo 'Panjang : '.$this->panjang;
        echo '<br> Lebar : '.$this->lebar;
    }
}
?>