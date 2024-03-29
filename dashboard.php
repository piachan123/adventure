<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location: login.php");
  exit(); // Penting untuk menghentikan eksekusi skrip setelah mengarahkan pengguna
} else {
  // Konten halaman dashboard di sini
  // ...
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span  class="logo-mini">CSO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">CSO</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
            <ul class="dropdown-menu">
              <li class="header">You have ages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        </div>
                      <h4>
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                     
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                    </a>
                  </li>
                  <!-- end task item -->
               
                  <!-- end task item -->
                  
                  <!-- end task item -->
                  <!-- end task item -->
                </ul>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">
              <?php echo $_SESSION['username']; ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                <?php echo $_SESSION['username']; ?>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/consina.jpeg" href="p.php" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <h4>Consina Outdoor</h4>
        </div>
      </div>
      
  <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span> Dashboard</span></a></li>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="barang.php"><i class="fa fa-circle-o"></i> Barang</a></li>
            <li><a href="user.php"><i class="fa fa-circle-o"></i> User</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="peminjaman.php"><i class="fa fa-circle-o"></i> Peminjaman</a></li>
            <li><a href="pengembalian.php"><i class="fa fa-circle-o"></i> Pengembalian</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <?php
// Menggunakan include untuk menyertakan file koneksi.php
include "koneksi.php";

// Mengecek apakah variabel pencarian (q) telah diset dan tidak kosong
if (isset($_GET['q']) && !empty($_GET['q'])) {
    $search_query = $_GET['q'];

    // Menyiapkan pernyataan SQL untuk pencarian data barang berdasarkan nama atau atribut lainnya
    $sql = "SELECT * FROM barang WHERE nama_barang LIKE '%$search_query%' OR harga LIKE '%$search_query%'";
    
    // Menjalankan pernyataan SQL
    $result = $koneksi->query($sql);

    // Menampilkan hasil pencarian
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Tampilkan informasi barang, sesuai kebutuhan
            echo "Nama Barang: " . $row["nama_barang"] . "<br>";
            echo "Jumlah: " . $row["jumlah"] . "<br>";
            echo "Harga: " . $row["harga"] . "<br><br>";
        }
    } else {
        echo "Tidak ada hasil pencarian.";
    }
    
    // Menutup koneksi
}
?>

      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
  
    </section>

    <section class="content">
      <div style="border: 1px solid #ddd; border-radius: 4px; padding: 20px; width: 1065px; margin: 20px; background-color: #fffefc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="display: flex; align-items: center;">
          <img src="dist/img/camp.jpeg" alt="User Image" style="width: 250px; margin-right: 20px;">
          <div style="text-align: center;">
            <div style="font-family: cambria; font-size: 24px; font-weight: bold; margin-bottom: 10px;">Selamat Datang Di Consina Outdoor</div>
            <div style="font-family: cambria; font-size: 16px; color: #333;">Kami menyediakan perlengkapan outdoor terbaik untuk menjadikan setiap petualanganmu di alam terbuka sebagai pengalaman yang tak terlupakan. Dengan koleksi kami yang luas, Anda akan menemukan tenda, peralatan hiking, pakaian, dan aksesori yang andal, stylish, serta tahan lama, yang akan membantu Anda menjelajahi alam bebas dengan penuh percaya diri dan kenyamanan.</div>
          </div>
          
        </div>
      </div>
      <div style="text-align: center;">
        <div style="font-size: 20px; font-weight: bold; margin-top: 20px;">Produk Kami</div>
      </div>
      <div style="display: flex; justify-content: space-between;">
      <?php
include "koneksi.php";
$tampil = mysqli_query($koneksi, "select * from barang");

// Memeriksa apakah ada data
if (mysqli_num_rows($tampil) > 0) {
    foreach ($tampil as $row) {
        // Menampilkan data dalam format card
?>

        <!-- Card 1 -->
        <div style="border: 1px solid #ddd; border-radius: 4px; padding: 20px; width: 30%; margin-top: 20px; text-align: center; position: relative; background-color: #fffefc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <h4 style="font-weight: bold;"><?php echo $row["nama_barang"]; ?></h4>
          <img src="dist/img/kap2.png" alt="Produk 1" style="width: 50%; height: auto; display: block; margin: 0 auto;">
          <p>Deskripsi : <?php echo $row["deskripsi"]; ?></</p>
          <p>harga : <?php echo $row["harga"]; ?></p>
        <a href="#" class="small-box-footer">Pesan sekarang <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        <?php
    }
} else {
    echo "Tidak ada data.";
}
?>

        
        <!-- Card 2 -->
        <div style="border: 1px solid #ddd; border-radius: 4px; padding: 20px; width: 30%; margin-top: 20px; text-align: center; position: relative; background-color: #fffefc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <h4 style="font-weight: bold;">Flysheet</h4>
          <br>
          <img src="dist/img/fly.png" alt="Produk 1" style="width: 75%; height: auto; display: block; margin: 0 auto;">
          <p>Terbuat dari bahan yang tahan air atau dilapisi dengan lapisan tahan air. Ini menjaga tenda Anda tetap kering bahkan dalam hujan deras.</p>
          <p>Ukuran menyesuaikan kapasitas tenda.</p>
          <br>
          <br>
          <a href="#" class="small-box-footer">Pesan sekarang <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    
        <!-- Card 3 -->
        <div style="border: 1px solid #ddd; border-radius: 4px; padding: 20px; width: 30%; margin-top: 20px; text-align: center; position: relative; background-color: #fffefc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <h4 style="font-weight: bold;">Senter</h4>
          <br>
          <img src="dist/img/senter.png" alt="Produk 1" style="width: 50%; height: auto; display: block; margin: 0 auto;">
          <br>
          <p>Dirancang memiliki fitur tahan air dan tahan guncangan, sehingga mereka dapat digunakan dalam berbagai kondisi cuaca dan aktivitas outdoor yang kasar. Ini menjadikannya sangat andal saat hujan atau dalam situasi darurat.</p>
          <p>Free 2 baterai setiap peminjaman.</p>
          <br>
          <a href="#" class="small-box-footer">Pesan sekarang <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div style="display: flex; justify-content: space-between;">
        <!-- Card 1 -->
        <div style="border: 1px solid #ddd; border-radius: 4px; padding: 20px; width: 30%; margin-top: 20px; text-align: center; position: relative; background-color: #fffefc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <h4 style="font-weight: bold;">Carrier</h4>
          <img src="dist/img/carrier.png" alt="Produk 1" style="width: 50%; height: auto; display: block; margin: 0 auto;">
          <p>Didesain ergonomis, ringan, dan stylish, carrier ini hadir dengan kapasitas besar dan kompartemen pintar. Tahan air, tahan aus, serta dilengkapi fitur keamanan, membuatnya ideal untuk menjelajahi alam terbuka. </p>
          <p>Tersedia mulai dari kapasitas 20L sampai 60L.</p>
          <a href="#" class="small-box-footer">Pesan sekarang <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        
        <!-- Card 2 -->
        <div style="border: 1px solid #ddd; border-radius: 4px; padding: 20px; width: 30%; margin-top: 20px; text-align: center; position: relative; background-color: #fffefc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <h4 style="font-weight: bold;">Nesting</h4>
          <br>
          <img src="dist/img/nesting.png" alt="Produk 1" style="width: 50%; height: auto; display: block; margin: 0 auto;">
          <p>Di desain dengan inovatif yang memungkinkan setiap bagian saling bersarang atau dikompak, produk ini memudahkan penyimpanan dan penggunaan yang efisien. Dari perabotan hingga perkakas dapur, nesting memberikan kemudahan tanpa batas untuk ruang yang lebih rapi dan terorganisir.</p>
          <a href="#" class="small-box-footer">Pesan sekarang <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    
        <!-- Card 3 -->
        <div style="border: 1px solid #ddd; border-radius: 4px; padding: 20px; width: 30%; margin-top: 20px; text-align: center; position: relative; background-color: #fffefc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
          <h4 style="font-weight: bold;">Kursi dan Meja</h4>
          <img src="dist/img/kursi.png" alt="Produk 1" style="width: 75%; height: auto; display: block; margin: 0 auto; margin-top: -30px; position: relative; z-index: 1;">
          <p style="margin-top: -20px;">Dengan desain ringkas yang dapat dilipat, mudah dibawa, dan cepat disiapkan, produk ini menghadirkan kenyamanan sejati di setiap perjalanan. Kursi yang kokoh memberikan dukungan sempurna, sementara meja portabel memberikan tempat ideal untuk bersantap atau menata perlengkapan.</p>
          <a href="#" class="small-box-footer">Pesan sekarang <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        
        
      </div>
    </section>
    
    
    
    
    
    

      </div> 
      <!-- /.row (main row) -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <center><footer class="main-footer">
    </div>Copyright &copy; 2023-2024 
    <strong>Consina Outdoor.</strong> 
  </footer>
  </center>
    <div class="pull-right hidden-xs">

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<?php
}
?>