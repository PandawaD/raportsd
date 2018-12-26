<?php 
  include 'config/koneksi.php';

    session_start();
    if($_SESSION['status']!="login"){
        header("location:halaman/login/login.php");
    }
?>
<!doctype html>
<html>
    <head>
        <?php include 'include/head.php'; ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <?php 
            include 'include/header.php'; 
            include 'include/sidebar.php'; 
            ?>
            <div class="content-wrapper">
                <div class="row">
                    <?php 
                        if(isset($_GET['halaman'])){
                            
                        if($_GET['halaman']=='siswa') {
                            include 'halaman/form/siswa/siswa.php';
                        }else if($_GET['halaman']=='edit_data_siswa') {
                            include 'halaman/form/siswa/edit.php';
                        }else if($_GET['halaman']=='guru') {
                            include 'halaman/form/guru/guru.php';
                        }else if($_GET['halaman']=='register') {
                            include 'halaman/register/register.php';
                        }else if($_GET['halaman']=='mapel') {
                            include 'halaman/form/mapel/mapel.php';
                        }else if($_GET['halaman']=='kelas') {
                            include 'halaman/form/kelas/kelas.php';
                        }else if($_GET['halaman']=='kategori') {
                            include 'halaman/form/kategori/kategori.php';
                        }else if($_GET['halaman']=='kopetensi') {
                            include 'halaman/form/kd/kd.php';
                        }else if($_GET['halaman']=='nilai') {
                            include 'halaman/form/nilai/nilai.php';
                        }else if($_GET['halaman']=='aksi') {
                            include 'halaman/form/nilai/aksi.php';

                        }else if($_GET['halaman']=='aksi1') {
                            include 'halaman/nilai/kelas1/aksi.php';
                        }else if($_GET['halaman']=='aksi2') {
                            include 'halaman/nilai/kelas2/aksi.php';
                        }else if($_GET['halaman']=='aksi3') {
                            include 'halaman/nilai/kelas3/aksi.php';
                        }else if($_GET['halaman']=='aksi4') {
                            include 'halaman/nilai/kelas4/aksi.php';
                        }else if($_GET['halaman']=='aksi5') {
                            include 'halaman/nilai/kelas5/aksi.php';
                        }else if($_GET['halaman']=='aksi6') {
                            include 'halaman/nilai/kelas6/aksi.php';
                        }else if($_GET['halaman']=='kelas1') {
                            include 'halaman/nilai/kelas1/kelas1.php';
                        }else if($_GET['halaman']=='kelas2') {
                            include 'halaman/nilai/kelas2/kelas2.php';
                        }else if($_GET['halaman']=='kelas3') {
                            include 'halaman/nilai/kelas3/kelas3.php';
                        }else if($_GET['halaman']=='kelas4') {
                            include 'halaman/nilai/kelas4/kelas4.php';
                        }else if($_GET['halaman']=='kelas5') {
                            include 'halaman/nilai/kelas5/kelas5.php';
                        }else if($_GET['halaman']=='kelas6') {
                            include 'halaman/nilai/kelas6/kelas6.php';
                        }else if($_GET['halaman']=='data_guru') {
                            include 'halaman/table/data_guru.php';
                        }else if($_GET['halaman']=='data_siswa') {
                            include 'halaman/table/data_siswa.php';
                        }else if($_GET['halaman']=='data_siswa_kelas1') {
                            include 'halaman/table/siswa_kelas1/data_siswa_kelas1.php';
                        }else if($_GET['halaman']=='data_siswa_kelas2') {
                            include 'halaman/table/siswa_kelas2/data_siswa_kelas2.php';
                        }else if($_GET['halaman']=='data_siswa_kelas3') {
                            include 'halaman/table/siswa_kelas3/data_siswa_kelas3.php';
                        }else if($_GET['halaman']=='data_siswa_kelas4') {
                            include 'halaman/table/siswa_kelas4/data_siswa_kelas4.php';
                        }else if($_GET['halaman']=='data_siswa_kelas5') {
                            include 'halaman/table/siswa_kelas5/data_siswa_kelas5.php';
                        }else if($_GET['halaman']=='data_siswa_kelas6') {
                            include 'halaman/table/siswa_kelas6/data_siswa_kelas6.php';
                        }else if($_GET['halaman']=='subtema') {
                            include 'halaman/form/subtema/subtema.php';
                        }else if($_GET['halaman']=='deskripsi') {
                            include 'halaman/form/deskripsi/deskripsi.php';
                        }else if($_GET['halaman']=='edit_data_siswa_kelas1') {
                            include 'halaman/table/siswa_kelas1/edit.php';
                        }else if($_GET['halaman']=='edit_data_siswa_kelas2') {
                            include 'halaman/table/siswa_kelas2/edit.php';
                        }else if($_GET['halaman']=='edit_data_siswa_kelas3') {
                            include 'halaman/table/siswa_kelas3/edit.php';
                        }else if($_GET['halaman']=='edit_data_siswa_kelas4') {
                            include 'halaman/table/siswa_kelas4/edit.php';
                        }else if($_GET['halaman']=='edit_data_siswa_kelas5') {
                            include 'halaman/table/siswa_kelas5/edit.php';
                        }else if($_GET['halaman']=='edit_data_siswa_kelas6') {
                            include 'halaman/table/siswa_kelas6/edit.php';
                        }
                    }
                    ?>
                
                </div>
            </div>
            <?php   
                include 'include/footer.php';
            ?>
            <div class="control-sidebar-bg"></div>
        </div>

            <?php  
                include 'include/script.php';
            ?>
    </body>
</html>
