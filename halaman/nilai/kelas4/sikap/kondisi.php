<?php
	include '../../../../config/koneksi.php';
	$id = $_POST['id'];
	$query = mysqli_query($koneksi,"SELECT * FROM kopetensi WHERE kd = '$id'") or die(mysqli_error());
	foreach ($query as $data) {
?>
	<input type="text"  name="kode_kategori" value="<?php echo $data['kode_kategori'] ?> " readonly="">

	<input type="text"  name="kode_kelas" value="<?php echo $data['kode_kelas'] ?>" readonly="">
	<input type="text"  name="kode_mapel" value="<?php echo $data['kode_mapel'] ?>" readonly="">
<?php } ?>
