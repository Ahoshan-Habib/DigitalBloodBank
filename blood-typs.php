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
                        <a href="accepted_request_list.php" class="nav-link">
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
                    <h1>Find out your blood type</h1>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="row justify-content-center">
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <div class="card">
                    <img src="dist/img/bg.png" class="card-img-top">
                </div>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">A+</div>
                            <div class="card-body">
                                If you are A+: You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">A-</div>
                            <div class="card-body">
                                If you are A-: You can give blood to A-, A+, AB- and AB+. You can receive blood from A- and O-.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">B+</div>
                            <div class="card-body">
                                You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">B-</div>
                            <div class="card-body">
                                If you are B-: You can give blood to B-, B+, AB+ and AB-, You can receive blood from B- and O-.You can give blood to B+ and AB+.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">AB+</div>
                            <div class="card-body">
                                People with AB+ blood can receive red blood cells from any blood type. This means that demand for AB+ can donate with AB only.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">AB-</div>
                            <div class="card-body">
                                AB- patients can receive red blood cells from all negative blood types.
                                AB- can give red blood cells to both AB- and AB+ blood types.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">O+</div>
                            <div class="card-body">
                                Blood O+ can donate to A+, B+, AB+ and O+ Blood
                                Group O can donate red blood cells to anybody. It's the universal donor.
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                        <div class="card">
                            <div class="card-header text-center">O-</div>
                            <div class="card-body">
                                O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood
                                People with O negative blood can only receive red cell donations from O negative donors.
                            </div>
                        </div>
                    </div>
                    <div class="col-form-label">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">Health tips</div>
                                <div class="card-body">
                                    <dt>Eat a healthy diet</dt>
                                    <dd>Eat a combination of different foods, including fruit, vegetables, legumes, nuts and whole grains. Adults should eat at least five portions (400g) of fruit and vegetables per day. You can improve your intake of fruits and vegetables by always including veggies in your meal; eating fresh fruit and vegetables as snacks; eating a variety of fruits and vegetables; and eating them in season. By eating healthy, you will reduce your risk of malnutrition and noncommunicable diseases (NCDs) such as diabetes, heart disease, stroke and cancer.</dd>
                                    <dt> Consume less salt and sugar</dt>
                                    <dd>On the other hand, consuming excessive amounts of sugars increases the risk of tooth decay and unhealthy weight gain. In both adults and children, the intake of free sugars should be reduced to less than 10% of total energy intake. This is equivalent to 50g or about 12 teaspoons for an adult. WHO recommends consuming less than 5% of total energy intake for additional health benefits. You can reduce your sugar intake by limiting the consumption of sugary snacks, candies and sugar-sweetened beverages.</dd>
                                    <dt>Be active</dt>
                                    <dd>Physical activity is defined as any bodily movement produced by skeletal muscles that requires energy expenditure. This includes exercise and activities undertaken while working, playing, carrying out household chores, travelling, and engaging in recreational pursuits. The amount of physical activity you need depends on your age group but adults aged 18-64 years should do at least 150 minutes of moderate-intensity physical activity throughout the week. Increase moderate-intensity physical activity to 300 minutes per week for additional health benefits.</dd>
                                    <dt>Don’t smoke</dt>
                                    <dd>Smoking tobacco causes NCDs such as lung disease, heart disease and stroke. Tobacco kills not only the direct smokers but even non-smokers through second-hand exposure. Currently, there are around 15.9 million Filipino adults who smoke tobacco but 7 in 10 smokers are interested or plan to quit.
                                        If you are currently a smoker, it’s not too late to quit. Once you do, you will experience immediate and long-term health benefits. If you are not a smoker, that’s great! Do not start smoking and fight for your right to breathe tobacco-smoke-free air.</dd>
                                    <dt>Drink only safe water</dt>
                                    <dt>Get tested</dt>
                                    <dt>Follow traffic laws</dt>
                                    <dt>Talk to someone you trust if you're feeling down</dt>
                                    <dt>Clean your hands properly</dt>
                                    <dt>Have regular check-ups</dt>
                                    Visit here to get more health tips.
                                    <a href="https://www.who.int/philippines/news/feature-stories/detail/20-health-tips-for-2020" target="_blank"> World Health Organisation</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
