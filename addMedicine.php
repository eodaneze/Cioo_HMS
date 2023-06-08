<?php 
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");


?>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">

            <div class="all-form">
                <h4>Add Medcines</h4>
                <form action="./includes/add_Medicine.php" method="post" enctype="multipart/form-data">
                    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
                        <div class="row">
                            <div class="form-group col-lg-8">
                                <label for="" style='color: #555;'>Add Medicines</label>
                                <input name="med_name" type="text" class="form-control" placeholder="Medicine name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="" style='color: #555;'>Medicine Image</label>
                                <input name="file" type="file" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="add">Submit</button>
                        </div>
                    </div>
                    <h5>Manage Medicines</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table table-border">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">S/N</th>
                                    <th scope="col">Medcine Name</th>
                                    <th scope="col">Medcine Sample</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                   $sql = "SELECT * FROM medicine WHERE deleted = 1";
                                   $result = mysqli_query($con, $sql);
                                   $num = 1;
                                   while($row = mysqli_fetch_assoc($result)){
                                       $med_name = $row['med_name'];
                                       $med_pic = $row['med_image'];
                                       $created= $row['createddate'] ;
                                       $id = $row['id'];
                                       ?>
                                <tr>
                                    <th><?=$num++?></th>
                                    <td><?=$med_name ?></td>
                                    <td>
                                        <img src="./includes/drugdp/<?=$med_pic?>" alt=""
                                            style="width: 3rem; height: 3rem;">
                                    </td>
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
 require_once("./footer.php")
?>