<?php 
 require_once("./connection.php");
 if(isset($_POST['add'])){
      $med_name = $_POST['med_name'];
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
                $filedestination = 'drugdp/'.$pic;
    
                if(move_uploaded_file($filetmp, $filedestination)){
                    $md = date('Y-m-d H:i:s');
                    $sql = "INSERT INTO  medicine(med_name, med_image, createddate)VALUES('$med_name', '$pic', '$md')";
                    $result = mysqli_query($con, $sql);
                    if($result){
                        $success = urlencode("New Medicine have been added successfully");
                        header("location: ../addMedicine.php?success=".$success);
                        return false;
                    }else{
                        $error = urlencode("error adding medicine");
                        header("location: ../addMedicine.php?error=".$error);
                        return false;
                    }
                }else{
                    $failed = urlencode("error uploading image");
					header("location: ../addMedicine.php?error=".$failed);
					return false;
            }
        }else{
            $failed = urlencode("file uploaded too large");
			header("location: ../addMedicine.php?error=".$failed);
			return false;
        }
      }else{
        $failed = urlencode("unsupported file format");
        header("location: ../addMedicine.php?error=".$failed);
        return false;
      }
 }else{
    // $error = urlencode('please upload a picture');
    // header('location: ../addMedicine.php?error='.$error);
    // return false;
 }
}else{
    $error = urlencode("please login first");
		header("location: ../index.php?error=".$error);
		return false;
}

?>