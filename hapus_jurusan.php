<?php
    if($_GET['id_jurusan']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from jurusan where id_jurusan='".$_GET['id_jurusan']."'");
        if($qry_hapus){
             echo "<script>alert('Sukses hapus siswa');location.href='tampil_mahasiswa.php';</script>";
        } else {
             echo "<script>alert('Gagal hapus siswa');location.href='tampil_mahasiswa.php';</script>";
        }
    }
    ?> 