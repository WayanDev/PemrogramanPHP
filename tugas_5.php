<?php
class Pegawai{
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
    }
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gapok = 15000000; break;
            case 'Asisten Manager': $gapok = 10000000; break;
            case 'Kepala Bagian': $gapok = 7000000; break;
            case 'Staff': $gapok = 5000000; break;
            default: $gapok=0;
        }
        return $gapok;
    }
    public function setTunjab($jabatan){
        $this->jabatan = $jabatan;
        $TJ = 0.2 * $this->setGajiPokok($this->jabatan);
        return $TJ;
    }
    public function setTunkel($status){
        $this->status = $status;
        $TK = ($status == "Menikah") ? 0.1 * $this->setGajiPokok($this->jabatan) : 0;
        return $TK;
    }
    public function setGajiKotor($jabatan){
        $this->jabatan = $jabatan;
        $GK = $this->setGajiPokok($this->jabatan)+$this->setTunjab($this->jabatan)+$this->setTunkel($this->status);
        return $GK;
    }
    public function setZakatProfesi($agama){
        $this->agama = $agama;
        $ZP = ($agama == "Islam" && $this->setGajiKotor($this->jabatan) >= 6000000) ? 0.025 * $this->setGajiPokok($this->jabatan) : 0;
        return $ZP;
    }

    public function cetak(){
        echo '<b><center>'.self::PT.'</b><br>';
        echo 'NIP Pegawai : '.$this->nip;
        echo '<br>Nama Pegawai : '.$this->nama;
        echo '<br>Jabatan : '. $this->jabatan;
        echo '<br>Agama : '.$this->agama;
        echo '<br>Status : '.$this->status,"<br>";
        echo '<br>Gaji Pokok : Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br>Tunjangan Jabatan : Rp.'.number_format($this->setTunjab($this->jabatan),0,',','.');
        echo '<br>Tunjangan Keluarga : Rp.'.number_format($this->setTunkel($this->status),0,',','.'),"<br>";
        echo '<br>Zakat Profesi: Rp.'.number_format($this->setZakatProfesi($this->agama),0,',','.'),"<br>";
        echo '<b><br>Gaji Bersih :</b> Rp.'.number_format($this->setGajiKotor($this->jabatan)-$this->setZakatProfesi($this->agama),0,',','.');
        echo '<hr>';
    }
}



?>