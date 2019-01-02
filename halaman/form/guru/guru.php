<?php 
  if(isset($_GET['delete'])){
    $query_delete = mysqli_query($koneksi,"DELETE FROM guru WHERE nip='$_GET[delete]'")or die(mysql_error());
    
    if ($query_delete == TRUE) {
      echo "<script>window.location.href='?halaman=guru'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
  }

  if(isset($_POST['simpan'])){
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $jenkel = $_POST['jenkel'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $status = $_POST['status'];
    $foto = $_POST['foto'];
            

    $query = mysqli_query($koneksi, "INSERT INTO guru VALUES ('$nip','$nama_guru','$jenkel','$tempat_lahir','$tgl_lahir','$status')");


    if($query_tambah == TRUE){
      echo "<script>window.location.href='?halaman=guru'</script>";
    } else{
      echo "<script>alert('gagal')</script>";
    }
  
  } 

  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $jenkel = $_POST['jenkel'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $status = $_POST['status'];
    
    
     
    $query_edit=mysqli_query($koneksi,"UPDATE guru SET nip='$nip',nama_guru='$nama_guru',jenkel='$jenkel', tempat_lahir='$tempat_lahir',tgl_lahir='$tgl_lahir',status='$status'  WHERE nip='$id'");

    if($query_edit==TRUE){
      // echo "<script>window.location.href='?halaman=guru'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
  }

?>

<section class="content">
  <div class="data">
    <div class="col-md-13" id="tambah">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Guru</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="?halaman=guru" method="POST" enctype="multipart/form-data">
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">NIP</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="nip" placeholder="Nomor Induk Pegawai">
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Guru</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="nama_guru" placeholder="Nama Guru">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        
                      <select class="form-control" name="jenkel">
                        <option value="pria"> Laki- Laki </option>
                        <option value="wanita"> Perempuan </option>
                      </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Tempat Lahir</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="tempat_lahir" placeholder="Tempat Lahir">
                      </div>
                    </div>
                   <div class="form-group">
                      <label  class="col-sm-2 control-label">Tanggal Lahir</label>
                      <div class="col-sm-8">
                           <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="tgl_lahir" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                          </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label">Status</label>
                      <div class="col-sm-8">
                        
                      <select class="form-control" name="status">
                        <option value="PNS"> Pegawai Negeri Sipil </option>
                        <option value="GTT"> Guru Tidak Tetap </option>
                        <option value="GBT"> Guru Belum Tetap </option>
                        <option value="GWB"> Guru Widya Bhakti </option>
                      </select>
                      </div>
                    </div>
                    
                    

                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-default" id="hideform">Batal</button>
                    <input type="submit" class="btn btn-primary pull-right" name="simpan" value="simpan">
                  </div>
                  <!-- /.box-footer -->
                </form>
      </div>
    </div>


    <div class="col-md-13" id="edit">   
    </div>


    <div class="col-md-13">
      <div class="box box-primary">
            <div class="box-header">
              <button class="btn btn-info " id="click-tambah" ><li class="fa fa-plus"></li> Tambah</button>
              <br><br>
              <h3 class="box-title">Data Semua Guru</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Status</th>
                    <th>Foto</th>
                    <th>Pilihan</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  
                  $query = mysqli_query($koneksi,"SELECT * FROM guru ORDER BY nama_guru ASC") or die(mysqli_error());
                  $no=1;
                  while ($data = mysqli_fetch_array($query)) {  
                ?>  
                
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['nama_guru']; ?></td>
                    <td><?php echo $data['jenkel']; ?></td>
                    <td><?php echo $data['tempat_lahir']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['foto']; ?></td>
                    <td>
                      <button class="btn btn-warning click-edit" id="<?php echo $data['nip'] ?>"><li class="fa fa-pencil"></li></button>

                      <a class="btn btn-danger " href="?halaman=guru&delete=<?php echo $data['nip'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>
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
                url: "halaman/form/guru/edit.php",
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

