<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pegawai</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1> Data Pegawai </h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>No. Telp</th>
          <th>Edit</th>
        </tr>
      <thead>
      <tbody>
      <?php
        include "koneksi.php";
        $sqlquery = mysqli_query($conn, 'SELECT * FROM tb_pegawai');
        while ($data = mysqli_fetch_array($sqlquery)) {
        ?>
        <tr>
            <td><?php echo $data['id'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <td><?php echo $data['email'] ?></td>
            <td><?php echo $data['telp'] ?></td>
            <td class="update"><a href="update.php?id=<?php echo $data['id']; ?>">Update /</a>
                <a href="delete.php?id=<?php echo $data['id']; ?>">/ Delete</a>
            </td>
        </tr>
        <?php 
         }
        ?>
      </tbody>
    </table>
    <br>
    <center><button class="btn-tambah"><a href="insertdata.php">Tambah Pegawai</a></button>
</body>
</html>