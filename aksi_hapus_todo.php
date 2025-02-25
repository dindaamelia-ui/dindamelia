<?php
include "..//config.php";
$sql= "DELETE FROM tb todo WHERE id= '$_get[id]'";
//echo sql
mysqli_query($mysqli,$sql);
$r = mysqli_affected_rows($mysqli);
if ($r > 0 ) {
    headedr("location: ..//index.php?halaman=todo$pesan_hapus=berhasil")
} else {
    headedr("location: ..//index.php?halaman=todo$pesan_hapus=gagal")
}
