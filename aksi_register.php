<?php
include 'koneksi.php';

$g=$_GET['sender'];
$level = 'guru';
if($g=='tambah')
{
    $sql="INSERT INTO akun (nip,username, password,level_user)
        VALUES
        ('$_POST[nip]','$_POST[username]','$_POST[password]','$level')";   
        if (mysqli_query($config, $sql)){ 
        echo '<script LANGUAGE="JavaScript">
            alert("akun baru dengan nama :('.$_POST[username].') Tersimpan")
            window.location.href="index.php?halaman=register";
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
        mysqli_query($config,"UPDATE akun SET id='$_POST[id]',nip='$_POST[nip]',username='$_POST[username]',password='$_POST[password]' WHERE id='$_POST[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("akun dengan nama :('.$_POST[username].') Di Update")
            window.location.href="index.php?halaman=register";
            </script>';
    } 
else 
    if($g=='hapus')
    {
        mysqli_query($config,"DELETE FROM akun where id='$_GET[id]'");
         echo '<script LANGUAGE="JavaScript">
            alert("akun dengan Id :('.$_GET[id].') Di Terhapus")
            window.location.href="index.php?halaman=register";
            </script>';
    }
//End Aksi akun
?>
