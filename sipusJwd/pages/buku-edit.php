<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>
<div class="judul"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="POST" onsubmit= "return validasi()">
	<div class="form-group">
		<label for="">ID Buku</label>
		<input type="text" name="id_buku" class="form-control" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly>
	</div>

	<div class="form-group">
		<label for="">Judul Buku</label>
		<input type="text" name="judul_buku" id="judul_buku"class="form-control" value="<?php echo $r_tampil_buku['judulbuku']; ?>">
	</div>

	<div class="form-group">
		<label for="">Kategori</label>
		<input type="text" name="kategori" id="kategori" value="<?php echo $r_tampil_buku['kategori']; ?>" class="isian-formulir isian-formulir-border">
	</div>

	<div class="form-group">
		<label for="">Pengarang</label>
		<input type="text" name="pengarang" id="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>" class="isian-formulir isian-formulir-border">
	</div>

	<div class="form-group">
		<label for="">Penerbit</label>
		<input type="text" name="penerbit" id="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>" class="isian-formulir isian-formulir-border">
	</div>
	<br>
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
	
	if (judul_buku.value == ''  ) {
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
