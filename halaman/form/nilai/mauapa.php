<script src="bower_components/jquery/dist/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#kategori").change(function(e) {
            var m = $("#kategori").val();
            $.ajax({
                url: "halaman/form/nilai/sikap/spiritual.php",
                type: "POST",
                data : {id: m,},
                success: function (ajaxData){
                    $(".sikap").html(ajaxData);
                }
            });
        });
        $("#kd").change(function(e) {
            var m = $("#kd").val();
            $.ajax({
                url: "halaman/form/nilai/sikap/kondisi.php",
                type: "POST",
                data : {id: m,},
                success: function (ajaxData){
                    $(".kondisi").html(ajaxData);
                }
            });
        });
    });  
</script>
<?php 
  
  $id=$_POST['id'];
  
  if ($id == "sikap") {
?>

    <div class="form-group">
      <label  class="col-sm-2 control-label ">Pilih Kategori</label>
      <div class="col-sm-3">
       <select class="form-control select2" style="width: 100%;" name="kategori" id="kategori">
        <option value="" readonly>---Pilih---</option>
          <option value="Spritual"> Sikap Spritual </option>
          <option value="Sosial"> Sikap Sosial </option>
        </select>
      </div>
    </div>
    <div class="form-group sikap" >
    </div>
    <div class="col-md-3 col-sm-offset-5">
      <button type="submit" class="btn btn-info" name="sikap">Simpan</button>
    </div>


<?php
  }else if ($id == "saran"){
?>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Saran</label>
    <div class="col-sm-8">
      <textarea name="txtsaran" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group" >
    <div class="col-md-3 col-sm-offset-5">
        <button type="submit" class="btn btn-info" name="saran">Simpan</button>
    </div>
  </div>
<?php
  }else if ($id == "exul"){
?>
  <div class="form-group">
    <label  class="col-sm-2 control-label ">Pilih Ekskul</label>
    <div class="col-sm-3">
     <select class="form-control select2" style="width: 100%;" name="xul" id="nis">
        <option value="" readonly>---Ekskul---</option>
          <?php 
          include '../../../config/koneksi.php';
          $query = mysqli_query($koneksi,"SELECT * FROM ekskul ") or die(mysqli_error());
          foreach ($query as $data){  
          ?>
        <option  value="<?php echo $data['xul'] ?>"><?php echo $data['ekstra'] ?></option>
        <?php } ?>
        </select>
    </div>
  </div>  
  <div class="form-group">
    <label  class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-5">
      <textarea name="nilai" class="form-control"></textarea>
    </div>
  </div>
  <div class="form-group" >
    <div class="col-md-3 col-sm-offset-5">
        <button type="submit" class="btn btn-info" name="ekskul">Simpan</button>
    </div>
  </div>
<?php
  }else if ($id == "fisik") {
?>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Tinggi Badan</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="tinggi" placeholder="Tinggi Badan">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Berat Badan</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="berat" placeholder="Berat Badan">
    </div>
  </div>
  <div class="form-group" >
    <div class="col-md-3 col-sm-offset-5">
      <button type="submit" class="btn btn-info" name="fisik">Simpan</button>
    </div>
  </div>
<?php
  }else if ($id == "kesehatan") {
    
?> 
  <div class="form-group">
    <label  class="col-sm-2 control-label">Penglihatan</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="penglihatan" placeholder="Penglihatan">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Pendengaran</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="pendengaran" placeholder="Pendengaran">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Gigi</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="gigi" placeholder="Gigi">
    </div>
  </div>

  <div class="form-group" >
    <div class="col-md-3 col-sm-offset-5">
      <button type="submit" class="btn btn-info" name="kesehatan">Simpan</button>
    </div>
  </div>
<?php
  }else if ($id == "prestasi") {    
?>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Prestasi</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="prestasii" placeholder="Prestasi">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-5">
      <textarea name="detail" class="form-control"></textarea>
    </div>
  </div>

  <div class="form-group" >
    <div class="col-md-3 col-sm-offset-5">
      <button type="submit" class="btn btn-info" name="prestasi">Simpan</button>
    </div>
  </div>
<?php
  }else if($id == "absen") { 
?> 
  <div class="form-group">
    <label  class="col-sm-2 control-label">Sakit</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="sakit" placeholder="Sakit">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Ijin</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="ijin" placeholder="Ijin">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Tanpa Keterangan</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="alpa" placeholder="Tanpa Keterangan">
    </div>
  </div>

  <div class="form-group" >
    <div class="col-md-3 col-sm-offset-5">
      <button type="submit" class="btn btn-info" name="absen">Simpan</button>
    </div>
  </div>
<?php
  }else if ($id == "pk") {
?>

  <div class="form-group">
    <label  class="col-sm-2 control-label ">Pilih Kode</label>
    <div class="col-sm-3">
     <select class="form-control select2" style="width: 100%;" name="kd" id="kd">
        <option value="" readonly>---Ekskul---</option>
          <?php 
          include '../../../config/koneksi.php';
          $query = mysqli_query($koneksi,"SELECT * FROM kopetensi WHERE kode_kelas = 1 OR kode_kelas = 2") or die(mysqli_error());
          foreach ($query as $data){  
          ?>
        <option  value="<?php echo $data['kd'] ?>"><?php echo $data['kd'] ?></option>
        <?php } ?>
        </select>
    </div>
  </div>

  <div class="form-group kondisi" >
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Nilai</label>
    <div class="col-sm-8">
      <input type="text" class="form-control"  name="nilai" placeholder="nilai" >
    </div>
  </div>


  <div class="form-group" >
    <div class="col-md-3 col-sm-offset-5">
      <button type="submit" class="btn btn-info" name="pk">Simpan</button>
    </div>
  </div>
<?php
  }  
?>
