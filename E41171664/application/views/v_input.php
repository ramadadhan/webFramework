<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
	<center>
		<h1>Barang</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). '/index.php/admin/barang/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
		<tr>
				<td>kode barang</td>
				<td><input type="text" name="kode_barang"></td>
			</tr>
			<tr>
				<td>nama barang</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>deskripsi</td>
				<td><input type="text" name="deskripsi"></td>
			</tr>
			<tr>
				<td>stok</td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr>
				<td>harga barang</td>
				<td><input type="text" name="harga_barang"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>