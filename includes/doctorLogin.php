<?php
// session_start();
 require_once("./connection.php");
 if(isset($_POST['submit'])){
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
    $cpassword = isset($_POST['password']) ? trim($_POST['cpassword']) : "";
    
    if($email == "" || $password == ""){
        $error = urlencode("all fields are required");
			header("location: ../doctor/login.php?error=".$error);
			return false;
    }
    if($password != $cpassword){
        $error = urlencode("Password Mismatch");
        header("location: ../doctor/login.php?error=".$error);
        return false; 
    }else{
        $email = trimData($email);
		$password = trimData($password);
		$cpassword = trimData($cpassword);
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = urlencode("please enter a proper email");
		header("location: ../doctor/login.php?error=".$error);
		return false;
    }else{
        // $new_pass = md5($password);
        $sql = "SELECT * FROM doctor WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['doctorsid'] = $row['id'];
            if(isset($_SESSION['doctorsid'])){
                $success = urlencode("You have logged in successfully");
                header('location:../doctor/doctors_Dashboard.php?success='.$success);
                return false;
            }else{
                $failed = urlencode("email or password is incorrect");
					header('location: ../doctor/login.php?error='.$failed);
					return false;
            }
        }else{
            $notfound = urlencode('user not found');
				header('location: ../doctor/login.php?error='.$notfound);
				return false;
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

?><a href="../doctor/login.php"></a>