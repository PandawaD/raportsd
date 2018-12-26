  <?php
  
  $id = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis = '$id'") or die(mysqli_error());
  foreach ($query as $data) {
  ?>

<section class="content">
  <div class="data">
    <div class="col-md-12" id="edit">
      <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="?halaman=data_siswa_kelas3" method="POST">
              <div class="box-body">
  
                <div class="form-group">
                  <label  class="col-sm-2 control-label">NIS</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="nis" placeholder="Nomor Induk Siswa" value="<?php echo $data['nis']?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                  </div>
                </div>
				      <div class="form-group">
                  <label  class="col-sm-2 control-label">NISN</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="nisn" placeholder="Nomor Induk Siswa Nasional" value="<?php echo $data['nisn']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Nama Siswa</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="nama_siswa" placeholder="Nama Siswa" value="<?php echo $data['nama_siswa']?>">
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
                  <label  class="col-sm-2 control-label">Kelas</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="kelas" placeholder="Kelas" value="<?php echo $data['kelas']?>">
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
                  <label  class="col-sm-2 control-label">Agama</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="agama" placeholder="Agama" value="<?php echo $data['agama']?>">
                  </div>
                </div>
				      <div class="form-group">
                  <label  class="col-sm-2 control-label">Nama Ayah</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="ayah" placeholder="Nama Ayah" value="<?php echo $data['ayah']?>">
                  </div>
                </div>
				      <div class="form-group">
                  <label  class="col-sm-2 control-label">Nama Ibu</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="ibu" placeholder="Nama Ibu" value="<?php echo $data['ibu']?>">
                  </div>
                </div>
				      <div class="form-group">
                  <label  class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control"  name="alamat" placeholder="Alamat" value="<?php echo $data['alamat']?>">
                  </div>
                </div>
                <div class="form-group">
                  <label  class="col-sm-2 control-label">Foto Profil</label>
                  <div class="col-sm-8">
                    <input type="file"   name="foto"  value="<?php echo $data['foto']?>">
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
