<?php
 require_once("./home_header.php")
?>

<body style='background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url("../assets/img/doctors/doctors-4.jpg")
    center/cover fixed no-repeat; height: 140vh; width: 100%;'>
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center custom-login">
                <h3 style="color: #ccc;">Patient Registration</h3>

            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="../includes/pateintRegister.php" id="loginForm" enctype="multipart/form-data"
                            method="post">
                            <?php 
                           if(isset($_GET['error'])){
                             ?>
                            <div class="alert alert-danger container" style="width: 100%; text-align: center;">
                                <?=urldecode($_GET['error']) ?></div>
                            <?php
                           }else if(isset($_GET['success'])){
                            ?>
                            <div class="alert alert-success container" style="width: 100%; text-align: center;">
                                <?=urldecode($_GET['success']) ?>
                            </div>
                            <?php
                           }

?>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Name</label>
                                    <input class="form-control" name="name">
                                </div>
                                <div class=" form-group col-lg-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="cpassword">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address2">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Title</label>
                                    <select name="title" id="" class="form-control">
                                        <option>--Select Title--</option>
                                        <option>Mr.</option>
                                        <option>Mrs.</option>
                                        <option>Master.</option>
                                        <option>Miss.</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Phone Number</label>
                                    <input type="phone" class="form-control" name="phone">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option>--select gender---</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Merital Status</label>
                                    <select name="mstatus" class="form-control">
                                        <option>--select status---</option>
                                        <option>Single</option>
                                        <option>Married</option>
                                        <option>Seperated</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" name="dob">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Blood Group</label>
                                    <select name="bgroup" class="form-control">
                                        <option>--select Blood Group---</option>
                                        <option>A+</option>
                                        <option>O</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Genotype</label>
                                    <select name="geno" class="form-control">
                                        <option>--select Genotype---</option>
                                        <option>A+</option>
                                        <option>O</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Medical Challenge</label>
                                    <input type="text" class="form-control" name="mchal">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Patient Profile</label>
                                    <input type="file" class="form-control" name="file">
                                </div>
                            </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-block" name="submit">Register</button>
                    </div>
                    <div class="text-center">
                        <p>Already have an account? <a href="./login.php"
                                style="background-color: transparent; color: black">Login</a>
                        </p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="text-center login-footer">
            <p style="color: #ccc;">Copyright © 2023. All rights reserved. Dev_Daniels</p>
        </div>
    </div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>