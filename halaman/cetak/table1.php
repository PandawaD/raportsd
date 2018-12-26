<?php
 // Define relative path from this script to mPDF
$nama_dokumen='Cetak Raport S1 -';
include '../../config/koneksi.php';
include '../../dist/mpdf60/mpdf.php';
// $nis = $_GET['val'];
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
 
//Beginning Buffer to save PHP variables and HTML tags
ob_start(); 
?>

<h3><b><p align="center">RAPOR PESERTA DIDIK DAN PROFIL PESERTA DIDIK </h3></b></p>
<pre>
Nama Peserta Didik	: Muhammad Khoiriri	
NISN/NIS		: 001						Kelas			: 1
Nama Sekolah		: MI NURUL HUDA					Semester		: 1
Alamat Sekolah		: SUKOSARI					Tahun Pelajaran	    	: 2010/2011
</pre>
<h4><b> A.   SIKAP</b></h4>
<table width="500" border="1">
  <tr>
  
    <td style="background-color: #708090 ;" colspan="2"><div align="center">Deskripsi</div></td>
  </tr>
  <tr>
    <td width="68"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="104" width="215">Sikap Spritual</td>
      </tr>
    </table></td>
    <td width="302"><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="4" height="104" width="444">Ananda 0 baik dalam ketaatan beribadah,    berperilaku syukur, berdoa sebelum dan sesudah melakukan kegiatan, toleransi    dalam beribadah, </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="3" height="104" width="215">Sikap Sosial</td>
      </tr>
    </table></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="4" height="104" width="444"><p>Ananda 0 baik dalam sikap jujur, disiplin,    tanggung jawab, santun, peduli, percaya diri, </p>
          <p>&nbsp;</p></td>
      </tr>
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
  <tr>
    <td>1</td>
    <td>Pendidikan Agama dan Budi Pekerti</td>
    <td><div align="center">78</div></td>
    <td><div align="center">B</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="272" width="165">Ananda    0 sangat baik dalam memahami kisah keteladanan Nabi Muhammad saw., cukup baik    dalam memahami adanya Allah Swt. yang Maha Pengasih dan Maha Penyayang</td>
      </tr>
    </table></td>
    <td><div align="center">78</div></td>
    <td><div align="center">B</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="272" width="209">Ananda    0 sangat baik dalam memahami kisah keteladanan Nabi Muhammad saw., cukup baik    dalam memahami adanya Allah Swt. yang Maha Pengasih dan Maha Penyayang</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Pendidikan Pancasila dan Kewargaan negara</td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="241" width="165">Ananda    0 perlu bimbingan dalam mengenal simbol sila-sila Pancasila dalam lambang    negara “Garuda Pancasila” dan mengenal simbol sila-sila Pancasila dalam    lambang negara “Garuda Pancasila”.</td>
      </tr>
    </table></td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="241" width="165">Ananda    0 perlu bimbingan dalam mengenal simbol sila-sila Pancasila dalam lambang    negara “Garuda Pancasila” dan mengenal simbol sila-sila Pancasila dalam    lambang negara “Garuda Pancasila”.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>3</td>
	
    <td><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>Bahasa Indosesia</td>
    <td><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><div align="center">0</div></td>
    <td><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="440" width="165">Ananda    0 perlu bimbingan dalam menjelaskan kegiatan persiapan membaca permulaan    (cara duduk wajar dan baik, jarak antara mata dan buku, cara memegang buku,    cara membalik halaman buku, dan menjelaskan kegiatan persiapan membaca    permulaan (cara duduk wajar dan baik, jarak antara mata dan buku, cara    memegang buku, cara membalik halaman buku,.</td>
      </tr>
    </table></td>
    <td><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><div align="center">15</div></td>
    <td><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="378" width="165">Ananda    0 sangat baik dalam menyampaikan penjelasan (berupa gambar dan tulisan)    tentang anggota tubuh dan panca indera serta perawatannya menggunakan    kosakata bahasa Indonesia dengan bantuan bahasa daerah secara lisan dan/atau    tulis, perlu bimbingan dalam mempraktikkan kegiatan persiapan membaca    permulaan (duduk wajar dan baik, jarak antara mata dan buku, cara memegang    buku, cara membalik.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>4</td>
    <td>Matematika</td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="321" width="165">Ananda    0 perlu bimbingan dalam menjelaskan makna bilangan cacah sampai dengan 99    sebagai banyak anggota suatu kumpulan objek dan menjelaskan makna bilangan    cacah sampai dengan 99 sebagai banyak anggota suatu kumpulan objek.</td>
      </tr>
    </table></td>
    <td><div align="center">O</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="321" width="165">Ananda    0 perlu bimbingan dalam menjelaskan makna bilangan cacah sampai dengan 99    sebagai banyak anggota suatu kumpulan objek dan menjelaskan makna bilangan    cacah sampai dengan 99 sebagai banyak anggota suatu kumpulan objek.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>5</td>
    <td>Seni Budaya dan Prakarya</td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="213" width="165">Ananda    0 perlu bimbingan dalam mengenal karya ekspresi dua dan tiga dimensi dan    mengenal karya ekspresi dua dan tiga dimensi.</td>
      </tr>
    </table></td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="213" width="165">Ananda    0 perlu bimbingan dalam mengenal karya ekspresi dua dan tiga dimensi dan    mengenal karya ekspresi dua dan tiga dimensi.</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>6</td>
    <td>Pendidikan Jasmani,Olahraga dan Kesehatan</td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td>&nbsp;</td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>7</td>
    <td>Muatan lokal</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>A</td>
    <td>Bahasa Madura</td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="120" width="165">Ananda    0 perlu bimbingan dalam pengetahuan Bahasa Madura</td>
      </tr>
    </table></td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="120" width="165">Ananda    0 perlu bimbingan dalam pengetahuan Bahasa Madura</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>B</td>
    <td>Baca Tulis Al-Qur'an</td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="120" width="165">Ananda    0 perlu bimbingan dalam pengetahuan Bahasa Madura</td>
      </tr>
    </table></td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="120" width="165">Ananda    0 perlu bimbingan dalam pengetahuan Bahasa Madura</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>C</td>
    <td>Bahasa Inggris</td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="120" width="165">Ananda    0 perlu bimbingan dalam pengetahuan Bahasa Madura</td>
      </tr>
    </table></td>
    <td><div align="center">0</div></td>
    <td><div align="center">D</div></td>
    <td><table cellspacing="0" cellpadding="0">
      <tr>
        <td height="120" width="165">Ananda    0 perlu bimbingan dalam pengetahuan Bahasa Madura</td>
      </tr>
    </table></td>
  </tr>
</table>




<h4><b> C.   EKSTRA KURIKULER</b></h4>
<table width="435" border="1">
  <tr>
    <td width="26"><div align="center">No</div></td>
    <td width="186"><div align="center">Kegiatan Ekstrakurikuler</div></td>
    <td width="201"><div align="center">Kegiatan</div></td>
  </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td><div align="center">
      <table cellspacing="0" cellpadding="0">
          <tr>
            <td colspan="3" height="54" width="215">Praja Muda Karana (Pramuka)</td>
          </tr>
      </table>
    </div></td>
    <td><div align="center">-</div></td>
  </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td><div align="center">-</div></td>
    <td><div align="center">-</div></td>
  </tr>
  <tr>
    <td><div align="center">3</div></td>
    <td><div align="center">-</div></td>
    <td><div align="center">-</div></td>
  </tr>
  <tr>
    <td><div align="center">4</div></td>
    <td><div align="center">-</div></td>
    <td><div align="center">-</div></td>
  </tr>
</table>
<h4><b> D.   SARAN-SARAN</b></h4>
<table width="430" height="81" border="1">
  <tr>
    <td width="420"><div align="center">Rajin Belajar agar dapat nilai yang baik</div></td>
  </tr>
</table>
<h4><b> E.   PRESTASI</b></h4>
<table width="432" border="1">
  <tr>
    <td width="45"><div align="center">No</div></td>
    <td width="128"><div align="center">Jenis Prestasi</div></td>
    <td width="237"><div align="center">Kegiatan</div></td>
  </tr>
  <tr>
    <td><div align="center">1</div></td>
    <td><div align="center">Kesenian</div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">2</div></td>
    <td><div align="center">Olahraga</div></td>
    <td><div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<h4><b> F.   KETIDAKHADIRAN</b></h4>
<table width="235" border="1">
  <tr>
    <td width="126"> <div align="left">Sakit</div></td>
    <td width="93"><div align="left">-Hari</div></td>
  </tr>
  <tr>
    <td><div align="left">Ijin</div></td>
    <td><div align="left">-Hari</div></td>
  </tr>
  <tr>
    <td><div align="left">Tanpa Keterangan</div></td>
    <td><div align="left">-Hari</div></td>
  </tr>
</table>
<p>&nbsp;</p>
<
</html>
<p>&nbsp;</p>
<pre>
<h3>				Mengetahui 			Bondowoso,17 Juni 2017																								
			      Orang Tua/Wali, 		              Guru Kelas</h3>
					
					
					
					
				........................                                0
<h3>							                  NIP</h3>

<h3> 					          Mengetahui,
					        Kepala Sekolah</h3>
							
							
							
							
							
							        0
<h3>                                                      NIP</h3>
</pre>
<?php

$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>
