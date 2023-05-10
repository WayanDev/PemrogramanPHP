<?php 
require_once 'tugas6_Lingkaran.php';
require_once 'tugas6_PersegiPanjang.php';
require_once 'tugas6_Segitiga.php';

$b1 = new Lingkaran (10);
$b2 = new PersegiPanjang (20,10);
$b3 = new Segitiga (6,10,8);

$ar_data=[$b1,$b2,$b3];
?>
<h1 align="center">Menghitung Luas dan Keliling Bangun Datar</h1>
<table align="center" border='1' cellpadding="10px">
    <thead align="center" style="display: table-header-group">
        <tr>
            <th>No </th>
            <th>Bangun Datar </th>
            <th>Keterangan </th>
            <th>Luas </th>
            <th>Keliling </th>
        </tr>
    </thead>
    <tbody align="center">
        <?php 
        $total = 0;
        foreach ($ar_data as $rows) :?>
        <tr>
                <td><?php echo ++$total; ?></td>
                <td> <?php echo $rows->namaBidang(); ?></td>
                <td> <?php echo $rows->cetak() ?></td>
                <td> <?php echo $rows->luasBidang() ?></td>
                <td> <?php echo $rows->kelilingBidang(); ?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>