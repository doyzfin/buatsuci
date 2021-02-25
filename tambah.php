<?php

require_once 'config.php';

if (isset($_POST['submit'])) {
  $n_lansia = $_POST['nama_lansia'];
  $alamat = $_POST['alamat'];
  $tgl = $_POST['tanggal_lahir'];
  $umur = $_POST['umur'];
  $pend = $_POST['pendidikan'];
  $nik = $_POST['nik'];
  $bpjs = $_POST['bpjs'];


  $q = $conn->query("INSERT INTO lansia VALUES ('', '$n_lansia','$alamat', '$tgl', '$umur', '$pend', '$nik', '$bpjs')");

  if ($q) {

    echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {

    echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {

  header('Location: index.php');
}