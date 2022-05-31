<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['user_name']))
{
    // print_r($_SESSION['user_name']);
    // die();
   header('location:https://crmbux.co.in/Trading/loginprocess.php');
}
$id = $_SESSION['id'];
$selectQuery = "SELECT * FROM `web_slider`";
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
    <title>Trading Admin| Web Slider</title>
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
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="http://crmbux.co.in/Trading/admin/admin_dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Market Type List</li>
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
                   <div class="col-md-6">
                           <div class="card">
                            <form class="form-horizontal" action="about_function.php" method="POST" enctype='multipart/form-data'>
                                <div class="card-body">
                                    <h4 class="card-title">Add Slider</h4>
                                    <hr>
                                      <?php
                                    include("connection.php");
                             $id = $_GET['id'];
                                $sql = mysqli_query($connectQuery,"SELECT * FROM `web_slider` where id = '$id'");

                                    while($fdata = mysqli_fetch_assoc($sql)) {
                                 ?>
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Slider</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="eid" id="eid" value="<?php echo $fdata['id']?>">
                                            <input type="file" accept=".jpg,.jpeg,.png" class="form-control" id="file" name="file" placeholder="Market Name">
                                            <img src="<?php echo $fdata['image']?>" width="100px" height="80px;">
                                        </div>
                                    </div>
                                <?php } ?>
                                     <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="add_slider" id="add_slider" class="btn btn-primary add_market_type" disabled="true">Add </button>
                                         <button type="submit" name="update_slider" id="update_slider" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                   <div class="col-md-6">
                          <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Web Slider</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width:130px;">Sr.no</th>
                                                <th>Slider</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i = 1;
                                                while($row = mysqli_fetch_assoc($result)){?>
                                           
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                 <td><img src="<?php echo $row['image'];?>" width="70px" height="50px"></td>
                                                  <td>
                                                    <!-- <a href="edit_market.php?market_id=<?php echo $row['market_id']; ?>" title="Edit" class="acti"><i class="mdi mdi-lead-pencil"></i></a> -->
                                                     <a href="javascript:void(0);" onclick="editData(<?php echo $row['id'] ?>,'<?php echo $row['image'] ?>')" class="acti" disabled><i class="mdi mdi-lead-pencil"></i></a><?php echo "&nbsp;" ?>
                                                    <a href="delete_slider.php?id=<?php echo $row['id']; ?>" title="Delete" class="acti"><i class="mdi mdi-delete"></i></a></td>
                                            </tr>
                                            <?php
                                                $i++;
                                             } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
               <!-- Copyright © 2022 Company Name  . All Rights Reserved | Design by <a href="#">KSCPL</a> --> 
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