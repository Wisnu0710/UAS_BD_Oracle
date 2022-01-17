<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $id_pesanan = $_POST['id_pesanan'];
  $stok = $_POST['stok'];
  $tgl_kadarluasa = $_POST['tgl_kadarluasa'];
  $jenis = $_POST['jenis'];
  $nama_obat = $_POST['nama_obat'];

 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  LAPORAN  SET  STOK ='".$stok."', TGL_KADARLUASA  = '".$tgl_kadarluasa."', JENIS  = '".$jenis."', NAMA_OBAT  = '".$nama_obat."' WHERE ID_PESANAN='".$id_pesanan."'";
	$statement = oci_parse($con,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($con) ;
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data berhasil diubah'); window.location.href='laporan.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data gagal diubah'); window.location.href='laporan.php'</script>";
    }
  } else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: laporan.php'); 
  }