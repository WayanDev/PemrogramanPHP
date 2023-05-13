<?php
session_start();
include_once 'koneksi.php';
include_once 'models/Produk.php';
include_once 'models/Jenis_Produk.php';
include_once 'models/Pelanggan.php';
include_once 'models/Pesanan.php';
include_once 'models/Kartu.php';
include_once 'models/Member.php';
include_once 'top.php';
include_once 'menu.php';
?>

<div>
    <main>
        <div class="container-fluid px-4">
            <?php
                error_reporting(0);
                $url=$_GET['url'];
                if($url=='dashboard'){
                    include_once 'dashboard.php';
                }else if(!empty($url)){
                    include_once ''.$url.'.php';
                }else{
                    include_once 'dashboard.php';
                }
            ?>
        </div>
    </main>
</div>

<?php
include_once 'bottom.php';
?>

