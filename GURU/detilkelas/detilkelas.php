<h2 class='judul'>*Nama Matpel dan Kelas*</h2>
<p>
<ul>
	<li><a href="index.php?hal=detilkls&sub=pertemuan">Pertemuan</a></li>
	<li><a href="index.php?hal=detilkls&sub=absen">Absensi</a></li>
	<li><a href="index.php?hal=detilkls&sub=nilai">Nilai</a></li>
</ul>
<?php
	if(isset($_GET['sub'])){
    switch($_GET['sub']){
            case 'pertemuan'     : include 'pertemuan.php'; break;
            case 'absen'     : include 'absen.php'; break;
            case 'nilai'     : include 'nilai.php'; break;            

            default : include '404.php';
    }
}else{
    include 'pertemuan.php';
}
?>
</p>