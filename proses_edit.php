<?php
include("koneksi.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit'])) {
    // ambil data dari form
    $id = $_POST['id_penyewa'];
    $nama = $_POST['nama_penyewa'];
    $almt = $_POST['alamat'];
    $gnr = $_POST['genre_film'];
    $jdl = $_POST['judul_film'];
    $thn = $_POST['tahun_film'];
    $tgls = $_POST['tanggal_sewa'];
    $tglk = $_POST['tanggal_kembali'];
    $hg = $_POST['harga'];



    // query
    $sql = "UPDATE tb_penyewa SET nama_penyewa='$nama', alamat='$almt' WHERE id_penyewa='$id'";
    $query = mysqli_query($koneksi, $sql);

    $sql = "UPDATE tb_dvd SET genre_film='$gnr', judul_film='$jdl', tahun_film='$thn', tanggal_sewa='$tgls', tanggal_kembali='$tglk', harga='$hg' WHERE id_dvd = '$id'";
    $query = mysqli_query($koneksi, $sql);

    // query berhasil disimpan?
    if ($query){
        header('Location:tampil.php?update=sukses');
    }else{
        header('Location:tampil.php?update=gagal');
} }
?>