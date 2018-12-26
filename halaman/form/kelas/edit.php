  <?php
  include '../../../config/koneksi.php';
  $id = $_POST['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM kelas WHERE kode_kelas = '$id'") or die(mysqli_error());
  foreach ($query as $data) {
  ?>
  <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Kelas</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="?halaman=kelas" method="POST">
              <div class="box-body">
  
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Nama Kelas</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="nama_kelas" placeholder="Nama Kelas" value="<?php echo $data['nama_kelas']?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="hidden" name="id" value="<?php echo $data['kode_kelas']?>">
                  </div>
                </div>
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" id="hideforme">Batal</button>
                <button type="submit" class="btn btn-info pull-right" name="edit">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
            <?php } ?>
  </div>
