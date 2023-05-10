<?php
$id= $_REQUEST['id'];
$model = new Produk();

$produk = $model->getProduk($id);
?>

<form action="produk_controller.php" method="post">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="text" name="kode" value="<?= $produk['kode'] ?>" type="text" class="form-control" readonly>
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Nama</label> 
        <div class="col-8">
          <input id="text1" name="nama" value="<?= $produk['nama'] ?>" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Harga Jual</label> 
        <div class="col-8">
          <input id="text2" name="harga_jual" value="<?= $produk['harga_jual'] ?>" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Harga Beli</label> 
        <div class="col-8">
          <input id="text3" name="harga_beli" value="<?= $produk['harga_beli'] ?>" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
          <input id="text4" name="stok" value="<?= $produk['stok'] ?>" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Minimal Stok</label> 
        <div class="col-8">
          <input id="text5" name="min_stok" type="text" value="<?= $produk['min_stok'] ?>" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Jenis Produk</label> 
        <div class="col-8">
          <input id="text6" name="jenis_produk_id" type="text" value="<?= $produk['jenis_produk_id'] ?>" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" value="ubah" class="btn btn-primary">Ubah</button>
        </div>
      </div>
</form>