<?php
$sql = "SELECT idanggota FROM tbanggota ORDER BY idanggota DESC LIMIT 1";
$q_id_anggota = mysqli_query($db, $sql);
$result = mysqli_fetch_array($q_id_anggota);
?>

<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
	<div class="container-form">
	<form action="proses/anggota-input-proses.php" method="post" onsubmit="return validasi()">
    <div class="form-group">
		<label for="">ID Anggota</label>
		<input type="text" name="id_anggota" class="form-control" value="<?= ++$result['idanggota'] ?>" readonly>
	</div>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" id="nama" class="form-control">
	</div>

	<div class="form-group">
		<label for="">Jenis Kelamin</label>
		<select name="jenis_kelamin" id="jeniskelamin" class="form-control">
			<option value="Pria">Pria</option>
			<option value="Wanita">Wanita</option>
		</select>
		
	</div>

	<div class="form-group">
		<label for="">Alamat</label>
		<textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border" class="form-control"></textarea>
	</div>


	<div>
	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary" class="form-control">
	</div>
	</form>
	</div>
	
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