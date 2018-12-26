<?php
 // Define relative path from this script to mPDF
$nama_dokumen='Cetak Raport S1 -'.$_GET['val'];
include '../../config/koneksi.php';
include '../../dist/mpdf60/mpdf.php';
$nis = $_GET['val'];
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>

<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->

<body>
<h3><b><p align="center">RAPOR PESERTA DIDIK DAN PROFIL PESERTA DIDIK </h3></b></p>
  <?php 
                  
  $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis'") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)) {  
  ?>
    Nama Peserta Didik  : <?php echo $data['nama_siswa']; ?><br> 
    NISN/NIS    : <?php echo $data['nisn']; ?>/<?php echo $data['nis']; ?><br>
    Kelas     : <?php echo $data['kelas']; ?><br>
    Nama Sekolah    : <?php echo ("SDN Randuagung 01"); ?><br>
    Semester    : <?php echo ("Ganjil") ?><br>
    Alamat Sekolah    : <?php echo ("JL. Raya Cendrawasih NO. 121"); ?><br>
    Tahun Pelajaran : <?php date_default_timezone_set("Asia/Jakarta"); echo date('Y'); ?> - <?php date_default_timezone_set("Asia/Jakarta"); echo date('Y')+1; ?> 
  <?php } ?>
<h4><b> A.   SIKAP</b></h4>
<table width="500" border="1">
  <tr>
  
    <td style="background-color: #708090 ;" colspan="2"><div align="center">Deskripsi</div></td>
  </tr>
  <tr>
    <td width="302"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="104" width="215"><?php echo ("Spiritual") ?></td>
        <?php
          $query = mysqli_query($koneksi,"SELECT * FROM sikap JOIN siswa ON sikap.nis=siswa.nis WHERE sikap.nis='$nis' AND kategori='Spritual' AND smstr=1 ") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <td colspan="3" height="104" width="215">Ananda <?php echo $data['nama_siswa']; ?> ,<?php echo $data['nilai']; ?></td>
      <?php } ?>
      </tr>
     
      <tr>
        <td colspan="3" height="104" width="215"><?php echo ("Sosial") ?></td>
        <?php
          $query = mysqli_query($koneksi,"SELECT * FROM sikap JOIN siswa ON sikap.nis=siswa.nis WHERE sikap.nis='$nis' AND kategori='Sosial' AND smstr=1 ") or die(mysqli_error());
          while ($data = mysqli_fetch_array($query)) {
        ?>
        <td colspan="3" height="104" width="215">Ananda <?php echo $data['nama_siswa']; ?> , <?php echo $data['nilai']; ?></td>
      <?php } ?>
      </tr>
    </table></td>
    
    </table></td>
  </tr>
  
</table>
<h4><b> B.   PENGETAHUAN DAN KETERAMPILAN</b></h4>
KKM Satuan Pendidikan : 60
<table width="798" border="1">
  <tr style="background-color: #708090 ;">
    <td width="24" rowspan="2">NO</td>
    <td width="215" rowspan="2"><p>Muatan</p>
    <p>Pelajaran</p></td>
    <td colspan="3"><div align="center">Pengetahuan</div></td>
    <td colspan="3">Keterampilan</td>
  </tr>
  <tr style="background-color: #708090 ;">
    <td width="29">Nilai</td>
    <td width="59">Predikaat</td>
    <td width="170">Deskripsi</td>
    <td width="29">Nilai</td>
    <td width="51">Predikat</td>
    <td width="169">Deskripsi</td>
  </tr>  
          
        <?php  
          $query2 = mysqli_query($koneksi,"SELECT * FROM pk JOIN siswa ON pk.nis=siswa.nis JOIN mapel ON pk.kode_mapel=mapel.kode_mapel  WHERE pk.nis='$nis' AND pk.kode_kategori=4  AND smstr=1 ORDER BY mapel.nama_mapel ASC") or die(mysqli_error());
        ?>
        
        <?php  
          $query = mysqli_query($koneksi,"SELECT * FROM pk JOIN siswa ON pk.nis=siswa.nis JOIN mapel ON pk.kode_mapel=mapel.kode_mapel  WHERE pk.nis='$nis' AND pk.kode_kategori=3  AND smstr=1 ORDER BY mapel.nama_mapel ASC") or die(mysqli_error());
          $no = 1;
          while ($data = mysqli_fetch_array($query)) {
        ?>

  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $data['nama_mapel']; ?></td>
    <td><div align="center"><?php echo $data['nilai']; ?></div></td>

    <?php if (100 >= $data['nilai'] && $data['nilai'] >= 95 ){?>
    <td><div align="center"><?php echo ("A") ?></div></td>
    <?php }else if (94 >= $data['nilai'] && $data['nilai'] >= 89 ){?>
    <td><div align="center"><?php echo ("A -") ?></div></td>
    <?php }else if (88 >= $data['nilai'] && $data['nilai'] >= 75 ){?>
    <td><div align="center"><?php echo ("B +") ?></div></td>
    <?php } ?>

    <?php  
          $sql = mysqli_query($koneksi,"SELECT * FROM deskripsi WHERE kode_kategori=3 AND kode_mapel = '$data[kode_mapel]' ") or die(mysqli_error());
          while ($row = mysqli_fetch_array($sql)) {
    ?>
    <?php if (100 >= $data['nilai'] && $data['nilai'] >= 95 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row['kat1']; ?></div></td>
    <?php }else if (94 >= $data['nilai'] && $data['nilai'] >= 89 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row['kat2']; ?></div></td>
    <?php }else if (88 >= $data['nilai'] && $data['nilai'] >= 75 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row['kat3']; ?></div></td>
    <?php } ?>
    <?php } ?>

    <!-- KETERAMPILAN -->

    <?php $data2 = mysqli_fetch_array($query2) ; ?>
    <td><div align="center"><?php echo $data2['nilai']; ?></div></td>
        
    <?php if (100 >= $data2['nilai'] && $data2['nilai'] >= 95 ){?>
    <td><div align="center"><?php echo ("A") ?></div></td>
    <?php }else if (94 >= $data2['nilai'] && $data2['nilai'] >= 89 ){?>
    <td><div align="center"><?php echo ("A -") ?></div></td>
    <?php }else if (88 >= $data2['nilai'] && $data2['nilai'] >= 75 ){?>
    <td><div align="center"><?php echo ("B +") ?></div></td>
    <?php } ?>

    <?php  
          $sql2 = mysqli_query($koneksi,"SELECT * FROM deskripsi WHERE kode_kategori=4 AND kode_mapel = '$data[kode_mapel]' ") or die(mysqli_error());
          while($row2 = mysqli_fetch_array($sql2)){
    ?>
    <?php if (100 >= $data2['nilai'] && $data2['nilai'] >= 95 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?>bisa <?php echo $row2['kat1']; ?></div></td>
    <?php }else if (94 >= $data2['nilai'] && $data2['nilai'] >= 89 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?> bisa <?php echo $row2['kat2']; ?></div></td>
    <?php }else if (88 >= $data2['nilai'] && $data2['nilai'] >= 75 ){?>
    <td><div align="center">Ananda <?php echo $data['nama_siswa']; ?> bisa <?php echo $row2['kat3']; ?></div></td>
    <?php }} ?>

    <?php  $no++; }?>
</tr>
    
    </table></td>
  </tr>
  
<h4><b> C.   EKSTRA KURIKULER</b></h4>
<table width="435" border="1">
  <tr>
    <td width="26"><div align="center">No</div></td>
    <td width="186"><div align="center">Kegiatan Ekstrakurikuler</div></td>
    <td width="201"><div align="center">Kegiatan</div></td>
  </tr>
  <tr>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM nilai_ekskul JOIN ekskul ON nilai_ekskul.xul=ekskul.xul WHERE nilai_ekskul.nis='$nis' AND smstr=1 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td><div align="center"><?php echo $no ?></div></td>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="3" height="54" width="215"><?php echo $data['ekstra']; ?></td>

          </tr>
      </table>
    </div></td>
    <td><div align="center"><?php echo $data['nilai']; ?></div></td>
  </tr>
  <?php $no++;} ?>
</table>
<h4><b> D.   SARAN-SARAN</b></h4>
<table width="430" height="81" border="1">
  <tr>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM saran WHERE saran.nis='$nis' AND smstr=1 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td width="420"><div align="center"><?php echo $data['saran']; ?></div></td>
  </tr>
  <?php } ?>
</table>
<h4><b> E.   PRESTASI</b></h4>
<table width="432" border="1">
  <tr>
    <td width="45"><div align="center">No</div></td>
    <td width="128"><div align="center">Jenis Prestasi</div></td>
    <td width="237"><div align="center">Kegiatan</div></td>
  </tr>
  <tr>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM prestasi WHERE prestasi.nis='$nis' ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td><div align="center"><?php echo $no ?></div></td>
    <td><div align="center"></div><?php echo $data['prestasii']; ?></td>
    <td><div align="center"><?php echo $data['detail']; ?></div></td>
  </tr>
  <?php $no++;} ?>

</table>
<h4><b> F. TINGGI DAN BERAT BADAN</b></h4>
<table width="432" border="1">
  <tr>
    <td width="45" rowspan="2"><div align="center">No</div></td>
    <td width="128" rowspan="2"><div align="center" >Aspek Yg Dinilai</div></td>
    <td width="237" colspan="2"><div align="center" >Semester </div>
      <tr>
        <td><div align="center" >Ganjil</div></td>
        <td><div align="center" >Genap</div></td>
      </tr>
    </td>
  </tr>
  
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM fisik WHERE fisik.nis='$nis'AND smstr=1 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <?php
      $sqt = mysqli_query($koneksi,"SELECT * FROM fisik WHERE fisik.nis='$nis'AND smstr=1 ") or die(mysqli_error());
      $no =1;
    while ($raw = mysqli_fetch_array($sqt)) {
    ?>
    <tr>
    <td rowspan="1"><div align="center"><?php echo 1 ?></div></td>
    <td><div align="center"><?php echo ("Tinggi Badan") ?></div></td>
    <td><div align="center"><?php echo $data['tinggi']; ?></div></td>
    <td><div align="center"><?php echo $raw['tinggi']; ?></div></td>
    </tr>
    <tr>
    <td rowspan=""><div align="center"><?php echo 2 ?></div></td>
    <td><div align="center"><?php echo ("Berat Badan") ?></div></td>
    <td><div align="center"><?php echo $data['berat']; ?></div></td>
    <td><div align="center"><?php echo $raw['berat']; ?></div></td>
    </tr>
  <?php $no++;} ?>
  <?php $no++;} ?>

</table>
<h4><b> G.   KONDISI DAN KESEHATAN</b></h4>
<table width="432" border="1">
  <?php
          $query = mysqli_query($koneksi,"SELECT * FROM kesehatan WHERE kesehatan.nis='$nis' AND smstr=1 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
  <tr>
    <td width="45"><div align="center">No</div></td>
    <td width="128"><div align="center">Aspek Fisik</div></td>
    <td width="237"><div align="center">keterangan</div></td>
  </tr>
  <tr>
    <td width="45"><div align="center">1</div></td>
    <td width="128"><div align="center">Penglihatan</div></td>
    <td><div align="center"><?php echo $data['penglihatan']; ?></div></td>
  </tr>
  <tr>
    <td width="45"><div align="center">2</div></td>
    <td width="128"><div align="center">Pendengaran</div></td>
    <td><div align="center"><?php echo $data['pendengaran']; ?></div></td>
  </tr>
  <tr>
    <td width="45"><div align="center">3</div></td>
    <td width="128"><div align="center">Gigi</div></td>
    <td><div align="center"><?php echo $data['gigi']; ?></div></td>
  </tr>
  
  <?php } ?>

</table>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<h4><b> H.   KETIDAKHADIRAN</b></h4>
<table width="235" border="1">
  
  <tr>
    <td width="126"> <div align="left">Sakit</div></td>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM absen WHERE absen.nis='$nis' AND smstr=1 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td width="93"><div align="left"><?php echo $data['sakit']; ?> Hari</div></td>
    <?php } ?>
  </tr>
  <tr>
    <td><div align="left">Ijin</div></td>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM absen WHERE absen.nis='$nis' AND smstr=1 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td><div align="left"> <?php echo $data['ijin']; ?> Hari</div></td>
    <?php } ?>
  </tr>
  <tr>
    <td><div align="left">Tanpa Keterangan</div></td>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM absen WHERE absen.nis='$nis' AND smstr=1 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td><div align="left"> <?php echo $data['alpa']; ?> Hari</div></td>
  </tr>
  <?php } ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="100%">
  <tr>
    <td width="50%" align="center">
    Mengetahui <br>
    Orang Tua/ Wali,
    <br>
    <br>
    <br>
    <br>
    ..................
    </td>
    <td width="50%" align="center">
      Jember, <?php date_default_timezone_set("Asia/Jakarta"); echo date('d F Y'); ?>      
      <br>
      Guru Kelas
      <br>
      <br>
      <br>
      <br>
      ..................
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
    ..................
    </td>  
  </tr>
</table>
<!--h3>              Mengetahui                      Jember,<?php date_default_timezone_set("Asia/Jakarta"); echo date('d F Y'); ?>                                                
            Orang Tua/Wali,                   Guru Kelas</h3>
          
          
          
          
          ........................                                Rifatul Hasanah, S.Pd.SD
<h3>                                               NIP :</h3>

<h3>                    Mengetahui,
                  Kepala Sekolah</h3>
              
              
              
              
              
                            Katimin, S.Pd
<h3>                 NIP :</h3-->

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




