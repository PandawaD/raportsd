<?php  
          $query = mysqli_query($koneksi,"SELECT * FROM pk JOIN siswa ON pk.nis=siswa.nis JOIN mapel ON pk.kode_mapel=mapel.kode_mapel  WHERE pk.nis='$nis' AND pk.kode_kategori=3  AND smstr=1 ") or die(mysqli_error());
          $no = 1;
          while ($data2 = mysqli_fetch_array($query)) {
        
        ?>
    <td><div align="center"><?php echo $data2['nilai']; ?></div></td>
        
    <?php if (100 > $data2['nilai'] && $data2['nilai'] > 95 ){?>
    <td><div align="center"><?php echo ("A") ?></div></td>
    <?php }else if (94 > $data2['nilai'] && $data2['nilai'] > 89 ){?>
    <td><div align="center"><?php echo ("A -") ?></div></td>
    <?php }else if (88 > $data2['nilai'] && $data2['nilai'] > 75 ){?>
    <td><div align="center"><?php echo ("B +") ?></div></td>
    <?php } ?>

    <?php  
          $sql2 = mysqli_query($koneksi,"SELECT * FROM deskripsi WHERE kode_kategori=3 ") or die(mysqli_error());
          while ($row2 = mysqli_fetch_array($sql2)) {
    ?>
    <?php if (100 > $data2['nilai'] && $data2['nilai'] > 95 ){?>
    <td><div align="center"><?php echo $row2['kat1']; ?></div></td>
    <?php }else if (94 > $data2['nilai'] && $data2['nilai'] > 89 ){?>
    <td><div align="center"><?php echo $row2['kat2']; ?></div></td>
    <?php }else if (88 > $data2['nilai'] && $data2['nilai'] > 75 ){?>
    <td><div align="center"><?php echo $row2['kat3']; ?></div></td>
    <?php } ?>

    <?php } ?>

    <?php }  ?>
