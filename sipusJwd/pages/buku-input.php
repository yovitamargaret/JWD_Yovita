<?php
$sql = "SELECT idbuku FROM tbbuku ORDER BY idbuku DESC LIMIT 1";
$q_id_buku = mysqli_query($db, $sql);
$result = mysqli_fetch_array($q_id_buku);
?>

<div id="label-page"><h3>Input Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-input-proses.php" method="post" onsubmit="return validasi()">
	<div class="form-group">
		<label for="">ID Buku</label>
		<input type="text" name="id_buku" class="form-control" value="<?= ++$result['idbuku'] ?>" readonly>
	</div>

	<div class="form-group">
		<label for="">Judul Buku</label>
		<input type="text" name="judul_buku" id="judul_buku"class="form-control">
	</div>

	<div class="form-group">
		<label for="">Kategori</label>
		<select name="kategori" class="form-control" id="kategori">
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
		</select>
	</div>

	<div class="form-group">
		<label for="">Pengarang</label>
		<input type="text" name="pengarang" class="form-control" id="pengarang">
	</div>

	<div class="form-group">
		<label for="">Penerbit</label>
		<input type="text" name="penerbit" class="form-control" id="penerbit">
	</div>
	<div>
	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
	</div>
	</form>
</div>

<script type="text/javascript">
	function validasi(){
		judul_buku = document.getElementById("judul_buku");
		kategori = document.getElementById("kategori");
		pengarang = document.getElementById("pengarang");
		penerbit = document.getElementById("penerbit");
	
	if (judul_buku.value == '') {
		alert('Mohon isi data dengan lengkap !');
		judul_buku.focus();
			return false;
		}
	

	if (kategori.value == '') {
		alert('Mohon isi data dengan lengkap !');
		kategori.focus();
			return false;
		}
	if (pengarang.value == '') {
		alert('Mohon isi data dengan lengkap !');
		pengarang.focus();
			return false;
		}
	if (penerbit.value == '') {
		alert('Mohon isi data dengan lengkap !');
		penerbit.focus();
			return false;
		}
	}



</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
