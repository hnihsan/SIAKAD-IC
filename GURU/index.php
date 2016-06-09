<?php
include 'header.php';
?>
<div id='main'>
<?php
//cek session, kalo ga ada, lempar ke login.   
if(isset($_GET['hal'])){
    switch($_GET['hal']){
            case 'home'     : include 'home.php'; break;
            case 'semuakls'     : include 'semuakls.php'; break;
            case 'walikls'     : include 'walikls.php'; break;

            case 'detilkls' 	: include 'detilkelas/detilkelas.php'; break;           

            default : include '404.php';
    }
}else{
    include 'home.php';
}
?>
</div>    
<?php
include "footer.php";
	

