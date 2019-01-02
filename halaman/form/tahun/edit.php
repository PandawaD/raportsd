  <?php
  $id = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM tahun WHERE kode_tahun = '$id'") or die(mysqli_error());
  foreach ($query as $data) {
  ?>
  <section class="content">
  <div class="data">
  <div class="col-md-12" id="edit">
      <div class="box box-info">
                <div class="box-header with-border">

              <h3 class="box-title">Edit Tahun Ajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="?halaman=tahun" method="POST">
              <div class="box-body">
  
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Awal</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="kode_tahun" value="<?php echo $data['kode_tahun']?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="text" class="form-control"  name="awal" placeholder="awal" value="<?php echo $data['awal']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-3 control-label">Akhir</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control"  name="akhir" placeholder="akhir" value="<?php echo $data['akhir']?>">
                  </div>
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
</div>
</div>
</section>