<html>
<head>
  <title>
    KD
  </title>
</head>
<?php 
  if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $kode_tahun = $_POST['kode_tahun'];
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];
    
     
    $query_edit=mysqli_query($koneksi,"UPDATE tahun SET kode_tahun='$kode_tahun',awal='$awal', akhir='$akhir' WHERE kode_tahun='$id'");

    if($query_edit==TRUE){
      echo "<script>window.location.href='?halaman=tahun'</script>";
    }else{
      echo "<script>alert('gagal')</script>";
    }
    }
?>
<section class="content">
  <div class="data"> 
      <div class="col-md-5 col-sm-offset-3">
        <div class="box">
            <div class="box-header">
              <br><br>
            <h3 class="box-title">Tahun Pelajaran</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Awal</th>
                  <th>Akhir</th>
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $query = mysqli_query($koneksi,"SELECT * FROM tahun") or die(mysqli_error());
                  $no=1;
                  while ($data = mysqli_fetch_array($query)) {  
                ?> 
                <tr>
                    <td><?php echo $data['awal']; ?></td>
                    <td><?php echo $data['akhir'] ?></td>
                    <td>
                      <a class="btn btn-warning" href="?halaman=edit_data_tahun&id=<?php echo $data['kode_tahun'] ?>"><li class="fa fa-pencil"></li></a>
                    </td>
                    
               </tr>
        
                
                 <?php  }  ?>
                </tbody> 
              
              </table>
            </div>
            <!-- /.box-body -->
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
                url: "halaman/form/kd/edit.php",
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


</script>

</html>
