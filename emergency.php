<?php
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");



?>
<style>
.operation-icon a {
    margin: 0 5px;
}
</style>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;" class="container-wrapper">
            <h4>View Emergency</h4>
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table table-border">
                <thead>
                    <tr class="text-center">
                        <th scope="col">S/N</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Appointment Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                       $sql = "SELECT * FROM  emergency WHERE deleted = 1";
                       $result = mysqli_query($con, $sql);
                       $num = 1;
                       while($row = mysqli_fetch_assoc($result)){
                           $name = $row['name'];
                           $email= $row['email'];
                           $phone = $row['phone'];
                           $address2 = $row['address2'];
                           $id = $row['id'];
                           $md= $row['createddate'];
                           ?>
                    <tr>
                        <th><a href=""><?=$num++?></a></th>
                        <td><?=$name?></td>
                        <td><?=$email?></td>
                        <td><?=$phone?></td>
                        <td><?=$address2?></td>
                        <td><?=$md?></td>
                        <td>Pending</td>
                        <td class="operation-icon">
                            <a href="./view_Emergency.php?viewid=<?=$id?>"><i class="fa fa-eye"></i></a>
                            <a href=""><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                    <?php
                       }
                       

?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php 
require("./footer.php")
?>quire("./footer.php")
?>