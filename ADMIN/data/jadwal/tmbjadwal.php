<h2 id="judul">Tambah Data Jadwal Pengajaran</h2>
<form>
	<table border="2">
	<tr>
		<th >Kode : </th>
		<td><input type=text name='nip' required maxlength='10'></td>
	</tr>
	
	<tr>
		<th>Pelajaran: </th>
		<td><select>
			<option>--Pilih Pelajaran--</option>
		</select></td>
	</tr>
	<tr>
		<th>Kelas: </th>
		<td><select>
			<option>--Pilih Kelas--</option>
		</select></td>
	</tr>
	<tr>
		<th>Guru: </th>
		<td><select>
			<option>--Pilih Guru--</option>
		</select></td>
	</tr>
	<tr>
		<th>Sesi: </th>
		<td>
		<select>
			<option>--Hari--</option>
		</select>, &nbsp;
		<select>
			<option>--Jam--</option>
		</select>
		</td>
	</tr>
	
	</table>	
	<input type=submit name='tambah' value='Tambah'>
	<a href='index.php?hal=dbjadwal'>Kembali</a>
</form>