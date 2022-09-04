<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request table</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/blood.webp" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="index.php" class="dropdown-item">
                        <i class="fas fa-arrow-left mr-2"></i> Log out
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="Dashboard.php" class="brand-link">
            <img src="dist/img/blood.webp" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><b>Digital BloodBank</b></span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="Dashboard.php" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Request_from.php" class="nav-link">
                            <i class="nav-icon fas fa-arrow-circle-right"></i>
                            <p>
                                Request Form
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Request_list_all.php" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Request List(All)
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Request_list_others.php" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Request List(others)
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="Request_list_others.php" class="nav-link">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Accepted Request List
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="blood-typs.php" class="nav-link">
                            <i class="nav-icon fas fa-book-open"></i>
                            <p>
                                Blood Types
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="bloodbanks_link.php" class="nav-link">
                            <i class="nav-icon fas fa-link"></i>
                            <p>
                                BloodBanks link
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <h1>Blood Bank Name And Visit Link</h1>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>Freedom BlOOD BANK</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.who.int/philippines/news/feature-stories/detail/20-health-tips-for-2020" target="_blank">Freedom Blood Bank</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>CHITTAGONG BLOOD DONATION CLUB</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/157511066385848" target="_blank">Chittagong Blood Donation club</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>CHITTAGONG BLOOD BANK</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/561481984790734/?ref=share" target="_blank">Chittagong Blood Blank</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>CHITTAGONG BLOOD BANK</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/1515758155370981/?ref=share" target="_blank">Chittagong Blood Blank</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>BLOOD BANK CHITTAGONG</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/812275212441071/?ref=share" target="_blank">Blood Blank Chittagong</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>Blood Fighters(রক্ত সৈনিক)</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/BloodFighters/?ref=share" target="_blank">Blood Fighters </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>চট্টগ্রাম ব্লাড ডোনেট এসোসিয়েশন</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/519914068591638/?ref=share" target="_blank">চট্টগ্রাম ব্লাড ডোনেট এসোসিয়েশন</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>বাংলাদেশ ব্লাড ব্যাংক</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/887841055052437/" target="_blank">বাংলাদেশ ব্লাড ব্যাংক</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>রক্তদানের অপেক্ষায় বাংলাদেশ</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/roktodaner.opekkhay.bangladesh/?ref=share" target="_blank">রক্তদানের অপেক্ষায় বাংলাদেশ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center"><dt>🩸স্বেচ্ছায় রক্তদান পরিবার 🩸</dt></div>
                            <div class="card-body">
                                Visit Here->
                                <a href="https://www.facebook.com/groups/3778778295550427/?ref=share" target="_blank">স্বেচ্ছায় রক্তদান পরিবার</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card -->
    </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        #
    </div>
    <strong>Project-> </strong> Md Faisal CSE 18(day) ID:CSE 01806747.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>
