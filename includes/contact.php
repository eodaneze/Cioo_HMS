<?php 
require_once('./connection.php');
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $md = date('Y:m:d');
    
    if($name == "" || $email == "" || $subject == "" || $message == ""){
        $error = urlencode("All fileds are required");
        header('location: ../index.php?$error='.$error);
    }else{
        $sql = "INSERT INTO contact(name, email, subject, message, createddate)VALUES('$name', '$email', '$subject', '$message', '$md)";
        $result = mysqli_query($con, $sql);
        if($result){
            $success = urlencode('Your message was sent successfully');
            header('location: ../index.php?succes='.$success);
        }else{
            $error = urlencode('Error sending messsage');
            header('location: ../index.php?error='.$error);
        }
    }

}


?>