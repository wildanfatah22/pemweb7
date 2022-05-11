<!DOCTYPE html>
<html>
<head>
	<title>Insert Data</title>
</head>
<body>
	<!--deklarasi script php-->
	<?php
	//script insert data
	$sql = "INSERT INTO buku_tamu(ID_BT,NAMA,EMAIL,ISI) VALUES('1','Achmad Bias Firmansyah','achmadbias24@gmail.com','VVIP')";
	//cek berhasil / gagal buat tabel
	if (mysqli_query($conn, $sql)) {
		echo "Data berhasil dimasukkan";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
	?>

	<!--buat tabel-->
	<table border="3">
		<tr>
			<td>ID_BT</td>
			<td>NAMA</td>
			<td>EMAIL</td>
			<td>ISI</td>
		</tr>

	<!--deklarasi script php-->
	<?php
	//script menampilkan data
	$sql="SELECT * FROM buku_tamu";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		while ($tampil= mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$tampil['ID_BT']."</td>";
			echo "<td>".$tampil['NAMA']."</td>";
			echo "<td>".$tampil['EMAIL']."</td>";
			echo "<td>".$tampil['ISI']."</td>";
			echo "</tr>";
			echo"</table>";
		}
	}
	?>
	</table>
</body>
</html>