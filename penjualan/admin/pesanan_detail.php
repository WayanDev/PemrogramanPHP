<?php
$id= $_REQUEST['id'];
$model = new Pesanan();

$pesanan = $model->getPesanan($id);
?>
<form action="pesanan_controller.php" method="post">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Tanggal</label> 
        <div class="col-8">
          <input id="tanggal" name="tanggal" value="<?= $pesanan['tanggal'] ?>"  type="date" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Pelanggan ID</label> 
        <div class="col-8">
          <input id="total" name="total" value="<?= $pesanan['pelanggan_id'] ?>" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Total</label> 
        <div class="col-8">
          <input id="pelanggan_id" value="<?= $pesanan['total'] ?>" name="pelanggan_id" type="text" class="form-control">
        </div>
      </div>
      
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" value="ubah" class="btn btn-primary">Ubah</button>
        </div>
      </div>
</form>