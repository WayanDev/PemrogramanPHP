<div class="container-fluid px-4">
<?php
    $model = new Produk;
    $data_produk = $model->dataProduk();

    $sesi = $_SESSION['MEMBER'];
    if(isset($sesi)){
?>
                        <h1 class="mt-4">Data Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Berikut ini adalah kumpulan data Produk.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!--<i class="fas fa-table me-1"></i>
                                Data Produk-->
                                <?php     
                                    if($sesi['role']!='staff'){
                                    ?>
                                    <a href="index.php?url=produk_form" class="btn btn-primary btn-sm">Tambah</a>
                                <?php } ?>
                                </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                            <th>Jenis Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            foreach($data_produk as $row){
                                            ?>
                                            <tr>
                                                <th><?= $no ?></th>
                                                <th><?= $row['kode'] ?></th>
                                                <th><?= $row['nama'] ?></th>
                                                <th><?= $row['harga_beli'] ?></th>
                                                <th><?= $row['harga_jual'] ?></th>
                                                <th><?= $row['stok'] ?></th>
                                                <th><?= $row['min_stok'] ?></th>
                                                <th><?= $row['kategori'] ?></th>
                                                <td>
                                                    <form action="produk_controller.php" method="post">
                                                        <a href="index.php?url=produk_detail&id=<?= $row ['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                                                        <?php     
                                                    if($sesi['role']!=('staff' && 'manager')){
                                                        ?>
                                                        <a href="index.php?url=produk_form&idedit=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                                                        
                                                        
                                                        <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
                                                        
                                                        <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                                    <?php } ?>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
<?php
}else{
echo '<script> Alert("user/password anda salah");history.back();</script>';
}
?>