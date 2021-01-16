<?php
$ambil= $koneksi->query("SELECT * FROM sepeda WHERE id_sepeda='$_GET[id_sepeda]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM sepeda WHERE id_sepeda='$_GET[id_sepeda]'");
echo "<script>alret ('Barang terhapus');</script>";
echo "<meta http-equiv= 'refresh' content='1;url=sepeda.php?halaman=sepeda'>";
?>