<?php
include

if (isset($_POST['tugas']) && isset($_POST['jangkawaktu']) && isset($_isset($_POST['keterangan']))) {
    $tugas = mysql_real_escape_string($mysqli,$_POST['tugas']);
    $jangka_waktu = mysql_real_escape_string($mysqli,$_POST['keterangan']);
    $keterangan = mysql_real_escape_string($mysqli,$_POST['keterangan']);

    $sql ="INSERT INTO tbtodo (tugas, jangkawaktu, keterangan) VALUES ('$tugas',$jangkawaktu','$keterangan')";

    if (mysqlli_query($mysqli, $sql)) {
        $r =mysqli_affected_rows($mysqli);
        if ($r > 0) {
            header("location: ../index.php?halaman=todo$pesan_tambah=berhasil");
        } else {
            header("location: ../index.php?halaman=todo$pesan_tambah=gagal");
        } 
        exit();

}