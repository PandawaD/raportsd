<?php 
  if(isset($_GET['delete'])){
    $query_delete = mysqli_query($koneksi,"DELETE FROM subtema WHERE kode_subtema='$_GET[delete]'")or die(mysql_error());
    
    if ($query_delete == TRUE) {
      echo "<script>window.location.href='?halaman=subtema'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
  }

  if(isset($_POST['simpan'])){
    $subtema = $_POST['subtema'];

     $query_tambah = mysqli_query($koneksi,"INSERT INTO subtema VALUES(NULL,'$subtema')");

    if($query_tambah == TRUE){
     echo "<script>window.location.href='?halaman=subtema'</script>";
    } else{
      echo "<script>alert('gagal')</script>";
    }
  } 

  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $subtema = $_POST['subtema'];
     
    $query_edit=mysqli_query($koneksi,"UPDATE subtema SET subtema='$_POST[subtema]' WHERE kode_subtema='$id'");

    if($query_edit==TRUE){
      echo "<script>window.location.href='?halaman=subtema'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
    }
?>
 
<section class="content">
  <div class="data">

    <div class="col-md-10" id="tambah">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Subtema</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="?halaman=subtema" method="POST">
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Subtema</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name=subtema placeholder="subtema">
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
    <div class="col-md-10" id="edit">   
    </div>

    <div class="col-md-10">
      <div class="box box-primary">
            <div class="box-header">
              <button class="btn btn-info " id="click-tambah" ><li class="fa fa-plus"></li> Tambah</button>
              <br><br>
              <h3 class="box-title">Data Semua Subtema</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>No</th>
            						<th>Subtema</th>
                        <th>Pilihan</th>
            					</tr>
                    </thead>
                    <tbody>
                      <?php                  
                        $query = mysqli_query($koneksi,"SELECT * FROM subtema ORDER BY kode_subtema ASC") or die(mysqli_error());
                        $no=1;
                        while ($data = mysqli_fetch_array($query)) {  
                      ?>
                      
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $data['subtema']; ?></td>
      				            <td>
                            <a class="btn btn-warning" href="?halaman=edit_data_subtema&id=<?php echo $data['kode_subtema'] ?>"><li class="fa fa-pencil"></li></a>
                          </td>
                          <td>
                            <a class="btn btn-danger " href="?halaman=subtema&delete=<?php echo $data['kode_subtema'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>
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
                url: "halaman/form/subtema/edit.php",
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

