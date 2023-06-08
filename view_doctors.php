<?php 
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");
require_once("./includes/connection.php");

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="all-content-wrapper">
    <div class="all-wrapper">

        <div style="padding: 8rem 0 20px 0;">
            <h4>All Registered Doctors</h4>
            <div class="container">
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
            </div>
            <div class="all-tables table-responsive text-nowrap">
                <table class="table table-striped" style="background-color: white; box-shadow:2px 4px 6px #ccc ">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Name</th>
                            <th scope="col">Profile Picture</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone No.</th>
                            <th scope="col">Date Of Birth</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col">Department</th>
                            <th scope="col">State</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Operations</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
$doctorsqli = "SELECT * FROM doctor WHERE deleted = 1";
$doctorrun = mysqli_query($con, $doctorsqli);
if(mysqli_num_rows($doctorrun) > 0){
    $num = 1;
    while($row = mysqli_fetch_assoc($doctorrun)){
         ?>
                        <tr>
                            <th scope="row"><a href=""><?=$num++?></a></th>
                            <td><?=$row['name'] ?></td>
                            <td><img src="./includes/doctorsdp/<?=$row['dpic']?>" alt=""
                                    style="width: 3rem; height: 3rem; border-radius: 50%"></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['password']?></td>
                            <td><?=$row['address2']?></td>
                            <td><?=$row['mobileno']?></td>
                            <td><?=$row['dob']?></td>
                            <td><?=$row['pcode']?></td>
                            <td><?=$row['dept']?></td>
                            <td><?=$row['state']?></td>
                            <td><?=$row['gender']?></td>
                            <td>
                                <i class=" fa fa-edit" style="color: green"></i>
                                <a href="./includes/deleteDoctor.php?id=<?= $row['id'] ?>"><i class="fa fa-trash"
                                        style="margin: 0 15px; color: red;"></i></a>
                                <a href="./view_doctor.php?id=<?= $row['id']?>"><i class="fa fa-eye"
                                        style="color: blue"></i></a>
                            </td>


                        </tr>
                        <?php
    }
}
?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once("./footer.php") ?>