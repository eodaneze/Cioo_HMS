<?php 
require_once("./connection.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM department WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        $success = urlencode("Doctors specialization have been deleted successfully");
        header("location: ../add_Department.php?success=".$success);
        return false;
    }else{
        echo "Error deleting department";
    }
}

?>