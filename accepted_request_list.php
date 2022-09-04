<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=digital_blood_bank", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $requestee_id = $_SESSION['user_id'];
    $query = "SELECT requests.*,users.user_name,users.contact_number
                FROM requests
                INNER JOIN users ON requests.requestee_id = users.id
                WHERE acceptance_st='1' AND accepted_by='$requestee_id'";
    $stmt = $conn->prepare($query);
    $result = $stmt->execute();
    $request_list = $stmt->fetchAll();

    //echo "<pre>";
    //print_r($request_list);
    //echo "</pre>";

} catch (PDOException $exception){
    echo "Connection failed: " . $exception->getMessage();
}
?>
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
    <!-- Navbar -->
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/blood.webp" alt="AdminLTELogo" height="60" width="60">
    </div>

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
                    <h1>Blood List DataTables</h1>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th class="text-center" scope="col">Blood Group</th>
                        <th class="text-center" scope="col">Quantity in bag</th>
                        <th class="text-center" scope="col">Place</th>
                        <th class="text-center" scope="col">Date and time</th>
                        <th class="text-center" scope="col">Description</th>
                        <th class="text-center" scope="col">Requested By</th>
                        <th class="text-center" scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($request_list as $request) { ?>
                    <tr>
                        <td class="text-center"><?php echo $request['blood_group']; ?></td>
                        <td class="text-center"><?php echo $request['quantity_in_bag']; ?></td>
                        <td class="text-center"><?php echo $request['place']; ?></td>
                        <td class="text-center"><?php echo $request['time_of_donation']; ?></td>
                        <td class="text-center"><?php echo $request['description']; ?></td>
                        <td class="text-center">
                            <?php
                            echo $request['user_name']."-".$request['contact_number'];
                            ?>
                        </td>
                        <td class="text-center">
                            <input type="hidden" id="req_id" name="req_id" value="<?php echo $request['id']; ?>">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"
                                onclick="setReviewId(<?php echo $request['id']; ?>);">
                                Review
                            </button>
                        </td>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
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

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!--MODAL STARTS-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Review Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="review_processor.php">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="rid" name="rid" value="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Review:</label>
                        <textarea class="form-control" id="review" name="review"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--MODAL ENDS-->

<script>
    function setReviewId(requestId) {
        document.getElementById("rid").value = "";
        document.getElementById("rid").value = requestId;
    }
</script>
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
