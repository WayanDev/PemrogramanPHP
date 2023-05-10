<?php
$obj_kartu = new Kartu();
$data_kartu = $obj_kartu->dataKartu();
$idedit = $_REQUEST['idedit'];
$kartu = !empty($idedit) ? $obj_kartu->getKartu($idedit) : array();
?>
<form action="kartu_controller.php" method="POST">
    <div class="mb-3">
      <label for="kode" class="form-label">Kode</label>
      <input type="text" class="form-control" value="<?= $kartu['kode']?>" id="kode" placeholder="" name="kode">
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
    <div class="mb-3">
      <?php
      if(empty($idedit)){      
      ?>
      <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
      <?php
      } else {
        ?>
        <button name="proses" type="submit" value="ubah" class="btn btn-primary">Update</button>
        <input type="hidden" name="idx" value="<?= $idedit ?>">
        <?php
      }
      ?>
      <button name="proses" type="submit" value="batal" class="btn btn-primary">Cancel</button>
    </div>
  </form>