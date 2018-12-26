<?php 
  if(isset($_GET['delete'])){
    $query_delete = mysqli_query($koneksi,"DELETE FROM deskripsi WHERE idd ='$_GET[delete]'")or die(mysql_error());
    
    if ($query_delete == TRUE) {
      echo "<script>window.location.href='?halaman=deskripsi'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    } 
  }

  if(isset($_POST['simpan'])){
     
    
    $kode_mapel = $_POST['kode_mapel'];
    $kode_kelas = $_POST['kode_kelas'];
    $kode_kategori = $_POST['kode_kategori'];
    $kat1 = $_POST['kat1'];
    $kat2 = $_POST['kat2'];
    $kat3 = $_POST['kat3'];
    $kat4 = $_POST['kat4'];

    $query_tambah = mysqli_query($koneksi,"INSERT INTO deskripsi VALUES(NULL,'$kode_mapel','$kode_kelas','$kode_kategori','$kat1','$kat2','$kat3','$kat4')");
     
    if($query_tambah == TRUE){
     echo "<script>window.location.href='?halaman=deskripsi'</script>";
    } else{
      echo "<script>alert('gagal')</script>";
    }
  } 

  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $kode_mapel = $_POST['kode_mapel'];
    $kode_kelas = $_POST['kode_kelas'];
    $kode_kategori = $_POST['kode_kategori'];
    $kat1 = $_POST['kat1'];
    $kat2 = $_POST['kat2'];
    $kat3 = $_POST['kat3'];
    $kat4 = $_POST['kat4'];
     
    $query_edit=mysqli_query($koneksi,"UPDATE deskripsi SET kode_mapel='$kode_mapel', kode_kelas='$kode_kelas', kode_kategori='$kode_kategori', kat1='$kat1', kat2='$kat2', kat3='$kat3', kat4='$kat4'  WHERE idd='$id'");

    if($query_edit==TRUE){
      echo "<script>window.location.href='?halaman=deskripsi'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
    }
?>
<section class="content">
  <div class="data">
      <div class="col-md-15 col-sm-offset-1" id="tambah">
      <div class="box box-info">
                <div class="box-header with-border">
                <h3 class="box-title">Kelola Data Deskripsi</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="?halaman=deskripsi" method="post"class="form-horizontal">
                  <div class="box-body">
                    
                   
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
                      <label  class="col-sm-2 control-label">Deskripsi 1</label>
                      <div class="col-sm-8">
                        <textarea name="kat1" class="form-control"></textarea>
                      </div>
                    </div>  
						
						        <div class="form-group">
                      <label  class="col-sm-2 control-label">Deskripsi 2</label>
                      <div class="col-sm-8">
                        <textarea name="kat2" class="form-control"></textarea>
                      </div>
                    </div>  
					
					          <div class="form-group">
                      <label  class="col-sm-2 control-label">Deskripsi 3</label>
                      <div class="col-sm-8">
                        <textarea name="kat3" class="form-control"></textarea>
                      </div>
                    </div>  
					
					          <div class="form-group">
                      <label  class="col-sm-2 control-label">Deskripsi 4</label>
                      <div class="col-sm-8">
                        <textarea name="kat4" class="form-control"></textarea>
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
    <div  <div class="col-md-10 col-sm-offset-1" id="edit">   
    </div>


      <div class="col-md-10 col-sm-offset-1">
      <div class="box">
            <div class="box-header">
             <button class="btn btn-info " id="click-tambah" ><li class="fa fa-plus"></li> Tambah</button> 
              <br><br>
            <h3 class="box-title">Data Deskripsi</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                 
                  <th>Kelas</th>
                  <th>Mata Pelajaran</th>
                  <th>KD</th>
                  <th>Kategori 1</th>
        				  <th>Kategori 2</th>
        				  <th>Kategori 3</th>
        				  <th>Kategori 4</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM deskripsi JOIN kelas ON deskripsi.kode_kelas=kelas.kode_kelas JOIN mapel ON deskripsi.kode_mapel=mapel.kode_mapel JOIN kategori ON deskripsi.kode_kategori = kategori.kode_kategori") or die(mysqli_error());
                  $no=1;
                  while ($data = mysqli_fetch_array($query)) {  
                ?> 
                <tr>
                    
                    <td><?php echo $data['nama_kelas'] ?></td>    
                    <td ><?php echo $data['nama_mapel'] ?></td>
                    <td ><?php echo $data['nama_kategori'] ?></td>
                    <td ><?php echo $data['kat1'] ?></td> 
          					<td ><?php echo $data['kat2'] ?></td> 
          					<td ><?php echo $data['kat3'] ?></td> 
          					<td ><?php echo $data['kat4'] ?></td> 
                    <td>

                      <button class="btn btn-warning click-edit" id="<?php echo $data['idd'] ?>"><li class="fa fa-pencil"></li></button>

                      <a class="btn btn-danger " href="?halaman=deskripsi&delete=<?php echo $data['idd'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>

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
                url: "halaman/form/deskripsi/edit.php",
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
