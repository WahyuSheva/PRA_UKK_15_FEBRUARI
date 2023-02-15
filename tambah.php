<!DOCTYPE html>
<html lang="en">
<head>
    <title>Done</title>
</head>
<body>
    <center>
    <h3>Form Tambah</h3>
</center>
    <form action ="proses_tambah.php" method = "POST">

    <fieldset>

    <table border="1">
        <form>
            <p>
                <label for ="nama">Nama : </label>
                <input type ="text" name = "nama" />
            </p>
            <p>
                <label for ="alamat">alamat : </label>
                <textarea name ="alamat" row ="5"></textarea>
            </p>
        <p>
            <label for ="genre_film">Genre Film : </label>
            <input type ="text" name = "genre" />
        </p>
        <p>
            <label for ="judul_film">Judul Film : </label>
            <input type ="text" name = "judul" />
        </p>
        <p>
            <label for ="tahun_film">Tahun Film : </label>
            <input type ="year" name = "tahun" />
        </p>
        <p>
            <label for ="tanggal_sewa">Tanggal Sewa : </label>
            <input type ="date" name = "tanggal" />
        </p>
        <p>
            <label for ="tanggal_kembali">Tanggal Kembali : </label>
            <input type = "date" name = "kembali"/>
        </p>
        <p>
            <label for ="harga">Harga : </label>
            <input type = "text" name = "harga"/>
        </p>
    </form>

    <p>
       <input type="submit" value="Tambah" name="tambah"/>
    </p>

</fieldset>

</table>
</body>
</html>