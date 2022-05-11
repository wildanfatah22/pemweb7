<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat  = $_POST['alamat'];
    $email = $_POST['email'];
    $telp  = $_POST['telp'];
    echo $id,$nama,$alamat,$email,$telp;
    mysqli_query($conn, "UPDATE tb_pegawai SET nama='$nama', alamat='$alamat', email='$email', telp='$telp' WHERE id = $id");
    header("location:index.php");
?>