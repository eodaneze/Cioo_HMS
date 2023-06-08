<?php 
require_once("./connection.php");
 if(isset($_POST['submit'])){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $address2 = $_POST['address2'];
     $dept = $_POST['dept'];
     $doctor = $_POST['doctor'];
     $message = $_POST['message'];
     $md = date('Y-m-d H:m:s');

     $sql = "INSERT INTO emergency(name, email, phone, address2, dept,doctor, message, createddate)VALUES ('$name', '$email', '$phone', '$address2', '$dept', '$doctor', '$message','$md')";
     $result = mysqli_query($con, $sql);
     if($result){
        $success = urlencode("Your appointment request has been sent successfully. The doctor will get back to you as soon as possible.");
        header("location: ../index.php?success=".$success);
        return false;
    }else{
        $error = urlencode("An error occured why trying to book appointment");
        header("location: ../index.php?success=".$error);
        return false;
    }
 }


?>