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
    <link rel="icon" type="image/png" sizes="16x16" href="https://crmbux.co.in/Trading/admin/assets/images/favicon.png">
    <title>Trading - Admin|  - Users</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://crmbux.co.in/Trading/admin/assets/extra-libs/multicheck/multicheck.css">
    <link href="https://crmbux.co.in/Trading/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
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
       <?php include_once('header.php'); ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php include('left_sidebar.php'); ?>
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
                                <h4 class="card-title" style="display: inline;">Users </h4><span style="display: inline;float: right;"><i class="fa fa-edit" onclick="test();"></i> </span>
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
              <!--   <?php //}?> -->
                    <div class="col-6">
                      
                        <div class="card" style="display:none" id="card_2">
                            <div class="card-body">
                                <h4 class="card-title">Edit Profile</h4>
                                <hr>
                                <form method="post" action="profile.php">
                                    <?php//
                                              //  while($rows= mysqli_fetch_assoc($result)){?>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['id'] ?>">
                                                <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $row['user_firstname'];?>">
                                            </div>
                                            
                                        </div>
                                         <div class="col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $row['user_lastname'];?>">
                                            </div> 
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Mobile No</label>
                                                <input type="text" name="mobile_ no" id="mobile_ no" class="form-control" value="<?php echo $row['user_mobileno'];?>">
                                            </div>
                                            
                                        </div>
                                         <div class="col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Email ID</label>
                                                <input type="text" name="email_id" id="email_id" class="form-control" value="<?php echo $row['user_email'];?>">
                                            </div> 
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" name="city" id="city" class="form-control" value="<?php echo $row['user_city'];?>">
                                            </div>
                                            
                                        </div>
                                         <div class="col-lg-6 col-sm-12">
                                            <div class="form-group">
                                                <label>Market</label>
                                                <input type="text" name="market" id="market" class="form-control" value="<?php echo $row['user_market'];?>">
                                            </div> 
                                         </div>
                                    </div>
                                     <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" name="update_profile" id="update_profile" class="btn btn-primary">Update Profile</button>
                                    </div>
                                </div>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
               <?php } ?>
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
               <!--    Copyright © 2020 GarajeMarathi . All Rights Reserved | Design by <a href="#">KSCPL</a>  -->
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <script type="text/javascript">
        function test() {
            document.getElementById("card_2").style.display = "block";
        }
    </script>
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
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="https://crmbux.co.in/Trading/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="https://crmbux.co.in/Trading/admin/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="https://crmbux.co.in/Trading/admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>