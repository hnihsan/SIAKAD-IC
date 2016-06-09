<h2 id="judul">Tambah Data Mata Pelajaran</h2>
<form>
	<table border="2">
	<tr>
		<th >Kode : </th>
		<td><input type=text name='nip' required maxlength='10'></td>
	</tr>
	<tr>
		<th>Nama Pelajaran: </th>
		<td><input type=text name='nama' required maxlength='30'></td>
	</tr>
	<tr>
		<th>Pengajar: </th>
		<td><select>
			<option>--pilih guru--</option>
		</select></td>
	</tr>	
	<tr>
		<th>Jam Pelajaran: </th>
		<td><input type=number name='jam' required ></td>
	</tr>
	</table>	
	<input type=submit name='tambah' value='Tambah'>
	<a href='index.php?hal=dbmatpel'>Kembali</a>
</form>