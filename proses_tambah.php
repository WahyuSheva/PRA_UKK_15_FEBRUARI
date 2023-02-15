<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
          $nama=$_POST['nama'];
          $almt=$_POST['alamat'];
          $gnr=$_POST['genre'];
          $jdl=$_POST['judul'];  
          $thn=$_POST['tahun'];
          $tgls=$_POST['tanggal'];
          $tglk=$_POST['kembali'];
          $hg=$_POST['harga'];


          $sql = "INSERT INTO tb_dvd (genre_film,judul_film,tahun_film,tanggal_sewa,tanggal_kembali,harga) 
          VALUES ('$gnr','$jdl','$thn','$tgls','$tglk','$hg')";
          $query = mysqli_query($koneksi, $sql); 

          $sql="SELECT max(id_dvd) AS dvd FROM tb_dvd LIMIT 1";
          $query = mysqli_query($koneksi, $sql);                                                                             

          $data=mysqli_fetch_array($query);
          $vd=$data['dvd'];
          
          $sql="INSERT INTO tb_penyewa(nama_penyewa,alamat,id_dvd)
           VALUES ('$nama','$almt','$vd')";
          $query = mysqli_query($koneksi, $sql);
          

          if($query){
                    header('location:tampil.php?status=sukses');
          }else{
                    header('location:tampil.php?status=gagal');
          }
          }
          ?>
