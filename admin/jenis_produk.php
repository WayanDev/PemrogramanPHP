<div class="container-fluid px-4">
<?php
    $model = new JenisProduk();
    $jenis_produk = $model->JenisProduk();
?>
                        <h1 class="mt-4">Jenis Produk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Jenis Produk</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Berikut ini adalah kumpulan data Jenis Produk.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Jenis Produk
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            foreach($jenis_produk as $row){
                                            ?>
                                            <tr>
                                                <th><?= $no ?></th>
                                                <th><?= $row['nama'] ?></th>
                                                <th><?= $row['ket'] ?></th>
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