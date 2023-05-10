<div class="container-fluid px-4">
<?php
    $model = new Pelanggan();
    $data_pelanggan = $model->dataPelanggan();
?>
                        <h1 class="mt-4">Data Pelanggan</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Pelanggan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Berikut ini adalah kumpulan data Pelanggan.
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i>
                                Data Pelanggan-->
                                <a href="index.php?url=pelanggan_form" class="btn btn-primary btn-sm">Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu ID</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu ID</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $no=1;
                                            foreach($data_pelanggan as $row){
                                            ?>
                                            <tr>
                                                <th><?= $no ?></th>
                                                <th><?= $row['kode'] ?></th>
                                                <th><?= $row['nama_pelanggan'] ?></th>
                                                <th><?= $row['jk'] ?></th>
                                                <th><?= $row['tmp_lahir'] ?></th>
                                                <th><?= $row['tgl_lahir'] ?></th>
                                                <th><?= $row['email'] ?></th>
                                                <th><?= $row['kartu'] ?></th>
                                                <td>
                                                    <form action="pelanggan_controller.php" method="post">
                                                        <a href="index.php?url=pelanggan_detail&id=<?= $row ['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                                                        <a class="btn btn-warning btn-sm" href="index.php?url=pelanggan_form&idedit=<?= $row['id'] ?>">Ubah</a>
                                                        <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="confirm('Apakah anda yakin ingin menghapus?')">Hapus</button>
                                                        
                                                        <input type="hidden" name="idx" value="<?= $row['id'] ?>">
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