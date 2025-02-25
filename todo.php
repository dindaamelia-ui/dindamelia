<?php
include 'config.php';
$hasil= mysqli_query($mysqli,"select * form tbtodo where id'$_GET[id]'");
$row = mysqli_fetch_array($hasil);
?>
<?php

if(isset($_GET['pesan_hapus'])) {
  ?>

<div class="alert alert-<?php echo $_GET['pesan_hapus'] == 'berhasil' ? 'succes' : 'danger'; ?> alert-dismissible">
<strong ><?php $_GET['pesan_hapus'] == 'berhasil' ? 'berhasil': 'gagal';  ?>  dihapus </strong >
<button type="button" class ="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
<?php
}?>
<!--font link w3scholl-->
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://font.googleapis.com/icon?family=Materrial+Icons" rel="stylesheet">
<body>
  <i class="cmaterial-icons" style="font-size:36px;color:black"></i>
  <!-- Button trigger modal-->
  <button style="float: right;" class="btn btn-primary mb-2" type="buton" data-bs-toggle="modal"
  data-bs-target="#exampleModal">
  <i class="fa fa-plus"> Tambah</i></button> <br>
  <!-- Button trigger modal-->
  <!-- Modal-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hodden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="<modal-header">
    <h5 class="modal-title text-body" id="exampleModalLabel"> Tugas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"aria-label="class"></button>
</div>
<from method="POST" action="todo/aksi_tambah_todo.php">
  <div class="modal-body">
    <div clas="mb-3">
      <label class="form-label text-body">Tugas</label>
      <input type="text"class="from-control"placeholder="tugas" name="tugas">
</div>
<div clas="mb-3">
<label class="from-label text-body">Jangka waktu</label>
<input type="date" class="from-control" name="jangkawaktu">
</div>
<div clas="mb-3">
<combo label class="from-label text-body">Keterangan</label>
<select class="from-control" name="keterangan">
  <option>Selesai</option>
  <option>Belum Selesai</option>
</select>
</div>
</div>
<div class="modal-footer">
  <button type="button" class="btn  btn-secondary" data-bs-dismiss="modal">Kembali</button>
  <button type="sumbit" class="btn  btn-primary">Simpan</button>
</div>
</from>
</div>
</div> 
</div>
<!--Modal-->

</body>
<!--Table To Do List-->
<table border="1" class="table-sm-bg table-custom w-100  h-40 text-center">
  <thead>
  <tr class="table-active fw-bolder text-center">
    <td>No</td>
    <td>Tugas</td>
    <td>Jangkawaktu</td>
    <td>Keterangan</td>
</tr></thead>
</tr>
<?php


$no=1;
while ($row=mysqli_fetch_array( $hasil)) { 
  echo  "<tr>

        <td>$No</td>
        <td>$row[tugas]</td>
        <td>$row[jangkawaktu]</td>
        <td>$row[keterangan]</td>
        <td>
        <a  class='btn-warning fa fa-pencil' href='index.php?halaman=edit_todo&id=$row[id]'> Edit </a>"; ?>
        <a  class='btn btn-danger fa fa-trash' href='todo/aksi_hapus_todo.php?id=<?$row[id]?>'
        onclik="return confirm('are you sure?')"> Hapus </a></td>
        <?php
        $no++;
        echo
        "</tr>"
      }
?>
</table>

      