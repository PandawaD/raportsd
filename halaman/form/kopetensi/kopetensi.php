<?php 
  if(isset($_GET['delete'])){
    $query_delete = mysqli_query($koneksi,"DELETE FROM mapel WHERE kode_mapel='$_GET[delete]'")or die(mysql_error());
    
    if ($query_delete == TRUE) {
      echo "<script>window.location.href='?halaman=kompetensi_kd'</script>";
    }else{
      echo "gagal";
    }
  }

  if(isset($_POST['simpan'])){
    $nama_mapel = $_POST['nama_mapel'];

     $query_tambah = mysqli_query($koneksi,"INSERT INTO mapel VALUES(NULL,'$nama_mapel')");

    if($query_tambah == TRUE){
     echo "<script>window.location.href='?halaman=kompetensi_kd'</script>";
    } else{
      echo "gagal";
    }
  } 

  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama_mapel = $_POST['nama_mapel'];
     
    $query_edit=mysqli_query($koneksi,"UPDATE mapel SET nama_mapel='$_POST[nama_mapel]' WHERE kode_mapel='$id'");

    if($query_edit==TRUE){
      echo "<script>window.location.href='?halaman=kompetensi_kd'</script>";
    }else{
      echo "gagal";
    }
    }
?>
 
<section class="content">
  <div class="data">

    <div class="col-md-10" id="tambah">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Data Mata Pelajaran</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="?halaman=mapel" method="POST">
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Mata Pelajaran</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name=nama_mapel placeholder="nama_mapel">
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
              <h3 class="box-title">Data Semua Mapel</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
                        <th>No</th>
            						<th>Nama Mata Pelajaran</th>
                        <th>Pilihan</th>
            					</tr>
                    </thead>
                    <tbody>
                      <?php                  
                        $query = mysqli_query($koneksi,"SELECT * FROM mapel ORDER BY kode_mapel ASC") or die(mysqli_error());
                        $no=1;
                        while ($data = mysqli_fetch_array($query)) {  
                      ?>
                      
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $data['nama_mapel']; ?></td>
      				            <td>
                            <button class="btn btn-warning click-edit" id="<?php echo $data['kode_mapel'] ?>"><li class="fa fa-pencil"></li></button>
      					          
                            <a class="btn btn-danger " href="?halaman=mapel&delete=<?php echo $data['kode_mapel'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>
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
                url: "halaman/form/mapel/edit.php",
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

