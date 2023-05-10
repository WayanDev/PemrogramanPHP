<?php
$obj_pelanggan = new Pelanggan();
$data_pelanggan = $obj_pelanggan->dataPelanggan();
$idedit = $_REQUEST['idedit'];
$pelanggan = !empty($idedit) ? $obj_pelanggan->getPelanggan($idedit) : array();
?>
<form action="pelanggan_controller.php" method="POST">
    <div class="mb-3">
      <label for="kode" class="form-label">Kode</label>
      <input type="text" class="form-control" id="kode" placeholder="" value="<?= $pelanggan['kode'] ?>" name="kode" readonly>
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="<?= $pelanggan['nama_pelanggan'] ?>">
    </div>
    <div class="mb-3">
      <label for="jk" class="form-label">Jenis Kelamin</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" value="L" id="jk1" <?= $pelanggan['jk'] == "L" ? "checked" : '' ?>>
        <label class="form-check-label" for="jk1">
          Laki-Laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="jk" value="P" id="jk2" <?= $pelanggan['jk'] == "P" ? "checked" : '' ?>>
        <label class="form-check-label" for="jk2">
          Perempuan
        </label>
      </div>
    </div>
    <div class="mb-3">
      <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
      <input type="text" class="form-control" value="<?= $pelanggan['tmp_lahir'] ?>" id="tmp_lahir" name="tmp_lahir" >
    </div>
    <div class="mb-3">
      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
      <input type="date" class="form-control" id="tgl_lahir" value="<?= $pelanggan['tgl_lahir'] ?>" name="tgl_lahir">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?= $pelanggan['email'] ?>">
    </div>
    <div class="mb-3">
      <label for="kartu" class="form-label">Jenis Kartu</label>
      <select name="kartu_id" class="form-control" id="kartu">
        <option value="1" <?= $pelanggan['kartu_id'] == "1" ? "selected" : '' ?>>Gold Utama</option>
        <option value="2" <?= $pelanggan['kartu_id'] == "2" ? "selected" : '' ?>>Platinum Jaya</option>
        <option value="3" <?= $pelanggan['kartu_id'] == "3" ? "selected" : '' ?>>Silver</option>
        <option value="4" <?= $pelanggan['kartu_id'] == "4" ? "selected" : '' ?>>Non Member</option>
      </select>
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