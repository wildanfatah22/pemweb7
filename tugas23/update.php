<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perbarui Data Pegawai</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1> Perbarui Data Pegawai </h1>
    <form action="updateact.php" method="post">
        <?php
        $id = $_GET['id'];
        include "koneksi.php";        
        $query = mysqli_query($conn, "SELECT * FROM tb_pegawai where id = $id");
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <table>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <tr>
                <td>Nama</td>
                <td><input type=" text" name="nama" value="<?php echo $data['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $data['email'];  ?>"></td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td><textarea name="telp"><?php echo $data['telp']; ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
        <?php } ?>
    </form>
</body>

</html>