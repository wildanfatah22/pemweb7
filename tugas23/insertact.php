<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $email = $_POST['email'];
    $telp  = $_POST['telp'];
    mysqli_query($conn, "INSERT INTO tb_pegawai VALUES('$id','$nama','$alamat','$email','$telp')");
    header("location:index.php");
?>