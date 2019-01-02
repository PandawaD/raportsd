  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less --> 
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/m.png" class="img-circle" alt="User Image">
        </div>  
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>

      </div>
      <!-- search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Home</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <?php if($_SESSION['level_user']=='admin'){ ?>
          <ul class="treeview-menu">
            <li class="active"><a href="?halaman=siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li class="active"><a href="?halaman=guru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
            <li class="active"><a href="?halaman=mapel"><i class="fa fa-circle-o"></i> Data Mapel</a></li>
            <li class="active"><a href="?halaman=kategori"><i class="fa fa-circle-o"></i> Data Kategori</a></li>
            <li class="active"><a href="?halaman=kelas"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
            <li class="active"><a href="?halaman=kopetensi"><i class="fa fa-circle-o"></i> Data KD</a></li>
            <li class="active"><a href="?halaman=subtema"><i class="fa fa-circle-o"></i> Sub-Tema</a></li>
            <li class="active"><a href="?halaman=deskripsi"><i class="fa fa-circle-o"></i> Deskripsi</a></li>
            <li class="active"><a href="?halaman=tahun"><i class="fa fa-circle-o"></i> Tahun Ajaran</a></li>
          </ul>
          <?php } ?>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Nilai Per-Kelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <?php if($_SESSION['level_user']=='admin'|| $_SESSION['level_user']=='g1'){ ?>
            <li><a href="?halaman=kelas1"><i class="fa fa-circle-o"></i> Nilai Siswa Kelas 1</a></li>
            <?php } ?>
            <?php if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g2'){ ?>
            <li><a href="?halaman=kelas2"><i class="fa fa-circle-o"></i> Nilai Siswa Kelas 2</a></li>
            <?php }if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g3'){ ?>
            <li><a href="?halaman=kelas3"><i class="fa fa-circle-o"></i> Nilai Siswa Kelas 3</a></li>
            <?php }if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g4'){ ?>
            <li><a href="?halaman=kelas4"><i class="fa fa-circle-o"></i> Nilai Siswa Kelas 4</a></li>
            <?php }if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g5'){ ?>
            <li><a href="?halaman=kelas5"><i class="fa fa-circle-o"></i> Nilai Siswa Kelas 5</a></li>
            <?php } if($_SESSION['level_user']=='admin'|| $_SESSION['level_user']=='g6'){ ?>
            <li><a href="?halaman=kelas6"><i class="fa fa-circle-o"></i> Nilai Siswa Kelas 6</a></li>
            <?php } ?>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Kelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?halaman=data_siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="?halaman=data_guru"><i class="fa fa-circle-o"></i> Data Guru</a></li>
            <?php if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g1'){ ?>
            <li><a href="?halaman=data_siswa_kelas1"><i class="fa fa-circle-o"></i> Data Siswa Kelas 1</a></li>
            <?php }if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g2'){ ?>
            <li><a href="?halaman=data_siswa_kelas2"><i class="fa fa-circle-o"></i> Data Siswa Kelas 2</a></li>
            <?php }if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g3'){ ?>
            <li><a href="?halaman=data_siswa_kelas3"><i class="fa fa-circle-o"></i> Data Siswa Kelas 3</a></li>
            <?php }if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g4'){ ?>
            <li><a href="?halaman=data_siswa_kelas4"><i class="fa fa-circle-o"></i> Data Siswa Kelas 4</a></li>
            <?php }if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g5'){ ?>
            <li><a href="?halaman=data_siswa_kelas5"><i class="fa fa-circle-o"></i> Data Siswa Kelas 5</a></li>
            <?php }if($_SESSION['level_user']=='admin'||$_SESSION['level_user']=='g6'){ ?>
            <li><a href="?halaman=data_siswa_kelas6"><i class="fa fa-circle-o"></i> Data Siswa Kelas 6</a></li>
            <?php } ?>
          </ul>
        </li>
        <?php if($_SESSION['level_user']=='admin'){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="halaman/login/login.php"><i class="fa fa-circle-o"></i> Login</a></li>

            <li><a href="?halaman=register"><i class="fa fa-circle-o"></i> Register</a></li>
            
          </ul>
        </li>
        <?php } ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
