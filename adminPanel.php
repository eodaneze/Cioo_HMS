<?php 
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");

// number of doctor count
$sql1 = "SELECT COUNT(*) AS doctor FROM doctor";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($result1);
$doctorscount = $row1['doctor'];

// number of patient count
$sql2 = "SELECT COUNT(*) AS patient FROM patient";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($result2);
$patientcount = $row2['patient'];

// number of emergency count
$sql3 = "SELECT COUNT(*) AS emergency FROM emergency";
$result3 = mysqli_query($con, $sql3);
$row3 = mysqli_fetch_array($result3);
$emergencycount = $row3['emergency'];

?>

<body>
    <div class="all-content-wrapper">
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row" style="margin: 8rem 0 20px 0;">
                    <h3>Admin Dashboard</h3>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Patients</h5>
                                <h2><span class=""><?=$patientcount?></span> <span class="tuition-fees">Registered
                                        Patients</span>
                                </h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Doctors</h5>
                                <h2><span class=""><?= $doctorscount ?></span> <span class="tuition-fees">Registered
                                        Doctors</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Appointments</h5>
                                <h2><span class="">20</span> <span class="tuition-fees">Appointments</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30">
                            <div class="analytics-content">
                                <h5>Emergency</h5>
                                <h2><span class=""><?=$emergencycount?></span> <span
                                        class="tuition-fees">Emergency</span></h2>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- view patient and doctor -->
        <div class="all-container">
            <div class="container-fluid">
                <div class="view-content">
                    <div class="all-patient">
                        <h4>Registered Patient</h4>
                        <?php 
                            $patientsql = "SELECT * FROM patient WHERE deleted = 1";
                            $patientrun = mysqli_query($con, $patientsql);
                            while($patientrow = mysqli_fetch_assoc($patientrun)){
                                $name = $patientrow['name'];
                                $pic = $patientrow['pic'];
                                $id = $patientrow['id'];

                                ?>

                        <div class="patient-one">
                            <img src="./includes/patientdp/<?=$pic?>" class="rounded-circle" alt="">
                            <div class="patient-name">
                                <p><?=$name?></p>
                            </div>
                            <div>
                                <a href="./viewSingle_patient.php?id=<?=$id?>"><button class="btn btn-primary"><i
                                            class="fa fa-eye"></i>
                                        View</button></a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>


                    </div>
                    <!-- all-doctors -->
                    <div class="all-patient">
                        <h4>All Doctors</h4>

                        <?php
                            $doctorsql = "SELECT * FROM doctor WHERE deleted = 1";
                            $doctorrun = mysqli_query($con, $doctorsql);
                            if(mysqli_num_rows($doctorrun) > 0){
                                 while($row = mysqli_fetch_assoc($doctorrun)){
                                     ?>

                        <div class="patient-one">

                            <img src="./includes/doctorsdp/<?=$row['dpic'] ?>" class="rounded-circle" alt="">
                            <div class="patient-name">
                                <p><?= $row['name'] ?></p>
                            </div>
                            <div>
                                <button class="btn btn-primary"><i class="fa fa-eye"></i> View</button>
                            </div>
                        </div>
                        <?php
                                 }
                            }
?>

                    </div>

                </div>
            </div>
        </div>
        <!--end of view patient and doctor -->

        <?php require_once("./footer.php") ?>