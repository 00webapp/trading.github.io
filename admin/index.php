<?php

include 'connection.php';

session_start();

if(!isset($_SESSION['user_name'])){
    // print_r($_SESSION['user_name']);
    // die();
   header('location:https://crmbux.co.in/Trading/loginprocess.php');
}
//$selectQuery = "SELECT * FROM `user_market` JOIN market_table ON JOIN users_details ON users_details.user_id = user_market.user_id ";
$selectQuery = "SELECT * FROM `user_market` JOIN market_table ON market_table.mid = user_market.market JOIN users_details ON users_details.user_id = market_table.user_id order by user_market.market_id  desc";

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
    <title>Trading Admin| Dashboard</title>
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
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
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
                            <div class="card-body">
                                <div class="alert alert-success alert-dismissible" id="success" style="display:none;font-weight: 500;">

                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                                    </div>

                                    <div class="alert alert-warning alert-dismissible" id="fail" style="display:none;font-weight: 500;">

                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>

                                    </div>
                                <h4 class="card-title">Market</h4>
                                <hr>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="width:130px;">User Name</th>
                                                <th>Market Name</th>
                                                <th>Market Values</th>
                                                <th> Date</th>
                                                <td> Time </td>
                                                <th>Action</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                while($row = mysqli_fetch_assoc($result)){?>
                                           
                                            <tr>
                                                <td><?php echo $row['user_firstname']; ?><?php echo $row['user_lastname']; ?></td>
                                                 <td><?php echo $row['market_nm']; ?></td>
                                                  <td><?php echo $row['market_values']; ?></td>
                                                  <td><?php echo $row['market_date']; ?></td>
                                                  <td><?php echo $row['market_time']; ?></td>
                                                  <td>
                                                    
                                                    <a href="edit_market.php?market_id=<?php echo $row['market_id']; ?>" title="Edit" class="acti"><i class="mdi mdi-lead-pencil"></i></a>
                                                    <a href="function.php?market_id=<?php echo $row['market_id']; ?>" title="Delete" class="acti"><i class="mdi mdi-delete"></i></a> </td>
                                                   <td> 
                                                   <?php
                                                    if($row['market_status'] == 'Approved')
                                                    {
                                                        echo "<p><a class='btn btn-success' href='msts.php?market_d=".$row['market_d']."&market_status=Decline'>Approved</a></p>";
                                                    }
                                                    else
                                                    {
                                                        echo "<p><a class='btn btn-danger' href='msts.php?market_d=".$row['market_d']."&market_status=Approved'>Decline</a></p>";
                                                    }
                                                    ?>

                                                  </td>
                                                  
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                 
                   
                 
                </div>
                <script type="text/javascript">
                    function status(asd,sid) {

                    var strURL="msts.php?sts="+asd+"&&sid="+sid;

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

                                    $('#success').html('Status Update Successfully');  

                                    $('#success').delay(3000).fadeOut('slow');



                                }else{

                                    $("#fail").show();

                                    $('#fail').html('Status Update Failes');  

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
              <!--  Copyright © 2022 Company Name  . All Rights Reserved | Design by <a href="#">KSCPL</a>  -->
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