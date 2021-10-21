<?php
$sql = "SELECT idtransaksi FROM tbtransaksi ORDER BY idtransaksi DESC LIMIT 1";
$q_id_transaksi = mysqli_query($db, $sql);
$result = mysqli_fetch_array($q_id_transaksi);
?>

<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post" onclick="return confirm">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="id_transaksi" class="form-control" value="<?= ++$result['idtransaksi'] ?>" readonly></td>
		</tr>
		<tr>
			<td class="label-formulir">Anggota</td>
			<td class="isian-formulir">
				<select name="id_anggota" id="nama" class="form-control">
					<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Buku</td>
			<td class="isian-formulir">
				<select name="id_buku" class="form-control">
					<option value="" select="selected"> Pilih Data Buku </option>
					<?php
						$q_tampil_buku=mysqli_query($db,
							"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
						);
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="text" name="tgl_pinjam" value="<?php echo $tgl; ?>" readonly="readonly" class="form-control"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>

<script type="text/javascript">
	function validasi(){
		id_anggota = document.getElementByName("id_anggota");
		id_buku = document.getElementByName("id_buku");
		tgl_pinjam = document.getElementByName("tgl_pinjam");
	
	if (id_anggota.value == '' && id_buku.value == '' && tgl_pinjam.value='') {
		alert('Mohon isi data dengan lengkap !');
		nama.focus();
			return false;
		}
	}



</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>