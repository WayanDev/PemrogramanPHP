<?php
$obj_kartu = new Kartu();
$data_kartu = $obj_kartu->dataKartu();
?>
<form action="kartu_controller.php" method="POST">
    <div class="mb-3">
      <label for="kode" class="form-label">Kode</label>
      <input type="text" class="form-control" id="kode" placeholder="" name="kode">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="">
    </div>
    <div class="mb-3">
      <label for="diskon" class="form-label">Diskon(%)</label>
      <input type="number" class="form-control" id="diskon" name="diskon" placeholder="">
    </div>
    <div class="mb-3">
      <label for="iuran" class="form-label">Iuran</label>
      <input type="number" class="form-control" id="iuran" name="iuran" placeholder="">
    </div>
    <button type="submit" name="proses" value="simpan" class="btn btn-success">Simpan</button>
    <br>
    <br>
  </form>