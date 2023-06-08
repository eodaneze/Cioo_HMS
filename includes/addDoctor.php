<?php
	require_once('connection.php');
	
	if(isset($_POST['submit'])){

		// $name = isset($_POST['name']) ? trim($_POST['name']) : "";
    // $email = isset($_POST['email']) ? trim($_POST['email']) : "";
    // $password = isset($_POST['email']) ? trim($_POST['password']) : "";
    // $address2 = isset($_POST['address2']) ? trim($_POST['address2']) : "";
    // $mobileno = isset($_POST['mobileno']) ? trim($_POST['mobileno']) : "";
    // $dob = isset($_POST['dob']) ? trim($_POST['dob']) : "";
    // $postcode = isset($_POST['postcode']) ? trim($_POST['postcode']) : "";
    // $dept = isset($_POST['dept']) ? trim($_POST['dept']) : "";
    // $descp = isset($_POST['descp']) ? trim($_POST['descp']) : "";
    // $gender = isset($_POST['gender']) ? trim($_POST['gender']) : "";
    // $state = isset($_POST['state']) ? trim($_POST['state']) : "";
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address2 = $_POST['address2'];
    $mobileno = $_POST['mobileno'];
    $dob = $_POST['dob'];
    $postcode = $_POST['postcode'];
    $dept= $_POST['dept'];
    $descp = $_POST['descp'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
	// $hashPassword = md5($password);

		// if($name == "" || $email == "" || $address2 == "" || $mobileno == "" || $dob == "" || $postcode == "" || $dept == "" || $descp == "" || $gender == "" || $state == ""){
		// 	$error = urlencode("all fields are required");
		// 	header("location: ../add_doctor.php?error=".$error);
		// 	return false;
		// }else{
		// 	$name = trimData($name);
		// 	$email = trimData($email);
		// 	$address2 = trimData($address2);
		// 	$mobileno = trimData($mobileno);
		// 	$dob = trimData($dob);
		// 	$postcode = trimData($postcode);
		// 	$dept = trimData($dept);
		// 	$descp = trimData($descp);
		// 	$gender = trimData($gender);
		// 	$state = trimData($state);
		// }
		
		if ($_FILES['file']['name'] != '') {
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
					$filedestination = 'doctorsdp/'.$pic;
					
					if(move_uploaded_file($filetmp, $filedestination)){

						$sql = "INSERT INTO doctor(name, email, password, address2, mobileno, dob, pcode, dpic, dept, descp, gender, state)VALUES('$name', '$email', '$password', '$address2', '$mobileno', '$dob', '$postcode', '$pic', '$dept', '$descp', '$gender', '$state')";
						$result = mysqli_query($con, $sql);
						if($result){
							$success = urlencode("New Doctor have been added successfully!!");
							header("location: ../add_doctor.php?success=".$success);
							return false;
						}else{
							$error = urlencode("error creating staff");
							header("location: ../add_doctor.php?error=".$error);
							return false;
						}
					}else{
						$failed = urlencode("error uploading picture");
						header("location: ../add_doctor.php?error=".$failed);
						return false;
					}
				}else{
					$failed = urlencode("file uploaded too large");
					header("location: ../add_doctor.php?error=".$failed);
					return false;
				}
			}else{
				$failed = urlencode("unsupported file format");
				header("location: ../add_doctor.php?error=".$failed);
				return false;
			}
		}else{
			$error = urlencode('please upload a picture');
			header('location: ../add_doctor.php?error='.$error);
			return false;
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