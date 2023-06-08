<?php 
require_once("./connection.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
if(isset($_POST['update'])){
   $dept_name = $_POST['dept_name'];
//    $id = $_POST['id'];
//    echo $id;
//    die();
   
   $sql = "UPDATE `department` SET `dept_name` = '$dept_name' WHERE `id` = $id;";
   $result = mysqli_query($con, $sql);
   if($result){
       echo "Doctors sepcialization have been updated successfully";
   }
}


?>