                    <div class="form-group">
                      
                      <label  class="col-sm-2 control-label">Nilai</label>
                      <div class="col-sm-3 ">
                        <input type="number" class="form-control"  name="jumlah" placeholder="nilai" id="nilai" required oninvalid="this.setCustomValidity('masukkan nilai')" oninput="setCustomValidity("")">
                      </div>
                      <div class="col-md-3">
                        <button type="submit" class="btn btn-info" name="tambah" id="btn">Tambah</button>
                      </div>
                    </div>
                    <div class="form-group" >
                      <div class="col-sm-8 col-sm-offset-2">
                        <table class="table table-striped table-bordered" id="example1">
                          <thead>
                          <tr>
                            <th>Nis</th>
                            <th>Nama Siswa</th>                
                            <th>Nilai</th>
                            <th>Pilihan</th>         
                          </tr>
                          </thead>
                          <tbody >
                            <?php 
                            $query = mysqli_query($koneksi,"SELECT * FROM nilai JOIN siswa ON nilai.nis=siswa.nis JOIN kopetensi ON nilai.kd=kopetensi.kd") or die(mysqli_error());
                            ;
                            while ($data = mysqli_fetch_array($query)) {  
                          ?>  
                            <tr>
                              
                              <td><?php echo $data['nama_siswa']; ?></td>
                              <td><?php echo $data['kd']; ?></td>
                              <td><?php echo $data['nilai']; ?></td>
                              <td>
                                <a class="btn btn-danger " href="?halaman=transaksi&delete=<?php echo $data['id_barang'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"> <li class="fa fa-close"></li> </a>

                              </td>
                            </tr>
                          <?php  }  ?>  

                          </tbody>
                          <tfoot> 
                          </tfoot> 
                        </table>
                       </div> 
                    </div>
