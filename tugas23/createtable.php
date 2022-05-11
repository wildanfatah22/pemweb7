<?php
include "koneksi.php";
//membuat table
$querysql = "CREATE TABLE tb_pegawai(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama  VARCHAR(200) NOT NULL,
    alamat text,
    email VARCHAR(50) NOT NULL,
    telp varchar(20) NOT NULL
    )";


if(mysqli_query($conn, $querysql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn)
?>