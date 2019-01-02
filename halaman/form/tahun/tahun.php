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
