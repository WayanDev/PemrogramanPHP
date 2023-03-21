<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangung Jajar Genjang</title>
    <style type="text/css">
        .kotak {
            margin: 2px auto;
            width:300px;
            padding:10px;
            border: 1px solid #ccc;
            background: lightsteelblue;
            border-radius: 10px;
        }
        input[type=text]{
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
    <h1 align="center"> Bangun Datar Jajar Genjang </h1>
    <img style="display:block; margin:auto;" sizes="100px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGNoUKSzqNbVyjDC7bubtMZFg834GyqIBi_Lf5YnqAocFCtaFVfd0RISQPPvP9TmXvckM&usqp=CAU" alt="">
    <div class="kotak">
        <form method="POST">
            <table>
                <tr>
                    <td>Alas</td>
                    <td>
                        <input type="text" name="alas" required>
                    </td>
                </tr>
                <tr>
                    <td>Tinggi</td>
                    <td>
                        <input type="text" name="tinggi" required>
                    </td>
                </tr>
                <tr>
                    <td>Sisi b</td>
                    <td>
                        <input type="text" name="sisib" required>
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
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $b = $_POST['sisib'];

        $luasjajargenjang = $alas * $tinggi;
        $keliling =2*($alas+$b);
        echo 'Hasil perhitungan Jajar Genjang';
        echo '<br> Diketahui :';
        echo '<br> Alas : '.$alas;
        echo '<br> Tinggi : '.$tinggi;
        echo '<br> Sisi b : '.$b;

        echo '<br> Maka Luasnya ' .$luasjajargenjang;
        echo '<br> Maka Kelilingnya ' .$keliling;
    }
?>
    </div>
</body>
</html>