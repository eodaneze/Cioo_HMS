<?php
 require_once("./connection.php");

 if(isset($_POST['submit'])){
    //  $name = $_POST['name'];
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
    $cpassword = isset($_POST['password']) ? trim($_POST['cpassword']) : "";

    if($name == "" || $email == "" || $password == ""|| $cpassword == "" ){
        $error = urlencode("all fields are required");
			header("location: ../addmin_Register.php?error=".$error);
			return false;
    }else{
        $name = trimData($name);
        $email = trimData($email);
        $password = trimData($password);
        $cpassword = trimData($cpassword);
    }
    if($password != $cpassword){
        $error = urlencode("Password Mismatch");
			header("location: ../addmin_Register.php?error=".$error);
			return false;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = urlencode("please enter a proper email");
			header("location: ../addmin_Register.php?error=".$error);
			return false;
    }else{
        $new_pass = md5($password);
        $md = date('y-m-d');
        $check= "SELECT * FROM admin WHERE email = '$email'";
        $check_result = mysqli_query($con, $check);
        if(mysqli_num_rows($check_result) == 1){
            $error = urlencode("email address already taken");
				header("location: ../addmin_Register.php?error=".$error);
				return false;
        }
        if($_FILES['file']['name'] != ''){
            $filename = $_FILES['file']['name'];
            $filetmp = $_FILES['file']['tmp_name'];
            $filesize = $_FILES['file']['size'];
            $filetype = $_FILES['file']['type'];
            $fileext = explode('.', $filename);
            $fileactualext = strtolower(end($fileext));
        
            $allow = array('jpg', 'jpeg', 'png', 'gif');
        
            if(in_array($fileactualext, $allow)){
                if($filesize < 8000000){
                    $pic = uniqid('',true).'.'.$fileactualext;
                    $filedestination = 'admindp/'.$pic;
        
                    if(move_uploaded_file($filetmp, $filedestination)){
                        $sql = "INSERT INTO admin(name, email, password, apic, createddate)VALUES('$name', '$email', '$new_pass','$pic', '$md')";
                        $result = mysqli_query($con, $sql);

                        if($result){
                            $success = urlencode("registration successful");
					        header("location: ../addmin_Register.php?success=".$success);
					     return false;
                        }else{
                            $error = urlencode("error creating admin");
					        header("location: ../addmin_Register.php?error=".$error);
					      return false;
                        }
                    }
                }
            }
           }
    }
    
   
 }else{
    $error = urlencode("please login first");
    header("location: ../index.php?error=".$error);
    return false;
 }


 function trimData($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);

    return $data;
}
 
?>