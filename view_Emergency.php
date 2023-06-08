<?php 
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");
if(isset($_GET['viewid'])){
    $id = $_GET['viewid'];
}

?>

<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <div>
                <?php 
                  $sql = "SELECT * FROM emergency WHERE id = '$id'";
                  $result = mysqli_query($con, $sql);
                   while($row = mysqli_fetch_assoc($result)){
                       $name = $row['name'];
                       $email = $row['email'];
                       $phone = $row['phone'];
                       $address2 = $row['address2'];
                       $dept = $row['dept'];
                       $doctor = $row['doctor'];
                       $message = $row['message'];
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
                        <th scope>Contacted Department</th>
                        <td><?=$dept?></td>
                        <th scope>Contacted Doctor</th>
                        <td><?=$address2?></td>
                    </tr>
                    <tr>
                        <th scope>Patient Emergency Message</th>
                        <td><?=$message?></td>
                        <th scope>Patient Date Of Request</th>
                        <td><?=$createddate?></td>
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