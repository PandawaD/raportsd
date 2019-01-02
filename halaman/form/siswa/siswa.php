<?php 
  if(isset($_GET['delete'])){
    $query_delete = mysqli_query($koneksi,"DELETE FROM siswa WHERE nis='$_GET[delete]'")or die(mysql_error());
    
    if ($query_delete == TRUE) {
      echo "<script>window.location.href='?halaman=siswa'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
  }

  if(isset($_POST['simpan'])){
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

     $query_tambah = mysqli_query($koneksi,"INSERT INTO siswa VALUES('$nis','$kelas','$nisn','$nama_siswa','$tempat_lahir','$tgl_lahir','$jenkel','$agama','$ayah','$ibu','$alamat','$foto')");

    if($query_tambah == TRUE){
     
    } else{
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
      echo "<script>window.location.href='?halaman=siswa'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
    }
?>

<section class="content">
  <div class="data">
    <div class="col-md-12" id="tambah">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Data Siswa</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="?halaman=siswa" method="POST">
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">NIS</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="nis" placeholder="Nomor Induk Siswa">
                      </div>
                    </div>

    				        <div class="form-group">
                      <label  class="col-sm-2 control-label">NISN</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="nisn" placeholder="Nomor Induk Siswa Nasional">
                      </div>
                    </div>

                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Siswa</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="nama_siswa" placeholder="Nama Siswa">
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
                      <label  class="col-sm-2 control-label">Kelas</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="kelas" placeholder="Kelas">
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
                      <label  class="col-sm-2 control-label">Agama</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="agama" placeholder="Agama">
                      </div>
                    </div>
    				        <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Ayah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="ayah" placeholder="Nama Ayah">
                      </div>
                    </div>

    				        <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Ibu</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="ibu" placeholder="Nama Ibu">
                      </div>
                    </div>

    				        <div class="form-group">
                      <label  class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control"  name="alamat" placeholder="Alamat">
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Foto</label>
                      <div class="col-sm-8">
                        <input type="file" name="foto">
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

    <div class="col-md-12" id="edit">   
    </div>


    <div class="col-md-12">
      <div class="box box-primary">
            <div class="box-header">
              <button class="btn btn-info " id="click-tambah" ><li class="fa fa-plus"></li> Tambah</button>
              <br><br>
              <h3 class="box-title">Data Semua Siswa</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr> 
            						<th>Pilihan</th>
            						<th>Pilihan</th>
                        <th>No</th>
            						<th>Foto</th>
                        <th>NIS</th>
            						<th>NISN</th>
                        <th>Nama Siswa</th>
            						<th>Kelas</th>
                        <th>Tempat Lahir</th>
            						<th>Tanggal Lahir</th>
            						<th>Jenis Kelamin</th>
            						<th>Agama</th>
            						<th>Nama Ayah</th>
            						<th>Nama Ibu</th>
            						<th>Alamat</th>
            					</tr>
                    </thead>
                    <tbody>
                      <?php 
                        
                        $query = mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY nama_siswa ASC") or die(mysqli_error());
                        $no=1;
                        while ($data = mysqli_fetch_array($query)) {  
                      ?>  
                      
                        <tr>
      				            <td>
                            <a class="btn btn-warning" href="?halaman=edit_data_siswa&id=<?php echo $data['nis'] ?>"><li class="fa fa-pencil"></li></a>
      					          </td>
      				            <td>
                            <a class="btn btn-danger " href="?halaman=siswa&delete=<?php echo $data['nis'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>
                          </td>
                					<td><?php echo $no ;?></td>
                					<td><?php echo $data['foto']; ?></td>
                          <td><?php echo $data['nis'];?></td>
                					<td><?php echo $data['nisn'];?></td>
                          <td><?php echo $data['nama_siswa'];?></td>
                					<td><?php echo $data['kelas'];?></td>
                					<td><?php echo $data['tempat_lahir'];?></td>
                          <td><?php echo $data['tgl_lahir'];?></td>
                          <td><?php echo $data['jenkel'];?></td>
                					<td><?php echo $data['agama'];?></td>
                					<td><?php echo $data['ayah'];?></td>
                					<td><?php echo $data['ibu'];?></td>
                					<td><?php echo $data['alamat'];?></td>      
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
                url: "halaman/form/siswa/edit.php",
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

