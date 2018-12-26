<?php 
  if(isset($_GET['delete'])){
    $query_delete = mysqli_query($koneksi,"DELETE FROM login WHERE id_user='$_GET[delete]'")or die(mysql_error());
    
    if ($query_delete == TRUE) {
      echo "<script>window.location.href='?halaman=register'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
  }

  if(isset($_POST['simpan'])){
    
    $nip = $_POST['nip'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level_user = $_POST['level_user'];

     $query_tambah = mysqli_query($koneksi,"INSERT INTO login VALUES(NULL,'$nip','$username','$password','$level_user')");

    if($query_tambah == TRUE){
      echo "<script>window.location.href='?halaman=register'</script>";
    } else{
      echo "<script>alert('gagal')</script>";
    }
  } 

  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $id_user = $_POST['id_user'];
    $nip = $_POST['nip'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level_user= $_POST['level_user'];
     
    $query_edit=mysqli_query($koneksi,"UPDATE login SET id_user='$id_user',nip='nip',username='$username', password='$password',level_user='$level_user'  WHERE id_user='$id'");

    if($query_edit==TRUE){
      echo "<script>window.location.href='?halaman=register'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
    }
?>

<section class="content">
  <div class="data">
    <div class="col-md-8" id="tambah">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="?halaman=register" method="POST">
                  <div class="box-body">
                    
                    
                      <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Guru</label>
                      <div class="col-sm-3">
                       <select class="form-control select2" style="width: 100%;" name="nip" id="nis" required="required">
                        <option value="" readonly>---Select---</option>
                          <?php 
                          $query = mysqli_query($koneksi,"SELECT * FROM guru ") or die(mysqli_error());
                          foreach ($query as $data){  
                          ?>
                        <option  value="<?php echo $data['nip'] ?>"><?php echo $data['nama_guru'] ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Username</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="username" placeholder="Username">
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Level</label>
                      <div class="col-sm-8">
                        
                      <select class="form-control" name="level_user">
                        <option value="admin">Admin</option>
                        <option value="guru">Guru</option>
                        <option value="pdw">Pdw</option>
                      </select>
                      </div>
                    </div>
                    
                    
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default" id="hideform">Batal</button>
                    <button type="submit" class="btn btn-info pull-right" name="simpan">Simpan</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
      </div>
    </div>

    <div class="col-md-8" id="edit">   
    </div>


    <div class="col-md-8">
      <div class="box box-primary">
            <div class="box-header">
              <button class="btn btn-info " id="click-tambah" ><li class="fa fa-plus"></li> Tambah</button>
              <br><br>
              <h3 class="box-title">Data Semua User</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  
                  $query = mysqli_query($koneksi,"SELECT * FROM login ORDER BY username ASC") or die(mysqli_error());
                  $no=1;
                  while ($data = mysqli_fetch_array($query)) {  
                ?>  
                
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><?php echo $data['level_user']; ?></td>
                    <td>
                      <button class="btn btn-warning click-edit" id="<?php echo $data['id_user'] ?>"><li class="fa fa-pencil"></li></button>

                      <a class="btn btn-danger " href="?halaman=register&delete=<?php echo $data['id_user'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>

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
                url: "halaman/register/edit.php",
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

