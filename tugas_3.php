<?php 
$m1 = ['NIM'=>'01111021', 'nama'=>'Andi', 'nilai'=>80];
$m2 = ['NIM'=>'01111022', 'nama'=>'Ani', 'nilai'=>70];
$m3 = ['NIM'=>'01111023', 'nama'=>'Ari', 'nilai'=>50];
$m4 = ['NIM'=>'01111024', 'nama'=>'Aji', 'nilai'=>40];
$m5 = ['NIM'=>'01111025', 'nama'=>'Ali', 'nilai'=>90];
$m6 = ['NIM'=>'01111026', 'nama'=>'Ai', 'nilai'=>75];
$m7 = ['NIM'=>'01111027', 'nama'=>'Budi', 'nilai'=>30];
$m8 = ['NIM'=>'01111028', 'nama'=>'Bani', 'nilai'=>85];
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

$jumlah_data = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai= min($jml_nilai);
$rata_rata= $total_nilai/$jumlah_data;

$keterangan = [
    'Jumlah Mahasiswa'=>$jumlah_data,
    'Total Nilai'=>$total_nilai,
    'Nilai tertingg'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Rata-rata '=>$rata_rata
]
/* Tugas 
1. Buat grade 
2. Buat Keterangan jumlah mahasiswa, nilai tertinggi, nilai terendah, rata rata Masukan kedalam tfoot
3. Buat predikat dari nilai menggunakan switch case
*/
?>

<table border="1px" width="100%">
<thead>
    
    <tr bgcolor="gray">
    <?php 
    foreach($ar_judul as $judul){
        ?>
        <th><?= $judul ?></th>
        <?php }?>
    </tr>

</thead>
<tbody>
    <?php
        $no = 1;
        foreach($mahasiswa as $mhs){
        $ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak lulus';
        //grade 
        if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A' ;
        else if ($mhs['nilai']>= 75 && $mhs['nilai'] <= 80) $grade = 'B';
        else if ($mhs['nilai']>= 60 && $mhs['nilai'] < 74) $grade = 'C';
        else if ($mhs['nilai']>= 30 && $mhs['nilai'] < 59) $grade = 'D';
        else if ($mhs['nilai']>= 0 && $mhs['nilai'] < 29) $grade = 'E';
        else $grade = '';

        //switch case mengubah satu kondisi ke kondisi lain
        switch ($grade) {
            case "A":
                $predikat = "Sangat Baik";
                $warna = 'aqua';
                break;
            case "B":
                $predikat = "Baik";
                $warna = 'lime';
                break;
            case "C":
                $predikat = "Cukup";
                $warna = 'yellow';
                break;
            case "D":
                $predikat = "Kurang";
                $warna = 'orange';
                break;
            case "E":
                $predikat = "Sangat Kurang";
                $warna = 'red';
                break;
            default:
                $predikat = "";
                break;
        }
    ?>
        <tr bgcolor=<?= $warna ?>>
            <td><?= $no ?> </td>
            <td><?= $mhs['NIM']?></td>
            <td><?= $mhs['nama']?></td>
            <td><?= $mhs['nilai']?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>
    <?php $no++; } ?>
</tbody>
<tfoot bgcolor="gray">
    <?php
        foreach($keterangan as $ket =>$hasil){
    ?>
    <tr>
        <th colspan="6"><?= $ket ?></th>
        <th><?= $hasil ?></th>
    </tr>
<?php } ?>
</tfoot>