<?php include 'header.php';?>
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="https://crmbux.co.in/Trading/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-5 text-white mb-md-4 animated zoomIn">We build trust through transparency</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-1" style="max-width: 900px;">
                            <h1 class="display-5 text-white mb-md-4 animated zoomIn">We build trust through transparency</h1>
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
    <!-- Pricing Plan Start -->
     <div class="row g-0">
                    <div class="col-lg-1"></div>
                <div class="col-lg-10 wow slideInUp" data-wow-delay="0.6s">

                    <div class="bg-light rounded">

                        <div class="border-bottom py-4 px-5 mb-4">
                                 <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">

                <h5 class="fw-bold text-primary text-uppercase">All Market</h5>

                <h1 class="mb-0">View Report</h1>

            </div>
                            <!-- <h4 class="text-primary mb-1"><centerReport</h4> -->

                        </div>

                        <div class="p-5 pt-0">

                            <table class="table" style="border: 1px solid black; border-collapse: collapse;">

                                <thead style="border: 1px solid black; border-collapse: collapse;">

                                  <tr style="border: 1px solid black; border-collapse: collapse;">

                                    <th style="border: 1px solid black; border-collapse: collapse;">SR.NO</th>

                                    <th style="border: 1px solid black; border-collapse: collapse;">Market</th>

                                    <th style="border: 1px solid black; border-collapse: collapse;">Market Values</th>

                                    <th style="border: 1px solid black; border-collapse: collapse;">Market Text</th>

                                  </tr>

                                </thead>
                                   <tbody>

                                      <?php 
                                      $n = 1;
                    include("admin/connection.php");
                    $mrddd = mysqli_query($connectQuery,"SELECT * FROM user_market");
                    while($mrd = mysqli_fetch_assoc($mrddd)) {
                ?>
                                   
                                    <tr style="border: 1px solid black; border-collapse: collapse;">
                                        <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $n;?> </td>
                                        <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $mrd['market']; ?></td>
                                        <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $mrd['market_values']; ?></td>
                                        <td style="border: 1px solid black; border-collapse: collapse;"><?php echo $mrd['market_text']; ?></td>
                                   </tr style="border: 1px solid black; border-collapse: collapse;">
                                </tbody>
                            <?php 
                                $n++;
                        } ?>

                              

                            </table>

                        </div>



                    </div>

                </div>
<div class="col-lg-1"></div>
            </div>

        </div>

    </div>

           
               
    <!-- Pricing Plan End -->

    <!-- All Markets Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="display: none;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">All Market</h5>
            </div>
            <div class="row g-0">
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1">All Markets</h4>
                              <h1 class="mb-0">View Report</h1>

                        </div>
                        <div class="p-5 pt-0">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>Sr. no</th>
                                    <th>Market</th>
                                    <th>Market Values</th>
                                    <th>Monthly Text</th>
                                  </tr>
                                </thead>
                                <tbody>
                                      <?php 
                    include("admin/connection.php");
                    $mrddd = mysqli_query($connectQuery,"SELECT * FROM user_market");
                    while($mrd = mysqli_fetch_assoc($mrddd)) {
                ?>
                                   
                                    <tr>
                                        <td rowspan="3"> 
                                            <a href="single-market.html" target="_blank"><button type="button" class="btn btn-primary"><i class="fa fa-link"></i>  View link</button></a>
                                        </td>
                                        <td><?php echo $mrd['market']; ?></td>
                                         <td rowspan="3"> 
                                            <a href="single-market.html" target="_blank"><button type="button" class="btn btn-primary"><i class="fa fa-link"></i>  View link</button></a>
                                            <a href="single-market.php" target="_blank"><button type="button" class="btn btn-primary"><i class="fa fa-link"></i>  View link</button></a>
                                        </td>
                                    </tr>
                                        
                                    <tr><td><?php echo $mrd['market_values']; ?></td></tr>

                                    <tr><td><?php echo $mrd['market_text']; ?></td></tr>
                                   

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
    <section id="about" style="display:none;">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Hunt in your style with one platform for all of your trading needs</h1>
                    </div>
                    <p class="mb-4">It provides a rich experience while you are using also you can make strategies and execute faster even lower internet connectivity.</p>
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
    <section id="faq" style="display:none;">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">FAQ' S </h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-question text-primary me-3"></i>Can I trade when markets are closed or shut down?</h5>
                            <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor.</p>
                        </div>
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-question text-primary me-3"></i>Can I trade when markets are closed or shut down?</h5>
                            <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor.</p>
                        </div>
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-question text-primary me-3"></i>Can I trade when markets are closed or shut down?</h5>
                            <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor.</p>
                        </div>
                        <div class="col-sm-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-question text-primary me-3"></i>Can I trade when markets are closed or shut down?</h5>
                            <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor.</p>
                        </div>

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
    <section id="disclaimer" style="display:none;">
        <div class="container-fluid py-5 wow fadeInUp disclaimer" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Disclaimer</h5>
                    </div>
                    <p class="mb-4">It provides a rich experience while you are using also you can make strategies and execute faster even lower internet connectivity.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Disclaimer End -->
    <section id="contact" style="display:none;">
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
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
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
                                <p class="mb-0">sachin@khodapesoftware.com</p>
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
                                <table class="table">
                                <thead>
                                  <tr>
                                    <th>Market</th>
                                    <th>Values</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr class="red">
                                        <td>ABC</td>
                                        <td>001102000</td>
                                    </tr>
                                    <tr  class="green">
                                        <td>XYZ</td>
                                        <td>002201111</td>
                                    </tr>
                                    <tr class="yellow">
                                        <td>PQR</td>
                                        <td>112233222</td>
                                    </tr>
                                    <tr class="blue">
                                        <td>LMN</td>                                        
                                        <td>332211111</td>
                                    </tr>
                                    <tr class="pink">
                                        <td>XYZ</td>
                                        <td>445566</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#"></a> All Rights Reserved. 
                        Designed by <a class="text-white border-bottom" href="#">Khodape Software</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
<?php include 'footer.php';?>

<!-- </body>

</html> -->