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
                                <i class="fas fa-table me-1"></i>
                                Data Pesanan
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Pelanggan ID</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Pelanggan ID</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            foreach($data_pesanan as $row){
                                            ?>
                                            <tr>
                                                <th><?= $no ?></th>
                                                <th><?= $row['kode'] ?></th>
                                                <th><?= $row['tanggal'] ?></th>
                                                <th><?= $row['total'] ?></th>
                                                <th><?= $row['pelanggan_id'] ?></th>
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