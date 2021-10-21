<div id="label-page">
	<h3>Tampil Data Anggota</h3>
</div>
<div id="content">
	<a type="button" href="index.php?p=anggota-input" class="btn btn-dark">Tambah Anggota</a>
	<table class="table table-dark table-striped" style="margin-top: 30px;">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>



		<?php
		$sql = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);
		$nomor = 1;
		while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {

		?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
				<td><?php echo $r_tampil_anggota['nama']; ?></td>
				<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
				<td><?php echo $r_tampil_anggota['alamat']; ?></td>
				<td>

					<div class="badge bg-secondary"><a style="color:black" href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota']; ?>">Edit</a></div>
					<div class="badge bg-secondary"><a style="color:black" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>">Hapus</a></div>
				</td>
			</tr>
		<?php } ?>
	</table>



</div>