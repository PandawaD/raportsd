<?php
session_start();
require 'koneksi.php';
if ( isset($_POST['username']) && isset($_POST['password']) ) {

    $sql_check = "SELECT nip,
                         level_user,
                         id
                  FROM akun
                  WHERE
                       username=?
                       AND
                       password=?
                  LIMIT 1";
    $check_log = $config->prepare($sql_check);
    $check_log->bind_param('ss', $username, $password);
	
    $username = $_POST['username'];
    $password = $_POST['password'];
	
    $check_log->execute();
    $check_log->store_result();
    if ( $check_log->num_rows == 1 ) {
        $check_log->bind_result($nip, $level_user, $id);
        while ( $check_log->fetch() ) {
            $_SESSION['user_login'] = $level_user;
            $_SESSION['sess_id']    = $id;
            $_SESSION['nip']      	= $nip;

        }
        $check_log->close();
		
        header('location:index.php');
        exit();
    } else {
        header('location: halaman/login/login.php?error='.base64_encode('Username dan Password Invalid!!!'));
        exit();
    }

} else {
    header('location:halaman/login/login.php');
    exit();
}
