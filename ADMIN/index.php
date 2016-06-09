<?php
include 'header.php';
?>
<div id='main'>
<?php     
if(isset($_GET['hal'])){
    switch($_GET['hal']){
			case 'dbguru'  : include 'data/guru/guru.php'; break;
			case 'dbsiswa'  : include 'data/siswa/siswa.php'; break;
			case 'dbkelas'  : include 'data/kelas/kelas.php'; break;
			case 'dbmatpel'  : include 'data/matpel/matpel.php'; break;
			case 'dbjadwal'	: include 'data/jadwal/jadwal.php'; break;     
            case 'tmguru'	: include 'data/guru/tmbguru.php'; break;
            case 'dtlguru'	: include 'data/guru/detilguru.php'; break;
            case 'dtlkelas'	: include 'data/kelas/detilkelas.php'; break;
            case 'tmkelas'	: include 'data/kelas/tmbkelas.php'; break;
            case 'dtlsiswa'	: include 'data/siswa/detilsiswa.php'; break;
            case 'tmsiswa'	: include 'data/siswa/tmbsiswa.php'; break;
            case 'dtlmatpel'	: include 'data/matpel/detilmatpel.php'; break;
            case 'tmmatpel'	: include 'data/matpel/tmbmatpel.php'; break;
            case 'dtljadwal'	: include 'data/jadwal/dtljadwal.php'; break;
            case 'tmjadwal'	: include 'data/jadwal/tmbjadwal.php'; break;
            default : include '404.php';
    }
}else{
    include 'data/guru/guru.php';
}
?>
</div>    
<?php
include "footer.php";
	

