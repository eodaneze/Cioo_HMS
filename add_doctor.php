<?php
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");

?>

<body>

    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">

        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row" style="margin-top: 5rem ;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Basic Information</a></li>
                                <!-- <li><a href="#reviews"> Account Information</a></li>
                                <li><a href="#INFORMATION">Social Information</a></li> -->
                            </ul>
                            <?php 
                                   if(isset($_GET['error'])){
                                   ?>
                            <div class="alert alert-danger text-center"><?= urldecode($_GET['error']) ?>
                            </div> <?php
                              }else if(isset($_GET['success'])){
                                ?>
                            <div class="alert alert-success text-center"><?= urldecode($_GET['success']) ?>
                            </div> <?php
                              }
                            ?>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="./includes/addDoctor.php" method="post"
                                                        class="dropzone dropzone-custom needsclick add-professors"
                                                        id="demo1-upload" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="name" type="text" class="form-control"
                                                                        placeholder="Full Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="email" type="email"
                                                                        class="form-control" placeholder="Email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password" type="password"
                                                                        class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="address2" type="text"
                                                                        class="form-control" placeholder="Address">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="mobileno" type="number"
                                                                        class="form-control" placeholder="Mobile no.">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="dob" id="finish" type="date"
                                                                        class="form-control"
                                                                        placeholder="Date of Birth">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="postcode" id="postcode" type="text"
                                                                        class="form-control" placeholder="Postcode">
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                    <input type="file" title="Upload Profile "
                                                                        class="form-control" name="file" id="">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <select name="dept" class="form-control">
                                                                        <option>
                                                                            Department</option>
                                                                        <option>Dentist</option>
                                                                        <option>Health</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="descp"
                                                                        placeholder="Description"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="gender" class="form-control">
                                                                        <option>
                                                                            Select Gender</option>
                                                                        <option>Male</option>
                                                                        <option>Female</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select name="state" class="form-control">
                                                                        <option>
                                                                            Select state</option>
                                                                        <option>Gujarat</option>
                                                                        <option>Maharastra</option>
                                                                        <option>Rajastan</option>
                                                                        <option>Maharastra</option>
                                                                        <option>Rajastan</option>
                                                                        <option>Gujarat</option>
                                                                    </select>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light"
                                                                        name="submit">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Developed by <a
                                    href="https://colorlib.com/wp/templates/">Dev_Daniels</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("./footer.php") ?>