  <?php
  $id = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM kopetensi WHERE kd = '$id'") or die(mysqli_error());
  foreach ($query as $data) {
  ?>
  <section class="content">
  <div class="data">
  <div class="col-md-12" id="edit">
      <div class="box box-info">
                <div class="box-header with-border">

              <h3 class="box-title">Edit Kompetensi Dasar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form class="form-horizontal" action="?halaman=kopetensi" method="POST">
              <div class="box-body">
  
                <div class="form-group">
                  <label  class="col-sm-3 control-label">KD</label>
                  <div class="col-sm-7">
                    <input type="hidden" name="kd" value="<?php echo $data['kd']?>">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="text" class="form-control"  name="kd" placeholder="kd" value="<?php echo $data['kd']?>">
                  </div>
                </div>



                <div class="form-group"> 
                  <label class="col-sm-3 control-label">Kategori</label>
                  <div class="col-sm-7" >
                    <select class="form-control select2" name="kode_kategori" style="width: 100%;">
                      <option value="" disabled="disabled">-Pilih Kategori-</option>
                    <?php 
                    $querykat = mysqli_query($koneksi,"SELECT * FROM kategori") or die(mysqli_error());
                    foreach ($querykat as $kat ) {  
                    ?>
                    <option value="<?php echo $kat['kode_kategori'] ?>"
                      <?php if($kat['kode_kategori']==$data['kode_kategori']){ echo "Selected";} ?>>
                      <?php echo $kat['nama_kategori'] ?>                       
                      </option>                   
                    <?php } ?>                        
                    </select>
                  </div>
                </div>
    
                  
                <div class="form-group"> 
                  <label class="col-sm-3 control-label">Mapel</label>
                  <div class="col-sm-7" >
                    <select class="form-control select2" name="kode_mapel" style="width: 100%;">
                      <option value="" disabled="disabled">-Pilih Mapel-</option>
                    <?php 
                    $query1 = mysqli_query($koneksi,"SELECT * FROM mapel") or die(mysqli_error());
                    foreach ($query1 as $kat ) {  
                    ?>
                    <option value="<?php echo $kat['kode_mapel'] ?>" 
                      <?php if($kat['kode_mapel']==$data['kode_mapel']){ echo "Selected";} ?>>
                      <?php echo $kat['nama_mapel'] ?>    
                    </option>
                    <?php } ?>    
                    </select>
                  </div>
                </div>
              

              <div class="form-group"> 
                  <label class="col-sm-3 control-label">Kelas / Semester</label>
                  <div class="col-sm-7" >
                    <select class="form-control select2" name="kode_kelas" style="width: 100%;">
                      <option value="" disabled="disabled">-Pilih Kelas / Semester-</option>
                    <?php 
                    $query1 = mysqli_query($koneksi,"SELECT * FROM kelas") or die(mysqli_error());
                    foreach ($query1 as $kat ) {  
                    ?>
                    <option value="<?php echo $kat['kode_kelas'] ?>"
                      <?php if($kat['kode_kelas']==$data['kode_kelas']){ echo "Selected";} ?>>
                      <?php echo $kat['nama_kelas'] ?>
                      </option>
                    <?php } ?>        
                    </select>
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