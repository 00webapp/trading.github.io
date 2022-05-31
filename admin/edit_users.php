<?php

include 'connection.php';

session_start();

if(!isset($_SESSION['user_name'])){
    // print_r($_SESSION['user_name']);
    // die();
   header('location:https://crmbux.co.in/Trading/index.php');
}
$user_id = $_GET['user_id'];
$selectQuery = "SELECT * FROM `users_market` WHERE user_id = '$user_id'";
$result = mysqli_query($connectQuery,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Trading Admin| Edit User</title>
    <!-- Custom CSS -->
    <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
                <script>
                //  $( function() {
                  //  $("#datepicker" ).datepicker();
                  //} );
                  </script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include_once('admin_header.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include_once('admin_left_sidebar.php'); ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit User</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://crmbux.co.in/Trading/admin/admin_dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Market</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                   <div class="col-md-2"></div>
                   <div class="col-md-8">
                        <div class="card">
                            <form class="form-horizontal" action="function.php" method="POST">
                                <div class="card-body">
                                    
                                    <h4 class="card-title">Update User Information</h4>
                                    <hr>
                                     <?php
                                    include("connection.php");
                                    $uid = $_GET['user_id'];
                                    $user = mysqli_query($connectQuery,"SELECT * FROM `users_details` where user_id = '$uid'");

                                    while($ud = mysqli_fetch_assoc($user)) {
                                 ?>
                                    <br>
                                            <input type="hidden" class="form-control" id="user_id" name="user_id" placeholder="Product Name" value="<?php echo $ud['user_id'];?>">
                                          
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">First Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?php echo $ud['user_firstname'];?>" class="form-control" id="fname" name="fname" placeholder="">
                                        </div>
                                         <label for="lname" class="col-sm-2 text-right control-label col-form-label">Last Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?php echo $ud['user_lastname'];?>" class="form-control" id="lname" name="lname" placeholder="">
                                        </div>
                                    </div><br>
                                      <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Mobile No</label>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?php echo $ud['user_mobileno'];?>" class="form-control" id="mobile_no" name="mobile_no" placeholder="">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Email ID</label>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?php echo $ud['user_email'];?>" class="form-control" id="email_id" name="email_id" placeholder="">
                                        </div>
                                    </div><br>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">City</label>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?php echo $ud['user_city'];?>" class="form-control" id="city" name="city" placeholder="">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Market</label>
                                        <div class="col-sm-4">
                                            <input type="text" value="<?php echo $ud['user_market'];?>" class="form-control" id="market" name="market" placeholder="">
                                        </div>
                                    <?php } ?>
                                    </div><br>
                                     <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="update_user" class="btn btn-primary">Add User</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                 <div class="col-lg-2"></div>
                </div>

                 <div class="modal fade in" id="myMessageModal" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Message Box
                    </h4>
                </div>
                <div class="modal-body">
                    <p id="msgTxt"></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal" id="btn_yes">Ok</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"> 
    $(document).ready(function () {
        <?php
            if (isset($_GET['msg']) && $_GET['msg']) { ?>
                $('#myMessageModal').modal('show');
                $('#msgTxt').html("<i class='far fa-grin-alt'></i> Market Added Successfully");
                
            <?php }elseif (isset($_GET['msg']) &&  !$_GET['msg']) { ?>
                $('#myMessageModal').modal('show');
                $('#msgTxt').html("Error");
                // window.location.replace('http://localhost/MK_demo/customer.php');
            <?php }

        ?>

    });
    $('#myMessageModal').on('hidden.bs.modal',function(e) {
        window.location.replace('create_account.php');
    });

</script>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
            <!--    Copyright © 2022 Company Name  . All Rights Reserved | Design by <a href="#">KSCPL</a>  -->
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
    
</body>

</html>