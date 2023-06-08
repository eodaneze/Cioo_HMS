<?php 
require_once("./connection.php");
if(isset($_POST['add'])){
    $dept_name = $_POST['dept_name'];
    $md = date('Y-m-d H:i:s');
    if($dept_name == ""){
        $error = urlencode("Please add specialization");
        header("location: ../add_Department.php?error=".$error);
        return false; 
    }else{
        
        $sql = "INSERT INTO department(dept_name, createddate)VALUES('$dept_name', '$md')";
        $result = mysqli_query($con, $sql);
        if($result){
            $success = urlencode("New doctor's Specialization have been added successfully");
            header("location: ../add_Department.php?success=".$success);
            return false;
        }else{
            $error = urlencode('Error adding department');
            header("location ../add_Department.php?error=".$error);
            
        }
    }
}else{
    $error = urlencode('Login first');
        header("location ../index.php?error=".$error);
        
};


?>