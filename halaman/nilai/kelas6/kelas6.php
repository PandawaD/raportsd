<section class="content">
  <div class="data">
    <div class="col-md-10 col-sm-offset-1">
      <div class="box box-info">
            <div class="box-header">
                <form class="form-horizontal" action="?halaman=aksi6" method="POST" >
                  <div class="box-body">
                         
                    <div class="form-group">
                      <div class="col-sm-3 col-sm-offset-8">
                        <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="tanggal" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?php $tgl=date('d-m-Y'); echo $tgl; ?>" readonly">
                        </div>
                      </div>
                    </div>


                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Nama Siswa</label>
                      <div class="col-sm-3">
                       <select class="form-control select2" style="width: 100%;" name="nis" id="nis" required="required">
                        <option value="" readonly>---Select---</option>
                          <?php 
                          $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE kelas = 6 ORDER BY nama_siswa ASC") or die(mysqli_error());
                          foreach ($query as $data){  
                          ?>
                        <option  value="<?php echo $data['nis'] ?>"><?php echo $data['nama_siswa'] ?></option>
                        <?php } ?>
                        </select>
                      </div>
                 
                      <div class="col-sm-3 col-sm-offset-2">
                       <select class="form-control select2" style="width: 100%;" name="smstr" id="nis" required="required">
                        <option value="" readonly>---Semester---</option>
                          <?php 
                          $query = mysqli_query($koneksi,"SELECT * FROM semester ") or die(mysqli_error());
                          foreach ($query as $data){  
                          ?>
                        <option  value="<?php echo $data['smstr'] ?>"><?php echo $data['sem'] ?></option>
                        <?php } ?>
                        </select>
                      </div>

                    </div>


                    <div class="form-group">
                      <label  class="col-sm-2 control-label">Mau Apa</label>
                      <div class="col-sm-3">
                       <select class="form-control select2" style="width: 100%;" id="mauapa">
                        <option value="" readonly >---Select---</option>
                          
                        <option value="sikap">Sikap</option>
                        <option value="pk">Pengetahuan Dan Keterampilan</option>
                        <option value="exul">Ekstra Kulikuler</option>
                        <option value="saran">Saran</option>
                        <option value="fisik">Kondisi Fisik</option>
                        <option value="kesehatan">Kondisi Kesehatan</option>
                        <option value="prestasi">Prestasi</option>
                        <option value="absen">Ketidakhadiran</option>
                        </select>
                      </div>
                    </div>
                      <!-- masukknya data -->
                    <div class="disini" >
                      
                    </div>      
                  </div>
                </form>
            </div>
            
          </div>
    </div>
  </div>
</section>

<script src="bower_components/jquery/dist/jquery.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#mauapa").change(function(e) {
            var m = $("#mauapa").val();
            $.ajax({
                url: "halaman/nilai/kelas6/mauapa.php",
                type: "POST",
                data : {id: m,},
                success: function (ajaxData){
                    $(".disini").html(ajaxData);
                }
            });
        });

    });  
</script>
<script type="text/javascript">
  //print
  $( document ).ready(function() {
    $('#trs').click(function()
     {
         window.print();
         
     });
});

  //load crud dengan ajax
  $(document).ready(function(){
    loadData();
  });
  function loadData(){
    $.get('data.php', function(data){
      $('#table').html(data);  
    })
  }

  $(document).ready(function(){
    loadData();
  });
  function loadData(){
    $.get('data.php', function(data){
      $('#table').html(data);  
    })
  }

</script>
<script type="text/javascript">
      //kembalian dan total bayar  
        function hitung() {
          var total = document.getElementById('total').value;
          var bayar = document.getElementById('bayar').value;

          var result = parseInt(bayar) - parseInt(total);
          
          if (bayar=="") {
            document.getElementById('kembalian').value = "";
          }else{
            document.getElementById('kembalian').value = result;
            if (result == 0) {
                document.getElementById('kembalian').value = "";
            }  
          }
        }
        function totalan(ttl) {
          var potongan = document.getElementById('potongan').value;
          var bayar = document.getElementById('bayar').value;
          var result = parseInt(ttl) - parseInt(potongan);
          
          if (potongan=="") {
            document.getElementById('total').value = ttl;   
            
          }else {
            document.getElementById('total').value =result;
            
          }
          hitung();
        }
</script>

<!-- Select2 -->
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>


                            
