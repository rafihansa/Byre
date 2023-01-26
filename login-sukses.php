<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login-sukses.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.png" type="image/gif" />

    <title>The Byre Project Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/style-lagi.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style-login-byre.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
                
                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>
                
                </a>
                <ul class="list-unstyled components">
                    <div style="text-align:center">
                        <img src="images/logo.png" alt="Logo">
                    </div>
                        <li class="active"> <a href="#">Add</a> </li>
                        <li><a href="#about">Produk Kami </a> </li>
                        <li><a href="#work">Cara Kerja</a> </li>
                        <li style="margin-bottom: 500px"><a href="#contact">Hubungi Kami </a> </li>
                        <li class="remove"><a href="#">Remove</a></li>
                        <li class="logout"><a href="logout.php">Logout</a></li>
                    
                    </div>
                </ul>
            </nav>
        </div>
        <!-- Bagian atas -->
        <div id="content">
            <header>
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="full">
                                    <div class="center-desk">   
                                        <ul class="btn">
                                            
                                            <!-- Nav Item - Alerts -->
                                            <li class="nav-item dropdown no-arrow mx-1">
                                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <img class="img-profile" src="images/bell-regular.svg">    
                                                     <!-- Counter - Alerts -->
                                                        <span class="badge badge-danger">3+</span>
                                                    </a>
                                                    <!-- Dropdown - Alerts -->
                                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                                    <h6 class="dropdown-header">
                                                        Pemberitahuan Kondisi Sapi
                                                    </h6>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="mr-3">
                                                            <div class="icon-circle bg-primary">
                                                                <i class="fas fa-file-alt text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="small text-gray-500">December 12, 2019</div>
                                                            <span class="font-weight-bold">Sapi Satu dalam kondisi kurang baik!</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="mr-3">
                                                            <div class="icon-circle bg-success">
                                                                <i class="fas fa-donate text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="small text-gray-500">December 7, 2019</div>
                                                            Sapi dua dalam kondisi baik!
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                                        <div class="mr-3">
                                                            <div class="icon-circle bg-warning">
                                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="small text-gray-500">December 2, 2019</div>
                                                            Sapi tiga dalam kondisi sehat!
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item text-center small text-gray-500" href="#">Tampilkan Seluruh Pemberitahuan</a>
                                                </div>
                                            </li>


                                            <li class="nav-item dropdown no-arrow">
                                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];?></span>
                                    
                                                <img class="img-profile rounded-circle" src="images/undraw_profile.svg">
                                                </a>
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Profile
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Settings
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Activity Log
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Pindah Ke Laman Biogas
                                                    </a>
                                                </div>
                                            
                                            <li><button type="button" id="sidebarCollapse">
                                            <img src="images/menu_icon.png" alt="#" />
                                            </button>
                                            </li>
                                       </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- End bagian atas -->
        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                
                    <h1 class="titlepage">Dashboard</h1>
            </div>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                   
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid align-self-center">
                   
                    <!-- Content Row -->
                    <div class="row content-center">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Sapi Terdaftar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">5 Ekor</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kondisi
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50% sehat</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Notifikasi Terlewat</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">
                        
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Suhu Sapi</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="align-content-center">
                            
                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Catatan Pengembang</h6>
                                </div>
                                <div class="card-body">
                                    <p>The byre project terdiri atas dua buah tugas akhir yaitu The Byre Intelligent System dan The Byre Gasification Fertilizer, kedua aplikasi tersebut saat ini masih dalam pengembangan pertama sehingga memerlukan pengembangan lebih baik lagi dimasa depan</p>
                                    <p class="mb-0">Ini adalah versi 0.1 dari The Byre Project</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; The Byre Project 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
    
    <!-- Js File -->
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    <!-- Bootstrap core JavaScript-->
    <script src="js/revolution/js/jquery.min.js"></script>
    <script src="js/revolution/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/chart-area-demo.js"></script>
    <script src="js/chart-pie-demo.js"></script>

        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function() {
                    $('#sidebar').removeClass('active');
                    $('.overlay').removeClass('active');
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').addClass('active');
                    $('.overlay').addClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });

                $(".zoom").hover(function() {

                    $(this).addClass('transition');
                }, function() {

                    $(this).removeClass('transition');
                });
            });
        </script>
        <script src="./upup.min.js"></script>
        <script>
            UpUp.start({
                'content-url': 'offline.html',
                'assets': ['./offline.jpg', './pwa-byre/assets/css/style.css', './offline.jpg']
            });
        </script>
</body>

</html>