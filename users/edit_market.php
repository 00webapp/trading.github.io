<?php

include 'connection.php';

session_start();

if(!isset($_SESSION['user_name'])){
    // print_r($_SESSION['user_name']);
    // die();
   header('location:https://crmbux.co.in/Trading/loginprocess.php');
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
    <title>Trading User| Market</title>
    <!-- Custom CSS -->
    <link href="https://crmbux.co.in/Trading/admin/assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://crmbux.co.in/Trading/admin/dist/css/style.min.css" rel="stylesheet">
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
        <?php include_once('header.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include_once('left_sidebar.php'); ?>
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
             <div class="page-breadcrumb" style="">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Market</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                   
                   <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="update_market.php" method="POST">
                                <div class="card-body">
                                     <?php
                                    include("connection.php");
                             $mid = $_GET['market_id'];
                                $market = mysqli_query($connectQuery,"SELECT * FROM `user_market` JOIN market_table ON market_table.mid = user_market.market where market_id = '$mid'");

                                    while($mdata = mysqli_fetch_assoc($market)) {
                                 ?>
                                    <h4 class="card-title">Edit Market</h4>
                                    <hr>
                                            <input type="hidden" class="form-control" id="market_id" name="market_id" placeholder="Product Name" value="<?php echo $mdata['market_id'];?>">
                                        
                                
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Market Name</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" class="form-control" id="marketid" name="marketid" placeholder="Product Name" value="<?php echo $mdata['market'];?>">
                                            <input type="text" value="<?php echo $mdata['market_nm'];?>" class="form-control" id="market_name" name="market_name" placeholder="Market Name" disabled>
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Market Values</label>
                                        <div class="col-sm-9">
                                            <input type="text" value="<?php echo $mdata['market_values'];?>" class="form-control" id="market_values" name="market_values" placeholder="Market Values">
                                        </div>
                                    </div>
                                     <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="updates_market" class="btn btn-primary">Update Market</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        <?php } ?>
                        </div>
                    </div>
                 
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
        window.location.replace('market.php');
    });

</script>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
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
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="https://crmbux.co.in/Trading/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="https://crmbux.co.in/Trading/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="https://crmbux.co.in/Trading/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/flot/excanvas.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/flot/jquery.flot.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/dist/js/pages/chart/chart-page-init.js"></script>
    
</body>

</html>