<?php
	$servername ="localhost";
	$username = "root";
	$password = "";

	//membuka koneksi ke database myDB
	$conn = mysqli_connect($servername,$username,$password);
	//cek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error()."<br>");
	}

    //membuat db
    $sql = "CREATE DATABASE buku_tamu";
    //cek kondisi
    if(mysqli_query($conn, $sql)){
        echo "database berhasil dibuat";
    }else {
        echo "error creating database : " . mysqli_error($conn);
    }

    //menutup koneksi
    mysqli_close($conn);
?>