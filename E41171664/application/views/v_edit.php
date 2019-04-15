<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<center>
		<h1>Barang</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($barang as $b){ ?>
	<form action="<?php echo base_url(). '/index.php/admin/barang/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>kode barang</td>
				<td><input type="text" name="kode_barang" value="<?php echo $b->kode_barang ?>"></td>
			</tr>
            <tr>
				<td>nama barang</td>
				<td><input type="text" name="nama_barang" value="<?php echo $b->nama_barang ?>"></td>
			</tr><tr>
				<td>deskripsi</td>
				<td><input type="text" name="deskripsi" value="<?php echo $b->deskripsi ?>"></td>
			</tr><tr>
				<td>stok</td>
				<td><input type="text" name="stok" value="<?php echo $b->stok ?>"></td>
			</tr><tr>
				<td>harga barang</td>
				<td><input type="text" name="harga_barang" value="<?php echo $b->harga_barang ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>