<?php

require_once 'config.php';

if (isset($_POST['submit'])) {
  $id = $_POST['lansia_id'];
  $n_lansia = $_POST['nama_lansia'];
  $alamat = $_POST['alamat'];
  $tgl = $_POST['tanggal_lahir'];
  $umur = $_POST['umur'];
  $pend = $_POST['pendidikan'];
  $nik = $_POST['nik'];
  $bpjs = $_POST['bpjs'];
  
  $q = $conn->query("UPDATE lansia SET nama_lansia = '$n_lansia', alamat = '$alamat', tanggal_lahir = '$tgl', umur = '$umur', pendidikan = '$pend', nik = '$nik', bpjs = '$bpjs' WHERE lansia_id = '$id'");

  if ($q) {
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='index.php'</script>";
  } else {

    echo "<script>alert('Data produk gagal diubah'); window.location.href='index.php'</script>";
  }
} else {

  header('Location: index.php');
}