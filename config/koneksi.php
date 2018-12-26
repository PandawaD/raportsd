<?php 

$koneksi = mysqli_connect("localhost","root","","pd_raport");
	
	if ($koneksi == false) {
		echo "Koneksi Anda gagal karena ".mysqli_connect_error();
	}
	else{
		 //echo "Haloo Berhasilll";
	}


?>
