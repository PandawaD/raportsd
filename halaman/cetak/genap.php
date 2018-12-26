<?php
 // Define relative path from this script to mPDF
$nama_dokumen='Cetak Laporan Barang -'.$_GET['val'];
include '../../config/koneksi.php';
include '../../dist/mpdf60/mpdf.php';
$nis = $_GET['val'];
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak masalah.-->
<!--CONTOH Code START-->


<h3><b><p align="center">RAPOR PESERTA DIDIK DAN PROFIL PESERTA DIDIK </h3></b></p>
<pre>
  <?php 
                  
  $query = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis'") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)) {  
  ?>
    Nama Peserta Didik  : <?php echo $data['nama_siswa']; ?><br> 
    NISN/NIS    : <?php echo $data['nisn']; ?>/<?php echo $data['nis']; ?><br>
    Kelas     : <?php echo $data['kelas']; ?><br>
    Nama Sekolah    : <?php echo ("SDN Randuagung 01"); ?><br>
    Semester    : <?php echo ("Genap") ?><br>
    Alamat Sekolah    : <?php echo ("JL. Raya Cendrawasih NO. 121"); ?><br>
    Tahun Pelajaran :<?php echo ("YEAR(NOW())"); ?>
  <?php } ?>
</pre>
<h4><b> A.   SIKAP</b></h4>
<table width="500" border="1">
  <tr>
  
    <td style="background-color: #708090 ;" colspan="2"><div align="center">Deskripsi</div></td>
  </tr>
  <tr>
    <td width="68"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="104" width="215"><?php echo ("Spiritual") ?></td>
        <?php
          $query = mysqli_query($koneksi,"SELECT * FROM sikap JOIN siswa ON sikap.nis=siswa.nis WHERE sikap.nis='$nis' AND kategori='Spritual' AND smstr=2 ") or die(mysqli_error());
    while ($data = mysqli_fetch_array($query)) {
        ?>
        <td colspan="" height="104" width="215">Ananda <?php echo $data['nama_siswa']; ?> ,<?php echo $data['nilai']; ?></td>
      <?php } ?>
      </tr>
      <td width="302"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="104" width="215"><?php echo ("Sosial") ?></td>
        <?php
          $query = mysqli_query($koneksi,"SELECT * FROM sikap JOIN siswa ON sikap.nis=siswa.nis WHERE sikap.nis='$nis' AND kategori='Sosial' AND smstr=2 ") or die(mysqli_error());
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
  
          $query = mysqli_query($koneksi,"SELECT * FROM pk JOIN siswa ON pk.nis=siswa.nis JOIN mapel ON pk.kode_mapel=mapel.kode_mapel WHERE pk.nis='$nis'  AND smstr=2 ") or die(mysqli_error());
          $no = 1;
    while ($data = mysqli_fetch_array($query)) {
        
        ?>
  <tr>
    <td><?php echo $no ?></td>
    <td><?php echo $data['nama_mapel']; ?></td>
    <td><div align="center"><?php echo $data['nilai']; ?></div></td>
    <?php
      # code...
    $no++;}  ?><!-- 
    <td><div align="center"><?php echo $data['Predikat']; ?></div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="272" width="165"><?php echo $data['deskripsi']; ?></td>
      </tr>
    </table></td>
    <td><div align="center"><?php echo $data['Nilai']; ?></div></td>
    <td><div align="center"><?php echo $data['Predikat']; ?></div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="272" width="209"><?php echo $data['deskripsi']; ?></td>
      </tr> -->
    </table></td>
  </tr>
  
<body>
<h4><b> C.   EKSTRA KURIKULER</b></h4>
<table width="435" border="1">
  <tr>
    <td width="26"><div align="center">No</div></td>
    <td width="186"><div align="center">Kegiatan Ekstrakurikuler</div></td>
    <td width="201"><div align="center">Kegiatan</div></td>
  </tr>
  <tr>
    <?php
          $query = mysqli_query($koneksi,"SELECT * FROM nilai_ekskul JOIN ekskul ON nilai_ekskul.xul=ekskul.xul WHERE nilai_ekskul.nis='$nis' AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <td><div align="center"><?php echo $no ?></div></td>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="3" height="54" width="215"><?php echo $data['ekstra']; ?></td>
            <td colspan="3" height="54" width="215"></td>
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
          $query = mysqli_query($koneksi,"SELECT * FROM saran WHERE saran.nis='$nis' AND smstr=2 ") or die(mysqli_error());
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
    <td width="45"><div align="center">No</div></td>
    <td width="128"><div align="center">Aspek Yg Dinilai</div></td>
    <td width="237"><div align="center" rowspan="2" colspan="3" >Semester <td>Ganjil</td><td>Genap</td></div></td>
    
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
<h4><b> G.   KONDISI DAN KESEHATAN</b></h4>
<table width="432" border="1">
  <tr>
    <td width="45"><div align="center">No</div></td>
    <td width="128"><div align="center">Aspek Fisik</div></td>
    <td width="237"><div align="center">keterangan</div></td>
  </tr>
  <?php
          $query = mysqli_query($koneksi,"SELECT * FROM kesehatan WHERE kesehatan.nis='$nis' AND smstr=2 ") or die(mysqli_error());
      $no =1;
    while ($data = mysqli_fetch_array($query)) {
    ?>
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
<p>&nbsp;</p>
</body>
</html>
<p>&nbsp;</p>
<pre>
<h3>              Mengetahui                      Jember,<?php date_default_timezone_set("Asia/Jakarta"); echo date('d F Y'); ?>                                                
            Orang Tua/Wali,                   Guru Kelas</h3>
          
          
          
          
          ........................                                0
<h3>                                               NIP :</h3>

<h3>                    Mengetahui,
                  Kepala Sekolah</h3>
              
              
              
              
              
                            0
<h3>                 NIP :</h3>
</pre>



  <?php
  

/*
//Query Untuk Menampilkan Isi Table Logistik Masuk
$query = $connect->query("SELECT * FROM v_tlk WHERE no_regist_keluar='$no_regist_keluar'");
foreach ($query as $data) {
  $tgl_regist = $data['tgl_keluar'];
  $tgl_indo = date('d-m-Y',strtotime($tgl_regist));
?>
<table>
  <tr>
    <td>Penerima : </td>
    <td><?php echo $data['nm_penerima']; ?></td>
    <td style="width: 350px;"></td>
    <td>Tanggal : </td>
    <td><?php echo $tgl_indo; ?></td>
  </tr>
  <tr>
    <td colspan="2"></td>
    <td></td>
    <td>Nomor :</td>
    <td><?php echo $no_regist_keluar; ?></td>
  </tr>
</table>
<?php } ?>
<br>
<?php 
$query2 = $connect->query("SELECT * FROM trx_detail_logistik_keluar tdlk JOIN logistik ON tdlk.id_logistik=logistik.id_logistik JOIN anggaran ON logistik.id_anggaran=anggaran.id_anggaran WHERE no_regist_keluar='$no_regist_keluar' ");
$no = 1;
foreach($query2 as $data2){
?>
<table border="1" style="border-collapse: collapse;">
  <tr>
    <td style="text-align: center;">No.</td>
    <td style="text-align: center;">Nama Obat</td>
    <td style="text-align: center;">Satuan Kemasan</td>
    <td style="text-align: center;">Jumlah Diberikan</td>
    <td style="text-align: center;">Harga Per Unit+PPN</td>
    <td style="text-align: center;">Jumlah Harga</td>
    <td style="text-align: center;">KET/ETD</td>
  </tr>
  <tr>
    <td><?php echo $no++; ?> </td>
    <td><?php echo $data2['nm_logistik']; ?></td>
    <td><?php echo $data2['satuan']; ?></td>
    <td><?php echo $data2['qty']; ?></td>
    <td><?php echo $data2['harga_satuan']+($data2['harga_satuan']/10); ?></td>
    <td><?php echo $data2['subtotal']; ?></td>
    <td><?php echo $data2['asal_anggaran']; ?></td>
  </tr>
</table>
<?php } ?>
<p style="text-align: right;">Lumajang, <?php echo $tgl_indo; ?></p>
<table align="center">
  <tr>
    <td style="text-align: center;">Kepala Instansi</td>
    <td width="150px;"></td>
    <td style="text-align: center;">Yang Menyerahkan</td>
    <td width="150px;"></td>
    <td style="text-align: center">Penerima</td>
  </tr>
  <tr style="">
    <td colspan="5" style="height: 80px;"></td>
  </tr>
  <tr>
    <?php
    $query3 = $connect->query("SELECT nama as nm_pegawai,nip,nm_penerima,nip_penerima FROM trx_logistik_keluar tlk JOIN pegawai ON tlk.id_pegawai_pimpinan=pegawai.id_pegawai WHERE no_regist_keluar='$no_regist_keluar'");
    foreach($query3 as $data3){
      $nip_pimpinan = $data3['nip'];
    ?>
    <td style="text-align: center;"><?php echo $data3['nm_pegawai'];; ?></td>
    <?php } ?>
    <td rowspan="3"></td>
    <?php
    $query4 = $connect->query("SELECT nama as nm_pegawai,nip,nm_penerima,nip_penerima FROM trx_logistik_keluar tlk JOIN pegawai ON tlk.id_pegawai_pen_jawab=pegawai.id_pegawai WHERE no_regist_keluar='$no_regist_keluar'");
    foreach($query4 as $data4){
      $nip_penanggung_jawab = $data4['nip'];
      $nip_penerima = $data4['nip_penerima'];
    ?>
    <td style="text-align: center;"><?php echo $data4['nm_pegawai']; ?></td>
    <td rowspan="3"></td>
    <td style="text-align: center"><?php echo $data4['nm_penerima']; ?></td>
    <?php } ?>
  </tr>
  
  <tr>
    <td><hr style="color: black;"></td>
    <td><hr style="color: black;"></td>
    <td><hr style="color: black"></td>
  </tr>
  <tr>
    <td style="text-align: center;"><?php echo $nip_pimpinan; ?></td>
    <td style="text-align: center;"><?php echo $nip_penanggung_jawab; ?></td>
    <td style="text-align: center"><?php echo $nip_penerima; ?></td>

  </tr> 
</table>


<!--CONTOH Code END-->
 
*/
?>
<?php

// $html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
// ob_end_clean();
// //Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
// $mpdf->WriteHTML(utf8_encode($html));
// $mpdf->Output($nama_dokumen.".pdf" ,'I');
// exit;
// header("location:index.php?halaman=transaksi");
?>




