<h2 id="judul">Tambah Data Kelas</h2>
<form>
	<table border="2">
	<tr>
		<th >Kode : </th>
		<td><input type=text name='nip' required maxlength='10'></td>
	</tr>
	<tr>
		<th>Nama Kelas: </th>
		<td><input type=text name='nama' required maxlength='30'></td>
	</tr>
	<tr>
		<th>Wali Kelas : </th>
		<td><select>
			<option>--Pilih Guru--</option>
		</select></td>
	</tr>
	
	</table>	
	<input type=submit name='tambah' value='Tambah'>
	<a href='index.php?hal=dbkelas'>Kembali</a>
</form>