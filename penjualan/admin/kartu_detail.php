<?php
$id= $_REQUEST['id'];
$model = new Kartu();

$kartu = $model->getKartu($id);
?>
<form action="kartu_controller.php" method="POST">
    <div class="mb-3">
      <label for="kode" class="form-label">Kode</label>
      <input type="text" class="form-control" value="<?= $kartu['kode']?>" id="kode" placeholder="" name="kode" readonly>
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" value="<?= $kartu['nama']?>" name="nama" placeholder="">
    </div>
    <div class="mb-3">
      <label for="diskon" class="form-label">Diskon(%)</label>
      <input type="number" class="form-control" value="<?= $kartu['diskon']?>" id="diskon" name="diskon" placeholder="">
    </div>
    <div class="mb-3">
      <label for="iuran" class="form-label">Iuran</label>
      <input type="number" class="form-control" id="iuran" value="<?= $kartu['iuran']?>" name="iuran" placeholder="">
    </div>
    <button type="submit" name="tombol" value="ubah" class="btn btn-success">Ubah</button>
    <br>
    <br>
  </form>