<h2>PERBAHARUI</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM sepeda WHERE id_sepeda='$_GET[id_sepeda];'");
$pecah= $ambil->fetch_assoc();



?>

<form method="post" >
<div class="form-group has-success">
<label> kode</label>
<input type="text" name="kode_sepeda" class="form-control" value="<?php echo $pecah['kode_sepeda'];?>">
<label> Merk</label>
<input type="text" name="Merk_sepeda" class="form-control" value="<?php echo $pecah['Merk_sepeda'];?>">
<label> Jenis</label>
<input type="text" name="Jenis_sepeda" class="form-control" value="<?php echo $pecah['Jenis_sepeda'];?>">
<label> Jumlah</label>
<input type="number" name="Jumlah_sepeda" class="form-control" value="<?php echo $pecah['Jumlah_sepeda'];?>">
</div>

<button class="btn btn-info btn-lg" name="perbaharui">perbaharui</button>
</form>

<?php
if (isset($_POST['perbaharui']))
{
    $koneksi->query("UPDATE sepeda SET kode_sepeda='$_POST[kode_sepeda]', 
    Merk_sepeda='$_POST[Merk_sepeda]', Jenis_sepeda='$_POST[Jenis_sepeda]', 
    Jumlah_sepeda='$_POST[Jumlah_sepeda]' 
    WHERE id_sepeda='$_GET[id_sepeda]'");
    echo "<script>alert('data berhasil perbaharui')</script>";
    echo "<script>location='sepeda.php?halaman=sepeda';</script>";
}
?>