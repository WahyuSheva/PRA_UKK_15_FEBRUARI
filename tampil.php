<!DOCTYPE html>
<html lang="en">
<head>
    <title>Done</title>
</head>
<center>
<body>
    <h3> Skansay Shop <h3>
        <a href = "tambah.php"></a>
        <table border ="2">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Genre Film </th>
                <th>Judul Film </th>
                <th>Tahun Film </th>
                <th>Tanggal Sewa </th>
                <th>Tanggal Kembali </th>
                <th>Harga </th>
                <th>Aksi</th>
</tr>

<?php
include ("koneksi.php");
$sql = "SELECT * FROM tb_dvd INNER JOIN tb_penyewa ON tb_dvd.id_dvd = tb_penyewa.id_dvd";
$query = mysqli_query($koneksi,$sql);

while($data = mysqli_fetch_array($query)){

    echo "<tr>";
    echo "<td>".$data['nama_penyewa']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['genre_film']."</td>";
    echo "<td>".$data['judul_film']."</td>";
    echo "<td>".$data['tahun_film']."</td>";
    echo "<td>".$data['tanggal_sewa']."</td>";
    echo "<td>".$data['tanggal_kembali']."</td>";
    echo "<td>".$data['harga']."</td>";

    echo "<td>";
    echo "<a href='hapus.php?id_penyewa=".$data['id_penyewa']."'>Hapus</a>|";
    echo "<a href='edit.php?id_penyewa=".$data['id_penyewa']."'>Edit</a>";
    echo "</td>";

    echo "</tr>";
}
?>
<a href="tambah.php"><input type="button" value="tambah">

</table>
</body>
</center>
</html>