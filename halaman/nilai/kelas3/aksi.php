<?php
	
	if (isset($_POST['sikap'])) {
		$nis=$_POST['nis'];
		$kategori = $_POST['kategori'];
		// $nilai=$_POST['nilai'];
		$nilai = implode($_POST['nilai']);
		$smstr=$_POST['smstr'];
		if ($nis != "" && $smstr != "") {
			
			$data = mysqli_query($koneksi, "SELECT * FROM sikap WHERE nis='$nis' AND kategori = '$kategori' AND smstr = '$smstr'");
	    	$cari = mysqli_num_rows($data);
	      	if ($cari==0 ) {
				mysqli_query($koneksi,"INSERT INTO sikap VALUES ('$nis','$kategori','$nilai','$smstr')");	
			}else{
      		$query_edit=mysqli_query($koneksi,"UPDATE sikap SET nilai='$nilai' WHERE nis='$nis' AND kategori = '$kategori' AND smstr='$smstr'");
      		}
		
		echo "<script>window.location.href='?halaman=kelas3'</script>";
		}
	}

	if (isset($_POST['saran'])) {
	$nis=$_POST['nis'];
	$txtsaran = $_POST['txtsaran'];
	$smstr=$_POST['smstr'];
	    if ($nis != "" && $smstr != "") {
			$data = mysqli_query($koneksi, "SELECT * FROM saran WHERE nis='$nis' AND smstr = '$smstr'");
		    $cari = mysqli_num_rows($data);
	      if ($cari==0 ) {
	      	
	    	$query = mysqli_query($koneksi,"INSERT INTO saran VALUES ('$nis','$txtsaran','$smstr')");
	      	
	      }else{
	      	$query_edit=mysqli_query($koneksi,"UPDATE saran SET saran='$txtsaran' WHERE nis='$nis' AND smstr='$smstr'");
	      }
	      echo "<script>window.location.href='?halaman=kelas3'</script>";
	  	}
	}
	if (isset($_POST['ekskul'])) {
	$nis=$_POST['nis'];
	$xul=$_POST['xul'];
	$nilai = $_POST['nilai'];
	$smstr=$_POST['smstr'];
		if ($nis != "" && $smstr != "") {
			$data = mysqli_query($koneksi, "SELECT * FROM nilai_ekskul WHERE nis='$nis' AND xul = '$xul' AND smstr = '$smstr'");
		    $cari = mysqli_num_rows($data);
		      if ($cari==0 ) {
		      	
		    	$query = mysqli_query($koneksi,"INSERT INTO nilai_ekskul VALUES ('$nis','$xul','$nilai','$smstr')");
		      	
		      }else{
		      	$query_edit=mysqli_query($koneksi,"UPDATE nilai_ekskul SET nilai='$nilai' WHERE nis='$nis' AND xul = '$xul' AND smstr='$smstr'");
		      }
		      echo "<script>window.location.href='?halaman=kelas3'</script>";
		}
	}
	if (isset($_POST['fisik'])) {
	$nis=$_POST['nis'];
	$smstr=$_POST['smstr'];
	$tinggi=$_POST['tinggi'];
	$berat = $_POST['berat'];
		if ($nis != "" && $smstr != "") {
			$data = mysqli_query($koneksi, "SELECT * FROM fisik WHERE nis='$nis' AND smstr = '$smstr'");
		    $cari = mysqli_num_rows($data);
		      if ($cari==0 ) {
		      	
		    	$query = mysqli_query($koneksi,"INSERT INTO fisik VALUES ('$nis','$smstr','$tinggi','$berat')");
		      	
		      }else{
		      	$query_edit=mysqli_query($koneksi,"UPDATE fisik SET tinggi='$tinggi', berat='$berat' WHERE nis='$nis'  AND smstr='$smstr'");
		      }
		      echo "<script>window.location.href='?halaman=kelas3'</script>";
		}
	}
	if (isset($_POST['kesehatan'])) {
	$nis=$_POST['nis'];
	$smstr=$_POST['smstr'];
	$penglihatan=$_POST['penglihatan'];
	$pendengaran = $_POST['pendengaran'];
	$gigi = $_POST['gigi'];
		if ($nis != "" && $smstr != "" ) {
			$data = mysqli_query($koneksi, "SELECT * FROM kesehatan WHERE nis='$nis' AND smstr = '$smstr'");
		    $cari = mysqli_num_rows($data);
		      if ($cari==0 ) {
		      	
		    	$query = mysqli_query($koneksi,"INSERT INTO kesehatan VALUES ('$nis','$smstr','$penglihatan','$pendengaran','$gigi')");
		      	
		      }else{
		      	$query_edit=mysqli_query($koneksi,"UPDATE kesehatan SET penglihatan='$penglihatan', pendengaran='$pendengaran', gigi='$gigi' WHERE nis='$nis'  AND smstr='$smstr'");
		      }
		      echo "<script>window.location.href='?halaman=kelas3'</script>";
		}
	}

	if (isset($_POST['prestasi'])) {
	$nis=$_POST['nis'];
	$prestasii=$_POST['prestasii'];
	$detail = $_POST['detail'];
	 	if ($nis != "") {
    		$query = mysqli_query($koneksi,"INSERT INTO prestasi VALUES ('$nis','$prestasii','$detail')");
    		echo "<script>window.location.href='?halaman=kelas3'</script>";
    	}
	}

	if (isset($_POST['pk'])) {
	$nis=$_POST['nis'];
	$smstr=$_POST['smstr'];
	$kd=$_POST['kd'];
	$nilai = $_POST['nilai'];
	$kode_kelas = $_POST['kode_kelas'];
	$kode_kategori = $_POST['kode_kategori'];
	$kode_mapel = $_POST['kode_mapel'];
	 	if ($nis != "" && $smstr != "") {	
	 		$data = mysqli_query($koneksi, "SELECT * FROM pk WHERE nis='$nis' AND smstr = '$smstr' AND kode_kelas= '$kode_kelas' AND kode_mapel= '$kode_mapel' AND kode_kategori='$kode_kategori' ");
	    	$cari = mysqli_num_rows($data);
	      	if ($cari==0 ) {
				mysqli_query($koneksi,"INSERT INTO pk VALUES ('$nis','$smstr','$kd','$nilai','$kode_kategori','$kode_kelas','$kode_mapel')");	
			}else{
	  		$query_edit=mysqli_query($koneksi,"UPDATE pk SET nilai=((nilai + '$nilai') / 2 ) WHERE nis='$nis' AND smstr = '$smstr' AND kode_kelas= '$kode_kelas' AND kode_mapel= '$kode_mapel' AND kode_kategori='$kode_kategori'");
	  		}
		
			echo "<script>window.location.href='?halaman=kelas3'</script>";
		}
	}

	if (isset($_POST['absen'])) {
	$nis=$_POST['nis'];
	$smstr=$_POST['smstr'];
	$sakit=$_POST['sakit'];
	$ijin = $_POST['ijin'];
	$alpa = $_POST['alpa'];
		if ($nis != "" && $smstr != "") {
			$data = mysqli_query($koneksi, "SELECT * FROM absen WHERE nis='$nis' AND smstr = '$smstr'");
		    $cari = mysqli_num_rows($data);
		      if ($cari==0 ) {
		      	
		    	$query = mysqli_query($koneksi,"INSERT INTO absen VALUES ('$nis','$smstr','$sakit','$ijin','$alpa')");
		      	
		      }else{
		      	$query_edit=mysqli_query($koneksi,"UPDATE absen SET sakit=(sakit + '$sakit'), ijin = (ijin + '$ijin'), alpa = (alpa + '$alpa') WHERE nis='$nis'  AND smstr='$smstr'");
		      }
		      echo "<script>window.location.href='?halaman=kelas3'</script>";
	  	}
	}
?>
