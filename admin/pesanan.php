<div class="container-fluid px-4">
<?php
    $model=new Pesanan();
    $data_pesanan = $model->dataPesanan();
?>
                        <h1 class="mt-4">Data Pesanan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pesanan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Berikut ini adalah kumpulan data Pesanan.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!--<i class="fas fa-table me-1"></i>
                                Data Pesanan-->
                                <a href="index.php?url=pesanan_form" class="btn btn-primary btn-sm">Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            foreach($data_pesanan as $row){
                                            ?>
                                            <tr>
                                                <th><?= $no ?></th>
                                                <th><?= $row['tanggal'] ?></th>
                                                <th><?= $row['nama'] ?></th>
                                                <th><?= $row['total'] ?></th>
                                                <th>
                                                    <form action="pesanan_controller.php" method="post">
                                                        <a href="index.php?url=pesanan_detail&id=<?= $row ['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                                                        <a href="" class="btn btn-warning btn-sm">Ubah</a>
                                                        <a href="" class="btn btn-danger btn-sm">Hapus</a>
                                                    
                                                        <input type="hidden" name="idx" value="<?= $row['id']?>">
                                                    </form>
                                                </th>
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