<?php 
  if(isset($_GET['delete'])){
    $query_delete = mysqli_query($koneksi,"DELETE FROM siswa WHERE nis='$_GET[delete]'")or die(mysql_error());
    
    if ($query_delete == TRUE) {
      echo "<script>window.location.href='?halaman=data_siswa_kelas6'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
  }

  if(isset($_GET['naik'])){
      
    $query_detadd = mysqli_query($koneksi,"UPDATE siswa SET kelas = (kelas+1) WHERE nis = '$_GET[naik]'");

    $query_delete1 = mysqli_query($koneksi,"DELETE FROM sikap WHERE nis='$_GET[naik]'")or die(mysql_error());
    $query_delete2 = mysqli_query($koneksi,"DELETE FROM pk WHERE nis='$_GET[naik]'")or die(mysql_error());
    $query_delete3 = mysqli_query($koneksi,"DELETE FROM nilai_ekskul WHERE nis='$_GET[naik]'")or die(mysql_error());  
    $query_delete4 = mysqli_query($koneksi,"DELETE FROM saran WHERE nis='$_GET[naik]'")or die(mysql_error());
    $query_delete5 = mysqli_query($koneksi,"DELETE FROM fisik WHERE nis='$_GET[naik]'")or die(mysql_error());
    $query_delete6 = mysqli_query($koneksi,"DELETE FROM kesehatan WHERE nis='$_GET[naik]'")or die(mysql_error());
    $query_delete7 = mysqli_query($koneksi,"DELETE FROM absen WHERE nis='$_GET[naik]'")or die(mysql_error());
   if ($query_detadd == TRUE  && $query_delete1 == TRUE  && $query_delete2 == TRUE  && $query_delete3 == TRUE  && $query_delete4 == TRUE  && $query_delete5 == TRUE  && $query_delete6 == TRUE  && $query_delete7 == TRUE) {
      echo "<script>window.location.href='?halaman=data_siswa_kelas1'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
  }

  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nisn = $_POST['nisn'];
    $kelas = $_POST['kelas'];
    $nama_siswa = $_POST['nama_siswa'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenkel = $_POST['jenkel'];
    $agama = $_POST['agama'];
    $ayah = $_POST['ayah'];
    $ibu = $_POST['ibu'];
    $alamat = $_POST['alamat'];
    $foto = $_POST['foto'];
     
    $query_edit=mysqli_query($koneksi,"UPDATE siswa SET nis='$_POST[nis]', kelas='$_POST[kelas]' ,nisn='$_POST[nisn]' ,nama_siswa='$_POST[nama_siswa]',tempat_lahir='$_POST[tempat_lahir]', tgl_lahir='$_POST[tgl_lahir]', jenkel='$_POST[jenkel]', agama='$_POST[agama]', ayah='$_POST[ayah]', ibu='$_POST[ibu]' ,alamat='$_POST[alamat]' ,foto='$_POST[foto]'  WHERE nis='$id'");

    if($query_edit==TRUE){
      echo "<script>window.location.href='?halaman=data_siswa_kelas6'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
  }
?>

<section class="content">
  <div class="data">
    <div class="col-md-12" id="edit">   
    </div>


    <div class="col-md-12">
      <div class="box box-primary">
            <div class="box-header">
              <br><br>
              <h3 class="box-title">Data Semua Siswa</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Pilihan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        
                        $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE kelas=6 ORDER BY nama_siswa ASC") or die(mysqli_error());
                        $no=1;
                        while ($data = mysqli_fetch_array($query)) {  
                      ?>  
                      
                        <tr>
                          <td><?php echo $no ;?></td>
                          <td><?php echo $data['nis'];?></td>
                          <td><?php echo $data['nisn'];?></td>
                          <td><?php echo $data['nama_siswa'];?></td>
                          <td><?php echo $data['kelas'];?></td>  
                          <td>
                            <a class="btn btn-primary"  href="halaman/cetak/ganjil.php?val=<?php echo $data['nis']; ?>"><li class="fa fa-print">S1</li></a>
                            <a class="btn btn-primary"  href="halaman/cetak/genap.php?val=<?php echo $data['nis']; ?>"><li class="fa fa-print">S2</li></a>
                            <a class="btn btn-warning" href="?halaman=edit_data_siswa_kelas6&id=<?php echo $data['nis'] ?>"><li class="fa fa-pencil"></li></a>
                            <a class="btn btn-danger " href="?halaman=data_siswa_kelas6&delete=<?php echo $data['nis'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>
                            <a class="btn btn-success" href="?halaman=data_siswa_kelas6&naik=<?php echo $data['nis'] ?>" onclick="return confirm('Data terhapus saat siswa lulus, Yakin?')"> <li class="fa fa-arrow-up"></li> </a>
                          </td>  
                        </tr>
                        <?php $no++;} ?>
                    </tbody>
              </table>
            </div>
      </div>
    </div>
  </div>
</section>  
<script src="bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
      $("#tambah").hide();
      
        $("#click-tambah").click(function(e) {
          e.preventDefault()
            $("#tambah").show();
        });
        $(document).ready(function () {
        $(".click-edit").click(function(e) {
            var m = $(this).attr("id");
            $.ajax({
                url: "halaman/table/siswa_kelas6/edit.php",
                type: "POST",
                data : {id: m,},
                success: function (ajaxData){
                    $("#edit").html(ajaxData);
                }
            });
        });
    });
        $("#hideform").click(function(e) {
          e.preventDefault()
            $("#tambah").hide();
        });
        $("#hideforme").click(function(e) {
          e.preventDefault()
            $("#edit").hide();
        });
    });
</script>

