<?php 
require_once("./connection.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql ="DELETE FROM doctor WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    if($result){
        $success = urlencode("Doctor have been deleted successfully");
        header('location: ../view_doctors.php?success=' .$success);
    }
}else{
    header("location: ../index.php");
}

?>