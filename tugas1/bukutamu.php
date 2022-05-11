<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
</head>
<body>
	<!--menampilkan tulisan dengan format tulisan heading 1-->
	<h1>TUGAS 1</h1>
	<?php
		//memanggil file tugas1koneksi.php
		include "tugas1koneksi.php";
		//memanggil file tugas1buattabel.php
		include "tugas1buattabel.php";
		//memanggil file tugas1insert.php
		include "tugas1insert.php";
		//menutup koneksi
		mysqli_close($conn);
	?>
</body>
</html>