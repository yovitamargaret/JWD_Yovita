<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="POST" onSubmit="return validasi()">
	<div class="form-group">
		<label for="">ID Anggota</label>
		<input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled">
	</div>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" id="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Jenis Kelamin</label>
		<td class="isian-formulir"><input type="text" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>" class="form-control"></td>
	</div>

	<div class="form-group">
		<label for="">Alamat</label>
		<textarea rows="2" cols="40" name="alamat" class="form-control"><?php echo $r_tampil_anggota['alamat']; ?></textarea>
	</div>


	<div>
	<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan" class="btn btn-primary"></td>
	</div>
	</form>
	</div>
	</form>
</div>
<script type="text/javascript">
	function validasi(){
		nama = document.getElementById("nama");
	
	if (nama.value == '') {
		alert('Mohon isi nama dengan lengkap !');
		nama.focus();
			return false;
		}
	}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>