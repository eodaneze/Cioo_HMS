<?php 
require_once("./connection.php");
  if(isset($_POST['book'])){
      $special = $_POST['special'];
      $doc = $_POST['doc'];
      $atime = $_POST['atime'];
      $adate = $_POST['adate'];
      $apurpose = $_POST['apurpose'];

      if($special == "" || $doc == "" || $atime == "" || $adate == "" || $apurpose == ""){
          $error = urlencode("all the fields are required");
          header('location:../patient/schedule_appointment.php?error='.$error);
      }else{
          $md = date('Y:m:d');
          $sql = "INSERT INTO appintment(doc_special, doc_name, atime, adate, apurpose, createddate)VALUES('$special', '$doc', '$atime', '$adate', '$apurpose', '$md')";
          $result = mysqli_query($con, $sql);
          if($result){
              $success = urlencode("Appointment have been booked successfully");
              header('location:../patient/schedule_appointment.php?success='.$success);
          }else{
            $error = urlencode("Appointment booking failed");
            header('location:../patient/schedule_appointment.php?error='.$error);
          }
      }
  }else{
    $error = urlencode("Login first");
    header('location:../index.php?error='.$error);
  }

?>