<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 | PHP</title>
    <style type="text/css">
        .kotak {
            margin: 2px auto;
            width:700px;
            padding:10px;
            border: 1px solid #ccc;
            background: lightsteelblue;
            border-radius: 10px;
        }
        input[type=text],input[type=email],select{
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
    <?php
        $ar_prodi = ["SI"=>"Sistem Informasi", 
                    "TI"=>"Teknik Informatika",
                    "ILKOM"=>"Ilmu Komputer",
                    "TE"=>"Teknik Elektro"];

        $ar_skill = ["HTML"=>10,
                    "CSS"=>10, 
                    "Javascript"=>20, 
                    "RWD Bootstrap"=>20, 
                    "PHP"=>30, 
                    "MySQL"=>30,
                    "Laravel"=>40];

        $domisili = ["Jakarta",
                    "Bandung",
                    "Bekasi",
                    "Malang",
                    "Surabaya", 
                    "lainnya"];

    ?>
    <h1 align="center"> Menghitung Skor Skill </h1>
    <div class="kotak">
        <form method="POST">
            <table valign="top" cellspacing="10px" cellpadding="2px">
                <tr>
                    <td>NIM</td>
                    <td>
                        <input type="text" name="nim" required>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="L">Laki-laki
                        <input type="radio" name="jk" value="P">Perempuan
                    </td>
                </tr>
                <td>Program Studi</td>
                <td> 
                    <select name="prodi">
                    <option value="" disabled selected>----- Pilih Program Studi -----</option>
                    <?php 
                        foreach($ar_prodi as $prodi => $v){
                            ?>
                            <option value="<?= $prodi ?>"><?= $v ?></option>
                    <?php } ?>
                        </select>
                </td>
                <tr>
                    <td>Skill Programming</td>
                    <td>
                        <?php
                        foreach($ar_skill as $skill => $s){
                            ?>
                        <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Domisili</td>
                    <td>
                        <select name="domisili">
                            <option value="" disabled selected>----- Pilih Domisili -----</option>
                            <?php
                                foreach($domisili as $d){
                            ?>
                                <option value="<?= $d ?>"><?= $d ?></option>
                            <?php  } ?>
                        </select>
                    </td>
                </tr> 
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" >
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
            $nim = isset($_POST['nim'])? $_POST['nim'] : '';
            $nama = isset($_POST['nama'])? $_POST['nama'] : '';
            $jk = isset($_POST['jk'])? $_POST['jk'] : '';
            $prodi = isset($_POST['prodi'])? $_POST['prodi'] : '';
            $skill = isset($_POST['skill'])? $_POST['skill'] : '';
            $domisili = isset($_POST['domisili'])? $_POST['domisili'] : '';
            $email = isset($_POST['email'])? $_POST['email'] : '';
            $tombol = isset($_POST ['submit'])? $_POST['submit'] : '';
            //menentukan skor skill
            $skor = 0;
            foreach($skill as $jml) {
                if(isset($ar_skill[$jml])) {
                    $skor += $ar_skill[$jml];
                }
            }
            //Fungsi untuk kategori skill
            function kategori_skill($skor) {
                if ($skor >= 100 && $skor <=160){
                    return "Sangat Baik";
                }else if ($skor >= 60 && $skor <=100){
                    return "Baik";
                }else if ($skor >= 40 && $skor <=60){
                    return "Cukup";
                }else if ($skor >= 0 && $skor <=40){
                    return "Kurang";
                }else{
                    return "Tidak Memadai";
                }
            }
            if(isset($tombol)){
        ?>
        
        NIM : <?= $nim ?><br>
        Nama : <?= $nama ?><br>
        Jenis Kelamin : <?= $jk ?><br>
        Program Studi : <?= $prodi ?><br>
        Domisili : <?= $domisili ?> <br>
        Skill : 
        <?php 
            foreach($skill as $s){ ?>
            <?= $s ?> ,
        <?php } ?><br>
        Skor Skill : <?= $skor ?><br>
        Kategori Skill : <?= kategori_skill($skor) ?> <br>
        Email : <?= $email ?>
        <?php } ?>
    </div>
</body>
</html>