<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">

    <title></title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="proses_tambah_mahasiswa.php" method="post" style="display: inline-grid; margin-left: 3rem">
        Nama :
        <input type="text" name="nama" value="" class="form_control">
        Tanggal Lahir :
        <input type="date" name="tanggal_lahir" value="" class="form_control">
        Jenis Kelamin :
        <select name="jenis_kelamin" class="form_control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat :
        <textarea name="alamat" class="form_control" rows="4"></textarea>
        Username :
        <input type="text" name="username" value="" class="form_control">
        Password :
        <input type="password" name="password" value="" class="form_control">
        Jurusan :
        <select name="id_jurusan" class="form_control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_jurusan=mysqli_query($conn,"select * from jurusan");
            while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
                echo '<option value="'.$data_jurusan['id_jurusan'].'">'
                .$data_jurusan['nama_jurusan'].'</option>';
            }
            ?>
            </select>
            <input type="submit" name="simpan" value="Tambah Data" class="btn btn_primary">
            </form>

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
             integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html> 