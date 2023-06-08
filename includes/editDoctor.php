<?php 
  require_once("./connection.php");

  if(isset($_POST['submit'])){
       $name = $_POST['name']; 
       $email = $_POST['email']; 
       $address2 = $_POST['address2']; 
       $mobileno = $_POST['mobileno']; 
       $postcode = $_POST['postcode']; 
       $dept = $_POST['dept']; 
       $descp = $_POST['descp']; 
       $id = $_POST['id'];
       $photo = $_POST['photo'];

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
                $filedestination = 'doctorsdp/'.$pic;
                
                if(move_uploaded_file($filetmp, $filedestination)){
                    $sql = "UPDATE `doctor` SET `name` = '$name', `email` = '$email', `address2` = '$address2',`mobileno` = '$mobileno', `pcode` = '$postcode', `dept` = '$dept', `descp` = '$descp', `dpic` = '$pic'";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        unlink('doctorsdp/'.$photo);
                        $success = urlencode("Doctors details updated successfully");
                        header("location: ../view_doctor.php?success=".$success."&id=".$id);
                        return false;
                    }else{
                        $error = urlencode("error updating staff");
							header("location: ../view_doctor.php?error=".$error."&id=".$id);
							return false;
                    }
                }else{
                    $failed = urlencode("error uploading picture");
						header("location: ../view_doctor.php?error=".$failed."&id=".$id);
						return false;
                }
            }else{
                $failed = urlencode("file uploaded too large");
				header("location: ../view_doctor.php?error=".$failed."&id=".$id);
				return false;
            }
        }else{
            $failed = urlencode("unsupported file format");
				header("location: ../view_doctor.php?error=".$failed."&id=".$id);
				return false;
        }
       }else{
        $sql = "UPDATE `doctor` SET `name` = '$name', `email` = '$email', `address2` = '$address2',`mobileno` = '$mobileno', `pcode` = '$postcode', `dept` = '$dept', `descp` = '$descp' WHERE `id` = '$id'";
        $result = mysqli_query($con, $sql);
        if($result){
            $success = urlencode("staff created");
				header("location: ../view_doctor.php?success=".$success."&id=".$id);
				return false;
        }else{
            $error = urlencode("error creating staff");
				header("location: ../view_doctor.php?error=".$error."&id=".$id);
				return false;
        }
       }
  }

?>