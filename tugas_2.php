<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 | PHP</title>
    <style type="text/css">
        .kotak {
            margin: 2px auto;
            width:300px;
            padding:10px;
            border: 1px solid #ccc;
            background: lightsteelblue;
            border-radius: 10px;
        }
        input[type=text],select{
            margin: 5px auto;
            width: 100%;
            padding-right: 100px;
            padding: 5px;
            border-radius: 5px;
        }
        input[type=submit] {
            margin: 5px auto;
            border-radius: 5px;
            padding: 10px;
            width: 90px;
            border: 1px solid #fff;
            color: #fff;
            background: green;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 align="center"> Menghitung Gaji Pegawai </h1>
    <div class="kotak">
        <form method="POST">
            <table valign="top" cellspacing="10px" cellpadding="2px">
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>
                        <select name="jabatan" required>
                            <option>----Pilih Jabatan---</option>
                            <option value="Manager">Manager </option>
                            <option value="Asisten">Asisten</option>
                            <option value="Kabag">Kabag</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td valign="top">Status</td>
                    <td>
                        <input type="radio" name="status" value="Menikah (Anak 1-2)">
                        <label>Menikah (Anak 1-2)</label>
                        <p><input type="radio" name="status" value="Menikah (Anak 3-5)">
                        <label>Menikah (Anak 3-5)</label>
                        <p><input type="radio" name="status" value="Belum Menikah">
                        <label>Belum Menikah</label>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select name="agama">
                        <option>----Pilih Agama---</option>
                        <option value="Islam">Islam </option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Konghucu">Konghucu</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Hitung">
                </td>
                </tr>
            </table>
        </form>
        <?php
            $nama = isset($_POST ['nama']) ? $_POST['nama'] : '';
            $jabatan = isset($_POST ['jabatan']) ? $_POST['jabatan'] : '';
            $status = isset($_POST ['status']) ? $_POST['status'] : '';
            $agama = isset($_POST ['agama'])? $_POST['agama'] : '';
            $tombol = isset($_POST ['tombol'])? $_POST['tombol'] : '';
            global $TK;
            switch ($jabatan){
                case "Manager" : $gapok = 20000000; break;
                case "Asisten" : $gapok = 15000000; break;
                case "Kabag" : $gapok = 10000000; break;
                case "Staff" : $gapok = 4000000; break;
                default: $gapok = 0;
            }
            $TJ=(float)0.2*(float)$gapok;
            if($status == 'Menikah (Anak 1-2)'){
                $TK=(float)0.05*(float)$gapok;
                $gajikotor = (float)$gapok+$TJ+$TK;
            }
            else if ($status == 'Menikah (Anak 3-5)'){
                $TK=(float)0.1*(float)$gapok;
                $gajikotor = (float)$gapok+$TJ+$TK;
            }
            else {
                $TK=0;
                $gajikotor=(float)$gapok+$TJ;
            }

            if($agama=='Islam' && $gajikotor >= 6000000){
                $zakat=(float)0.025*(float)$gajikotor;
                $gajibersih = $gajikotor-$zakat;
            }
            else {
                $gajibersih = $gajikotor;
                $zakat=0;
            }

            if(isset($tombol)){
        ?>
            Nama Pegawai : <?= $nama ?>
            <br> Jabatan : <?= $jabatan ?>
            <br> Status : <?= $status ?>
            <br> Agama : <?= $agama ?>
            <br> Gaji Pokok : <?= $gapok ?>
            <br> Tunjangan Jabatan : <?= $TJ ?>
            <br> Tunjangan Keluarga : <?= $TK ?>
            <hr>
            <br> Gaji Kotor : <?= $gajikotor ?>
            <br> Zakat Profesi : <?= $zakat ?>
            <hr>
            <br> Gaji Bersih : <?= $gajibersih ?>

        <?php } ?>
    </div>
</body>
</html>