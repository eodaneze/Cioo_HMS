<?php 
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
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

                <table border="1" class="table table-bordered">
                    <tr>
                        <td colspan="4">Patient Mdical History</td>
                    </tr>
                </table>
                <?php
                   };
                  
?>
            </div>

        </div>
    </div>
</div>

<?php 
require_once("./footer.php")

?>