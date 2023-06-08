<?php
 require_once("./home_header.php");
 
?>

<body
    style='background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.5)), url("../assets/img/doctors/doctors-4.jpg") center/cover fixed no-repeat; height: 100vh; width: 100%;'>
    <div class="container p-4">
        <h1 class="logo me-auto"><a href="index.php">CiooMedicals</a></h1>
    </div>

    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3 style="color: #fff;">DOCTOR'S LOGIN</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body">
                        <?php 
                           if(isset($_GET['error'])){
                              ?>
                        <div class="alert alert-danger text-center"><?=urldecode($_GET['error'])?></div>
                        <?php
                           }
                        ?>
                        <form action="../includes/doctorLogin.php" method="post" enctype="multipart/form-data"
                            id="loginForm">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Email Address</label>
                                    <input class="form-control" name="email">
                                    <span class="help-block small">Your unique email to app</span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control" name="cpassword">
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success btn-block loginbtn" name="submit">Login</button>

                            </div>
                            <p>Don't have an account <a href="./patient_Register.php"
                                    style="background-color: white; color: blue">Register</a></p>
                        </form>
                    </div>
                </div>
            </div>

            <div class="text-center login-footer">
                <p>Copyright © 2023. All rights reserved. Developed Dev_Daniels</p>
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