<?php
include("config.php");
$hasil =mysqli_query($mysqli, "select * from tbtodo where id='$_GET[id]'");
$row =mysqli_fetch_array($hasil);
?>
<br>
<br>
<br>
<div class ="d-flex justify-content-center">
<div class ="card col-md-6">
<div class ="card-header">
      Edit tugas
    </div>
    <from method="POST" action="todo/aksi_edit_todo.php">
    <div class ="card-body">
    <div class ="mb-3">
    <label class="form-label text-body">Tugas</label>
        <input type="text" class="form-control" placeholder="tugas" nama="tugas" value="<?= $row ['tugas'] ?>">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
</div>
<div class ="mb-3">
    <label class="form-label text-body">JangkaWaktu</label>
    <input type="date" class="form-control" placeholder="jangka waktu" value="<?= $row['jangkawaktu'] ?>">
</div>
<div class ="mb-3">
<label class ="form-label text-body">Keterangan</label>
<select class ="form-control" name="keterangan">
<option>Pilih</option>
<option <?php echo $row['keterangan'] = 'Belum selesai' ? 'selected' :'' ?>>Belum Selesai</option>
<option <?php echo $row['keterangan'] = 'Selesai' ? 'selected' :'' ?>> Selesai</option>

</select>



</div>
</div>

<div class="card-footer text-suted">
    <a href="index.php?halaman=todo">
        <button type="button" class="btn btn-secondary"><i class="fa fa-arrow-left"></i>Kembali</button>
</a>





