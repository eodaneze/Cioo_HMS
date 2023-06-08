<?php
 require_once("./connection.php");

 if(isset($_POST['submit'])){
    //  $name = $_POST['name'];
    $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    $password = isset($_POST['password']) ? trim($_POST['password']) : "";
    $cpassword = isset($_POST['cpassword']) ? trim($_POST['cpassword']) : "";
    $address2 = isset($_POST['address2']) ? trim($_POST['address2']) : "";
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : "";
    $gender = isset($_POST['gender']) ? trim($_POST['gender']) : "";
    $mstatus = isset($_POST['mstatus']) ? trim($_POST['mstatus']) : "";
    $dob = isset($_POST['dob']) ? trim($_POST['dob']) : "";
    $bgroup = isset($_POST['bgroup']) ? trim($_POST['bgroup']) : "";
    $geno = isset($_POST['geno']) ? trim($_POST['geno']) : "";
    $mchal = isset($_POST['mchal']) ? trim($_POST['mchal']) : "";

    if($name == "" || $email == "" || $password == ""|| $cpassword == "" || $address2 == "" || $phone == ""|| $gender == "" || $mstatus == "" || $dob == "" || $bgroup == "" || $geno == "" || $mchal == "" ){
        $error = urlencode("all fields are required");
			header("location: ../patient/patient_Register.php?error=".$error);
			return false;
    }else{
        $name = trimData($name);
        $email = trimData($email);
        $password = trimData($password);
        $cpassword = trimData($cpassword);
        $address2 = trimData($address2);
        $phone = trimData($phone);
        $gender = trimData($gender);
        $mstatus = trimData($mstatus);
        $dob = trimData($dob);
        $bgroup = trimData($bgroup);
        $geno = trimData($geno);
        $mchal = trimData($mchal);
    }
    if($password != $cpassword){
        $error = urlencode("Password Mismatch");
			header("location: ../patient/patient_Register.php?error=".$error);
			return false;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = urlencode("please enter a proper email");
			header("location: ../patient/patient_Register.php?error=".$error);
			return false;
    }else{
        $new_pass = md5($password);
        $md = date('y-m-d');
        $check= "SELECT * FROM patient WHERE email = '$email'";
        $check_result = mysqli_query($con, $check);
        if(mysqli_num_rows($check_result) == 1){
            $error = urlencode("email address already taken");
				header("location: ../patient/patient_Register.php?error=".$error);
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
                    $filedestination = 'patientdp/'.$pic;
        
                    if(move_uploaded_file($filetmp, $filedestination)){
                        $sql = "INSERT INTO patient(name, email,password, address2, phone, gender, mstatus, dob, bgroup, genotype, mchallenge, pic, createddate)VALUES('$name', '$email','$password','$address2', '$phone', '$gender', '$mstatus', '$dob', '$bgroup', '$geno', '$mchal', '$pic', '$md')";
                        $result = mysqli_query($con, $sql);
                        if($result){
                            $success = urlencode("registration successful");
					        header("location: ../patient/login.php?success=".$success);
					     return false;
                        }else{
                            $error = urlencode("error creating admin");
					        header("location: ../patient/patient_Register.php?error=".$error);
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

<a href="../patient/login.php"></a>