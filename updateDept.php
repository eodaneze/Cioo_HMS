<?php 
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM department WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
}
if(isset($_POST['update'])){
     $dept_name = $_POST['dept_name'];
     $sql2 = "UPDATE `department` SET `dept_name` = '$deptname' WHERE `id` = $id";
     $result2 = mysqli_query($con, $sql2);

     if($result){
         header("location: ./add_Department.php");
     }else{
        die(mysqli_error($con));
     }
}



?>

<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">

            <div class="all-form">
                <h4>Doctor Specialization</h4>
                <form action="" method=" post">
                    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
                        <div class="row">
                            <div class="form-group col-lg-8">
                                <label for="" style='color: #555;'>Update Specialization</label>
                                <input name="dept_name" type="text" class="form-control" placeholder="Department Name"
                                    value="<?=$row['dept_name']?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" name="update">Update</button>
                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
</div>

<?php
require_once("./footer.php")
?>