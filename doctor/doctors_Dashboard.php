<?php 
 require("./header.php");
 require("./navbar.php");
 require("./sidebar.php");

 // number of patient count
$sql = "SELECT COUNT(*) AS patient FROM patient";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$patientcount = $row['patient'];

// number of appointment count
$sql2 = "SELECT COUNT(*) AS appointment FROM appintment";
$result2 = mysqli_query($con, $sql2);
$row2 = mysqli_fetch_array($result2);
$appointmentcount = $row2['appointment'];

// number of emergency count
$sql3 = "SELECT COUNT(*) AS emergency FROM emergency";
$result3 = mysqli_query($con, $sql3);
$row3 = mysqli_fetch_array($result3);
$emergencycount = $row3['emergency'];

?>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <h4>CiooMediclas | Doctors Dashboard</h4>
            <div class="alert alert-success text-center container">Welcome Dr. <?=$name?></div>

            <div>
                <div class="row">

                    <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30" style=" border: 1px solid #ccc">
                            <div class="analytics-content" style="text-align: center;">
                                <div>

                                    <i class="fa fa-users fa-2x" style="color: #006DF0; margin-bottom: 10px;"></i>
                                </div>
                                <div>
                                    <h4 style="color: #286090; font-size: 25px;">Patient</h4>
                                </div>
                                <div>
                                    <h4 style="color: #286090; font-size: 25px;"><?=$patientcount?></h4>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30" style=" border: 1px solid #ccc">
                            <div class="analytics-content" style="text-align: center;">
                                <div>

                                    <i class="fa fa-calendar fa-2x" style="color: #006DF0; margin-bottom: 10px;"></i>
                                </div>
                                <div>
                                    <h4 style="color: #286090; font-size: 25px;">Appointments</h4>
                                </div>
                                <div>
                                    <h4 style="color: #286090; font-size: 25px;"><?=$appointmentcount?></h4>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="analytics-sparkle-line reso-mg-b-30" style=" border: 1px solid #ccc">
                            <div class="analytics-content" style="text-align: center;">
                                <div>
                                    <!-- <i class="fa-sharp fa-regular fa-hospital"></i> -->
                                    <i class="fa fa-hospital-o fa-2x" style="color: #006DF0; margin-bottom: 10px;"></i>
                                </div>
                                <div>
                                    <h4 style="color: #286090; font-size: 25px;">Emergency</h4>
                                </div>
                                <div>
                                    <h4 style="color: #286090; font-size: 25px;"><?=$emergencycount?></h4>
                                </div>


                            </div>
                        </div>
                    </div>



                </div>

                <div>
                    <div class="row" style="margin-top: 40px;">
                        <div class="col-lg-6">
                            <h6>Patients</h6>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>profile pic</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Operation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM  patient WHERE deleted = 1";
                                        $result = mysqli_query($con, $sql);
                                        $num = 1;
                                        while($row = mysqli_fetch_array($result)){
                                            $name = $row['name'];
                                            $pic = $row['pic'];
                                            $email = $row['email'];
                                            $phone = $row['phone'];
                                            ?>
                                        <tr>
                                            <th><a href=""><?=$num++?></a></th>
                                            <td><?=$name?></td>
                                            <td><img src="../includes/patientdp/<?=$pic?>" alt=""
                                                    style="width: 3rem; height: 3rem; border-radius: 50%"></td>
                                            <td><?=$email?></td>
                                            <td><?=$phone?></td>
                                            <td>
                                                <a href="./viewPatient.php?id=<?=$row['id']?>"><i
                                                        class="fa fa-eye"></i></a>
                                                <a href=""><i class="fa fa-edit"></i></a>
                                                <a href=""><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                         ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h5>View Emergencies</h5>
                            <?php 
                               $sql = "SELECT * FROM emergency WHERE deleted = 1";
                               $result = mysqli_query($con, $sql);
                               while($row = mysqli_fetch_assoc($result)){
                                   $name = $row['name'];
                                   $date = $row['createddate'];
                                   ?>

                            <div style="background: white; padding: 15px; border: 1px solid #ccc">
                                <div
                                    style="display: flex; justify-content: space-between; border-bottom: 1px solid #ccc">
                                    <p><a href=""><i class="fa fa-envelope"></i></a> <?=$name?> booked an emergency on
                                        <?=$date?>
                                    </p>
                                    <div>
                                        <a href=""><i class=" fa fa-eye"></i></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                               }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?php 
  require_once("./footer.php")

?>