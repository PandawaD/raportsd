<section class="content">
	<div class="data">
		<div class="col-md-12">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Semua Siswa</h3>
            </div>
		
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped dataTable no-footer">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>NIS</th>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Nama Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        
                        $query = mysqli_query($koneksi,"SELECT * FROM siswa ORDER BY nama_siswa ASC") or die(mysqli_error());
                        $no=1;
                        while ($data = mysqli_fetch_array($query)) {  
                      ?>  
                      
                        <tr>
                          <td><?php echo $no ;?></td>
                          <td><?php echo $data['foto']; ?></td>
                          <td><?php echo $data['nis'];?></td>
                          <td><?php echo $data['nisn'];?></td>
                          <td><?php echo $data['nama_siswa'];?></td>
                          <td><?php echo $data['kelas'];?></td>
                          <td><?php echo $data['tempat_lahir'];?></td>
                          <td><?php echo $data['tgl_lahir'];?></td>
                          <td><?php echo $data['jenkel'];?></td>
                          <td><?php echo $data['agama'];?></td>
                          <td><?php echo $data['ayah'];?></td>
                          <td><?php echo $data['ibu'];?></td>
                          <td><?php echo $data['alamat'];?></td>      
                        </tr>
                        <?php $no++;} ?>
                    </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
    </section>
