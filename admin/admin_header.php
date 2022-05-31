<?php

include 'connection.php';

session_start();

if(!isset($_SESSION['user_name'])){
    // print_r($_SESSION['user_name']);
    // die();
   header('location:https://crmbux.co.in/Trading/loginprocess.php');
}

?>
<!-- <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script> -->
<script src="ckeditor/ckeditor.js"></script>
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php" style="background: green;">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                            <!--  <img src="image/reshimgathee.png" alt="homepage" class="light-logo" height="68" width="100%" /> -->
                            <h4>Trading | Admin</h4>
                            
                        </span>
                        <!-- Logo icon -->
                      
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                     
                      
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> <?php echo $_SESSION['user_name'] ?>&nbsp;&nbsp;<?php echo $_SESSION['lastname'] ?></a>
                                <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                               <!--  <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div> -->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
          <!-- Modal Add Product -->
          <div class="modal fade none-border" id="add-product">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> product</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" enctype="multipart/form-data" action="product-function.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Product Category</label>
                                            <select name="product_cat" class="form-control form-white">
                                            <option value=''>Select Category</option>
                                            <?php $product_cat = mysqli_query($conn,"SELECT * FROM `product_cat` where is_deleted = '0'");
                                             while($pcdata = mysqli_fetch_assoc($product_cat)) {  ?>
                                            <option value="<?php echo $pcdata['product_cat_id']; ?>"><?php echo $pcdata['product_cat_name']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Product Name</label>
                                            <input class="form-control form-white" placeholder="Product Name" type="text" name="product" id="product" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Price</label>
                                            <input class="form-control form-white"  placeholder="$ 0.00" type="text" name="desc" id="desc" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Sell Price</label>
                                            <input class="form-control form-white" placeholder="$ 0.00" type="text" name="price" id="price" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Quantity</label>
                                            <input class="form-control form-white"  placeholder="0" type="text" name="quantity" id="quantity" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">product weight</label>
                                            <input class="form-control form-white" placeholder="200 gm / 2 Kg" type="text" name="product_weight" id="product_weight" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">product Size</label>
                                            <select name="size" class="form-control form-white">
                                                <option value="small"> Small</option>
                                                <option value="medium"> Medium</option>
                                                <option value="large"> Large</option>
                                                <option value="extea large"> Extea Large</option>

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Special Instructions</label>
                                            <input class="form-control form-white" placeholder="Product Image" type="text" name="inst" id="inst" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">product image 1</label>
                                            <input class="form-control form-white" placeholder="Product Image" type="file" name="product_img1" id="product_img1" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">product image 2</label>
                                            <input class="form-control form-white" placeholder="Product Image" type="file" name="product_img2" id="product_img2" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">product image 3</label>
                                            <input class="form-control form-white" placeholder="Product Image" type="file" name="product_img3" id="product_img3" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">product image 4</label>
                                            <input class="form-control form-white" placeholder="Product Image" type="file" name="product_img4" id="product_img4" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Content</label>
                                            <textarea name="content" placeholder="Content name 1, Content name 2 , ..." class="form-control form-white"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">product Description</label>
                                            <textarea name="prod_desc" placeholder="Product Description" class="form-control form-white"></textarea>
                                        </div>
                            
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="product_submit" id="add-product" class="btn btn-danger waves-effect waves-light save-category">Add Product
                                    </button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
               
                <!-- END MODAL -->
        
                  <!-- Modal Add Continent -->
                <div class="modal fade none-border" id="add-continent">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add </strong> Continent</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="product-function.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <label class="control-label">Continent Name</label>
                                            <input class="form-control form-white" placeholder="Continent Name" type="text" name="continent" id="continent" required/>
                                        </div>
                                        <!-- <div class="col-md-12">
                                            <label class="control-label"></label>
                                            <input class="form-control form-white" placeholder="Product Category" type="text" name="product_cat" id="product_cat" />
                                        </div> -->
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                 <button type="submit" name="add_cotinent" id="add_cotinent" class="btn btn-danger waves-effect waves-light save-category">Add Continent
                                    </button>
                                <button type="submit" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                  <!-- Modal Add Country -->
                  <div class="modal fade none-border" id="add-country">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add </strong> Country</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="product-function.php" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-md-12">
                                            <label class="control-label">Continent</label>
                                            <select name="continent" class="form-control form-white" required>
                                            <option value=''>Select Continent</option>
                                            <?php $product_conti = mysqli_query($conn,"SELECT * FROM `continents`");
                                             while($contidata = mysqli_fetch_assoc($product_conti)) {  ?>
                                            <option value="<?php echo $contidata['conti_id']; ?>"><?php echo $contidata['continents_name']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Country Name</label>
                                            <input class="form-control form-white" placeholder="Country Name" type="text" name="country" id="country" required/>
                                        </div>
                                    
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                 <button type="submit" name="add_country" id="add_country" class="btn btn-danger waves-effect waves-light save-category">Add Country
                                    </button>
                                <button type="submit" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                      <!-- Modal Add State -->
                      <div class="modal fade none-border" id="add-state">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add </strong> State</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="product-function.php" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-md-12">
                                            <label class="control-label">Continent</label>
                                            <select name="continent" class="form-control form-white" onchange="getcontry(this.value)" required>
                                            <option value=''>Select Continent</option>
                                            <?php $product_conti = mysqli_query($conn,"SELECT * FROM `continents`");
                                             while($contidata = mysqli_fetch_assoc($product_conti)) {  ?>
                                            <option value="<?php echo $contidata['conti_id']; ?>"><?php echo $contidata['continents_name']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            
                                            <label class="control-label">Country Name</label>
                                            <div id="cont">
                                                <select name="country" class="form-control" required>
                                                    <option value="">Select First Continent</option>  
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">State Name</label>
                                            <input class="form-control form-white" placeholder="State Name" type="text" name="state" id="state" required />
                                        </div>
                                    
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                 <button type="submit" name="add_state" id="add_state" class="btn btn-danger waves-effect waves-light save-category">Add State
                                    </button>
                                <button type="submit" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                      <!-- Modal Add City -->
                  <div class="modal fade none-border" id="add-city">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add </strong> City</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="product-function.php" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-md-12">
                                            <label class="control-label">Continent</label>
                                            <select name="continent" class="form-control form-white" onchange="getcontry1(this.value)" required>
                                            <option value=''>Select Continent</option>
                                            <?php $product_conti = mysqli_query($conn,"SELECT * FROM `continents`");
                                             while($contidata = mysqli_fetch_assoc($product_conti)) {  ?>
                                            <option value="<?php echo $contidata['conti_id']; ?>"><?php echo $contidata['continents_name']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            
                                            <label class="control-label">Country Name</label>
                                            <div id="cont1">
                                                <select name="country" class="form-control" required>
                                                    <option value="">Select First Continent</option>  
                                                </select>
                                            </div>

                                        </div>
                                        <!-- <div class="col-md-12">
                                            
                                            <label class="control-label">State Name</label>
                                            <div id="sta">
                                                <select name="state_c" class="form-control" required>
                                                    <option value="">Select First Country</option>  
                                                </select>
                                            </div>

                                        </div> -->
                                        <div class="col-md-12">
                                            <label class="control-label">City Name</label>
                                            <input required class="form-control form-white" placeholder="City Name" type="text" name="city" id="city" />
                                        </div>
                                    
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                 <button type="submit" name="add_city" id="add_city" class="btn btn-danger waves-effect waves-light save-category">Add City
                                    </button>
                                <button type="submit" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function getcontry(cid){
                        var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("cont").innerHTML = this.responseText;
							}
						};
						xmlhttp.open("GET", "getcontry.php?con="+cid, true);
						xmlhttp.send();
                    }
                    function getcontry1(cid){
                        var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("cont1").innerHTML = this.responseText;
							}
						};
						xmlhttp.open("GET", "getcontry1.php?con="+cid, true);
						xmlhttp.send();
                    }
                    function getstate(sid){
                        var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("sta").innerHTML = this.responseText;
							}
						};
						xmlhttp.open("GET", "getstate.php?st="+sid, true);
						xmlhttp.send();
                    }
                </script>
                    <!-- Modal Add technical-specification -->
                <div class="modal fade none-border" id="add-technical-specification">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add Product</strong> Specification</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="product-function.php" enctype="multipart/form-data">
                                    <div class="row">
                                         <!-- <div class="col-md-6">
                                            
                                            <label class="control-label">Technical Specification heading</label>
                                            <input class="form-control form-white" placeholder="Enter Feature heading" type="text" name="technical_specification" id="technical_specification" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Image</label>
                                            <input class="form-control form-white" placeholder="Select Image" type="file" name="technical_specification_img" id="technical_specification_img" />
                                        </div> -->
                                        <div class="col-md-12">
                                            <input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>">
                                            <label class="control-label">Specification</label>
                                            <textarea class="form-control form-white" style='border: 1px solid black;' id="specification" name="specification" placeholder="specification"></textarea>
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="add-tech_sp" class="btn btn-danger waves-effect waves-light save-category" name="add_tech_sp" >Add  Specification</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- END MODAL -->
                     <!-- Modal Add Gallery -->
                <div class="modal fade none-border" id="add-gallery">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add Gallery</strong> in Product</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" multipart="" action="product-function.php" enctype="multipart/form-data">
                                    <input type="hidden" name="pid" value="<?php echo $_GET['pid']; ?>">
                                    <div class="row">
                                         <div class="col-md-6">
                                            <label class="control-label"></label>
                                            <input type="file" class="form-control form-white" name="mytext[]">
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label"></label>
                                              <div class="">
                                                <button class="add_field_button btn-success">Add image</button>
                                            </div>
                                        </div>
                                         <div class="col-md-1">
                                        </div>
                                        <div class="col-md-12 input_fields_wrap" style="padding: 0;margin: 0;">
                                        </div>
                                       
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="add-gallery" class="btn btn-danger waves-effect waves-light save-category" name="add_gallery" >Add Gallery</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- END MODAL -->

                <!-- END MODAL -->
                     <!-- Modal Add Gallery -->
                <div class="modal fade none-border" id="add-work">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add </strong> Work</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" multipart="" action="product-function.php" enctype="multipart/form-data">
                                    <div class="row">
                                         <div class="col-md-6">
                                            <label class="control-label"></label>
                                            <input type="file" class="form-control form-white" name="work[]">
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="control-label"></label>
                                              <div class="">
                                                <button class="add_field_button1 btn-success">Add image</button>
                                            </div>
                                        </div>
                                         <div class="col-md-1">
                                        </div>
                                        <div class="col-md-12 input_fields_wrap1" style="padding: 0;margin: 0;">
                                        </div>
                                       
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" id="add-gallery" class="btn btn-danger waves-effect waves-light save-category" name="add_work" >Add Work</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- END MODAL -->
  
                 <!-- Modal Add Event -->
                <div class="modal fade none-border" id="add-event">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> Event </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" enctype="multipart/form-data" action="product-function.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Event Name</label>
                                            <input class="form-control form-white" placeholder="Enter name : Please do not enter (-) here" type="text" name="event_name" id="event_name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Mentor Name</label>
                                            <input class="form-control form-white" placeholder="Mentor Name" type="guest" name="guest" id="venue" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Event Date</label>
                                            <input class="form-control form-white" placeholder="Event Date" type="date" name="event_date" id="event_date" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Event Time</label>
                                            <input class="form-control form-white" placeholder="Event Time" type="time" name="event_time" id="event_time" />
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Event Description</label>
                                            <textarea name="event_desc" placeholder="Event Description" class="form-control form-white"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="control-label">Mentor image</label>
                                            <input class="form-control form-white" placeholder="Event Image" type="file" name="event_img" id="event_img" />
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="event_submit" id="add-product" class="btn btn-danger waves-effect waves-light save-category">Add Event
                                    </button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
               
                <!-- END MODAL -->
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-testimonial">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> Testimonials</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form method="post" enctype="multipart/form-data" action="product-function.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label"> Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="testi_name" id="m-name" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label"> image</label>
                                            <input class="form-control form-white" placeholder="Testimonial Image" type="file" name="testi_img" id="product_img" />
                                        </div>
                                        <!-- <div class="col-md-6">
                                            <label class="control-label">Product URL(Read more)</label>
                                            <input class="form-control form-white" placeholder="Product URL" type="text" name="url" id="url" />
                                        </div> -->
                                        
                                        
                                        <div class="col-md-12">
                                            <label class="control-label">Testimonials Description</label>
                                            <textarea name="testi_desc" placeholder="Testimonial Description" class="form-control form-white"></textarea>
                                        </div>
                                        
                                    </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="testimonial_submit" id="add-testimonial" class="btn btn-danger waves-effect waves-light save-category">Add Testimonials
                                    </button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
               
                <!-- END MODAL -->
               <!--  <div class="input_fields_wrap">
    <button class="add_field_button">Add More Fields</button>
    <div><input type="text" name="mytext[]"></div>
</div> -->
                                


                <!-- Modal Add Advertise -->
                <div class="modal fade none-border" id="add-new-add">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> a Addvertise</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Advertise Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" id="add-name" />
                                        </div>

                                        <div class="col-md-6">
                                            <label class="control-label">Amount</label>
                                            <input class="form-control form-white" placeholder="Enter Amount in $" type="text" name="category-name" id="amount" />
                                        </div>

                                        <div class="col-md-6">
                                            <label class="control-label">Start Date</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="date" name="category-name" id="start-date" />
                                        </div>

                                        <div class="col-md-6">
                                            <label class="control-label">Expaire Date</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="date" name="category-name" id="exp-date" />
                                        </div>

                                        <div class="col-md-12">
                                            <label class="col-md-3">File Upload</label>
                                            <div class="col-md-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                                                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="add-meetup" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Add Membership</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                

                // Initialize CKEditor
                //CKEDITOR.inline( 'short_desc' );

                // CKEDITOR.replace('ovr-desc',{
                //   extraPlugins : 'uploadimage', 
                //   filebrowserBrowseUrl:'browser.php',
                //   filebrowserUploadMethod:'form',
                //   filebrowserUploadUrl:'upload.php',
                //   width: "100%",
                //   height: "100px"

                // }); 
                // CKEDITOR.replace('prod  desc',{
                //     extraPlugins : 'filebrowser',
                //     filebrowserBrowseUrl:'browser.php?type=Images',
                //     filebrowserUploadMethod:"form",
                //     filebrowserUploadUrl:"upload.php"
                //     // width: "100%",
                //     // height: "100px"
                //   });
                // CKEDITOR.replace('specification',{
                //     extraPlugins : 'filebrowser',
                //     filebrowserBrowseUrl:'browser.php?type=Images',
                //     filebrowserUploadMethod:"form",
                //     filebrowserUploadUrl:"upload.php"
                //     // width: "100%",
                //     // height: "100px"
                //   });
                // CKEDITOR.replace('white_desc',{
                //     extraPlugins : 'filebrowser',
                //     filebrowserBrowseUrl:'browser.php?type=Images',
                //     filebrowserUploadMethod:"form",
                //     filebrowserUploadUrl:"upload.php"
                //     // width: "100%",
                //     // height: "100px"
                //   });

                </script>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
               
                <!-- END MODAL -->
                <script type="text/javascript">
                    $(document).ready(function() {
                        var max_fields      = 10; //maximum input boxes allowed
                        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                        var add_button      = $(".add_field_button"); //Add button ID
                        
                        var x = 1; //initlal text box count
                        $(add_button).click(function(e){ //on add input button click
                            e.preventDefault();
                            if(x < max_fields){ //max input box allowed
                                x++; //text box increment
                                $(wrapper).append('<div style="display:inline-block;padding-top:5px;" class="col-md-12"><input style="width:60%;margin:0 10px 0 0;display:inline-block" type="file" name="mytext[]"/ class="form-control form-white"><a href="#" class="remove_field btn btn-danger btn-sm" style="display:inline-block;">Remove</a></div>'); //add input box
                            }
                        });
                        
                        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                            e.preventDefault(); $(this).parent('div').remove(); x--;
                        })

                        ///// WORK DETAILS  ////////

                        var max_fields1      = 10; //maximum input boxes allowed
                        var wrapper1         = $(".input_fields_wrap1"); //Fields wrapper
                        var add_button1      = $(".add_field_button1"); //Add button ID
                        
                        var x = 1; //initlal text box count
                        $(add_button1).click(function(e){ //on add input button click
                            e.preventDefault();
                            if(x < max_fields1){ //max input box allowed
                                x++; //text box increment
                                $(wrapper1).append('<div style="display:inline-block;padding-top:5px;" class="col-md-12"><input style="width:60%;margin:0 10px 0 0;display:inline-block" type="file" name="work[]"/ class="form-control form-white"><a href="#" class="remove_field btn btn-danger btn-sm" style="display:inline-block;">Remove</a></div>'); //add input box
                            }
                        });
                        
                        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                            e.preventDefault(); $(this).parent('div').remove(); x--;
                        })

                        //// AWARD JS FUNCTION

                         var max_fields2      = 10; //maximum input boxes allowed
                        var wrapper2         = $(".input_fields_wrap2"); //Fields wrapper
                        var add_button2      = $(".add_field_button2"); //Add button ID
                        
                        var x = 1; //initlal text box count
                        $(add_button2).click(function(e){ //on add input button click
                            e.preventDefault();
                            if(x < max_fields2){ //max input box allowed
                                x++; //text box increment
                                $(wrapper2).append('<div style="display:inline-block;padding-top:5px;" class="col-md-12"><input style="width:60%;margin:0 10px 0 0;display:inline-block" type="file" name="award[]"/ class="form-control form-white"><a href="#" class="remove_field btn btn-danger btn-sm" style="display:inline-block;">Remove</a></div>'); //add input box
                            }
                        });
                        
                        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                            e.preventDefault(); $(this).parent('div').remove(); x--;
                        })
                    });


                </script>