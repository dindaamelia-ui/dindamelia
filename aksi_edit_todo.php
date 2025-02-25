<?php
include "..//config.php";

$id = $_POST['tugas'];
$tugas = $_POST['tugas'];
$jangkawaktu = $_POST['jangkawaktu'];
$sql="update tbtodo set tugas='$tugas', jangkawaktu='$jangkawaktu',keterangan='$keterangan' where id='$id'";
//echo @
mysqli_query($mysqli,$sql);
header("location:/dbtodo_dindacamelia/index.php");
?>
