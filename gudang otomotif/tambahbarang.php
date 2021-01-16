<h2> Tambah Barang</h2>

<form method="post" enctype="multipart/from-data">
<div class= "from-group has-success">
        <label>kode</label>
        <input type="text" class="form-control" name="kode_sepeda">
    </div>
    <div class= "from-group has-danger">
        <label>Merk</label>
        <input type="text" class="form-control" name="Merk_sepeda">
    </div>
    <div class="form-group has-warning">
        <label> Jenis</label>
        <input type="text" class="form-control" name="Jenis_sepeda">
    </div>
    <div class="form-group has-warning">
        <label> Jumlah</label>
        <input type="number" class="form-control" name="Jumlah_sepeda">
    </div>
    <button class="btn btn-info btn-lg" name ="Simpan">Simpan</button>
</form>
<?php
if (isset($_POST['Simpan']))
{
$koneksi->query("INSERT INTO sepeda
(kode_sepeda, Merk_sepeda, Jenis_sepeda, Jumlah_sepeda)
VALUES('$_POST[kode_Sepeda]','$_POST[Merk_sepeda]', '$_POST[Jenis_sepeda]', '$_POST[Jumlah_sepeda]')");
    
    echo "<script>alert('data berhasil ditambahkan')</script>";
    echo "<meta http-equiv='refresh' content='1;url=sepeda.php?halaman=sepeda'>";
}

?>