  <?php
  $id = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM mapel WHERE kode_mapel = '$id'") or die(mysqli_error());
  foreach ($query as $data) {
  ?><section class="content">
  <div class="data">
    <div class="col-md-12" id="edit">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="?halaman=mapel" method="POST">
              <div class="box-body">
  
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Nama Mata Pelajaran</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="nama_mapel" placeholder="Nama Mata Pelajaran" value="<?php echo $data['nama_mapel']?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="hidden" name="id" value="<?php echo $data['kode_mapel']?>">
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