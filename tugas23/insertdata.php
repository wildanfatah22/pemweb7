<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Pegawai</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1> Tambah Pegawai </h1>
    <form action="insertact.php" method="post">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>No. Telp</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>

