<?php
    $servername = "localhost";
    $username= "root";
    $password = "";
    $dbname = "buku_tamu";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    //cek koneksi
    if(!$conn){
        die("connection failed : " . mysqli_connect_error());

    }

    $sql = "CREATE TABLE buku_tamu (
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL,
    ISI TEXT)";

    //cek berhasil / gagal buat tabel
     if (mysqli_query($conn, $sql)) {
       echo "Tabel buku_tamu berhasil dibuat";
     } else {
        echo "Error Creating Table : ".$sql."<br>".mysqli_error($conn);
     }
    // Menutup koneksi
    mysqli_close($conn)
?>