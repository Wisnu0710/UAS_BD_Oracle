<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_pesanan = $_POST['id_pesanan'];
  $stok = $_POST['stok'];
  $tgl_kadarluasa = $_POST['tgl_kadarluasa'];
  $jenis = $_POST['jenis'];
  $nama_obat = $_POST['nama_obat'];

$query = "INSERT INTO LAPORAN (ID_PESANAN,STOK,TGL_KADARLUASA,JENIS,NAMA_OBAT) VALUES ('".$id_pesanan."','".$stok."','".$tgl_kadarluasa."','".$jenis."','".$nama_obat."')";
  $statement = oci_parse($con,$query);
  $r = oci_execute($statement,OCI_DEFAULT);
   $res = oci_commit($con);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Berhasil ditambahkan'); 
  window.location.href='laporan.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Gagal ditambahkan');
  window.location.href='laporan.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: laporan.php'); 
}