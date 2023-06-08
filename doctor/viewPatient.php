<?php
require("./header.php");
require("./navbar.php");
require("./sidebar.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM patient WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $row2 = mysqli_fetch_array($result);
    
}


?>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <div>
                <?php 
                  $sql = "SELECT * FROM patient WHERE id = '$id'";
                  $result = mysqli_query($con, $sql);
                   while($row = mysqli_fetch_assoc($result)){
                       $name = $row['name'];
                       $email = $row['email'];
                       $address2 = $row['address2'];
                       $phone = $row['phone'];
                       $gender = $row['gender'];
                       $mstatus = $row['mstatus'];
                       $dob = $row['dob'];
                       $bgroup = $row['bgroup'];
                       $genotype = $row['genotype'];
                       $mchal = $row['mchallenge'];
                       $pic = $row['pic'];
                       $createddate = $row['createddate'];
                       ?>
                <table border="1" class="table table-bordered">
                    <tr align="center">
                        <td colspan="4" class="h2">Patient Details</td>
                        <td><img src="../includes/patientdp/<?=$pic?>" alt="" style="width: 100%; height: 8rem"></td>
                    </tr>
                    <tr>
                        <th scope>Patient Name</th>
                        <td><?=$name?></td>
                        <th scope>Patient Email</th>
                        <td><?=$email?></td>

                    </tr>
                    <tr>
                        <th scope>Patient Mobile Number</th>
                        <td><?=$phone?></td>
                        <th scope>Patient Address</th>
                        <td><?=$address2?></td>
                    </tr>
                    <tr>
                        <th scope>Patient Gender</th>
                        <td><?=$gender?></td>
                        <th scope>Marital Status</th>
                        <td><?=$mstatus?></td>
                    </tr>
                    <tr>
                        <th scope>Patient Date Of Request</th>
                        <td><?=$createddate?></td>
                    </tr>
                </table>

                <?php
                   };
                  
?>
            </div>


            <div>
                <table border="1" class="table table-bordered">
                    <tr align="center">
                        <th colspan="8">Patient Medical History</th>
                    </tr>
                    <tr>
                        <th>S/N</th>
                        <th>Bloog Group</th>
                        <th>Geno Type</th>
                        <th>Medical Challenge</th>
                    </tr>
                    <tr>
                        <?php
                            $sql = "SELECT * FROM patient WHERE id = '$id'";
                            $result = mysqli_query($con, $sql);
                            $num = 1;
                            while($row = mysqli_fetch_assoc($result)){
                       $bgroup = $row['bgroup'];
                       $genotype = $row['genotype'];
                       $mchal = $row['mchallenge'];

                       ?>
                        <th><a href=""><?=$num++?></a></th>
                        <td><?=$bgroup?></td>
                        <td><?=$genotype?></td>
                        <td><?=$mchal?></td>

                        <?php
                    
                    
                   }
?>
                    </tr>

                </table>
            </div>

            <div align="center">
                <a href="./addPrescription.php?id=<?=$id?>"> <button class="btn btn-primary"><i
                            class="fa fa-plus-circle"></i>
                        Add
                        Prescription</button></a>

            </div>
        </div>
    </div>

    <!--Add prescription -->




    <?php 
  require('./footer.php');

?>