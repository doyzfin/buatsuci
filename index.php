<?php

require_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>LANSIA</title>
</head>
<body>
<center>
  <h1>DATA LANSIA RW 10</h1>

  <form method="post" action="tambah.php">
    <input type="text" name="nama_lansia" placeholder="Nama Lansia"><BR><br>
	<input type="text" name="alamat" placeholder="Alamat"><BR><BR>
	<input type="date" name="tanggal_lahir" value="01/01/1901" min="01/01/1901" max="31/12/2035"><br><br>
    <input type="number" name="umur" placeholder="Umur"><BR><BR>
	<input type="text" name="pendidikan" placeholder="Pendidikan"><BR><BR>
	<input type="text" name="nik" placeholder="NIK"><BR><BR>
	<input type="text" name="bpjs" placeholder="No BPJS"><BR><BR>
    <input type="submit" name="submit" value="Tambah Data"><BR><BR>
  </form><br/>
<p><a href="export.php"><button>Export Data ke Excel</button></a></p>

  <table border="1">
    <tr>
      <th>No.</th>
	  <th>Nama Lansia</th>
	  <th>Alamat</th>
      <th>Tanggal Lahir</th>
      <th>Umur</th>
	  <th>Pendidikan</th>
	  <th>NIK</th>
	  <th>No BPJS</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    $q = $conn->query("SELECT * FROM lansia");

    $no = 1;
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama_lansia'] ?></td>
	  <td><?= $dt['alamat'] ?></td>
      <td><?= $dt['tanggal_lahir'] ?></td>
      <td><?= $dt['umur']  ?></td>
	  <td><?= $dt['pendidikan'] ?></td>
	  <td><?= $dt['nik'] ?></td>
	  <td><?= $dt['bpjs'] ?></td>
      <td><a href="update.php?id=<?= $dt['lansia_id'] ?>">Ubah</a></td>
      <td><a href="hapus.php?id=<?= $dt['lansia_id'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>


    <?php
    endwhile;
    ?> 

  </table>
  </center>
</body>
</html>