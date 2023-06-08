<?php
//    require('./includes/connection.php');
$hostname = "localhost";
$username = "root";
$password= "";
$dbname = "cioomedicals";

$con = mysqli_connect($hostname, $username, $password, $dbname);
if(!$con){
    echo("Failed to connect to db");
}
   session_start();
   if(isset($_SESSION['doctorsid'])){
        $doctorsid = $_SESSION['doctorsid'];
        $ad = "SELECT * FROM doctor WHERE id = '$doctorsid'";
        $adrun = mysqli_query($con, $ad);
        $row = mysqli_fetch_assoc($adrun);
        $name = $row['name'];
        $pic = $row['dpic'];
        // $title = $row['title'];
        $email = $row['email'];
        $address2 = $row['address2'];
        $phone = $row['mobileno'];
        $gender = $row['gender'];
        $dept = $row['dept'];
        $dob = $row['dob'];
   }
   $age = (date('Y') - date('Y', strtotime($dob)));
?>

<div class="header-advance-area">
    <div class="header-top-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="header-top-wraper">
                        <div class="row">
                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                <div class="menu-switcher-pro">
                                    <button type="button" id="sidebarCollapse"
                                        class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                        <i class="educate-icon educate-nav"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="header-right-info">
                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">


                                        <li class="nav-item" style="position: relative; left: 40rem; ">
                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                                                class="nav-link dropdown-toggle">
                                                <img src="../includes/doctorsdp/<?=$pic?>" alt="" />
                                                <span class="admin-name">

                                                    <?=$name?> </span>
                                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                            </a>
                                            <ul role="menu"
                                                class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="#"><span
                                                            class="edu-icon edu-home-admin author-log-ic"></span>My
                                                        Account</a>
                                                </li>
                                                <li><a href="#"><span
                                                            class="edu-icon edu-user-rounded author-log-ic"></span>My
                                                        Profile</a>
                                                </li>
                                                <li><a href="#"><span
                                                            class="edu-icon edu-money author-log-ic"></span>User
                                                        Billing</a>
                                                </li>
                                                <li><a href="#"><span
                                                            class="edu-icon edu-settings author-log-ic"></span>Settings</a>
                                                </li>
                                                <li><a href="./includes/logout.php"><span
                                                            class="edu-icon edu-locked author-log-ic"></span>Log
                                                        Out</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img src="./includes/admindp/<?=$pic?>" alt=""> -->
        </div>
    </div>
</div>