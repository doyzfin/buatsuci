<?php

require_once 'config.php';


if (isset($_GET['id'])) {
  $id = $_GET['id'];


  $q = $conn->query("SELECT * FROM lansia WHERE lansia_id = '$id'");

  foreach ($q as $dt) :
  ?>

  <h1>PRODUK</h1>
  <h2>Halaman Ubah Data</h2>

  <form action="proses_update.php" method="post">
    <input type="hidden" name="lansia_id" value="<?= $dt['lansia_id'] ?>">
    <input type="text" name="nama_lansia" value="<?= $dt['nama_lansia'] ?>">
	<input type="text" name="alamat" value="<?= $dt['alamat'] ?>">
    <input type="text" name="tanggal_lahir" value="<?= $dt['tanggal_lahir'] ?>">
    <input type="number" name="umur" value="<?= $dt['umur'] ?>">
	<input type="text" name="pendidikan" value="<?= $dt['pendidikan'] ?>">
	<input type="text" name="nik" value="<?= $dt['nik'] ?>">
	<input type="text" name="bpjs" value="<?= $dt['bpjs'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
  

  <?php
  endforeach;
}