<?php //include 'header.php';?> 
<?php 
                    include("admin/connection.php");
                    ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Treading</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
  <!--   <link rel="stylesheet" type="text/css" href="css/table.css"> -->
  <style type="text/css">
  #m_value
  {
    font-size: 27px;
  }
  #market_name
  {
    font-size: 25px;
  }
    .one {
    background-color: #FF0000 !important;
}
.two {
    background-color: #008000 !important;
}
.three {
    background-color: #b3b300 !important;
}
.four {
    background-color:  #00008B !important;
}
.five {
    background-color: #FF00FF !important;
}
.all_market
{
    background-color: yellow;
    font-weight: bold;
    color: black;
}
.markrt_text
{
    text-align: right;
}
.market_value
{
    text-align: center;
}
</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                   
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                     <small class="text-light"><i class="fa fa-envelope-open me-2"></i>sales@sales.com</small>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"></i>Satta 143</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <a href="#faq" class="nav-item nav-link">Faq's</a>
                    <a href="#disclaimer" class="nav-item nav-link">Disclaimer</a>
                    <a href="#contact" class="nav-item nav-link">Contact</a>
                </div>
                <a href="https://crmbux.co.in/Trading/create_account.php" class="btn btn-primary py-2 px-4 ms-3">Open Account</a>
                <a href="my_account_login.php" class="btn btn-primary py-2 px-4 ms-3">Log In</a>
            </div>
        </nav>
</div>
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="https://crmbux.co.in/Trading/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h1 class="display-5 text-white mb-md-4 animated zoomIn">We build trust through transparency</h1> -->
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-1" style="max-width: 900px;">
                            <!-- <h1 class="display-5 text-white mb-md-4 animated zoomIn">We build trust through transparency</h1> -->
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->
    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="input-group" style="max-width: 350px;">
                <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Search Market">
                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
    <!-- Pricing Plan Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Top Markets</h5>
                <h1 class="mb-0">All Treading</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                              <?php 
                    include("admin/connection.php");
                  
                    $qr = mysqli_query($connectQuery,"SELECT * from market_type where market_type_id = '1' order by market_type_id desc");
                    while($mtype = mysqli_fetch_assoc($qr)) {
                ?>
               <h4 class="text-primary mb-1"><?php echo $mtype['market_type'];?></h4>
            <?php } ?>
                        </div>
                        <div class="p-5 pt-0">
                            <table class="table" id="tdata">
                                <thead>
                                  <tr>
                                    <th>Market</th>
                                    <th>Values</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                     <?php 
                    include("admin/connection.php");
                      $styles = array('one','two', 'three', 'four', 'five');
                      $i = 1;
                    $market = mysqli_query($connectQuery,"SELECT * FROM `user_market` JOIN market_table ON market_table.mid = user_market.market where market_type_id = 1 AND market_status = 'Approved' order by user_market.market_id desc");
                    while($mr = mysqli_fetch_assoc($market)) {
                ?>
                                    <tr class="<?php echo $styles[$i % 5]; ?>">
                                        <td style="color: white;"><?php echo $mr['market_nm']?></td>
                                        <td style="color: white;"><?php echo $mr['market_values']?></td>
                                        <td style="color:white;text-align: right;">Refresh...</td>
                                    </tr>
                                </tbody>
                            <?php 
                            $i++;
                        } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                             <?php 
                    include("admin/connection.php");
                    $qr = mysqli_query($connectQuery,"SELECT * from market_type where market_type_id = '2'");
                    while($mtype = mysqli_fetch_assoc($qr)) {
                ?>
               <h4 class="text-primary mb-1"><?php echo $mtype['market_type'];?></h4>
            <?php } ?>
                        </div>
                        <div class="p-5 pt-0">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Market</th>
                                    <th>Values</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                     <?php 
                    include("admin/connection.php");
                      $styles = array('one','two', 'three', 'four', 'five');
                      $i = 1;
                    $market = mysqli_query($connectQuery,"SELECT * FROM `user_market` JOIN market_table ON market_table.mid = user_market.market where market_type_id = 2 AND market_status = 'Approved' order by user_market.market_id desc");
                    while($mr = mysqli_fetch_assoc($market)) {
                ?>
                                    <tr class="<?php echo $styles[$i % 5]; ?>">
                                        <td style="color:white;"><?php echo $mr['market_nm']?></td>
                                        <td style="color:white;"><?php echo $mr['market_values']?></td>
                                        <td style="color:white;text-align: right;">Refresh...</td>
                                    </tr>
                                </tbody>
                            <?php
                                $i++;
                             } 
                             ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- All Markets Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">All Market</h5>
                <h1 class="mb-0">Super Duper Fast Result</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">All Markets</h4>
                        </div>
                        <div class="p-5 pt-0">
                            <table class="table">
                                <thead>
                                  <tr class="all_market">
                                    <th>Weekly Market</th>
                                    <th class="market_value">Values</th>
                                    <th class="markrt_text">Monthly Market</th>
                                  </tr>
                                </thead>
                                <tbody>
                                      <?php 
                    include("admin/connection.php");
                    $mrddd = mysqli_query($connectQuery,"SELECT * FROM `user_market` JOIN market_table ON market_table.mid = user_market.market order by user_market.market_id desc");
                    while($mrd = mysqli_fetch_assoc($mrddd)) {
                ?>
                                   
                                    <tr>
                                        <td rowspan="3"> 
                                            <a href="single-market.php" target="_blank"><button type="button" class="btn btn-primary"><i class="fa fa-link"></i>  View </button></a>
                                        </td>
                                        <td class="market_value"><span id="market_name"><b><?php echo $mrd['market_nm']; ?></b></span></td>
                                         <td rowspan="3" class="markrt_text"> 
                                            <a href="single-market.php" target="_blank"><button type="button" class="btn btn-primary"><i class="fa fa-link"></i>  View </button></a>
                                        </td>
                                    </tr>
                                        
                                    <tr><td class="market_value"><span id="m_value"><?php echo $mrd['market_values']; ?></span></td></tr>

                                    <tr class="market_value"><td class="market_value"><b>Loading...<?php //echo $mrd['market_text']; ?></b></td></tr>
                                   

                                </tbody>
                            <?php } ?>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- About Start -->
    <section id="about">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Hunt in your style with one platform for all of your trading needs</h1>
                    </div>
                    <?php 
                    include("admin/connection.php");
                     $about = mysqli_query($connectQuery,"SELECT * FROM about_table");
                    while($abt = mysqli_fetch_assoc($about)) {?>
                    <p class="mb-4">
                        <?php echo $abt['about_info'];?>
                    </p>
                <?php } ?>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Quote Start -->
    <section id="faq">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">FAQ' S </h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <?php 
                    include("admin/connection.php");
                     $faq = mysqli_query($connectQuery,"SELECT * FROM faq_table");
                    while($fq = mysqli_fetch_assoc($faq)) {?>
                    <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                       <h5 class="mb-4"><i class="fa fa-question text-primary me-3"></i><?php echo $fq['faq_label'];?></h5>
                        <p class="mb-4">
                            <?php echo $fq['faq_desc'];?>
                        </p>
                <?php } ?>
                        
                        

                    </div>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Quote End -->

    <!-- Disclaimer Start -->
    <section id="disclaimer">
        <div class="container-fluid py-5 wow fadeInUp disclaimer" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Disclaimer</h5>
                    </div>
                     <?php 
                    include("admin/connection.php");
                     $disc = mysqli_query($connectQuery,"SELECT * FROM disclaimer_table");
                    while($dis = mysqli_fetch_assoc($disc)) {?>
                    <p class="mb-4"><?php echo $dis['disclaimer'];?></p>
                <?php } ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Disclaimer End -->
    <section id="contact">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
            </div>

            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <div class="col-lg-12 py-1">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-12 py-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Email to get free quote</h5>
                            <h4 class="text-primary mb-0">sachin@k.com</h4>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-12 py-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                            <div class="social-img">
                                <img src="img/WhatsApp.png" alt="Whatsapp">
                            </div>
                                <div class="ps-4">
                                    <h5 class="mb-2">Join Our Whatsapp</h5>
                                    <h4 class="text-primary mb-0"></h4>
                                </div>

                        </div>
                    </div>
                    <div class="col-lg-12 py-4">
                        <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
                        <div class="social-img">
                            <img src="img/telegram.png" alt="Whatsapp">
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Join Our Telegram</h5>
                            <h4 class="text-primary mb-0"></h4>
                        </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: slideInUp;">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-0 bg-light px-4" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-0 bg-light px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Footer Start -->
    <div class="container-fluid bg-darks text-light mt-5 wow fadeInUp footer-about" data-wow-delay="0.1s" style="background-color:#091E3E">
        <div class="container-fluid">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-60 p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white">Comapany</h1>
                        </a>
                        <p class="mt-3 mb-4">Lorem diam sit erat dolor elitr et, diam lorem justo amet clita stet eos sit. Elitr dolor duo lorem, elitr clita ipsum sea. Diam amet erat lorem stet eos. Diam amet et kasd eos duo.</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">admin@admin.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                
                                        <button type="button" class="btn btn-primary">Open Account</button> 
                               <div class="openac">
                                <button type="button" class="btn btn-primary">Log In</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>All Markets</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>FAQ</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">TOP 5 Market</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <table class="table" id="tdata">
                                <thead>
                                  <tr>
                                    <th>Market</th>
                                    <th>Values</th>
                                  </tr>
                                </thead>
                                <tbody>
                                     <?php 
                    include("admin/connection.php");
                      $styles = array('one','two', 'three', 'four', 'five');
                      $i = 1;
                    $market = mysqli_query($connectQuery,"SELECT * from user_market JOIN market_table ON market_table.mid = user_market.market where market_type_id = '1' AND market_status = 'Approved' order by market_id desc");
                    while($mr = mysqli_fetch_assoc($market)) {
                ?>
                                    <tr class="<?php echo $styles[$i % 5]; ?>">
                                        <td style="color: white;"><?php echo $mr['market_nm']?></td>
                                        <td style="color: white;"><?php echo $mr['market_values']?></td>
                                       
                                    </tr>
                                </tbody>
                            <?php 
                            $i++;
                        } ?>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;" style="display: none;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                       <!--  <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"></a> All Rights Reserved. 
						Designed by <a class="text-white border-bottom" href="#">Khodape Software</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    <?php include 'footer.php';?>
</body>
</html>


<!-- </body>

</html>