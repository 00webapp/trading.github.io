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
$selectQuery = "SELECT * FROM `market_table` WHERE user_id = '$id'";
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
    <title>Trading - Admin|  - Market</title>
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
                        <h4 class="page-title">Market | <a href="market_add.php"  class="btn btn-outline-danger"> Add Market <i class="fa fa-plus-square"></i> </a>&nbsp;<!-- <a href="add_market.php"  class="btn btn-outline-danger"> Add Result <i class="fa fa-plus-square"></i> </a> --></h4>
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
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                      
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Market </h4>
                                <hr>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr.no</th>
                                                <th>Market Name</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    $i =1;
                                                while($row = mysqli_fetch_assoc($result)){?>
                                           
                                            <tr>
                                                 <td><?php echo $i ?></td>
                                                  <td><?php echo $row['market_nm']; ?></td>
                                                  <td>
                                                   <!--  <a href="edit_market.php?market_id=<?php echo $row['market_id']; ?>" title="Edit" class="acti"><i class="mdi mdi-lead-pencil"></i></a> -->
                                                    <a href="function.php?market_id=<?php echo $row['market_id']; ?>" title="Delete" class="acti"><i class="mdi mdi-delete"></i></a></td>
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
                function status(asd,user_id) {
                   // alert(user_id);
                    var strURL="sts.php?stat="+asd+"&&user_id="+user_id;

                    var req = getXMLHTTP();

                    if (req) 

                    {

                            

                        req.onreadystatechange = function() 

                        {

                            if (req.readyState == 4)

                            {

                                

                                if (req.status == 200) 

                                {                       

                                    //document.getElementById('status_update').innerHTML=req.responseText;

                                    $("#success").show();

                                    $('#success').html('User Status Update Successfully');  

                                    $('#success').delay(3000).fadeOut('slow');



                                }else{

                                    $("#fail").show();

                                    $('#fail').html('User Status Update Failes');  

                                    $('#fail').delay(3000).fadeOut('slow');

                                    return false;

                                }

                            }           

                    }           

    }

    

        req.open("GET", strURL, true);

        req.send(); 

                }
                
            </script>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                 <!--  Copyright © 2020 GarajeMarathi . All Rights Reserved | Design by <a href="#">KSCPL</a>  -->
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