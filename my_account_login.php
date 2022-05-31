<!doctype html>
<html lang="en">
  <head>
    <title>My Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="login/css/style.css">

    </head>
    <body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap py-5">
                <div class="img d-flex align-items-center justify-content-center" style="background-image: url(login/images/pie.jpg);"></div>
                <h3 class="text-center mb-0">Welcome</h3>
                <p class="text-center">Sign in by entering the information below</p>
                        <form action="loginprocess.php" class="login-form" method="post">
                    <div class="form-group">
                        <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
                    </div>
                <div class="form-group">
                    <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group d-md-flex">
                                <div class="w-100 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                </div>
               <!--  <div class="form-group">
                    <button type="submit" class="btn form-control btn-primary rounded submit px-3" id="login" name="login">Get Started</button>
                </div> -->
                <div class="form-group">
                     <input type="submit" class="btn form-control btn-primary rounded submit px-3"  id="btnLogin" name="btnLogin" value="Get Started"/>
                </div>
              </form>
              <div class="w-100 text-center mt-4 text">
                <p class="mb-0">Don't have an account?</p>
                  <a href="#">Sign Up</a>
              </div>
            </div>
                </div>
            </div>
        </div>
    </section>
<br>
<?php 
if(isset($_REQUEST["err"]))
    $msg="Invalid username or Password";
?>
<p style="color:red;">
<?php if(isset($msg))
{
    
echo $msg;
}
?>

</p>

    <script src="login/js/jquery.min.js"></script>
  <script src="login/js/popper.js"></script>
  <script src="login/js/bootstrap.min.js"></script>
  <script src="login/js/main.js"></script>

    </body>
</html>

