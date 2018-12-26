<?php
include 'koneksi.php';

$g=$_GET['sender'];
// $level = 'guru';
if($g=='tambah')
{
    $sql="INSERT INTO guru (nip,nama_guru, jenkel,tempat_lahir, tgl_lahir,status,foto)
        VALUES
        ('$_POST[nip]','$_POST[nama_guru]','$_POST[jenkel]','$_POST[tempat_lahir]','$_POST[tgl_lahir]','$_POST[status]','$_POST[foto]')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("akun baru dengan nama :('.$_POST[nama_guru].') Tersimpan")
            window.location.href="index.php?halaman=guru";
            </script>'; 
    }
    else{
        echo "Error : ".$sql.". ".mysqli_error($config);
    }
     //header('location:http://localhost/');
}

else 
    if($g=='edit')
    {
        mysqli_query($config,"UPDATE guru SET nip='$_POST[nip]',nama_guru='$_POST[nama_guru]',jenkel='$_POST[jenkel]',tempat_lahir='$_POST[tempat_lahir]',tgl_lahir='$_POST[tgl_lahir]',status='$_POST[status]',foto='$_POST[foto]' WHERE nip='$_POST[nip]'");
         echo '<script LANGUAGE="JavaScript">
            alert("akun dengan nama :('.$_POST[nama_guru].') Di Update")
            window.location.href="index.php?halaman=guru";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM guru where nip='$_GET[nip]'");
         echo '<script LANGUAGE="JavaScript">
            alert("akun dengan NIP :('.$_GET[nip].') Di Terhapus")
            window.location.href="index.php?halaman=guru";
            </script>';
    }
//End Aksi akun
?>
