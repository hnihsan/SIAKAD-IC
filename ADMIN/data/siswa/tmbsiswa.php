<h2 id="judul">Tambah Data Siswa</h2>
<form>
	<table border="2">
	<tr>
		<th >NIS : </th>
		<td><input type=text name='nip' required maxlength='10'></td>
	</tr>
	<tr>
		<th>Nama : </th>
		<td><input type=text name='nama' required maxlength='30'></td>
	</tr>
	<tr>
		<th>Alamat : </th>
		<td><textarea cols="20" rows="3"></textarea></td>
	</tr>
	<tr>
		<th>Tempat lahir : </th>
		<td><input type=text name='nama' required maxlength='30'></td>
	</tr>
	<tr>
		<th>Tanggal lahir : </th>
		<td><input type=date name='nama' ></td>
	</tr>
	<tr>
		<th>Kelas : </th>
		<td><select>
			<option>--pilih kelas--</option>
		</select></td>
	</tr>
	
	</table>	
	<input type=submit name='tambah' value='Tambah'>
	<a href='index.php?hal=dbsiswa'>Kembali</a>
</form>