<?php 
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");


?>
<style>

</style>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">

            <div class="all-form">
                <h4>Doctor Specialization</h4>
                <form action="./includes/addDepartment.php" method="post">
                    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
                        <div class="row">
                            <div class="form-group col-lg-8">
                                <label for="" style='color: #555;'>Doctor Specialization</label>
                                <input name="dept_name" type="text" class="form-control" placeholder="Department Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="add">Submit</button>
                        </div>
                        <?php
                  if(isset($_GET['error'])){
                       ?>
                        <div class="alert alert-danger text-center"><?=urldecode($_GET['error'])?></div>

                        <?php
                }else if(isset($_GET['success'])){
                    ?>
                        <div class="alert alert-success text-center"><?=urldecode($_GET['success'])?></div>

                        <?php
                }
                ?>
                    </div>
                    <h5>Manage Doctor Specialization</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-border">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">S/N</th>
                                    <th scope="col">Specialization</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $sql = "SELECT * FROM department WHERE deleted = 1";
                                   $result = mysqli_query($con, $sql);
                                   $num = 1;
                                   while($row = mysqli_fetch_assoc($result)){
                                       $dept_name = $row['dept_name'];
                                       $created= $row['createddate'] ;
                                       $id = $row['id'];
                                       ?>
                                <tr>
                                    <th><?=$num++?></th>
                                    <td><?=$dept_name ?></td>
                                    <td><?=$created ?></td>
                                    <td>
                                        <a href="./updateDept.php?id=<?=$id?>"><i class="fa fa-edit"></i></a>
                                        <a href="./includes/delete_dept.php?id=<?=$id?>"><i class="fa fa-close"></i></a>
                                    </td>
                                </tr>
                                <?php
                                   }
?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>


        </div>
    </div>
</div>
<?php 
  require_once("./footer.php");
?>