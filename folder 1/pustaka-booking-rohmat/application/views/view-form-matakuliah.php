<<!DOCTYPE html>
<html>
<head>
	
	<title>From Input matakuliah</title>
	
</head>
<body>
	<center>
		<form action="<?= base_url("matakuliah/cetak"); ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						Form Input Data matakualih
					</th>
				</tr>

				<tr>
					<th colspan="3">
					</th>
				</tr>

				<tr>
					<th>kode mtk</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode">
					</td>
				</tr>

				<tr>
					<th>nama mtk</th>
					<th>:</th>
					<td>
						<input type="text" name="nama" id="nama">
					</td>
				</tr>

				<tr>
					<th>sks</th>
					<th>:</th>
					<td>
						<select name="sks" id="sks">
							<option value="">pilih sks</option>
							<option value="2">2</option>
							<option value="2">3</option>
							<option value="2">4</option>
						</select>
					</td>
				</tr>

				<tr>
				<th colspan="3" align="center">
					<input type="submit" value="submit">
				</th>
			</tr>
			</table>
	</form>
	</center>
</body>
</html>