<?php
 // Define relative path from this script to mPDF
$nama_dokumen='Cetak Raport S2 -'.$_GET['val'];
include '../../config/koneksi.php';
include '../../dist/mpdf60/mpdf.php';
$nis = $_GET['val'];
$mpdf=new mPDF('utf-8', 'A4-L', 10.5); // Create new mPDF Document
session_start() ;
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>

<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->

<body>
<h3><b><p align="center">RAPOR PESERTA DIDIK DAN PROFIL PESERTA DIDIK </h3></b></p>
  <table  width="100%">
    <tr>
  <?php 
                  
    $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis'") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)) {  
  ?>
      <td width="20%">Nama Peserta Didik</td>
      <td width="1%">:</td>
      <td width="35%"><?php echo $data['nama_siswa']; ?></td>
      <td width="10%">Kelas </td>
      <td width="1%">:</td>
      <td width="10%"><?php echo $data['kelas']; ?></td>
    </tr>
    <tr>
      <td width="20%">NISN/NIS</td>
      <td width="1%">:</td>
      <td width="35%"><?php echo $data['nisn']; ?>/<?php echo $data['nis']; ?></td>
      <td width="10%">Semester </td>
      <td width="1%">:</td>
      <td width="10%"><?php echo ("Ganjil") ?></td>
    </tr>
    <tr>
      <td width="20%">Nama Sekolah</td>
      <td width="1%">:</td>
      <td width="35%"><?php echo ("SDN Randuagung 01"); ?></td>
      <td width="10%">Tahun Pelajaran </td>
      <td width="1%">:</td>
      <td width="10%"><?php date_default_timezone_set("Asia/Jakarta"); echo date('Y'); ?> - <?php date_default_timezone_set("Asia/Jakarta"); echo date('Y')+1; ?> </td>
    </tr>

    <tr>
      <td width="20%">Alamat Sekolah</td>
      <td width="1%">:</td>
      <td width="35%"><?php echo ("JL. Raya Cendrawasih NO. 121"); ?></td>
  <?php } ?>
    </tr>
  </table> 
<h4><b> A.   SIKAP</b></h4>
<table width="100%" border="1">
  <tr>
    <td style="background-color: #708090 ;" colspan="2" width="100%" height="35" ><div align="center">Deskripsi</div></td>
  </tr>
  <tr>
       <td  height="104" width="50%"><?php echo ("Spiritual") ?></td>
        <?php
          $query = mysqli_query($koneksi,"SELECT * FROM sikap JOIN siswa ON sikap.nis=siswa.nis WHERE sikap.nis='$nis' AND kategori='Spritual' AND smstr=2 ") or die(mysqli_error());
          while ($data = mysqli_fetch_array($query)) {
        ?>
        <td  height="104" width="50%"> Ananda <?php echo $data['nama_siswa']; ?> ,<?php echo $data['nilai']; ?></td>
        <?php } ?>
  </tr>   
  <tr>
        <td height="104" width="50%"><?php echo ("Sosial") ?></td>
        <?php
          $query = mysqli_query($koneksi,"SELECT * FROM sikap JOIN siswa ON sikap.nis=siswa.nis WHERE sikap.nis='$nis' AND kategori='Sosial' AND smstr=2 ") or die(mysqli_error());
          while ($data = mysqli_fetch_array($query)) {
        ?>
        <td height="104" width="50%"> Ananda <?php echo $data['nama_siswa']; ?> , <?php echo $data['nilai']; ?></td>
      <?php } ?>
  </tr>  
</table>
<h4><b> B.   PENGETAHUAN DAN KETERAMPILAN</b></h4>
KKM Satuan Pendidikan : 65
<table width="100%" border="1">
  <tr style="background-color: #708090 ;">
    <td width="3%" rowspan="2" align="center">NO</td>
    <td width="215" rowspan="2" align="center">Muatan <br>
    Pelajaran <br></td>
    <td colspan="3" align="center">Pengetahuan</div></td>
    <td colspan="3" align="center">Keterampilan</td>
  </tr>
  <tr style="background-color: #708090 ;">
    <td width="29" align="center">Nilai</td>
    <td width="59" align="center">Predikaat</td>
    <td width="170" align="center">Deskripsi</td>
    <td width="29" align="center">Nilai</td>
    <td width="51" align="center">Predikat</td>
    <td width="169" align="center">Deskripsi</td>
  </tr>  
          
        <?php  
          $query2 = mysqli_query($koneksi,"SELECT * FROM pk JOIN siswa ON pk.nis=siswa.nis JOIN mapel ON pk.kode_mapel=mapel.kode_mapel  WHERE pk.nis='$nis' AND pk.kode_kategori=4  AND smstr=2 ORDER BY mapel.nama_mapel ASC") or die(mysqli_error());
        ?>
        
        <?php  
          $query = mysqli_query($koneksi,"SELECT * FROM pk JOIN siswa ON pk.nis=siswa.nis JOIN mapel ON pk.kode_mapel=mapel.kode_mapel  WHERE pk.nis='$nis' AND pk.kode_kategori=3  AND smstr=2 ORDER BY mapel.nama_mapel ASC") or die(mysqli_error());
          $no = 1;
          while ($data = mysqli_fetch_array($query)) {
        ?>

  <tr>
    <td align="center"><?php echo $no ?></td>
    <td><?php echo $data['nama_mapel']; ?></td>
    <td><div align="center"><?php echo $data['nilai']; ?></div></td>

    <?php if (100 >= $data['nilai'] && $data['nilai'] > 88 ){?>
    <td><div align="center"><?php echo ("A") ?></div></td>
    <?php }else if (88 >= $data['nilai'] && $data['nilai'] > 76 ){?>
    <td><div align="center"><?php echo ("B") ?></div></td>
    <?php }else if (76 >= $data['nilai'] && $data['nilai'] >= 65 ){?>
    <td><div align="center"><?php echo ("C") ?></div></td>
    <?php }else if ( $data['nilai'] < 65 ){?>
    <td><div align="center"><?php echo ("D") ?></div></td>
    <?php } ?>

    <?php  
          $sql = mysqli_query($koneksi,"SELECT * FROM deskripsi WHERE kode_kategori=3 AND kode_mapel = '$data[kode_mapel]' AND kode_kelas = '$data[kode_kelas]' ") or die(mysqli_error());
          while ($row = mysqli_fetch_array($sql)) {
    ?>
    <?php if (100 >= $data['nilai'] && $data['nilai'] > 88 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row['kat1']; ?></div></td>
    <?php }else if (88 >= $data['nilai'] && $data['nilai'] > 76 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row['kat2']; ?></div></td>
    <?php }else if (76 >= $data['nilai'] && $data['nilai'] >= 65 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row['kat3']; ?></div></td>
    <?php }else if ($data['nilai'] < 65 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row['kat4']; ?></div></td>
    <?php } ?>
    <?php } ?>

    <!-- KETERAMPILAN -->

    <?php $data2 = mysqli_fetch_array($query2) ; ?>
    <td><div align="center"><?php echo $data2['nilai']; ?></div></td>
        
    <?php if (100 >= $data2['nilai'] && $data2['nilai'] > 88 ){?>
    <td><div align="center"><?php echo ("A") ?></div></td>
    <?php }else if (88 >= $data2['nilai'] && $data2['nilai'] > 76 ){?>
    <td><div align="center"><?php echo ("B") ?></div></td>
    <?php }else if (76 >= $data2['nilai'] && $data2['nilai'] >= 65 ){?>
    <td><div align="center"><?php echo ("C") ?></div></td>
    <?php }else if ($data2['nilai'] < 65 ){?>
    <td><div align="center"><?php echo ("D") ?></div></td>
    <?php } ?>

    <?php  
          $sql2 = mysqli_query($koneksi,"SELECT * FROM deskripsi WHERE kode_kategori=4 AND kode_mapel = '$data[kode_mapel]' AND kode_kelas = '$data[kode_kelas]' ") or die(mysqli_error());
          while($row2 = mysqli_fetch_array($sql2)){
    ?>
    <?php if (100 >= $data2['nilai'] && $data2['nilai'] > 88 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row2['kat1']; ?></div></td>
    <?php }else if (88 >= $data2['nilai'] && $data2['nilai'] > 76 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?> bisa <?php echo $row2['kat2']; ?></div></td>
    <?php }else if (76 >= $data2['nilai'] && $data2['nilai'] >= 65 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?> bisa <?php echo $row2['kat3']; ?></div></td>
    <?php }else if ($data2['nilai'] < 65 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?> bisa <?php echo $row2['kat3']; ?></div></td>
    <?php }} ?>

    <?php  $no++; }?>
  </tr>    
</table>
  
  
<h4><b> C.   EKSTRA KURIKULER</b></h4>
<table width="100%" border="1" >
  <tr style="background-color: #708090 ;" height="35">
    <td width="3%" ><div align="center">No</div></td>
    <td width="40%"><div align="center">Kegiatan Ekstrakurikuler</div></td>
    <td width="40%"><div align="center">Kegiatan</div></td>
  </tr>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM nilai_ekskul JOIN ekskul ON nilai_ekskul.xul=ekskul.xul WHERE nilai_ekskul.nis='$nis' AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
  <tr>
    <td width="3%" align="center"><?php echo $no ?></td>
    <td  height="54" width="40%"><?php echo $data['ekstra']; ?></td>
    <td height="54" width="40%"><div align="center"><?php echo $data['nilai']; ?></div></td>
  </tr>
  <?php $no++;} ?>
</table>
<h4><b> D.   SARAN-SARAN</b></h4>
<table width="100%" height="81" border="1">
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM saran WHERE saran.nis='$nis' AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
  <tr>
    <td width="420"  align="center"><?php echo $data['saran']; ?></td>
  </tr>
  <?php } ?>
</table>

<h4><b> E. TINGGI DAN BERAT BADAN</b></h4>
<table width="100%" border="1">
  <tr style="background-color: #708090 ;" height="35">
    <td width="3%" ><div align="center">No</div></td>
    <td width="50%"><div align="center" >Aspek Yang Dinilai</div></td>
    <td width="47%" ><div align="center" >Centimeter</div></td>
  </tr>
  
   
    <?php
      $sqt = mysqli_query($koneksi,"SELECT * FROM fisik WHERE fisik.nis='$nis'AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($raw = mysqli_fetch_array($sqt)) {
    ?>
    <tr>
    <td rowspan="1"><div align="center"><?php echo 1 ?></div></td>
    <td><div align=""><?php echo ("Tinggi Badan") ?></div></td>
    <td><div align=""><?php echo $raw['tinggi']; ?></div></td>
    </tr>
    <tr>
    <td rowspan=""><div align="center"><?php echo 2 ?></div></td>
    <td><div align=""><?php echo ("Berat Badan") ?></div></td>
    <td><div align=""><?php echo $raw['berat']; ?></div></td>
    </tr>
  
  <?php $no++;} ?>

</table>
<h4><b> F.   KONDISI DAN KESEHATAN</b></h4>
<table width="100%" border="1">
  <?php
          $query = mysqli_query($koneksi,"SELECT * FROM kesehatan WHERE kesehatan.nis='$nis' AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
  <tr style="background-color: #708090 ;">
    <td width="3%"><div align="center">No</div></td>
    <td width="128"><div align="center">Aspek Fisik</div></td>
    <td width="237"><div align="center">keterangan</div></td>
  </tr>
  <tr>
    <td width="45"><div align="">1</div></td>
    <td width="128"><div align="">Penglihatan</div></td>
    <td><div align=""><?php echo $data['penglihatan']; ?></div></td>
  </tr>
  <tr>
    <td width="45"><div align="">2</div></td>
    <td width="128"><div align="">Pendengaran</div></td>
    <td><div align=""><?php echo $data['pendengaran']; ?></div></td>
  </tr>
  <tr>
    <td width="45"><div align="">3</div></td>
    <td width="128"><div align="">Gigi</div></td>
    <td><div align=""><?php echo $data['gigi']; ?></div></td>
  </tr>
  
  <?php } ?>

</table>
<h4><b> E.   PRESTASI</b></h4>
<table width="100%" border="1">
  <tr style="background-color: #708090 ;" height="35">
    <td width="3%"><div align="center">No</div></td>
    <td width="128"><div align="center">Jenis Prestasi</div></td>
    <td width="237"><div align="center">Kegiatan</div></td>
  </tr>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM prestasi WHERE prestasi.nis='$nis' ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
  <tr>
    <td><div align=""><?php echo $no ?></div></td>
    <td><div align=""></div><?php echo $data['prestasii']; ?></td>
    <td><div align=""><?php echo $data['detail']; ?></div></td>
  </tr>
  <?php $no++;} ?>
</table>
<h4><b> H.   KETIDAKHADIRAN</b></h4>
<table width="40%" border="1">
  
  <tr>
    <td width="126"> <div align="left">Sakit</div></td>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM absen WHERE absen.nis='$nis' AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td width="93"><div align="left"><?php echo $data['sakit']; ?> Hari</div></td>
    <?php } ?>
  </tr>
  <tr>
    <td><div align="left">Ijin</div></td>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM absen WHERE absen.nis='$nis' AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td><div align="left"> <?php echo $data['ijin']; ?> Hari</div></td>
    <?php } ?>
  </tr>
  <tr>
    <td><div align="left">Tanpa Keterangan</div></td>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM absen WHERE absen.nis='$nis' AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td><div align="left"> <?php echo $data['alpa']; ?> Hari</div></td>
  </tr>
  <?php } ?>
</table>
<br><br>
<table width="100%" >
  <tr>
    <td width="10%">Keputusan :</td>
  </tr>
  <tr>
    <td  width="50%" colspan="1">Berdasarkan hasil yang dicapai pada semester 1 dan 2, peserta didik ditetapkan</td>
    <td width="50%">Naik ke kelas ......................................(..........................................)</td>
  </tr>
  <tr>
    <td width="50%"></td>
    <td width="50%">Tinggal ke kelas ..................................(..........................................)</td>
  </tr>
</table>
<table width="100%">
  <tr>
    <td width="50%" align="center">
    Mengetahui <br>
    Orang Tua/ Wali,
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <?php
      $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis'") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)) {
    ?>
    ( <?php echo $data['ayah']; ?> / <?php echo $data['ibu']; ?> )
    <?php } ?>
    </td>
    <td width="50%" align="center">
      Jember, <?php date_default_timezone_set("Asia/Jakarta"); echo date('d F Y'); ?>      
      <br>
      Guru Kelas
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    <?php session_start(); $sid = $_SESSION['nip'];   ?>
    <?php
      $query = mysqli_query($koneksi,"SELECT * FROM login JOIN guru ON login.nip = guru.nip WHERE login.nip='$sid'") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)) {
    ?>
      
      ( <u> <?php  echo $data['nama_guru']; ?> </u> ) <br>
      NIP. <?php  echo $sid ?>
    <?php } ?>
    </td>
  </tr>
  <tr>
    <td align="center" colspan="2">
    Mengetahui <br>
    Kepala Sekolah,
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    <?php
  $query = mysqli_query($koneksi,"SELECT * FROM login JOIN guru ON login.nip = guru.nip WHERE level_user='kepsek'") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)) {
    ?>
      
      ( <u> <?php  echo $data['nama_guru']; ?> </u> ) <br>
      NIP. <?php  echo $data['nip']; ?>
    <?php } ?>
    </td>  
  </tr>
</table>

</body>
</html>
<?php

$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>




