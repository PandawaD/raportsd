<section class="content">
	<div class="data">
		<div class="col-md-11">
			<div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Semua Guru</h3>
            </div>
    
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>NIP</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Status</th>
                    <th>Foto</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  
                  $query = mysqli_query($koneksi,"SELECT * FROM guru ORDER BY nama_guru ASC") or die(mysqli_error());
                  $no=1;
                  while ($data = mysqli_fetch_array($query)) {  
                ?>  
                
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['nip']; ?></td>
                    <td><?php echo $data['nama_guru']; ?></td>
                    <td><?php echo $data['jenkel']; ?></td>
                    <td><?php echo $data['tempat_lahir']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['status']; ?></td>
                    <td><?php echo $data['foto']; ?></td>
                  </tr>
                  <?php $no++;} ?>
                </tbody>
              </table>
            </div>
      </div>
    </div>
            <!-- /.box-body -->
          </div>
		</div>
	</div>
</section>
