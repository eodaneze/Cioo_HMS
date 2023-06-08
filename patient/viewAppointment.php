<?php 
 require("./header.php");
 require("./navbar.php");
 require("./sidebar.php");


?>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <h5 style="margin-bottom: 30px;">Patient | Appointment History</h5>

            <div class="table-responsive" style="background-color: white; padding: 10px; border: 1px solid #ccc">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Doctor specialization</th>
                            <th scope="col">Name of Doctor</th>
                            <th scope="col">Appointment Time (24 hour clock)</th>
                            <th scope="col">Appointment Date</th>
                            <th scope="col">Appointment Creation date</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM appintment WHERE id = 1";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                            $num = 1;
                            $sname = $row['doc_special'];
                            $dname = $row['doc_name'];
                            $atime = $row['atime'];
                            $adate = $row['adate'];
                            $createddate = $row['createddate'];
                        }
?>
                    </tbody>
                    <tr>
                        <th><a href=""><?=$num++?></a></th>
                        <td><?=$sname?></td>
                        <td><?=$dname?></td>
                        <td><?=$atime?></td>
                        <td><?=$adate?></td>
                        <td><?=$createddate?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div><?php  require_once('./footer.php')?>