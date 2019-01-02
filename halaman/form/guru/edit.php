  <?php
  $id = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM guru WHERE nip = '$id'") or die(mysqli_error());
  foreach ($query as $data) {
  ?>
  <section class="content">
  <div class="data">
  <div class="col-md-12" id="edit">
  <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Guru</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="?halaman=guru" method="POST" enctype="multipart/form-data">
              <div class="box-body">
  
                <div class="form-group">
                  <label  class="col-sm-2 control-label">NIP</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="nip" placeholder="Nomor Induk Pegawai" value="<?php echo $data['nip']?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Nama Guru</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="nama_guru" placeholder="Nama Guru" value="<?php echo $data['nama_guru']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-8">
                    
                  <select class="form-control" name="jenkel">
                    <option value="pria" <?php if ($data['jenkel']=='pria') {
                       echo "Selected";
                    }?>>Laki - Laki</option>
                    <option value="wanita" <?php if($data['jenkel']=='wanita') {
                      echo "Selected";
                    } ?>>Perempuan</option>
                  </select>
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Tempat Lahir</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $data['tempat_lahir']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Tanggal Lahir</label>
                  <div class="col-sm-8">
                       <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tgl_lahir" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?php echo $data['tgl_lahir']?>">
                      </div>
                  </div>
                </div>


                <div class="form-group">
                  <label  class="col-sm-2 control-label">Status</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="status" placeholder="..." value="<?php echo $data['status']?>">
                  </div>
                </div>
                
                

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default" id="hideforme">Batal</button>
                <input type="submit" class="btn btn-primary pull-right" name="edit" value="simpan">
              </div>
              <!-- /.box-footer -->
            </form>
            <?php } ?>
  </div>
</div>
</div>
</section>