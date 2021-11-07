<?php
    $nama_jurusan= @$_REQUEST['nama_jurusan'];
    $angkatan= @$_POST['angkatan'];
    if($nama_jurusan == ""){
        echo "<script>";
        echo "alert('Nama Jurusan Tidak Boleh Kosong')";
        echo "</script>";
    } elseif($angkatan == ""){
        echo "<script>";
        echo "alert('Angkatan tidak boleh kosong')";
        echo "</script>";
    } else{
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into jurusan (nama_jurusan, angkatan) value ('".$nama_jurusan."',
        '".$angkatan."')");
        if($insert){
            echo "<script>";
            echo "alert('Sukses menambahkan data jurusan')";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Gagal menambahkan data jurusan')";
            echo "</script>";
        }
    }
?> 