<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['user_name']))
{
    // print_r($_SESSION['user_name']);
    // die();
   header('location:https://crmbux.co.in/Trading/loginprocess.php');
}
$id = $_GET['user_id'];
$selectQuery = "SELECT * FROM `users_details` WHERE user_id = '$id' ";
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
    <title>Trading - Admin|  - Users</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
    .acti{
        color: #000;
        font-size: 15px;    
    }
</style>
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
        <?php include('admin_left_sidebar.php'); ?>
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
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row"><?php
                                                while($row = mysqli_fetch_assoc($result)){?>
                    <div class="col-6">
                      
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Users </h4>
                                <hr>
                                <div class="form-group">
                                   <label>User Name <span style="">:</span> </label>
                                   <label>&nbsp;<?php echo $row['user_firstname']; ?>&nbsp;<?php echo $row['user_lastname']; ?></label>
                                </div>
                                <div class="form-group">
                                   <label>Mobile No <span style="margin-left: 5px;">:</span> </label>
                                   <label>&nbsp;<?php echo $row['user_mobileno']; ?></label>
                                </div>
                                <div class="form-group">
                                   <label>Email ID &nbsp;<span style="margin-left:13px;">:</span> </label>
                                   <label>&nbsp;<?php echo $row['user_email']; ?></label>
                                </div>
                                <div class="form-group">
                                   <label>Market &nbsp;&nbsp;&nbsp;<span style="margin-left:13px;">:</span> </label>
                                   <label>&nbsp;<?php echo $row['user_market']; ?></label>
                                </div>
                                 <div class="form-group">
                                   <label>City &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<span style="margin-left:13px;">:</span></label>
                                   <label>&nbsp;<?php echo $row['user_city']; ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                    <div class="col-6">
                      
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Users Market</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Market Name</th>
                                                <th>Market Values</th>
                                                <th>Market Text</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $uid = $_GET['user_id'];
                                                 $sql = "SELECT * FROM `user_market` WHERE user_id = '3'";
                                                 $q = mysqli_query($connectQuery,$sql);
                                                 if(mysqli_num_rows($q) > 0){
                                                 }else{
                                                     $msg = "No Record found";
                                                 }
                                                 $i = 1;
                                                while($rows = mysqli_fetch_assoc($q)){?>
                                           
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $rows['market']; ?></td>
                                                 <td><?php echo $rows['market_values']; ?></td>
                                                  <td><?php echo $rows['market_text']; ?></td>
                                                 
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
               
            </div>
              <script type="text/javascript">
                $(".remove").click(function(){
                    var id = $(this).parents("tr").attr("id");
                    if(confirm('Are you sure to remove this record ?'))
                    {
                        $.ajax({
                        url: 'function.php',
                        type: 'GET',
                        data: {user_id: user_id},
                        error: function() {
                            alert('Something is wrong');
                        },
                        success: function(data) {
                                $("#"+id).remove();
                                alert("Record removed successfully");  
                                window.location.reload();
                        }
                        });
                    }else{
                        return false;
                    }
                });
            </script>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
               <!--    Copyright ?? 2020 GarajeMarathi . All Rights Reserved | Design by <a href="#">KSCPL</a>  -->
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
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>