<html>
<head>
  <title>
    KD
  </title>
</head>
<?php 
  if(isset($_GET['delete'])){
    $query_delete = mysqli_query($koneksi,"DELETE FROM kopetensi WHERE kd ='$_GET[delete]'")or die(mysql_error());
    
    if ($query_delete == TRUE) {
      echo "<script>window.location.href='?halaman=kopetensi'</script>";
    }else{
      echo "gagal";
    } 
  }

  if(isset($_POST['simpan'])){
    $kd = $_POST['kd'];  
    $kode_kategori = $_POST['kode_kategori'];
    $kode_mapel = $_POST['kode_mapel'];
    $kode_kelas = $_POST['kode_kelas'];
    $kode_subtema = $_POST['kode_subtema'];
    $deskripsi = $_POST['deskripsi'];

    $query_tambah = mysqli_query($koneksi,"INSERT INTO kopetensi VALUES('$kd','$kode_kategori','$kode_kelas','$kode_mapel','$kode_subtema','$deskripsi')");
     
    if($query_tambah == TRUE){
     echo "<script>window.location.href='?halaman=kopetensi'</script>";
    } else{
      echo "gagal";
    }
  } 

  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $kd = $_POST['kd'];
    $kode_kategori = $_POST['kode_kategori'];
    $kode_mapel = $_POST['kode_mapel'];
    $kode_kelas = $_POST['kode_kelas'];
     
    $query_edit=mysqli_query($koneksi,"UPDATE kopetensi SET kd='$kd',kode_kategori='$kode_kategori', kode_mapel='$kode_mapel', kode_kelas='$kode_kelas'  WHERE kd='$id'");

    if($query_edit==TRUE){
      
    }else{
      echo "gagal";
    }
    }
?>

 
<section class="content">
  <div class="data">
      <div class="col-md-11 col-sm-offset-1" id="tambah">
        <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title">Kelola Data Kompetensi Dasar</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="?halaman=kopetensi" method="post"class="form-horizontal">
                  <div class="box-body">
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">KD</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="kd" name="kd" placeholder="kompetensi dasar">
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Kategori</label>
                      <div class="col-sm-8">   
                       <select class="form-control select2" name="kode_kategori" style="width: 100%;">
                         <option value="" >-Pilih Kategori-</option>
                        <?php 
                      
                          $query = mysqli_query($koneksi,"SELECT * FROM kategori") or die(mysqli_error());
                          while ($data = mysqli_fetch_array($query)) {  
                        ?>
                        <option value="<?php echo $data['kode_kategori'] ?>"><?php echo $data['nama_kategori'] ?></option>
                        <?php } ?>    
                          
                          </select>
                      </div>
                      </div>
                   
                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Mapel</label>
                        <div class="col-sm-8">
                         <select class="form-control select2" name="kode_mapel" style="width: 100%;">
                          <option value="" >-Pilih Mapel-</option>
                          <?php 
                          $query = mysqli_query($koneksi,"SELECT * FROM mapel") or die(mysqli_error());
                            while ($data = mysqli_fetch_array($query)) {  
                          ?>
                          <option value="<?php echo $data['kode_mapel'] ?>"><?php echo $data['nama_mapel'] ?></option>
                          <?php } ?>    
                           
                          </select>
                        </div>
                      </div>  

                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Kelas / Semester</label>
                        <div class="col-sm-8">
                         <select class="form-control select2" name="kode_kelas" style="width: 100%;">
                          <option value="" >-Pilih Kelas/Semester-</option>
                          <?php 
                          $query = mysqli_query($koneksi,"SELECT * FROM kelas") or die(mysqli_error());
                            while ($data = mysqli_fetch_array($query)) {  
                          ?>
                          <option value="<?php echo $data['kode_kelas'] ?>"><?php echo $data['nama_kelas'] ?></option>
                          <?php } ?>    
                           
                          </select>
                        </div>
                      </div>                                    

                      <div class="form-group">
                        <label  class="col-sm-2 control-label">Subtema</label>
                        <div class="col-sm-8">
                         <select class="form-control select2" name="kode_subtema" style="width: 100%;">
                          <option value="" >-Subtema-</option>
                          <?php 
                          $query = mysqli_query($koneksi,"SELECT * FROM subtema") or die(mysqli_error());
                            while ($data = mysqli_fetch_array($query)) {  
                          ?>
                          <option value="<?php echo $data['kode_subtema'] ?>"><?php echo $data['subtema'] ?></option>
                          <?php } ?>    
                           
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                      <label  class="col-sm-2 control-label">Deskripsi</label>
                      <div class="col-sm-8">
                        <textarea name="deskripsi" class="form-control"></textarea>
                      </div>
                    </div>                                     
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default" id="hideform">Batal</button>
                    <button type="submit" class="btn btn-info pull-right" name="simpan">Simpan
                    </button>
                  </div>
                  <!-- /.box-footer -->
                </form>
        </div>
      </div>
      <div class="col-md-11 col-sm-offset-1" id="edit">   
      </div>


      <div class="col-md-10 col-sm-offset-1">
        <div class="box">
            <div class="box-header">
             <button class="btn btn-info " id="click-tambah" ><li class="fa fa-plus"></li> Tambah</button> 
              <br><br>
            <h3 class="box-title">Data Kompetensi Dasar</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Kompetensi Dasar</th>
                  <th>Kelas</th>
                  <th>Mata Pelajaran</th>
                  <th>Nama Kategori</th>
                  <th>Subtema</th>
                  <th>Deskripsi</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM kopetensi JOIN mapel ON kopetensi.kode_mapel =mapel.kode_mapel JOIN kategori ON kopetensi.kode_kategori=kategori.kode_kategori JOIN kelas ON kopetensi.kode_kelas=kelas.kode_kelas JOIN subtema ON kopetensi.kode_subtema=subtema.kode_subtema") or die(mysqli_error());
                  $no=1;
                  while ($data = mysqli_fetch_array($query)) {  
                ?> 
                <tr>
                    <td><?php echo $data['kd']; ?></td>
                    <td><?php echo $data['nama_kelas'] ?></td>    
                    <td ><?php echo $data['nama_mapel'] ?></td>
                    <td ><?php echo $data['nama_kategori'] ?></td> 
                    <td ><?php echo $data['subtema'] ?></td> 
                    <td ><?php echo $data['deskripsi'] ?></td> 
                    <td>

                      <button class="btn btn-warning click-edit" id="<?php echo $data['kd'] ?>"><li class="fa fa-pencil"></li></button>
                      <a class="btn btn-danger " href="?halaman=kopetensi&delete=<?php echo $data['kd'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>
                    </td>
                    
               </tr>
        
                
                 <?php  }  ?>
                </tbody> 
              
              </table>
            </div>
            <!-- /.box-body -->
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
                url: "halaman/form/kd/edit.php",
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


</script>

</html>
