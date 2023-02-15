<?php
include("koneksi.php");

$id = $_GET ['id_penyewa'];


mysqli_query($koneksi,"DELETE FROM tb_dvd where id_dvd='$id'");
mysqli_query($koneksi,"DELETE FROM tb_penyewa where id_penyewa='$id'");


        header("Location:tampil.php?status-sukses");

?>