<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Account</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://crmbux.co.in/Trading/css/account.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body class="navbar-dark" style="background: #e3e3e3;">

<!------ Include the above in your HEAD tag ---------->

<div class="container register" style="">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Create Account</h3>
                                <form action="insert_user.php" method="POST">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name" name="firstname" id="firstname" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="mobile" id="mobile" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City" id="city" name="city" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email" id="email_id" name="email_id"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <input type="text" name="market_name" id="market_name" placeholder="Market Name" class="form-control" id="market_name" name="market_name">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" placeholder="password" class="form-control" id="password" name="password">
                                        </div>
                                    
                                        <input type="submit" class="btnRegister"  id="btnRegister" name="btnRegister" value="Create"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--modal start-->
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
                $('#msgTxt').html("<i class='far fa-grin-alt'></i> Data Successfully Submitted");
                
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
            <!--modal closed-->
            <!-- <script type="text/javascript">
                $('#btnRegister').click(function () {
                    $firstname = $('#firstname').val();
                    $lastname = $("#lastname").val();
                    $mobile = $('#mobile').val();
                    $email = $("#email_id").val();
                    $city = $('#city').val();
                    $market = $("#market_name").val();
                    $username = $('#username').val();
                    $password = $("#password").val();
                    $.ajax({
                        url:"insert_user.php",
                        method:"POST",
                        data:{firstname : $firstname, lastname : $lastname, mobile : $mobile, email : $email, city : $city, market : $market, username : $username, password : $password},
                        success:function(dataabc){
                          //window.location.href="index.php";
                       }
                   });
                });


            </script>
 -->
</body>
</html>